@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi dan ringkasan riset ilmiah dosen Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    @php
        $risetList = $risetList ?? \App\Models\Penelitian::published()->orderByDesc('tahun')->orderByDesc('id')->get();
    @endphp

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
                Riset &amp; Publikasi Ilmiah
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Penelitian Dosen
            </h1>
        </div>
    </section>

    {{-- Panel Riset --}}
    @include('pages._publikasi-list', [
        'items' => $risetList,
        'prefix' => 'riset',
        'unitLabel' => 'artikel',
        'searchPlaceholder' => 'Cari judul artikel, nama dosen, jurnal, atau DOI...',
        'tabAriaLabel' => 'Filter indeks penelitian',
        'indexLabels' => [
            'SCOPUS' => 'SCOPUS',
            'SINTA' => 'SINTA',
            'PROCEEDING' => 'Prosiding',
        ],
        'emptyIcon' => 'fa-flask',
        'emptyText' => 'Belum ada data penelitian yang ditampilkan.',
        'filteredEmptyText' => 'Tidak ada artikel penelitian yang cocok dengan filter atau pencarian tersebut.',
    ])
@endsection
