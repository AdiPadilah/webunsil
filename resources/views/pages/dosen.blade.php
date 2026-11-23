@extends('layouts.app')

@section('title', 'Dosen | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Daftar dosen resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi berkualifikasi S-2 dan S-3.')

@section('content')
@php
$dosenList = [
    // 1. Rekayasa Sumber Daya Air (6 dosen)
    [
        'slug' => 'empung',
        'nama' => 'Dr. Ir. Empung, S.T., M.T.',
        'kbk' => 'keairan',
        'kbk_label' => 'Rekayasa Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50',
    ],
    [
        'slug' => 'andhy-romdani',
        'nama' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
        'kbk' => 'keairan',
        'kbk_label' => 'Rekayasa Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50',
    ],
    [
        'slug' => 'pengki-irawan',
        'nama' => 'Ir. Pengki Irawan, S.TP., M.Si.',
        'kbk' => 'keairan',
        'kbk_label' => 'Rekayasa Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50',
    ],
    [
        'slug' => 'novia-komala-sari',
        'nama' => 'Novia Komala Sari, S.Pd., M.T.',
        'kbk' => 'keairan',
        'kbk_label' => 'Rekayasa Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50',
    ],
    [
        'slug' => 'galih-rahmat-jatnika',
        'nama' => 'Galih Rahmat Jatnika, S.T., M.T.',
        'kbk' => 'keairan',
        'kbk_label' => 'Rekayasa Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50',
    ],
    [
        'slug' => 'raden-roro-dita',
        'nama' => 'Raden Roro Dita Arviananda, S.Pd., M.Eng.',
        'kbk' => 'keairan',
        'kbk_label' => 'Rekayasa Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50',
    ],

    // 2. Rekayasa Transportasi dan Jalan Raya (7 dosen)
    [
        'slug' => 'nina-herlina',
        'nama' => 'Ir. Nina Herlina, Dra., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],
    [
        'slug' => 'herianto',
        'nama' => 'Herianto, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],
    [
        'slug' => 'hendra',
        'nama' => 'Ir. Hendra, S.T., M.Sc.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],
    [
        'slug' => 'gary-raya-prima',
        'nama' => 'Dr. Gary Raya Prima, S.Pd., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],
    [
        'slug' => 'muhamad-anugerah',
        'nama' => 'Muhamad Anugerah Ramadhan, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],
    [
        'slug' => 'indrajathie-aziz',
        'nama' => 'Indrajathie Aziz, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],
    [
        'slug' => 'kartika-seinari',
        'nama' => 'Kartika Seinari Manggala, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi dan Jalan Raya',
        'badge_class' => 'text-emerald-800 bg-emerald-50',
    ],

    // 3. Rekayasa Struktur dan Bahan (5 dosen)
    [
        'slug' => 'yusep-ramdani',
        'nama' => 'Dr. Ir. Yusep Ramdani, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur dan Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50',
    ],
    [
        'slug' => 'rosi-nursani',
        'nama' => 'Rosi Nursani, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur dan Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50',
    ],
    [
        'slug' => 'syarif-al-huseiny',
        'nama' => 'Mohammad Syarif Al-Huseiny, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur dan Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50',
    ],
    [
        'slug' => 'intan-nuriskha',
        'nama' => 'Intan Nuriskha Rachma, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur dan Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50',
    ],
    [
        'slug' => 'sri-wanto',
        'nama' => 'Sri Wanto, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur dan Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50',
    ],

    // 4. Rekayasa Geoteknik (3 dosen)
    [
        'slug' => 'iman-handiman',
        'nama' => 'Dr. Ir. Iman Handiman, S.T., M.T.',
        'kbk' => 'geoteknik',
        'kbk_label' => 'Rekayasa Geoteknik',
        'badge_class' => 'text-amber-800 bg-amber-50',
    ],
    [
        'slug' => 'fitriana-sarifah',
        'nama' => 'Ir. Fitriana Sarifah, S.T., M.T.',
        'kbk' => 'geoteknik',
        'kbk_label' => 'Rekayasa Geoteknik',
        'badge_class' => 'text-amber-800 bg-amber-50',
    ],
    [
        'slug' => 'zakwan-gusnadi',
        'nama' => 'Zakwan Gusnadi, S.T., M.T.',
        'kbk' => 'geoteknik',
        'kbk_label' => 'Rekayasa Geoteknik',
        'badge_class' => 'text-amber-800 bg-amber-50',
    ],

    // 5. Manajemen Rekayasa Konstruksi (3 dosen)
    [
        'slug' => 'hidayanto',
        'nama' => 'Hidayanto, S.T., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Rekayasa Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50',
    ],
    [
        'slug' => 'shanti-astri-noviani',
        'nama' => 'Shanti Astri Noviani, S.Pd., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Rekayasa Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50',
    ],
    [
        'slug' => 'ridha-al-mustafa',
        'nama' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Rekayasa Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50',
    ],
];
@endphp

    <!-- Hero Header -->
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Dosen</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Tenaga Pengajar
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Dosen &amp; Tenaga Pengajar
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Didukung oleh staf pengajar berkualifikasi Magister (S-2) dan Doktor (S-3) lulusan perguruan tinggi terkemuka di dalam dan luar negeri, terdistribusi ke dalam Kelompok Bidang Keahlian (KBK) keinsinyuran sipil.
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-12 sm:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Tab Filter 5 Bidang Keahlian - Satu Baris Scrollable -->
            <div class="mb-12 overflow-x-auto scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                <div class="flex items-center gap-2 p-2 bg-slate-100/90 rounded-2xl border shadow-inner min-w-max mx-auto w-fit">
                    <button type="button" onclick="filterKbk('all', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 shadow-md bg-[#0B2A4A] text-amber-400 border border-amber-400/40">
                        Semua Dosen
                    </button>
                    <button type="button" onclick="filterKbk('struktur', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Rekayasa Struktur dan Bahan (5)
                    </button>
                    <button type="button" onclick="filterKbk('keairan', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Rekayasa Sumber Daya Air (6)
                    </button>
                    <button type="button" onclick="filterKbk('geoteknik', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Rekayasa Geoteknik (3)
                    </button>
                    <button type="button" onclick="filterKbk('transportasi', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Rekayasa Transportasi dan Jalan Raya (7)
                    </button>
                    <button type="button" onclick="filterKbk('manajemen', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Manajemen Rekayasa Konstruksi (3)
                    </button>
                </div>
            </div>

            <!-- Grid Kartu Dosen (Responsif: 1 col HP, 2 col Tablet, 4 col Desktop) -->
            <div id="dosen-grid" class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-7 mb-14">
                @foreach($dosenList as $dosen)
                <div class="dosen-item bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group" data-kbk="{{ $dosen['kbk'] }}">
                    <!-- Foto Portrait Persegi -->
                    <div class="aspect-square overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/dosen/' . $dosen['slug'] . '.jpg') }}?v={{ @filemtime(public_path('images/dosen/' . $dosen['slug'] . '.jpg')) ?: 2 }}"
                             alt="{{ $dosen['nama'] }}"
                             class="w-full h-full object-cover object-center pointer-events-none"
                             loading="lazy">
                    </div>
                    <!-- Info Dosen -->
                    <div class="p-4 flex-1 flex flex-col items-center text-center">
                        <div>
                            <span class="inline-block text-[10px] font-medium px-2 py-0.5 rounded-sm bg-opacity-60 mb-2 {{ $dosen['badge_class'] }} border-0 tracking-wide uppercase opacity-75">
                                {{ $dosen['kbk_label'] }}
                            </span>
                            <h3 class="font-semibold text-slate-800 text-sm leading-snug group-hover:text-[#0070BA] transition line-clamp-2">
                                {{ $dosen['nama'] }}
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    @push('styles')
    <style>
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    @endpush

    @push('scripts')
    <script>
        function filterKbk(category, btn) {
            // Update tampilan tombol tab aktif (Tema Resmi FT UNSIL: Navy #0B2A4A & Gold Amber)
            const buttons = document.querySelectorAll('.kbk-tab-btn');
            buttons.forEach(b => {
                b.classList.remove('bg-[#0B2A4A]', 'text-amber-400', 'border-amber-400/40', 'shadow-md');
                b.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });
            btn.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
            btn.classList.add('bg-[#0B2A4A]', 'text-amber-400', 'border-amber-400/40', 'shadow-md');

            // Filter kartu dosen berdasarkan data-kbk
            const items = document.querySelectorAll('.dosen-item');
            items.forEach(item => {
                const itemKbk = item.getAttribute('data-kbk');
                if (category === 'all' || itemKbk === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    </script>
    
    @endpush
@endsection

