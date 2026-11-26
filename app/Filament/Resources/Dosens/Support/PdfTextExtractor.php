<?php

namespace App\Filament\Resources\Dosens\Support;

// shortcut: PDF terenkripsi atau scan gambar tanpa OCR butuh GEMINI_API_KEY di .env atau library eksternal
class PdfTextExtractor
{
    /**
     * Ekstrak teks polos dari isi biner berkas PDF tanpa dependency eksternal.
     */
    public function extractFromFile(string $path): string
    {
        if (! is_file($path) || ! is_readable($path)) {
            return '';
        }

        $binary = @file_get_contents($path);
        if (! is_string($binary) || ! str_starts_with($binary, '%PDF')) {
            return '';
        }

        return $this->extractFromBinary($binary);
    }

    public function extractFromBinary(string $binary): string
    {
        $objects = $this->parseObjects($binary);
        $fontCmaps = $this->buildFontCmaps($objects);
        $globalCmap = $this->mergeCmaps($fontCmaps);
        $resourceFontMap = $this->buildResourceFontMap($objects, $fontCmaps);

        $chunks = [];
        foreach ($objects as $object) {
            if ($object['stream'] === null) {
                continue;
            }

            $stream = $object['stream'];
            if (preg_match('/\/Type\s*\/ObjStm\b/', $object['dict']) || str_contains($stream, 'beginbfchar') || str_contains($stream, 'beginbfrange')) {
                continue;
            }

            if (preg_match('/\bBT\b.*?\bET\b/s', $stream)) {
                $chunks[] = $this->extractTextOperators($stream, $resourceFontMap, $globalCmap);
            }
        }

        $text = implode("\n", array_filter($chunks, fn (string $part): bool => trim($part) !== ''));
        $text = preg_replace("/[ \t]+\n/", "\n", $text) ?? $text;
        $text = preg_replace("/\n{3,}/", "\n\n", $text) ?? $text;

        return trim($text);
    }

    /**
     * @return array<int, array{dict: string, stream: ?string}>
     */
    private function parseObjects(string $binary): array
    {
        $objects = [];

        if (preg_match_all('/(\d+)\s+\d+\s+obj\b(.*?)endobj/s', $binary, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $id = (int) $match[1];
                $body = $match[2];
                [$dict, $stream] = $this->splitObjectBody($body);
                $objects[$id] = ['dict' => $dict, 'stream' => $stream];
            }
        }

        foreach ($objects as $object) {
            if ($object['stream'] === null || ! preg_match('/\/Type\s*\/ObjStm\b/', $object['dict'])) {
                continue;
            }

            $first = 0;
            if (preg_match('/\/First\s+(\d+)/', $object['dict'], $firstMatch)) {
                $first = (int) $firstMatch[1];
            }

            if ($first <= 0 || $first >= strlen($object['stream'])) {
                continue;
            }

            $header = substr($object['stream'], 0, $first);
            $payload = substr($object['stream'], $first);

            if (! preg_match_all('/(\d+)\s+(\d+)/', $header, $pairs, PREG_SET_ORDER)) {
                continue;
            }

            $count = count($pairs);
            for ($i = 0; $i < $count; $i++) {
                $embeddedId = (int) $pairs[$i][1];
                $start = (int) $pairs[$i][2];
                $end = ($i + 1 < $count) ? (int) $pairs[$i + 1][2] : strlen($payload);
                $slice = substr($payload, $start, max(0, $end - $start));

                $objects[$embeddedId] = ['dict' => $slice, 'stream' => null];
            }
        }

        return $objects;
    }

    /**
     * @return array{0: string, 1: ?string}
     */
    private function splitObjectBody(string $body): array
    {
        $streamPos = strpos($body, 'stream');
        if ($streamPos === false) {
            return [$body, null];
        }

        $dict = substr($body, 0, $streamPos);
        $after = substr($body, $streamPos + 6);
        if (str_starts_with($after, "\r\n")) {
            $after = substr($after, 2);
        } elseif (str_starts_with($after, "\n") || str_starts_with($after, "\r")) {
            $after = substr($after, 1);
        }

        $endPos = strrpos($after, 'endstream');
        $rawStream = $endPos !== false ? substr($after, 0, $endPos) : $after;
        $rawStream = rtrim($rawStream, "\r\n");

        if (preg_match('/\/Filter\s*(\[\s*)?\/FlateDecode\b/', $dict)) {
            $decoded = $this->inflateFlate($rawStream);
            if ($decoded !== null) {
                return [$dict, $decoded];
            }
        }

        return [$dict, $rawStream];
    }

