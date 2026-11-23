@extends('layouts.app')

@section('title', 'Laboratorium Kejuruan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas laboratorium kejuruan Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Laboratorium</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Fasilitas Praktikum &amp; Riset Terpadu
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Laboratorium Teknik Sipil
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Fasilitas laboratorium keinsinyuran Program Studi S-1 Teknik Sipil di Gedung FT Kampus 2 UNSIL Mugarsari guna mendukung kegiatan praktikum, penelitian tugas akhir, dan pengujian material konstruksi berstandar SNI dan ASTM.
            </p>
        </div>
    </section>

    {{-- Main Section --}}
    <section class="py-12 sm:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Tab Filter (Sesuai Struktur Dosen) --}}
            <div class="mb-10 overflow-x-auto scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                <div class="flex items-center gap-2 p-2 bg-slate-100/90 rounded-2xl border shadow-inner min-w-max mx-auto w-fit">
                    <button type="button" onclick="filterLab('all', this)" class="lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 shadow-md bg-[#0B2A4A] text-amber-400 border border-amber-400/40">
                        Semua Lab
                    </button>
                    <button type="button" onclick="filterLab('struktur', this)" class="lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Struktur &amp; Bahan
                    </button>
                    <button type="button" onclick="filterLab('keairan', this)" class="lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Sumber Daya Air
                    </button>
                    <button type="button" onclick="filterLab('geoteknik', this)" class="lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Geoteknik
                    </button>
                    <button type="button" onclick="filterLab('transportasi', this)" class="lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Transportasi
                    </button>
                    <button type="button" onclick="filterLab('komputasi', this)" class="lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border">
                        Komputasi &amp; Perpetaan
                    </button>
                </div>
            </div>

            {{-- List Laboratorium Bersih (Divider Garis Horizontal) --}}
            <div class="max-w-3xl mx-auto bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
                <div id="lab-list" class="divide-y divide-slate-200">
                    <div class="lab-item py-3.5 first:pt-0 last:pb-0 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default" data-kbk="struktur">
                        Lab Teknologi Bahan Konstruksi
                    </div>
                    <div class="lab-item py-3.5 first:pt-0 last:pb-0 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default" data-kbk="keairan">
                        Lab Hidraulika &amp; Bangunan Air
                    </div>
                    <div class="lab-item py-3.5 first:pt-0 last:pb-0 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default" data-kbk="geoteknik">
                        Lab Mekanika Tanah &amp; Geoteknik
                    </div>
                    <div class="lab-item py-3.5 first:pt-0 last:pb-0 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default" data-kbk="transportasi">
                        Lab Transportasi &amp; Jalan Raya
                    </div>
                    <div class="lab-item py-3.5 first:pt-0 last:pb-0 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default" data-kbk="komputasi">
                        Lab Komputasi &amp; Pemodelan Struktur
                    </div>
                    <div class="lab-item py-3.5 first:pt-0 last:pb-0 text-slate-700 hover:text-[#0070BA] text-sm sm:text-base font-medium transition cursor-default" data-kbk="komputasi">
                        Lab Perpetaan &amp; Ukur Tanah
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Script Filter Tab --}}
    <script>
        function filterLab(kbk, btn) {
            document.querySelectorAll('.lab-tab-btn').forEach(b => {
                b.className = 'lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200';
            });
            btn.className = 'lab-tab-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-sm uppercase tracking-wide transition-all duration-200 shadow-md bg-[#0B2A4A] text-amber-400 border border-amber-400/40';

            document.querySelectorAll('.lab-item').forEach(item => {
                if (kbk === 'all' || item.dataset.kbk === kbk) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

@endsection
