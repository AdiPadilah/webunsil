@extends('layouts.app')

@section('title', 'Ruang Rapat & Diskusi Akademik | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Ruang Rapat Pimpinan dan Diskusi Dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari — dilengkapi smart display, AC, hybrid meeting set, dan WiFi Eduroam.')

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
                <span class="text-white font-semibold">Ruang Rapat</span>
            </nav>
            <span class="text-amber-400 text-xs font-medium mb-2">
                Pusat Koordinasi &amp; Musyawarah Akademik
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Rapat <span class="text-amber-400">&amp; Diskusi</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Sarana ruang rapat representatif di Gedung Fakultas Teknik Kampus 2 UNSIL Mugarsari dengan konfigurasi boardroom berkapasitas 20&ndash;30 orang, dilengkapi fasilitas hybrid meeting, smart display, pendingin udara, dan koneksi internet stabil untuk mendukung koordinasi prodi, rapat kurikulum, serta audiensi kelembagaan.
            </p>
        </div>
    </section>

    {{-- Fitur Unggulan Ruang Rapat --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Sarana Kolaborasi Kampus 2 Mugarsari</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Ruang Rapat</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Dirancang ergonomis untuk menunjang pengambilan keputusan strategis, koordinasi dosen, evaluasi pembelajaran, dan diskusi kemitraan industri.
                </p>
            </div>

            {{-- 4 Card Fitur Utama --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kapasitas 20&ndash;30 Orang</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Meja konferensi terpadu dengan kursi ergonomis berkualitas tinggi, dirancang untuk diskusi intensif berdurasi panjang dengan kenyamanan optimal.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        Boardroom Layout
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Sistem Hybrid Meeting</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Dilengkapi kamera video conference omnidirectional dan speakerphone noise-canceling untuk rapat daring lintas kampus dan mitra internasional.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold">
                        Zoom &amp; GMeet Ready
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-tv"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Smart Display Interaktif</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Layar monitor presentasi definisi tinggi (Ultra HD) yang mendukung screen mirroring nirkabel dari laptop maupun perangkat mobile dosen.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold">
                        Wireless Presentation
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-wind"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">AC &amp; Akustik Kedap</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Ruangan berpendingin udara (AC) dengan penataan akustik kedap suara menjaga kerahasiaan diskusi formal dan fokus peserta rapat.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-indigo-600 font-semibold">
                        Tenang &amp; Sejuk
                    </div>
                </div>

            </div>

            {{-- Galeri Foto Dokumentasi Ruang Rapat --}}
            <div class="mt-16 pt-12 border-t border-slate-200">
                <div class="text-center max-w-xl mx-auto mb-10">
                    <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Dokumentasi Ruangan</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1 font-heading">Galeri Ruang Rapat</h3>
                    <p class="text-slate-500 mt-2 text-xs sm:text-sm">
                        Kondisi riil interior ruang rapat, konfigurasi meja konferensi, dan area pendukung di Gedung FT UNSIL.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                        <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/ruang-rapat-1.jpg') }}" alt="Konferensi Utama &amp; Smart Display TV"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 bg-white border-t border-slate-100">
                            <h4 class="font-bold text-slate-900 text-sm">Ruang Konferensi Utama &amp; Smart Display TV</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Meja konferensi oval dengan fasilitas monitor presentasi interaktif</p>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                        <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/ruang-rapat-2.jpg') }}" alt="Meja Rapat Boardroom &amp; Tata Ruang"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 bg-white border-t border-slate-100">
                            <h4 class="font-bold text-slate-900 text-sm">Meja Rapat Boardroom &amp; Tata Ruang</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Sudut pandang meja rapat menghadap partisi kaca dan koridor dalam</p>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                        <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/ruang-rapat-3.jpg') }}" alt="Partisi Kaca &amp; Ruang Diskusi Terbuka"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 bg-white border-t border-slate-100">
                            <h4 class="font-bold text-slate-900 text-sm">Partisi Kaca &amp; Ruang Diskusi Terbuka</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Skat kaca transparan kedap suara yang menghubungkan ruang rapat dan staf</p>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                        <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/ruang-rapat-4.jpg') }}" alt="Area Pendukung &amp; Meja Diskusi Bundar"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 bg-white border-t border-slate-100">
                            <h4 class="font-bold text-slate-900 text-sm">Area Pendukung &amp; Meja Diskusi Bundar</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Fasilitas pendukung rapat, lemari arsip, dispenser, dan meja briefing cepat</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
