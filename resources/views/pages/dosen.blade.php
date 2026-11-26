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
            <p class="text-[#0070BA] font-medium text-xs">
                Tenaga Pengajar
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Dosen &amp; Tenaga Pengajar
            </h1>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-12 sm:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Tab Filter 5 Bidang Keahlian - Satu Baris Scrollable -->
            <div class="mb-12 overflow-x-auto scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                <div class="flex items-center gap-2 p-2 bg-slate-100/90 rounded-2xl border shadow-inner min-w-max mx-auto w-fit">
                    <button type="button" onclick="filterKbk('all', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 shadow-md bg-[#0B2A4A] text-amber-400 border border-amber-400/40">
                        Semua Dosen
                    </button>
                    @foreach(\App\Models\Dosen::kbkOptions() as $kbkKey => $kbkName)
                        <button type="button" onclick="filterKbk('{{ $kbkKey }}', this)" class="kbk-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                            {{ $kbkName }} ({{ $kbkCounts->get($kbkKey, 0) }})
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Grid Kartu Dosen -->
            <div id="dosen-grid" class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-7 mb-14">
                @foreach($dosens as $dosen)
                    @php
                        $profileUrl = $dosen->profile_url;
                        $fotoUrl = $dosen->foto_url ?: asset('images/dosen/' . $dosen->slug . '.jpg');
                    @endphp
                    @if($profileUrl)
                        <a href="{{ $profileUrl }}" class="dosen-item bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group cursor-pointer border border-transparent hover:border-[#0070BA]/40 relative" data-kbk="{{ $dosen->kbk }}">
                            <div class="aspect-square overflow-hidden bg-slate-100 relative">
                                <img src="{{ $fotoUrl }}"
                                     alt="{{ $dosen->nama }}"
                                     class="w-full h-full object-cover object-top pointer-events-none group-hover:scale-105 transition-transform duration-300"
                                     loading="lazy">
                                <span class="absolute top-2 right-2 bg-[#0B2A4A]/80 backdrop-blur-sm text-amber-400 text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1 shadow-sm opacity-90 group-hover:opacity-100">
                                    <i class="fa-solid fa-address-card text-[9px]"></i> Profil
                                </span>
                            </div>
                            <div class="p-4 flex-1 flex flex-col items-center text-center justify-between">
                                <div>
                                    <span class="inline-block text-[10px] font-medium px-2 py-0.5 rounded-sm bg-opacity-60 mb-2 {{ $dosen->badge_class }} border-0 tracking-wide uppercase opacity-75">
                                        {{ $dosen->kbk_label }}
                                    </span>
                                    <h3 class="font-semibold text-slate-800 text-sm leading-snug group-hover:text-[#0070BA] transition line-clamp-2">
                                        {{ $dosen->nama }}
                                    </h3>
                                </div>
                                <div class="mt-3 pt-2.5 border-t border-slate-100 w-full flex items-center justify-center gap-1.5 text-xs font-semibold text-[#0070BA] group-hover:text-[#0B2A4A] transition">
                                    <span>Lihat Biodata Lengkap</span>
                                    <i class="fa-solid fa-arrow-right text-[10px] transform group-hover:translate-x-1 transition-transform"></i>
                                </div>
                            </div>
                        </a>
                    @else
                        <div class="dosen-item bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group" data-kbk="{{ $dosen->kbk }}">
                            <div class="aspect-square overflow-hidden bg-slate-100">
                                <img src="{{ $fotoUrl }}"
                                     alt="{{ $dosen->nama }}"
                                     class="w-full h-full object-cover object-top pointer-events-none"
                                     loading="lazy">
                            </div>
                            <div class="p-4 flex-1 flex flex-col items-center text-center">
                                <div>
                                    <span class="inline-block text-[10px] font-medium px-2 py-0.5 rounded-sm bg-opacity-60 mb-2 {{ $dosen->badge_class }} border-0 tracking-wide uppercase opacity-75">
                                        {{ $dosen->kbk_label }}
                                    </span>
                                    <h3 class="font-semibold text-slate-800 text-sm leading-snug group-hover:text-[#0070BA] transition line-clamp-2">
                                        {{ $dosen->nama }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>

    @push('styles')
    <style>
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    @endpush

    @push('scripts')
    <script>
        function filterKbk(category, btn) {
            const buttons = document.querySelectorAll('.kbk-tab-btn');
            buttons.forEach(b => {
                b.classList.remove('bg-[#0B2A4A]', 'text-amber-400', 'border-amber-400/40', 'shadow-md');
                b.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });
            btn.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
            btn.classList.add('bg-[#0B2A4A]', 'text-amber-400', 'border-amber-400/40', 'shadow-md');

            const items = document.querySelectorAll('.dosen-item');
            items.forEach(item => {
                const itemKbk = item.getAttribute('data-kbk');
                if (category === 'all' || itemKbk === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    </script>
    @endpush
@endsection
