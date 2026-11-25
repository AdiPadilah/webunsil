@extends('layouts.app')

@section('title', 'Berita & Informasi Terkini | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Portal berita, informasi kegiatan akademik, prestasi mahasiswa, seminar, dan agenda resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).')

@section('content')
@php
    // 13 berita lama hardcoded dari routes khusus — ditampilkan setelah berita DB
    $staticSlugs = [
        'berita.seminar-jalan-tol','berita.seminar-hasil-uns','berita.kunjungan-leuwikeris',
        'berita.kompetisi-jembatan','berita.seminar-taiwan','berita.workshop-pasti-q1',
        'berita.kuliah-tamu-bim','berita.wisuda-sarjana','berita.fahmi-rahmat',
        'berita.muhammad-raka','berita.seminar-hathi-air','berita.hathi-segara-anakan',
        'berita.tirta-adhipermana','berita.workshop-obe',
    ];
@endphp
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Berita &amp; Informasi</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Warta Sivitas Akademika
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Berita &amp; Informasi
            </h1>
        </div>
    </section>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                
                <div class="lg:col-span-2 space-y-8" id="daftar-berita">

                    {{-- Berita dari Database (Admin) — terbaru di atas --}}
                    @if($articles->count())
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach($articles as $art)
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    @if($art->thumbnail)
                                        @if(str_starts_with($art->thumbnail, 'images/'))
                                            <img src="{{ asset($art->thumbnail) }}" alt="{{ $art->title }}" class="w-full h-full object-cover">
                                        @else
                                            <img src="{{ Storage::disk('public')->url($art->thumbnail) }}" alt="{{ $art->title }}" class="w-full h-full object-cover">
                                        @endif
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-[#0B2A4A] to-[#0070BA] flex items-center justify-center">
                                            <i class="fa-solid fa-newspaper text-white/30 text-4xl"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        {{ $art->category }} &bull; {{ $art->published_at ? $art->published_at->translatedFormat('d F Y') : '' }}
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        {{ $art->title }}
                                    </h3>
                                    @if($art->excerpt)
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">{{ $art->excerpt }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.show', $art->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    {{ $articles->links() }}
                    @endif

                    {{-- Pembatas jika ada berita DB --}}
                    @if($articles->count())
                    <div class="border-t border-slate-200 pt-6">
                        <p class="text-xs text-slate-400 font-medium mb-4 uppercase tracking-wide">Berita Sebelumnya</p>
                    </div>
                    @endif

                    {{-- Featured Article (berita lama hardcoded) --}}
                    <div id="berita-featured" class="{{ request('page') == 2 ? 'hidden' : '' }}">
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 group">
                            <div class="h-64 sm:h-72 overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional SCIENCE 2026 Jalan Tol Berkelanjutan" class="w-full h-full object-cover  ">
                            </div>

                            <div class="p-6">
                                <span class="text-xs text-slate-400 block mb-1">20 Oktober 2026 &bull; Auditorium Rektorat UNSIL</span>
                                <h2 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-[#0070BA] transition leading-snug">
                                    <a href="{{ route('berita.seminar-jalan-tol') }}">Seminar Nasional SCIENCE 2026 Himpunan Mahasiswa Sipil UNSIL Angkat Strategi Pembangunan Jalan Tol Berkelanjutan</a>
                                </h2>
                                <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                    Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi menggelar Seminar Nasional bertajuk “Managing the Future for a Greater Indonesia” dengan menghadirkan praktisi BUMN PT Adhi Karya (Persero) Tbk. guna mengupas strategi konstruksi jalan tol berkelanjutan.
                                </p>
                                <div class="mt-4 pt-3 border-t border-slate-100">
                                    <a href="{{ route('berita.seminar-jalan-tol') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                        Baca Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Halaman 1: Grid Berita --}}
                    <div id="berita-page-1" class="grid grid-cols-1 sm:grid-cols-2 gap-6 {{ $initialPage == 2 ? 'hidden' : '' }}">

                        {{-- 1. 27 November 2026 - Workshop OBE --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Workshop Penguatan Kurikulum OBE" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Agenda Workshop &bull; 27 November 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE)
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Menghadirkan Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU. (UNS) membahas penyelarasan kurikulum OBE, CPL, dan akreditasi internasional IABEE di Kampus 2 UNSIL.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.workshop-obe') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 2. 29 Oktober 2026 - Seminar Hasil Disertasi UNS --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-2.jpg') }}" alt="Dosen UNSIL Penguji Eksternal Seminar Hasil Disertasi UNS" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Manajemen Rekayasa Konstruksi &bull; 29 Oktober 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Dosen Teknik Sipil UNSIL Diundang sebagai Penguji Eksternal Seminar Hasil Disertasi di Pascasarjana FT UNS
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Pengakuan kompetensi keilmuan dosen UNSIL di tingkat nasional melalui peran sebagai penguji eksternal dalam sidang seminar hasil disertasi Program Doktor Teknik Sipil FT UNS, Surakarta.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.seminar-hasil-uns') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 3. 23 Oktober 2026 - Kunjungan Leuwikeris --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Ilmiah Bendungan Leuwikeris" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Kunjungan Lapangan &bull; 23 Oktober 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        Himpunan Mahasiswa Sipil Universitas Siliwangi Perluas Wawasan Keteknikan melalui Kunjungan Ilmiah ke Bendungan Leuwikeris
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Rombongan HMS dan dosen Teknik Sipil UNSIL meninjau langsung struktur bendungan, instrumen rembesan, dan sistem pemantauan di Bendungan Leuwikeris bersama tim UPB.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 4. 20 Oktober 2026 - National Bridge Competition SCIENCE 2026 --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Babak Final National Bridge Design Competition SCIENCE 2026" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Kompetisi Nasional &bull; 20 Oktober 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        Himpunan Mahasiswa Sipil FT-Unsil Selenggarakan Babak Final National Bridge Design Competition dalam Ajang Bergengsi SCIENCE 2026
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Kompetisi rancang jembatan nasional di Aula Gedung Teknik Sipil UNSIL mempertemukan tim perancang jembatan terbaik dari UNDIP dan Universitas Tidar.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 5. 12 Oktober 2026 - Seminar Taiwan --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan-cover.jpg') }}" alt="Seminar Internasional Bridging Futures Indonesia-Taiwan FT UNSIL" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Seminar Internasional &bull; 12 Oktober 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Narasumber Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) memaparkan peluang beasiswa S2/S3 dan riset gempa bagi lulusan Teknik Sipil FT UNSIL.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.seminar-taiwan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 6. 02 Oktober 2026 - Workshop PASTI-Q1 --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/workshop-jurnal-q1/foto-2.jpg') }}" alt="Workshop Penulisan Artikel Submit to Journal International Q1 2026" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Publikasi &amp; Riset &bull; 02 Oktober 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Dosen Teknik Sipil UNSIL Terpilih Ikuti Workshop Penulisan Artikel Jurnal Internasional Q1 (PASTI-Q1) 2026 di Bogor
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Kemendiktisaintek gandeng Universitas Pakuan gelar program percepatan publikasi Scopus Q1, delegasi dosen Teknik Sipil UNSIL ikuti pendampingan intensif naskah ilmiah bereputasi global.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.workshop-pasti-q1') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                    </div>

                    {{-- Halaman 2: Grid Berita --}}
                    <div id="berita-page-2" class="grid grid-cols-1 sm:grid-cols-2 gap-6 {{ $initialPage == 1 ? 'hidden' : '' }}">

                        {{-- 7. 08 Januari 2026 - Kuliah Tamu BIM --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Kuliah Tamu BIM" class="w-full h-full object-cover" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Kuliah Tamu &bull; 08 Januari 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Kuliah Tamu Building Information Modelling (BIM) untuk Infrastruktur Modern
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Pakar praktisi BUMN Konstruksi memberikan wawasan penerapan digital twin, 3D modelling, dan kolaborasi terintegrasi pada industri konstruksi 4.0.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.kuliah-tamu-bim') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 8. 24 Oktober 2025 - Wisuda --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pelepasan Calon Wisudawan Teknik Sipil" class="w-full h-full object-cover" onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Wisuda &amp; Alumni &bull; 24 Oktober 2025
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Pelepasan Calon Wisudawan Sarjana Teknik Sipil FT Universitas Siliwangi
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Pelepasan lulusan Sarjana Teknik (S.T.) yang siap berkontribusi pada pembangunan infrastruktur berkelanjutan, industri BUMN, konsultan, dan wirausaha keteknikan.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.wisuda-sarjana') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 9. 23 Oktober 2025 - Fahmi Rahmat --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat Amanulloh Mahasiswa Teknik Sipil UNSIL" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Prestasi Riset &bull; 23 Oktober 2025
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        "Mahasiswa Ajaib" dari UNSIL: Fahmi Rahmat Amanulloh Tembus 3 Jurnal Scopus &amp; 2 Nasional di Semester 7
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Mahasiswa semester 7 Teknik Sipil UNSIL ini mencetak rekor dengan 5 publikasi ilmiah sebelum lulus — termasuk Scopus Q1 di Journal of Natural Hazards Research.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.fahmi-rahmat') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 10. 22 Agustus 2025 - Muhammad Raka --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka El Ghifari Lulusan Teknik Sipil UNSIL" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Prestasi Riset &bull; 22 Agustus 2025
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Lulusan Teknik Sipil UNSIL Taklukkan Dua Jurnal Internasional Bereputasi Scopus: Muhammad Raka El Ghifari
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Putra Garut kelahiran 2003 ini membuktikan bahwa mimpi besar bisa lahir dari kampus daerah dengan dua publikasi Scopus dan satu artikel Sinta sebelum wisuda.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.muhammad-raka') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 11. 03 Juni 2024 - Seminar HATHI Air --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar Nasional HATHI Sumber Daya Air Berkelanjutan 2024" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Seminar Ilmiah &bull; 03 Juni 2024
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Seminar Nasional Perdana HATHI: Pemanfaatan Teknologi Modern untuk Pengelolaan Sumber Daya Air Berkelanjutan
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        HATHI Cabang Banjar bersama Jurusan Teknik Sipil UNSIL menyelenggarakan seminar nasional perdana yang mempertemukan pakar, akademisi, dan pemangku kebijakan sumber daya air.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.seminar-hathi-air') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 12. 22 Maret 2024 - HATHI Segara Anakan --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="HATHI FGD Sedimentasi Segara Anakan Teknik Sipil UNSIL" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Kolaborasi &bull; 22 Maret 2024
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Pelantikan HATHI Cabang Banjar &amp; FGD Penanganan Sedimentasi Segara Anakan bersama Teknik Sipil UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        BBWS Citanduy berkolaborasi dengan Jurusan Teknik Sipil UNSIL dalam FGD bertema Sedimentasi Laguna Segara Anakan, memperingati Hari Air Dunia ke-32.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.hathi-segara-anakan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- 13. 09 November 2023 - Tim Tirta Adhipermana --}}
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana Juara 1 NPC 2023" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Prestasi Kompetisi &bull; 09 November 2023
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Tim Tirta Adhipermana Teknik Sipil UNSIL Menyabet Juara 1 National Paper Competition 2023 di Aceh
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Menyisihkan 81 peserta dari seluruh Indonesia dalam AISCE 2023, tim ini membawa topik inovatif sumur artesis sebagai solusi krisis air bersih pasca-gempa bumi.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-end">
                                <a href="{{ route('berita.tirta-adhipermana') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                    </div>

                    {{-- Navigasi Pagination: < 1, 2 > --}}
                    <div class="pt-8 border-t border-slate-200 flex items-center justify-center gap-2">
                        <button type="button" id="btn-prev" onclick="goToPage(currentPage - 1)" class="w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm transition {{ $initialPage == 1 ? 'opacity-30 cursor-not-allowed text-slate-400 bg-slate-100 border border-slate-200' : 'bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200 cursor-pointer' }}" aria-label="Halaman Sebelumnya">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>
                        <button type="button" id="btn-page-1" onclick="goToPage(1)" class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-sm transition cursor-pointer {{ $initialPage == 1 ? 'bg-[#0B2A4A] text-amber-400 shadow-sm border border-[#0B2A4A]' : 'bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200' }}">
                            1
                        </button>
                        <button type="button" id="btn-page-2" onclick="goToPage(2)" class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-sm transition cursor-pointer {{ $initialPage == 2 ? 'bg-[#0B2A4A] text-amber-400 shadow-sm border border-[#0B2A4A]' : 'bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200' }}">
                            2
                        </button>
                        <button type="button" id="btn-next" onclick="goToPage(currentPage + 1)" class="w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm transition {{ $initialPage == 2 ? 'opacity-30 cursor-not-allowed text-slate-400 bg-slate-100 border border-slate-200' : 'bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200 cursor-pointer' }}" aria-label="Halaman Selanjutnya">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

                
                <aside class="lg:col-span-1 space-y-6">

                    <!-- Widget Agenda -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200 sticky top-24">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                            <h3 class="text-sm font-bold text-slate-900 flex items-center gap-2">
                                <i class="fa-solid fa-calendar-days text-[#0070BA]"></i>
                                <span>Agenda Kegiatan</span>
                            </h3>
                            <span class="text-[10px] font-semibold bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full">
                                2026 &bull; 2027
                            </span>
                        </div>

                        
                        <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl mb-4 text-xs">
                            <button type="button" onclick="switchAgendaTab('mendatang')" id="tab-btn-mendatang" class="flex-1 py-1.5 px-3 rounded-lg bg-white text-[#0070BA] shadow-sm font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer">
                                <i class="fa-solid fa-clock text-[#0070BA]"></i>
                                <span>Mendatang</span>
                                <span class="bg-blue-100 text-[#0070BA] text-[10px] px-1.5 py-0.2 rounded-full font-extrabold">2</span>
                            </button>
                            <button type="button" onclick="switchAgendaTab('selesai')" id="tab-btn-selesai" class="flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer">
                                <i class="fa-solid fa-circle-check text-slate-400"></i>
                                <span>Telah Selesai</span>
                                <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 py-0.2 rounded-full font-extrabold">4</span>
                            </button>
                        </div>

                        
                        <div id="panel-agenda-mendatang" class="space-y-3.5">
                            
                            <div class="p-3.5 rounded-xl bg-blue-50/80 border border-blue-200 hover:shadow-sm transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-bold text-blue-700 block uppercase">27 November 2026</span>
                                    <span class="text-[10px] font-bold text-amber-600">Segera Hadir</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-900 mt-1 leading-snug">
                                    Workshop Kurikulum Berbasis Outcome-Based Education (OBE)
                                </h4>
                                <p class="text-[11px] text-slate-600 mt-0.5 leading-relaxed">
                                    Narasumber: Dr. Eng. Ir. Halwan Alfisa S., ST., MT., IPU. (UNS) &bull; Kampus 2 UNSIL
                                </p>
                                <a href="{{ route('berita.workshop-obe') }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-blue-700 hover:text-blue-900 mt-2">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>

                            
                            {{-- Agenda Mendatang 2 (Belum Fix) --}}
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:shadow-sm transition flex items-start gap-4">
                                <div class="flex-shrink-0 w-14 text-center rounded-lg overflow-hidden border border-slate-200">
                                    <div class="bg-slate-700 text-slate-300 text-[10px] font-bold py-1 uppercase tracking-wider">
                                        -
                                    </div>
                                    <div class="bg-white text-slate-700 text-xl font-bold py-1.5 font-heading">
                                        -
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                        -
                                    </h4>
                                    <div class="text-[11px] text-slate-500 space-y-0.5 mt-1.5">
                                        <p class="flex items-center gap-1.5">
                                            <i class="fa-regular fa-clock text-slate-400 text-[10px]"></i>
                                            <span>-</span>
                                        </p>
                                        <p class="flex items-center gap-1.5">
                                            <i class="fa-solid fa-location-dot text-slate-400 text-[10px]"></i>
                                            <span>-</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div id="panel-agenda-selesai" class="hidden space-y-3">
                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-90 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">12 Oktober 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Seminar Internasional Indonesia - Taiwan (NCKU)
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Kuliah pakar gempa dan info beasiswa S2/S3 bersama Yanuar Haryanto, Ph.D.
                                </p>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-600 hover:text-blue-700 mt-1.5">
                                    <span>Lihat Dokumentasi</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-80 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">Juni 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Civil Expo &amp; Seminar Nasional 2026
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Pameran karya maket rekayasa mahasiswa dan seminar infrastruktur.
                                </p>
                            </div>

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-80 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">01 &ndash; 10 Mei 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Pendaftaran Seminar Proposal &amp; Sidang TA
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Verifikasi berkas persyaratan sidang skripsi periode kedua.
                                </p>
                            </div>

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-80 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">12 &ndash; 15 April 2026</span>
                                    <span class="text-[10px] font-medium text-slate-400">Selesai</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 mt-1 leading-snug">
                                    Ujian Tengah Semester (UTS) Genap
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Pelaksanaan UTS Genap T.A. 2025/2026 seluruh angkatan.
                                </p>
                            </div>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        let currentPage = {{ $initialPage }};

        function goToPage(page) {
            if (page < 1 || page > 2 || page === currentPage) return;
            currentPage = page;

            const featured = document.getElementById('berita-featured');
            const p1 = document.getElementById('berita-page-1');
            const p2 = document.getElementById('berita-page-2');
            const bPrev = document.getElementById('btn-prev');
            const bNext = document.getElementById('btn-next');
            const b1 = document.getElementById('btn-page-1');
            const b2 = document.getElementById('btn-page-2');

            const activeClass = 'w-10 h-10 rounded-xl flex items-center justify-center font-bold text-sm transition cursor-pointer bg-[#0B2A4A] text-amber-400 shadow-sm border border-[#0B2A4A]';
            const inactiveClass = 'w-10 h-10 rounded-xl flex items-center justify-center font-bold text-sm transition cursor-pointer bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200';
            const disabledNavClass = 'w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm transition opacity-30 cursor-not-allowed text-slate-400 bg-slate-100 border border-slate-200';
            const activeNavClass = 'w-10 h-10 rounded-xl flex items-center justify-center font-semibold text-sm transition cursor-pointer bg-white text-slate-700 hover:bg-blue-50 hover:text-[#0070BA] border border-slate-200';

            if (page === 1) {
                if (featured) featured.classList.remove('hidden');
                if (p1) p1.classList.remove('hidden');
                if (p2) p2.classList.add('hidden');

                if (b1) b1.className = activeClass;
                if (b2) b2.className = inactiveClass;
                if (bPrev) bPrev.className = disabledNavClass;
                if (bNext) bNext.className = activeNavClass;
            } else {
                if (featured) featured.classList.add('hidden');
                if (p1) p1.classList.add('hidden');
                if (p2) p2.classList.remove('hidden');

                if (b1) b1.className = inactiveClass;
                if (b2) b2.className = activeClass;
                if (bPrev) bPrev.className = activeNavClass;
                if (bNext) bNext.className = disabledNavClass;
            }

            // Update URL tanpa reload
            const url = new URL(window.location);
            url.searchParams.set('page', page);
            window.history.pushState({}, '', url);

            // Scroll ke atas container daftar berita
            const target = document.getElementById('daftar-berita');
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        function switchAgendaTab(tab) {
            const pMendatang = document.getElementById('panel-agenda-mendatang');
            const pSelesai = document.getElementById('panel-agenda-selesai');
            const bMendatang = document.getElementById('tab-btn-mendatang');
            const bSelesai = document.getElementById('tab-btn-selesai');

            if (!pMendatang || !pSelesai) return;

            if (tab === 'mendatang') {
                pMendatang.classList.remove('hidden');
                pSelesai.classList.add('hidden');
                bMendatang.className = 'flex-1 py-1.5 px-3 rounded-lg bg-white text-[#0070BA] shadow-sm font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
                bSelesai.className = 'flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
            } else {
                pMendatang.classList.add('hidden');
                pSelesai.classList.remove('hidden');
                bMendatang.className = 'flex-1 py-1.5 px-3 rounded-lg text-slate-500 hover:text-slate-800 font-semibold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
                bSelesai.className = 'flex-1 py-1.5 px-3 rounded-lg bg-white text-emerald-700 shadow-sm font-bold text-xs flex items-center justify-center gap-1.5 transition cursor-pointer';
            }
        }
    </script>
    @endpush
@endsection

