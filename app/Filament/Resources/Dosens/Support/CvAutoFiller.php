<?php

namespace App\Filament\Resources\Dosens\Support;

use App\Models\Dosen;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Throwable;
use ZipArchive;

class CvAutoFiller
{
    public function __construct(
        private readonly PdfTextExtractor $pdfExtractor = new PdfTextExtractor,
    ) {}

    /**
     * @return array{
     *     source: string,
     *     text_length: int,
     *     fields: array<string, mixed>,
     *     filled_labels: array<int, string>,
     * }
     */
    public function extractFromUploadedFile(UploadedFile $file): array
    {
        $realPath = $file->getRealPath();
        $mime = $file->getMimeType();

        if (is_string($realPath) && is_file($realPath) && (@filesize($realPath) ?: 0) > 0) {
            return $this->extractFromPath($realPath, $mime);
        }

        $bytes = @file_get_contents($realPath ?: '') ?: (method_exists($file, 'get') ? $file->get() : '');
        if (! is_string($bytes) || $bytes === '') {
            return ['source' => 'empty', 'text_length' => 0, 'fields' => [], 'filled_labels' => []];
        }

        $tmpPath = tempnam(sys_get_temp_dir(), 'cv_');
        if (! is_string($tmpPath)) {
            return ['source' => 'empty', 'text_length' => 0, 'fields' => [], 'filled_labels' => []];
        }

        @file_put_contents($tmpPath, $bytes);

        try {
            return $this->extractFromPath($tmpPath, $mime);
        } finally {
            @unlink($tmpPath);
        }
    }

    /**
     * @return array{
     *     source: string,
     *     text_length: int,
     *     fields: array<string, mixed>,
     *     filled_labels: array<int, string>,
     * }
     */
    public function extractFromPath(string $path, ?string $mimeType = null): array
    {
        if (! is_file($path) || ! is_readable($path)) {
            return ['source' => 'empty', 'text_length' => 0, 'fields' => [], 'filled_labels' => []];
        }

        $detectedMime = $mimeType ?: $this->guessMimeType($path);

        if ($geminiFields = $this->extractWithGemini($path, $detectedMime)) {
            $normalized = $this->normalizeFields($geminiFields);

            return [
                'source' => 'gemini',
                'text_length' => 1000,
                'fields' => $normalized,
                'filled_labels' => $this->summarizeFilled($normalized),
            ];
        }

        $text = $this->extractRawText($path, $detectedMime);
        if (mb_strlen(trim($text)) < 40) {
            return [
                'source' => 'empty',
                'text_length' => mb_strlen(trim($text)),
                'fields' => [],
                'filled_labels' => [],
            ];
        }

        $parsed = $this->parseTextToFields($text);
        $normalized = $this->normalizeFields($parsed);

        return [
            'source' => 'local',
            'text_length' => mb_strlen(trim($text)),
            'fields' => $normalized,
            'filled_labels' => $this->summarizeFilled($normalized),
        ];
    }

    public function extractRawText(string $path, string $mimeType): string
    {
        if (str_contains($mimeType, 'wordprocessingml') || str_ends_with(strtolower($path), '.docx')) {
            return $this->extractDocxText($path);
        }

        if ($mimeType === 'text/plain' || str_ends_with(strtolower($path), '.txt')) {
            return trim((string) @file_get_contents($path));
        }

        return $this->pdfExtractor->extractFromFile($path);
    }

    private function extractDocxText(string $path): string
    {
        if (! class_exists(ZipArchive::class)) {
            return '';
        }

        $zip = new ZipArchive;
        if ($zip->open($path) !== true) {
            return '';
        }

        $xml = $zip->getFromName('word/document.xml');
        $zip->close();

        if (! is_string($xml) || $xml === '') {
            return '';
        }

        $dom = new DOMDocument;
        if (! @$dom->loadXML($xml)) {
            return '';
        }

        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('w', 'http://schemas.openxmlformats.org/wordprocessingml/2006/main');

        $lines = [];
        foreach ($xpath->query('//w:p') ?: [] as $paragraph) {
            $text = trim(preg_replace('/\s+/u', ' ', (string) $paragraph->textContent) ?? '');
            if ($text !== '') {
                $lines[] = $text;
            }
        }

        return implode("\n", $lines);
    }

    private function guessMimeType(string $path): string
    {
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        if ($ext === 'docx') {
            return 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
        }
        if ($ext === 'txt') {
            return 'text/plain';
        }

        $bytes = @file_get_contents($path, false, null, 0, 5);
        if (is_string($bytes) && str_starts_with($bytes, 'PK')) {
            return 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
        }

        return 'application/pdf';
    }

