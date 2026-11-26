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
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Laboratorium</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Pusat Pengujian &amp; Komputasi Kejuruan
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Laboratorium <span class="text-amber-400">Teknik Sipil</span>
            </h1>
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
                    5 Unit Laboratorium Teknik Sipil UNSIL
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Setiap laboratorium dikelola oleh dosen pembina dan pranata laboratorium bersertifikat untuk menjamin keselamatan kerja, akurasi data uji, serta kesesuaian dengan standar industri konstruksi nasional.
                </p>
            </div>

            {{-- Daftar Laboratorium: Alternating Editorial Rows --}}
            <div class="space-y-16 lg:space-y-24 border-t border-slate-200 pt-12 sm:pt-16">

                {{-- 01. Lab Rekayasa Struktur dan Bahan (Foto Kiri, Teks Kanan) --}}
                <article id="lab-struktur" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}"
                                 alt="Laboratorium Rekayasa Struktur dan Bahan FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight mb-3">
                            Laboratorium Rekayasa Struktur dan Bahan
                        </h3>
                        <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                            -
                        </p>
                    </div>
                </article>

                {{-- 02. Lab Rekayasa Sumber Daya Air (Teks Kiri, Foto Kanan) --}}
                <article id="lab-sda" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}"
                                 alt="Laboratorium Rekayasa Sumber Daya Air FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-seminar-hathi-air.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6 lg:order-1">
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight mb-3">
                            Laboratorium Rekayasa Sumber Daya Air
                        </h3>
                        <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                            -
                        </p>
                    </div>
                </article>

                {{-- 03. Lab Rekayasa Geoteknik (Foto Kiri, Teks Kanan) --}}
                <article id="lab-geoteknik" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}"
                                 alt="Laboratorium Rekayasa Geoteknik FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight mb-3">
                            Laboratorium Rekayasa Geoteknik
                        </h3>
                        <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                            -
                        </p>
                    </div>
                </article>

                {{-- 04. Lab Rekayasa Transportasi dan Jalan Raya (Teks Kiri, Foto Kanan) --}}
                <article id="lab-transportasi" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}"
                                 alt="Laboratorium Rekayasa Transportasi dan Jalan Raya FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6 lg:order-1">
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight mb-3">
                            Laboratorium Rekayasa Transportasi dan Jalan Raya
                        </h3>
                        <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                            -
                        </p>
                    </div>
                </article>

                {{-- 05. Lab Manajemen Rekayasa Konstruksi (Foto Kiri, Teks Kanan) --}}
                <article id="lab-mrk" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[16/10] bg-slate-900 group">
                            <img src="{{ asset('images/workshop-obe.jpg') }}"
                                 alt="Laboratorium Manajemen Rekayasa Konstruksi FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading text-slate-900 tracking-tight leading-tight mb-3">
                            Laboratorium Manajemen Rekayasa Konstruksi
                        </h3>
                        <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                            -
                        </p>
                    </div>
                </article>

            </div>

        </div>
    </section>

@endsection
