@extends('layouts.app')

@section('title', 'Karya Dosen | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terindeks SINTA Akselerasi, paten inovasi HKI, dan buku ajar dosen Program Studi Teknik Sipil FT UNSIL.')

@section('content')
    
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Karya Dosen</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Intelektual &amp; Publikasi Ilmiah
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Karya &amp; Publikasi Dosen
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Produktivitas keilmuan dosen Program Studi Teknik Sipil FT UNSIL dalam bentuk jurnal ilmiah terindeks SINTA, paten hak kekayaan intelektual (HKI), dan buku referensi keinsinyuran.
            </p>
        </div>
    </section>

    
    <section class="py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">


            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
                
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full uppercase tracking-wider">Jurnal Ilmiah &bull; SINTA</span>
                            <i class="fa-solid fa-book-open-reader text-blue-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 leading-snug">Akselerasi : Jurnal Ilmiah Teknik Sipil</h4>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Jurnal berkala resmi Program Studi Teknik Sipil FT UNSIL yang menerbitkan artikel riset mutakhir bidang rekayasa struktur, transportasi, geoteknik, manajemen konstruksi, dan sumber daya air terindeks SINTA.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-xs text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">ISSN:</strong> 2715-7318 (Online)</div>
                            <div><strong class="text-slate-800">Frekuensi:</strong> 2 Kali Setahun (Juni &amp; Desember)</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="https://jurnal.unsil.ac.id" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900">
                            <span>Kunjungi Portal Jurnal (OJS)</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                </div>

                
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-3 py-1 rounded-full uppercase tracking-wider">Paten &amp; HKI</span>
                            <i class="fa-solid fa-lightbulb text-amber-500 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 leading-snug">Hak Cipta Inovasi Material &amp; Metode</h4>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Paten terdaftar dan hak cipta karya inovasi dosen, meliputi metode perkuatan tanah lempung lunak, formula campuran beton ramah lingkungan ekonomis, dan perangkat lunak bantu analisis struktur.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-xs text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">Kategori:</strong> Paten Sederhana &amp; Hak Cipta</div>
                            <div><strong class="text-slate-800">Lembaga:</strong> DJKI Kemenkumham RI</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <span class="text-xs font-bold text-amber-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-halved text-[10px]"></i> Terdaftar Resmi di DJKI
                        </span>
                    </div>
                </div>

                
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full uppercase tracking-wider">Buku Ajar &amp; Monograf</span>
                            <i class="fa-solid fa-book text-emerald-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 leading-snug">Buku Referensi Keinsinyuran</h4>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Buku teks ber-ISBN yang ditulis oleh dosen-dosen Teknik Sipil UNSIL, mencakup Mekanika Rekayasa, Analisis Struktur Lanjut, Rekayasa Pondasi Dangkal &amp; Dalam, serta Hidrologi Teknik Sipil.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-xs text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">Penerbit:</strong> UNSIL Press &amp; Penerbit Nasional</div>
                            <div><strong class="text-slate-800">Distribusi:</strong> Perpustakaan &amp; Sivitas Akademika</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('download') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700 hover:text-emerald-900">
                            <span>Lihat Bahan Ajar Mahasiswa</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            
            {{-- Bidang Riset Unggulan --}}
            <div class="mt-16">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Fokus Penelitian</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Bidang Riset Unggulan</h2>
                    <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                    <p class="text-slate-500 mt-3 text-sm leading-relaxed">Lima kluster riset utama yang menjadi keahlian dosen Program Studi Teknik Sipil FT UNSIL.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                    <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition text-center group">
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-100 transition">
                            <i class="fa-solid fa-road text-blue-600 text-xl"></i>
                        </div>
                        <h5 class="font-bold text-slate-800 text-sm">Transportasi &amp; Lalu Lintas</h5>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Analisis simpang, manajemen parkir, keselamatan jalan</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-amber-100 shadow-sm hover:shadow-md transition text-center group">
                        <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-amber-100 transition">
                            <i class="fa-solid fa-building-columns text-amber-600 text-xl"></i>
                        </div>
                        <h5 class="font-bold text-slate-800 text-sm">Struktur &amp; Material</h5>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Struktur beton, baja, inovasi material konstruksi</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-cyan-100 shadow-sm hover:shadow-md transition text-center group">
                        <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-cyan-100 transition">
                            <i class="fa-solid fa-water text-cyan-600 text-xl"></i>
                        </div>
                        <h5 class="font-bold text-slate-800 text-sm">Sumber Daya Air</h5>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Hidrologi DAS, drainase perkotaan, pemodelan HEC-HMS</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-green-100 shadow-sm hover:shadow-md transition text-center group">
                        <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-green-100 transition">
                            <i class="fa-solid fa-layer-group text-green-600 text-xl"></i>
                        </div>
                        <h5 class="font-bold text-slate-800 text-sm">Geoteknik</h5>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Perbaikan tanah, kestabilan lereng, fondasi &amp; mitigasi longsor</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-purple-100 shadow-sm hover:shadow-md transition text-center group">
                        <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-100 transition">
                            <i class="fa-solid fa-hard-hat text-purple-600 text-xl"></i>
                        </div>
                        <h5 class="font-bold text-slate-800 text-sm">Manajemen Konstruksi</h5>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">BIM, RAB, penjadwalan proyek, manajemen risiko</p>
                    </div>
                </div>
            </div>

            {{-- Dosen Riset Unggulan --}}
            <div class="mt-16">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Peneliti Aktif</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Dosen &amp; Kolaborasi Riset</h2>
                    <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    {{-- Andhy Romdani --}}
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('images/unsil-prestasi-scopus-sipil.png') }}" alt="Riset Internasional Teknik Sipil UNSIL"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent"></div>
                            <span class="absolute bottom-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full">Terindeks Scopus</span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h4 class="font-bold text-slate-900 text-base">Andhy Romdani, Ph.D.</h4>
                            <p class="text-xs text-blue-700 font-semibold mt-0.5">Rekayasa &amp; Analisis Spasial</p>
                            <p class="text-xs text-slate-500 mt-3 leading-relaxed flex-grow">
                                Aktif mempublikasikan riset berstandar internasional terindeks Scopus di bidang rekayasa infrastruktur dan analisis spasial berbasis data geospasial.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500">
                                <i class="fa-solid fa-globe text-blue-500"></i>
                                <span>Kolaborasi Internasional</span>
                            </div>
                        </div>
                    </div>

                    {{-- Yanuar Haryanto --}}
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Taiwan NCKU"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent"></div>
                            <span class="absolute bottom-3 left-3 bg-amber-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full">Kolaborasi NCKU Taiwan</span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h4 class="font-bold text-slate-900 text-base">Yanuar Haryanto, Ph.D.</h4>
                            <p class="text-xs text-amber-700 font-semibold mt-0.5">Struktur &amp; Kolaborasi Global</p>
                            <p class="text-xs text-slate-500 mt-3 leading-relaxed flex-grow">
                                Narasumber dalam Seminar Internasional "Bridging Futures" bersama National Cheng Kung University (NCKU) Taiwan, aktif di bidang riset struktur dan rekayasa material.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500">
                                <i class="fa-solid fa-award text-amber-500"></i>
                                <span>NCKU Taiwan · 2024</span>
                            </div>
                        </div>
                    </div>

                    {{-- Nina Herlina --}}
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Riset Transportasi Teknik Sipil UNSIL"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent"></div>
                            <span class="absolute bottom-3 left-3 bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full">Transportasi &amp; Lalu Lintas</span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h4 class="font-bold text-slate-900 text-base">Nina Herlina, M.T.</h4>
                            <p class="text-xs text-emerald-700 font-semibold mt-0.5">Rekayasa Transportasi</p>
                            <p class="text-xs text-slate-500 mt-3 leading-relaxed flex-grow">
                                Peneliti aktif di bidang rekayasa transportasi dan manajemen lalu lintas, termasuk inovasi <em>Hybrid Billing Parking System</em> dan analisis kinerja simpang di wilayah Tasikmalaya.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500">
                                <i class="fa-solid fa-car text-emerald-500"></i>
                                <span>Manajemen Parkir Cerdas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Galeri Kegiatan Ilmiah --}}
            <div class="mt-16">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Dokumentasi</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Galeri Kegiatan Ilmiah</h2>
                    <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Taiwan" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Workshop OBE" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar HATHI Air" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Laboratorium Teknik Sipil" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