    private function inflateFlate(string $raw): ?string
    {
        $data = @gzuncompress($raw);
        if (is_string($data)) {
            return $data;
        }

        $data = @gzinflate($raw);
        if (is_string($data)) {
            return $data;
        }

        if (strlen($raw) > 2) {
            $data = @gzinflate(substr($raw, 2));
            if (is_string($data)) {
                return $data;
            }
        }

        return null;
    }

    /**
     * @param  array<int, array{dict: string, stream: ?string}>  $objects
     * @return array<int, array<string, string>>
     */
    private function buildFontCmaps(array $objects): array
    {
        $cmaps = [];

        foreach ($objects as $id => $object) {
            $stream = $object['stream'] ?? '';
            if (! str_contains($stream, 'beginbfchar') && ! str_contains($stream, 'beginbfrange')) {
                continue;
            }

            $map = [];

            if (preg_match_all('/beginbfchar\s*(.*?)\s*endbfchar/s', $stream, $blocks)) {
                foreach ($blocks[1] as $block) {
                    if (preg_match_all('/<([0-9A-Fa-f]+)>\s*<([0-9A-Fa-f]+)>/', $block, $entries, PREG_SET_ORDER)) {
                        foreach ($entries as $entry) {
                            $src = strtoupper($entry[1]);
                            $map[$src] = $this->hexUtf16ToUtf8($entry[2]);
                        }
                    }
                }
            }

            if (preg_match_all('/beginbfrange\s*(.*?)\s*endbfrange/s', $stream, $blocks)) {
                foreach ($blocks[1] as $block) {
                    if (preg_match_all('/<([0-9A-Fa-f]+)>\s*<([0-9A-Fa-f]+)>\s*(?:<([0-9A-Fa-f]+)>|\[(.*?)\])/s', $block, $entries, PREG_SET_ORDER)) {
                        foreach ($entries as $entry) {
                            $start = hexdec($entry[1]);
                            $end = hexdec($entry[2]);
                            $padLen = strlen($entry[1]);

                            if ($end - $start > 2048 || $end < $start) {
                                continue;
                            }

                            if ($entry[3] !== '') {
                                $destCode = hexdec($entry[3]);
                                for ($code = $start; $code <= $end; $code++) {
                                    $src = strtoupper(str_pad(dechex((int) $code), $padLen, '0', STR_PAD_LEFT));
                                    $map[$src] = mb_chr((int) ($destCode + ($code - $start)), 'UTF-8') ?: '';
                                }
                            } elseif (($entry[4] ?? '') !== '') {
                                preg_match_all('/<([0-9A-Fa-f]+)>/', $entry[4], $dests);
                                foreach ($dests[1] as $idx => $destHex) {
                                    $code = $start + $idx;
                                    if ($code > $end) {
                                        break;
                                    }
                                    $src = strtoupper(str_pad(dechex((int) $code), $padLen, '0', STR_PAD_LEFT));
                                    $map[$src] = $this->hexUtf16ToUtf8($destHex);
                                }
                            }
                        }
                    }
                }
            }

            if ($map !== []) {
                $cmaps[$id] = $map;
            }
        }

        $fontMap = [];
        foreach ($objects as $fontId => $object) {
            if (preg_match('/\/ToUnicode\s+(\d+)\s+\d+\s+R/', $object['dict'], $match)) {
                $cmapId = (int) $match[1];
                if (isset($cmaps[$cmapId])) {
                    $fontMap[$fontId] = $cmaps[$cmapId];
                }
            }
        }

        // Tangkap ToUnicode langsung bila Font tidak mereferensi secara eksplisit.
        foreach ($cmaps as $cmapId => $map) {
            if (! isset($fontMap[$cmapId])) {
                $fontMap[$cmapId] = $map;
            }
        }

        return $fontMap;
    }

