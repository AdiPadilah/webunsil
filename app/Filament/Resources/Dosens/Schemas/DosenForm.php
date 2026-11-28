<?php

namespace App\Filament\Resources\Dosens\Schemas;

use App\Filament\Resources\Dosens\Support\CvAutoFiller;
use App\Models\Dosen;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class DosenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('ProfilDosenTabs')
                ->tabs([
                    static::identitasTab(),
                    static::biografiKeahlianTab(),
                    static::pendidikanPengalamanTab(),
                    static::pengajaranKaryaRisetTab(),
                    static::roadmapKustomTab(),
                    static::susunanCvTab(),
                ])
                ->persistTabInQueryString()
                ->columnSpanFull(),
        ]);
    }

    private static function identitasTab(): Tab
    {
        return Tab::make('Identitas & Kontak')
            ->icon(Heroicon::OutlinedIdentification)
            ->schema([
                Section::make('Identitas Utama Dosen')
                    ->description('Data tampil pada direktori Dosen dan tajuk halaman biodata lengkap.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Lengkap & Gelar')
                            ->placeholder('Contoh: Andhy Romdani, S.T., M.Eng., Ph.D.')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, callable $set, ?string $operation): void {
                                if ($operation === 'create' && filled($state)) {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->columnSpanFull(),
                        TextInput::make('slug')
                            ->label('Kode / Slug URL')
                            ->helperText('Otomatis membentuk alamat web /dosen/{slug}.')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Select::make('kbk')
                            ->label('Kelompok Bidang Keahlian (KBK)')
                            ->options(Dosen::kbkOptions())
                            ->required(),
                        TextInput::make('badge_peran')
                            ->label('Lencana Peran di Hero')
                            ->placeholder('Contoh: Ketua Program Studi / Dosen Tetap'),
                        TextInput::make('jabatan_akademik')
                            ->label('Jabatan Struktural / Akademik')
                            ->placeholder('Contoh: Ketua Program Studi S-1 Teknik Sipil'),
                        TextInput::make('jabatan_fungsional')
                            ->label('Jabatan Fungsional (Opsional)')
                            ->placeholder('Contoh: Lektor / Asisten Ahli'),
                        TextInput::make('nidn')
                            ->label('NIDN / NIP / NUPTK (Opsional)')
                            ->placeholder('Contoh: 04xxxxxxxx'),
                        TextInput::make('homebase')
                            ->label('Homebase / Unit Kerja')
                            ->placeholder('Contoh: Fakultas Teknik • Universitas Siliwangi')
                            ->columnSpanFull(),
                        TextInput::make('urutan')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0)
                            ->dehydrateStateUsing(fn (mixed $state): int => (int) ($state ?? 0))
                            ->helperText('Angka lebih kecil tampil lebih awal di daftar dosen.'),
                    ])
                    ->columns(2),

                Section::make('Foto Profil, Berkas CV & Status Tayang')
                    ->schema([
                        FileUpload::make('foto')
                            ->label('Foto Profil (Persegi 1:1)')
                            ->image()
                            ->disk('public')
                            ->directory('dosen'),
                        FileUpload::make('cv_file')
                            ->label('Unggah Dokumen CV Resmi PDF (Opsional)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(10240)
                            ->openable()
                            ->downloadable()
                            ->live()
                            ->afterStateUpdated(function (mixed $state, callable $set, callable $get, ?string $operation): void {
                                static::autoFillFromCv($state, $set, $get, $operation);
                            })
                            ->disk('public')
                            ->directory('dosen-cv')
                            ->helperText('Saat PDF diunggah, form biodata otomatis terisi sesuai CV agar tinggal direvisi sebelum disimpan.'),
                        Toggle::make('is_published')
                            ->label('Tampilkan di Halaman Dosen?')
                            ->default(true)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Kontak, Tautan Akademik & Ringkasan Rekam Jejak')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email Resmi UNSIL')
                            ->email()
                            ->placeholder('nama@unsil.ac.id'),
                        TextInput::make('telepon')
                            ->label('Nomor Telepon / HP (Opsional)')
                            ->placeholder('08xxxxxxxxxx'),
                        Repeater::make('tautan_riset')
                            ->label('Tautan Profil Riset (ORCID, SINTA, Google Scholar, ResearchGate, LinkedIn)')
                            ->schema([
                                Select::make('platform')
                                    ->label('Platform')
                                    ->options([
                                        'orcid' => 'ORCID ID',
                                        'sinta' => 'SINTA Kemdikbud',
                                        'scholar' => 'Google Scholar',
                                        'scopus' => 'Scopus',
                                        'researchgate' => 'ResearchGate',
                                        'linkedin' => 'LinkedIn',
                                        'instagram' => 'Instagram',
                                        'website' => 'Website / Portfolio',
                                        'lainnya' => 'Lainnya',
                                    ])
                                    ->required(),
                                TextInput::make('label')
                                    ->label('Label Tampil')
                                    ->placeholder('Mis: ORCID ID / SINTA Kemdikbud'),
                                TextInput::make('nilai')
                                    ->label('ID / Nama Akun Tampil')
                                    ->placeholder('Mis: 0009-0008-3138-9078'),
                                TextInput::make('url')
                                    ->label('URL Tautan (Opsional)')
                                    ->url()
                                    ->placeholder('https://...'),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => (string) ($state['label'] ?? $state['platform'] ?? 'Tautan Profil'))
                            ->addActionLabel('Tambah Tautan Riset')
                            ->columnSpanFull(),

                        Repeater::make('ringkasan_statistik')
                            ->label('Kotak Ringkasan Rekam Jejak di Sidebar (Opsional)')
                            ->schema([
                                TextInput::make('nilai')
                                    ->label('Angka / Nilai')
                                    ->placeholder('Contoh: 14 atau S-3 atau __BOOKS_COUNT__'),
                                TextInput::make('label')
                                    ->label('Keterangan')
                                    ->placeholder('Contoh: Jurnal Internasional / Kandidat Doktor UNS'),
                                Select::make('warna')
                                    ->label('Warna Angka')
                                    ->options([
                                        'navy' => 'Biru Tua (UNSIL)',
                                        'blue' => 'Biru Cerah',
                                        'amber' => 'Emas / Amber',
                                        'emerald' => 'Hijau Emerald',
                                        'cyan' => 'Cyan / Teal',
                                    ])
                                    ->default('blue'),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['nilai'] ?? '').' '.($state['label'] ?? '')) ?: 'Kotak Statistik')
                            ->addActionLabel('Tambah Kotak Statistik')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    private static function biografiKeahlianTab(): Tab
    {
        return Tab::make('Biografi & Keahlian')
            ->icon(Heroicon::OutlinedUserCircle)
            ->schema([
                Section::make('Biografi Naratif & Kepakaran')
                    ->schema([
                        Textarea::make('biografi')
                            ->label('Biografi & Profil Akademik')
                            ->rows(8)
                            ->placeholder('Tuliskan ringkasan riwayat studi, riset, dan pengalaman profesional dosen. Pisahkan antar-paragraf dengan baris kosong.')
                            ->helperText('Pisahkan antar-paragraf dengan menekan Enter dua kali.')
                            ->columnSpanFull(),
                        Textarea::make('meta_description')
                            ->label('Ringkasan SEO / Meta Description (Opsional)')
                            ->rows(2)
                            ->columnSpanFull(),
                        TagsInput::make('fokus_keahlian')
                            ->label('Tag Fokus Keilmuan / Kepakaran (Opsional)')
                            ->placeholder('Ketik topik keahlian lalu tekan Enter')
                            ->helperText('Contoh: Building Information Modeling (BIM), Rekayasa Transportasi, Hidrodinamika Pantai'),
                        Select::make('fokus_label_style')
                            ->label('Warna Tag Fokus Keilmuan')
                            ->options([
                                'blue' => 'Biru Akademik',
                                'emerald' => 'Hijau Emerald',
                                'cyan' => 'Cyan / Biru Laut',
                                'amber' => 'Emas / Amber',
                            ])
                            ->default('blue'),
                    ])
                    ->columns(2),

                Section::make('Keahlian Perangkat Lunak & Kompetensi Teknis')
                    ->description('Kelompokkan keahlian software analisis struktur, hidrologi, BIM, atau keahlian lab sesuai CV dosen.')
                    ->schema([
                        Repeater::make('keahlian_grup')
                            ->label('Kelompok Keahlian / Software')
                            ->schema([
                                TextInput::make('kategori')
                                    ->label('Sub-Label / Kategori')
                                    ->placeholder('Contoh: Analyzing Devices / Engineering Software'),
                                TextInput::make('judul')
                                    ->label('Judul Kelompok')
                                    ->placeholder('Contoh: Perangkat Analisis Rekayasa'),
                                Select::make('warna')
                                    ->label('Warna Kartu')
                                    ->options([
                                        'blue' => 'Biru',
                                        'amber' => 'Amber / Emas',
                                        'emerald' => 'Hijau Emerald',
                                        'cyan' => 'Cyan',
                                    ])
                                    ->default('blue'),
                                TagsInput::make('items')
                                    ->label('Daftar Software / Keahlian')
                                    ->placeholder('Ketik nama software lalu tekan Enter')
                                    ->columnSpanFull(),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => (string) ($state['judul'] ?? $state['kategori'] ?? 'Kelompok Keahlian'))
                            ->addActionLabel('Tambah Kelompok Keahlian')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    private static function pendidikanPengalamanTab(): Tab
    {
        return Tab::make('Pendidikan & Pengalaman')
            ->icon(Heroicon::OutlinedAcademicCap)
            ->schema([
                Section::make('Riwayat Pendidikan Formal')
                    ->description('Urutkan dari jenjang tertinggi (S-3 / Ph.D., S-2 / M.T. / M.Eng., S-1 / S.T.).')
                    ->schema([
                        Repeater::make('pendidikan')
                            ->label('Jenjang Pendidikan')
                            ->schema([
                                TextInput::make('jenjang')
                                    ->label('Jenjang & Gelar')
                                    ->placeholder('Contoh: Program Doktoral (Ph.D.) / Magister (S2)'),
                                TextInput::make('periode')
                                    ->label('Tahun / Periode Lulus')
                                    ->placeholder('Contoh: Lulus 2023 atau 2025 – Sekarang'),
                                TextInput::make('institusi')
                                    ->label('Nama Perguruan Tinggi & Kota/Negara')
                                    ->placeholder('Contoh: Universitas Gadjah Mada (UGM), Yogyakarta'),
                                TextInput::make('prodi')
                                    ->label('Program Studi / Fakultas / Keterangan')
                                    ->placeholder('Contoh: Jurusan Teknik Sipil, Fakultas Teknik'),
                                TextInput::make('predikat')
                                    ->label('Lencana Predikat / Lulusan Terbaik (Opsional)')
                                    ->placeholder('Contoh: Lulusan Terbaik Program Pascasarjana Teknik')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['jenjang'] ?? '').' — '.($state['institusi'] ?? '')) ?: 'Pendidikan')
                            ->addActionLabel('Tambah Riwayat Pendidikan')
                            ->columnSpanFull(),
                    ]),

                Section::make('Pengalaman Kerja, Industri & Akademik')
                    ->schema([
                        Repeater::make('pengalaman_kerja')
                            ->label('Daftar Pengalaman Kerja')
                            ->schema([
                                TextInput::make('tag')
                                    ->label('Label Bidang / Kategori')
                                    ->placeholder('Contoh: Akademisi / Konsultan Rekayasa / Kontraktor BUMN'),
                                TextInput::make('jabatan')
                                    ->label('Jabatan / Peran')
                                    ->placeholder('Contoh: Structure Engineer / Site Manager'),
                                TextInput::make('instansi')
                                    ->label('Nama Perusahaan / Instansi')
                                    ->placeholder('Contoh: PT. Indra Karya (Consultant)'),
                                TextInput::make('periode')
                                    ->label('Periode (Opsional)')
                                    ->placeholder('Contoh: 2021 – 2024'),
                                TextInput::make('lokasi')
                                    ->label('Lokasi (Opsional)')
                                    ->placeholder('Contoh: Semarang, Indonesia'),
                                Textarea::make('deskripsi')
                                    ->label('Uraian Tugas / Tanggung Jawab (Opsional)')
                                    ->rows(4)
                                    ->helperText('Jika lebih dari satu baris (pisahkan Enter), otomatis ditampilkan sebagai daftar poin (bullet list).')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['jabatan'] ?? '').' — '.($state['instansi'] ?? '')) ?: 'Pengalaman')
                            ->addActionLabel('Tambah Pengalaman Kerja')
                            ->columnSpanFull(),
                    ]),

                Section::make('Penghargaan & Pelatihan / Sertifikasi')
                    ->schema([
                        Repeater::make('penghargaan')
                            ->label('Penghargaan & Rekognisi Kehormatan')
                            ->schema([
                                TextInput::make('meta')
                                    ->label('Periode & Pemberi Penghargaan')
                                    ->placeholder('Contoh: Februari 2026 • LovRinz'),
                                TextInput::make('judul')
                                    ->label('Judul Penghargaan / Piagam')
                                    ->placeholder('Contoh: Penulis Dosen Terproduktif'),
                                Textarea::make('deskripsi')
                                    ->label('Deskripsi Singkat')
                                    ->rows(2)
                                    ->columnSpanFull(),
                                FileUpload::make('gambar')
                                    ->label('Foto Piagam / Sertifikat (Opsional — dapat diperbesar pengunjung)')
                                    ->image()
                                    ->disk('public')
                                    ->directory('penghargaan')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => (string) ($state['judul'] ?? 'Penghargaan'))
                            ->addActionLabel('Tambah Penghargaan')
                            ->columnSpanFull(),

                        Repeater::make('pelatihan')
                            ->label('Pelatihan & Sertifikasi Keahlian')
                            ->schema([
                                TextInput::make('nama')
                                    ->label('Nama Pelatihan / Sertifikat')
                                    ->placeholder('Contoh: 5D BIM Application Basic Level Cubicost TBQ'),
                                TextInput::make('penyelenggara')
                                    ->label('Lembaga Penyelenggara (Opsional)')
                                    ->placeholder('Contoh: Glodon / BNSP / PUPR'),
                                TextInput::make('tahun')
                                    ->label('Tahun')
                                    ->placeholder('2025'),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['tahun'] ?? '').' '.($state['nama'] ?? '')) ?: 'Pelatihan / Sertifikasi')
                            ->addActionLabel('Tambah Pelatihan / Sertifikasi')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    private static function pengajaranKaryaRisetTab(): Tab
    {
        return Tab::make('Pengajaran, Karya & Riset')
            ->icon(Heroicon::OutlinedBookOpen)
            ->schema([
                Section::make('Sinkronisasi Otomatis Buku, Penelitian & Pengabdian')
                    ->description('Atur penarikan data otomatis dari menu Buku, Penelitian, dan Pengabdian Masyarakat di Admin. Untuk menambah karya buku, buka menu Buku (Riset & Karya Dosen) di sidebar, lalu tautkan ke halaman biodata dosen ini.')
                    ->schema([
                        Toggle::make('sinkron_penelitian')
                            ->label('Gabungkan otomatis data dari menu Penelitian Admin?')
                            ->helperText('Jika aktif, penelitian yang mencantumkan nama dosen ini ikut muncul di halaman profil.')
                            ->default(true),
                        Toggle::make('sinkron_pengabdian')
                            ->label('Gabungkan otomatis data dari menu Pengabdian Masyarakat Admin?')
                            ->helperText('Jika aktif, kegiatan PkM yang mencantumkan nama dosen ini ikut muncul di halaman profil.')
                            ->default(true),
                        TagsInput::make('kata_kunci_riset')
                            ->label('Kata Kunci Pencocokan Nama Penulis di Riset/PkM (Opsional)')
                            ->placeholder('Contoh: Romdani, A. lalu tekan Enter')
                            ->helperText('Kosongkan agar otomatis memakai nama utama dosen. Karya Buku terhubung melalui kolom "Tautkan ke Halaman Biodata Dosen" pada menu Buku Admin.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Riwayat Pengajaran Mata Kuliah')
                    ->schema([
                        Repeater::make('pengajaran')
                            ->label('Mata Kuliah per Semester')
                            ->schema([
                                TextInput::make('semester')
                                    ->label('Semester Akademik')
                                    ->placeholder('Contoh: 2026/2027 Ganjil'),
                                TagsInput::make('mata_kuliah')
                                    ->label('Daftar Mata Kuliah')
                                    ->placeholder('Ketik nama mata kuliah lalu tekan Enter')
                                    ->columnSpanFull(),
                            ])
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => (string) ($state['semester'] ?? 'Semester'))
                            ->addActionLabel('Tambah Semester Pengajaran')
                            ->columnSpanFull(),
                    ]),

                Section::make('Publikasi Jurnal, Prosiding & Penelitian (Manual CV)')
                    ->schema([
                        Repeater::make('publikasi')
                            ->label('Daftar Publikasi / Penelitian CV')
                            ->schema([
                                TextInput::make('jenis')
                                    ->label('Kategori / Jenis')
                                    ->placeholder('Contoh: Peer-Reviewed / Jurnal Nasional / Prosiding Internasional'),
                                TextInput::make('tahun')
                                    ->label('Tahun')
                                    ->placeholder('2026'),
                                Textarea::make('judul')
                                    ->label('Judul Artikel / Penelitian')
                                    ->rows(2)
                                    ->columnSpanFull(),
                                TextInput::make('penulis')
                                    ->label('Daftar Penulis')
                                    ->columnSpanFull(),
                                TextInput::make('jurnal')
                                    ->label('Nama Jurnal / Prosiding / Venue (Opsional)'),
                                TextInput::make('volume')
                                    ->label('Volume / Edisi / Halaman (Opsional)'),
                                TextInput::make('badge_label')
                                    ->label('Lencana Indeks (Opsional)')
                                    ->placeholder('Mis: Scopus / Global / SINTA'),
                                TextInput::make('doi_label')
                                    ->label('Nomor DOI Tampil (Opsional)')
                                    ->placeholder('10.1016/...'),
                                TextInput::make('doi_url')
                                    ->label('Tautan URL DOI (Opsional)')
                                    ->placeholder('https://doi.org/...')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['tahun'] ?? '').' — '.Str::limit((string) ($state['judul'] ?? 'Publikasi'), 65)))
                            ->addActionLabel('Tambah Publikasi / Penelitian')
                            ->columnSpanFull(),
                    ]),

                Section::make('Konferensi & Pengabdian Masyarakat (Manual CV)')
                    ->schema([
                        Repeater::make('konferensi')
                            ->label('Konferensi Internasional / Nasional')
                            ->schema([
                                TextInput::make('acara')
                                    ->label('Nama Konferensi / Forum')
                                    ->placeholder('Contoh: AGU Fall Meeting 2020'),
                                TextInput::make('tahun')
                                    ->label('Tahun')
                                    ->placeholder('2024'),
                                Textarea::make('judul')
                                    ->label('Judul Makalah / Presentasi')
                                    ->rows(2)
                                    ->columnSpanFull(),
                                TextInput::make('penulis')
                                    ->label('Penulis')
                                    ->columnSpanFull(),
                                TextInput::make('lokasi')
                                    ->label('Lokasi Pelaksanaan')
                                    ->placeholder('Contoh: Yogyakarta, Indonesia')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['tahun'] ?? '').' — '.($state['acara'] ?? 'Konferensi')))
                            ->addActionLabel('Tambah Konferensi')
                            ->columnSpanFull(),

                        Repeater::make('pengabdian_list')
                            ->label('Daftar Pengabdian pada Masyarakat (CV Manual)')
                            ->schema([
                                TextInput::make('tahun')
                                    ->label('Tahun')
                                    ->placeholder('2026'),
                                Textarea::make('judul')
                                    ->label('Judul Kegiatan Pengabdian')
                                    ->rows(2)
                                    ->columnSpanFull(),
                                TextInput::make('keterangan')
                                    ->label('Keterangan / Jurnal PkM / Lokasi (Opsional)')
                                    ->columnSpanFull(),
                            ])
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => trim(($state['tahun'] ?? '').' — '.Str::limit((string) ($state['judul'] ?? 'Pengabdian'), 65)))
                            ->addActionLabel('Tambah Pengabdian Masyarakat')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    private static function roadmapKustomTab(): Tab
    {
        return Tab::make('Roadmap & Bagian Kustom')
            ->icon(Heroicon::OutlinedPresentationChartLine)
            ->schema([
                Section::make('Research Roadmap (Peta Jalan Penelitian)')
                    ->description('Opsional — tampil sebagai diagram alir horizontal seperti pada profil Sri Wanto bila tahapan diisi.')
                    ->schema([
                        TextInput::make('roadmap.judul')
                            ->label('Judul Diagram Roadmap')
                            ->placeholder('Contoh: Research Roadmap (2024 – 2029)'),
                        TextInput::make('roadmap.badge')
                            ->label('Badge Kanan Atas')
                            ->placeholder('Contoh: Structural Retrofit'),
                        TextInput::make('roadmap.subjudul')
                            ->label('Subjudul Penjelasan')
                            ->placeholder('Contoh: Peta jalan riset dari Structural Retrofit hingga AI')
                            ->columnSpanFull(),
                        TextInput::make('roadmap.label_mulai')
                            ->label('Label Kotak Awal (Kiri)')
                            ->placeholder('Contoh: Structural Retrofit'),
                        TextInput::make('roadmap.label_tujuan')
                            ->label('Label Kotak Tujuan Akhir (Kanan)')
                            ->placeholder('Contoh: Utilization of software and AI...'),
                        Repeater::make('roadmap.tahapan')
                            ->label('Tahapan / Milestone Tahun')
                            ->schema([
                                TextInput::make('periode')
                                    ->label('Tahun / Rentang')
                                    ->placeholder('Contoh: 2024 atau Long Term 2024 – 2027'),
                                TextInput::make('sub_label')
                                    ->label('Keterangan Tambahan Node (Opsional)')
                                    ->placeholder('Contoh: Doctoral Dissertation'),
                                Select::make('warna')
                                    ->label('Warna Milestone')
                                    ->options([
                                        'navy' => 'Biru Tua (UNSIL)',
                                        'blue' => 'Biru Cerah (Sorotan)',
                                        'amber' => 'Emas / Amber',
                                        'emerald' => 'Hijau Emerald',
                                    ])
                                    ->default('navy'),
                                Textarea::make('topik_1')
                                    ->label('Topik Riset 1 (Baris Atas)')
                                    ->rows(2),
                                Textarea::make('topik_2')
                                    ->label('Topik Riset 2 (Opsional)')
                                    ->rows(2),
                                TextInput::make('luaran_1')
                                    ->label('Luaran / Output 1 (Baris Bawah)'),
                                TextInput::make('luaran_2')
                                    ->label('Luaran / Output 2 (Opsional)'),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => (string) ($state['periode'] ?? 'Tahap Roadmap'))
                            ->addActionLabel('Tambah Tahapan Roadmap')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Bagian CV Tambahan / Kustom (Sesuai CV Dosen)')
                    ->description('Tambahkan bagian khusus apa pun dari CV dosen, misal HKI/Paten, Organisasi Profesi, Pembicara Tamu, atau Hibah Penelitian.')
                    ->schema([
                        Repeater::make('bagian_tambahan')
                            ->label('Daftar Bagian CV Tambahan')
                            ->schema([
                                TextInput::make('judul')
                                    ->label('Judul Bagian')
                                    ->placeholder('Contoh: Hak Kekayaan Intelektual (HKI) / Organisasi Profesi'),
                                TextInput::make('subjudul')
                                    ->label('Subjudul Singkat (Opsional)')
                                    ->placeholder('Contoh: Pencatatan hak cipta, paten, dan keanggotaan asosiasi profesi'),
                                Select::make('ikon')
                                    ->label('Ikon Bagian')
                                    ->options([
                                        'award' => 'Medali / Penghargaan',
                                        'users' => 'Organisasi / Asosiasi',
                                        'briefcase' => 'Proyek / Profesi',
                                        'certificate' => 'Sertifikat / HKI',
                                        'globe' => 'Internasional / Forum',
                                        'bookmark' => 'Dokumen / Karya Lain',
                                    ])
                                    ->default('bookmark'),
                                Repeater::make('items')
                                    ->label('Butir Isi Bagian')
                                    ->schema([
                                        TextInput::make('judul')
                                            ->label('Judul / Nama Butir'),
                                        TextInput::make('tahun')
                                            ->label('Tahun / Periode (Opsional)'),
                                        TextInput::make('subjudul')
                                            ->label('Nomor / Penerbit / Jabatan (Opsional)'),
                                        Textarea::make('deskripsi')
                                            ->label('Uraian Singkat (Opsional)')
                                            ->rows(2)
                                            ->columnSpanFull(),
                                        TextInput::make('url')
                                            ->label('Tautan URL (Opsional)')
                                            ->url(),
                                    ])
                                    ->columns(3)
                                    ->defaultItems(0)
                                    ->collapsible()
                                    ->collapsed()
                                    ->itemLabel(fn (array $state): string => (string) ($state['judul'] ?? 'Butir CV'))
                                    ->addActionLabel('Tambah Butir')
                                    ->columnSpanFull(),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): string => (string) ($state['judul'] ?? 'Bagian Kustom'))
                            ->addActionLabel('Tambah Bagian CV Baru')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    private static function susunanCvTab(): Tab
    {
        $typeOptions = collect(Dosen::availableSectionTypes())
            ->mapWithKeys(fn (array $meta, string $key): array => [$key => $meta['judul']])
            ->all();

        return Tab::make('Susunan & Tampilan CV')
            ->icon(Heroicon::OutlinedQueueList)
            ->schema([
                Section::make('Urutan & Visibilitas Bagian Halaman Profil')
                    ->description('Atur urutan tampil agar sesuai format CV masing-masing dosen (geser ke atas/bawah), ubah judul bagian bila perlu, atau nonaktifkan bagian tertentu. Bagian yang isinya kosong otomatis disembunyikan.')
                    ->schema([
                        Repeater::make('urutan_bagian')
                            ->label('Susunan Bagian Profil')
                            ->hintAction(
                                Action::make('muatSusunanStandar')
                                    ->label('Muat Susunan Standar')
                                    ->icon(Heroicon::OutlinedArrowPath)
                                    ->action(function (callable $set): void {
                                        $set('urutan_bagian', Dosen::defaultSectionOrder());
                                    })
                            )
                            ->schema([
                                Select::make('key')
                                    ->label('Jenis Bagian CV')
                                    ->options($typeOptions)
                                    ->required(),
                                TextInput::make('judul')
                                    ->label('Judul Kustom (Opsional)')
                                    ->placeholder('Kosongkan untuk pakai judul standar'),
                                TextInput::make('subjudul')
                                    ->label('Subjudul Kustom (Opsional)')
                                    ->placeholder('Penjelasan singkat di bawah judul'),
                                Toggle::make('tampil')
                                    ->label('Tampilkan')
                                    ->default(true),
                            ])
                            ->columns(4)
                            ->defaultItems(0)
                            ->reorderableWithDragAndDrop()
                            ->reorderableWithButtons()
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(function (array $state) use ($typeOptions): string {
                                $base = $typeOptions[$state['key'] ?? ''] ?? 'Bagian CV';
                                $custom = $state['judul'] ?? null;
                                $status = ($state['tampil'] ?? true) ? '' : ' (Tersembunyi)';

                                return ($custom ?: $base).$status;
                            })
                            ->addActionLabel('Tambah / Atur Bagian CV')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    private static function autoFillFromCv(mixed $state, callable $set, callable $get, ?string $operation): void
    {
        $file = collect(Arr::wrap($state))->first();
        if (! $file instanceof TemporaryUploadedFile) {
            return;
        }

        $result = app(CvAutoFiller::class)->extractFromUploadedFile($file);
        $fields = $result['fields'];

        if ($fields === []) {
            $realPath = $file->getRealPath();
            $header = is_string($realPath) && is_file($realPath) ? @file_get_contents($realPath, false, null, 0, 5) : '';

            if (is_string($header) && str_starts_with($header, '%PDF')) {
                Notification::make()
                    ->warning()
                    ->title('Teks PDF tidak terbaca')
                    ->body('Kemungkinan PDF berasal dari hasil scan gambar. Silakan isi form secara manual atau atur GEMINI_API_KEY di .env untuk ekstraksi AI.')
                    ->send();
            }

            return;
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

        foreach ($fields as $key => $value) {
            if (in_array($key, $repeaterKeys, true) && is_array($value)) {
                $keyed = [];
                foreach ($value as $item) {
                    $keyed[(string) Str::uuid()] = $item;
                }
                $set($key, $keyed);

                continue;
            }

            $set($key, $value);
        }

        if (filled($fields['nama'] ?? null) && ($operation === 'create' || blank($get('slug')))) {
            $set('slug', Str::slug((string) $fields['nama']));
        }

        Notification::make()
            ->success()
            ->title('Biodata otomatis diisi dari CV')
            ->body('Terisi: '.implode(', ', $result['filled_labels']).'. Silakan tinjau dan revisi sebelum menyimpan.')
            ->send();
    }
}
