@extends('layouts.app')

@php
    /** @var \App\Models\Dosen $dosen */
    $books ??= collect();
    $bukuSipil = $books->where('kategori', '!=', 'fiksi')->values();
    $bukuFiksi = $books->where('kategori', 'fiksi')->values();

    $namaDosen = $dosen->nama;
    $kbkLabel = $dosen->kbk_label;
    $badgePeran = $dosen->badge_peran ?: 'Dosen Program Studi';
    $jabatanAkademik = $dosen->jabatan_akademik ?: 'Dosen Program Studi S-1 Teknik Sipil';
    $homebase = $dosen->homebase ?: 'Fakultas Teknik • Universitas Siliwangi';
    $fotoUrl = $dosen->foto_url ?: asset('images/dosen/' . $dosen->slug . '.jpg');

    $biografiParagraphs = filled($dosen->biografi)
        ? array_values(array_filter(array_map('trim', preg_split('/\R\s*\R/', (string) $dosen->biografi) ?: [])))
        : [];
    $fokusKeahlian = $dosen->cleanList($dosen->fokus_keahlian);
    $pendidikanList = $dosen->cleanList($dosen->pendidikan);
    $keahlianGrup = $dosen->cleanList($dosen->keahlian_grup);
    $pengalamanList = $dosen->cleanList($dosen->pengalaman_kerja);
    $penghargaanList = $dosen->cleanList($dosen->penghargaan);
    $pelatihanList = $dosen->cleanList($dosen->pelatihan);
    $pengajaranList = $dosen->cleanList($dosen->pengajaran);
    $publikasiList = $dosen->resolvedPublications();
    $konferensiList = $dosen->cleanList($dosen->konferensi);
    $pengabdianList = $dosen->resolvedPengabdian();
    $bagianTambahan = $dosen->cleanList($dosen->bagian_tambahan);
    $tautanRiset = $dosen->cleanList($dosen->tautan_riset);
    $hasPiagamImage = collect($penghargaanList)->contains(fn (array $item): bool => filled($item['gambar'] ?? null));

    $kbkThemes = [
        'keairan' => ['hero' => 'bg-cyan-500/20 text-cyan-200 border-cyan-400/20', 'side' => 'text-cyan-800 bg-cyan-50 border-cyan-100', 'icon' => 'fa-solid fa-water text-cyan-600'],
        'transportasi' => ['hero' => 'bg-emerald-500/20 text-emerald-200 border-emerald-400/25', 'side' => 'text-emerald-800 bg-emerald-50 border-emerald-100', 'icon' => 'fa-solid fa-road text-emerald-600'],
        'geoteknik' => ['hero' => 'bg-amber-500/20 text-amber-200 border-amber-400/25', 'side' => 'text-amber-800 bg-amber-50 border-amber-100', 'icon' => 'fa-solid fa-layer-group text-amber-600'],
        'struktur' => ['hero' => 'bg-blue-500/20 text-blue-200 border-blue-400/25', 'side' => 'text-blue-800 bg-blue-50 border-blue-100', 'icon' => 'fa-solid fa-building-columns text-blue-600'],
        'manajemen' => ['hero' => 'bg-blue-500/20 text-blue-200 border-blue-400/25', 'side' => 'text-blue-800 bg-blue-50 border-blue-100', 'icon' => 'fa-solid fa-building-columns text-blue-600'],
    ];
    $kbkTheme = $kbkThemes[$dosen->kbk] ?? $kbkThemes['struktur'];

    $fokusStyles = [
        'emerald' => 'text-emerald-900 bg-emerald-50 border-emerald-200/70',
        'cyan' => 'text-cyan-900 bg-cyan-50 border-cyan-200/70',
        'amber' => 'text-amber-900 bg-amber-50 border-amber-200/70',
        'blue' => 'text-blue-900 bg-blue-50 border-blue-200/70',
    ];
    $fokusPillClass = $fokusStyles[$dosen->fokus_label_style ?? 'blue'] ?? $fokusStyles['blue'];

    $statTextColors = [
        'navy' => 'text-[#0B2A4A]',
        'blue' => 'text-[#0070BA]',
        'amber' => 'text-amber-600',
        'emerald' => 'text-emerald-600',
        'cyan' => 'text-cyan-700',
    ];

    $configuredStats = $dosen->cleanList($dosen->ringkasan_statistik);
    if (! empty($configuredStats)) {
        $statItems = array_map(function (array $item) use ($books, $publikasiList, $pengabdianList, $pelatihanList): array {
            $rawVal = (string) ($item['nilai'] ?? '0');
            $replaced = strtr($rawVal, [
                '__BOOKS_COUNT__' => (string) $books->count(),
                '__PUBS_COUNT__' => (string) $publikasiList->count(),
                '__PKM_COUNT__' => (string) $pengabdianList->count(),
                '__TRAININGS_COUNT__' => (string) count($pelatihanList),
            ]);

            return [
                'nilai' => $replaced,
                'label' => $item['label'] ?? '',
                'warna' => $item['warna'] ?? 'blue',
            ];
        }, $configuredStats);
    } else {
        $statItems = array_values(array_filter([
            ['nilai' => (string) $books->count(), 'label' => 'Karya Buku', 'warna' => 'navy'],
            ['nilai' => (string) $publikasiList->count(), 'label' => 'Publikasi Ilmiah', 'warna' => 'blue'],
            ! empty($pengalamanList) ? ['nilai' => (string) count($pengalamanList), 'label' => 'Pengalaman Kerja', 'warna' => 'amber'] : null,
            ! empty($pendidikanList) ? ['nilai' => (string) count($pendidikanList), 'label' => 'Gelar Formal', 'warna' => 'emerald'] : null,
        ]));
    }

    $bukuMetaLookup = [
        '978-634-7526-24-3' => [
            'penerbit' => 'CV Hei Publishing Indonesia',
            'tim_penulis' => 'Munadrah, M. Sang Gumilar Panca Putra, Joey Limbongan, Budwi Harsono, Agus Subrianto, Sri Agustin, Sari Utama Dewi, Sri Wanto, Zikra Fauzan Virawan, Aprilia Wulandari, & Nurul Firkhati Hidayah',
        ],
        '978-634-7526-21-2' => [
            'penerbit' => 'CV Hei Publishing Indonesia',
            'tim_penulis' => 'Faradika, M., Suyasa, W. B., Ikbal, M., Jatnika, G. R., Arviananda, R. R. D., Kusmardini, D., Fadillah, G., & Utami, C. R.',
        ],
        'Transportasi Perkerasan Jalan' => ['penerbit' => 'CV. HEI Publishing • Juli 2025'],
        'Timbunan dan Konstruksi Penahan Tanah' => ['penerbit' => 'CV. HEI Publishing • Maret 2026'],
        'Manajemen Konstruksi' => ['penerbit' => 'Menara Press Indonesia • 2026'],
    ];

    $platformMeta = [
        'orcid' => ['icon' => 'fa-brands fa-orcid text-base', 'box' => 'bg-emerald-50 text-[#a6ce39] group-hover:bg-[#a6ce39] group-hover:text-white', 'hover' => 'hover:text-[#a6ce39]', 'arrow' => 'group-hover:text-[#a6ce39]', 'mono' => true],
        'researchgate' => ['icon' => 'fa-brands fa-researchgate text-base', 'box' => 'bg-teal-50 text-[#00ccbb] group-hover:bg-[#00ccbb] group-hover:text-white', 'hover' => 'hover:text-[#00ccbb]', 'arrow' => 'group-hover:text-[#00ccbb]', 'mono' => false],
        'sinta' => ['icon' => 'fa-solid fa-graduation-cap text-sm', 'box' => 'bg-amber-50 text-amber-600 group-hover:bg-amber-600 group-hover:text-white', 'hover' => 'hover:text-amber-700', 'arrow' => 'group-hover:text-amber-600', 'mono' => false],
        'scholar' => ['icon' => 'fa-brands fa-google-scholar text-sm', 'box' => 'bg-blue-50 text-[#0070BA] group-hover:bg-[#0070BA] group-hover:text-white', 'hover' => 'hover:text-[#0070BA]', 'arrow' => 'group-hover:text-[#0070BA]', 'mono' => false],
        'scopus' => ['icon' => 'fa-solid fa-book-journal-whills text-sm', 'box' => 'bg-orange-50 text-orange-600 group-hover:bg-orange-600 group-hover:text-white', 'hover' => 'hover:text-orange-700', 'arrow' => 'group-hover:text-orange-600', 'mono' => true],
        'linkedin' => ['icon' => 'fa-brands fa-linkedin-in text-sm', 'box' => 'bg-sky-50 text-[#0A66C2] group-hover:bg-[#0A66C2] group-hover:text-white', 'hover' => 'hover:text-[#0A66C2]', 'arrow' => 'group-hover:text-[#0A66C2]', 'mono' => false],
        'instagram' => ['icon' => 'fa-brands fa-instagram text-sm', 'box' => 'bg-pink-50 text-pink-600 group-hover:bg-pink-600 group-hover:text-white', 'hover' => 'hover:text-pink-600', 'arrow' => 'group-hover:text-pink-600', 'mono' => false],
        'website' => ['icon' => 'fa-solid fa-globe text-sm', 'box' => 'bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white', 'hover' => 'hover:text-indigo-700', 'arrow' => 'group-hover:text-indigo-600', 'mono' => false],
        'lainnya' => ['icon' => 'fa-solid fa-link text-sm', 'box' => 'bg-slate-100 text-slate-600 group-hover:bg-slate-700 group-hover:text-white', 'hover' => 'hover:text-slate-900', 'arrow' => 'group-hover:text-slate-700', 'mono' => false],
    ];

    $sectionDefaults = \App\Models\Dosen::availableSectionTypes();
    $sections = $dosen->resolvedSections();
    $roadmapAtBottom = false;
    $roadmapSectionMeta = null;

    if ($dosen->hasRoadmap()) {
        $activeSections = array_values(array_filter($sections, fn (array $sec): bool => (bool) ($sec['tampil'] ?? true)));
        $lastActive = end($activeSections);
        if (is_array($lastActive) && ($lastActive['key'] ?? null) === 'roadmap') {
            $roadmapAtBottom = true;
            $roadmapSectionMeta = $lastActive;
        }
    }

    $renderedMainSectionCount = 0;
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', $dosen->meta_description ?: ('Biodata dan profil akademik ' . $namaDosen . ' - ' . $jabatanAkademik . ' Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, bidang keahlian ' . $kbkLabel . '.'))

