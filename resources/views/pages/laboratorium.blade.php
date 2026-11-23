@extends('layouts.app')

@section('title', 'Laboratorium Kejuruan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas laboratorium kejuruan Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Laboratorium</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Fasilitas Praktikum &amp; Riset Terpadu
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Laboratorium Teknik Sipil
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Unit laboratorium keinsinyuran Program Studi S-1 Teknik Sipil di Gedung Fakultas Teknik Kampus 2 UNSIL Mugarsari. Mendukung praktikum kurikulum, riset tugas akhir mahasiswa, serta pengujian mutu konstruksi berstandar SNI dan ASTM.
            </p>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-10 sm:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Tab Filter Laboratorium --}}
            <div class="mb-10 overflow-x-auto scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                <div class="flex items-center gap-2 p-1.5 bg-slate-100 rounded-2xl border border-slate-200 min-w-max mx-auto w-fit">
                    <button type="button" onclick="filterLab('all', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-[#0B2A4A] text-amber-400 border border-[#0B2A4A]">
                        Semua Lab (6)
                    </button>
                    <button type="button" onclick="filterLab('struktur', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Struktur &amp; Bahan
                    </button>
                    <button type="button" onclick="filterLab('keairan', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Sumber Daya Air
                    </button>
                    <button type="button" onclick="filterLab('geoteknik', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Mekanika Tanah
                    </button>
                    <button type="button" onclick="filterLab('transportasi', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Transportasi
                    </button>
                    <button type="button" onclick="filterLab('komputasi', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Komputasi &amp; BIM
                    </button>
                    <button type="button" onclick="filterLab('perpetaan', this)" class="lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Perpetaan
                    </button>
                </div>
            </div>

            {{-- Daftar Laboratorium --}}
            <div id="lab-list" class="space-y-8">

                {{-- 1. Lab TBK --}}
                <div class="lab-item bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 transition-all hover:border-slate-300" data-kbk="struktur">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-slate-100 border border-slate-200">
                                <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}"
                                     alt="Lab. Teknologi Bahan Konstruksi FT UNSIL"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-slate-400"></i> Lantai 1, Gedung FT Kampus 2 Mugarsari
                                </span>
                                <span class="font-medium text-slate-600">SNI &bull; ASTM</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-blue-50 text-[#0070BA] border border-blue-100">
                                    Bidang Keahlian: Struktur &amp; Bahan
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900 tracking-tight">
                                Laboratorium Teknologi Bahan Konstruksi (TBK)
                            </h2>

                            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Melayani praktikum keinsinyuran serta pengujian sifat fisis dan mekanis bahan bangunan seperti beton segar, semen, agregat halus dan kasar, serta baja tulangan. Lab ini juga digunakan dalam pengujian benda uji tugas akhir dan kerja sama uji mutu beton proyek konstruksi sipil.
                            </p>

                            <div class="mt-5 space-y-4 pt-4 border-t border-slate-100">
                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Praktikum &amp; Pengujian:
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">
                                        Uji Kuat Tekan Beton Silinder/Kubus, Uji Tarik Baja Tulangan, Analisis Saringan Agregat (Sieve Analysis), Uji Keausan Agregat Los Angeles, Berat Jenis &amp; Penyerapan Agregat, Uji Slump dan Perancangan Campuran Beton (Mix Design).
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Peralatan Utama:
                                    </h3>
                                    <div class="flex flex-wrap gap-1.5">
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Compression Testing Machine (CTM) 2000 kN</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Universal Testing Machine (UTM)</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Los Angeles Abrasion Machine</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Sieve Shaker Elektrik</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Vibrating Table &amp; Slump Cone</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2. Lab Hidraulika --}}
                <div class="lab-item bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 transition-all hover:border-slate-300" data-kbk="keairan">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-slate-100 border border-slate-200">
                                <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}"
                                     alt="Lab. Hidraulika & Bangunan Air FT UNSIL"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='{{ asset('images/unsil-seminar-hathi-air.jpg') }}'">
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-slate-400"></i> Lantai 1, Gedung FT Kampus 2 Mugarsari
                                </span>
                                <span class="font-medium text-slate-600">SNI SDA &bull; Standar PUPR</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-cyan-50 text-cyan-800 border border-cyan-100">
                                    Bidang Keahlian: Sumber Daya Air
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900 tracking-tight">
                                Laboratorium Hidraulika &amp; Bangunan Air
                            </h2>

                            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Sarana eksperimen dan simulasi dinamika fluida saluran terbuka dan pipa tertutup. Fasilitas ini memfasilitasi praktikum mekanika fluida, pemodelan fisik hidraulis bangunan pelimpah bendung, peredam energi, serta analisis debit pintu air jaringan irigasi.
                            </p>

                            <div class="mt-5 space-y-4 pt-4 border-t border-slate-100">
                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Praktikum &amp; Pengujian:
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">
                                        Pengamatan Aliran Melalui Ambang Tajam dan Lebar, Aliran di Bawah Pintu Sorong (Sluice Gate), Fenomena Loncatan Hidraulis (Hydraulic Jump), Kalibrasi Alat Ukur Venturi &amp; Orifice, Pengukuran Kecepatan Saluran Terbuka.
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Peralatan Utama:
                                    </h3>
                                    <div class="flex flex-wrap gap-1.5">
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Open Channel Tilting Flume</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Current Meter Kecepatan Aliran</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Pintu Air Sorong &amp; Ambang Ukur</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Hook &amp; Point Gauge</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Alat Uji Venturi Meter &amp; Manometer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3. Lab Mekanika Tanah --}}
                <div class="lab-item bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 transition-all hover:border-slate-300" data-kbk="geoteknik">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-slate-100 border border-slate-200">
                                <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}"
                                     alt="Lab. Mekanika Tanah & Geoteknik FT UNSIL"
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-slate-400"></i> Lantai 1, Gedung FT Kampus 2 Mugarsari
                                </span>
                                <span class="font-medium text-slate-600">SNI &bull; ASTM D</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-100">
                                    Bidang Keahlian: Geoteknik
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900 tracking-tight">
                                Laboratorium Mekanika Tanah &amp; Geoteknik
                            </h2>

                            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Pusat karakterisasi sifat fisis dan mekanis tanah fondasi. Melayani praktikum penyelidikan tanah untuk penentuan daya dukung tanah, stabilitas lereng bukit/galian, penurunan tanah (settlement), dan kelayakan tanah timbunan infrastruktur.
                            </p>

                            <div class="mt-5 space-y-4 pt-4 border-t border-slate-100">
                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Praktikum &amp; Pengujian:
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">
                                        Kadar Air Tanah, Berat Jenis Tanah, Batas Atterberg (Batas Cair, Plastis, Susut), Analisis Butir (Sieve &amp; Hidrometer), Pemadatan Tanah Proctor, Kuat Geser Langsung (Direct Shear), Konsolidasi 1-Dimensi, dan Penetrasi Konus Lapangan (Sondir).
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Peralatan Utama:
                                    </h3>
                                    <div class="flex flex-wrap gap-1.5">
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Direct Shear Test Machine</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Oedometer Consolidometer</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Mesin Triaxial (UU/CU)</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Sondir Lapangan 2.5 &amp; 5 Ton</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Casagrande Cup &amp; Proctor Mold</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4. Lab Transportasi --}}
                <div class="lab-item bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 transition-all hover:border-slate-300" data-kbk="transportasi">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-slate-100 border border-slate-200">
                                <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}"
                                     alt="Lab. Transportasi & Jalan Raya FT UNSIL"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-slate-400"></i> Lantai 1, Gedung FT Kampus 2 Mugarsari
                                </span>
                                <span class="font-medium text-slate-600">Bina Marga &bull; SNI</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-amber-50 text-amber-800 border border-amber-100">
                                    Bidang Keahlian: Transportasi
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900 tracking-tight">
                                Laboratorium Transportasi &amp; Jalan Raya
                            </h2>

                            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Melayani praktikum perkerasan jalan raya dan pengujian material aspal maupun agregat campuran. Laboratorium ini mendukung perancangan campuran aspal panas (Hot Mix Asphalt) sesuai standar Spesifikasi Umum Bina Marga.
                            </p>

                            <div class="mt-5 space-y-4 pt-4 border-t border-slate-100">
                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Praktikum &amp; Pengujian:
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">
                                        Uji Penetrasi Aspal, Uji Titik Lembek (Ring &amp; Ball), Uji Titik Nyala &amp; Bakar (Cleveland Open Cup), Uji Daktilitas Aspal, Uji Marshall Campuran Aspal Panas (Stabilitas &amp; Kelelehan/Flow), Ekstraksi Kadar Aspal Sentrifugal.
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Peralatan Utama:
                                    </h3>
                                    <div class="flex flex-wrap gap-1.5">
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Marshall Compression Machine</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Penetrometer Aspal Digital</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Ring and Ball Softening Apparatus</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Water Bath Suhu Konstan Presisi</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Centrifuge Bitumen Extractor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 5. Lab Komputasi & BIM --}}
                <div class="lab-item bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 transition-all hover:border-slate-300" data-kbk="komputasi">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-slate-100 border border-slate-200">
                                <img src="{{ asset('images/workshop-obe.jpg') }}"
                                     alt="Lab. Komputasi & Pemodelan Struktur FT UNSIL"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-slate-400"></i> Lantai 2, Gedung FT Kampus 2 Mugarsari
                                </span>
                                <span class="font-medium text-slate-600">Workstation LAN &bull; Fiber Optic</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-purple-50 text-purple-800 border border-purple-100">
                                    Bidang Keahlian: Komputasi &amp; Desain
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900 tracking-tight">
                                Laboratorium Komputasi &amp; Studio Pemodelan (BIM)
                            </h2>

                            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Sarana komputasi rekayasa dan studio perancangan digital sipil. Digunakan untuk praktikum analisis struktur gedung tahan gempa berbasis metode elemen hingga, simulasi numerik hidraulika, pemodelan lereng, serta pelatihan Building Information Modelling (BIM).
                            </p>

                            <div class="mt-5 space-y-4 pt-4 border-t border-slate-100">
                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Praktikum &amp; Pembelajaran:
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">
                                        Analisis Statis &amp; Dinamis Struktur Gedung Bertingkat, Penggambaran Detil Penulangan CAD 2D/3D, Pemodelan Informasi Bangunan (BIM 3D/4D), Simulasi Aliran Banjir Alur Sungai, Analisis Stabilitas Lereng Komputasional.
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Software &amp; Fasilitas:
                                    </h3>
                                    <div class="flex flex-wrap gap-1.5">
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">SAP2000 &amp; ETABS (Struktur Tahan Gempa)</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Autodesk AutoCAD &amp; Civil 3D</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">HEC-RAS (Simulasi Aliran Air)</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Workstation PC Multi-Core Berlayar Lebar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 6. Lab Perpetaan --}}
                <div class="lab-item bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 transition-all hover:border-slate-300" data-kbk="perpetaan">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-slate-100 border border-slate-200">
                                <img src="{{ asset('images/gedung-unsil.jpg') }}"
                                     alt="Lab. Perpetaan & Ukur Tanah FT UNSIL"
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-slate-400"></i> Lantai 1, Gedung FT Kampus 2 Mugarsari
                                </span>
                                <span class="font-medium text-slate-600">Standar BIG &bull; SNI Survei</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-100">
                                    Bidang Keahlian: Survei &amp; Geomatika
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900 tracking-tight">
                                Laboratorium Perpetaan &amp; Ukur Tanah
                            </h2>

                            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Sarana praktikum survei terestris dan pemetaan topografi permukaan tanah. Membekali mahasiswa dengan kompetensi pengukuran kerangka kontrol horizontal dan vertikal, pemetaan situasi kontur, serta pematokan (stake-out) sumbu rencana konstruksi di lapangan.
                            </p>

                            <div class="mt-5 space-y-4 pt-4 border-t border-slate-100">
                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Praktikum &amp; Pengujian:
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">
                                        Pengukuran Beda Tinggi Waterpass (Profil Memanjang &amp; Melintang), Poligon Tertutup &amp; Terbuka Kerangka Horizontal, Pemetaan Situasi Garis Kontur Digital, dan Stake-out As Bangunan Sipil di Lapangan Kampus Mugarsari.
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Peralatan Utama:
                                    </h3>
                                    <div class="flex flex-wrap gap-1.5">
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Total Station Digital Presisi</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Theodolite Digital &amp; Statif</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Automatic Optical Level (Waterpass)</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">Rambu Ukur Presisi 5 Meter</span>
                                        <span class="inline-block px-2.5 py-1 text-xs rounded-lg bg-slate-100 text-slate-700 border border-slate-200">GPS Handheld Geodetik &amp; Prisma Poligon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- Script Filter Tab --}}
    <script>
        function filterLab(kbk, btn) {
            document.querySelectorAll('.lab-tab-btn').forEach(b => {
                b.className = 'lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200';
            });
            btn.className = 'lab-tab-btn whitespace-nowrap px-4 py-2 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wide transition-all duration-200 bg-[#0B2A4A] text-amber-400 border border-[#0B2A4A]';

            document.querySelectorAll('.lab-item').forEach(item => {
                if (kbk === 'all' || item.dataset.kbk === kbk) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    </script>

@endsection
