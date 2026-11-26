<?php

namespace App\Models;

use App\Models\Concerns\ResolvesPublicImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

class Dosen extends Model
{
    use ResolvesPublicImage;

    protected $fillable = [
        'slug',
        'nama',
        'kbk',
        'badge_peran',
        'jabatan_akademik',
        'jabatan_fungsional',
        'nidn',
        'homebase',
        'email',
        'telepon',
        'profile_route',
        'foto',
        'cv_file',
        'meta_description',
        'biografi',
        'fokus_label_style',
        'tautan_riset',
        'ringkasan_statistik',
        'fokus_keahlian',
        'pendidikan',
        'keahlian_grup',
        'pengalaman_kerja',
        'penghargaan',
        'pelatihan',
        'pengajaran',
        'publikasi',
        'konferensi',
        'pengabdian_list',
        'roadmap',
        'bagian_tambahan',
        'urutan_bagian',
        'kata_kunci_riset',
        'sinkron_penelitian',
        'sinkron_pengabdian',
        'urutan',
        'is_published',
    ];

    /**
     * @return array<string, array{label: string, badge: string}>
     */
    public static function kbkMeta(): array
    {
        return [
            'struktur' => [
                'label' => 'Rekayasa Struktur dan Bahan',
                'badge' => 'text-blue-800 bg-blue-50',
            ],
            'keairan' => [
                'label' => 'Rekayasa Sumber Daya Air',
                'badge' => 'text-cyan-800 bg-cyan-50',
            ],
            'geoteknik' => [
                'label' => 'Rekayasa Geoteknik',
                'badge' => 'text-amber-800 bg-amber-50',
            ],
            'transportasi' => [
                'label' => 'Rekayasa Transportasi dan Jalan Raya',
                'badge' => 'text-emerald-800 bg-emerald-50',
            ],
            'manajemen' => [
                'label' => 'Manajemen Rekayasa Konstruksi',
                'badge' => 'text-blue-800 bg-blue-50',
            ],
        ];
    }

    /**
     * @return array<string, string>
     */
    public static function kbkOptions(): array
    {
        return array_map(
            fn (array $meta): string => $meta['label'],
            static::kbkMeta()
        );
    }

    /**
     * @return array<string, string>
     */
    public static function profileRouteOptions(): array
    {
        $defaults = [
            'dosen.andhy-romdani' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
            'dosen.sri-wanto' => 'Sri Wanto, S.T., M.T.',
            'dosen.kartika-seinari' => 'Kartika Seinari Manggala, S.T., M.T.',
            'dosen.shanti-astri-noviani' => 'Shanti Astri Noviani, S.Pd., M.T.',
            'dosen.muhamad-anugerah' => 'Muhamad Anugerah Ramadhan, S.T., M.T.',
            'dosen.ridha-al-mustafa' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.',
        ];

        try {
            if (Schema::hasTable('dosens')) {
                $dbOptions = static::query()
                    ->orderBy('urutan')
                    ->orderBy('nama')
                    ->get(['slug', 'nama', 'profile_route'])
                    ->mapWithKeys(fn (self $dosen): array => [
                        ($dosen->profile_route ?: 'dosen.' . $dosen->slug) => $dosen->nama,
                    ])
                    ->all();

                return $dbOptions + $defaults;
            }
        } catch (\Throwable) {
            // Abaikan saat migrasi awal belum dijalankan.
        }

        return $defaults;
    }

