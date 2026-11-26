@extends('layouts.app')

@section('title', 'Kerja Praktik | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Informasi pelaksanaan Kerja Praktik Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('akademik') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Akademik</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Kerja Praktik</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Panduan Akademik
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Kerja Praktik
            </h1>
        </div>
    </section>
@endsection
