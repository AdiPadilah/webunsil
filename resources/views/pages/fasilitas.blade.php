@extends('layouts.app')

@section('title', 'Fasilitas & Laboratorium | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas laboratorium terstandarisasi, studio komputasi BIM, ruang kelas modern, dan sarana penunjang akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-14 md:py-20 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-4 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Fasilitas</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3">
                Sarana &amp; Prasarana Kampus
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black font-heading tracking-tight text-white mt-1 leading-tight">
                Fasilitas &amp; <span class="text-amber-400">Laboratorium</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-4 max-w-3xl leading-relaxed">
                Sarana pembelajaran komprehensif berstandar industri di Kampus 2 UNSIL Mugarsari guna menunjang praktikum keinsinyuran, pengujian material terstandarisasi SNI, riset inovatif dosen, serta komputasi rekayasa sipil.
            </p>
        </div>
    </section>

    {{-- Section 1: 6 Laboratorium Kejuruan (2 Kolom Besar) --}}
    <section class="py-20 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Pusat Riset &amp; Pengujian</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">6 Laboratorium Teknik Sipil</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-4 text-sm leading-relaxed">
                    Setiap laboratorium dikelola langsung oleh kepala lab dosen spesialis, laboran bersertifikat, dan didukung asisten praktikum untuk menjamin kualitas pengujian sesuai standar SNI &amp; ASTM.
                </p>
            </div>

            {{-- Grid 2 Kolom Besar (2 - 2 - 2) --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                {{-- 1. Lab TBK --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Besar --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=1000" alt="Lab. Teknologi Bahan Konstruksi"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-cube mr-1"></i> Struktur &amp; Material
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                    LAB 01
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Teknologi Bahan Konstruksi (TBK)
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab Teknik Sipil · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Deskripsi & Alat --}}
                        <div class="p-6 sm:p-7">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pusat pengujian sifat fisis, mekanis, dan durabilitas material konstruksi beton bertulang, semen portland, agregat halus/kasar, serta uji kuat tarik baja tulangan gedung dan jembatan.
                            </p>

                            <div class="mt-6 pt-5 border-t border-slate-100">
                                <div class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Peralatan &amp; Pengujian Utama:</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-blue-50/60 border border-blue-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-compress text-blue-600 text-sm shrink-0"></i>
                                        <span>Mesin Uji Tekan Beton 2000 kN</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-blue-50/60 border border-blue-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-arrows-up-down text-blue-600 text-sm shrink-0"></i>
                                        <span>Universal Testing Machine (UTM)</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-blue-50/60 border border-blue-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-filter text-blue-600 text-sm shrink-0"></i>
                                        <span>Sieve Shaker Elektrik &amp; Oven</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-blue-50/60 border border-blue-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-shield-halved text-blue-600 text-sm shrink-0"></i>
                                        <span>Slump Cone &amp; Cetakan Beton SNI</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    <div class="px-6 sm:px-7 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Standar Uji: <strong>SNI 2847 &bull; ASTM C39</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 2. Lab Perkerasan Jalan --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Besar --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1541888946425-d0fbb18086f6?q=80&w=1000" alt="Lab. Perkerasan Jalan & Aspal"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-amber-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-road mr-1"></i> Transportasi &amp; Jalan
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                    LAB 02
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Perkerasan Jalan &amp; Aspal
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab Teknik Sipil · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Deskripsi & Alat --}}
                        <div class="p-6 sm:p-7">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pengujian komprehensif campuran aspal panas (Hotmix/AC-WC), penetrasi aspal, daktilitas, stabilitas Marshall, serta durabilitas perkerasan jalan raya lentur maupun kaku.
                            </p>

                            <div class="mt-6 pt-5 border-t border-slate-100">
                                <div class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Peralatan &amp; Pengujian Utama:</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-amber-50/60 border border-amber-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-weight-hanging text-amber-600 text-sm shrink-0"></i>
                                        <span>Marshall Compactor &amp; Stabilitas</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-amber-50/60 border border-amber-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-needle text-amber-600 text-sm shrink-0"></i>
                                        <span>Penetrometer &amp; Titik Lembek</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-amber-50/60 border border-amber-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-rotate text-amber-600 text-sm shrink-0"></i>
                                        <span>Centrifuge Extractor Kadar Aspal</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-amber-50/60 border border-amber-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-drum text-amber-600 text-sm shrink-0"></i>
                                        <span>Los Angeles Abrasion Machine</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    <div class="px-6 sm:px-7 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Standar Uji: <strong>Spesifikasi Bina Marga 2018</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 3. Lab Mekanika Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Besar --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=1000" alt="Lab. Mekanika Tanah & Geoteknik"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-emerald-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-layer-group mr-1"></i> Geoteknik &amp; Pondasi
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                    LAB 03
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Mekanika Tanah &amp; Geoteknik
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab Teknik Sipil · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Deskripsi & Alat --}}
                        <div class="p-6 sm:p-7">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pengujian parameter fisis dan mekanis tanah, kapasitas daya dukung pondasi tiang/dangkal, stabilitas lereng bukit, dan analisis konsolidasi penurunan tanah Priangan Timur.
                            </p>

                            <div class="mt-6 pt-5 border-t border-slate-100">
                                <div class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Peralatan &amp; Pengujian Utama:</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-bore-hole text-emerald-600 text-sm shrink-0"></i>
                                        <span>Mesin Sondir Hidrolik 2.5 Ton (CPT)</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-arrows-split-up-and-left text-emerald-600 text-sm shrink-0"></i>
                                        <span>Direct Shear &amp; Triaxial Test</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-chart-line text-emerald-600 text-sm shrink-0"></i>
                                        <span>Oedometer Konsolidasi Tanah</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-hammer text-emerald-600 text-sm shrink-0"></i>
                                        <span>Compactor Proctor &amp; Atterberg Limits</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    <div class="px-6 sm:px-7 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Standar Uji: <strong>SNI 2828 &bull; ASTM D2166</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 4. Lab Hidrolika & SDA --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Besar --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="Lab. Hidrolika & Sumber Daya Air"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1000'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-cyan-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-water mr-1"></i> Keairan &amp; Hidrologi
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                    LAB 04
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Hidrolika &amp; Sumber Daya Air
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab Teknik Sipil · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Deskripsi & Alat --}}
                        <div class="p-6 sm:p-7">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pemodelan hidrodinamika saluran terbuka, hidraulika aliran tertutup pada perpipaan, simulasi bangunan pelimpah bendungan, dan debit saluran irigasi DAS Citanduy.
                            </p>

                            <div class="mt-6 pt-5 border-t border-slate-100">
                                <div class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Peralatan &amp; Pengujian Utama:</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-cyan-50/60 border border-cyan-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-water text-cyan-600 text-sm shrink-0"></i>
                                        <span>Open Channel Flume 5 Meter</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-cyan-50/60 border border-cyan-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-wind text-cyan-600 text-sm shrink-0"></i>
                                        <span>Venturimeter &amp; Pipa Bernoulli</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-cyan-50/60 border border-cyan-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-water-ladder text-cyan-600 text-sm shrink-0"></i>
                                        <span>Model Ambang &amp; Pelimpah Bendung</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-cyan-50/60 border border-cyan-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-tachograph-digital text-cyan-600 text-sm shrink-0"></i>
                                        <span>Current Meter Debit Saluran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    <div class="px-6 sm:px-7 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Standar Uji: <strong>Kriteria Perencanaan Irigasi KP</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 5. Lab Komputasi & BIM --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Besar --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1000" alt="Lab. Komputasi Rekayasa Sipil & BIM"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-purple-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-desktop mr-1"></i> Komputasi &amp; BIM 5D
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                    LAB 05
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Komputasi Rekayasa &amp; BIM
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung FT UNSIL Lantai 2 · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Deskripsi & Alat --}}
                        <div class="p-6 sm:p-7">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Laboratorium workstation komputer berkinerja tinggi untuk analisis struktur gedung tahan gempa, pemodelan Building Information Modeling (BIM 5D), dan simulasi hidraulika.
                            </p>

                            <div class="mt-6 pt-5 border-t border-slate-100">
                                <div class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Software Keinsinyuran Berlisensi:</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-purple-50/60 border border-purple-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-building-user text-purple-600 text-sm shrink-0"></i>
                                        <span>SAP2000 &amp; ETABS Structural</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-purple-50/60 border border-purple-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-compass-drafting text-purple-600 text-sm shrink-0"></i>
                                        <span>Autodesk AutoCAD &amp; Civil 3D</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-purple-50/60 border border-purple-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-water-ladder text-purple-600 text-sm shrink-0"></i>
                                        <span>HEC-RAS Simulasi Banjir</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-purple-50/60 border border-purple-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-map-location text-purple-600 text-sm shrink-0"></i>
                                        <span>ArcGIS &amp; QGIS Spasial Geodesi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    <div class="px-6 sm:px-7 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Fasilitas: <strong>40 Unit PC Core i7 &bull; Gigabit LAN</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

                {{-- 6. Lab Perpetaan & Ukur Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Foto Besar --}}
                        <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1508873696983-2df5293cb395?q=80&w=1000" alt="Lab. Perpetaan & Ukur Tanah"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                            
                            {{-- Badge Atas --}}
                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="bg-rose-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    <i class="fa-solid fa-map-location-dot mr-1"></i> Geomatika &amp; Survei
                                </span>
                                <span class="bg-black/50 backdrop-blur-sm text-amber-400 border border-amber-400/30 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                    LAB 06
                                </span>
                            </div>

                            {{-- Judul di dalam Foto --}}
                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Perpetaan &amp; Ukur Tanah
                                </h3>
                                <p class="text-slate-300 text-xs mt-1 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-amber-400 text-[10px]"></i>
                                    <span>Gedung Lab Teknik Sipil · Kampus 2 Mugarsari</span>
                                </p>
                            </div>
                        </div>

                        {{-- Isi Deskripsi & Alat --}}
                        <div class="p-6 sm:p-7">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pusat praktikum survei terestris pengukuran situasi kontur, poligon tertutup/terbuka, penentuan elevasi trase jalan dan saluran air, serta pemetaan topografi presisi tinggi.
                            </p>

                            <div class="mt-6 pt-5 border-t border-slate-100">
                                <div class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Peralatan &amp; Instrumen Utama:</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-rose-50/60 border border-rose-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-binoculars text-rose-600 text-sm shrink-0"></i>
                                        <span>Total Station Digital Elektronik</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-rose-50/60 border border-rose-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-crosshairs text-rose-600 text-sm shrink-0"></i>
                                        <span>Theodolite Digital &amp; Rambu Ukur</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-rose-50/60 border border-rose-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-level-up text-rose-600 text-sm shrink-0"></i>
                                        <span>Automatic Waterpass (Leveling)</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-rose-50/60 border border-rose-100 text-slate-800 text-xs font-medium">
                                        <i class="fa-solid fa-satellite text-rose-600 text-sm shrink-0"></i>
                                        <span>GPS Geodetik Navigasi Statif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    <div class="px-6 sm:px-7 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Standar Uji: <strong>Badan Informasi Geospasial (BIG)</strong></span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Siap Pakai Praktikum
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 2: Fasilitas Penunjang Akademik (2 Kolom Lebar) --}}
    <section class="py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Lingkungan Kampus</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Penunjang Akademik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-4 text-sm leading-relaxed">
                    Sarana komunal dan ruang belajar terpadu untuk menunjang perkuliahan teori, kolaborasi penelitian tugas akhir, dan kreativitas mahasiswa.
                </p>
            </div>

            {{-- 2 Kolom (2 - 2) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- Smart Classroom --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Smart Classroom"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Ruang Kuliah
                            </span>
                            <div class="absolute bottom-4 left-5">
                                <h4 class="text-xl font-bold text-white">Smart Classroom Multimedia</h4>
                                <p class="text-slate-300 text-xs mt-0.5">Ruang Kelas Ber-AC &amp; Smart Screen</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruang perkuliahan modern berpendingin udara (AC) yang dilengkapi LCD Smart Projector, sound system terintegrasi, dan jaringan internet kampus berkecepatan tinggi untuk model pembelajaran tatap muka maupun hybrid.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Ruang Baca & Referensi --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" alt="Ruang Baca & Referensi"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-emerald-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Pustaka &amp; Jurnal
                            </span>
                            <div class="absolute bottom-4 left-5">
                                <h4 class="text-xl font-bold text-white">Ruang Baca &amp; Referensi Mandiri</h4>
                                <p class="text-slate-300 text-xs mt-0.5">Koleksi Tugas Akhir &amp; Standar SNI</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Menyediakan ribuan judul buku teks keinsinyuran, jurnal ilmiah terakreditasi, standar perancangan struktur SNI/ASTM, serta arsip laporan skripsi/tugas akhir alumni untuk literatur mahasiswa.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Ruang Sidang --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Ruang Sidang"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-amber-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Seminar &amp; Kolokium
                            </span>
                            <div class="absolute bottom-4 left-5">
                                <h4 class="text-xl font-bold text-white">Ruang Sidang &amp; Aula Seminar</h4>
                                <p class="text-slate-300 text-xs mt-0.5">Sidang Sarjana &amp; Kuliah Pakar Industri</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruangan representatif untuk seminar proposal, kolokium ilmiah berkala, kuliah tamu praktisi konstruksi nasional, serta ujian sidang pendadaran komprehensif calon sarjana teknik sipil.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Selasar & Gazebo Diskusi --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Coworking & Gazebo"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-purple-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Coworking Space
                            </span>
                            <div class="absolute bottom-4 left-5">
                                <h4 class="text-xl font-bold text-white">Selasar &amp; Gazebo Diskusi</h4>
                                <p class="text-slate-300 text-xs mt-0.5">Area Kolaborasi Mahasiswa (HMS)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruang terbuka hijau dan selasar gedung berkanopi yang nyaman untuk belajar bersama, asistensi gambar rekayasa struktur dengan asisten, serta diskusi kegiatan Himpunan Mahasiswa Sipil.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 3: Standar K3L Laboratorium --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] rounded-3xl p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
                <div class="absolute inset-0 opacity-[0.04] bg-repeat pointer-events-none"
                     style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
                
                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <span class="text-amber-400 font-bold uppercase text-xs tracking-wider block mb-2">
                            Keselamatan Kerja Laboratorium
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-black font-heading leading-tight">
                            Standar K3L (Kesehatan &amp; Keselamatan Kerja)
                        </h3>
                        <p class="text-slate-300 text-xs sm:text-sm mt-3 leading-relaxed">
                            Seluruh kegiatan praktikum, penelitian, dan pengujian wajib mematuhi protokol K3L konstruksi. Mahasiswa diwajibkan mengenakan Alat Pelindung Diri (APD: helm proyek, rompi visibilitas tinggi, sepatu safety, kacamata pelindung), serta tersedianya APAR dan P3K di setiap ruangan lab.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 shrink-0">
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 text-center min-w-[130px]">
                            <i class="fa-solid fa-helmet-safety text-amber-400 text-3xl mb-2"></i>
                            <div class="text-xs font-bold text-white">Wajib APD Lengkap</div>
                            <div class="text-[10px] text-slate-300 mt-0.5">Helm, Rompi, Sepatu</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 text-center min-w-[130px]">
                            <i class="fa-solid fa-fire-extinguisher text-amber-400 text-3xl mb-2"></i>
                            <div class="text-xs font-bold text-white">APAR &amp; P3K Siaga</div>
                            <div class="text-[10px] text-slate-300 mt-0.5">Standar Evakuasi Darurat</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
