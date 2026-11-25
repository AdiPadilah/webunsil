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

            <p class="text-sky-300 font-semibold text-xs">
                Riset &amp; Publikasi Ilmiah
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Penelitian Dosen
            </h1>
        </div>
    </section>

    {{-- Panel Riset --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @if($risetList->isNotEmpty())
                @php
                    $indexCounts = $risetList->countBy('index_type');
                @endphp
                {{-- Toolbar Pencarian & Filter Indeks --}}
                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs p-4 sm:p-5 space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div class="relative flex-1 max-w-md">
                            <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                            <input type="search"
                                   id="risetSearchInput"
                                   oninput="applyRisetFilters()"
                                   placeholder="Cari judul, nama dosen, atau jurnal..."
                                   class="w-full pl-9 pr-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                        </div>
                        <p class="text-xs text-slate-600">
                            Menampilkan <strong id="risetVisibleCount" class="text-[#0B2A4A]">{{ $risetList->count() }}</strong> dari <span id="risetMatchedCount">{{ $risetList->count() }}</span> artikel
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-slate-100">
                        <button type="button" onclick="setRisetIndex('all', this)" class="riset-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-[#0B2A4A] text-white transition">
                            Semua ({{ $risetList->count() }})
                        </button>
                        @foreach(['SCOPUS' => 'Terindeks Scopus', 'SINTA' => 'SINTA', 'PROCEEDING' => 'Prosiding'] as $typeKey => $typeLabel)
                            @if($indexCounts->get($typeKey, 0) > 0)
                                <button type="button" onclick="setRisetIndex('{{ $typeKey }}', this)" class="riset-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                                    {{ $typeLabel }} ({{ $indexCounts->get($typeKey, 0) }})
                                </button>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5" id="risetGrid">
                    @foreach($risetList as $index => $riset)
                        <div class="riset-card-wrap" data-index="{{ $index }}" data-type="{{ $riset->index_type }}">
                            @include('pages._publikasi-panel', ['item' => $riset, 'nomor' => $index + 1])
                        </div>
                    @endforeach
                </div>

                <div id="risetEmptyState" class="hidden bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                    <i class="fa-solid fa-magnifying-glass text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                    Tidak ditemukan artikel penelitian yang sesuai dengan kata kunci Anda.
                </div>

                {{-- Pagination --}}
                <div id="risetPagination" class="flex items-center justify-center gap-2 pt-4"></div>
            @else
                <div class="bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                    <i class="fa-solid fa-flask text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                    Belum ada data penelitian yang ditampilkan.
                </div>
            @endif

        </div>
    </section>

    @if($risetList->isNotEmpty())
    <script>
        (function () {
            const PER_PAGE = 8;
            const cards = Array.from(document.querySelectorAll('.riset-card-wrap'));
            const visibleEl = document.getElementById('risetVisibleCount');
            const matchedEl = document.getElementById('risetMatchedCount');
            const emptyEl = document.getElementById('risetEmptyState');
            const pagEl = document.getElementById('risetPagination');
            const searchInput = document.getElementById('risetSearchInput');
            let currentType = 'all';
            let filteredCards = cards;

            window.setRisetIndex = function (type, btn) {
                currentType = type;
                document.querySelectorAll('.riset-filter-btn').forEach(function (el) {
                    el.classList.remove('bg-[#0B2A4A]', 'text-white');
                    el.classList.add('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');
                });
                btn.classList.remove('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');
                btn.classList.add('bg-[#0B2A4A]', 'text-white');
                window.applyRisetFilters();
            };

            window.applyRisetFilters = function () {
                const term = (searchInput ? searchInput.value : '').toLowerCase().trim();
                filteredCards = cards.filter(function (wrap) {
                    const article = wrap.querySelector('article');
                    const searchText = article ? (article.getAttribute('data-search') || '') : '';
                    const matchType = currentType === 'all' || wrap.getAttribute('data-type') === currentType;
                    const matchSearch = !term || searchText.includes(term);
                    return matchType && matchSearch;
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
