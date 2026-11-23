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
            <div class="max-w-3xl mb-8 sm:mb-10">
                <p class="text-xs font-bold text-[#0070BA] tracking-wider uppercase mb-1.5">
                    Fasilitas Praktikum &amp; Riset Terpadu
                </p>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Unit Laboratorium Teknik Sipil UNSIL
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Daftar unit laboratorium keinsinyuran yang beroperasi aktif di lingkungan Program Studi S-1 Teknik Sipil Fakultas Teknik Kampus 2 UNSIL Mugarsari:
                </p>
            </div>

            {{-- List Laboratorium Bersih dengan Garis Divider Horizontal --}}
            <div class="max-w-3xl border-t border-b border-slate-200 divide-y divide-slate-200">
                <div class="py-3.5 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default">
                    Lab Teknologi Bahan Konstruksi
                </div>
                <div class="py-3.5 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default">
                    Lab Hidraulika &amp; Bangunan Air
                </div>
                <div class="py-3.5 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default">
                    Lab Mekanika Tanah &amp; Geoteknik
                </div>
                <div class="py-3.5 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default">
                    Lab Transportasi &amp; Jalan Raya
                </div>
                <div class="py-3.5 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default">
                    Lab Komputasi &amp; Pemodelan Struktur
                </div>
                <div class="py-3.5 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default">
                    Lab Perpetaan &amp; Ukur Tanah
                </div>
            </div>

        </div>
    </section>

@endsection
