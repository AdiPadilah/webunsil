@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kegiatan penelitian dan riset dosen Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    {{-- Hero --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[11px]" aria-hidden="true"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset dan Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Penelitian</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Riset &amp; Inovasi
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Penelitian Dosen
            </h1>

            <p class="mt-3 text-slate-300 text-sm max-w-2xl">
                Kegiatan penelitian dan riset yang dilaksanakan oleh dosen Program Studi S-1 Teknik Sipil Universitas Siliwangi.
            </p>
        </div>
    </section>

    {{-- Konten --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center text-center py-24">
                <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mb-6">
                    <i class="fa-solid fa-flask text-3xl text-[#0070BA]" aria-hidden="true"></i>
                </div>
                <h2 class="text-xl font-bold font-heading text-[#0B2A4A] mb-2">Konten Sedang Disiapkan</h2>
                <p class="text-slate-500 text-sm max-w-sm">
                    Data kegiatan penelitian dosen akan segera ditampilkan di halaman ini.
                </p>
            </div>
        </div>
    </section>
@endsection
