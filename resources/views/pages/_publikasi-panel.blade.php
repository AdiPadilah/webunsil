@php
    $indexType   = data_get($item, 'index_type', '');
    $indexDetail = data_get($item, 'index_detail') ?: $indexType;
    $eyebrow     = data_get($item, 'eyebrow');
    $title       = data_get($item, 'judul') ?? data_get($item, 'title', '');
    $authors     = data_get($item, 'penulis') ?? data_get($item, 'authors', '');
    $journal     = data_get($item, 'nama_jurnal') ?? data_get($item, 'journal', '');
    $volume      = data_get($item, 'volume');
    $issue       = data_get($item, 'terbitan') ?? data_get($item, 'issue');
    $doiLabel    = data_get($item, 'doi_label');
    $doiUrl      = data_get($item, 'doi_url');
    $coverUrl    = data_get($item, 'cover_url') ?? (data_get($item, 'cover') ? asset(data_get($item, 'cover')) : null);
    $coverAlt    = data_get($item, 'cover_alt') ?: $title;

    $isScopus = $indexType === 'SCOPUS';
    $isProc   = $indexType === 'PROCEEDING';
    $badgeColor   = $isScopus ? 'text-cyan-800 bg-cyan-50 border-cyan-200/80'
                  : ($isProc  ? 'text-blue-800 bg-blue-50 border-blue-200/80'
                              : 'text-emerald-800 bg-emerald-50 border-emerald-200/80');
    $numColor     = $isScopus ? 'bg-cyan-100 text-cyan-800 border-cyan-200/80'
                  : ($isProc  ? 'bg-blue-100 text-blue-800 border-blue-200/80'
                              : 'bg-emerald-100 text-emerald-800 border-emerald-200/80');
    $hoverBorder  = $isScopus ? 'hover:border-cyan-400'
                  : ($isProc  ? 'hover:border-blue-400'
                              : 'hover:border-emerald-400');
@endphp

<article data-search="{{ strtolower($title . ' ' . $authors . ' ' . $journal) }}"
         class="bg-white rounded-2xl border border-slate-200/90 {{ $hoverBorder }} p-4 sm:p-5 shadow-xs hover:shadow-md transition-all duration-200 flex items-start gap-4 group h-full">

    {{-- Cover --}}
    @if(!empty($doiUrl))
        <a href="{{ $doiUrl }}" target="_blank" rel="noopener noreferrer"
           class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-slate-200 bg-slate-100 shadow-xs block">
    @else
        <div class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-slate-200 bg-slate-100 shadow-xs">
    @endif
        @if(!empty($coverUrl))
            <img src="{{ $coverUrl }}"
                 alt="{{ $coverAlt }}"
                 loading="lazy"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @else
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[#0B2A4A] to-[#133E6C]">
                <i class="fa-solid fa-file-lines text-lg text-white/40" aria-hidden="true"></i>
            </div>
        @endif
    @if(!empty($doiUrl))
        </a>
    @else
        </div>
    @endif

    {{-- Konten --}}
    <div class="flex-1 min-w-0 flex flex-col h-full">

        {{-- Baris atas: Nomor + Badge + Kategori --}}
        <div class="flex items-center gap-2 mb-2 flex-wrap">
            @if(!empty($nomor))
                <span class="riset-nomor w-5 h-5 rounded-md text-[10px] font-bold flex items-center justify-center border {{ $numColor }} shrink-0">
                    {{ $nomor }}
                </span>
            @endif
            @if(!empty($indexDetail))
                <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full border {{ $badgeColor }}">
                    {{ $indexDetail }}
                </span>
            @endif
            @if(!empty($eyebrow))
                <span class="text-[10px] text-slate-400 font-medium truncate">{{ $eyebrow }}</span>
            @endif
        </div>

        {{-- Judul --}}
        <h3 class="text-sm font-bold text-[#0B2A4A] leading-snug mb-3 group-hover:text-[#0070BA] transition-colors line-clamp-3">
            {{ $title }}
        </h3>

        {{-- Detail bawah --}}
        <div class="mt-auto pt-2.5 border-t border-slate-100 space-y-1">

            {{-- Penulis --}}
            <p class="text-[11px] text-slate-600 flex items-start gap-1.5 leading-relaxed">
                <i class="fa-solid fa-user-pen text-[9px] text-[#0070BA] shrink-0 mt-0.5" aria-hidden="true"></i>
                <span class="line-clamp-2">{{ $authors }}</span>
            </p>

            {{-- Nama Jurnal --}}
            <p class="text-[11px] font-semibold text-[#0B2A4A] flex items-start gap-1.5">
                <i class="fa-solid fa-newspaper text-[9px] text-slate-400 shrink-0 mt-0.5" aria-hidden="true"></i>
                <span class="line-clamp-2">{{ $journal }}</span>
            </p>

            {{-- Vol & Terbitan --}}
            @if($volume || $issue)
                <p class="text-[11px] text-slate-500 pl-[18px]">
                    {{ collect([$volume, $issue])->filter()->implode(' · ') }}
                </p>
            @endif

            {{-- DOI --}}
            @if(!empty($doiLabel) && !empty($doiUrl))
                <a href="{{ $doiUrl }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1 text-[11px] font-mono text-[#0070BA] hover:underline pl-[18px] break-all">
                    <i class="fa-solid fa-link text-[9px]" aria-hidden="true"></i>
                    {{ str_starts_with($doiLabel, '10.') ? 'doi:' . $doiLabel : $doiLabel }}
                </a>
            @elseif(!empty($doiLabel))
                <span class="inline-flex items-center gap-1 text-[11px] font-mono text-slate-500 pl-[18px] break-all">
                    <i class="fa-solid fa-link text-[9px]" aria-hidden="true"></i>
                    {{ str_starts_with($doiLabel, '10.') ? 'doi:' . $doiLabel : $doiLabel }}
                </span>
            @endif

        </div>
    </div>

</article>
