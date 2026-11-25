@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi dan ringkasan riset ilmiah dosen Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
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

    {{-- Panel Riset (Gaya Sambutan) --}}
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            @php
            $risetList = [
                [
                    'no' => 1,
                    'cover' => 'images/jurnal/natural_hazards_research.jpg',
                    'cover_alt' => 'Cover Resmi Jurnal Natural Hazards Research (Elsevier)',
                    'cover_caption_title' => 'Natural Hazards Research',
                    'cover_caption_sub' => 'Elsevier · ScienceDirect (SCOPUS Q1)',
                    'cover_caption_meta' => 'ISSN: 2666-5921 · Vol. 6, Issue 2',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Riset & Publikasi Ilmiah',
                    'title' => 'Does ENSO-driven climate variability increase coastal flooding? Insights from the Brebes coastal area, Indonesia',
                    'authors' => 'Fahmi Rahmat Amanulloh, Andhy Romdani, Empung, Yusep Ramdani, Hendra, Pengki Irawan',
                    'journal' => 'Natural Hazards Research (Elsevier)',
                    'volume' => 'Volume 6',
                    'issue' => 'Issue 2 (Hlm. 449–463), Juni 2026 (Terbit Daring: 22 Oktober 2025)',
                    'index_type' => 'SCOPUS',
                    'index_detail' => 'SCOPUS Q1 (SJR 1.097)',
                    'doi_label' => '10.1016/j.nhres.2025.10.004',
                    'doi_url' => 'https://doi.org/10.1016/j.nhres.2025.10.004',
                    'paragraphs' => [
                        'Penelitian ini mengkaji pengaruh fase El Niño–Southern Oscillation (ENSO) dalam memodulasi bahaya banjir pesisir di kawasan Kabupaten Brebes, Jawa Tengah, yang memiliki wilayah pertambakan dan permukiman dataran rendah rentan terhadap fluktuasi muka air laut.',
                        'Dengan memadukan pemodelan hidrodinamika dan gelombang (MIKE 21) bersama simulasi genangan dataran banjir (HEC-RAS) pada periode representatif La Niña (2022), El Niño (2023), dan Netral (2024), studi ini menemukan bahwa kontrol langsung ENSO terhadap hidrodinamika skala besar relatif terbatas (kecepatan arus 0,035–0,091 m/s dan variasi muka air –0,34 hingga 0,36 m). Sebaliknya, banjir pesisir terutama dipicu oleh gelombang lokal.',
                        'Hasil simulasi menunjukkan fase Netral justru menghasilkan genangan terluas sebesar 5.584,51 ha dengan tinggi gelombang puncak 0,78 m dan kedalaman hingga 0,2 m, diikuti La Niña (3.326 ha, kedalaman 0,15 m, gelombang 0,7 m), sedangkan El Niño berdampak sangat kecil (gelombang 0,45 m). Temuan ini menegaskan perlunya memperhitungkan sinyal iklim halus dalam perencanaan adaptasi dan mitigasi risiko banjir pesisir.',
                    ],
                ],
            ];
            @endphp

            @foreach($risetList as $riset)
            <article class="max-w-5xl mx-auto bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 sm:p-8 lg:p-10 reveal">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                    {{-- Cover Resmi Jurnal (Panel Kiri) --}}
                    <div class="lg:col-span-4 flex justify-center">
                        <a href="{{ $riset['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="block rounded-2xl overflow-hidden shadow-sm border border-slate-200 bg-white w-full max-w-[260px] sm:max-w-[280px] hover:shadow-md transition-shadow group">
                            <div class="aspect-[3/4] overflow-hidden bg-slate-100">
                                <img src="{{ asset($riset['cover']) }}"
                                     alt="{{ $riset['cover_alt'] }}"
                                     class="w-full h-full object-cover object-center group-hover:scale-[1.03] transition-transform duration-500">
                            </div>
                            <div class="p-3.5 bg-[#0B2A4A] text-white text-center">
                                <h3 class="text-xs sm:text-sm font-bold text-white leading-tight">{{ $riset['cover_caption_title'] }}</h3>
                                <p class="text-[11px] text-amber-400 font-medium mt-0.5">{{ $riset['cover_caption_sub'] }}</p>
                                <p class="text-[10px] text-slate-300 mt-0.5">{{ $riset['cover_caption_meta'] }}</p>
                            </div>
                        </a>
                    </div>

                    {{-- Penjelasan & Metadata Riset (Panel Kanan) --}}
                    <div class="lg:col-span-8 flex flex-col justify-between space-y-5">
                        <div>
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                                <span class="text-[11px] font-semibold text-[#0070BA] uppercase tracking-wider">
                                    {{ $riset['eyebrow'] }}
                                </span>
                                <div class="flex items-center gap-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md bg-[#0B2A4A] text-white text-[11px] font-bold">
                                        No. {{ $riset['no'] }}
                                    </span>
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-bold border {{ $riset['index_type'] === 'SCOPUS' ? 'bg-cyan-50 text-cyan-800 border-cyan-200' : 'bg-emerald-50 text-emerald-800 border-emerald-200' }}">
                                        <i class="fa-solid fa-globe text-[10px]" aria-hidden="true"></i>
                                        {{ $riset['index_detail'] }}
                                    </span>
                                </div>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading leading-snug mb-4">
                                {{ $riset['title'] }}
                            </h2>

                            {{-- Penjelasan Riset --}}
                            <div class="text-xs sm:text-[13px] text-slate-600 space-y-3 leading-relaxed text-justify">
                                @foreach($riset['paragraphs'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>

                            {{-- Rincian Bibliografis --}}
                            <dl class="mt-5 bg-slate-50 rounded-xl border border-slate-200/80 p-4 sm:p-5 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-3 text-xs">
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Nomor</dt>
                                    <dd class="font-bold text-slate-900 mt-0.5">#{{ $riset['no'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Indeksasi</dt>
                                    <dd class="font-bold text-cyan-800 mt-0.5">{{ $riset['index_detail'] }}</dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Judul Artikel</dt>
                                    <dd class="font-semibold text-slate-900 mt-0.5 leading-snug">{{ $riset['title'] }}</dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Penulis</dt>
                                    <dd class="text-slate-700 mt-0.5 leading-relaxed">{{ $riset['authors'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Nama Jurnal</dt>
                                    <dd class="font-semibold text-[#0B2A4A] mt-0.5">{{ $riset['journal'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Volume</dt>
                                    <dd class="text-slate-800 font-medium mt-0.5">{{ $riset['volume'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Terbitan</dt>
                                    <dd class="text-slate-800 mt-0.5">{{ $riset['issue'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">DOI</dt>
                                    <dd class="mt-0.5">
                                        <a href="{{ $riset['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center gap-1 font-semibold text-[#0070BA] hover:text-[#0B2A4A] hover:underline break-all focus:outline-none focus:ring-2 focus:ring-blue-400 rounded">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]" aria-hidden="true"></i>
                                            {{ $riset['doi_label'] }}
                                        </a>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div class="pt-3.5 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                            @if(!empty($riset['lecturer_route']) && Route::has($riset['lecturer_route']))
                            <a href="{{ route($riset['lecturer_route']) }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-600 hover:text-[#0B2A4A] transition">
                                <i class="fa-solid fa-id-badge text-[11px]" aria-hidden="true"></i>
                                <span>Lihat Profil Peneliti</span>
                            </a>
                            @endif

                            <a href="{{ $riset['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline ml-auto">
                                <span>Buka Artikel via DOI</span>
                                <i class="fa-solid fa-arrow-right text-[10px]" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </article>
            @endforeach

        </div>
    </section>
@endsection