    /**
     * Pilihan jenis bagian CV standar beserta judul dan subjudul bawaan.
     *
     * @return array<string, array{judul: string, subjudul: string}>
     */
    public static function availableSectionTypes(): array
    {
        return [
            'biografi' => [
                'judul' => 'Biografi & Profil Akademik',
                'subjudul' => 'Ringkasan perjalanan akademik dan dedikasi profesional',
            ],
            'pendidikan' => [
                'judul' => 'Riwayat Pendidikan Formal',
                'subjudul' => 'Kualifikasi jenjang pendidikan tinggi dan rekognisi akademik',
            ],
            'buku' => [
                'judul' => 'Koleksi Karya Buku',
                'subjudul' => 'Buku ajar dan referensi ber-ISBN yang terhubung ke katalog & menu Buku Admin',
            ],
            'keahlian' => [
                'judul' => 'Keahlian Perangkat Lunak & Kompetensi',
                'subjudul' => 'Kompetensi piranti lunak analisis struktur, numerik, dan rekayasa sipil',
            ],
            'pengalaman' => [
                'judul' => 'Pengalaman Kerja & Industri',
                'subjudul' => 'Rekam jejak sebagai akademisi, peneliti, konsultan, maupun praktisi industri',
            ],
            'penghargaan' => [
                'judul' => 'Penghargaan & Rekognisi Kehormatan',
                'subjudul' => 'Prestasi akademik, piagam penerbit, dan rekognisi kehormatan',
            ],
            'pelatihan' => [
                'judul' => 'Pelatihan & Sertifikasi Perangkat Lunak',
                'subjudul' => 'Sertifikat kompetensi teknis, BIM, dan pelatihan profesional',
            ],
            'pengajaran' => [
                'judul' => 'Riwayat Pengajaran',
                'subjudul' => 'Daftar mata kuliah yang diampu per semester akademik',
            ],
            'publikasi' => [
                'judul' => 'Pengalaman Penelitian & Publikasi',
                'subjudul' => 'Artikel jurnal, prosiding, dan daftar penelitian tersinkron dengan menu Penelitian Admin',
            ],
            'konferensi' => [
                'judul' => 'Konferensi Internasional',
                'subjudul' => 'Penyajian hasil riset di forum ilmiah nasional maupun global',
            ],
            'pengabdian' => [
                'judul' => 'Pengabdian pada Masyarakat',
                'subjudul' => 'Kegiatan PkM & tersinkron dengan menu Pengabdian Admin',
            ],
            'roadmap' => [
                'judul' => 'Research Roadmap',
                'subjudul' => 'Peta jalan riset jangka menengah hingga pemanfaatan teknologi terbaru',
            ],
            'tambahan' => [
                'judul' => 'Informasi CV Tambahan',
                'subjudul' => 'HKI/Paten, organisasi profesi, pembimbingan, atau bagian khusus CV lainnya',
            ],
        ];
    }

