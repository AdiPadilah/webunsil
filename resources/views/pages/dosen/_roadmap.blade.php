@php
    $roadmap = is_array($roadmap) ? $roadmap : [];
    $tahapan = $dosen->cleanList($roadmap['tahapan'] ?? []);
    $roadmapJudul = $title ?: ($roadmap['judul'] ?? 'Research Roadmap');
    $roadmapSubjudul = $subtitle ?: ($roadmap['subjudul'] ?? 'Peta jalan penelitian dan luaran ilmiah');
    $roadmapBadge = $roadmap['badge'] ?? ($roadmap['label_mulai'] ?? 'Roadmap Riset');
    $labelMulai = $roadmap['label_mulai'] ?? 'Tahap Awal';
    $labelTujuan = $roadmap['label_tujuan'] ?? 'Target Riset & Luaran Unggulan';
    $gridTemplate = 'grid-cols-[105px_' . implode('_', array_fill(0, max(1, count($tahapan)), 'minmax(180px,1fr)')) . '_155px]';
    $stageColors = [
        'navy' => ['border' => 'border-slate-300/90', 'line' => '#0B2A4A', 'lineOpacity' => '0.55', 'lineClass' => 'bg-[#0B2A4A]/55', 'nodeBg' => 'bg-white border-[#0B2A4A] text-[#0B2A4A]', 'out1' => 'bg-emerald-50/70 border-emerald-300 text-emerald-900', 'out2' => 'bg-indigo-50/70 border-indigo-300 text-indigo-900'],
        'blue' => ['border' => 'border-blue-300', 'line' => '#0070BA', 'lineOpacity' => '0.6', 'lineClass' => 'bg-[#0070BA]/60', 'nodeBg' => 'bg-[#0B2A4A] border-[#0B2A4A] text-white', 'out1' => 'bg-blue-50/70 border-blue-300 text-blue-950', 'out2' => 'bg-sky-50/70 border-sky-300 text-sky-950'],
        'amber' => ['border' => 'border-amber-300', 'line' => '#D97706', 'lineOpacity' => '0.6', 'lineClass' => 'bg-amber-600/60', 'nodeBg' => 'bg-white border-amber-600 text-[#0B2A4A]', 'out1' => 'bg-amber-50/70 border-amber-300 text-amber-950', 'out2' => 'bg-orange-50/70 border-orange-300 text-orange-950'],
        'emerald' => ['border' => 'border-emerald-300', 'line' => '#059669', 'lineOpacity' => '0.6', 'lineClass' => 'bg-emerald-600/60', 'nodeBg' => 'bg-white border-emerald-600 text-[#0B2A4A]', 'out1' => 'bg-emerald-50/70 border-emerald-300 text-emerald-950', 'out2' => 'bg-teal-50/70 border-teal-300 text-teal-950'],
    ];
    $totalCols = count($tahapan) + 2;
@endphp

