@php
    $totalItems = $items->count();
    $filterCounts = collect($indexLabels ?? [])
        ->map(static fn (string $label, string $type): array => [
            'type' => $type,
            'label' => $label,
            'count' => $items->where('index_type', $type)->count(),
        ])
        ->filter(static fn (array $tab): bool => $tab['count'] > 0)
        ->values();
@endphp

<section id="{{ $prefix }}Section" class="py-12 sm:py-16 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

        @if($items->isNotEmpty())

            {{-- Toolbar Filter --}}
            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-4 sm:p-5 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-3 items-center">
                    {{-- Search --}}
                    <div class="md:col-span-8 relative">
                        <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                        <input type="search"
                               id="{{ $prefix }}SearchInput"
                               placeholder="{{ $searchPlaceholder }}"
                               class="w-full pl-9 pr-3.5 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                    </div>

                    {{-- Count --}}
                    <div class="md:col-span-4 flex items-center justify-start md:justify-end text-xs text-slate-500">
                        <span>Menampilkan <strong id="{{ $prefix }}VisibleCount" class="text-[#0B2A4A]">{{ min(5, $totalItems) }}</strong> dari <strong id="{{ $prefix }}FilteredTotal" class="text-slate-700">{{ $totalItems }}</strong> {{ $unitLabel }}</span>
                    </div>
                </div>

                {{-- Tab Filter Index --}}
                <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-slate-100" role="tablist" aria-label="{{ $tabAriaLabel }}">
                    <button type="button" data-idx="all"
                            class="{{ $prefix }}-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-[#0B2A4A] text-white transition">
                        Semua ({{ $totalItems }})
                    </button>
                    @foreach($filterCounts as $tab)
                        <button type="button" data-idx="{{ $tab['type'] }}"
                                class="{{ $prefix }}-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                            {{ $tab['label'] }} ({{ $tab['count'] }})
                        </button>
                    @endforeach
                </div>
            </div>

            {{-- Daftar 1 kolom --}}
            <div class="grid grid-cols-1 gap-4" id="{{ $prefix }}Grid">
                @foreach($items as $index => $item)
                    <div class="{{ $prefix }}-card-wrap"
                         data-idx="{{ $item->index_type }}"
                         data-search="{{ strtolower(implode(' ', array_filter([$item->judul, $item->penulis, $item->nama_jurnal, $item->index_detail, $item->doi_label, $item->tahun]))) }}">
                        @include('pages._publikasi-panel', ['item' => $item, 'nomor' => $index + 1])
                    </div>
                @endforeach
            </div>

            {{-- Empty state --}}
            <div id="{{ $prefix }}EmptyState" class="hidden bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                <i class="fa-solid {{ $emptyIcon }} text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                {{ $filteredEmptyText }}
            </div>

            {{-- Pagination --}}
            <div id="{{ $prefix }}Pagination" class="flex items-center justify-center gap-2 pt-2"></div>

        @else
            <div class="bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                <i class="fa-solid {{ $emptyIcon }} text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                {{ $emptyText }}
            </div>
        @endif

    </div>
</section>

@if($items->isNotEmpty())
<script>
    (function () {
        const PER_PAGE = 5;
        const prefix = @json($prefix);
        const wraps = Array.from(document.querySelectorAll('.' + prefix + '-card-wrap'));
        const filterBtns = Array.from(document.querySelectorAll('.' + prefix + '-filter-btn'));
        const searchEl = document.getElementById(prefix + 'SearchInput');
        const visibleCountEl = document.getElementById(prefix + 'VisibleCount');
        const filteredTotalEl = document.getElementById(prefix + 'FilteredTotal');
        const emptyEl = document.getElementById(prefix + 'EmptyState');
        const pagEl = document.getElementById(prefix + 'Pagination');
        const sectionEl = document.getElementById(prefix + 'Section');
        let activeIndex = 'all';

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
            prev.addEventListener('click', function () {
                if (currentPage > 1) {
                    applyFilters(currentPage - 1);
                    scrollUp();
                }
            });
            pagEl.appendChild(prev);

            for (let p = 1; p <= totalPages; p++) {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.textContent = p;
                btn.className = 'w-8 h-8 rounded-lg text-xs font-bold border transition ' +
                    (p === currentPage
                        ? 'bg-[#0B2A4A] text-white border-[#0B2A4A]'
                        : 'bg-white text-slate-700 border-slate-300 hover:bg-slate-50 cursor-pointer');
                btn.addEventListener('click', function () {
                    applyFilters(p);
                    scrollUp();
                });
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
            next.addEventListener('click', function () {
                if (currentPage < totalPages) {
                    applyFilters(currentPage + 1);
                    scrollUp();
                }
            });
            pagEl.appendChild(next);
        }

        function applyFilters(page) {
            const query = searchEl.value.trim().toLowerCase();
            const matched = [];

            wraps.forEach(function (wrap) {
                const matchIdx = activeIndex === 'all' || wrap.dataset.idx === activeIndex;
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

            visibleCountEl.textContent = visibleCount;
            filteredTotalEl.textContent = totalFiltered;
            emptyEl.classList.toggle('hidden', totalFiltered > 0);
            renderPagination(currentPage, totalFiltered > 0 ? totalPages : 0);
        }

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                activeIndex = btn.dataset.idx;
                filterBtns.forEach(function (el) {
                    el.classList.remove('bg-[#0B2A4A]', 'text-white');
                    el.classList.add('bg-slate-100', 'text-slate-700');
                });
                btn.classList.remove('bg-slate-100', 'text-slate-700');
                btn.classList.add('bg-[#0B2A4A]', 'text-white');
                applyFilters(1);
            });
        });

        searchEl.addEventListener('input', function () {
            applyFilters(1);
        });

        applyFilters(1);
    })();
</script>
@endif