    /**
     * @return array<string, mixed>|null
     */
    private function extractWithGemini(string $path, string $mimeType): ?array
    {
        $apiKey = (string) config('services.gemini.key');
        if ($apiKey === '' || (@filesize($path) ?: 0) > 15 * 1024 * 1024) {
            return null;
        }

        $raw = @file_get_contents($path);
        if (! is_string($raw) || $raw === '') {
            return null;
        }

        $model = (string) (config('services.gemini.model') ?: 'gemini-4-hydrogen');

        try {
            $response = Http::timeout(45)
                ->withHeaders(['x-goog-api-key' => $apiKey])
                ->post('https://generativelanguage.googleapis.com/v1/interactions', [
                    'model' => $model,
                    'store' => false,
                    'system_instruction' => 'Ekstrak biodata dosen dari dokumen CV ini sesuai fakta pada CV tanpa mengarang data. Gunakan bahasa Indonesia formal untuk biografi jika CV berbahasa Indonesia.',
                    'input' => [
                        [
                            'type' => 'document',
                            'data' => base64_encode($raw),
                            'mime_type' => $mimeType,
                        ],
                        [
                            'type' => 'text',
                            'text' => 'Ekstrak seluruh informasi CV dosen ke JSON terstruktur sesuai schema.',
                        ],
                    ],
                    'response_format' => [
                        'type' => 'text',
                        'mime_type' => 'application/json',
                        'schema' => $this->geminiSchema(),
                    ],
                ]);

            if (! $response->successful()) {
                return null;
            }

            $steps = $response->json('steps') ?? [];
            foreach (array_reverse($steps) as $step) {
                if (($step['type'] ?? null) !== 'model_output') {
                    continue;
                }
                foreach ($step['content'] ?? [] as $content) {
                    if (($content['type'] ?? null) === 'text' && is_string($content['text'] ?? null)) {
                        $decoded = json_decode($content['text'], true);
                        if (is_array($decoded)) {
                            return $decoded;
                        }
                    }
                }
            }
        } catch (Throwable) {
            return null;
        }

        return null;
    }

