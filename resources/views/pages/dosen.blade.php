@extends('layouts.app')

@section('title', 'Dosen & Staf | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Daftar 27 dosen dan tenaga pengajar resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi berkualifikasi S-2 dan S-3.')

@section('content')
@php
$dosenList = [
    // 1. Teknik Sumber Daya Air (6 dosen)
    [
        'slug' => 'empung',
        'nama' => 'Dr. Ir. Empung, S.T., M.T.',
        'kbk' => 'keairan',
        'kbk_label' => 'Teknik Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50 border-cyan-200',
    ],
    [
        'slug' => 'andhy-romdani',
        'nama' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
        'kbk' => 'keairan',
        'kbk_label' => 'Teknik Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50 border-cyan-200',
    ],
    [
        'slug' => 'pengki-irawan',
        'nama' => 'Ir. Pengki Irawan, S.TP., M.Si.',
        'kbk' => 'keairan',
        'kbk_label' => 'Teknik Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50 border-cyan-200',
    ],
    [
        'slug' => 'novia-komala-sari',
        'nama' => 'Novia Komala Sari, S.Pd., M.T.',
        'kbk' => 'keairan',
        'kbk_label' => 'Teknik Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50 border-cyan-200',
    ],
    [
        'slug' => 'galih-rahmat-jatnika',
        'nama' => 'Galih Rahmat Jatnika, S.T., M.T.',
        'kbk' => 'keairan',
        'kbk_label' => 'Teknik Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50 border-cyan-200',
    ],
    [
        'slug' => 'raden-roro-dita',
        'nama' => 'Raden Roro Dita Arviananda, S.Pd., M.Eng.',
        'kbk' => 'keairan',
        'kbk_label' => 'Teknik Sumber Daya Air',
        'badge_class' => 'text-cyan-800 bg-cyan-50 border-cyan-200',
    ],

    // 2. Rekayasa Transportasi (7 dosen)
    [
        'slug' => 'nina-herlina',
        'nama' => 'Ir. Nina Herlina, Dra., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],
    [
        'slug' => 'gary-raya-prima',
        'nama' => 'Gary Raya Prima, S.Pd., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],
    [
        'slug' => 'hendra',
        'nama' => 'Ir. Hendra, S.T., M.Sc.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],
    [
        'slug' => 'herianto',
        'nama' => 'Herianto, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],
    [
        'slug' => 'muhamad-anugerah',
        'nama' => 'Muhamad Anugerah Ramadhan, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],
    [
        'slug' => 'indrajathie-aziz',
        'nama' => 'Indrajathie Aziz, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],
    [
        'slug' => 'kartika-seinari',
        'nama' => 'Kartika Seinari Manggala, S.T., M.T.',
        'kbk' => 'transportasi',
        'kbk_label' => 'Rekayasa Transportasi',
        'badge_class' => 'text-emerald-800 bg-emerald-50 border-emerald-200',
    ],

    // 3. Rekayasa Struktur & Bahan (5 dosen)
    [
        'slug' => 'yusep-ramdani',
        'nama' => 'Dr. Ir. Yusep Ramdani, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur & Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50 border-blue-200',
    ],
    [
        'slug' => 'rosi-nursani',
        'nama' => 'Rosi Nursani, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur & Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50 border-blue-200',
    ],
    [
        'slug' => 'syarif-al-huseiny',
        'nama' => 'Mohammad Syarif Al-Huseiny, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur & Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50 border-blue-200',
    ],
    [
        'slug' => 'intan-nuriskha',
        'nama' => 'Intan Nuriskha Rachma, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur & Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50 border-blue-200',
    ],
    [
        'slug' => 'sri-wanto',
        'nama' => 'Sri Wanto, S.T., M.T.',
        'kbk' => 'struktur',
        'kbk_label' => 'Rekayasa Struktur & Bahan',
        'badge_class' => 'text-blue-800 bg-blue-50 border-blue-200',
    ],

    // 4. Geoteknik (3 dosen)
    [
        'slug' => 'iman-handiman',
        'nama' => 'Dr. Ir. Iman Handiman, S.T., M.T.',
        'kbk' => 'geoteknik',
        'kbk_label' => 'Geoteknik',
        'badge_class' => 'text-amber-800 bg-amber-50 border-amber-200',
    ],
    [
        'slug' => 'fitriana-sarifah',
        'nama' => 'Ir. Fitriana Sarifah, S.T., M.T.',
        'kbk' => 'geoteknik',
        'kbk_label' => 'Geoteknik',
        'badge_class' => 'text-amber-800 bg-amber-50 border-amber-200',
    ],
    [
        'slug' => 'zakwan-gusnadi',
        'nama' => 'Zakwan Gusnadi, S.T., M.T.',
        'kbk' => 'geoteknik',
        'kbk_label' => 'Geoteknik',
        'badge_class' => 'text-amber-800 bg-amber-50 border-amber-200',
    ],

    // 5. Manajemen Konstruksi (5 dosen)
    [
        'slug' => 'indra-mahdi',
        'nama' => 'Ir. Indra Mahdi, Drs., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50 border-purple-200',
    ],
    [
        'slug' => 'hidayanto',
        'nama' => 'Hidayanto, S.T., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50 border-purple-200',
    ],
    [
        'slug' => 'helty-fatimah-bakri',
        'nama' => 'Helty Fatimah Bakri, S.T., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50 border-purple-200',
    ],
    [
        'slug' => 'shanti-astri-noviani',
        'nama' => 'Shanti Astri Noviani, S.Pd., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50 border-purple-200',
    ],
    [
        'slug' => 'ridha-al-mustafa',
        'nama' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.',
        'kbk' => 'manajemen',
        'kbk_label' => 'Manajemen Konstruksi',
        'badge_class' => 'text-purple-800 bg-purple-50 border-purple-200',
    ],

    // 6. Mata Kuliah Dasar Umum (1 dosen)
    [
        'slug' => 'ceceng-saepulmilah',
        'nama' => 'Ceceng Saepulmilah, S.Pd.I., M.Pd.',
        'kbk' => 'mkdu',
        'kbk_label' => 'Mata Kuliah Dasar Umum',
        'badge_class' => 'text-slate-800 bg-slate-100 border-slate-200',
    ],
];
@endphp

    <!-- Hero Header -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Dosen &amp; Staf</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Sumber Daya Manusia Unggul
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Dosen &amp; Tenaga Pengajar
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Didukung oleh 27 staf pengajar berkualifikasi Magister (S-2) dan Doktor (S-3) lulusan perguruan tinggi terkemuka di dalam dan luar negeri, terdistribusi ke dalam 5 Kelompok Bidang Keahlian (KBK) keinsinyuran sipil.
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-14 sm:py-16 bg-slate-50 relative overflow-hidden min-h-screen">
        <div class="absolute inset-0 opacity-[0.06] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Tab Filter 5 Bidang Keahlian (Tema Resmi FT UNSIL: Navy & Gold Amber) -->
            <div class="max-w-5xl mx-auto mb-12">
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-2.5 p-2 bg-slate-100/90 rounded-2xl border border-slate-200 shadow-inner">
                    <button type="button" onclick="filterKbk('all', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 shadow-md bg-[#0B2A4A] text-amber-400 border border-amber-400/40">
                        Semua Dosen (27)
                    </button>
                    <button type="button" onclick="filterKbk('struktur', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Struktur &amp; Bahan (5)
                    </button>
                    <button type="button" onclick="filterKbk('keairan', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Sumber Daya Air (6)
                    </button>
                    <button type="button" onclick="filterKbk('geoteknik', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Geoteknik (3)
                    </button>
                    <button type="button" onclick="filterKbk('transportasi', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Transportasi (7)
                    </button>
                    <button type="button" onclick="filterKbk('manajemen', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Manajemen Konstruksi (5)
                    </button>
                </div>
            </div>

            <!-- Grid Kartu Dosen (Responsif: 1 col HP, 2 col Tablet, 4 col Desktop) -->
            <div id="dosen-grid" class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-7 mb-14">
                @foreach($dosenList as $dosen)
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 hover:border-blue-300 transition-all duration-300 flex flex-col group text-center hover:-translate-y-1" data-kbk="{{ $dosen['kbk'] }}">
                    <!-- Foto Area (Bulat Sempurna Tanpa Terpotong) -->
                    <div class="pt-6 pb-2 px-4 bg-gradient-to-b from-slate-50/80 via-white to-white flex items-center justify-center relative">
                        <div class="relative w-36 h-36 sm:w-40 sm:h-40 flex items-center justify-center">
                            <img src="{{ asset('images/dosen/' . $dosen['slug'] . '.png') }}" 
                                 alt="{{ $dosen['nama'] }}" 
                                 class="w-full h-full object-contain filter drop-shadow-md group-hover:scale-105 transition-transform duration-300 pointer-events-none" 
                                 loading="lazy">
                        </div>
                    </div>
                    <!-- Info Dosen -->
                    <div class="p-5 pt-2 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2.5 border {{ $dosen['badge_class'] }}">
                                {{ $dosen['kbk_label'] }}
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition line-clamp-2">
                                {{ $dosen['nama'] }}
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

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
