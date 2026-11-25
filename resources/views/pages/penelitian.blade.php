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

            <p class="text-[#0070BA] font-medium text-xs">
                Riset &amp; Publikasi Ilmiah
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Penelitian Dosen
            </h1>
        </div>
    </section>

    {{-- Panel Riset --}}
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @if($risetList->isNotEmpty())
                {{-- Info count --}}
                <div class="flex items-center justify-between flex-wrap gap-2">
                    <p class="text-xs text-slate-500">
                        Menampilkan <strong id="risetVisibleCount" class="text-[#0B2A4A]">{{ $risetList->count() }}</strong> dari {{ $risetList->count() }} artikel
                    </p>
                </div>

                {{-- Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5" id="risetGrid">
                    @foreach($risetList as $index => $riset)
                        <div class="riset-card-wrap" data-index="{{ $index }}">
                            @include('pages._publikasi-panel', ['item' => $riset, 'nomor' => $index + 1])
                        </div>
                    @endforeach
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
            const cards    = Array.from(document.querySelectorAll('.riset-card-wrap'));
            const totalEl  = document.getElementById('risetVisibleCount');
            const pagEl    = document.getElementById('risetPagination');
            const totalPages = Math.ceil(cards.length / PER_PAGE);

            function render(page) {
                const start = (page - 1) * PER_PAGE;
                const end   = start + PER_PAGE;

                cards.forEach(function (card, i) {
                    card.style.display = (i >= start && i < end) ? '' : 'none';
                });

                totalEl.textContent = Math.max(0, Math.min(end, cards.length) - start);
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
