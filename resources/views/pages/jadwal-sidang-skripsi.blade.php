@extends('layouts.app')

@section('title', 'Jadwal Sidang Skripsi | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Jadwal pelaksanaan Sidang Skripsi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]" aria-hidden="true"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Jadwal Sidang Skripsi</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs">
                Informasi Sidang
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Jadwal Sidang Skripsi &amp; Seminar
            </h1>
        </div>
    </section>

    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('pages._jadwal-table')
        </div>
    </section>
@endsection
