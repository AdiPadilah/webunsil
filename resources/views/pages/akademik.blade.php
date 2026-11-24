@extends('layouts.app')

@section('title', 'Akademik | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Pusat informasi akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    
    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-10 md:py-14 border-b border-blue-950">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[11px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Akademik</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Pendidikan &amp; Kurikulum
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Akademik
            </h1>
        </div>
    </section>

    {{-- Main Content Section: Persis Bento Grid UNPAD --}}
    <section class="py-12 sm:py-16 lg:py-20 bg-white min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Layout Bento Grid Persis Gambar Pertama (1 Kartu Tinggi Kiri, 2 Kartu Ditumpuk Kanan) --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 items-stretch reveal">

                {{-- Kolom Kiri: 1 Kartu Tinggi (Program) --}}
                <a href="{{ route('kurikulum') }}" class="group relative rounded-3xl overflow-hidden block min-h-[380px] sm:min-h-[460px] lg:min-h-[500px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Program" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 via-50% to-transparent"></div>
                    <div class="relative z-10 p-6 sm:p-8">
                        <h3 class="text-2xl sm:text-3xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                            Program
                        </h3>
                        <div class="mt-4">
                            <span class="inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#EAA315] hover:bg-[#d4910b] text-slate-950 font-bold text-xs sm:text-sm shadow transition-all duration-200">
                                Lihat semua
                            </span>
                        </div>
                    </div>
                </a>

                {{-- Kolom Kanan: 2 Kartu Ditumpuk Vertikal --}}
                <div class="grid grid-rows-2 gap-6 sm:gap-7">

                    {{-- Kanan Atas: Peraturan & Informasi --}}
                    <a href="{{ route('download') }}" class="group relative rounded-3xl overflow-hidden block min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
                        <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Peraturan & Informasi" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 via-50% to-transparent"></div>
                        <div class="relative z-10 p-5 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Peraturan &amp; Informasi
                            </h3>
                            <div class="mt-3">
                                <span class="inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#EAA315] hover:bg-[#d4910b] text-slate-950 font-bold text-xs sm:text-sm shadow transition-all duration-200">
                                    Lihat semua
                                </span>
                            </div>
                        </div>
                    </a>

                    {{-- Kanan Bawah: Pengumuman Akademik --}}
                    <a href="{{ route('berita.index') }}" class="group relative rounded-3xl overflow-hidden block min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
                        <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pengumuman Akademik" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 via-50% to-transparent"></div>
                        <div class="relative z-10 p-5 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Pengumuman Akademik
                            </h3>
                            <div class="mt-3">
                                <span class="inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#EAA315] hover:bg-[#d4910b] text-slate-950 font-bold text-xs sm:text-sm shadow transition-all duration-200">
                                    Lihat semua
                                </span>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

            {{-- Seksi 5 Bidang Keahlian / Konsentrasi Sipil UNSIL (Bento Grid) --}}
            <div class="mt-16 sm:mt-20 pt-12 border-t border-slate-200">
                <div class="mb-8 sm:mb-10 max-w-3xl reveal">
                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1">
                        Disiplin Ilmu &amp; Peminatan
                    </p>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                        5 Bidang Keahlian Teknik Sipil UNSIL
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                        Kurikulum S-1 Teknik Sipil FT UNSIL mencakup lima pilar utama rekayasa sipil yang memadukan teori fundamental, komputasi terapan, dan pengujian laboratorium modern.
                    </p>
                </div>

                {{-- Bagian Atas: Bento Grid 1 Tinggi Kiri, 2 Tumpuk Kanan (Persis Image 1 UNPAD) --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 items-stretch reveal">

                    {{-- Kolom Kiri: 1 Kartu Tinggi (Pilar 01: Rekayasa Struktur dan Bahan) --}}
                    <div class="group relative rounded-3xl overflow-hidden min-h-[380px] sm:min-h-[460px] lg:min-h-[500px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6 sm:p-8">
                        <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Rekayasa Struktur dan Bahan" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 via-50% to-transparent"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Rekayasa Struktur dan Bahan
                            </h3>
                        </div>
                    </div>

                    {{-- Kolom Kanan: 2 Kartu Ditumpuk Vertikal --}}
                    <div class="grid grid-rows-2 gap-6 sm:gap-7">

                        {{-- Pilar 02: Rekayasa Sumber Daya Air --}}
                        <div class="group relative rounded-3xl overflow-hidden min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-5 sm:p-6">
                            <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Rekayasa Sumber Daya Air" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 via-50% to-transparent"></div>
                            <div class="relative z-10">
                                <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-cyan-300 transition-colors">
                                    Rekayasa Sumber Daya Air
                                </h3>
                            </div>
                        </div>

                        {{-- Pilar 03: Rekayasa Geoteknik --}}
                        <div class="group relative rounded-3xl overflow-hidden min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-5 sm:p-6">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Rekayasa Geoteknik" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 via-50% to-transparent"></div>
                            <div class="relative z-10">
                                <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                    Rekayasa Geoteknik
                                </h3>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Bagian Bawah: 2 Kartu Berdampingan (Persis Image 2, Tanpa Tulisan Selengkapnya) --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-7 mt-6 sm:mt-7">

                    {{-- Pilar 04: Rekayasa Transportasi dan Jalan Raya --}}
                    <div class="group relative rounded-3xl overflow-hidden min-h-[220px] sm:min-h-[240px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6">
                        <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Rekayasa Transportasi dan Jalan Raya" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 via-50% to-transparent"></div>
                        <div class="relative z-10">
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Rekayasa Transportasi dan Jalan Raya
                            </h3>
                        </div>
                    </div>

                    {{-- Pilar 05: Manajemen Rekayasa Konstruksi --}}
                    <div class="group relative rounded-3xl overflow-hidden min-h-[220px] sm:min-h-[240px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6">
                        <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" alt="Manajemen Rekayasa Konstruksi" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 via-50% to-transparent"></div>
                        <div class="relative z-10">
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-emerald-300 transition-colors">
                                Manajemen Rekayasa Konstruksi
                            </h3>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