    /**
     * @param  array<int, array<int, array<string, string>>|array<string, string>>  $fontCmaps
     * @return array<string, string>
     */
    private function mergeCmaps(array $fontCmaps): array
    {
        $merged = [];
        foreach ($fontCmaps as $map) {
            foreach ($map as $k => $v) {
                if (! isset($merged[$k])) {
                    $merged[$k] = $v;
                }
            }
        }

        return $merged;
    }

    /**
     * @param  array<int, array{dict: string, stream: ?string}>  $objects
     * @param  array<int, array<string, string>>  $fontCmaps
     * @return array<string, array<string, string>>
     */
    private function buildResourceFontMap(array $objects, array $fontCmaps): array
    {
        $map = [];
        foreach ($objects as $object) {
            if (preg_match_all('/\/([A-Za-z0-9_+.-]+)\s+(\d+)\s+\d+\s+R/', $object['dict'], $matches, PREG_SET_ORDER)) {
                foreach ($matches as $match) {
                    $fontObjId = (int) $match[2];
                    if (isset($fontCmaps[$fontObjId])) {
                        $map[$match[1]] = $fontCmaps[$fontObjId];
                    }
                }
            }
        }

        return $map;
    }

    /**
     * @param  array<string, array<string, string>>  $resourceFontMap
     * @param  array<string, string>  $globalCmap
     */
    private function extractTextOperators(string $stream, array $resourceFontMap, array $globalCmap): string
    {
        $output = '';

        if (! preg_match_all('/\bBT\b(.*?)\bET\b/s', $stream, $blocks)) {
            return '';
        }

        foreach ($blocks[1] as $block) {
            $currentCmap = $globalCmap;
            $lastY = null;

            $pattern = '/\/([A-Za-z0-9_+.-]+)\s+[\d.]+\s+Tf|(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+Tm|(-?[\d.]+)\s+(-?[\d.]+)\s+T[dD]|\[(.*?)\]\s*TJ|(\((?:\\\\.|[^\\\\()])*\)|<[0-9A-Fa-f\s]+>)\s*(?:Tj|\'|")|\bT\*\b/s';

            if (! preg_match_all($pattern, $block, $ops, PREG_SET_ORDER)) {
                continue;
            }

            foreach ($ops as $op) {
                $raw = $op[0];

                if (($op[1] ?? '') !== '') {
                    $currentCmap = $resourceFontMap[$op[1]] ?? $globalCmap;

                    continue;
                }

                if (($op[7] ?? '') !== '') {
                    $y = (float) $op[7];
                    if ($lastY !== null && abs($y - $lastY) > 2.0) {
                        $output .= "\n";
                    } elseif ($output !== '' && ! str_ends_with($output, "\n") && ! str_ends_with($output, ' ')) {
                        $output .= ' ';
                    }
                    $lastY = $y;

                    continue;
                }

                if (($op[9] ?? '') !== '') {
                    $ty = (float) $op[9];
                    if (abs($ty) > 2.0) {
                        $output .= "\n";
                        if ($lastY !== null) {
                            $lastY += $ty;
                        }
                    } elseif ((float) ($op[8] ?? 0) > 1.5 && $output !== '' && ! str_ends_with($output, ' ') && ! str_ends_with($output, "\n")) {
                        $output .= ' ';
                    }

                    continue;
                }

                if (trim($raw) === 'T*') {
                    $output .= "\n";

                    continue;
                }

                if (($op[10] ?? '') !== '' || str_ends_with($raw, 'TJ')) {
                    $output .= $this->decodeTjArray($op[10] ?? '', $currentCmap);

                    continue;
                }

                if (($op[11] ?? '') !== '') {
                    if (str_ends_with($raw, "'") || str_ends_with($raw, '"')) {
                        $output .= "\n";
                    }
                    $output .= $this->decodeToken($op[11], $currentCmap);
                }
            }

            $output .= "\n";
        }

        return $output;
    }