@section('content')

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">{{ $namaDosen }}</span>
            </nav>

            <div class="flex items-center gap-2 flex-wrap">
                <span class="bg-[#0070BA]/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full border border-blue-400/30 uppercase tracking-wider">
                    {{ $badgePeran }}
                </span>
                <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-full border {{ $kbkTheme['hero'] }}">
                    KBK {{ $kbkLabel }}
                </span>
                @if(filled($dosen->jabatan_fungsional))
                    <span class="bg-amber-500/20 text-amber-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-amber-400/30">
                        {{ $dosen->jabatan_fungsional }}
                    </span>
                @endif
            </div>

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading tracking-tight text-white mt-2 leading-tight">
                {{ $namaDosen }}
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                {{-- Sidebar Kiri: Identitas, Kontak, Ringkasan --}}
                <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-24 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:overscroll-contain lg:pt-0.5 lg:pb-2 lg:pl-0.5 lg:pr-2 profile-sidebar-scroll">

                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 text-center">
                        <div class="relative w-48 sm:w-56 mx-auto aspect-square rounded-2xl overflow-hidden shadow-md border-2 border-slate-100 bg-[#CDCFDA] mb-5">
                            <img src="{{ $fotoUrl }}"
                                 alt="{{ $namaDosen }}"
                                 class="w-full h-full object-cover object-top">
                        </div>

                        <h2 class="text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            {{ $namaDosen }}
                        </h2>
                        <p class="text-xs font-semibold text-[#0070BA] mt-1">
                            {{ $jabatanAkademik }}
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            {{ $homebase }}
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium px-2.5 py-1 rounded-md border {{ $kbkTheme['side'] }}">
                                <i class="{{ $kbkTheme['icon'] }}"></i> {{ $kbkLabel }}
                            </span>
                            @if(filled($dosen->nidn))
                                <span class="inline-flex items-center gap-1.5 text-[11px] font-mono font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-md border border-slate-200">
                                    {{ strlen(preg_replace('/\D/', '', (string) $dosen->nidn)) >= 15 ? 'NUPTK' : 'NIDN' }}: {{ $dosen->nidn }}
                                </span>
                            @endif
                        </div>

                        @if(filled($dosen->email) || filled($dosen->telepon) || ! empty($tautanRiset) || filled($dosen->cv_url))
                            <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                                @if(filled($dosen->email))
                                    <a href="mailto:{{ $dosen->email }}"
                                       class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="truncate">
                                            <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                            <span class="font-medium truncate block">{{ $dosen->email }}</span>
                                        </div>
                                    </a>
                                @endif

                                @if(filled($dosen->telepon))
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $dosen->telepon) }}"
                                       class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-emerald-700 transition border border-transparent hover:border-slate-200 group">
                                        <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="truncate">
                                            <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Telepon / HP</span>
                                            <span class="font-medium truncate block font-mono">{{ $dosen->telepon }}</span>
                                        </div>
                                    </a>
                                @endif

                                @foreach($tautanRiset as $link)
                                    @php
                                        $pm = $platformMeta[$link['platform'] ?? 'lainnya'] ?? $platformMeta['lainnya'];
                                        $linkUrl = $link['url'] ?? null;
                                        $linkLabel = $link['label'] ?? ucfirst((string) ($link['platform'] ?? 'Profil'));
                                        $linkValue = $link['nilai'] ?? $linkUrl;
                                    @endphp
                                    @if(filled($linkUrl))
                                        <a href="{{ $linkUrl }}" target="_blank" rel="noopener noreferrer"
                                           class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 {{ $pm['hover'] }} transition border border-transparent hover:border-slate-200 group">
                                            <div class="w-8 h-8 rounded-lg {{ $pm['box'] }} flex items-center justify-center shrink-0 transition">
                                                <i class="{{ $pm['icon'] }}"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">{{ $linkLabel }}</span>
                                                <span class="font-medium truncate block {{ $pm['mono'] ? 'font-mono text-[11px]' : '' }}">{{ $linkValue }}</span>
                                            </div>
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto {{ $pm['arrow'] }}"></i>
                                        </a>
                                    @elseif(filled($linkValue))
                                        <div class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-50/70 text-slate-700 border border-slate-100">
                                            <div class="w-8 h-8 rounded-lg {{ $pm['box'] }} flex items-center justify-center shrink-0">
                                                <i class="{{ $pm['icon'] }}"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">{{ $linkLabel }}</span>
                                                <span class="font-medium truncate block text-[11px]">{{ $linkValue }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                @if(filled($dosen->cv_url))
                                    <a href="{{ $dosen->cv_url }}" target="_blank" rel="noopener noreferrer"
                                       class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-[#0070BA] hover:bg-[#0B2A4A] text-white text-xs font-bold transition shadow-sm mt-2">
                                        <i class="fa-solid fa-file-pdf"></i> Unduh Berkas CV Lengkap (PDF)
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-chart-simple text-[#0070BA]"></i> Ringkasan Rekam Jejak
                        </h3>
                        <div class="grid grid-cols-2 gap-2.5 text-center">
                            @foreach($statItems as $stat)
                                <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-xl sm:text-2xl font-black block {{ $statTextColors[$stat['warna'] ?? 'blue'] ?? 'text-[#0070BA]' }}">
                                        {{ $stat['nilai'] }}
                                    </span>
                                    <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">
                                        {{ $stat['label'] }}
                                    </span>
                                </div>
                            @endforeach

                            @if($books->isNotEmpty() && ! collect($statItems)->contains(fn (array $s): bool => str_contains(mb_strtolower((string) $s['label']), 'buku')))
                                <a href="#karya-buku" class="col-span-2 p-2.5 sm:p-3 rounded-xl bg-cyan-50/70 hover:bg-cyan-50 border border-cyan-200/70 flex items-center justify-between transition group">
                                    <span class="text-xs font-semibold text-cyan-900 flex items-center gap-2">
                                        <i class="fa-solid fa-book text-cyan-600" aria-hidden="true"></i> Karya Buku Ber-ISBN
                                    </span>
                                    <span class="text-sm font-black text-[#0B2A4A] group-hover:text-[#0070BA]">{{ $books->count() }} Judul</span>
                                </a>
                            @endif
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100">
                            <a href="{{ route('dosen') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-[#0B2A4A] hover:text-white text-slate-700 text-xs font-semibold transition duration-200">
                                <i class="fa-solid fa-arrow-left text-[11px]"></i> Kembali ke Semua Dosen
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Konten Utama Kanan: Mengikuti Urutan Bagian CV Dosen --}}
                <div class="lg:col-span-8 space-y-8">
                    @foreach($sections as $section)
                        @if(! ($section['tampil'] ?? true))
                            @continue
                        @endif

                        @php
                            $key = $section['key'];
                            $title = $section['judul'] ?: ($sectionDefaults[$key]['judul'] ?? 'Bagian Profil');
                            $subtitle = $section['subjudul'] ?: ($sectionDefaults[$key]['subjudul'] ?? '');
                        @endphp

                        {{-- 1. BIOGRAFI --}}
                        @if($key === 'biografi' && (! empty($biografiParagraphs) || ! empty($fokusKeahlian)))
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-5 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070BA] border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-user-tie"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                @if(! empty($biografiParagraphs))
                                    <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                                        @foreach($biografiParagraphs as $paragraph)
                                            <p>{!! nl2br(e($paragraph)) !!}</p>
                                        @endforeach
                                    </div>
                                @endif

                                @if(! empty($fokusKeahlian))
                                    <div class="mt-5 pt-5 border-t border-slate-100 flex flex-wrap gap-2">
                                        @foreach($fokusKeahlian as $focus)
                                            <span class="text-xs font-semibold px-3 py-1 rounded-lg border {{ $fokusPillClass }}">
                                                {{ $focus }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                        {{-- 2. PENDIDIKAN FORMAL --}}
                        @elseif($key === 'pendidikan' && ! empty($pendidikanList))
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-6 ml-2.5 my-2">
                                    @foreach($pendidikanList as $eduIndex => $edu)
                                        <div class="relative group">
                                            <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full {{ $eduIndex === 0 ? 'bg-[#0070BA] ring-4 ring-blue-100' : 'bg-slate-400 ring-4 ring-slate-100' }}"></div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                @if(filled($edu['jenjang'] ?? null))
                                                    <span class="inline-block text-[11px] font-bold px-2.5 py-0.5 rounded-md border {{ $eduIndex === 0 ? 'text-[#0070BA] bg-blue-50 border-blue-100' : 'text-slate-700 bg-slate-100 border-slate-200/60' }}">
                                                        {{ $edu['jenjang'] }}
                                                    </span>
                                                @endif
                                                @if(filled($edu['periode'] ?? null))
                                                    <span class="text-xs font-semibold text-slate-400 font-mono">{{ $edu['periode'] }}</span>
                                                @endif
                                            </div>
                                            @if(filled($edu['institusi'] ?? null))
                                                <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">{{ $edu['institusi'] }}</h4>
                                            @endif
                                            @if(filled($edu['prodi'] ?? null))
                                                <p class="text-xs text-slate-600 mt-0.5">{{ $edu['prodi'] }}</p>
                                            @endif
                                            @if(filled($edu['predikat'] ?? null))
                                                <div class="inline-flex items-center gap-1.5 text-xs font-semibold text-amber-700 bg-amber-50/80 border border-amber-200/70 px-2.5 py-1 rounded-lg mt-2">
                                                    <i class="fa-solid fa-award text-amber-500"></i> {{ $edu['predikat'] }}
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 3. KEAHLIAN PERANGKAT LUNAK --}}
                        @elseif($key === 'keahlian' && ! empty($keahlianGrup))
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-[#0070BA] border border-sky-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-laptop-code"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                    @foreach($keahlianGrup as $grp)
                                        @php
                                            $grpColor = $grp['warna'] ?? 'blue';
                                            $grpBg = match($grpColor) {
                                                'amber' => 'from-amber-50/70 to-amber-50/20 border-amber-200/80',
                                                'emerald' => 'from-emerald-50/70 to-emerald-50/20 border-emerald-200/80',
                                                'cyan' => 'from-cyan-50/70 to-cyan-50/20 border-cyan-200/80',
                                                default => 'from-blue-50/70 to-blue-50/20 border-blue-200/80',
                                            };
                                            $grpIconBg = match($grpColor) {
                                                'amber' => 'bg-amber-500',
                                                'emerald' => 'bg-emerald-600',
                                                'cyan' => 'bg-cyan-600',
                                                default => 'bg-[#0070BA]',
                                            };
                                            $grpLabel = match($grpColor) {
                                                'amber' => 'text-amber-700',
                                                'emerald' => 'text-emerald-700',
                                                'cyan' => 'text-cyan-700',
                                                default => 'text-[#0070BA]',
                                            };
                                            $grpChip = match($grpColor) {
                                                'amber' => 'text-amber-900 border-amber-200/70',
                                                'emerald' => 'text-emerald-900 border-emerald-200/70',
                                                'cyan' => 'text-cyan-900 border-cyan-200/70',
                                                default => 'text-blue-900 border-blue-200/70',
                                            };
                                            $items = $dosen->cleanList($grp['items'] ?? []);
                                        @endphp
                                        <div class="p-4 rounded-xl bg-gradient-to-br {{ $grpBg }} border">
                                            <div class="flex items-center gap-2.5 mb-2.5">
                                                <div class="w-8 h-8 rounded-lg {{ $grpIconBg }} text-white flex items-center justify-center shrink-0 text-xs shadow-sm">
                                                    <i class="fa-solid {{ $grpColor === 'amber' ? 'fa-compass-drafting' : 'fa-cubes' }}"></i>
                                                </div>
                                                <div>
                                                    @if(filled($grp['kategori'] ?? null))
                                                        <span class="text-[10px] {{ $grpLabel }} font-bold uppercase tracking-wider block">{{ $grp['kategori'] }}</span>
                                                    @endif
                                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">{{ $grp['judul'] ?? 'Kompetensi' }}</h4>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap gap-1.5">
                                                @foreach($items as $tool)
                                                    <span class="text-[11px] font-semibold {{ $grpChip }} bg-white px-2.5 py-1 rounded-md border shadow-sm">{{ $tool }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 4. PENGHARGAAN & REKOGNISI --}}
                        @elseif($key === 'penghargaan' && ! empty($penghargaanList))
                            @php
                                $renderedMainSectionCount++;
                                $medals = collect($penghargaanList)->filter(fn (array $a): bool => blank($a['gambar'] ?? null))->values();
                                $piagams = collect($penghargaanList)->filter(fn (array $a): bool => filled($a['gambar'] ?? null))->values();
                            @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-trophy"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                @foreach($medals as $medal)
                                    <div class="p-4 rounded-xl bg-gradient-to-br from-amber-50/70 to-amber-50/20 border border-amber-200/80 flex items-start gap-3.5 mb-3.5 hover:shadow-2xs transition">
                                        <div class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0 text-base shadow-2xs">
                                            <i class="fa-solid fa-medal"></i>
                                        </div>
                                        <div>
                                            @if(filled($medal['meta'] ?? null))
                                                <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider block">{{ $medal['meta'] }}</span>
                                            @endif
                                            <h4 class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5 leading-snug">{{ $medal['judul'] ?? '' }}</h4>
                                            @if(filled($medal['deskripsi'] ?? null))
                                                <p class="text-[11px] text-slate-600 mt-1 leading-relaxed">{{ $medal['deskripsi'] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                                @if($piagams->isNotEmpty())
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5">
                                        @foreach($piagams as $award)
                                            @php $imgUrl = \App\Models\Dosen::resolvePublicUrl($award['gambar']); @endphp
                                            <div class="rounded-xl bg-gradient-to-br from-blue-50/60 to-white border border-blue-200/80 overflow-hidden flex flex-col hover:border-[#0070BA]/60 hover:shadow-sm transition group">
                                                <button type="button"
                                                        onclick="openPiagamModal(this)"
                                                        data-src="{{ $imgUrl }}"
                                                        data-title="{{ $award['judul'] ?? 'Piagam' }}"
                                                        data-meta="{{ $award['meta'] ?? '' }}"
                                                        aria-label="Perbesar piagam {{ $award['judul'] ?? 'Penghargaan' }}"
                                                        class="relative aspect-[4/3] w-full overflow-hidden bg-slate-100 cursor-zoom-in focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#0070BA]">
                                                    <img src="{{ $imgUrl }}"
                                                         alt="Piagam {{ $award['judul'] ?? '' }} - {{ $namaDosen }}"
                                                         loading="lazy"
                                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                                    <span class="absolute bottom-2 right-2 bg-[#0B2A4A]/80 backdrop-blur-sm text-white text-[10px] font-semibold px-2 py-0.5 rounded-md inline-flex items-center gap-1 shadow-sm">
                                                        <i class="fa-solid fa-magnifying-glass-plus text-[9px] text-amber-400"></i> Perbesar
                                                    </span>
                                                </button>
                                                <div class="p-3.5 flex-1 flex flex-col">
                                                    @if(filled($award['meta'] ?? null))
                                                        <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider block">{{ $award['meta'] }}</span>
                                                    @endif
                                                    <h4 class="text-xs sm:text-[13px] font-bold text-slate-900 mt-1 leading-snug">{{ $award['judul'] ?? '' }}</h4>
                                                    @if(filled($award['deskripsi'] ?? null))
                                                        <p class="text-[11px] text-slate-600 mt-1.5 leading-relaxed">{{ $award['deskripsi'] }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                        {{-- 5. PENGALAMAN KERJA & INDUSTRI --}}
                        @elseif($key === 'pengalaman' && ! empty($pengalamanList))
                            @php
                                $renderedMainSectionCount++;
                                $isDetailedExp = collect($pengalamanList)->contains(fn (array $exp): bool =>
                                    filled($exp['periode'] ?? null) || str_contains((string) ($exp['deskripsi'] ?? ''), "\n")
                                );
                            @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                @if($isDetailedExp)
                                    <div class="space-y-4">
                                        @foreach($pengalamanList as $exp)
                                            @php
                                                $descLines = array_values(array_filter(array_map('trim', preg_split('/\R/', (string) ($exp['deskripsi'] ?? '')) ?: [])));
                                            @endphp
                                            <div class="p-4 sm:p-5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-blue-300 hover:bg-white transition-all duration-200">
                                                <div class="flex items-start justify-between gap-3 flex-wrap">
                                                    <div>
                                                        @if(filled($exp['tag'] ?? null))
                                                            <span class="inline-block text-[10px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200/70 uppercase tracking-wider">
                                                                {{ $exp['tag'] }}
                                                            </span>
                                                        @endif
                                                        @if(filled($exp['instansi'] ?? null))
                                                            <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">{{ $exp['instansi'] }}</h4>
                                                        @endif
                                                        @if(filled($exp['jabatan'] ?? null))
                                                            <p class="text-xs font-semibold text-slate-700">{{ $exp['jabatan'] }}</p>
                                                        @endif
                                                    </div>
                                                    @if(filled($exp['periode'] ?? null) || filled($exp['lokasi'] ?? null))
                                                        <div class="text-left sm:text-right">
                                                            @if(filled($exp['periode'] ?? null))
                                                                <span class="text-[11px] font-bold text-slate-600 bg-white px-2.5 py-1 rounded-md border border-slate-200/80 font-mono inline-block">
                                                                    {{ $exp['periode'] }}
                                                                </span>
                                                            @endif
                                                            @if(filled($exp['lokasi'] ?? null))
                                                                <p class="text-[11px] text-slate-500 mt-1">
                                                                    <i class="fa-solid fa-location-dot text-rose-500 mr-1"></i>{{ $exp['lokasi'] }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>

                                                @if(count($descLines) > 1)
                                                    <ul class="mt-3 space-y-1.5 text-xs text-slate-600 list-disc pl-4 leading-relaxed">
                                                        @foreach($descLines as $line)
                                                            <li>{{ ltrim($line, "-• \t") }}</li>
                                                        @endforeach
                                                    </ul>
                                                @elseif(count($descLines) === 1)
                                                    <p class="text-xs text-slate-600 mt-3 leading-relaxed">{{ $descLines[0] }}</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                        @foreach($pengalamanList as $expIdx => $exp)
                                            @php
                                                $expBg = match($expIdx % 3) {
                                                    1 => 'bg-emerald-100/80 text-emerald-700',
                                                    2 => 'bg-blue-100/80 text-blue-700',
                                                    default => 'bg-blue-100/80 text-[#0070BA]',
                                                };
                                                $expIcon = match($expIdx % 3) {
                                                    1 => 'fa-city',
                                                    2 => 'fa-newspaper',
                                                    default => 'fa-chalkboard-user',
                                                };
                                            @endphp
                                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                                <div class="w-7 h-7 rounded-lg {{ $expBg }} flex items-center justify-center text-xs mb-2">
                                                    <i class="fa-solid {{ $expIcon }}"></i>
                                                </div>
                                                <span class="font-bold text-slate-900 block text-xs">{{ $exp['tag'] ?? ($exp['jabatan'] ?? '') }}</span>
                                                <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">{{ $exp['deskripsi'] ?? ($exp['instansi'] ?? '') }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                        {{-- 6. PELATIHAN & SERTIFIKASI --}}
                        @elseif($key === 'pelatihan' && ! empty($pelatihanList))
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-certificate"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    @foreach($pelatihanList as $tr)
                                        <div class="p-3.5 rounded-xl bg-amber-50/50 border border-amber-200/70 flex items-center justify-between gap-3">
                                            <div>
                                                <span class="text-xs font-semibold text-slate-800 block">{{ $tr['nama'] ?? '' }}</span>
                                                @if(filled($tr['penyelenggara'] ?? null))
                                                    <span class="text-[10px] text-slate-500 block mt-0.5">{{ $tr['penyelenggara'] }}</span>
                                                @endif
                                            </div>
                                            @if(filled($tr['tahun'] ?? null))
                                                <span class="text-[11px] font-bold text-amber-800 bg-white px-2.5 py-0.5 rounded-md border border-amber-200 font-mono shrink-0">{{ $tr['tahun'] }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 7. KOLEKSI KARYA BUKU (Sinkron Menu Buku Admin) --}}
                        @elseif($key === 'buku' && ($books->isNotEmpty() || ! empty($dosen->urutan_bagian)))
                            @php $renderedMainSectionCount++; @endphp
                            <div id="karya-buku" class="scroll-mt-24 bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-600 border border-cyan-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                            <i class="fa-solid fa-book" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                                {{ $title }}
                                            </h3>
                                            @if(filled($subtitle))
                                                <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs font-bold px-3.5 py-1 bg-cyan-50 text-cyan-800 rounded-full border border-cyan-200 shadow-sm">
                                            <i class="fa-solid fa-book-bookmark text-cyan-600 mr-1" aria-hidden="true"></i> {{ $books->count() }} Buku
                                        </span>
                                        <a href="{{ route('buku') }}" class="text-xs font-semibold text-[#0070BA] hover:text-[#0B2A4A] hover:underline px-2 py-1">
                                            Lihat Katalog
                                        </a>
                                    </div>
                                </div>

                                @if($bukuFiksi->isNotEmpty())
                                    <div class="mb-8">
                                        <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-slate-100">
                                            <h4 class="text-sm font-bold text-slate-800">Buku Non-Fiksi (Keteknik-sipilan)</h4>
                                            <span class="text-[10px] text-cyan-800 font-semibold bg-cyan-50 border border-cyan-200/60 px-2.5 py-0.5 rounded-full ml-auto">{{ $bukuSipil->count() }} Judul</span>
                                        </div>
                                        <div class="space-y-2.5">
                                            @forelse($bukuSipil as $index => $buku)
                                                <div class="p-3 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-cyan-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-center gap-3 group">
                                                    <div class="shrink-0 w-10 h-14 sm:w-12 sm:h-16 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-slate-100">
                                                        @if($buku->cover_url)
                                                            <img src="{{ $buku->cover_url }}" alt="{{ $buku->judul }}" class="w-full h-full object-cover" onerror="this.style.display='none'">
                                                        @else
                                                            <div class="w-full h-full bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] flex items-center justify-center text-white/40"><i class="fa-solid fa-book text-xs"></i></div>
                                                        @endif
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <div class="flex items-start gap-2">
                                                            <span class="w-5 h-5 rounded bg-cyan-100 text-cyan-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-cyan-200/70">{{ $index + 1 }}</span>
                                                            <h5 class="text-xs sm:text-[13px] font-bold text-slate-800 leading-snug group-hover:text-cyan-950 transition-colors">{{ $buku->judul }}</h5>
                                                        </div>
                                                        <div class="flex items-center gap-2 mt-1.5 flex-wrap">
                                                            @if(! empty($buku->isbn))
                                                                <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200/80">ISBN: {{ $buku->isbn }}</span>
                                                            @endif
                                                            <span class="text-cyan-700 bg-cyan-50 font-semibold text-[10px] px-2 py-0.5 rounded-full border border-cyan-200/70">{{ $buku->label ?: 'Non-Fiksi' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="text-xs text-slate-400">Belum ada buku non-fiksi yang tertaut.</p>
                                            @endforelse
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-slate-100">
                                            <i class="fa-solid fa-feather-pointed text-amber-600 text-sm"></i>
                                            <h4 class="text-sm font-bold text-slate-800">Buku Fiksi (Novel Kreatif)</h4>
                                            <span class="text-[10px] text-amber-800 font-semibold bg-amber-50 border border-amber-200/60 px-2.5 py-0.5 rounded-full ml-auto">{{ $bukuFiksi->count() }} Judul</span>
                                        </div>
                                        <div class="space-y-2.5">
                                            @foreach($bukuFiksi as $index => $novel)
                                                <div class="p-3 rounded-xl bg-amber-50/30 border border-amber-200/70 hover:border-amber-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-center gap-3 group">
                                                    <div class="shrink-0 w-10 h-14 sm:w-12 sm:h-16 rounded-md overflow-hidden border border-amber-200/70 shadow-sm bg-amber-50">
                                                        @if($novel->cover_url)
                                                            <img src="{{ $novel->cover_url }}" alt="{{ $novel->judul }}" class="w-full h-full object-cover" onerror="this.style.display='none'">
                                                        @else
                                                            <div class="w-full h-full bg-gradient-to-br from-amber-600 to-amber-800 flex items-center justify-center text-white/60"><i class="fa-solid fa-book text-xs"></i></div>
                                                        @endif
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <div class="flex items-start gap-2">
                                                            <span class="w-5 h-5 rounded bg-amber-100 text-amber-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-amber-200/70">{{ $index + 1 }}</span>
                                                            <h5 class="text-xs sm:text-[13px] font-bold text-slate-800 leading-snug group-hover:text-amber-950 transition-colors">{{ $novel->judul }}</h5>
                                                        </div>
                                                        <div class="flex items-center gap-2 mt-1.5 flex-wrap">
                                                            @if(! empty($novel->isbn))
                                                                <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200/80">ISBN: {{ $novel->isbn }}</span>
                                                            @endif
                                                            <span class="text-amber-700 bg-amber-100/70 font-semibold text-[10px] px-2 py-0.5 rounded-full border border-amber-200">{{ $novel->label ?: 'Novel Fiksi' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="space-y-3.5">
                                        @forelse($books as $index => $book)
                                            @php
                                                $coverUrl = $book->cover_url;
                                                $detailMeta = $bukuMetaLookup[$book->isbn ?? ''] ?? ($bukuMetaLookup[$book->judul] ?? null);
                                                $badgeLabel = $book->label ?: ($book->kategori === 'fiksi' ? 'Novel Fiksi' : 'Non-Fiksi');
                                            @endphp
                                            <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-cyan-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-start gap-4 group">
                                                @if($coverUrl)
                                                    <div class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-slate-200 bg-slate-100 shadow-xs">
                                                        <img src="{{ $coverUrl }}" alt="Sampul {{ $book->judul }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                                    </div>
                                                @else
                                                    <div class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-blue-950/20 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] text-white p-2 flex flex-col justify-between shadow-xs">
                                                        <span class="text-[8px] font-bold uppercase tracking-wider text-amber-400">{{ $badgeLabel }}</span>
                                                        <i class="fa-solid fa-book text-base text-white/30 self-center" aria-hidden="true"></i>
                                                        <span class="text-[8px] font-semibold leading-tight text-slate-200 line-clamp-2">{{ $book->judul }}</span>
                                                    </div>
                                                @endif

                                                <div class="flex-1 min-w-0">
                                                    <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                                                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-cyan-50 text-cyan-800 border border-cyan-200/70">
                                                            #{{ $index + 1 }} &bull; {{ $badgeLabel }}
                                                        </span>
                                                        @if($book->tahun)
                                                            <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                                                {{ $book->tahun }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-[#0B2A4A] transition-colors">
                                                        {{ $book->judul }}
                                                    </h4>
                                                    <p class="text-xs text-slate-600 mt-1">
                                                        <strong class="text-slate-700">Penulis:</strong> {{ $detailMeta['tim_penulis'] ?? $book->penulis }}
                                                    </p>
                                                    @if(! empty($detailMeta['penerbit']))
                                                        <p class="text-[11px] text-slate-500 mt-0.5">
                                                            <strong class="text-slate-700">Penerbit:</strong> {{ $detailMeta['penerbit'] }}
                                                        </p>
                                                    @endif
                                                    @if(! empty($book->isbn))
                                                        <div class="mt-2.5 pt-2 border-t border-slate-100">
                                                            <span class="inline-block font-mono text-[11px] bg-white px-2.5 py-0.5 rounded-md border border-slate-200/80 text-slate-600">
                                                                ISBN: {{ $book->isbn }}
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @empty
                                            <div class="p-6 rounded-xl bg-slate-50 border border-slate-200/80 text-center text-xs text-slate-500">
                                                Belum ada karya buku yang ditautkan ke profil ini.
                                            </div>
                                        @endforelse
                                    </div>
                                @endif
                            </div>

                        {{-- 8. RIWAYAT PENGAJARAN --}}
                        @elseif($key === 'pengajaran' && ! empty($pengajaranList))
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-[#0070BA] border border-sky-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-chalkboard-user"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    @foreach($pengajaranList as $teach)
                                        @php $courses = $dosen->cleanList($teach['mata_kuliah'] ?? []); @endphp
                                        <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80">
                                            <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100 font-mono mb-2.5">
                                                {{ $teach['semester'] ?? '' }}
                                            </span>
                                            <ul class="space-y-1 text-xs text-slate-700 list-disc pl-4">
                                                @foreach($courses as $mk)
                                                    <li>{{ $mk }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 9. PUBLIKASI & PENELITIAN --}}
                        @elseif($key === 'publikasi' && $publikasiList->isNotEmpty())
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                            <i class="fa-solid fa-newspaper"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                                {{ $title }}
                                            </h3>
                                            @if(filled($subtitle))
                                                <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-sm">
                                        <i class="fa-solid fa-globe text-indigo-600 mr-1"></i> {{ $publikasiList->count() }} Karya
                                    </span>
                                </div>

                                <div class="space-y-3.5">
                                    @foreach($publikasiList as $index => $pub)
                                        <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-indigo-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                            <div class="flex items-center justify-between gap-3 mb-1.5 flex-wrap">
                                                <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-indigo-50 text-indigo-700 border border-indigo-200/60">
                                                    #{{ $index + 1 }} &bull; {{ $pub['jenis'] }}
                                                </span>
                                                @if(filled($pub['year']))
                                                    <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                                        {{ $pub['year'] }}
                                                    </span>
                                                @endif
                                            </div>
                                            <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-indigo-950 transition-colors">
                                                {{ $pub['title'] }}
                                            </h4>
                                            @if(filled($pub['venue']))
                                                <p class="text-xs text-indigo-950/80 font-medium italic mt-1.5 flex items-center gap-1.5 flex-wrap">
                                                    <i class="fa-solid fa-book-open text-indigo-500 text-[11px]"></i>
                                                    <span>{{ $pub['venue'] }}</span>
                                                    @if(filled($pub['vol']))
                                                        <span class="text-slate-400 not-italic">&bull;</span>
                                                        <span class="text-slate-600 not-italic">{{ $pub['vol'] }}</span>
                                                    @endif
                                                </p>
                                            @endif
                                            @if(filled($pub['authors']))
                                                <p class="text-[11px] text-slate-500 mt-1">
                                                    <strong class="text-slate-700">Penulis:</strong> {{ $pub['authors'] }}
                                                </p>
                                            @endif
                                            @if((filled($pub['doi_label']) && $pub['doi_label'] !== '#') || filled($pub['badge_label']))
                                                <div class="mt-2.5 pt-2 border-t border-slate-100 flex items-center justify-between flex-wrap gap-2">
                                                    @if(filled($pub['doi']) && $pub['doi'] !== '#')
                                                        <a href="{{ $pub['doi'] }}" target="_blank" rel="noopener noreferrer"
                                                           class="text-[11px] text-[#0070BA] hover:text-[#0B2A4A] font-mono inline-flex items-center gap-1.5 bg-white px-2.5 py-0.5 rounded border border-slate-200/80 hover:border-[#0070BA]/40 transition shadow-sm">
                                                            <i class="fa-solid fa-link text-[10px] text-slate-400"></i> DOI: {{ $pub['doi_label'] ?: $pub['doi'] }}
                                                            <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-0.5"></i>
                                                        </a>
                                                    @elseif(filled($pub['doi_label']))
                                                        <span class="text-[11px] text-slate-500 font-mono inline-flex items-center gap-1.5 bg-white px-2 py-0.5 rounded border border-slate-200/70">
                                                            <i class="fa-solid fa-link text-[10px] text-slate-400"></i> DOI: {{ $pub['doi_label'] }}
                                                        </span>
                                                    @else
                                                        <span></span>
                                                    @endif

                                                    @if(filled($pub['badge_label']))
                                                        <span class="text-[10px] text-indigo-600 font-semibold bg-indigo-50/60 px-2 py-0.5 rounded">{{ $pub['badge_label'] }}</span>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 10. KONFERENSI INTERNASIONAL --}}
                        @elseif($key === 'konferensi' && ! empty($konferensiList))
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                        <i class="fa-solid fa-earth-americas"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                            {{ $title }}
                                        </h3>
                                        @if(filled($subtitle))
                                            <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="space-y-3.5">
                                    @foreach($konferensiList as $item)
                                        <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-blue-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                            <div class="flex items-center justify-between gap-2 text-xs mb-1.5 flex-wrap">
                                                @if(filled($item['acara'] ?? null))
                                                    <span class="font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md text-[11px] border border-blue-200/70">
                                                        <i class="fa-solid fa-users-viewfinder text-[10px] mr-1"></i> {{ $item['acara'] }}
                                                    </span>
                                                @endif
                                                @if(filled($item['tahun'] ?? null))
                                                    <span class="text-slate-500 font-mono text-[11px] font-bold bg-slate-100 px-2 py-0.5 rounded">{{ $item['tahun'] }}</span>
                                                @endif
                                            </div>
                                            <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug mt-1 group-hover:text-blue-950 transition-colors">
                                                {{ $item['judul'] ?? '' }}
                                            </h4>
                                            @if(filled($item['penulis'] ?? null))
                                                <p class="text-[11px] text-slate-500 mt-1.5">
                                                    <strong class="text-slate-700">Penulis:</strong> {{ $item['penulis'] }}
                                                </p>
                                            @endif
                                            @if(filled($item['lokasi'] ?? null))
                                                <p class="text-[11px] text-slate-600 font-medium flex items-center gap-1.5 mt-1">
                                                    <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i> {{ $item['lokasi'] }}
                                                </p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 11. PENGABDIAN PADA MASYARAKAT --}}
                        @elseif($key === 'pengabdian' && $pengabdianList->isNotEmpty())
                            @php $renderedMainSectionCount++; @endphp
                            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-600 border border-teal-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                            <i class="fa-solid fa-hand-holding-heart"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                                {{ $title }}
                                            </h3>
                                            @if(filled($subtitle))
                                                <p class="text-xs text-slate-400 font-medium">{{ $subtitle }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <span class="text-xs font-bold px-3.5 py-1 bg-teal-50 text-teal-800 rounded-full border border-teal-200 shadow-sm">
                                        {{ $pengabdianList->count() }} Kegiatan
                                    </span>
                                </div>

                                <div class="space-y-3">
                                    @foreach($pengabdianList as $index => $pkm)
                                        <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-teal-400 hover:bg-white transition-all duration-200 flex items-start justify-between gap-3">
                                            <div class="space-y-1">
                                                <span class="inline-block text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-teal-50 text-teal-700 border border-teal-200/60">
                                                    #{{ $index + 1 }}
                                                </span>
                                                <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">{{ $pkm['judul'] }}</h4>
                                                @if(filled($pkm['keterangan']))
                                                    <p class="text-[11px] text-slate-500">{{ $pkm['keterangan'] }}</p>
                                                @endif
                                            </div>
                                            @if(filled($pkm['tahun']))
                                                <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono shrink-0">
                                                    {{ $pkm['tahun'] }}
                                                </span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        {{-- 12. ROADMAP INLINE (bila diurutkan sebelum akhir) --}}
                        @elseif($key === 'roadmap' && ! $roadmapAtBottom && $dosen->hasRoadmap())
                            @php $renderedMainSectionCount++; @endphp
                            @include('pages.dosen._roadmap', [
                                'dosen' => $dosen,
                                'roadmap' => $dosen->roadmap,
                                'title' => $title,
                                'subtitle' => $subtitle,
                                'wrapperClass' => '',
                            ])

                        {{-- 13. BAGIAN CV TAMBAHAN / KUSTOM --}}
                        @elseif($key === 'tambahan' && ! empty($bagianTambahan))
                            @foreach($bagianTambahan as $custom)
                                @php
                                    $customItems = $dosen->cleanList($custom['items'] ?? []);
                                    if (empty($customItems)) {
                                        continue;
                                    }
                                    $renderedMainSectionCount++;
                                    $customIcon = match($custom['ikon'] ?? 'bookmark') {
                                        'award' => 'fa-award',
                                        'users' => 'fa-users',
                                        'briefcase' => 'fa-briefcase',
                                        'certificate' => 'fa-certificate',
                                        'globe' => 'fa-globe',
                                        default => 'fa-bookmark',
                                    };
                                @endphp
                                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                                        <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#0B2A4A] border border-slate-200 flex items-center justify-center font-bold text-base shadow-sm">
                                            <i class="fa-solid {{ $customIcon }}"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                                {{ $custom['judul'] ?? 'Informasi Tambahan' }}
                                            </h3>
                                            @if(filled($custom['subjudul'] ?? null))
                                                <p class="text-xs text-slate-400 font-medium">{{ $custom['subjudul'] }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="space-y-3">
                                        @foreach($customItems as $item)
                                            <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-blue-300 hover:bg-white transition-all duration-200">
                                                <div class="flex items-start justify-between gap-3 flex-wrap">
                                                    <div>
                                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">{{ $item['judul'] ?? '' }}</h4>
                                                        @if(filled($item['subjudul'] ?? null))
                                                            <p class="text-xs font-medium text-[#0070BA] mt-0.5">{{ $item['subjudul'] }}</p>
                                                        @endif
                                                    </div>
                                                    @if(filled($item['tahun'] ?? null))
                                                        <span class="text-[11px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-md border border-slate-200 font-mono shrink-0">{{ $item['tahun'] }}</span>
                                                    @endif
                                                </div>
                                                @if(filled($item['deskripsi'] ?? null))
                                                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">{{ $item['deskripsi'] }}</p>
                                                @endif
                                                @if(filled($item['url'] ?? null))
                                                    <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-[#0070BA] hover:underline mt-2">
                                                        Lihat Tautan <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endforeach

                    @if($renderedMainSectionCount === 0 && ! $roadmapAtBottom)
                        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-8 text-center">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0070BA] flex items-center justify-center text-xl mx-auto mb-3">
                                <i class="fa-solid fa-address-card"></i>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading">Profil Akademik Dosen</h3>
                            <p class="text-xs sm:text-sm text-slate-500 mt-1.5 max-w-md mx-auto leading-relaxed">
                                Biodata lengkap {{ $namaDosen }} (KBK {{ $kbkLabel }}) sedang dilengkapi melalui panel administrasi Program Studi.
                            </p>
                        </div>
                    @endif
                </div>

            </div>

            {{-- Research Roadmap Lebar Penuh di Bawah Grid Utama --}}
            @if($roadmapAtBottom && $dosen->hasRoadmap())
                @include('pages.dosen._roadmap', [
                    'dosen' => $dosen,
                    'roadmap' => $dosen->roadmap,
                    'title' => $roadmapSectionMeta['judul'] ?? null,
                    'subtitle' => $roadmapSectionMeta['subjudul'] ?? null,
                    'wrapperClass' => 'mt-8',
                ])
            @endif

        </div>
    </section>

    @push('styles')
    <style>
        @media (min-width: 1024px) {
            .profile-sidebar-scroll::-webkit-scrollbar { width: 5px; }
            .profile-sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
            .profile-sidebar-scroll::-webkit-scrollbar-thumb { background-color: rgba(148, 163, 184, 0.55); border-radius: 9999px; }
            .profile-sidebar-scroll::-webkit-scrollbar-thumb:hover { background-color: rgba(100, 116, 139, 0.8); }
            .profile-sidebar-scroll { scrollbar-width: thin; scrollbar-color: rgba(148, 163, 184, 0.55) transparent; }
        }
    </style>
    @endpush

    @if($hasPiagamImage)
        <div id="modal-piagam-dosen" class="fixed inset-0 z-50 hidden bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="piagam-modal-title">
            <div class="bg-white rounded-2xl max-w-3xl w-full overflow-hidden shadow-2xl border border-slate-200">
                <div class="bg-[#0B2A4A] px-5 py-3.5 flex items-center justify-between gap-4 text-white">
                    <div class="min-w-0">
                        <span id="piagam-modal-meta" class="block text-[10px] font-bold uppercase tracking-wider text-amber-400"></span>
                        <h4 id="piagam-modal-title" class="text-sm sm:text-base font-bold truncate"></h4>
                    </div>
                    <button type="button" onclick="closePiagamModal()" aria-label="Tutup pratinjau piagam" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-slate-200 hover:text-white flex items-center justify-center shrink-0 transition">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="bg-slate-900/95 p-3 sm:p-5 flex items-center justify-center">
                    <img id="piagam-modal-img" src="" alt="Piagam Penghargaan" class="max-h-[75vh] w-auto max-w-full object-contain rounded-lg shadow-lg">
                </div>
            </div>
        </div>

        @push('scripts')
        <script>
            function openPiagamModal(trigger) {
                const modal = document.getElementById('modal-piagam-dosen');
                const img = document.getElementById('piagam-modal-img');
                const title = document.getElementById('piagam-modal-title');
                const meta = document.getElementById('piagam-modal-meta');
                if (!modal || !img || !title || !meta) return;

                img.src = trigger.dataset.src || '';
                img.alt = 'Piagam ' + (trigger.dataset.title || 'Penghargaan');
                title.textContent = trigger.dataset.title || '';
                meta.textContent = trigger.dataset.meta || '';
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closePiagamModal() {
                const modal = document.getElementById('modal-piagam-dosen');
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            }

            document.addEventListener('click', function (e) {
                const modal = document.getElementById('modal-piagam-dosen');
                if (modal && e.target === modal) {
                    closePiagamModal();
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closePiagamModal();
                }
            });
        </script>
        @endpush
    @endif

@endsection
