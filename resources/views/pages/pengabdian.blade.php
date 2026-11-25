@extends('layouts.app')

@section('title', 'Pengabdian Kepada Masyarakat (PkM) | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
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
            <p class="text-sky-300 font-semibold text-xs">
                Hilirisasi Keilmuan &amp; Pemberdayaan Masyarakat
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Pengabdian Kepada Masyarakat (PkM)
            </h1>
        </div>
    </section>

    {{-- Panel Pengabdian Masyarakat --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @if($abmasList->isNotEmpty())
                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs p-4 sm:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="relative flex-1 max-w-md">
                        <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                        <input type="search"
                               id="abmasSearchInput"
                               oninput="applyAbmasFilter()"
                               placeholder="Cari judul kegiatan PkM, nama dosen, atau jurnal..."
                               class="w-full pl-9 pr-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                    </div>
                    <p class="text-xs text-slate-600">
                        Menampilkan <strong id="abmasVisibleCount" class="text-[#0B2A4A]">{{ $abmasList->count() }}</strong> dari <span id="abmasMatchedCount">{{ $abmasList->count() }}</span> kegiatan PkM
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5" id="abmasGrid">
                    @foreach($abmasList as $index => $abmas)
                        <div class="abmas-card-wrap" data-index="{{ $index }}">
                            @include('pages._publikasi-panel', ['item' => $abmas, 'nomor' => $index + 1])
                        </div>
                    @endforeach
                </div>

                <div id="abmasEmptyState" class="hidden bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                    <i class="fa-solid fa-magnifying-glass text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                    Tidak ditemukan kegiatan PkM yang sesuai dengan kata kunci Anda.
                </div>

                <div id="abmasPagination" class="flex items-center justify-center gap-2 pt-4"></div>
            @else
                <div class="bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                    <i class="fa-solid fa-hand-holding-heart text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                    Belum ada data pengabdian masyarakat yang ditampilkan.
                </div>
            @endif

        </div>
    </section>

    @if($abmasList->isNotEmpty())
    <script>
        (function () {
            const PER_PAGE = 8;
            const cards = Array.from(document.querySelectorAll('.abmas-card-wrap'));
            const visibleEl = document.getElementById('abmasVisibleCount');
            const matchedEl = document.getElementById('abmasMatchedCount');
            const emptyEl = document.getElementById('abmasEmptyState');
            const pagEl = document.getElementById('abmasPagination');
            const searchInput = document.getElementById('abmasSearchInput');
            let filteredCards = cards;

            window.applyAbmasFilter = function () {
                const term = (searchInput ? searchInput.value : '').toLowerCase().trim();
                filteredCards = cards.filter(function (wrap) {
                    const article = wrap.querySelector('article');
                    const searchText = article ? (article.getAttribute('data-search') || '') : '';
                    return !term || searchText.includes(term);
                });

                cards.forEach(function (card) { card.style.display = 'none'; });
                if (matchedEl) matchedEl.textContent = filteredCards.length;
                if (emptyEl) emptyEl.classList.toggle('hidden', filteredCards.length > 0);
                render(1);
            };

            function render(page) {
                const totalPages = Math.ceil(filteredCards.length / PER_PAGE);
                const start = (page - 1) * PER_PAGE;
                const end = start + PER_PAGE;

                cards.forEach(function (card) { card.style.display = 'none'; });
                filteredCards.slice(start, end).forEach(function (card) {
                    card.style.display = '';
                });

                if (visibleEl) {
                    visibleEl.textContent = filteredCards.length === 0 ? 0 : Math.min(end, filteredCards.length) - start;
                }
                pagEl.innerHTML = '';

                if (totalPages <= 1) {
                    return;
                }

                const prev = document.createElement('button');
                prev.textContent = '←';
                prev.disabled = page === 1;
                prev.className = 'px-3 py-1.5 rounded-lg text-xs font-semibold border ' +
                    (page === 1 ? 'bg-slate-100 text-slate-400 border-slate-200 cursor-not-allowed'
                                : 'bg-white text-[#0B2A4A] border-slate-300 hover:bg-slate-50 cursor-pointer');
                prev.onclick = function () { if (page > 1) { render(page - 1); window.scrollTo({top: 0, behavior: 'smooth'}); } };
                pagEl.appendChild(prev);

                for (let p = 1; p <= totalPages; p++) {
                    const btn = document.createElement('button');
                    btn.textContent = p;
                    btn.className = 'w-8 h-8 rounded-lg text-xs font-bold border ' +
                        (p === page ? 'bg-[#0B2A4A] text-white border-[#0B2A4A]'
                                    : 'bg-white text-slate-700 border-slate-300 hover:bg-slate-50 cursor-pointer');
                    btn.onclick = (function (pg) { return function () { render(pg); window.scrollTo({top: 0, behavior: 'smooth'}); }; })(p);
                    pagEl.appendChild(btn);
                }

                const next = document.createElement('button');
                next.textContent = '→';
                next.disabled = page === totalPages;
                next.className = 'px-3 py-1.5 rounded-lg text-xs font-semibold border ' +
                    (page === totalPages ? 'bg-slate-100 text-slate-400 border-slate-200 cursor-not-allowed'
                                         : 'bg-white text-[#0B2A4A] border-slate-300 hover:bg-slate-50 cursor-pointer');
                next.onclick = function () { if (page < totalPages) { render(page + 1); window.scrollTo({top: 0, behavior: 'smooth'}); } };
                pagEl.appendChild(next);
            }

            render(1);
        })();
    </script>
    @endif
@endsection
