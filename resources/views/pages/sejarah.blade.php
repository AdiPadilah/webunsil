@extends('layouts.app')

@section('title', 'Sejarah | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Sejarah dan rekam jejak perjalanan Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi sejak berdiri tahun 1984 hingga penegerian PTN tahun 2014 dan era Kampus 2 Mugarsari.')

@section('content')
    <!-- Hero Header -->
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Sejarah Program Studi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Rekam Jejak
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1 leading-tight">
                Sejarah Program Studi S-1 Teknik Sipil
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Menyusuri perjalanan dedikasi keinsinyuran: Dari pilar perintis pendidikan teknik di Priangan Timur hingga bertransformasi menjadi Perguruan Tinggi Negeri dengan pusat riset di Kampus 2 Mugarsari.
            </p>
        </div>
    </section>

    <!-- Ringkasan Angka & Tonggak Penting -->
    <section class="relative z-20 -mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Tahun Berdiri</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] mt-1 font-heading">-</div>
            </div>

            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Status Negeri (PTN)</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#0070BA] mt-1 font-heading">-</div>
            </div>

            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Masa Pengabdian</span>
                <div class="text-2xl sm:text-3xl font-bold text-slate-800 mt-1 font-heading">-</div>
            </div>

            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Kiprah Alumni</span>
                <div class="text-2xl sm:text-3xl font-bold text-slate-800 mt-1 font-heading">-</div>
            </div>
        </div>
    </section>

    <!-- Section 1: Narasi Sejarah Komprehensif (Editorial 2 Kolom) -->
    <section class="py-16 sm:py-20 bg-slate-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                
                <!-- Kolom Kiri: Narasi Sejarah Mendalam (7 Kolom) -->
                <div class="lg:col-span-7">
                    <span class="text-[#0070BA] font-medium text-xs block mb-2">
                        Rekam Jejak Historis
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0B2A4A] font-heading leading-tight">
                        Jejak Langkah Teknik Sipil di Tanah Siliwangi
                    </h2>
                    <div class="w-12 h-0.5 bg-[#0B2A4A] mt-3 mb-6"></div>

                    <div class="space-y-5 text-slate-700 text-sm sm:text-base leading-relaxed text-justify">
                        <p class="text-slate-400 italic">
                            Nanti nyusul.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: Visual Showcase (5 Kolom) -->
                <div class="lg:col-span-5">
                    
                    <!-- Foto Tugu Fakultas Teknik -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm max-w-sm sm:max-w-md lg:max-w-none mx-auto">
                        <div class="relative w-full aspect-[3/4] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" 
                                 alt="Tugu Fakultas Teknik Universitas Siliwangi" 
                                 class="w-full h-full object-cover object-center">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Garis Waktu Perjalanan (Milestone Timeline Modern & Proporsional) -->
    <section class="py-16 sm:py-24 bg-white border-t border-slate-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mx-auto text-center mb-16 sm:mb-20">
                <span class="text-[#0070BA] font-medium text-xs block">Garis Waktu</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0B2A4A] mt-2 font-heading">
                    Tonggak Perjalanan &amp; Prestasi
                </h2>
                <div class="w-12 h-0.5 bg-[#0B2A4A] mx-auto mt-3 mb-4"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Setiap babak menandai konsistensi dan dedikasi civitas akademika Teknik Sipil UNSIL dalam memajukan ilmu keteknikan dan mengabdi untuk bangsa.
                </p>
            </div>

            <!-- Grid Garis Waktu: Kiri & Kanan Sejajar (2 Kolom) -->
            <div class="max-w-5xl mx-auto">
                <p class="text-slate-400 italic text-sm text-center">
                    Nanti nyusul.
                </p>
            </div>

        </div>
    </section>

@endsection