    /**
     * @return array<string, mixed>
     */
    private function geminiSchema(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'nama' => ['type' => 'string'],
                'kbk' => ['type' => 'string', 'enum' => ['struktur', 'keairan', 'geoteknik', 'transportasi', 'manajemen']],
                'badge_peran' => ['type' => 'string'],
                'jabatan_akademik' => ['type' => 'string'],
                'jabatan_fungsional' => ['type' => 'string'],
                'nidn' => ['type' => 'string'],
                'homebase' => ['type' => 'string'],
                'email' => ['type' => 'string'],
                'telepon' => ['type' => 'string'],
                'biografi' => ['type' => 'string'],
                'fokus_keahlian' => ['type' => 'array', 'items' => ['type' => 'string']],
                'tautan_riset' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'platform' => ['type' => 'string', 'enum' => ['orcid', 'sinta', 'scholar', 'scopus', 'researchgate', 'linkedin', 'instagram', 'website', 'lainnya']],
                            'label' => ['type' => 'string'],
                            'nilai' => ['type' => 'string'],
                            'url' => ['type' => 'string'],
                        ],
                    ],
                ],
                'pendidikan' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'jenjang' => ['type' => 'string'],
                            'periode' => ['type' => 'string'],
                            'institusi' => ['type' => 'string'],
                            'prodi' => ['type' => 'string'],
                            'predikat' => ['type' => 'string'],
                        ],
                    ],
                ],
                'pengalaman_kerja' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'tag' => ['type' => 'string'],
                            'jabatan' => ['type' => 'string'],
                            'instansi' => ['type' => 'string'],
                            'periode' => ['type' => 'string'],
                            'lokasi' => ['type' => 'string'],
                            'deskripsi' => ['type' => 'string'],
                        ],
                    ],
                ],
                'penghargaan' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'meta' => ['type' => 'string'],
                            'judul' => ['type' => 'string'],
                            'deskripsi' => ['type' => 'string'],
                        ],
                    ],
                ],
                'pelatihan' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'nama' => ['type' => 'string'],
                            'penyelenggara' => ['type' => 'string'],
                            'tahun' => ['type' => 'string'],
                        ],
                    ],
                ],
                'pengajaran' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'semester' => ['type' => 'string'],
                            'mata_kuliah' => ['type' => 'array', 'items' => ['type' => 'string']],
                        ],
                    ],
                ],
                'publikasi' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'jenis' => ['type' => 'string'],
                            'tahun' => ['type' => 'string'],
                            'judul' => ['type' => 'string'],
                            'penulis' => ['type' => 'string'],
                            'jurnal' => ['type' => 'string'],
                            'volume' => ['type' => 'string'],
                            'badge_label' => ['type' => 'string'],
                            'doi_label' => ['type' => 'string'],
                            'doi_url' => ['type' => 'string'],
                        ],
                    ],
                ],
                'konferensi' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'acara' => ['type' => 'string'],
                            'tahun' => ['type' => 'string'],
                            'judul' => ['type' => 'string'],
                            'penulis' => ['type' => 'string'],
                            'lokasi' => ['type' => 'string'],
                        ],
                    ],
                ],
                'pengabdian_list' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'tahun' => ['type' => 'string'],
                            'judul' => ['type' => 'string'],
                            'keterangan' => ['type' => 'string'],
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function parseTextToFields(string $text): array
    {
        $text = str_replace(["\r\n", "\r"], "\n", $text);
        $lines = array_values(array_filter(array_map(
            fn (string $line): string => trim(preg_replace('/\s+/u', ' ', $line) ?? ''),
            explode("\n", $text),
        ), fn (string $line): bool => $line !== ''));

        $sections = $this->splitSections($lines);
        $headerLines = $sections['__header'] ?? array_slice($lines, 0, 12);
        $fullText = implode("\n", $lines);

        $nama = $this->extractName($headerLines, $fullText);
        $email = $this->extractEmail($fullText);
        $telepon = $this->extractPhone($fullText);
        $nidn = $this->extractNidn($fullText);
        $jabatanFungsional = $this->extractFunctionalRank($fullText);
        $jabatanAkademik = $this->extractAcademicRole($headerLines, $fullText);
        $homebase = $this->extractHomebase($headerLines, $fullText);
        $tautanRiset = $this->extractResearchLinks($fullText);
        $biografi = $this->extractBiography($sections['biografi'] ?? []);
        $fokusKeahlian = $this->extractFocusTags($sections['keahlian'] ?? []);
        $keahlianGrup = $this->extractSoftwareGroups($sections['software'] ?? []);
        $pendidikan = $this->extractEducation($sections['pendidikan'] ?? []);
        $pengalaman = $this->extractExperience($sections['pengalaman'] ?? []);
        $penghargaan = $this->extractAwards($sections['penghargaan'] ?? []);
        $pelatihan = $this->extractTrainings($sections['pelatihan'] ?? []);
        $pengajaran = $this->extractTeaching($sections['pengajaran'] ?? []);
        [$publikasi, $konferensi, $pengabdian] = $this->extractPublicationsAndOthers(
            $sections['publikasi'] ?? [],
            $sections['konferensi'] ?? [],
            $sections['pengabdian'] ?? [],
        );

        $kbk = $this->inferKbk($fullText);

        return array_filter([
            'nama' => $nama,
            'kbk' => $kbk,
            'badge_peran' => $jabatanAkademik ? (str_contains(strtolower($jabatanAkademik), 'ketua') ? 'Ketua Program Studi' : 'Dosen Tetap') : null,
            'jabatan_akademik' => $jabatanAkademik,
            'jabatan_fungsional' => $jabatanFungsional,
            'nidn' => $nidn,
            'homebase' => $homebase,
            'email' => $email,
            'telepon' => $telepon,
            'tautan_riset' => $tautanRiset,
            'biografi' => $biografi,
            'fokus_keahlian' => $fokusKeahlian,
            'keahlian_grup' => $keahlianGrup,
            'pendidikan' => $pendidikan,
            'pengalaman_kerja' => $pengalaman,
            'penghargaan' => $penghargaan,
            'pelatihan' => $pelatihan,
            'pengajaran' => $pengajaran,
            'publikasi' => $publikasi,
            'konferensi' => $konferensi,
            'pengabdian_list' => $pengabdian,
        ], fn (mixed $val): bool => $val !== null && $val !== '' && $val !== []);
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<string, array<int, string>>
     */
    private function splitSections(array $lines): array
    {
        $sections = ['__header' => []];
        $current = '__header';

        foreach ($lines as $line) {
            $detected = $this->detectSectionKey($line);
            if ($detected !== null) {
                $current = $detected;
                $sections[$current] ??= [];

                continue;
            }

            $sections[$current][] = $line;
        }

        return $sections;
    }

    private function detectSectionKey(string $line): ?string
    {
        $clean = trim(preg_replace('/^[\W\d.]+|[:\s]+$/u', '', $line) ?? '');
        if ($clean === '' || mb_strlen($clean) > 70) {
            return null;
        }

        $lower = mb_strtolower($clean);
        $isHeadingStyle = ($line === mb_strtoupper($line, 'UTF-8') && preg_match('/[A-Z]/', $line))
            || mb_strlen($clean) <= 45;

        if (! $isHeadingStyle) {
            return null;
        }

        if (preg_match('/^(identitas akademik|data pribadi|informasi kontak|personal details|identitas diri)$/u', $lower)) {
            return 'identitas';
        }
        if (preg_match('/^(profil akademik|profil|biografi|tentang saya|ringkasan profil|summary|about me)$/u', $lower)) {
            return 'biografi';
        }
        if (preg_match('/^(riwayat pendidikan|pendidikan formal|pendidikan|education|latar belakang pendidikan)$/u', $lower)) {
            return 'pendidikan';
        }
        if (preg_match('/^(bidang keahlian.*|fokus keilmuan.*|minat riset.*|kompetensi utama|research interests?)$/u', $lower)) {
            return 'keahlian';
        }
        if (preg_match('/^(keahlian perangkat lunak.*|software|keterampilan teknis|technical skills)$/u', $lower)) {
            return 'software';
        }
        if (preg_match('/^(pengalaman akademik.*|pengalaman kerja.*|riwayat pekerjaan.*|pengalaman profesional|work experience|career history)$/u', $lower)) {
            return 'pengalaman';
        }
        if (preg_match('/^(penghargaan.*|prestasi.*|awards?|honors?)$/u', $lower)) {
            return 'penghargaan';
        }
        if (preg_match('/^(sertifikasi.*|pelatihan.*|kursus.*|training|certifications?)$/u', $lower)) {
            return 'pelatihan';
        }
        if (preg_match('/^(riwayat pengajaran|pengajaran|mata kuliah.*|teaching)$/u', $lower)) {
            return 'pengajaran';
        }
        if (preg_match('/^(publikasi ilmiah.*|daftar publikasi.*|publikasi|penelitian.*|karya ilmiah.*|publications?)$/u', $lower)) {
            return 'publikasi';
        }
        if (preg_match('/^(konferensi.*|seminar ilmiah.*|conferences?)$/u', $lower)) {
            return 'konferensi';
        }
        if (preg_match('/^(pengabdian.*|community service)$/u', $lower)) {
            return 'pengabdian';
        }

        return null;
    }

    /**
     * @param  array<int, string>  $headerLines
     */
    private function extractName(array $headerLines, string $fullText): ?string
    {
        if (preg_match('/^Nama(?:\s+Lengkap)?\s*:\s*(.+)$/mi', $fullText, $match)) {
            return trim($match[1]);
        }

        foreach ($headerLines as $line) {
            $lower = mb_strtolower($line);
            if (preg_match('/^(curriculum vitae|daftar riwayat hidup|cv|profil dosen|biodata|identitas|email|telepon|hp|nidn|nip|nuptk)/i', $lower)) {
                continue;
            }
            if (str_contains($line, '@') || preg_match('/^\+?\d[\d\s-]{6,}$/', $line)) {
                continue;
            }
            if (preg_match('/^(?:Prof\.|Dr\.|Ir\.|H\.|Hj\.)|,\s*(?:S\.T\.|S\.Pd\.|M\.T\.|M\.Eng\.|M\.Sc\.|M\.Si\.|Ph\.D\.|IPM|IPU)/i', $line)) {
                return $line;
            }
            if (mb_strlen($line) >= 5 && mb_strlen($line) <= 90 && ! str_contains($line, ':')) {
                return $line;
            }
        }

        return null;
    }

    private function extractEmail(string $text): ?string
    {
        if (preg_match('/[A-Z0-9._%+-]+@unsil\.ac\.id/i', $text, $match)) {
            return strtolower($match[0]);
        }
        if (preg_match('/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i', $text, $match)) {
            return strtolower($match[0]);
        }

        return null;
    }

    private function extractPhone(string $text): ?string
    {
        if (preg_match('/(?:Telepon|Telp|HP|WA|WhatsApp|Phone)\s*[:\-]?\s*(\+?62[\d\s\-]{8,15}|08[\d\s\-]{8,14})/i', $text, $match)) {
            return preg_replace('/\s+/', '', trim($match[1]));
        }
        if (preg_match('/(?<!\d)(08\d{8,11}|\+62\d{8,12})(?!\d)/', $text, $match)) {
            return $match[1];
        }

        return null;
    }

    private function extractNidn(string $text): ?string
    {
        if (preg_match('/\b(?:NIDN|NUPTK|NIP)\b\s*[:\-]?\s*([0-9][0-9\s\-]{6,22}[0-9])/i', $text, $match)) {
            return preg_replace('/[\s\-]+/', '', trim($match[1]));
        }

        return null;
    }

    private function extractFunctionalRank(string $text): ?string
    {
        if (preg_match('/\b(Guru Besar|Profesor|Lektor Kepala|Lektor|Asisten Ahli|Tenaga Pengajar)\b/i', $text, $match)) {
            return ucwords(strtolower($match[1]));
        }

        return null;
    }

    /**
     * @param  array<int, string>  $headerLines
     */
    private function extractAcademicRole(array $headerLines, string $text): ?string
    {
        if (preg_match('/(?:Jabatan(?:\s+Akademik|\s+Struktural)?)\s*:\s*(.+)$/mi', $text, $match)) {
            return trim($match[1]);
        }

        foreach ($headerLines as $line) {
            if (preg_match('/(Ketua Program Studi[^|•]*|Dosen(?:\s+Tetap)?\s+Program Studi[^|•]*)/i', $line, $match)) {
                return trim($match[1]);
            }
        }

        return null;
    }

    /**
     * @param  array<int, string>  $headerLines
     */
    private function extractHomebase(array $headerLines, string $text): ?string
    {
        if (preg_match('/Homebase\s*:\s*(.+)$/mi', $text, $match)) {
            return trim($match[1]);
        }

        if (str_contains(mb_strtolower($text), 'universitas siliwangi')) {
            return 'Fakultas Teknik • Universitas Siliwangi';
        }

        foreach ($headerLines as $line) {
            if (preg_match('/(Fakultas\s+[^|\n]+)/i', $line, $match)) {
                return trim($match[1]);
            }
        }

        return null;
    }

    private function inferKbk(string $text): ?string
    {
        $lower = mb_strtolower($text);

        $scores = [
            'keairan' => preg_match_all('/\b(sumber daya air|hidrolika|hidrologi|sungai|banjir|pantai|pesisir|sanitasi|air bersih|air limbah|drainase|irigasi|swmm|hec-ras|hec-hms)\b/i', $lower),
            'struktur' => preg_match_all('/\b(struktur|jembatan|beton|baja|gempa|seismic|retrofit|etabs|sap2000|bahan bangunan|konstruksi gedung)\b/i', $lower),
            'geoteknik' => preg_match_all('/\b(geoteknik|mekanika tanah|pondasi|fondasi|lereng|plaxis|timbunan|penahan tanah)\b/i', $lower),
            'transportasi' => preg_match_all('/\b(transportasi|jalan raya|perkerasan|aspal|lalu lintas|geometrik jalan|pelabuhan|bandara)\b/i', $lower),
            'manajemen' => preg_match_all('/\b(manajemen konstruksi|rab|estimasi biaya|supply chain|bim|cubicost|jadwal proyek|kontrak konstruksi)\b/i', $lower),
        ];

        arsort($scores);
        $topKey = array_key_first($scores);

        return ($topKey !== null && $scores[$topKey] > 0) ? $topKey : null;
    }

    /**
     * @return array<int, array{platform: string, label: string, nilai: string, url: ?string}>
     */
    private function extractResearchLinks(string $text): array
    {
        $links = [];

        if (preg_match('/(?:orcid\.org\/|ORCID(?:\s*iD)?\s*[:\-]?\s*)(\d{4}-\d{4}-\d{4}-[\dX]{4})/i', $text, $m)) {
            $id = strtoupper($m[1]);
            $links[] = ['platform' => 'orcid', 'label' => 'ORCID ID', 'nilai' => $id, 'url' => 'https://orcid.org/'.$id];
        }

        if (preg_match('/SINTA(?:\s*ID)?\s*[:\-]?\s*(\d{5,9})/i', $text, $m)) {
            $id = $m[1];
            $links[] = ['platform' => 'sinta', 'label' => 'SINTA ID', 'nilai' => $id, 'url' => 'https://sinta.kemdikbud.go.id/authors/profile/'.$id];
        }

        if (preg_match('/https?:\/\/scholar\.google\.[^\s)]+/i', $text, $m)) {
            $url = rtrim($m[0], '.,)');
            parse_str((string) parse_url($url, PHP_URL_QUERY), $q);
            $links[] = ['platform' => 'scholar', 'label' => 'Google Scholar', 'nilai' => $q['user'] ?? 'Profil Scholar', 'url' => $url];
        } elseif (preg_match('/Google\s+Scholar\s*[:\-]?\s*([A-Za-z0-9_-]{8,20})/i', $text, $m)) {
            $id = $m[1];
            $links[] = ['platform' => 'scholar', 'label' => 'Google Scholar', 'nilai' => $id, 'url' => 'https://scholar.google.com/citations?user='.$id];
        }

        if (preg_match('/Scopus(?:\s*ID)?\s*[:\-]?\s*(\d{8,14})/i', $text, $m)) {
            $id = $m[1];
            $links[] = ['platform' => 'scopus', 'label' => 'Scopus ID', 'nilai' => $id, 'url' => 'https://www.scopus.com/authid/detail.uri?authorId='.$id];
        }

        if (preg_match('/https?:\/\/(?:www\.)?researchgate\.net\/profile\/[^\s)]+/i', $text, $m)) {
            $url = rtrim($m[0], '.,)');
            $links[] = ['platform' => 'researchgate', 'label' => 'ResearchGate', 'nilai' => basename($url), 'url' => $url];
        }

        if (preg_match('/https?:\/\/(?:[a-z]+\.)?linkedin\.com\/in\/[^\s)]+/i', $text, $m)) {
            $url = rtrim($m[0], '.,)');
            $links[] = ['platform' => 'linkedin', 'label' => 'LinkedIn', 'nilai' => basename($url), 'url' => $url];
        }

        return $links;
    }

    /**
     * @param  array<int, string>  $lines
     */
    private function extractBiography(array $lines): ?string
    {
        if ($lines === []) {
            return null;
        }

        return implode("\n\n", array_values(array_filter(array_map(
            fn (string $l): string => $this->stripBullet($l),
            $lines,
        ))));
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, string>
     */
    private function extractFocusTags(array $lines): array
    {
        $tags = [];
        foreach ($lines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }
            if (str_contains($clean, ',') && mb_strlen($clean) > 40) {
                foreach (explode(',', $clean) as $part) {
                    $part = trim($part);
                    if ($part !== '') {
                        $tags[] = $part;
                    }
                }
            } else {
                $tags[] = $clean;
            }
        }

        return array_values(array_unique($tags));
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, array<string, mixed>>
     */
    private function extractSoftwareGroups(array $lines): array
    {
        $items = $this->extractFocusTags($lines);
        if ($items === []) {
            return [];
        }

        return [[
            'kategori' => 'Engineering Software',
            'judul' => 'Perangkat Lunak & Kompetensi Teknis',
            'warna' => 'blue',
            'items' => $items,
        ]];
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, array{jenjang: string, periode: ?string, institusi: string, prodi: ?string, predikat: ?string}>
     */
    private function extractEducation(array $lines): array
    {
        $items = [];
        foreach ($lines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }

            $periode = null;
            if (preg_match('/\((?:Lulus\s*)?(\d{4}(?:\s*[–\-]\s*(?:\d{4}|Sekarang|Present))?)\)\s*$/ui', $clean, $m)) {
                $periode = trim($m[1]);
                $clean = trim(substr($clean, 0, -strlen($m[0])));
            } elseif (preg_match('/\b(19\d{2}|20\d{2}(?:\s*[–\-]\s*(?:20\d{2}|Sekarang|Present))?)\b/u', $clean, $m)) {
                $periode = trim($m[1]);
            }

            $parts = preg_split('/\s+[–—-]\s+/u', $clean, 2) ?: [$clean];
            $left = trim($parts[0]);
            $institusi = trim($parts[1] ?? '');

            $jenjang = 'Pendidikan Tinggi';
            $prodi = $left;
            if (preg_match('/^(Doktor(?:al)?\s*\([^)]+\)|Ph\.D\.|Magister\s*\([^)]+\)|Master[^–-]*|Sarjana\s*\([^)]+\)|S-?[123]|Profesi)\s*(.*)$/iu', $left, $jm)) {
                $jenjang = trim($jm[1]);
                $prodi = trim($jm[2], ' ,:-');
            }

            if ($institusi === '' && preg_match('/(Universitas[^,;]+|Institut[^,;]+|Politeknik[^,;]+|University[^,;]+)/iu', $clean, $im)) {
                $institusi = trim($im[1]);
            }

            $items[] = [
                'jenjang' => $jenjang,
                'periode' => $periode,
                'institusi' => $institusi !== '' ? $institusi : $left,
                'prodi' => $prodi !== '' && $prodi !== $institusi ? $prodi : null,
                'predikat' => null,
            ];
        }

        return $items;
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, array<string, ?string>>
     */
    private function extractExperience(array $lines): array
    {
        $items = [];
        foreach ($lines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }

            $periode = null;
            if (preg_match('/\(([^()]*\d{4}[^()]*)\)\s*$/u', $clean, $m)) {
                $periode = trim($m[1]);
                $clean = trim(substr($clean, 0, -strlen($m[0])));
            }

            $parts = preg_split('/\s+[–—-]\s+/u', $clean, 2) ?: [$clean];
            $jabatan = trim($parts[0]);
            $instansi = trim($parts[1] ?? '');
            $tag = preg_match('/\b(dosen|akademik|pengajar|asisten)\b/i', $jabatan) ? 'Akademisi' : 'Profesional';

            $items[] = [
                'tag' => $tag,
                'jabatan' => $jabatan,
                'instansi' => $instansi !== '' ? $instansi : '-',
                'periode' => $periode,
                'lokasi' => null,
                'deskripsi' => null,
            ];
        }

        return $items;
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, array<string, ?string>>
     */
    private function extractAwards(array $lines): array
    {
        $items = [];
        foreach ($lines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }

            $meta = '';
            if (preg_match('/\(([^()]*\d{4}[^()]*)\)\s*$/u', $clean, $m)) {
                $meta = trim($m[1]);
                $clean = trim(substr($clean, 0, -strlen($m[0])));
            }

            $parts = preg_split('/\s+[–—-]\s+/u', $clean, 2) ?: [$clean];
            $judul = trim($parts[0]);
            $pemberi = trim($parts[1] ?? '');

            $items[] = [
                'meta' => trim(implode(' • ', array_filter([$meta, $pemberi]))),
                'judul' => $judul,
                'deskripsi' => null,
            ];
        }

        return $items;
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, array<string, ?string>>
     */
    private function extractTrainings(array $lines): array
    {
        $items = [];
        foreach ($lines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }

            $tahun = null;
            if (preg_match('/\((\d{4})\)\s*$/u', $clean, $m)) {
                $tahun = $m[1];
                $clean = trim(substr($clean, 0, -strlen($m[0])));
            } elseif (preg_match('/\b(20\d{2}|19\d{2})\b/', $clean, $m)) {
                $tahun = $m[1];
            }

            $parts = preg_split('/\s+[–—-]\s+/u', $clean, 2) ?: [$clean];
            $items[] = [
                'nama' => trim($parts[0]),
                'penyelenggara' => isset($parts[1]) ? trim($parts[1]) : null,
                'tahun' => $tahun,
            ];
        }

        return $items;
    }

    /**
     * @param  array<int, string>  $lines
     * @return array<int, array{semester: string, mata_kuliah: array<int, string>}>
     */
    private function extractTeaching(array $lines): array
    {
        if ($lines === []) {
            return [];
        }

        $grouped = [];
        $currentSemester = 'Mata Kuliah Diampu';

        foreach ($lines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }

            if (preg_match('/^(?:Semester\s+)?(\d{4}\/\d{4}[^:]*|Ganjil\s+\d{4}|Genap\s+\d{4}|Semester\s+\w+(?:\s+\d{4})?)\s*:?\s*(.*)$/i', $clean, $m)) {
                $currentSemester = trim($m[1]);
                $grouped[$currentSemester] ??= [];
                if (trim($m[2]) !== '') {
                    foreach (preg_split('/\s*[;,]\s*/', trim($m[2])) ?: [] as $mk) {
                        if ($mk !== '') {
                            $grouped[$currentSemester][] = $mk;
                        }
                    }
                }

                continue;
            }

            $grouped[$currentSemester] ??= [];
            $grouped[$currentSemester][] = $clean;
        }

        $result = [];
        foreach ($grouped as $semester => $courses) {
            $courses = array_values(array_unique(array_filter($courses)));
            if ($courses !== []) {
                $result[] = ['semester' => $semester, 'mata_kuliah' => $courses];
            }
        }

        return $result;
    }

    /**
     * @param  array<int, string>  $pubLines
     * @param  array<int, string>  $confLines
     * @param  array<int, string>  $pkmLines
     * @return array{0: array<int, array<string, ?string>>, 1: array<int, array<string, ?string>>, 2: array<int, array<string, ?string>>}
     */
    private function extractPublicationsAndOthers(array $pubLines, array $confLines, array $pkmLines): array
    {
        $publikasi = [];
        $konferensi = [];
        $pengabdian = [];
        $subMode = 'publikasi';

        foreach ($pubLines as $line) {
            $lower = mb_strtolower($this->stripBullet($line));
            if (preg_match('/^(prosiding|konferensi)/i', $lower) && mb_strlen($lower) <= 50) {
                $subMode = 'konferensi';

                continue;
            }
            if (preg_match('/^(karya buku|buku|book chapter)/i', $lower) && mb_strlen($lower) <= 50) {
                $subMode = 'buku';

                continue;
            }
            if (preg_match('/^(jurnal|artikel)/i', $lower) && mb_strlen($lower) <= 50) {
                $subMode = 'publikasi';

                continue;
            }
            if (preg_match('/^pengabdian/i', $lower) && mb_strlen($lower) <= 50) {
                $subMode = 'pengabdian';

                continue;
            }

            if ($subMode === 'buku') {
                continue;
            }
            if ($subMode === 'konferensi') {
                $confLines[] = $line;

                continue;
            }
            if ($subMode === 'pengabdian') {
                $pkmLines[] = $line;

                continue;
            }

            $parsed = $this->parseCitationLine($line);
            if ($parsed !== null) {
                $publikasi[] = $parsed;
            }
        }

        foreach ($confLines as $line) {
            $parsed = $this->parseCitationLine($line, true);
            if ($parsed !== null) {
                $konferensi[] = [
                    'acara' => $parsed['jurnal'] ?: 'Konferensi Ilmiah',
                    'tahun' => $parsed['tahun'],
                    'judul' => $parsed['judul'],
                    'penulis' => $parsed['penulis'],
                    'lokasi' => null,
                ];
            }
        }

        foreach ($pkmLines as $line) {
            $clean = $this->stripBullet($line);
            if ($clean === '') {
                continue;
            }

            $tahun = null;
            if (preg_match('/\(?(20\d{2}|19\d{2})\)?/', $clean, $m)) {
                $tahun = $m[1];
            }

            $pengabdian[] = [
                'tahun' => $tahun,
                'judul' => $clean,
                'keterangan' => null,
            ];
        }

        return [$publikasi, $konferensi, $pengabdian];
    }

    /**
     * @return array<string, ?string>|null
     */
    private function parseCitationLine(string $line, bool $isConference = false): ?array
    {
        $clean = $this->stripBullet($line);
        if (mb_strlen($clean) < 12) {
            return null;
        }

        $doiUrl = null;
        $doiLabel = null;
        if (preg_match('/https?:\/\/(?:dx\.)?doi\.org\/([^\s),]+)/i', $clean, $dm)) {
            $doiLabel = rtrim($dm[1], '.');
            $doiUrl = 'https://doi.org/'.$doiLabel;
            $clean = trim(str_replace($dm[0], '', $clean));
        }

        $tahun = null;
        $penulis = null;
        $rest = $clean;
        if (preg_match('/^(.+?)\s*\((\d{4}(?:\/\d{4})?)\)\.\s*(.+)$/u', $clean, $cm)) {
            $penulis = trim($cm[1]);
            $tahun = substr($cm[2], 0, 4);
            $rest = trim($cm[3]);
        } elseif (preg_match('/\b(20\d{2}|19\d{2})\b/', $clean, $ym)) {
            $tahun = $ym[1];
        }

        $judul = $rest;
        $jurnal = null;
        if (preg_match('/^(.{10,}?(?<!\bDr)(?<!\bIr)(?<!\bMr)(?<!\bMs)(?<!\bSt)(?<!\bal)(?<!\bNo)(?<!\d)[.?])\s+([A-Z"\(].+)$/u', $rest, $rm)) {
            $judul = trim($rm[1], '. ');
            $jurnal = trim($rm[2], '. ');
        }

        return [
            'jenis' => $isConference ? 'Prosiding Konferensi' : 'Publikasi Ilmiah',
            'tahun' => $tahun,
            'judul' => $judul,
            'penulis' => $penulis,
            'jurnal' => $jurnal,
            'volume' => null,
            'badge_label' => null,
            'doi_label' => $doiLabel,
            'doi_url' => $doiUrl,
        ];
    }

    private function stripBullet(string $line): string
    {
        return trim(preg_replace('/^(?:[\x{2022}\x{25AA}\x{25AB}\x{25CF}\x{25CB}\x{25A0}\-\*]+|\d+\.)\s*/u', '', trim($line)) ?? '');
    }

    /**
     * @param  array<string, mixed>  $fields
     * @return array<string, mixed>
     */
    private function normalizeFields(array $fields): array
    {
        $validKbk = array_keys(Dosen::kbkOptions());
        if (isset($fields['kbk']) && ! in_array($fields['kbk'], $validKbk, true)) {
            unset($fields['kbk']);
        }

        $repeaterKeys = [
            'tautan_riset',
            'pendidikan',
            'keahlian_grup',
            'pengalaman_kerja',
            'penghargaan',
            'pelatihan',
            'pengajaran',
            'publikasi',
            'konferensi',
            'pengabdian_list',
        ];

        foreach ($repeaterKeys as $key) {
            if (! isset($fields[$key]) || ! is_array($fields[$key])) {
                unset($fields[$key]);

                continue;
            }
            $fields[$key] = array_values(array_filter($fields[$key], fn (mixed $item): bool => is_array($item) && array_filter($item, fn (mixed $v): bool => filled($v)) !== []));
            if ($fields[$key] === []) {
                unset($fields[$key]);
            }
        }

        return array_filter($fields, fn (mixed $v): bool => filled($v) && $v !== []);
    }

    /**
     * @param  array<string, mixed>  $fields
     * @return array<int, string>
     */
    private function summarizeFilled(array $fields): array
    {
        $labels = [];
        if (filled($fields['nama'] ?? null) || filled($fields['email'] ?? null) || filled($fields['nidn'] ?? null)) {
            $labels[] = 'Identitas';
        }
        if (filled($fields['biografi'] ?? null)) {
            $labels[] = 'Biografi';
        }
        foreach ([
            'pendidikan' => 'Pendidikan',
            'pengalaman_kerja' => 'Pengalaman Kerja',
            'penghargaan' => 'Penghargaan',
            'pelatihan' => 'Pelatihan',
            'pengajaran' => 'Pengajaran',
            'publikasi' => 'Publikasi',
            'konferensi' => 'Konferensi',
            'pengabdian_list' => 'Pengabdian',
        ] as $key => $label) {
            $count = is_array($fields[$key] ?? null) ? count($fields[$key]) : 0;
            if ($count > 0) {
                $labels[] = "{$label} ({$count})";
            }
        }

        return $labels;
    }
}
