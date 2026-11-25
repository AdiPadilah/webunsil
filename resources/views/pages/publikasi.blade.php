@extends('layouts.app')

@section('title', 'Publikasi Ilmiah & Jurnal | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terakreditasi SINTA 4 (Jurnal Akselerasi), publikasi internasional Scopus dosen dan mahasiswa Teknik Sipil FT UNSIL.')

@section('content')
    @php
        $risetList = $risetList ?? \App\Models\Penelitian::published()->orderByDesc('tahun')->orderByDesc('id')->get();
    @endphp

    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]" aria-hidden="true"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('karya-dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Karya Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Publikasi</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs">
                Luaran Penelitian &amp; Publikasi
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Publikasi Ilmiah &amp; Jurnal Rekayasa
            </h1>
        </div>
    </section>

    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            {{-- Portal Jurnal Akselerasi --}}
            <div class="bg-[#0B2A4A] text-white rounded-2xl p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 shadow-xs">
                <div class="space-y-2 max-w-2xl">
                    <span class="inline-block px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 text-xs font-bold">Terakreditasi SINTA 4 · E-ISSN 2715-7296</span>
                    <h2 class="text-xl sm:text-2xl font-bold font-heading">Akselerasi: Jurnal Ilmiah Teknik Sipil UNSIL</h2>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Jurnal berkala resmi Program Studi Teknik Sipil FT UNSIL yang terbit tiga kali setahun (Maret, Juli, November).
                    </p>
                </div>
                <a href="https://jurnal.unsil.ac.id" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-slate-900 font-bold text-xs sm:text-sm px-5 py-3 rounded-xl transition shrink-0 self-start md:self-auto">
                    Buka Portal OJS UNSIL <i class="fa-solid fa-arrow-up-right-from-square text-xs" aria-hidden="true"></i>
                </a>
            </div>

            {{-- Artikel Publikasi Terbaru --}}
            <div class="space-y-4">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading">Daftar Publikasi Terkini</h2>
                    <a href="{{ route('penelitian') }}" class="text-xs font-bold text-[#0070BA] hover:underline">Lihat &amp; cari semua di Penelitian →</a>
                </div>

                @if($risetList->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                        @foreach($risetList->take(10) as $index => $riset)
                            @include('pages._publikasi-panel', ['item' => $riset, 'nomor' => $index + 1])
                        @endforeach
                    </div>
                @else
                    <div class="bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                        Belum ada publikasi yang ditampilkan.
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
