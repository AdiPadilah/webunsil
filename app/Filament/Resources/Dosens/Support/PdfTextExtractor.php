<?php

namespace App\Filament\Resources\Dosens\Support;

// shortcut: PDF terenkripsi atau scan gambar tanpa OCR butuh GEMINI_API_KEY di .env atau library eksternal
class PdfTextExtractor
{
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
        [$fontCmaps, $cidFontIds] = $this->buildFontCmaps($objects);
        $globalCmap = $this->mergeCmaps($fontCmaps);
        [$resourceFontMap, $cidFontNames, $xObjectMap] = $this->buildResourceMaps($objects, $fontCmaps, $cidFontIds);

        $pagesText = [];
        $visitedStreams = [];

        foreach ($objects as $object) {
            if (! preg_match('/\/Type\s*\/Page\b(?!s)/', $object['dict'])) {
                continue;
            }

            $contentIds = $this->extractContentIds($object['dict']);
            if ($contentIds === []) {
                continue;
            }

            $combinedStream = '';
            foreach ($contentIds as $cid) {
                if (isset($objects[$cid]['stream'])) {
                    $visitedStreams[$cid] = true;
                    $combinedStream .= "\n".$objects[$cid]['stream'];
                }
            }

            if (trim($combinedStream) === '') {
                continue;
            }

            $runs = $this->collectPositionedRuns(
                $combinedStream,
                [1.0, 0.0, 0.0, 1.0, 0.0, 0.0],
                $objects,
                $resourceFontMap,
                $cidFontNames,
                $xObjectMap,
                $globalCmap,
                [],
            );

            if ($runs !== []) {
                $pagesText[] = $this->reconstructPageLayout($runs);
            }
        }

        if ($pagesText === []) {
            foreach ($objects as $id => $object) {
                $stream = $object['stream'] ?? null;
                if ($stream === null || isset($visitedStreams[$id])) {
                    continue;
                }
                if (preg_match('/\/Type\s*\/ObjStm\b/', $object['dict']) || str_contains($stream, 'beginbfchar') || str_contains($stream, 'beginbfrange')) {
                    continue;
                }
                if (preg_match('/\bBT\b.*?\bET\b/s', $stream)) {
                    $runs = $this->collectPositionedRuns(
                        $stream,
                        [1.0, 0.0, 0.0, 1.0, 0.0, 0.0],
                        $objects,
                        $resourceFontMap,
                        $cidFontNames,
                        $xObjectMap,
                        $globalCmap,
                        [],
                    );
                    if ($runs !== []) {
                        $pagesText[] = $this->reconstructPageLayout($runs);
                    }
                }
            }
        }

