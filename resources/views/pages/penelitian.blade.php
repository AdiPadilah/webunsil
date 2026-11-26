@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi dan ringkasan riset ilmiah dosen Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    @php
        $risetList   = $risetList ?? \App\Models\Penelitian::published()->orderByDesc('tahun')->orderByDesc('id')->get();
        $totalRiset  = $risetList->count();
        $scopusCount = $risetList->where('index_type', 'SCOPUS')->count();
        $sintaCount  = $risetList->where('index_type', 'SINTA')->count();
        $procCount   = $risetList->where('index_type', 'PROCEEDING')->count();
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
    <section id="risetSection" class="py-12 sm:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @if($risetList->isNotEmpty())

                {{-- Toolbar Filter --}}
                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-4 sm:p-5 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-3 items-center">
                        {{-- Search --}}
                        <div class="md:col-span-8 relative">
                            <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                            <input type="search"
                                   id="risetSearchInput"
                                   oninput="applyRisetFilters(1)"
                                   placeholder="Cari judul artikel, nama dosen, jurnal, atau DOI..."
                                   class="w-full pl-9 pr-3.5 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                        </div>

                        {{-- Count --}}
                        <div class="md:col-span-4 flex items-center justify-start md:justify-end text-xs text-slate-500">
                            <span>Menampilkan <strong id="risetVisibleCount" class="text-[#0B2A4A]">{{ min(5, $totalRiset) }}</strong> dari <strong id="risetFilteredTotal" class="text-slate-700">{{ $totalRiset }}</strong> artikel</span>
                        </div>
                    </div>

                    {{-- Tab Filter Index --}}
                    <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-slate-100" role="tablist" aria-label="Filter indeks penelitian">
                        <button type="button" data-idx="all" onclick="setRisetIndex('all', this)"
                                class="riset-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-[#0B2A4A] text-white transition">
                            Semua ({{ $totalRiset }})
                        </button>
                        @if($scopusCount > 0)
                        <button type="button" data-idx="SCOPUS" onclick="setRisetIndex('SCOPUS', this)"
                                class="riset-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                            SCOPUS ({{ $scopusCount }})
                        </button>
                        @endif
                        @if($sintaCount > 0)
                        <button type="button" data-idx="SINTA" onclick="setRisetIndex('SINTA', this)"
                                class="riset-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                            SINTA ({{ $sintaCount }})
                        </button>
                        @endif
                        @if($procCount > 0)
                        <button type="button" data-idx="PROCEEDING" onclick="setRisetIndex('PROCEEDING', this)"
                                class="riset-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                            Prosiding ({{ $procCount }})
                        </button>
                        @endif
                    </div>
                </div>

                {{-- Daftar 1 kolom --}}
                <div class="grid grid-cols-1 gap-4" id="risetGrid">
                    @foreach($risetList as $index => $riset)
                        <div class="riset-card-wrap"
                             data-idx="{{ $riset->index_type }}"
                             data-search="{{ strtolower(implode(' ', array_filter([$riset->judul, $riset->penulis, $riset->nama_jurnal, $riset->index_detail, $riset->doi_label, $riset->tahun]))) }}">
                            @include('pages._publikasi-panel', ['item' => $riset, 'nomor' => $index + 1])
                        </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div id="risetEmptyState" class="hidden bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                    <i class="fa-solid fa-flask text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                    Tidak ada artikel penelitian yang cocok dengan filter atau pencarian tersebut.
                </div>

                {{-- Pagination --}}
                <div id="risetPagination" class="flex items-center justify-center gap-2 pt-2"></div>

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
            const PER_PAGE = 5;
            const wraps = Array.from(document.querySelectorAll('.riset-card-wrap'));
            const pagEl = document.getElementById('risetPagination');
            const sectionEl = document.getElementById('risetSection');
            let activeRisetIndex = 'all';

            function renderPagination(currentPage, totalPages) {
                pagEl.innerHTML = '';
                if (totalPages <= 1) {
                    return;
                }

                const scrollUp = function () {
                    sectionEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                };

                const prev = document.createElement('button');
                prev.type = 'button';
                prev.innerHTML = '&larr;';
                prev.setAttribute('aria-label', 'Halaman sebelumnya');
                prev.disabled = currentPage === 1;
                prev.className = 'px-3 py-1.5 rounded-lg text-xs font-semibold border transition ' +
                    (currentPage === 1
                        ? 'bg-slate-100 text-slate-400 border-slate-200 cursor-not-allowed'
                        : 'bg-white text-[#0B2A4A] border-slate-300 hover:bg-slate-50 cursor-pointer');
                prev.onclick = function () {
                    if (currentPage > 1) {
                        window.applyRisetFilters(currentPage - 1);
                        scrollUp();
                    }
                };
                pagEl.appendChild(prev);

                for (let p = 1; p <= totalPages; p++) {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.textContent = p;
                    btn.className = 'w-8 h-8 rounded-lg text-xs font-bold border transition ' +
                        (p === currentPage
                            ? 'bg-[#0B2A4A] text-white border-[#0B2A4A]'
                            : 'bg-white text-slate-700 border-slate-300 hover:bg-slate-50 cursor-pointer');
                    btn.onclick = (function (pg) {
                        return function () {
                            window.applyRisetFilters(pg);
                            scrollUp();
                        };
                    })(p);
                    pagEl.appendChild(btn);
                }

                const next = document.createElement('button');
                next.type = 'button';
                next.innerHTML = '&rarr;';
                next.setAttribute('aria-label', 'Halaman berikutnya');
                next.disabled = currentPage === totalPages;
                next.className = 'px-3 py-1.5 rounded-lg text-xs font-semibold border transition ' +
                    (currentPage === totalPages
                        ? 'bg-slate-100 text-slate-400 border-slate-200 cursor-not-allowed'
                        : 'bg-white text-[#0B2A4A] border-slate-300 hover:bg-slate-50 cursor-pointer');
                next.onclick = function () {
                    if (currentPage < totalPages) {
                        window.applyRisetFilters(currentPage + 1);
                        scrollUp();
                    }
                };
                pagEl.appendChild(next);
            }

            window.setRisetIndex = function (idx, btn) {
                activeRisetIndex = idx;
                document.querySelectorAll('.riset-filter-btn').forEach(function (el) {
                    el.classList.remove('bg-[#0B2A4A]', 'text-white');
                    el.classList.add('bg-slate-100', 'text-slate-700');
                });
                btn.classList.remove('bg-slate-100', 'text-slate-700');
                btn.classList.add('bg-[#0B2A4A]', 'text-white');
                window.applyRisetFilters(1);
            };

            window.applyRisetFilters = function (page) {
                const query = document.getElementById('risetSearchInput').value.trim().toLowerCase();
                const matched = [];

                wraps.forEach(function (wrap) {
                    const matchIdx = activeRisetIndex === 'all' || wrap.dataset.idx === activeRisetIndex;
                    const matchQuery = query === '' || wrap.dataset.search.includes(query);

                    if (matchIdx && matchQuery) {
                        matched.push(wrap);
                    } else {
                        wrap.style.display = 'none';
                    }
                });

                const totalFiltered = matched.length;
                const totalPages = Math.max(1, Math.ceil(totalFiltered / PER_PAGE));
                const currentPage = Math.min(Math.max(1, page || 1), totalPages);
                const start = (currentPage - 1) * PER_PAGE;
                const end = start + PER_PAGE;
                let visibleCount = 0;

                matched.forEach(function (wrap, idx) {
                    const visible = idx >= start && idx < end;
                    wrap.style.display = visible ? '' : 'none';
                    if (visible) {
                        visibleCount++;
                        const nomorEl = wrap.querySelector('.riset-nomor');
                        if (nomorEl) {
                            nomorEl.textContent = idx + 1;
                        }
                    }
                });

                document.getElementById('risetVisibleCount').textContent = visibleCount;
                document.getElementById('risetFilteredTotal').textContent = totalFiltered;
                document.getElementById('risetEmptyState').classList.toggle('hidden', totalFiltered > 0);
                renderPagination(currentPage, totalFiltered > 0 ? totalPages : 0);
            };

            window.applyRisetFilters(1);
        })();
    </script>
    @endif
@endsection
