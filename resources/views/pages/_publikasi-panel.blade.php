@php
    $isScopus = ($item['index_type'] ?? '') === 'SCOPUS';
    $isProc   = ($item['index_type'] ?? '') === 'PROCEEDING';
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

<article data-search="{{ strtolower($item['title'] . ' ' . $item['authors'] . ' ' . $item['journal']) }}"
         class="bg-white rounded-2xl border border-slate-200/90 {{ $hoverBorder }} p-4 sm:p-5 shadow-xs hover:shadow-md transition-all duration-200 flex items-start gap-4 group">

    {{-- Cover --}}
    <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
       class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-slate-200 bg-slate-100 shadow-xs block">
        @if(!empty($item['cover']))
            <img src="{{ asset($item['cover']) }}"
                 alt="{{ $item['cover_alt'] ?? $item['title'] }}"
                 loading="lazy"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @else
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[#0B2A4A] to-[#133E6C]">
                <i class="fa-solid fa-file-lines text-lg text-white/40"></i>
            </div>
        @endif
    </a>

    {{-- Konten --}}
    <div class="flex-1 min-w-0 flex flex-col h-full">

        {{-- Baris atas: Nomor + Badge + Kategori --}}
        <div class="flex items-center gap-2 mb-2 flex-wrap">
            @if(!empty($nomor))
                <span class="w-5 h-5 rounded-md text-[10px] font-bold flex items-center justify-center border {{ $numColor }} shrink-0">
                    {{ $nomor }}
                </span>
            @endif
            <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full border {{ $badgeColor }}">
                {{ $item['index_detail'] }}
            </span>
            <span class="text-[10px] text-slate-400 font-medium truncate">{{ $item['eyebrow'] }}</span>
        </div>

        {{-- Judul --}}
        <h3 class="text-sm font-bold text-[#0B2A4A] leading-snug mb-3 group-hover:text-[#0070BA] transition-colors line-clamp-3">
            {{ $item['title'] }}
        </h3>

        {{-- Detail bawah --}}
        <div class="mt-auto pt-2.5 border-t border-slate-100 space-y-1">

            {{-- Penulis --}}
            <p class="text-[11px] text-slate-600 flex items-start gap-1.5 leading-relaxed">
                <i class="fa-solid fa-user-pen text-[9px] text-[#0070BA] shrink-0 mt-0.5"></i>
                <span class="line-clamp-2">{{ $item['authors'] }}</span>
            </p>

            {{-- Nama Jurnal --}}
            <p class="text-[11px] font-semibold text-[#0B2A4A] flex items-start gap-1.5">
                <i class="fa-solid fa-newspaper text-[9px] text-slate-400 shrink-0 mt-0.5"></i>
                <span class="line-clamp-2">{{ $item['journal'] }}</span>
            </p>

            {{-- Vol & Terbitan --}}
            <p class="text-[11px] text-slate-500 pl-[18px]">
                {{ $item['volume'] }} &nbsp;·&nbsp; {{ $item['issue'] }}
            </p>

            {{-- DOI --}}
            <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-1 text-[11px] font-mono text-[#0070BA] hover:underline pl-[18px] break-all">
                <i class="fa-solid fa-link text-[9px]"></i>
                doi:{{ $item['doi_label'] }}
            </a>

        </div>
    </div>

</article>
