@extends('layouts.app')

@section('title', 'Berita & Informasi Terkini | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Portal berita, informasi kegiatan akademik, prestasi mahasiswa, seminar, dan agenda resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).')

@section('content')
    @php
        $kategoriAktif = $kategori ?? 'Semua';
        $kataKunci = $search ?? '';
        $agendaMendatang = $agendaMendatang ?? collect();
        $agendaSelesai = $agendaSelesai ?? collect();
    @endphp

    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]" aria-hidden="true"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Berita &amp; Informasi</span>
            </nav>

            <p class="text-sky-300 font-semibold text-xs">
                Warta Sivitas Akademika
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Berita &amp; Informasi
            </h1>
        </div>
    </section>

    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            {{-- Filter Kategori & Pencarian --}}
            <form method="GET" action="{{ route('berita.index') }}" class="bg-white rounded-2xl border border-slate-200/90 shadow-xs p-4 sm:p-5 space-y-4">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="relative flex-1 max-w-md flex gap-2">
                        <div class="relative flex-1">
                            <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                            <input type="search"
                                   name="q"
                                   value="{{ $kataKunci }}"
                                   placeholder="Cari judul berita atau informasi..."
                                   class="w-full pl-9 pr-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                            @if($kategoriAktif && $kategoriAktif !== 'Semua')
                                <input type="hidden" name="kategori" value="{{ $kategoriAktif }}">
                            @endif
                        </div>
                        <button type="submit" class="px-4 py-2.5 rounded-xl bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-xs font-bold transition shrink-0">
                            Cari
                        </button>
                    </div>
                    <p class="text-xs text-slate-600">
                        Total <strong>{{ $articles->total() }}</strong> publikasi terbit
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-slate-100">
                    @foreach(['Semua', 'Berita', 'Agenda', 'Pengumuman', 'Prestasi'] as $kat)
                        @php
                            $isCurrent = ($kategoriAktif ?: 'Semua') === $kat;
                            $urlKat = $kat === 'Semua'
                                ? route('berita.index', array_filter(['q' => $kataKunci]))
                                : route('berita.index', array_filter(['kategori' => $kat, 'q' => $kataKunci]));
                        @endphp
                        <a href="{{ $urlKat }}"
                           class="px-3.5 py-1.5 rounded-xl text-xs font-semibold transition {{ $isCurrent ? 'bg-[#0B2A4A] text-white' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                            {{ $kat }}
                        </a>
                    @endforeach
                </div>
            </form>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10 items-start">

                {{-- Daftar Berita dari Database --}}
                <div class="lg:col-span-2 space-y-6" id="daftar-berita">
                    @if($articles->isNotEmpty())
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            @foreach($articles as $art)
                                @php
                                    $artUrl = route('berita.show', $art->slug);
                                    $artThumb = $art->thumbnail
                                        ? (str_starts_with($art->thumbnail, 'images/') ? asset($art->thumbnail) : asset('storage/' . $art->thumbnail))
                                        : asset('images/unsil-seminar-jalan-tol.jpeg');
                                @endphp
                                <a href="{{ $artUrl }}" class="bg-white rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 flex flex-col group transition-all duration-200">
                                    <div class="h-48 overflow-hidden bg-slate-100 relative">
                                        <img src="{{ $artThumb }}" alt="{{ $art->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-[#0B2A4A]/85 text-amber-300 text-[11px] font-semibold backdrop-blur-xs">
                                            {{ $art->category }}
                                        </span>
                                    </div>
                                    <div class="p-5 flex-1 flex flex-col">
                                        <span class="text-xs font-medium text-slate-500 block mb-1.5">
                                            {{ $art->published_at ? $art->published_at->translatedFormat('d F Y') : '-' }}
                                        </span>
                                        <h2 class="text-[15px] font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition-colors">
                                            {{ $art->title }}
                                        </h2>
                                        <p class="text-[13px] text-slate-600 mt-2 line-clamp-3 leading-relaxed">
                                            {{ $art->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($art->content), 140) }}
                                        </p>
                                        <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA]">
                                            Baca selengkapnya <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        @if($articles->hasPages())
                            <div class="pt-4">
                                {{ $articles->links() }}
                            </div>
                        @endif
                    @else
                        <div class="bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                            <i class="fa-solid fa-newspaper text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                            Belum ada berita atau informasi yang sesuai.
                        </div>
                    @endif
                </div>

                {{-- Sidebar Agenda Dinamis --}}
                <aside class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-xs border border-slate-200/90 lg:sticky lg:top-24">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                            <h3 class="text-sm font-bold text-slate-900 flex items-center gap-2">
                                <i class="fa-solid fa-calendar-days text-[#0070BA]" aria-hidden="true"></i>
                                <span>Agenda Kegiatan</span>
                            </h3>
                        </div>

                        <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl mb-4 text-xs">
                            <button type="button" onclick="switchAgendaTab('mendatang')" id="tab-btn-mendatang" class="flex-1 py-1.5 px-3 rounded-lg bg-white text-[#0070BA] shadow-xs font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer">
                                <span>Mendatang</span>
                                <span class="bg-blue-100 text-[#0070BA] text-[10px] px-1.5 rounded-full font-extrabold">{{ $agendaMendatang->count() }}</span>
                            </button>
                            <button type="button" onclick="switchAgendaTab('selesai')" id="tab-btn-selesai" class="flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer">
                                <span>Sebelumnya</span>
                                <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 rounded-full font-extrabold">{{ $agendaSelesai->count() }}</span>
                            </button>
                        </div>

                        <div id="panel-agenda-mendatang" class="space-y-3">
                            @forelse($agendaMendatang as $ag)
                                <a href="{{ route('berita.show', $ag->slug) }}" class="block p-3.5 rounded-xl bg-blue-50/80 border border-blue-200 hover:shadow-sm transition group">
                                    <div class="flex items-center justify-between gap-2">
                                        <span class="text-[11px] font-bold text-blue-700">{{ $ag->published_at ? $ag->published_at->translatedFormat('d F Y') : '-' }}</span>
                                        <span class="text-[10px] font-bold text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full">Mendatang</span>
                                    </div>
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-[#0070BA] mt-1.5 leading-snug">
                                        {{ $ag->title }}
                                    </h4>
                                    @if($ag->excerpt)
                                        <p class="text-[11px] text-slate-600 mt-1 line-clamp-2 leading-relaxed">{{ $ag->excerpt }}</p>
                                    @endif
                                </a>
                            @empty
                                <p class="text-xs text-slate-500 py-4 text-center">Belum ada agenda mendatang.</p>
                            @endforelse
                        </div>

                        <div id="panel-agenda-selesai" class="hidden space-y-3">
                            @forelse($agendaSelesai as $ag)
                                <a href="{{ route('berita.show', $ag->slug) }}" class="block p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:bg-white transition group">
                                    <div class="flex items-center justify-between gap-2">
                                        <span class="text-[11px] font-semibold text-slate-500">{{ $ag->published_at ? $ag->published_at->translatedFormat('d F Y') : '-' }}</span>
                                        <span class="text-[10px] font-medium text-slate-500">Terlaksana</span>
                                    </div>
                                    <h4 class="text-xs font-bold text-slate-800 group-hover:text-[#0070BA] mt-1 leading-snug">
                                        {{ $ag->title }}
                                    </h4>
                                </a>
                            @empty
                                <p class="text-xs text-slate-500 py-4 text-center">Belum ada riwayat agenda.</p>
                            @endforelse
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
                bMendatang.className = 'flex-1 py-1.5 px-3 rounded-lg bg-white text-[#0070BA] shadow-xs font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
                bSelesai.className = 'flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
            } else {
                pMendatang.classList.add('hidden');
                pSelesai.classList.remove('hidden');
                bMendatang.className = 'flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
                bSelesai.className = 'flex-1 py-1.5 px-3 rounded-lg bg-white text-emerald-700 shadow-xs font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
            }
        }
    </script>
    @endpush
@endsection