@if(! empty($tahapan))
<div class="{{ $wrapperClass ?? '' }} bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
    <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                <i class="fa-solid fa-diagram-project" aria-hidden="true"></i>
            </div>
            <div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                    {{ $roadmapJudul }}
                </h3>
                <p class="text-xs text-slate-400 font-medium">{{ $roadmapSubjudul }}</p>
            </div>
        </div>
        @if(filled($roadmapBadge))
            <span class="text-xs font-bold px-3.5 py-1 bg-blue-50 text-[#0B2A4A] rounded-full border border-blue-200/70">
                {{ $roadmapBadge }}
            </span>
        @endif
    </div>

    <p class="xl:hidden text-[11px] text-slate-400 flex items-center gap-1.5 mb-3">
        <i class="fa-solid fa-arrows-left-right text-[#0070BA]" aria-hidden="true"></i>
        Geser diagram ke kanan untuk melihat seluruh alur roadmap
    </p>

    <div class="overflow-x-auto pb-2 profile-sidebar-scroll">
        <div class="min-w-[1040px] w-full rounded-xl bg-slate-50/70 border border-slate-200/70 p-4 sm:p-5">
            <div class="grid {{ $gridTemplate }} grid-rows-[auto_auto_auto] gap-x-2">

                {{-- Baris Atas: Topik --}}
                <div class="row-start-1 col-start-1"></div>

                @foreach($tahapan as $idx => $step)
                    @php
                        $theme = $stageColors[$step['warna'] ?? 'navy'] ?? $stageColors['navy'];
                        $colIndex = $idx + 2;
                        $hasDualTopic = filled($step['topik_1'] ?? null) && filled($step['topik_2'] ?? null);
                    @endphp
                    <div class="row-start-1 flex flex-col justify-end items-center" style="grid-column-start: {{ $colIndex }};">
                        @if($hasDualTopic)
                            <div class="grid grid-cols-2 gap-2.5 w-full">
                                <div class="p-3 rounded-lg bg-white border {{ $theme['border'] }} shadow-sm text-[11px] font-medium text-slate-800 leading-snug">
                                    {{ $step['topik_1'] }}
                                </div>
                                <div class="p-3 rounded-lg bg-white border {{ $theme['border'] }} shadow-sm text-[11px] font-medium text-slate-800 leading-snug">
                                    {{ $step['topik_2'] }}
                                </div>
                            </div>
                            <svg class="w-full h-7 block" viewBox="0 0 320 28" preserveAspectRatio="none" aria-hidden="true">
                                <line x1="78" y1="0" x2="160" y2="28" stroke="{{ $theme['line'] }}" stroke-opacity="{{ $theme['lineOpacity'] }}" stroke-width="1.5" vector-effect="non-scaling-stroke" />
                                <line x1="242" y1="0" x2="160" y2="28" stroke="{{ $theme['line'] }}" stroke-opacity="{{ $theme['lineOpacity'] }}" stroke-width="1.5" vector-effect="non-scaling-stroke" />
                            </svg>
                        @elseif(filled($step['topik_1'] ?? null))
                            <div class="w-full p-3 rounded-lg bg-white border {{ $theme['border'] }} shadow-sm text-[11px] font-medium text-slate-800 leading-snug">
                                {{ $step['topik_1'] }}
                            </div>
                            <div class="w-[1.5px] h-7 {{ $theme['lineClass'] }}" aria-hidden="true"></div>
                        @endif
                    </div>
                @endforeach

                <div class="row-start-1" style="grid-column-start: {{ $totalCols }};"></div>

                {{-- Baris Tengah: Panah Horizontal & Node Periode --}}
                <div class="row-start-2 relative pointer-events-none z-0" style="grid-column: 1 / {{ $totalCols + 1 }};" aria-hidden="true">
                    <div class="absolute inset-y-0 left-[95px] right-[155px] flex items-center">
                        <div class="h-5 flex-1 bg-gradient-to-r from-[#0B2A4A]/15 via-[#0070BA]/25 to-[#0070BA]/40 border-y-2 border-[#0B2A4A]/60"></div>
                        <svg class="w-7 h-10 shrink-0 -ml-[1px]" viewBox="0 0 28 40" fill="none">
                            <path d="M0 11 H10 V3 L26 20 L10 37 V29 H0 Z" fill="#0070BA" fill-opacity="0.38" />
                            <path d="M0 11 H10 V3 L26 20 L10 37 V29 H0" stroke="#0B2A4A" stroke-opacity="0.6" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <div class="row-start-2 col-start-1 relative z-10 flex items-center justify-center py-2">
                    <div class="w-full px-2.5 py-2.5 rounded-lg bg-white border-2 border-[#0B2A4A] text-center shadow-sm">
                        <span class="block text-xs font-bold text-[#0B2A4A] leading-tight">{{ $labelMulai }}</span>
                    </div>
                </div>

                @foreach($tahapan as $idx => $step)
                    @php
                        $theme = $stageColors[$step['warna'] ?? 'navy'] ?? $stageColors['navy'];
                        $colIndex = $idx + 2;
                    @endphp
                    <div class="row-start-2 relative z-10 flex items-center justify-center py-2" style="grid-column-start: {{ $colIndex }};">
                        <div class="w-[1.5px] h-full {{ $theme['lineClass'] }} absolute left-1/2 -translate-x-1/2 inset-y-0 z-0" aria-hidden="true"></div>
                        <div class="relative z-10 px-3.5 py-1.5 rounded-lg border-2 {{ $theme['nodeBg'] }} text-center shadow-sm">
                            <span class="block text-xs font-extrabold font-mono leading-tight">{{ $step['periode'] ?? '' }}</span>
                            @if(filled($step['sub_label'] ?? null))
                                <span class="block text-[10px] font-medium opacity-80 mt-0.5 leading-tight">{{ $step['sub_label'] }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="row-start-2 relative z-10 flex items-center justify-center py-2" style="grid-column-start: {{ $totalCols }};">
                    <div class="w-full p-3 rounded-xl bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] border-2 border-[#0B2A4A] text-white text-center shadow-sm">
                        <span class="block text-[11px] font-semibold leading-snug">
                            {{ $labelTujuan }}
                        </span>
                    </div>
                </div>

                {{-- Baris Bawah: Luaran --}}
                <div class="row-start-3 col-start-1"></div>

                @foreach($tahapan as $idx => $step)
                    @php
                        $theme = $stageColors[$step['warna'] ?? 'navy'] ?? $stageColors['navy'];
                        $colIndex = $idx + 2;
                        $hasDualOut = filled($step['luaran_1'] ?? null) && filled($step['luaran_2'] ?? null);
                    @endphp
                    <div class="row-start-3 flex flex-col justify-start items-center" style="grid-column-start: {{ $colIndex }};">
                        @if($hasDualOut)
                            <svg class="w-full h-7 block" viewBox="0 0 320 28" preserveAspectRatio="none" aria-hidden="true">
                                <line x1="160" y1="0" x2="78" y2="28" stroke="{{ $theme['line'] }}" stroke-opacity="{{ $theme['lineOpacity'] }}" stroke-width="1.5" vector-effect="non-scaling-stroke" />
                                <line x1="160" y1="0" x2="242" y2="28" stroke="{{ $theme['line'] }}" stroke-opacity="{{ $theme['lineOpacity'] }}" stroke-width="1.5" vector-effect="non-scaling-stroke" />
                            </svg>
                            <div class="grid grid-cols-2 gap-2.5 w-full">
                                <div class="p-2.5 rounded-lg border {{ $theme['out1'] }} shadow-sm text-center text-[11px] font-bold leading-snug">
                                    {{ $step['luaran_1'] }}
                                </div>
                                <div class="p-2.5 rounded-lg border {{ $theme['out2'] }} shadow-sm text-center text-[11px] font-bold leading-snug">
                                    {{ $step['luaran_2'] }}
                                </div>
                            </div>
                        @elseif(filled($step['luaran_1'] ?? null))
                            <div class="w-[1.5px] h-7 {{ $theme['lineClass'] }}" aria-hidden="true"></div>
                            <div class="w-full p-2.5 rounded-lg border {{ $theme['out1'] }} shadow-sm text-center text-[11px] font-bold leading-snug">
                                {{ $step['luaran_1'] }}
                            </div>
                        @endif
                    </div>
                @endforeach

                <div class="row-start-3" style="grid-column-start: {{ $totalCols }};"></div>

            </div>
        </div>
    </div>
</div>
@endif
