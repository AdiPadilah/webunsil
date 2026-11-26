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

        $stripGelar = static function (string $nama): string {
            $clean = preg_replace('/^(?:(?:Dr|Ir|Prof|H|Hj)\.\s*)+/iu', '', trim($nama)) ?? trim($nama);
            $clean = explode(',', $clean)[0];

            return trim($clean);
        };

        $dosenOptions = \App\Models\Dosen::published()
            ->orderBy('nama')
            ->get()
            ->map(static function ($dosen) use ($risetList, $stripGelar): array {
                $base = $stripGelar($dosen->nama);
                $pattern = '/(?<![\pL\pN])' . preg_quote($base, '/') . '(?![\pL\pN])/iu';
                $count = $risetList->filter(
                    static fn ($r): bool => (bool) preg_match($pattern, (string) $r->penulis)
                )->count();

                return [
                    'label' => $dosen->nama,
                    'match' => strtolower($base),
                    'count' => $count,
                ];
            })
            ->filter(static fn (array $item): bool => $item['count'] > 0)
            ->sortByDesc('count')
            ->values();
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
    <section class="py-12 sm:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @if($risetList->isNotEmpty())

                {{-- Toolbar Filter --}}
                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-4 sm:p-5 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-3 items-center">
                        {{-- Search --}}
                        <div class="md:col-span-5 relative">
                            <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                            <input type="search"
                                   id="risetSearchInput"
                                   oninput="applyRisetFilters()"
                                   placeholder="Cari judul artikel, nama dosen, jurnal, atau DOI..."
                                   class="w-full pl-9 pr-3.5 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                        </div>

                        {{-- Filter Dosen --}}
                        <div class="md:col-span-4">
                            <select id="risetDosenFilter"
                                    onchange="applyRisetFilters()"
                                    aria-label="Filter berdasarkan dosen penulis"
                                    class="w-full px-3.5 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition text-slate-700 font-medium">
                                <option value="all">Semua Dosen Penulis ({{ $totalRiset }})</option>
                                @foreach($dosenOptions as $option)
                                    <option value="{{ $option['match'] }}">{{ $option['label'] }} ({{ $option['count'] }})</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Count --}}
                        <div class="md:col-span-3 flex items-center justify-start md:justify-end text-xs text-slate-500">
                            <span>Menampilkan <strong id="risetVisibleCount" class="text-[#0B2A4A]">{{ $totalRiset }}</strong> dari {{ $totalRiset }} artikel</span>
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
                             data-penulis="{{ strtolower($riset->penulis) }}"
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
        let activeRisetIndex = 'all';

        function setRisetIndex(idx, btn) {
            activeRisetIndex = idx;
            document.querySelectorAll('.riset-filter-btn').forEach(function (el) {
                el.classList.remove('bg-[#0B2A4A]', 'text-white');
                el.classList.add('bg-slate-100', 'text-slate-700');
            });
            btn.classList.remove('bg-slate-100', 'text-slate-700');
            btn.classList.add('bg-[#0B2A4A]', 'text-white');
            applyRisetFilters();
        }

        function matchDosenToken(penulis, dosen) {
            if (dosen === 'all') {
                return true;
            }
            const escaped = dosen.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
            return new RegExp('(^|[^a-z0-9])' + escaped + '($|[^a-z0-9])').test(penulis);
        }

        function applyRisetFilters() {
            const dosen = document.getElementById('risetDosenFilter').value;
            const query = document.getElementById('risetSearchInput').value.trim().toLowerCase();
            let count = 0;

            document.querySelectorAll('.riset-card-wrap').forEach(function (wrap) {
                const matchIdx = activeRisetIndex === 'all' || wrap.dataset.idx === activeRisetIndex;
                const matchDosen = matchDosenToken(wrap.dataset.penulis, dosen);
                const matchQuery = query === '' || wrap.dataset.search.includes(query);
                const visible = matchIdx && matchDosen && matchQuery;

                wrap.style.display = visible ? '' : 'none';
                if (visible) {
                    count++;
                    const nomorEl = wrap.querySelector('.riset-nomor');
                    if (nomorEl) {
                        nomorEl.textContent = count;
                    }
                }
            });

            document.getElementById('risetVisibleCount').textContent = count;
            document.getElementById('risetEmptyState').classList.toggle('hidden', count > 0);
        }
    </script>
    @endif
@endsection
