@extends('layouts.app')

@section('title', 'Prestasi Mahasiswa | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Dokumentasi prestasi, penghargaan, kejuaraan nasional dan internasional mahasiswa Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    
    <section class="relative min-h-[260px] sm:min-h-[300px] flex items-center bg-[#0B2A4A] text-white overflow-hidden border-b border-blue-950">
        
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/gedung-unsil.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#071c32]/95 via-[#0B2A4A]/85 to-[#0B2A4A]/60"></div>
        
        
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 220px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-12 w-full">
            
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('akademik') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Akademik</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-amber-400 font-bold">Prestasi Mahasiswa</span>
            </nav>

            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                <i class="fa-solid fa-trophy mr-1 text-amber-400"></i> Tinta Emas Sivitas Akademika
            </span>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Prestasi Mahasiswa
            </h1>
            <p class="text-slate-200 text-xs sm:text-sm md:text-base mt-2 max-w-2xl leading-relaxed">
                Panggung dedikasi, karya rekayasa, dan capaian juara mahasiswa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi di tingkat nasional hingga internasional.
            </p>
        </div>
    </section>

    
    <div class="h-3 bg-[#0a2038] border-b border-amber-400/20 overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 12px;"></div>
    </div>

    
    <section class="bg-white border-b border-slate-200 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-[#0070BA] font-heading">28+</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Kejuaraan Nasional</div>
                </div>
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-amber-600 font-heading">14</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Hibah PKM Didanai</div>
                </div>
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-emerald-600 font-heading">6</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Penghargaan Internasional</div>
                </div>
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-indigo-600 font-heading">100%</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Didukung Dosen Pembimbing</div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            
            <div class="flex flex-wrap items-center gap-2 mb-8">
                <span class="text-xs font-bold text-slate-500 mr-1 flex items-center gap-1">
                    <i class="fa-solid fa-filter text-blue-600"></i> Filter Kategori:
                </span>
                <button type="button" onclick="filterPrestasi('all')" class="filter-btn active-filter px-3.5 py-1.5 rounded-full text-xs font-bold transition shadow-sm bg-[#0070BA] text-white" data-cat="all">
                    Semua Prestasi
                </button>
                <button type="button" onclick="filterPrestasi('struktur')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="struktur">
                    Rancang Jembatan &amp; Struktur
                </button>
                <button type="button" onclick="filterPrestasi('material')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="material">
                    Beton &amp; Material Inovatif
                </button>
                <button type="button" onclick="filterPrestasi('pkm')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="pkm">
                    PKM &amp; Karya Tulis Ilmiah
                </button>
                <button type="button" onclick="filterPrestasi('internasional')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="internasional">
                    Internasional
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                
                <div class="lg:col-span-2 space-y-6">

                    
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="internasional">
                        
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/trophy-adpi.jpg') }}" alt="UNSIL Raih Dua Penghargaan Bergengsi ADPI Global Award" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">16</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">NOV</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 shadow-md">
                                    <i class="fa-solid fa-award text-xs"></i> ICORAD &amp; ADPI Global Award
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                                        <i class="fa-solid fa-earth-americas text-[9px]"></i> Tingkat Internasional
                                    </span>
                                    <span class="text-[10px] text-slate-400 font-medium">Pengabdian &amp; Riset Terapan</span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    UNSIL Raih Dua Penghargaan Bergengsi ADPI Global Award 2025 dan ICORAD Award 2026
                                </h2>

                                
                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 14 &ndash; 16 November 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Jakarta &bull; Hotel Aryaduta Convention</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Jenis:</strong> ADPI Global Award &amp; ICORAD Inovasi Infrastruktur Tepat Guna</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Humas UNSIL &mdash; Universitas Siliwangi (UNSIL) melalui kolaborasi dosen dan mahasiswa Teknik Sipil berhasil menorehkan prestasi membanggakan dengan meraih dua penghargaan sekaligus dalam ajang konferensi internasional pengabdian dan inovasi rekayasa masyarakat.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> Mahasiswa Kolaborasi Riset LPPM
                                </span>
                                <span class="text-[11px] text-blue-700 font-bold group-hover:translate-x-0.5 transition flex items-center gap-1">
                                    <span>Prestasi Unggulan</span>
                                    <i class="fa-solid fa-chevron-right text-[9px]"></i>
                                </span>
                            </div>
                        </div>
                    </article>

                    
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="struktur">
                        
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/event-3.jpg') }}" alt="Juara 1 Kompetisi Rancang Jembatan Indonesia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">18</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">OKT</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 shadow-md">
                                    <i class="fa-solid fa-trophy text-xs"></i> Juara 1 Nasional
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200">
                                        <i class="fa-solid fa-bridge text-[9px]"></i> Rancang Jembatan
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-purple-700 bg-purple-50 px-2.5 py-0.5 rounded-md border border-purple-200">
                                        Jembatan Terkokoh
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    Juara 1 Nasional: Kompetisi Rancang Jembatan Indonesia (KJI) 2026
                                </h2>

                                
                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 15 &ndash; 18 Oktober 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Institut Teknologi Sepuluh Nopember (ITS), Surabaya</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Jenis:</strong> Kompetisi Jembatan Busur Rangka Baja Nasional (KJI Kemendikbudristek)</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Tim Ciung Wanara FT UNSIL berhasil menyabet Juara 1 Nasional sekaligus kategori Jembatan Terkokoh dengan rasio efisiensi beban tertinggi dan lendutan (defleksi) terendah di bawah pengujian dinamis laboratorium.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> M. Rayhan, Siti Nurhaliza, Dafa Pratama
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Ir. H. Asep Kurnia, M.T.
                                </span>
                            </div>
                        </div>
                    </article>

                    
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="material">
                        
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/lab-civil.jpg') }}" alt="Juara 2 National Concrete Competition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">24</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">SEP</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-slate-800 text-amber-300 border border-amber-400/30 shadow-md">
                                    <i class="fa-solid fa-medal text-xs text-amber-400"></i> Juara 2 Nasional
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-amber-800 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200">
                                        <i class="fa-solid fa-cube text-[9px]"></i> Teknologi Material
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                                        Eco-Friendly Concrete
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    Juara 2 National Concrete Competition: Beton Mutu Tinggi Geopolimer Fly Ash
                                </h2>

                                
                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 22 &ndash; 24 September 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Universitas Gadjah Mada (UGM), Yogyakarta</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Jenis:</strong> Lomba Kuat Tekan Beton Ramah Lingkungan fc' 60 MPa</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Mengembangkan formula campuran beton tanpa semen (zero cement) berbasis aktivasi geopolimer abu terbang (fly ash) PLTU dengan kuat tekan melampaui 62 MPa pada umur 28 hari dan emisi karbon 65% lebih rendah.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> Reza Firmansyah, Anisa Rahmawati
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Dr. Eng. Ir. Edi Mulyadi, M.Eng.
                                </span>
                            </div>
                        </div>
                    </article>

                    
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="pkm">
                        
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/event-2.jpg') }}" alt="Penerima Pendanaan PKM-KC Kemendikbudristek" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">10</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">AGU</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-indigo-600 text-white shadow-md">
                                    <i class="fa-solid fa-lightbulb text-xs text-amber-300"></i> Hibah PKM-KC Diktiristek
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-indigo-700 bg-indigo-50 px-2.5 py-0.5 rounded-md border border-indigo-200">
                                        <i class="fa-solid fa-microchip text-[9px]"></i> IoT &amp; Sensor Sipil
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-amber-800 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200">
                                        Lolos Menuju PIMNAS 39
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    Lolos Pendanaan PKM-KC Kemendikbudristek: IoT Early Warning Sensor Retak Jembatan
                                </h2>

                                
                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> Agustus &ndash; November 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Ditjen Diktiristek Kemendikbudristek RI, Jakarta</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Jenis:</strong> Program Kreativitas Mahasiswa Karsa Cipta (PKM-KC) Nasional</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Menciptakan prototipe sensor nirkabel *crack detection* piezoelektrik berbasis Internet of Things (IoT) untuk pemantauan struktural (*Structural Health Monitoring System*) jembatan bentang panjang secara real-time.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> Fajar Hidayat, Dimas Aditya, Nurul Fadilah
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Ir. Rian Herdiana, M.T.
                                </span>
                            </div>
                        </div>
                    </article>

                    
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="pkm">
                        
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Juara 1 LKTIN Infrastruktur Berkelanjutan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">14</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">MEI</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 shadow-md">
                                    <i class="fa-solid fa-trophy text-xs"></i> Juara 1 &amp; Best Paper
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200">
                                        <i class="fa-solid fa-file-lines text-[9px]"></i> Karya Tulis Ilmiah
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                                        Eco-Drainage
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    Juara 1 Lomba Karya Tulis Ilmiah Nasional: Eco-Drainase Ramah Lingkungan
                                </h2>

                                
                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 12 &ndash; 14 Mei 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Universitas Diponegoro (UNDIP), Semarang</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Jenis:</strong> LKTIN Ketekniksipilan &amp; Pengendalian Banjir Kawasan Urban</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Mempresentasikan gagasan inovatif sumur resapan modular bertingkat dengan bio-filter porous asphalt untuk mereduksi debit puncak banjir limpasan perkotaan hingga 48%.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> Arif Wibowo, Putri Dewi Lestari
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Ir. Nina Herlina, M.T.
                                </span>
                            </div>
                        </div>
                    </article>

                    
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="internasional">
                        
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Best Presenter International Conference" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">12</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">OKT</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-cyan-700 text-white shadow-md">
                                    <i class="fa-solid fa-microphone text-xs text-amber-300"></i> Best Student Presenter
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-cyan-800 bg-cyan-50 px-2.5 py-0.5 rounded-md border border-cyan-200">
                                        <i class="fa-solid fa-globe text-[9px]"></i> Konferensi Internasional
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200">
                                        Rekayasa Gempa
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    Best Student Presenter: 5th International Conference on Civil &amp; Earthquake Engineering
                                </h2>

                                
                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 12 Oktober 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> FT UNSIL &bull; National Cheng Kung University (NCKU) Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Jenis:</strong> Seminar Ilmiah Internasional Ketahanan Gempa pada Struktur Beton Bertulang</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Mahasiswa S-1 Teknik Sipil UNSIL terpilih sebagai pemakalah terbaik di antara puluhan delegasi perguruan tinggi Asia melalui riset bertajuk *Nonlinear Pushover Analysis on Precast Beam-Column Joints*.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user text-blue-600"></i>
                                    <strong>Mahasiswa:</strong> Irfan Maulana
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Dosen Pendamping:</strong> Yanuar Haryanto, Ph.D.
                                </span>
                            </div>
                        </div>
                    </article>

                </div>

                
                <aside class="space-y-6">

                    
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                                <span>Terbaru</span>
                            </h3>
                            <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                                2026
                            </span>
                        </div>

                        
                        <div class="space-y-4">
                            
                            <div class="flex items-start gap-3 group cursor-pointer pb-3 border-b border-slate-100">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/trophy-adpi.jpg') }}" alt="ADPI Award" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/40"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">16</span>
                                        <span class="text-[8px] font-bold uppercase">Nov</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        UNSIL Raih Dua Penghargaan Bergengsi ADPI Global Award &amp; ICORAD Award
                                    </h4>
                                    <span class="text-[10px] text-slate-400 mt-1 block">Tingkat Internasional</span>
                                </div>
                            </div>

                            
                            <div class="flex items-start gap-3 group cursor-pointer pb-3 border-b border-slate-100">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/event-3.jpg') }}" alt="KJI" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/40"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">18</span>
                                        <span class="text-[8px] font-bold uppercase">Okt</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Juara 1 Nasional Kompetisi Rancang Jembatan Indonesia (KJI) 2026 di ITS
                                    </h4>
                                    <span class="text-[10px] text-slate-400 mt-1 block">Rancang Jembatan</span>
                                </div>
                            </div>

                            
                            <div class="flex items-start gap-3 group cursor-pointer pb-3 border-b border-slate-100">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Beton UGM" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/40"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">24</span>
                                        <span class="text-[8px] font-bold uppercase">Sep</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Juara 2 National Concrete Competition UGM: Inovasi Beton Fly Ash
                                    </h4>
                                    <span class="text-[10px] text-slate-400 mt-1 block">Teknologi Beton</span>
                                </div>
                            </div>

                            
                            <div class="flex items-start gap-3 group cursor-pointer">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/event-2.jpg') }}" alt="PKM-KC" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/40"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">10</span>
                                        <span class="text-[8px] font-bold uppercase">Agu</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Didanai Kemendikbudristek: IoT Early Warning Sensor Retak Jembatan
                                    </h4>
                                    <span class="text-[10px] text-slate-400 mt-1 block">Hibah PKM-KC</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </aside>

            </div>
        </div>
    </section>

    
    @push('scripts')
    <script>
        function filterPrestasi(category) {
            const cards = document.querySelectorAll('.prestasi-card');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                if (btn.getAttribute('data-cat') === category) {
                    btn.className = 'filter-btn active-filter px-3.5 py-1.5 rounded-full text-xs font-bold transition shadow-sm bg-[#0070BA] text-white';
                } else {
                    btn.className = 'filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200';
                }
            });

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
    @endpush
@endsection