    /**
     * @param  array<string, string>  $cmap
     */
    private function decodeTjArray(string $inner, array $cmap): string
    {
        $result = '';
        if (! preg_match_all('/\((?:\\\\.|[^\\\\()])*\)|<[0-9A-Fa-f\s]+>|-?[\d.]+/s', $inner, $parts)) {
            return '';
        }

        foreach ($parts[0] as $part) {
            if (str_starts_with($part, '(') || str_starts_with($part, '<')) {
                $result .= $this->decodeToken($part, $cmap);
            } elseif ((float) $part <= -120.0 && $result !== '' && ! str_ends_with($result, ' ')) {
                $result .= ' ';
            }
        }

        return $result;
    }

    /**
     * @param  array<string, string>  $cmap
     */
    private function decodeToken(string $token, array $cmap): string
    {
        if (str_starts_with($token, '<')) {
            return $this->decodeHexToken(substr($token, 1, -1), $cmap);
        }

        if (str_starts_with($token, '(')) {
            return $this->decodeLiteralToken(substr($token, 1, -1));
        }

        return '';
    }

    /**
     * @param  array<string, string>  $cmap
     */
    private function decodeHexToken(string $hex, array $cmap): string
    {
        $hex = strtoupper(preg_replace('/\s+/', '', $hex) ?? '');
        if ($hex === '') {
            return '';
        }

        if (strlen($hex) % 2 === 1) {
            $hex .= '0';
        }

        if (str_starts_with($hex, 'FEFF')) {
            return $this->hexUtf16ToUtf8(substr($hex, 4));
        }

        if ($cmap !== []) {
            $keySize = strlen((string) array_key_first($cmap));
            $keySize = in_array($keySize, [2, 4], true) ? $keySize : 4;

            if (strlen($hex) >= $keySize && strlen($hex) % $keySize === 0) {
                $out = '';
                $matched = false;
                for ($i = 0; $i < strlen($hex); $i += $keySize) {
                    $code = substr($hex, $i, $keySize);
                    if (isset($cmap[$code])) {
                        $out .= $cmap[$code];
                        $matched = true;
                    } elseif ($keySize === 4 && strlen($hex) % 2 === 0 && isset($cmap[substr($code, 0, 2)])) {
                        $out .= $cmap[substr($code, 0, 2)];
                        $matched = true;
                    }
                }

                if ($matched) {
                    return $out;
                }
            }
        }

        $rawBytes = @hex2bin($hex);
        if (! is_string($rawBytes)) {
            return '';
        }

        // Beberapa PDF menyimpan UTF-16BE tanpa BOM jika setiap byte tinggi bernilai 0x00.
        if (strlen($hex) % 4 === 0 && preg_match('/^(00[2-7][0-9A-F])+$/', $hex)) {
            return $this->hexUtf16ToUtf8($hex);
        }

        return mb_convert_encoding($rawBytes, 'UTF-8', 'Windows-1252');
    }

    private function decodeLiteralToken(string $content): string
    {
        $content = str_replace(["\\\r\n", "\\\n", "\\\r"], '', $content);

        $decoded = preg_replace_callback('/\\\\([0-7]{1,3}|n|r|t|b|f|\\\\|\(|\))/', function (array $match): string {
            $esc = $match[1];

            return match ($esc) {
                'n' => "\n",
                'r' => "\r",
                't' => "\t",
                'b' => "\x08",
                'f' => "\x0C",
                '\\', '(', ')' => $esc,
                default => chr((int) octdec($esc)),
            };
        }, $content) ?? $content;

        if (str_starts_with($decoded, "\xFE\xFF")) {
            return mb_convert_encoding(substr($decoded, 2), 'UTF-8', 'UTF-16BE');
        }

        return mb_convert_encoding($decoded, 'UTF-8', 'Windows-1252');
    }

    private function hexUtf16ToUtf8(string $hex): string
    {
        if (strlen($hex) % 2 === 1) {
            $hex = '0'.$hex;
        }

        $bytes = @hex2bin($hex);
        if (! is_string($bytes)) {
            return '';
        }

        if (strlen($bytes) % 2 === 1) {
            $bytes = "\x00".$bytes;
        }

        return mb_convert_encoding($bytes, 'UTF-8', 'UTF-16BE');
    }
}
