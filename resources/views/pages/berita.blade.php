@extends('layouts.app')

@section('title', 'Berita & Informasi Terkini | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Portal berita, informasi kegiatan akademik, prestasi mahasiswa, seminar, dan agenda resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).')

@section('content')
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Berita &amp; Informasi</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Warta Sivitas Akademika
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Berita &amp; Informasi
            </h1>
        </div>
    </section>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                
                <div class="lg:col-span-2 space-y-8" id="daftar-berita">

                    {{-- Berita dari Database (Admin) — terbaru di atas --}}
                    @if($articles->count())
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach($articles as $art)
                        @php
                            $artThumb = $art->thumbnail
                                ? (str_starts_with($art->thumbnail, 'http://') || str_starts_with($art->thumbnail, 'https://')
                                    ? $art->thumbnail
                                    : (str_starts_with($art->thumbnail, 'images/')
                                        ? asset($art->thumbnail)
                                        : asset('storage/' . $art->thumbnail)))
                                : null;
                        @endphp
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    @if($artThumb)
                                        <img src="{{ $artThumb }}" alt="{{ $art->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-[#0B2A4A] to-[#0070BA] flex items-center justify-center">
                                            <i class="fa-solid fa-newspaper text-white/30 text-4xl"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        {{ $art->category }} &bull; {{ $art->published_at ? $art->published_at->translatedFormat('d F Y') : '' }}
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        <a href="{{ route('berita.show', $art->slug) }}">{{ $art->title }}</a>
                                    </h3>
                                    @if($art->excerpt)
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">{{ $art->excerpt }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.show', $art->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>

                    @if($articles->hasPages())
                    <nav aria-label="Navigasi Halaman Berita" class="pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <p class="text-xs text-slate-500">
                            Menampilkan {{ $articles->firstItem() }}&ndash;{{ $articles->lastItem() }} dari {{ $articles->total() }} berita
                        </p>
                        <div class="flex items-center justify-center gap-2">
                            @if($articles->onFirstPage())
                                <span class="w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm opacity-30 cursor-not-allowed text-slate-400 bg-slate-100 border border-slate-200" aria-disabled="true" aria-label="Halaman Sebelumnya">
                                    <i class="fa-solid fa-chevron-left text-xs"></i>
                                </span>
                            @else
                                <a href="{{ $articles->previousPageUrl() }}" class="w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm transition bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200" aria-label="Halaman Sebelumnya">
                                    <i class="fa-solid fa-chevron-left text-xs"></i>
                                </a>
                            @endif

                            @foreach($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                                @if($page == $articles->currentPage())
                                    <span aria-current="page" class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-sm bg-[#0B2A4A] text-amber-400 shadow-sm border border-[#0B2A4A]">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-sm transition bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach

                            @if($articles->hasMorePages())
                                <a href="{{ $articles->nextPageUrl() }}" class="w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm transition bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200" aria-label="Halaman Selanjutnya">
                                    <i class="fa-solid fa-chevron-right text-xs"></i>
                                </a>
                            @else
                                <span class="w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm opacity-30 cursor-not-allowed text-slate-400 bg-slate-100 border border-slate-200" aria-disabled="true" aria-label="Halaman Selanjutnya">
                                    <i class="fa-solid fa-chevron-right text-xs"></i>
                                </span>
                            @endif
                        </div>
                    </nav>
                    @endif
                    @else
                    <div class="bg-white rounded-xl border border-slate-200 p-8 text-center text-sm text-slate-500">
                        Belum ada berita yang dipublikasikan.
                    </div>
                    @endif
                </div>

                
                <aside class="lg:col-span-1 space-y-6">

                    <!-- Widget Agenda -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200 sticky top-24">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                            <h3 class="text-sm font-bold text-slate-900 flex items-center gap-2">
                                <i class="fa-solid fa-calendar-days text-[#0070BA]"></i>
                                <span>Agenda Kegiatan</span>
                            </h3>
                            <span class="text-[10px] font-semibold bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full">
                                2026 &bull; 2027
                            </span>
                        </div>

                        
                        <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl mb-4 text-xs">
                            <button type="button" onclick="switchAgendaTab('mendatang')" id="tab-btn-mendatang" class="flex-1 py-1.5 px-3 rounded-lg bg-white text-[#0070BA] shadow-sm font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer">
                                <i class="fa-solid fa-clock text-[#0070BA]"></i>
                                <span>Mendatang</span>
                                <span class="bg-blue-100 text-[#0070BA] text-[10px] px-1.5 py-0.2 rounded-full font-extrabold">2</span>
                            </button>
                            <button type="button" onclick="switchAgendaTab('selesai')" id="tab-btn-selesai" class="flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer">
                                <i class="fa-solid fa-circle-check text-slate-400"></i>
                                <span>Telah Selesai</span>
                                <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 py-0.2 rounded-full font-extrabold">4</span>
                            </button>
                        </div>

                        
                        <div id="panel-agenda-mendatang" class="space-y-3.5">
                            
                            <div class="p-3.5 rounded-xl bg-blue-50/80 border border-blue-200 hover:shadow-sm transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-bold text-blue-700 block uppercase">27 November 2026</span>
                                    <span class="text-[10px] font-bold text-amber-600">Segera Hadir</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-900 mt-1 leading-snug">
                                    Workshop Kurikulum Berbasis Outcome-Based Education (OBE)
                                </h4>
                                <p class="text-[11px] text-slate-600 mt-0.5 leading-relaxed">
                                    Narasumber: Dr. Eng. Ir. Halwan Alfisa S., ST., MT., IPU. (UNS) &bull; Kampus 2 UNSIL
                                </p>
                                <a href="{{ route('berita.workshop-obe') }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-blue-700 hover:text-blue-900 mt-2">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>

                            
                            {{-- Agenda Mendatang 2 (Belum Fix) --}}
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:shadow-sm transition flex items-start gap-4">
                                <div class="flex-shrink-0 w-14 text-center rounded-lg overflow-hidden border border-slate-200">
                                    <div class="bg-slate-700 text-slate-300 text-[10px] font-bold py-1 uppercase tracking-wider">
                                        -
                                    </div>
                                    <div class="bg-white text-slate-700 text-xl font-bold py-1.5 font-heading">
                                        -
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                        -
                                    </h4>
                                    <div class="text-[11px] text-slate-500 space-y-0.5 mt-1.5">
                                        <p class="flex items-center gap-1.5">
                                            <i class="fa-regular fa-clock text-slate-400 text-[10px]"></i>
                                            <span>-</span>
                                        </p>
                                        <p class="flex items-center gap-1.5">
                                            <i class="fa-solid fa-location-dot text-slate-400 text-[10px]"></i>
                                            <span>-</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div id="panel-agenda-selesai" class="hidden space-y-3">
                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-90 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">12 Oktober 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Seminar Internasional Indonesia - Taiwan (NCKU)
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Kuliah pakar gempa dan info beasiswa S2/S3 bersama Yanuar Haryanto, Ph.D.
                                </p>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-600 hover:text-blue-700 mt-1.5">
                                    <span>Lihat Dokumentasi</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-80 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">Juni 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Civil Expo &amp; Seminar Nasional 2026
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Pameran karya maket rekayasa mahasiswa dan seminar infrastruktur.
                                </p>
                            </div>

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-80 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">01 &ndash; 10 Mei 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Pendaftaran Seminar Proposal &amp; Sidang TA
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Verifikasi berkas persyaratan sidang skripsi periode kedua.
                                </p>
                            </div>

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-80 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">12 &ndash; 15 April 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Ujian Tengah Semester (UTS) Genap
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Pelaksanaan UTS Genap T.A. 2025/2026 seluruh angkatan.
                                </p>
                            </div>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        function switchAgendaTab(tab) {
            const pMendatang = document.getElementById('panel-agenda-mendatang');
            const pSelesai = document.getElementById('panel-agenda-selesai');
            const bMendatang = document.getElementById('tab-btn-mendatang');
            const bSelesai = document.getElementById('tab-btn-selesai');

            if (!pMendatang || !pSelesai) return;

            if (tab === 'mendatang') {
                pMendatang.classList.remove('hidden');
                pSelesai.classList.add('hidden');
                bMendatang.className = 'flex-1 py-1.5 px-3 rounded-lg bg-white text-[#0070BA] shadow-sm font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
                bSelesai.className = 'flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
            } else {
                pMendatang.classList.add('hidden');
                pSelesai.classList.remove('hidden');
                bMendatang.className = 'flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
                bSelesai.className = 'flex-1 py-1.5 px-3 rounded-lg bg-white text-emerald-700 shadow-sm font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
            }
        }
    </script>
    @endpush
@endsection

