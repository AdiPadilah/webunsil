@extends('layouts.app')

@section('title', 'Karya Dosen | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terindeks SINTA Akselerasi dan buku ajar dosen Program Studi Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Karya Dosen</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Intelektual &amp; Publikasi Ilmiah
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Karya &amp; Publikasi Dosen
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Produktivitas keilmuan dosen Program Studi Teknik Sipil FT UNSIL dalam bentuk jurnal ilmiah terindeks SINTA dan buku referensi keinsinyuran ber-ISBN.
            </p>
        </div>
    </section>

    {{-- Publikasi Unggulan --}}
    <section class="py-16 bg-slate-50" id="publikasi">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Karya Cipta &amp; Inovasi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Publikasi Unggulan</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            {{-- Baris 1: Jurnal besar + Buku kecil --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 mb-5">

                {{-- Jurnal — Kartu besar --}}
                <div class="lg:col-span-3 group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 min-h-[340px] flex flex-col">
                    <img src="{{ asset('images/unsil-prestasi-scopus-sipil.png') }}" alt="Jurnal Akselerasi"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/95 via-[#0B2A4A]/50 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-7">
                        <span class="inline-flex items-center gap-1.5 bg-blue-500 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3">
                            <i class="fa-solid fa-book-open-reader text-[9px]"></i> Jurnal Ilmiah · SINTA 4
                        </span>
                        <h3 class="text-2xl font-black text-white leading-tight mb-2">Akselerasi: Jurnal Ilmiah Teknik Sipil</h3>
                        <p class="text-slate-300 text-xs leading-relaxed mb-4 max-w-md">
                            Jurnal berkala resmi Prodi Teknik Sipil FT UNSIL. Menerbitkan riset bidang struktur, transportasi, geoteknik, manajemen konstruksi, dan sumber daya air. Terbit 3 kali setahun (Maret, Juli, November).
                        </p>
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="bg-white/10 backdrop-blur-sm text-white text-[10px] font-semibold px-3 py-1 rounded-full border border-white/20">E-ISSN: 2715-7296</span>
                            <span class="bg-white/10 backdrop-blur-sm text-white text-[10px] font-semibold px-3 py-1 rounded-full border border-white/20">Mar · Jul · Nov</span>
                            <a href="https://jurnal.unsil.ac.id" target="_blank"
                               class="ml-auto bg-amber-400 hover:bg-amber-300 text-slate-900 font-bold text-xs px-4 py-2 rounded-xl transition flex items-center gap-1.5">
                                Buka OJS <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Buku ber-ISBN — Kolom kanan --}}
                <div class="lg:col-span-2 flex flex-col gap-5" id="buku">

                    {{-- Buku 1 --}}
                    <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex-1 min-h-[160px] flex flex-col">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Buku Manajemen Proyek"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/95 via-emerald-900/60 to-transparent"></div>
                        <div class="relative z-10 mt-auto p-6">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-400 text-slate-900 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-book text-[9px]"></i> Buku Ajar · 2024
                            </span>
                            <h3 class="text-sm font-black text-white leading-tight">Manajemen Proyek: Manajemen Kualitas Proyek</h3>
                            <p class="text-emerald-200 text-[11px] mt-1">Hidayanto, S.T., M.T. · ISBN: 978-623-8722-77-8</p>
                        </div>
                    </div>

                    {{-- Buku 2 --}}
                    <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex-1 min-h-[160px] flex flex-col">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Buku Manajemen Konstruksi"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/60 to-transparent"></div>
                        <div class="relative z-10 mt-auto p-6">
                            <span class="inline-flex items-center gap-1.5 bg-blue-400 text-slate-900 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-book text-[9px]"></i> Buku Ajar · 2025
                            </span>
                            <h3 class="text-sm font-black text-white leading-tight">Manajemen Konstruksi</h3>
                            <p class="text-blue-200 text-[11px] mt-1">M. Ridha Al Mustafa, S.T., M.T. · ISBN: 978-634-7310-43-9</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Baris 2: Artikel jurnal terbaru + 1 buku lagi --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-52 flex flex-col">
                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Taiwan"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-5">
                        <span class="text-[10px] text-blue-300 font-bold uppercase tracking-wider">Jurnal Akselerasi · 2025</span>
                        <h4 class="text-sm font-bold text-white mt-0.5 leading-snug">Implementasi BIM 5D pada Perencanaan Kampus di Kab. Majalengka</h4>
                        <p class="text-slate-400 text-[11px] mt-1">Hidayanto, Empung, dkk.</p>
                    </div>
                </div>

                <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-52 flex flex-col">
                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Erosi DAS Citanduy"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-5">
                        <span class="text-[10px] text-cyan-300 font-bold uppercase tracking-wider">Jurnal Akselerasi · 2024</span>
                        <h4 class="text-sm font-bold text-white mt-0.5 leading-snug">Analisis Laju Erosi DAS Citanduy Hulu Berbasis SIG (MUSLE)</h4>
                        <p class="text-slate-400 text-[11px] mt-1">E. Khallilah, dkk.</p>
                    </div>
                </div>

                <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-52 flex flex-col">
                    <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Redesign Struktur Gedung"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-5">
                        <span class="text-[10px] text-emerald-300 font-bold uppercase tracking-wider">Jurnal Akselerasi · 2024</span>
                        <h4 class="text-sm font-bold text-white mt-0.5 leading-snug">Kajian Redesign Struktur Gedung 5 Lantai Balai Pengobatan UNSIL</h4>
                        <p class="text-slate-400 text-[11px] mt-1">M.S. Al Huseiny, R. Nursani</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
