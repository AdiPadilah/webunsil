@extends('layouts.app')

@section('title', 'Laboratorium Kejuruan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas laboratorium kejuruan Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

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
            <span class="text-amber-400 text-xs font-medium mb-2">
                Pusat Pengujian &amp; Komputasi Kejuruan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Laboratorium <span class="text-amber-400">Teknik Sipil</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Fasilitas laboratorium keinsinyuran modern di Gedung FT Kampus 2 UNSIL Mugarsari guna mendukung kegiatan praktikum mahasiswa, penelitian tugas akhir, dan pengujian material konstruksi berstandar SNI dan ASTM.
            </p>
        </div>
    </section>

    {{-- Section: Laboratorium Kejuruan --}}
    <section class="py-12 md:py-16 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header Pengantar --}}
            <div class="max-w-3xl mb-10 sm:mb-12">
                <p class="text-xs font-bold text-[#0070BA] tracking-wider uppercase mb-1.5">
                    Fasilitas Praktikum &amp; Riset Terpadu
                </p>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading tracking-tight">
                    6 Unit Laboratorium Teknik Sipil UNSIL
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Setiap laboratorium dikelola oleh dosen pembina dan pranata laboratorium bersertifikat untuk menjamin keselamatan kerja, akurasi data uji, serta kesesuaian dengan standar industri konstruksi nasional.
                </p>
            </div>

            {{-- Daftar Laboratorium: Alternating Editorial Rows --}}
            <div class="space-y-16 lg:space-y-24 border-t border-slate-200 pt-12 sm:pt-16">

                {{-- 01. Lab TBK (Foto Kiri, Teks Kanan) --}}
                <article id="lab-tbk" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}"
                                 alt="Lab. Teknologi Bahan Konstruksi FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0070BA]">Struktur &amp; Bahan</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight">
                            Lab. Teknologi Bahan Konstruksi (TBK)
                        </h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-xs text-slate-500 my-3">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-location-dot text-slate-400"></i> Gedung FT UNSIL Kampus 2 Mugarsari
                            </span>
                            <span class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <i class="fa-solid fa-circle-check"></i> Standar SNI &bull; ASTM
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Melayani praktikum dan pengujian sifat fisis maupun mekanis bahan bangunan seperti beton, semen, agregat kasar/halus, serta baja tulangan untuk memastikan keandalan mutu konstruksi sipil.
                        </p>
                    </div>
                </article>

                {{-- 02. Lab Hidraulika (Teks Kiri, Foto Kanan) --}}
                <article id="lab-hidraulika" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}"
                                 alt="Lab. Hidraulika & Bangunan Air FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-seminar-hathi-air.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6 lg:order-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0070BA]">Sumber Daya Air</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight">
                            Lab. Hidraulika &amp; Bangunan Air
                        </h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-xs text-slate-500 my-3">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-location-dot text-slate-400"></i> Gedung FT UNSIL Kampus 2 Mugarsari
                            </span>
                            <span class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <i class="fa-solid fa-circle-check"></i> Standar SNI SDA &bull; PUPR
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Pusat pengujian dinamika fluida saluran terbuka dan tertutup, debit limpasan pelimpah bendung, fenomena hidraulis peredam energi (kolam olak), serta kalibrasi debit pintu air irigasi.
                        </p>
                    </div>
                </article>

                {{-- 03. Lab Mekanika Tanah (Foto Kiri, Teks Kanan) --}}
                <article id="lab-geoteknik" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}"
                                 alt="Lab. Mekanika Tanah & Geoteknik FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0070BA]">Geoteknik</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight">
                            Lab. Mekanika Tanah &amp; Geoteknik
                        </h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-xs text-slate-500 my-3">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-location-dot text-slate-400"></i> Gedung FT UNSIL Kampus 2 Mugarsari
                            </span>
                            <span class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <i class="fa-solid fa-circle-check"></i> Standar SNI &bull; ASTM D
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Menganalisis sifat fisis tanah (kadar air, berat jenis, batas-batas Atterberg) dan kekuatan mekanis tanah (uji geser langsung, daya dukung fondasi, konsolidasi, dan permeabilitas).
                        </p>
                    </div>
                </article>

                {{-- 04. Lab Transportasi (Teks Kiri, Foto Kanan) --}}
                <article id="lab-transportasi" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}"
                                 alt="Lab. Transportasi & Jalan Raya FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6 lg:order-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0070BA]">Transportasi</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight">
                            Lab. Transportasi &amp; Jalan Raya
                        </h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-xs text-slate-500 my-3">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-location-dot text-slate-400"></i> Gedung FT UNSIL Kampus 2 Mugarsari
                            </span>
                            <span class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <i class="fa-solid fa-circle-check"></i> Spesifikasi Bina Marga &bull; SNI
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Pengujian mutu material aspal (penetrasi, daktilitas, titik nyala, titik lembek) dan perancangan proporsi campuran aspal beton (hot mix) menggunakan pengujian Marshall Test.
                        </p>
                    </div>
                </article>

                {{-- 05. Lab Komputasi (Foto Kiri, Teks Kanan) --}}
                <article id="lab-komputasi" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/workshop-obe.jpg') }}"
                                 alt="Lab. Komputasi & Pemodelan Struktur FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0070BA]">Desain &amp; Komputasi BIM</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight">
                            Lab. Komputasi &amp; Pemodelan Struktur
                        </h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-xs text-slate-500 my-3">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-location-dot text-slate-400"></i> Gedung FT UNSIL Kampus 2 Mugarsari
                            </span>
                            <span class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <i class="fa-solid fa-circle-check"></i> Workstation PC &bull; Gigabit LAN
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Sarana komputasi rekayasa untuk analisis elemen hingga (FEA) gedung bertingkat tahan gempa, simulasi hidraulika saluran banjir, pemodelan lereng, serta gambar kerja perancangan sipil berbasis CAD dan BIM.
                        </p>
                    </div>
                </article>

                {{-- 06. Lab Perpetaan (Teks Kiri, Foto Kanan) --}}
                <article id="lab-perpetaan" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/gedung-unsil.jpg') }}"
                                 alt="Lab. Perpetaan & Ukur Tanah FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <div class="lg:col-span-6 lg:order-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0070BA]">Geomatika &amp; Survei Rekayasa</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight">
                            Lab. Perpetaan &amp; Ukur Tanah
                        </h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-xs text-slate-500 my-3">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-location-dot text-slate-400"></i> Gedung FT UNSIL Kampus 2 Mugarsari
                            </span>
                            <span class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <i class="fa-solid fa-circle-check"></i> Standar BIG &bull; SNI Survei
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Pelatihan pemetaan terestris lapangan, penentuan koordinat poligon tertutup/terbuka, pengukuran profil memanjang/melintang trase infrastruktur, serta pembuatan peta kontur topografi digital.
                        </p>
                    </div>
                </article>

            </div>

        </div>
    </section>

@endsection