        $text = implode("\n\n", array_filter($pagesText, fn (string $p): bool => trim($p) !== ''));
        $text = str_replace("\0", '', $text);
        $text = preg_replace('/[^\P{C}\n\t]/u', '', $text) ?? $text;
        $text = preg_replace("/[ \t]+\n/", "\n", $text) ?? $text;
        $text = preg_replace("/[ \t]{2,}/", ' ', $text) ?? $text;
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
                [$dict, $stream] = $this->splitObjectBody($match[2]);
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
                $objects[$embeddedId] = ['dict' => substr($payload, $start, max(0, $end - $start)), 'stream' => null];
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
        $rawStream = rtrim($endPos !== false ? substr($after, 0, $endPos) : $after, "\r\n");

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
        foreach ([@gzuncompress($raw), @gzinflate($raw), strlen($raw) > 2 ? @gzinflate(substr($raw, 2)) : false] as $candidate) {
            if (is_string($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    /**
     * @param  array<int, array{dict: string, stream: ?string}>  $objects
     * @return array{0: array<int, array<string, string>>, 1: array<int, bool>}
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
                            $map[strtoupper($entry[1])] = $this->hexUtf16ToUtf8($entry[2]);
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
                                    $chr = mb_chr((int) ($destCode + ($code - $start)), 'UTF-8');
                                    $map[$src] = $chr !== false ? $chr : '';
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
        $cidFonts = [];
        foreach ($objects as $fontId => $object) {
            if (preg_match('/\/ToUnicode\s+(\d+)\s+\d+\s+R/', $object['dict'], $match)) {
                $cmapId = (int) $match[1];
                if (isset($cmaps[$cmapId])) {
                    $fontMap[$fontId] = $cmaps[$cmapId];
                }
            }
            if (preg_match('/\/Subtype\s*\/Type0\b|\/Encoding\s*\/Identity-[HV]\b/', $object['dict'])) {
                $cidFonts[$fontId] = true;
            }
        }

        foreach ($cmaps as $cmapId => $map) {
            if (! isset($fontMap[$cmapId])) {
                $fontMap[$cmapId] = $map;
            }
        }

        return [$fontMap, $cidFonts];
    }

    /**
     * @param  array<int, array<string, string>>  $fontCmaps
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
     * @param  array<int, bool>  $cidFontIds
     * @return array{0: array<string, array<string, string>>, 1: array<string, bool>, 2: array<string, int>}
     */
    private function buildResourceMaps(array $objects, array $fontCmaps, array $cidFontIds): array
    {
        $fontMap = [];
        $cidNames = [];
        $xObjects = [];

        foreach ($objects as $object) {
            if (preg_match_all('/\/([A-Za-z0-9_+.-]+)\s+(\d+)\s+\d+\s+R/', $object['dict'], $matches, PREG_SET_ORDER)) {
                foreach ($matches as $match) {
                    $name = $match[1];
                    $refId = (int) $match[2];

                    if (isset($fontCmaps[$refId])) {
                        $fontMap[$name] = $fontCmaps[$refId];
                    }
                    if (isset($cidFontIds[$refId])) {
                        $cidNames[$name] = true;
                    }
                    if (isset($objects[$refId]) && preg_match('/\/Subtype\s*\/Form\b/', $objects[$refId]['dict'])) {
                        $xObjects[$name] = $refId;
                    }
                }
            }
        }

        return [$fontMap, $cidNames, $xObjects];
    }

    /**
     * @return array<int, int>
     */
    private function extractContentIds(string $pageDict): array
    {
        if (preg_match('/\/Contents\s*\[([^\]]+)\]/s', $pageDict, $arrMatch)) {
            preg_match_all('/(\d+)\s+\d+\s+R/', $arrMatch[1], $refs);

            return array_map('intval', $refs[1]);
        }

        if (preg_match('/\/Contents\s+(\d+)\s+\d+\s+R/', $pageDict, $singleMatch)) {
            return [(int) $singleMatch[1]];
        }

        return [];
    }

    /**
     * @param  array<int, float>  $ctm
     * @param  array<int, array{dict: string, stream: ?string}>  $objects
     * @param  array<string, array<string, string>>  $resourceFontMap
     * @param  array<string, bool>  $cidFontNames
     * @param  array<string, int>  $xObjectMap
     * @param  array<string, string>  $globalCmap
     * @param  array<int, bool>  $visiting
     * @return array<int, array{x: float, y: float, size: float, text: string}>
     */
    private function collectPositionedRuns(
        string $stream,
        array $ctm,
        array $objects,
        array $resourceFontMap,
        array $cidFontNames,
        array $xObjectMap,
        array $globalCmap,
        array $visiting,
    ): array {
        $runs = [];
        $stack = [];
        $inBt = false;
        $tm = [1.0, 0.0, 0.0, 1.0, 0.0, 0.0];
        $leading = 14.0;
        $currentCmap = $globalCmap;
        $currentIsCid = false;
        $fontSize = 12.0;

        $pattern = '/(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(cm|Tm)|(-?[\d.]+)\s+(-?[\d.]+)\s+(T[dD])|(-?[\d.]+)\s+TL\b|\/([A-Za-z0-9_+.-]+)\s+([\d.]+)\s+Tf|\/([A-Za-z0-9_+.-]+)\s+Do\b|\[(.*?)\]\s*TJ|(\((?:\\\\.|[^\\\\()])*\)|<[0-9A-Fa-f\s]+>)\s*(Tj|\'|")|\b(q|Q|BT|ET|T\*)\b/s';

        if (! preg_match_all($pattern, $stream, $ops, PREG_SET_ORDER)) {
            return [];
        }

        foreach ($ops as $op) {
            $raw = trim($op[0]);

            if (($op[18] ?? '') !== '') {
                $kw = $op[18];
                if ($kw === 'q') {
                    $stack[] = $ctm;
                } elseif ($kw === 'Q') {
                    $ctm = array_pop($stack) ?: [1.0, 0.0, 0.0, 1.0, 0.0, 0.0];
                } elseif ($kw === 'BT') {
                    $inBt = true;
                    $tm = [1.0, 0.0, 0.0, 1.0, 0.0, 0.0];
                } elseif ($kw === 'ET') {
                    $inBt = false;
                } elseif ($kw === 'T*' && $inBt) {
                    $tm[4] += -$leading * $tm[2];
                    $tm[5] += -$leading * $tm[3];
                }

                continue;
            }

            if (($op[7] ?? '') === 'cm') {
                $ctm = $this->multiplyMatrix(
                    [(float) $op[1], (float) $op[2], (float) $op[3], (float) $op[4], (float) $op[5], (float) $op[6]],
                    $ctm,
                );

                continue;
            }

            if (($op[14] ?? '') !== '') {
                $xObjId = $xObjectMap[$op[14]] ?? null;
                if ($xObjId !== null && ! isset($visiting[$xObjId]) && count($visiting) < 6 && isset($objects[$xObjId]['stream'])) {
                    $xCtm = $ctm;
                    if (preg_match('/\/Matrix\s*\[\s*(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s+(-?[\d.]+)\s*\]/', $objects[$xObjId]['dict'], $mm)) {
                        $xCtm = $this->multiplyMatrix([(float) $mm[1], (float) $mm[2], (float) $mm[3], (float) $mm[4], (float) $mm[5], (float) $mm[6]], $ctm);
                    }
                    $visiting[$xObjId] = true;
                    foreach ($this->collectPositionedRuns((string) $objects[$xObjId]['stream'], $xCtm, $objects, $resourceFontMap, $cidFontNames, $xObjectMap, $globalCmap, $visiting) as $subRun) {
                        $runs[] = $subRun;
                    }
                }

                continue;
            }

            if (! $inBt) {
                continue;
            }

            if (($op[7] ?? '') === 'Tm') {
                $tm = [(float) $op[1], (float) $op[2], (float) $op[3], (float) $op[4], (float) $op[5], (float) $op[6]];

                continue;
            }

            if (($op[10] ?? '') !== '') {
                $tx = (float) $op[8];
                $ty = (float) $op[9];
                if ($op[10] === 'TD') {
                    $leading = -$ty;
                }
                $tm[4] += $tx * $tm[0] + $ty * $tm[2];
                $tm[5] += $tx * $tm[1] + $ty * $tm[3];

                continue;
            }

            if (($op[11] ?? '') !== '') {
                $leading = (float) $op[11];

                continue;
            }

            if (($op[12] ?? '') !== '') {
                $currentCmap = $resourceFontMap[$op[12]] ?? $globalCmap;
                $currentIsCid = $cidFontNames[$op[12]] ?? false;
                $fontSize = max(4.0, (float) ($op[13] ?? 12.0));

                continue;
            }

            if (($op[15] ?? '') !== '' || str_ends_with($raw, 'TJ')) {
                $text = $this->decodeTjArray($op[15] ?? '', $currentCmap, $currentIsCid);
                if ($text !== '') {
                    $m = $this->multiplyMatrix($tm, $ctm);
                    $runs[] = [
                        'x' => $m[4],
                        'y' => $m[5],
                        'size' => max(4.0, $fontSize * hypot($m[0], $m[1])),
                        'text' => $text,
                    ];
                }

                continue;
            }

            if (($op[16] ?? '') !== '') {
                if (($op[17] ?? '') === "'" || ($op[17] ?? '') === '"') {
                    $tm[4] += -$leading * $tm[2];
                    $tm[5] += -$leading * $tm[3];
                }
                $text = $this->decodeToken($op[16], $currentCmap, $currentIsCid);
                if ($text !== '') {
                    $m = $this->multiplyMatrix($tm, $ctm);
                    $runs[] = [
                        'x' => $m[4],
                        'y' => $m[5],
                        'size' => max(4.0, $fontSize * hypot($m[0], $m[1])),
                        'text' => $text,
                    ];
                }
            }
        }

        return $runs;
    }

    /**
     * Susun urutan baca 2D: gabung karakter satu baris, pisah header + 2 kolom bila terdeteksi celah kolom jelas.
     *
     * @param  array<int, array{x: float, y: float, size: float, text: string}>  $runs
     */
    private function reconstructPageLayout(array $runs): string
    {
        $gutter = $this->detectColumnGutter($runs);

        if ($gutter === null) {
            return $this->linesFromRuns($runs);
        }

        $splitX = $gutter['split_x'];
        $headerBottomY = $gutter['header_bottom_y'];

        $header = [];
        $left = [];
        $right = [];

        foreach ($runs as $run) {
            if ($headerBottomY !== null && $run['y'] >= $headerBottomY) {
                $header[] = $run;
            } elseif ($run['x'] < $splitX) {
                $left[] = $run;
            } else {
                $right[] = $run;
            }
        }

        return implode("\n", array_filter([
            $this->linesFromRuns($header),
            $this->linesFromRuns($left),
            $this->linesFromRuns($right),
        ], fn (string $chunk): bool => trim($chunk) !== ''));
    }

    /**
     * @param  array<int, array{x: float, y: float, size: float, text: string}>  $runs
     * @return array{split_x: float, header_bottom_y: ?float}|null
     */
    private function detectColumnGutter(array $runs): ?array
    {
        if (count($runs) < 20) {
            return null;
        }

        $nonEmpty = array_values(array_filter($runs, fn (array $r): bool => trim($r['text']) !== ''));
        if (count($nonEmpty) < 20) {
            return null;
        }

        $minX = min(array_column($nonEmpty, 'x'));
        $maxX = max(array_column($nonEmpty, 'x'));
        $spanX = $maxX - $minX;
        $minY = min(array_column($nonEmpty, 'y'));
        $maxY = max(array_column($nonEmpty, 'y'));
        $spanY = $maxY - $minY;

        if ($spanX < 180.0 || $spanY < 100.0) {
            return null;
        }

        // Cari gutter vertikal di 75% area bawah halaman (bebas dari judul/subjudul header).
        $sampleTopY = $minY + $spanY * 0.75;
        $sampleRuns = array_values(array_filter($nonEmpty, fn (array $r): bool => $r['y'] <= $sampleTopY));
        if (count($sampleRuns) < 12) {
            return null;
        }

        $xs = array_column($sampleRuns, 'x');
        sort($xs);
        $bestGap = 0.0;
        $bestMid = null;
        $searchLow = $minX + $spanX * 0.28;
        $searchHigh = $minX + $spanX * 0.72;

        for ($i = 0; $i < count($xs) - 1; $i++) {
            $mid = ($xs[$i] + $xs[$i + 1]) / 2.0;
            $gap = $xs[$i + 1] - $xs[$i];
            if ($mid >= $searchLow && $mid <= $searchHigh && $gap > $bestGap) {
                $bestGap = $gap;
                $bestMid = $mid;
            }
        }

        if ($bestMid === null || $bestGap < 18.0) {
            return null;
        }

        // Tentukan batas bawah header: baris paling bawah di bagian atas halaman yang teksnya menyeberangi gutter.
        $headerBottomY = null;
        $byY = [];
        foreach ($nonEmpty as $r) {
            $bucket = (int) round($r['y'] / 6.0);
            $byY[$bucket][] = $r;
        }
        krsort($byY);

        foreach ($byY as $lineRuns) {
            if (min(array_column($lineRuns, 'y')) < $minY + $spanY * 0.55) {
                break;
            }

            $lineXs = array_column($lineRuns, 'x');
            sort($lineXs);
            $bridgesGutter = false;
            if ($lineXs[0] < $bestMid && end($lineXs) > $bestMid) {
                $crossGap = end($lineXs) - $lineXs[0];
                for ($j = 0; $j < count($lineXs) - 1; $j++) {
                    if ($lineXs[$j] <= $bestMid && $lineXs[$j + 1] >= $bestMid) {
                        $crossGap = $lineXs[$j + 1] - $lineXs[$j];
                        break;
                    }
                }
                $bridgesGutter = $crossGap < $bestGap * 0.7;
            }

            if ($bridgesGutter) {
                $rowMinY = min(array_column($lineRuns, 'y')) - 4.0;
                $headerBottomY = $headerBottomY === null ? $rowMinY : min($headerBottomY, $rowMinY);
            }
        }

        $leftCount = count(array_filter($nonEmpty, fn (array $r): bool => ($headerBottomY === null || $r['y'] < $headerBottomY) && $r['x'] < $bestMid));
        $rightCount = count(array_filter($nonEmpty, fn (array $r): bool => ($headerBottomY === null || $r['y'] < $headerBottomY) && $r['x'] >= $bestMid));

        if ($leftCount < 5 || $rightCount < 5) {
            return null;
        }

        return ['split_x' => $bestMid, 'header_bottom_y' => $headerBottomY];
    }

    /**
     * @param  array<int, array{x: float, y: float, size: float, text: string}>  $runs
     */
    private function linesFromRuns(array $runs): string
    {
        if ($runs === []) {
            return '';
        }

        usort($runs, function (array $a, array $b): int {
            if (abs($a['y'] - $b['y']) > max(3.0, min($a['size'], $b['size']) * 0.45)) {
                return $b['y'] <=> $a['y'];
            }

            return $a['x'] <=> $b['x'];
        });

        $lines = [];
        $currentLine = [];
        $currentY = null;
        $currentTol = 4.0;

        foreach ($runs as $run) {
            $tol = max(3.0, $run['size'] * 0.45);
            if ($currentY === null || abs($run['y'] - $currentY) <= max($tol, $currentTol)) {
                $currentLine[] = $run;
                $currentY = $currentY === null ? $run['y'] : ($currentY + $run['y']) / 2.0;
                $currentTol = $tol;
            } else {
                $lines[] = $currentLine;
                $currentLine = [$run];
                $currentY = $run['y'];
                $currentTol = $tol;
            }
        }

        if ($currentLine !== []) {
            $lines[] = $currentLine;
        }

        $textLines = [];
        foreach ($lines as $lineRuns) {
            usort($lineRuns, fn (array $a, array $b): int => $a['x'] <=> $b['x']);
            $lineText = '';
            $prevRun = null;

            foreach ($lineRuns as $run) {
                $chunk = $run['text'];
                if ($prevRun !== null && $lineText !== '' && ! str_ends_with($lineText, ' ') && ! str_starts_with($chunk, ' ')) {
                    $prevLen = mb_strlen(trim($prevRun['text']));
                    $charFactor = $prevLen <= 1 ? 1.05 : 0.60;
                    $approxEnd = $prevRun['x'] + $prevLen * $prevRun['size'] * $charFactor;
                    if ($run['x'] - $approxEnd > $prevRun['size'] * 0.35) {
                        $lineText .= ' ';
                    }
                }
                $lineText .= $chunk;
                $prevRun = $run;
            }

            $cleaned = trim(preg_replace('/[ \t]+/', ' ', $lineText) ?? '');
            if ($cleaned !== '') {
                $textLines[] = $cleaned;
            }
        }

        return implode("\n", $textLines);
    }

    /**
     * @param  array<int, float>  $m1
     * @param  array<int, float>  $m2
     * @return array<int, float>
     */
    private function multiplyMatrix(array $m1, array $m2): array
    {
        return [
            $m1[0] * $m2[0] + $m1[1] * $m2[2],
            $m1[0] * $m2[1] + $m1[1] * $m2[3],
            $m1[2] * $m2[0] + $m1[3] * $m2[2],
            $m1[2] * $m2[1] + $m1[3] * $m2[3],
            $m1[4] * $m2[0] + $m1[5] * $m2[2] + $m2[4],
            $m1[4] * $m2[1] + $m1[5] * $m2[3] + $m2[5],
        ];
    }

    /**
     * @param  array<string, string>  $cmap
     */
    private function decodeTjArray(string $inner, array $cmap, bool $isCid): string
    {
        $result = '';
        if (! preg_match_all('/\((?:\\\\.|[^\\\\()])*\)|<[0-9A-Fa-f\s]+>|-?[\d.]+/s', $inner, $parts)) {
            return '';
        }

        foreach ($parts[0] as $part) {
            if (str_starts_with($part, '(') || str_starts_with($part, '<')) {
                $result .= $this->decodeToken($part, $cmap, $isCid);
            } elseif ((float) $part <= -120.0 && $result !== '' && ! str_ends_with($result, ' ')) {
                $result .= ' ';
            }
        }

        return $result;
    }

    /**
     * @param  array<string, string>  $cmap
     */
    private function decodeToken(string $token, array $cmap, bool $isCid): string
    {
        if (str_starts_with($token, '<')) {
            return $this->decodeHexToken(substr($token, 1, -1), $cmap);
        }

        if (str_starts_with($token, '(')) {
            return $this->decodeLiteralToken(substr($token, 1, -1), $cmap, $isCid);
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

        if (strlen($hex) % 4 === 0 && preg_match('/^(00[2-7][0-9A-F])+$/', $hex)) {
            return $this->hexUtf16ToUtf8($hex);
        }

        return mb_convert_encoding($rawBytes, 'UTF-8', 'Windows-1252');
    }

    /**
     * @param  array<string, string>  $cmap
     */
    private function decodeLiteralToken(string $content, array $cmap, bool $isCid): string
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

        if ($isCid && $cmap !== [] && $decoded !== '') {
            return $this->decodeHexToken(bin2hex($decoded), $cmap);
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
