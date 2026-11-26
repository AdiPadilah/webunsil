@extends('layouts.app')

@section('title', 'Prestasi Mahasiswa | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Prestasi mahasiswa Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi: juara kompetisi nasional, publikasi jurnal Scopus, dan kegiatan ilmiah.')

@section('content')
    @php
        $prestasis = $prestasis ?? \App\Models\Prestasi::published()->orderByDesc('tahun')->orderByDesc('id')->get();
    @endphp

    {{-- Hero --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-slate-300 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-500"></i>
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:text-white transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-500"></i>
                <span class="text-white">Prestasi Mahasiswa</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Prestasi Mahasiswa
            </h1>
        </div>
    </section>

    {{-- Konten Utama Tema UNSIL (Clean White Canvas, Aksen Navy #0B2A4A & Biru UNSIL #0070BA) --}}
    <section class="py-12 lg:py-16 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Filter Kategori --}}
            <div class="flex flex-wrap items-center gap-2 mb-10 pb-6 border-b border-slate-100">
                <span class="text-xs font-semibold text-slate-500 mr-1">Filter:</span>
                <button type="button" onclick="filterPrestasi('all')" class="filter-btn active-filter px-4 py-2 rounded-full text-xs font-semibold transition shadow-sm bg-[#0070BA] text-white" data-cat="all">
                    Semua
                </button>
                <button type="button" onclick="filterPrestasi('lomba')" class="filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="lomba">
                    Kompetisi
                </button>
                <button type="button" onclick="filterPrestasi('publikasi')" class="filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="publikasi">
                    Publikasi &amp; Riset
                </button>
                <button type="button" onclick="filterPrestasi('jembatan')" class="filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="jembatan">
                    Rancang Jembatan
                </button>
            </div>

            @if($prestasis->isNotEmpty())
                <div class="divide-y divide-slate-200/80">
                    @foreach($prestasis as $item)
                        @php
                            $metaText = $item->label_meta ?: collect([$item->tingkat, $item->tahun])->filter()->implode(' • ');
                            $fotoUrl = $item->foto_url;
                        @endphp
                        <article class="prestasi-card py-12 lg:py-16 first:pt-0 reveal group" data-category="{{ $item->kategori }}">
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                                <div class="lg:col-span-7 flex flex-col items-start">
                                    @if(!empty($metaText))
                                        <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                            {{ $metaText }}
                                        </span>
                                    @endif
                                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                        {{ $item->judul }}
                                    </h2>
                                    @if(!empty($item->mahasiswa) || !empty($item->penyelenggara))
                                        <p class="text-xs sm:text-sm font-medium text-slate-500 mb-3">
                                            {{ collect([$item->mahasiswa, $item->penyelenggara])->filter()->implode(' • ') }}
                                        </p>
                                    @endif
                                    @if(!empty($item->deskripsi))
                                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                            {{ $item->deskripsi }}
                                        </p>
                                    @endif
                                    @if(!empty($item->link_url))
                                        <a href="{{ $item->link_url }}"
                                           @if(str_starts_with($item->link_url, 'http')) target="_blank" rel="noopener noreferrer" @endif
                                           class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                            Selengkapnya
                                        </a>
                                    @endif
                                </div>
                                <div class="lg:col-span-5 order-first lg:order-last">
                                    <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                        @if(!empty($fotoUrl))
                                            <img src="{{ $fotoUrl }}" alt="{{ $item->judul }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[#0B2A4A] to-[#133E6C]">
                                                <i class="fa-solid fa-trophy text-5xl text-amber-400/50" aria-hidden="true"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="bg-slate-50 rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                    <i class="fa-solid fa-trophy text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                    Belum ada data prestasi mahasiswa yang ditampilkan.
                </div>
            @endif
        </div>
    </section>

    @push('scripts')
    <script>
        function filterPrestasi(category) {
            const cards = document.querySelectorAll('.prestasi-card');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                if (btn.getAttribute('data-cat') === category) {
                    btn.className = 'filter-btn active-filter px-4 py-2 rounded-full text-xs font-semibold transition shadow-sm bg-[#0070BA] text-white';
                } else {
                    btn.className = 'filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200';
                }
            });

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
    @endpush
@endsection
