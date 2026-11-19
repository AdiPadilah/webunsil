@extends('layouts.app')

@section('title', 'Fasilitas Laboratorium | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas 6 laboratorium terstandarisasi Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Fasilitas</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Sarana &amp; Prasarana Kejuruan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Fasilitas <span class="text-amber-400">Laboratorium</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Sarana pengujian bahan konstruksi dan komputasi rekayasa berstandar industri di Kampus 2 UNSIL Mugarsari guna menunjang praktikum keinsinyuran kurikulum 144 SKS serta penelitian tugas akhir mahasiswa.
            </p>
        </div>
    </section>

    {{-- Section: 6 Laboratorium Kejuruan (2 Kolom Proporsional) --}}
    <section class="py-12 md:py-14 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Pusat Riset &amp; Pengujian</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">6 Laboratorium Teknik Sipil</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Setiap unit laboratorium dikelola oleh dosen kepala lab dan laboran bersertifikat untuk praktikum mahasiswa serta riset terapan pengujian bahan.
                </p>
            </div>

            {{-- Grid 2 Kolom Besar (2 - 2 - 2) --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-7">
                
                {{-- 1. Lab TBK --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Dominan --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=1000" alt="Lab. Teknologi Bahan Konstruksi"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-cube mr-1"></i> Struktur &amp; Material
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                    LAB 01
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Teknologi Bahan Konstruksi (TBK)
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab FT · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Kompak & Ringkas --}}
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pengujian sifat fisis dan mekanis beton bertulang, semen portland, agregat, serta uji kuat tarik baja tulangan struktur gedung dan jembatan.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Instrumen &amp; Alat Uji:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 text-blue-900 text-xs font-medium border border-blue-100">
                                        <i class="fa-solid fa-compress text-blue-600 text-[10px]"></i> Uji Tekan Beton 2000 kN
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 text-blue-900 text-xs font-medium border border-blue-100">
                                        <i class="fa-solid fa-arrows-up-down text-blue-600 text-[10px]"></i> UTM Uji Tarik Baja
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 text-blue-900 text-xs font-medium border border-blue-100">
                                        <i class="fa-solid fa-filter text-blue-600 text-[10px]"></i> Sieve Shaker &amp; Oven
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 text-blue-900 text-xs font-medium border border-blue-100">
                                        <i class="fa-solid fa-shield-halved text-blue-600 text-[10px]"></i> Slump Cone &amp; Cetakan SNI
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Slim --}}
                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px]">
                        <span class="text-slate-500">Standar Uji: <strong class="text-slate-700">SNI 2847 &bull; ASTM C39</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 2. Lab Perkerasan Jalan --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Dominan --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1541888946425-d0fbb18086f6?q=80&w=1000" alt="Lab. Perkerasan Jalan & Aspal"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-amber-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-road mr-1"></i> Transportasi &amp; Jalan
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                    LAB 02
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Perkerasan Jalan &amp; Aspal
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab FT · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Kompak & Ringkas --}}
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pengujian campuran aspal panas (Hotmix/AC-WC), penetrasi aspal, daktilitas, stabilitas Marshall, dan durabilitas perkerasan lentur maupun kaku.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Instrumen &amp; Alat Uji:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-50 text-amber-900 text-xs font-medium border border-amber-100">
                                        <i class="fa-solid fa-weight-hanging text-amber-600 text-[10px]"></i> Marshall Compactor &amp; Stabilitas
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-50 text-amber-900 text-xs font-medium border border-amber-100">
                                        <i class="fa-solid fa-needle text-amber-600 text-[10px]"></i> Penetrometer &amp; Titik Lembek
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-50 text-amber-900 text-xs font-medium border border-amber-100">
                                        <i class="fa-solid fa-rotate text-amber-600 text-[10px]"></i> Centrifuge Extractor Aspal
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-50 text-amber-900 text-xs font-medium border border-amber-100">
                                        <i class="fa-solid fa-drum text-amber-600 text-[10px]"></i> Los Angeles Abrasion Machine
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Slim --}}
                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px]">
                        <span class="text-slate-500">Standar Uji: <strong class="text-slate-700">Bina Marga 2018 &bull; SNI</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 3. Lab Mekanika Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Dominan --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=1000" alt="Lab. Mekanika Tanah & Geoteknik"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-emerald-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-layer-group mr-1"></i> Geoteknik &amp; Pondasi
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                    LAB 03
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Mekanika Tanah &amp; Geoteknik
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab FT · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Kompak & Ringkas --}}
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pengujian parameter fisis/mekanis tanah, daya dukung tanah pondasi dangkal dan dalam, stabilitas lereng bukit, serta konsolidasi penurunan tanah.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Instrumen &amp; Alat Uji:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-900 text-xs font-medium border border-emerald-100">
                                        <i class="fa-solid fa-bore-hole text-emerald-600 text-[10px]"></i> Sondir Hidrolik 2.5 Ton (CPT)
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-900 text-xs font-medium border border-emerald-100">
                                        <i class="fa-solid fa-arrows-split-up-and-left text-emerald-600 text-[10px]"></i> Direct Shear &amp; Triaxial
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-900 text-xs font-medium border border-emerald-100">
                                        <i class="fa-solid fa-chart-line text-emerald-600 text-[10px]"></i> Oedometer Konsolidasi
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-900 text-xs font-medium border border-emerald-100">
                                        <i class="fa-solid fa-hammer text-emerald-600 text-[10px]"></i> Uji Pemadatan Proctor
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Slim --}}
                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px]">
                        <span class="text-slate-500">Standar Uji: <strong class="text-slate-700">SNI 2828 &bull; ASTM D2166</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 4. Lab Hidrolika & SDA --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Dominan --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="Lab. Hidrolika & Sumber Daya Air"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1000'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-cyan-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-water mr-1"></i> Keairan &amp; Hidrologi
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                    LAB 04
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Hidrolika &amp; Sumber Daya Air
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab FT · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Kompak & Ringkas --}}
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Simulasi aliran saluran terbuka, debit aliran fluida pipa tertutup, model bangunan pelimpah bendung, dan analisis hidraulika drainase DAS Citanduy.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Instrumen &amp; Alat Uji:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-cyan-50 text-cyan-900 text-xs font-medium border border-cyan-100">
                                        <i class="fa-solid fa-water text-cyan-600 text-[10px]"></i> Open Channel Flume 5 Meter
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-cyan-50 text-cyan-900 text-xs font-medium border border-cyan-100">
                                        <i class="fa-solid fa-wind text-cyan-600 text-[10px]"></i> Venturimeter &amp; Pipa Bernoulli
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-cyan-50 text-cyan-900 text-xs font-medium border border-cyan-100">
                                        <i class="fa-solid fa-water-ladder text-cyan-600 text-[10px]"></i> Model Pelimpah Bendung
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-cyan-50 text-cyan-900 text-xs font-medium border border-cyan-100">
                                        <i class="fa-solid fa-tachograph-digital text-cyan-600 text-[10px]"></i> Current Meter Saluran
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Slim --}}
                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px]">
                        <span class="text-slate-500">Standar Uji: <strong class="text-slate-700">Kriteria Perencanaan Irigasi KP</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 5. Lab Komputasi & BIM --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Dominan --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1000" alt="Lab. Komputasi Rekayasa Sipil & BIM"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-purple-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-desktop mr-1"></i> Komputasi &amp; BIM 5D
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                    LAB 05
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Komputasi Rekayasa &amp; BIM
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung FT Lantai 2 · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Kompak & Ringkas --}}
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Ruang komputer workstation terpusat untuk perancangan struktur tahan gempa, pemodelan Building Information Modeling (BIM 5D), dan analisis banjir.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Software Berlisensi:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-purple-50 text-purple-900 text-xs font-medium border border-purple-100">
                                        <i class="fa-solid fa-building-user text-purple-600 text-[10px]"></i> SAP2000 &amp; ETABS Structural
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-purple-50 text-purple-900 text-xs font-medium border border-purple-100">
                                        <i class="fa-solid fa-compass-drafting text-purple-600 text-[10px]"></i> AutoCAD &amp; Civil 3D
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-purple-50 text-purple-900 text-xs font-medium border border-purple-100">
                                        <i class="fa-solid fa-water-ladder text-purple-600 text-[10px]"></i> HEC-RAS Pemodelan Banjir
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-purple-50 text-purple-900 text-xs font-medium border border-purple-100">
                                        <i class="fa-solid fa-map-location text-purple-600 text-[10px]"></i> ArcGIS &amp; QGIS Spasial
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Slim --}}
                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px]">
                        <span class="text-slate-500">Kapasitas: <strong class="text-slate-700">40 PC Core i7 &bull; Gigabit LAN</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 6. Lab Perpetaan & Ukur Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Dominan --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1508873696983-2df5293cb395?q=80&w=1000" alt="Lab. Perpetaan & Ukur Tanah"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-rose-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-map-location-dot mr-1"></i> Geomatika &amp; Survei
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                    LAB 06
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Perpetaan &amp; Ukur Tanah
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-1.5">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab FT · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Kompak & Ringkas --}}
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Praktikum survei lapangan pemetaan situasi kontur, poligon kerangka dasar, penentuan elevasi jalan raya dan saluran irigasi, serta geodesi satelit.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Instrumen &amp; Alat Uji:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-rose-50 text-rose-900 text-xs font-medium border border-rose-100">
                                        <i class="fa-solid fa-binoculars text-rose-600 text-[10px]"></i> Total Station Digital
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-rose-50 text-rose-900 text-xs font-medium border border-rose-100">
                                        <i class="fa-solid fa-crosshairs text-rose-600 text-[10px]"></i> Theodolite Digital
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-rose-50 text-rose-900 text-xs font-medium border border-rose-100">
                                        <i class="fa-solid fa-level-up text-rose-600 text-[10px]"></i> Automatic Waterpass (Level)
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-rose-50 text-rose-900 text-xs font-medium border border-rose-100">
                                        <i class="fa-solid fa-satellite text-rose-600 text-[10px]"></i> GPS Geodetik Navigasi
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Slim --}}
                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px]">
                        <span class="text-slate-500">Standar Uji: <strong class="text-slate-700">Badan Informasi Geospasial (BIG)</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

            </div>

            {{-- Banner K3 Terpadu di Bawah Kartu (Jarak Rapat & Pas) --}}
            <div class="mt-10 sm:mt-12 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] rounded-3xl p-6 sm:p-8 text-white shadow-lg relative overflow-hidden">
                <div class="absolute inset-0 opacity-[0.03] bg-repeat pointer-events-none"
                     style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="max-w-2xl">
                        <span class="text-amber-400 font-bold uppercase text-[10px] tracking-wider block mb-1">
                            Keselamatan Kerja Laboratorium
                        </span>
                        <h4 class="text-lg sm:text-xl font-bold font-heading">
                            Standar K3L (Kesehatan &amp; Keselamatan Kerja)
                        </h4>
                        <p class="text-slate-300 text-xs mt-1.5 leading-relaxed">
                            Praktikum wajib menerapkan SOP K3L: wajib memakai APD lengkap (helm proyek, rompi, sepatu safety), serta tersedianya APAR dan kotak P3K di setiap laboratorium.
                        </p>
                    </div>
                    <div class="flex items-center gap-3 shrink-0">
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-4 py-3 text-center">
                            <i class="fa-solid fa-helmet-safety text-amber-400 text-xl mb-1 block"></i>
                            <span class="text-[11px] font-bold text-white block">Wajib APD</span>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-4 py-3 text-center">
                            <i class="fa-solid fa-fire-extinguisher text-amber-400 text-xl mb-1 block"></i>
                            <span class="text-[11px] font-bold text-white block">APAR Siaga</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
