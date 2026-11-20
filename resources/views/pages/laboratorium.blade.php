@extends('layouts.app')

@section('title', 'Laboratorium Kejuruan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas 6 laboratorium kejuruan Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Laboratorium</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Pusat Pengujian &amp; Komputasi Kejuruan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Laboratorium <span class="text-amber-400">Teknik Sipil</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Fasilitas 6 laboratorium modern di Gedung Laboratorium Kampus 2 UNSIL Mugarsari guna mendukung kegiatan praktikum kurikulum 144 SKS, penelitian tugas akhir mahasiswa, serta pengujian material konstruksi berstandar SNI dan ASTM.
            </p>
        </div>
    </section>

    {{-- Section: 6 Laboratorium Kejuruan --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Prasarana Unggulan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">6 Laboratorium Terpadu</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Setiap laboratorium dibina oleh kepala laboratorium dan pranata laboratorium bersertifikat untuk memastikan presisi pengujian dan kelancaran praktikum.
                </p>
            </div>

            {{-- Grid 2 Kolom --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-7">
                
                {{-- 1. Lab TBK --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=1000" alt="Lab. Teknologi Bahan Konstruksi"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-blue-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Struktur &amp; Bahan
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Teknologi Bahan Konstruksi (TBK)
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">Gedung FT UNSIL &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Melayani praktikum dan pengujian sifat fisis maupun mekanis bahan bangunan seperti beton, semen, agregat, dan baja tulangan.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <div class="text-xs font-bold text-slate-700 mb-2">Peralatan utama:</div>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0"></span>
                                        <span>Mesin Uji Tekan Beton (CTM)</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0"></span>
                                        <span>Universal Testing Machine (UTM)</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0"></span>
                                        <span>Sieve Shaker Agregat</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0"></span>
                                        <span>Los Angeles Abrasion Machine</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Standar Pengujian: <strong>SNI &bull; ASTM</strong></span>
                        <span class="text-emerald-700 font-semibold text-[11px]">Aktif Praktikum</span>
                    </div>
                </div>

                {{-- 2. Lab Hidraulika --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581092335397-9583fe92d232?q=80&w=1000" alt="Lab. Hidraulika & Bangunan Air"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-seminar-hathi-air.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-cyan-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Sumber Daya Air
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Hidraulika &amp; Bangunan Air
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">Gedung FT UNSIL &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pengujian aliran fluida saluran terbuka, saluran tertutup, debit limpasan bendung, fenomena loncatan hidraulis, dan model hidraulik fisik.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <div class="text-xs font-bold text-slate-700 mb-2">Peralatan utama:</div>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-600 shrink-0"></span>
                                        <span>Tilting Flume Channel</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-600 shrink-0"></span>
                                        <span>Current Meter Kecepatan Aliran</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-600 shrink-0"></span>
                                        <span>Pintu Air Sorong &amp; Ambang</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-600 shrink-0"></span>
                                        <span>Alat Uji Orifice &amp; Venturi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Standar Pengujian: <strong>SNI SDA</strong></span>
                        <span class="text-emerald-700 font-semibold text-[11px]">Aktif Praktikum</span>
                    </div>
                </div>

                {{-- 3. Lab Mekanika Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1541888946425-d0fbb186f5f7?q=80&w=1000" alt="Lab. Mekanika Tanah & Geoteknik"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-emerald-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Geoteknik
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Mekanika Tanah &amp; Geoteknik
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">Gedung FT UNSIL &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pengujian sifat fisis tanah (kadar air, berat jenis, atterberg limits) dan sifat mekanis (kuat geser, daya dukung, permeabilitas, konsolidasi).
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <div class="text-xs font-bold text-slate-700 mb-2">Peralatan utama:</div>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 shrink-0"></span>
                                        <span>Alat Uji Geser Langsung</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 shrink-0"></span>
                                        <span>Alat Konsolidasi Oedometer</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 shrink-0"></span>
                                        <span>Mesin Triaxial UU/CU</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 shrink-0"></span>
                                        <span>Sondir Lapangan 2.5 &amp; 5 Ton</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Standar Pengujian: <strong>SNI &bull; ASTM D</strong></span>
                        <span class="text-emerald-700 font-semibold text-[11px]">Aktif Praktikum</span>
                    </div>
                </div>

                {{-- 4. Lab Transportasi --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=1000" alt="Lab. Transportasi & Jalan Raya"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-amber-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Transportasi
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Transportasi &amp; Jalan Raya
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">Gedung FT UNSIL &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pengujian sifat aspal (penetrasi, daktilitas, titik nyala, titik lembek) dan uji campuran aspal panas menggunakan metode Marshall Test.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <div class="text-xs font-bold text-slate-700 mb-2">Peralatan utama:</div>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-600 shrink-0"></span>
                                        <span>Marshall Compression Machine</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-600 shrink-0"></span>
                                        <span>Penetrometer Aspal Digital</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-600 shrink-0"></span>
                                        <span>Water Bath Suhu Konstan</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-600 shrink-0"></span>
                                        <span>Centrifuge Bitumen Extractor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Standar Pengujian: <strong>SNI Bina Marga</strong></span>
                        <span class="text-emerald-700 font-semibold text-[11px]">Aktif Praktikum</span>
                    </div>
                </div>

                {{-- 5. Lab Komputasi --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=1000" alt="Lab. Komputasi & Pemodelan Struktur"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/workshop-obe.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-purple-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Desain &amp; Komputasi BIM
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Komputasi &amp; Pemodelan Struktur
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">Gedung FT UNSIL &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Sarana pemodelan elemen hingga struktur bangunan, analisis hidraulika saluran, analisis geoteknik lereng, gambar teknik CAD, dan estimasi biaya konstruksi.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <div class="text-xs font-bold text-slate-700 mb-2">Software utama:</div>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-purple-600 shrink-0"></span>
                                        <span>SAP2000 &amp; ETABS</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-purple-600 shrink-0"></span>
                                        <span>AutoCAD &amp; Civil 3D</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-purple-600 shrink-0"></span>
                                        <span>HEC-RAS Hidraulika</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-purple-600 shrink-0"></span>
                                        <span>ArcGIS Pemetaan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Fasilitas: <strong>Workstation PC &bull; LAN</strong></span>
                        <span class="text-emerald-700 font-semibold text-[11px]">Aktif Praktikum</span>
                    </div>
                </div>

                {{-- 6. Lab Perpetaan --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1508873696983-2df5293cb395?q=80&w=1000" alt="Lab. Perpetaan & Ukur Tanah"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-rose-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Geomatika &amp; Survei
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">
                                    Lab. Perpetaan &amp; Ukur Tanah
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">Gedung FT UNSIL &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Praktikum pengukuran situasi kontur, penentuan koordinat poligon, elevasi trase jalan raya dan saluran irigasi, serta pemetaan topografi lapangan.
                            </p>

                            <div class="mt-4 pt-3.5 border-t border-slate-100">
                                <div class="text-xs font-bold text-slate-700 mb-2">Peralatan utama:</div>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-600 shrink-0"></span>
                                        <span>Total Station Digital</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-600 shrink-0"></span>
                                        <span>Theodolite Digital &amp; Rambu</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-600 shrink-0"></span>
                                        <span>Automatic Waterpass</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-600 shrink-0"></span>
                                        <span>GPS Geodetik Navigasi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Standar Pengujian: <strong>SNI &bull; Standar BIG</strong></span>
                        <span class="text-emerald-700 font-semibold text-[11px]">Aktif Praktikum</span>
                    </div>
                </div>

            </div>

            {{-- Banner K3 Terpadu --}}
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