    /**
     * @return array<int, array{key: string, judul: ?string, subjudul: ?string, tampil: bool}>
     */
    public static function defaultSectionOrder(): array
    {
        return array_map(
            fn (string $key): array => [
                'key' => $key,
                'judul' => null,
                'subjudul' => null,
                'tampil' => true,
            ],
            array_keys(static::availableSectionTypes())
        );
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tautan_riset' => 'array',
            'ringkasan_statistik' => 'array',
            'fokus_keahlian' => 'array',
            'pendidikan' => 'array',
            'keahlian_grup' => 'array',
            'pengalaman_kerja' => 'array',
            'penghargaan' => 'array',
            'pelatihan' => 'array',
            'pengajaran' => 'array',
            'publikasi' => 'array',
            'konferensi' => 'array',
            'pengabdian_list' => 'array',
            'roadmap' => 'array',
            'bagian_tambahan' => 'array',
            'urutan_bagian' => 'array',
            'kata_kunci_riset' => 'array',
            'sinkron_penelitian' => 'boolean',
            'sinkron_pengabdian' => 'boolean',
            'is_published' => 'boolean',
            'urutan' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function getKbkLabelAttribute(): string
    {
        return static::kbkMeta()[$this->kbk]['label'] ?? $this->kbk;
    }

    public function getBadgeClassAttribute(): string
    {
        return static::kbkMeta()[$this->kbk]['badge'] ?? 'text-slate-700 bg-slate-100';
    }

    public function getFotoUrlAttribute(): ?string
    {
        return static::resolvePublicUrl($this->foto);
    }

    public function getCvUrlAttribute(): ?string
    {
        return static::resolvePublicUrl($this->cv_file);
    }

    public function hasBiodata(): bool
    {
        return filled($this->biografi)
            || filled($this->email)
            || filled($this->telepon)
            || filled($this->nidn)
            || filled($this->jabatan_akademik)
            || filled($this->cv_file)
            || ! empty($this->cleanList($this->pendidikan))
            || ! empty($this->cleanList($this->pengalaman_kerja))
            || ! empty($this->cleanList($this->penghargaan))
            || ! empty($this->cleanList($this->pelatihan))
            || ! empty($this->cleanList($this->pengajaran))
            || ! empty($this->cleanList($this->publikasi))
            || ! empty($this->cleanList($this->konferensi))
            || ! empty($this->cleanList($this->pengabdian_list))
            || ! empty($this->cleanList($this->keahlian_grup))
            || ! empty($this->cleanList($this->fokus_keahlian))
            || ! empty($this->cleanList($this->bagian_tambahan))
            || $this->hasRoadmap();
    }

    public function hasRoadmap(): bool
    {
        $roadmap = is_array($this->roadmap) ? $this->roadmap : [];

        return ! empty($this->cleanList($roadmap['tahapan'] ?? []));
    }

    public function getProfileUrlAttribute(): ?string
    {
        if (! empty($this->profile_route) && Route::has($this->profile_route)) {
            return route($this->profile_route);
        }

        if ($this->hasBiodata() && Route::has('dosen.show')) {
            return route('dosen.show', $this->slug);
        }

        return null;
    }

    /**
     * Mengambil daftar item array dengan membuang baris yang seluruh nilainya kosong.
     *
     * @param  mixed  $items
     * @return array<int, mixed>
     */
    public function cleanList(mixed $items): array
    {
        if (! is_array($items)) {
            return [];
        }

        return array_values(array_filter($items, function (mixed $item): bool {
            if (is_string($item)) {
                return trim($item) !== '';
            }

            if (! is_array($item)) {
                return filled($item);
            }

            foreach ($item as $value) {
                if (is_array($value)) {
                    if (! empty($this->cleanList($value))) {
                        return true;
                    }
                } elseif (filled($value)) {
                    return true;
                }
            }

            return false;
        }));
    }

    /**
     * Menentukan urutan bagian CV aktif untuk dosen ini.
     *
     * @return array<int, array{key: string, judul: ?string, subjudul: ?string, tampil: bool}>
     */
    public function resolvedSections(): array
    {
        $types = static::availableSectionTypes();
        $configured = $this->cleanList($this->urutan_bagian);

        if (empty($configured)) {
            return static::defaultSectionOrder();
        }

        $result = [];
        $seen = [];

        foreach ($configured as $item) {
            $key = $item['key'] ?? null;

            if (! is_string($key) || ! array_key_exists($key, $types) || isset($seen[$key])) {
                continue;
            }

            $seen[$key] = true;
            $result[] = [
                'key' => $key,
                'judul' => $item['judul'] ?? null,
                'subjudul' => $item['subjudul'] ?? null,
                'tampil' => array_key_exists('tampil', $item) ? (bool) $item['tampil'] : true,
            ];
        }

        return $result;
    }

    /**
     * Mengambil daftar kata kunci pencocokan nama dosen di tabel Penelitian & Pengabdian.
     *
     * @return array<int, string>
     */
    public function searchKeywords(): array
    {
        $explicit = $this->cleanList($this->kata_kunci_riset);
        if (! empty($explicit)) {
            return $explicit;
        }

        // Ambil nama inti tanpa gelar depan/belakang (mis. "Dr. Ir. Empung, S.T., M.T." -> "Empung").
        $baseName = trim((string) explode(',', $this->nama)[0]);
        $baseName = preg_replace('/^(Prof\.|Dr\.|Ir\.|H\.|Hj\.)\s*/i', '', $baseName) ?? $baseName;
        $baseName = preg_replace('/^(Prof\.|Dr\.|Ir\.|H\.|Hj\.)\s*/i', '', trim($baseName)) ?? $baseName;

        return array_values(array_filter([$baseName !== '' ? trim($baseName) : null]));
    }

    /**
     * @return Collection<int, array<string, mixed>>
     */
    public function resolvedPublications(): Collection
    {
        $manual = collect($this->cleanList($this->publikasi))->map(function (array $item): array {
            $doiUrl = $item['doi_url'] ?? null;
            $doiLabel = $item['doi_label'] ?? null;

            if (empty($doiLabel) && ! empty($doiUrl) && $doiUrl !== '#') {
                $doiLabel = preg_replace('#^https?://(dx\.)?doi\.org/#i', '', $doiUrl);
            }

            if (empty($doiUrl) && ! empty($doiLabel) && str_starts_with((string) $doiLabel, '10.')) {
                $doiUrl = 'https://doi.org/' . $doiLabel;
            }

            return [
                'jenis' => $item['jenis'] ?? 'Publikasi Ilmiah',
                'authors' => $item['penulis'] ?? $this->nama,
                'year' => (string) ($item['tahun'] ?? ''),
                'title' => $item['judul'] ?? '',
                'venue' => $item['jurnal'] ?? '',
                'vol' => $item['volume'] ?? null,
                'doi' => $doiUrl,
                'doi_label' => $doiLabel,
                'badge_label' => $item['badge_label'] ?? null,
            ];
        })->filter(fn (array $item): bool => filled($item['title']))->values();

        if (! $this->sinkron_penelitian) {
            return $manual;
        }

        $keywords = $this->searchKeywords();
        if (empty($keywords)) {
            return $manual;
        }

        $existingTitles = $manual
            ->pluck('title')
            ->map(fn (string $title): string => mb_strtolower(trim($title)));

        $synced = Penelitian::published()
            ->where(function (Builder $query) use ($keywords): void {
                foreach ($keywords as $keyword) {
                    $query->orWhere('penulis', 'like', '%' . $keyword . '%');
                }
            })
            ->orderByDesc('tahun')
            ->orderByDesc('id')
            ->get()
            ->reject(fn (Penelitian $item): bool => $existingTitles->contains(mb_strtolower(trim($item->judul))))
            ->map(fn (Penelitian $item): array => [
                'jenis' => $item->index_detail ?: ($item->index_type ?: 'Penelitian'),
                'authors' => $item->penulis,
                'year' => (string) ($item->tahun ?? ''),
                'title' => $item->judul,
                'venue' => $item->nama_jurnal ?? '',
                'vol' => collect([$item->volume, $item->terbitan])->filter()->implode(', '),
                'doi' => $item->doi_url,
                'doi_label' => $item->doi_label,
                'badge_label' => $item->eyebrow ?: $item->index_type,
            ]);

        return $synced->concat($manual)->values();
    }

    /**
     * @return Collection<int, array<string, mixed>>
     */
    public function resolvedPengabdian(): Collection
    {
        $manual = collect($this->cleanList($this->pengabdian_list))->map(fn (array $item): array => [
            'tahun' => (string) ($item['tahun'] ?? ''),
            'judul' => $item['judul'] ?? '',
            'keterangan' => $item['keterangan'] ?? null,
            'penulis' => $item['penulis'] ?? null,
            'doi' => $item['doi_url'] ?? null,
        ])->filter(fn (array $item): bool => filled($item['judul']))->values();

        if (! $this->sinkron_pengabdian) {
            return $manual;
        }

        $keywords = $this->searchKeywords();
        if (empty($keywords)) {
            return $manual;
        }

        $existingTitles = $manual
            ->pluck('judul')
            ->map(fn (string $title): string => mb_strtolower(trim($title)));

        $synced = Pengabdian::published()
            ->where(function (Builder $query) use ($keywords): void {
                foreach ($keywords as $keyword) {
                    $query->orWhere('penulis', 'like', '%' . $keyword . '%');
                }
            })
            ->orderByDesc('tahun')
            ->orderByDesc('id')
            ->get()
            ->reject(fn (Pengabdian $item): bool => $existingTitles->contains(mb_strtolower(trim($item->judul))))
            ->map(fn (Pengabdian $item): array => [
                'tahun' => (string) ($item->tahun ?? ''),
                'judul' => $item->judul,
                'keterangan' => collect([$item->nama_jurnal, $item->index_detail ?: $item->index_type])->filter()->implode(' • '),
                'penulis' => $item->penulis,
                'doi' => $item->doi_url,
            ]);

        return $synced->concat($manual)->values();
    }
}
