@extends('layouts.app')

@section('title', 'Dosen | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Daftar dosen resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi berkualifikasi S-2 dan S-3.')

@section('content')
@php
    $dosens = $dosens ?? \App\Models\Dosen::published()->orderBy('urutan')->orderBy('id')->get();
    $kbkCounts = $dosens->countBy('kbk');
@endphp

    <!-- Hero Header -->
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Dosen</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs">
                Tenaga Pengajar
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Dosen &amp; Tenaga Pengajar
            </h1>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-10 sm:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Toolbar Pencarian & Filter KBK -->
            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs p-4 sm:p-5 space-y-4">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="relative flex-1 max-w-md">
                        <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></i>
                        <input type="search"
                               id="dosenSearchInput"
                               oninput="applyDosenFilter()"
                               placeholder="Cari nama dosen atau bidang keahlian..."
                               class="w-full pl-9 pr-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                    </div>
                    <p class="text-xs text-slate-600">
                        Menampilkan <strong id="dosenVisibleCount" class="text-[#0B2A4A]">{{ $dosens->count() }}</strong> dari {{ $dosens->count() }} dosen
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-slate-100">
                    <button type="button" onclick="filterKbk('all', this)" class="kbk-tab-btn px-3.5 py-2 rounded-xl font-semibold text-xs sm:text-[13px] transition-all duration-200 shadow-xs bg-[#0B2A4A] text-amber-400 border border-[#0B2A4A]">
                        Semua ({{ $dosens->count() }})
                    </button>
                    @foreach(\App\Models\Dosen::kbkOptions() as $kbkKey => $kbkName)
                        <button type="button" onclick="filterKbk('{{ $kbkKey }}', this)" class="kbk-tab-btn px-3.5 py-2 rounded-xl font-semibold text-xs sm:text-[13px] transition-all duration-200 bg-slate-100 hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                            {{ $kbkName }} ({{ $kbkCounts->get($kbkKey, 0) }})
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Grid Kartu Dosen -->
            <div id="dosen-grid" class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 sm:gap-6">
                @foreach($dosens as $dosen)
                    @php
                        $profileUrl = (!empty($dosen->profile_route) && Route::has($dosen->profile_route))
                            ? route($dosen->profile_route)
                            : null;
                        $fotoUrl = $dosen->foto_url ?: asset('images/dosen/' . $dosen->slug . '.jpg');
                    @endphp
                    @if($profileUrl)
                        <a href="{{ $profileUrl }}" class="dosen-item bg-white rounded-2xl overflow-hidden shadow-xs hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 flex flex-col group cursor-pointer border border-slate-200/90 hover:border-[#0070BA]/50 relative" data-kbk="{{ $dosen->kbk }}" data-search="{{ strtolower($dosen->nama . ' ' . $dosen->kbk_label) }}">
                            <div class="aspect-square overflow-hidden bg-slate-100 relative">
                                <img src="{{ $fotoUrl }}"
                                     alt="{{ $dosen->nama }}"
                                     class="w-full h-full object-cover object-center pointer-events-none group-hover:scale-105 transition-transform duration-300"
                                     loading="lazy">
                                <span class="absolute top-2.5 right-2.5 bg-[#0B2A4A]/85 backdrop-blur-sm text-amber-400 text-[11px] font-semibold px-2.5 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                    <i class="fa-solid fa-address-card text-[9px]" aria-hidden="true"></i> Profil
                                </span>
                            </div>
                            <div class="p-4 flex-1 flex flex-col items-center text-center justify-between">
                                <div>
                                    <span class="inline-block text-[11px] font-semibold px-2.5 py-0.5 rounded-full mb-2 {{ $dosen->badge_class }}">
                                        {{ $dosen->kbk_label }}
                                    </span>
                                    <h3 class="font-bold text-slate-900 text-sm leading-snug group-hover:text-[#0070BA] transition line-clamp-2">
                                        {{ $dosen->nama }}
                                    </h3>
                                </div>
                                <div class="mt-3 pt-2.5 border-t border-slate-100 w-full flex items-center justify-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:text-[#0B2A4A] transition">
                                    <span>Lihat Biodata Lengkap</span>
                                    <i class="fa-solid fa-arrow-right text-[10px] transform group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    @else
                        <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all duration-200 flex flex-col group border border-slate-200/90" data-kbk="{{ $dosen->kbk }}" data-search="{{ strtolower($dosen->nama . ' ' . $dosen->kbk_label) }}">
                            <div class="aspect-square overflow-hidden bg-slate-100">
                                <img src="{{ $fotoUrl }}"
                                     alt="{{ $dosen->nama }}"
                                     class="w-full h-full object-cover object-center pointer-events-none"
                                     loading="lazy">
                            </div>
                            <div class="p-4 flex-1 flex flex-col items-center text-center">
                                <div>
                                    <span class="inline-block text-[11px] font-semibold px-2.5 py-0.5 rounded-full mb-2 {{ $dosen->badge_class }}">
                                        {{ $dosen->kbk_label }}
                                    </span>
                                    <h3 class="font-bold text-slate-900 text-sm leading-snug group-hover:text-[#0070BA] transition line-clamp-2">
                                        {{ $dosen->nama }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="dosenEmptyState" class="hidden bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                <i class="fa-solid fa-user-slash text-2xl text-slate-300 mb-2 block" aria-hidden="true"></i>
                Tidak ditemukan dosen yang cocok dengan pencarian Anda.
            </div>

        </div>
    </section>

    @push('scripts')
    <script>
        let activeKbk = 'all';

        function filterKbk(category, btn) {
            activeKbk = category;
            const buttons = document.querySelectorAll('.kbk-tab-btn');
            buttons.forEach(b => {
                b.classList.remove('bg-[#0B2A4A]', 'text-amber-400', 'border-[#0B2A4A]', 'shadow-xs');
                b.classList.add('bg-slate-100', 'text-slate-700', 'border-slate-200');
            });
            btn.classList.remove('bg-slate-100', 'text-slate-700', 'border-slate-200');
            btn.classList.add('bg-[#0B2A4A]', 'text-amber-400', 'border-[#0B2A4A]', 'shadow-xs');

            applyDosenFilter();
        }

        function applyDosenFilter() {
            const term = (document.getElementById('dosenSearchInput')?.value || '').toLowerCase().trim();
            const items = document.querySelectorAll('.dosen-item');
            let visible = 0;

            items.forEach(item => {
                const matchKbk = activeKbk === 'all' || item.getAttribute('data-kbk') === activeKbk;
                const matchSearch = !term || (item.getAttribute('data-search') || '').includes(term);

                if (matchKbk && matchSearch) {
                    item.classList.remove('hidden');
                    visible++;
                } else {
                    item.classList.add('hidden');
                }
            });

            const countEl = document.getElementById('dosenVisibleCount');
            if (countEl) countEl.textContent = visible;

            const emptyEl = document.getElementById('dosenEmptyState');
            if (emptyEl) emptyEl.classList.toggle('hidden', visible > 0);
        }
    </script>
    @endpush
@endsection
