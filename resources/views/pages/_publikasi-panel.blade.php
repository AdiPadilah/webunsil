<article class="max-w-5xl mx-auto bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 sm:p-8 lg:p-10 reveal">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

        {{-- Cover Resmi Jurnal / Prosiding (Panel Kiri) --}}
        <div class="lg:col-span-3 flex justify-start">
            <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
               class="block rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white w-full max-w-[140px] hover:shadow-md transition-shadow group">
                <div class="aspect-[3/4] overflow-hidden bg-slate-100">
                    @if(!empty($item['cover']))
                        <img src="{{ asset($item['cover']) }}"
                             alt="{{ $item['cover_alt'] }}"
                             loading="lazy"
                             class="w-full h-full object-cover object-center group-hover:scale-[1.03] transition-transform duration-500">
                    @else
                        <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-slate-100 to-slate-200 text-[#0B2A4A]">
                            <i class="fa-solid fa-book-open text-4xl text-[#0070BA]/70 mb-3" aria-hidden="true"></i>
                            <span class="text-sm font-bold leading-snug">{{ $item['cover_caption_title'] }}</span>
                            <span class="text-[11px] text-slate-500 mt-1">{{ $item['cover_caption_meta'] }}</span>
                        </div>
                    @endif
                </div>

            </a>
        </div>

        {{-- Penjelasan & Metadata (Panel Kanan) --}}
        <div class="lg:col-span-9 flex flex-col justify-between space-y-5">
            <div>
                <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                    <span class="text-[11px] font-semibold text-[#0070BA] uppercase tracking-wider">
                        {{ $item['eyebrow'] }}
                    </span>
                    @php
                        $badgeColor = match($item['index_type']) {
                            'SCOPUS' => 'bg-cyan-50 text-cyan-800 border-cyan-200',
                            'SINTA' => 'bg-emerald-50 text-emerald-800 border-emerald-200',
                            'PROCEEDING' => 'bg-blue-50 text-blue-800 border-blue-200',
                            default => 'bg-amber-50 text-amber-800 border-amber-200',
                        };
                    @endphp
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-bold border {{ $badgeColor }}">
                        <i class="fa-solid fa-globe text-[10px]" aria-hidden="true"></i>
                        {{ $item['index_detail'] }}
                    </span>
                </div>

                <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading leading-snug mb-4">
                    {{ $item['title'] }}
                </h2>

                {{-- Rincian Bibliografis --}}
                <dl class="mt-5 bg-slate-50 rounded-xl border border-slate-200/80 p-4 sm:p-5 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-3 text-xs">
                    <div>
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Halaman / ID Artikel</dt>
                        <dd class="font-bold text-slate-900 mt-0.5">{{ $item['article_id'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Indeksasi</dt>
                        <dd class="font-bold text-cyan-800 mt-0.5">{{ $item['index_detail'] }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Judul Artikel</dt>
                        <dd class="font-semibold text-slate-900 mt-0.5 leading-snug">{{ $item['title'] }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Penulis</dt>
                        <dd class="text-slate-700 mt-0.5 leading-relaxed">{{ $item['authors'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Nama Jurnal</dt>
                        <dd class="font-semibold text-[#0B2A4A] mt-0.5">{{ $item['journal'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Volume</dt>
                        <dd class="text-slate-800 font-medium mt-0.5">{{ $item['volume'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Terbitan</dt>
                        <dd class="text-slate-800 mt-0.5">{{ $item['issue'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">{{ str_starts_with($item['doi_label'], '10.') ? 'DOI' : 'Tautan' }}</dt>
                        <dd class="mt-0.5">
                            <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1 font-semibold text-[#0070BA] hover:text-[#0B2A4A] hover:underline break-all focus:outline-none focus:ring-2 focus:ring-blue-400 rounded">
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]" aria-hidden="true"></i>
                                {{ $item['doi_label'] }}
                            </a>
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="pt-3.5 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                @if(!empty($item['lecturer_route']) && Route::has($item['lecturer_route']))
                <a href="{{ route($item['lecturer_route']) }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-600 hover:text-[#0B2A4A] transition">
                    <i class="fa-solid fa-id-badge text-[11px]" aria-hidden="true"></i>
                    <span>Lihat Profil Peneliti</span>
                </a>
                @endif

                <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline ml-auto">
                    <span>{{ str_starts_with($item['doi_label'], '10.') ? 'Buka Artikel via DOI' : 'Buka Artikel Jurnal' }}</span>
                    <i class="fa-solid fa-arrow-right text-[10px]" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>
</article>
