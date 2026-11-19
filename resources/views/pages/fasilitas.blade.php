@extends('layouts.app')

@section('title', 'Fasilitas Laboratorium | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas 6 laboratorium modern Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')
    
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
                Sarana &amp; Prasarana Unggulan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Fasilitas Laboratorium
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Dilengkapi dengan 6 unit laboratorium modern terstandarisasi untuk mendukung kegiatan praktikum mahasiswa, riset dosen, pengujian bahan konstruksi, dan sertifikasi keahlian rekayasa sipil.
            </p>
        </div>
    </section>

    
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.08] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Peralatan Pengujian &amp; Komputasi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">6 Laboratorium Teknik Sipil</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Setiap laboratorium berada di Kampus 2 UNSIL Mugarsari dan dibimbing oleh dosen kepala lab, laboran bersertifikat, serta asisten praktikum berpengalaman.
                </p>
            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-cube"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-base">Lab. Teknologi Bahan Konstruksi (TBK)</h4>
                        <p class="text-xs text-slate-500 mt-2.5 leading-relaxed">
                            Mendukung pengujian sifat fisis dan mekanis material beton, semen, agregat, dan baja tulangan.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 space-y-1.5 text-xs text-slate-600">
                            <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Mesin Uji Tekan Beton Hidrolik</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Mesin Uji Tarik Baja Tulangan (UTM)</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Sieve Shaker Elektrik &amp; Oven Pengering</div>
                        </div>
                    </div>
                </div>

                
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-base">Lab. Perkerasan Jalan</h4>
                        <p class="text-xs text-slate-500 mt-2.5 leading-relaxed">
                            Pusat pengujian karakteristik campuran aspal panas (hotmix) dan material perkerasan lentur maupun kaku.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 space-y-1.5 text-xs text-slate-600">
                            <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-amber-600 text-[10px]"></i> Marshall Test Compactor &amp; Stabilitas</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-amber-600 text-[10px]"></i> Penetrometer Aspal &amp; Alat Daktilitas</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-amber-600 text-[10px]"></i> Centrifuge Extractor Kadar Aspal</div>
                        </div>
                    </div>
                </div>

                
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-bore-hole"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-base">Lab. Mekanika Tanah &amp; Geoteknik</h4>
                        <p class="text-xs text-slate-500 mt-2.5 leading-relaxed">
                            Pengujian sifat indeks, parameter kekuatan geser tanah, dan daya dukung pondasi untuk stabilitas tanah.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 space-y-1.5 text-xs text-slate-600">
                            <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-600 text-[10px]"></i> Alat Sondir Hidrolik 2.5 Ton (CPT)</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-600 text-[10px]"></i> Direct Shear Test &amp; Triaxial Test</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-600 text-[10px]"></i> Alat Konsolidasi Tanah (Oedometer)</div>
                        </div>
                    </div>
                </div>

                
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-water"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-base">Lab. Hidrolika &amp; Sumber Daya Air</h4>
                        <p class="text-xs text-slate-500 mt-2.5 leading-relaxed">
                            Simulasi aliran fluida saluran terbuka, saluran tertutup (pipa), energi hidraulik, dan debit saluran air.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 space-y-1.5 text-xs text-slate-600">
                            <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-cyan-600 text-[10px]"></i> Open Channel Flume Aliran Terbuka</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-cyan-600 text-[10px]"></i> Alat Ukur Venturimeter &amp; Orifice</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-cyan-600 text-[10px]"></i> Model Ambang &amp; Pelimpah Bendungan</div>
                        </div>
                    </div>
                </div>

                
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-base">Lab. Komputasi Rekayasa Sipil</h4>
                        <p class="text-xs text-slate-500 mt-2.5 leading-relaxed">
                            Praktikum pemodelan struktur digital, Computer Aided Design (CAD), simulasi hidraulik, dan analisis numerik.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 space-y-1.5 text-xs text-slate-600">
                            <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Software Berlisensi:</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-indigo-600 text-[10px]"></i> SAP2000 &amp; ETABS Structural</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-indigo-600 text-[10px]"></i> AutoCAD &bull; Civil 3D</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-indigo-600 text-[10px]"></i> HEC-RAS &amp; Arc-GIS Pemodelan</div>
                        </div>
                    </div>
                </div>

                
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-base">Lab. Perpetaan &amp; Ukur Tanah</h4>
                        <p class="text-xs text-slate-500 mt-2.5 leading-relaxed">
                            Praktikum pengukuran topografi kontur, penentuan koordinat poligon, elevasi jalan, dan pemetaan geodesi.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 space-y-1.5 text-xs text-slate-600">
                            <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-rose-600 text-[10px]"></i> Total Station Digital Lanjutan</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-rose-600 text-[10px]"></i> Theodolite Elektronik &amp; Waterpass Otomatis</div>
                            <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-rose-600 text-[10px]"></i> GPS Geodetik Navigasi Presisi</div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="bg-gradient-to-r from-[#0B2A4A] to-[#154c79] rounded-3xl p-8 sm:p-10 text-white shadow-xl flex flex-col lg:flex-row items-center justify-between gap-6">
                <div>
                    <span class="text-amber-400 font-bold uppercase text-xs tracking-wider">Keselamatan Praktikum &amp; Uji Bahan</span>
                    <h3 class="text-xl sm:text-2xl font-bold mt-1">Layanan Pengujian Bahan bagi Industri Konstruksi</h3>
                    <p class="text-slate-300 text-xs sm:text-sm mt-2 max-w-2xl leading-relaxed">
                        Selain untuk praktikum mahasiswa, laboratorium Teknik Sipil UNSIL juga melayani uji mutu beton, uji tarik baja, dan survei penyelidikan tanah (soil investigation) bagi kontraktor, konsultan, dan instansi pemerintah daerah.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('layanan') }}" class="px-5 py-3 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs shadow-md transition whitespace-nowrap">
                        Konsultasi Pengujian Lab
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection
