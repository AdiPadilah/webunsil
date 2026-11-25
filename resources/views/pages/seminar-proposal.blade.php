@extends('layouts.app')

@section('title', 'Seminar Proposal | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Informasi, jadwal, dan persyaratan pendaftaran Seminar Proposal Skripsi Program Studi Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Seminar Proposal</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Tahapan Skripsi 1
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Seminar Proposal (Sempro)
            </h1>
        </div>
    </section>
@endsection

