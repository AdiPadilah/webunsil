@extends('layouts.app')

@section('title', 'Pengabdian Kepada Masyarakat (PkM) | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Program Pengabdian Kepada Masyarakat (PkM) dosen dan mahasiswa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi untuk pemberdayaan masyarakat dan pembangunan desa.')

@section('content')
    @php
        $abmasList = $abmasList ?? \App\Models\Pengabdian::published()->orderByDesc('tahun')->orderByDesc('id')->get();
    @endphp

    {{-- Hero Section --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]" aria-hidden="true"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset &amp; Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Pengabdian</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Hilirisasi Keilmuan &amp; Pemberdayaan Masyarakat
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Pengabdian Kepada Masyarakat (PkM)
            </h1>
        </div>
    </section>

    {{-- Panel Pengabdian Masyarakat --}}
    @include('pages._publikasi-list', [
        'items' => $abmasList,
        'prefix' => 'abmas',
        'unitLabel' => 'kegiatan PkM',
        'searchPlaceholder' => 'Cari judul kegiatan PkM, pelaksana, jurnal, atau DOI...',
        'tabAriaLabel' => 'Filter jenis publikasi pengabdian',
        'indexLabels' => [
            'PKM' => 'Jurnal PkM',
            'SINTA' => 'SINTA',
            'SCOPUS' => 'SCOPUS',
            'PROCEEDING' => 'Prosiding',
        ],
        'emptyIcon' => 'fa-hand-holding-heart',
        'emptyText' => 'Belum ada data pengabdian masyarakat yang ditampilkan.',
        'filteredEmptyText' => 'Tidak ada kegiatan pengabdian yang cocok dengan filter atau pencarian tersebut.',
    ])
@endsection
