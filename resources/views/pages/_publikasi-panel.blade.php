@php
    $badgeColor = match($item['index_type']) {
        'SCOPUS'     => 'text-cyan-800 bg-cyan-50 border-cyan-200/80',
        'SINTA'      => 'text-emerald-800 bg-emerald-50 border-emerald-200/80',
        'PROCEEDING' => 'text-blue-800 bg-blue-50 border-blue-200/80',
        default      => 'text-amber-800 bg-amber-50 border-amber-200/80',
    };
    $hoverBorder = match($item['index_type']) {
        'SCOPUS'     => 'hover:border-cyan-400',
        'SINTA'      => 'hover:border-emerald-400',
        'PROCEEDING' => 'hover:border-blue-400',
        default      => 'hover:border-amber-400',
    };
@endphp

<article class="bg-white rounded-2xl border border-slate-200/90 {{ $hoverBorder }} p-4 sm:p-5 shadow-xs hover:shadow-md transition-all duration-200 flex items-start gap-4 group">

    {{-- Cover --}}
    <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
       class="shrink-0 w-20 sm:w-24 aspect-[3/4] rounded-xl overflow-hidden border border-slate-200 bg-slate-100 shadow-xs block">
        @if(!empty($item['cover']))
            <img src="{{ asset($item['cover']) }}"
                 alt="{{ $item['cover_alt'] }}"
                 loading="lazy"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @else
            <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] text-white p-2">
                <i class="fa-solid fa-file-lines text-lg text-white/40" aria-hidden="true"></i>
            </div>
        @endif
    </a>

    {{-- Info --}}
    <div class="flex-1 min-w-0 flex flex-col justify-between h-full">
        <div>
            {{-- Badge & nomor --}}
            <div class="flex items-center gap-2 mb-2 flex-wrap">
                @if(!empty($nomor))
                    <span class="w-6 h-6 rounded-md font-bold text-[11px] flex items-center justify-center border bg-slate-100 text-slate-700 border-slate-200 shrink-0">
                        {{ $nomor }}
                    </span>
                @endif
                <span class="font-semibold text-[10px] px-2.5 py-0.5 rounded-full border {{ $badgeColor }}">
                    {{ $item['index_detail'] }}
                </span>
                <span class="text-[10px] text-slate-400 font-medium">{{ $item['eyebrow'] }}</span>
            </div>

            {{-- Judul --}}
            <h3 class="text-sm sm:text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0B2A4A] transition-colors">
                {{ $item['title'] }}
            </h3>
        </div>

            {{-- Jurnal, volume, terbitan, DOI --}}
            <div class="mt-3 pt-2.5 border-t border-slate-100 space-y-1.5">
                <p class="text-xs text-slate-700 font-medium flex items-start gap-1.5">
                    <i class="fa-solid fa-user-pen text-[10px] text-[#0070BA] shrink-0 mt-0.5" aria-hidden="true"></i>
                    <span class="leading-relaxed">{{ $item['authors'] }}</span>
                </p>
                <p class="text-xs text-slate-500 flex items-start gap-1.5">
                    <i class="fa-solid fa-newspaper text-[10px] text-slate-400 shrink-0 mt-0.5" aria-hidden="true"></i>
                    <span class="font-semibold text-[#0B2A4A]">{{ $item['journal'] }}</span>
                </p>
                <p class="text-[11px] text-slate-500 pl-5 flex flex-wrap gap-x-3 gap-y-0.5">
                    <span><span class="font-medium text-slate-600">Vol:</span> {{ $item['volume'] }}</span>
                    <span><span class="font-medium text-slate-600">Terbitan:</span> {{ $item['issue'] }}</span>
                </p>
                <a href="{{ $item['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1 text-[11px] font-mono text-[#0070BA] hover:underline">
                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]" aria-hidden="true"></i>
                    {{ $item['doi_label'] }}
                </a>
            </div>
        </div>
    </div>
</article>

