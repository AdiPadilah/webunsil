@extends('layouts.app')

@section('title', 'Publikasi Ilmiah & Jurnal | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terakreditasi SINTA 4 (Jurnal Akselerasi), publikasi internasional Scopus dosen dan mahasiswa Teknik Sipil FT UNSIL.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('karya-dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Karya Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Publikasi</span>
            </nav>
            <p class="text-[#0070BA] font-semibold text-xs uppercase tracking-wide">
                Luaran Penelitian &amp; Publikasi
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Publikasi Ilmiah &amp; Jurnal Rekayasa
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Karya publikasi ilmiah berkala sivitas akademika Program Studi S-1 Teknik Sipil FT UNSIL pada jurnal terindeks SINTA 4, publikasi internasional bereputasi Scopus, dan prosiding seminar nasional.
            </p>
        </div>
    </section>
@endsection
