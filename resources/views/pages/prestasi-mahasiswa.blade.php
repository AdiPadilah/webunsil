@extends('layouts.app')

@section('title', 'Prestasi Mahasiswa | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Dokumentasi prestasi, penghargaan kejuaraan nasional, dan publikasi jurnal internasional bereputasi mahasiswa Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative min-h-[260px] sm:min-h-[300px] flex items-center bg-[#0B2A4A] text-white overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/gedung-unsil.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#071c32]/95 via-[#0B2A4A]/85 to-[#0B2A4A]/60"></div>
        
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 220px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-12 w-full">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('akademik') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Akademik</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-amber-400 font-bold">Prestasi Mahasiswa</span>
            </nav>

            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                <i class="fa-solid fa-trophy mr-1 text-amber-400"></i> Prestasi Riil Sivitas Akademika
            </span>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Prestasi Mahasiswa Teknik Sipil
            </h1>
            <p class="text-slate-200 text-xs sm:text-sm md:text-base mt-2 max-w-2xl leading-relaxed">
                Dokumentasi resmi pencapaian juara kejuaraan nasional, publikasi jurnal internasional bereputasi (Scopus), dan kiprah mahasiswa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.
            </p>
        </div>
    </section>

    {{-- Aksen Corak Khas Tasik --}}
    <div class="h-3 bg-[#0a2038] border-b border-amber-400/20 overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 12px;"></div>
    </div>

    {{-- Highlight Metrik Capaian --}}
    <section class="bg-white border-b border-slate-200 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-[#0070BA] font-heading">Juara 1</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">National Paper Competition</div>
                </div>
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-amber-600 font-heading">Q1 &amp; Q2</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Scopus Internasional Mahasiswa</div>
                </div>
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-emerald-600 font-heading">81+</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Peserta Nasional Disisihkan</div>
                </div>
                <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200/70">
                    <div class="text-2xl sm:text-3xl font-black text-indigo-600 font-heading">100%</div>
                    <div class="text-xs font-semibold text-slate-600 mt-0.5">Bimbingan Intensif Dosen</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Konten Utama --}}
    <section class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Filter Kategori --}}
            <div class="flex flex-wrap items-center gap-2 mb-8">
                <span class="text-xs font-bold text-slate-500 mr-1 flex items-center gap-1">
                    <i class="fa-solid fa-filter text-blue-600"></i> Filter Kategori:
                </span>
                <button type="button" onclick="filterPrestasi('all')" class="filter-btn active-filter px-3.5 py-1.5 rounded-full text-xs font-bold transition shadow-sm bg-[#0070BA] text-white" data-cat="all">
                    Semua Prestasi
                </button>
                <button type="button" onclick="filterPrestasi('lomba')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="lomba">
                    Kompetisi &amp; Kejuaraan Nasional
                </button>
                <button type="button" onclick="filterPrestasi('publikasi')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="publikasi">
                    Publikasi Scopus &amp; Riset
                </button>
                <button type="button" onclick="filterPrestasi('jembatan')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200" data-cat="jembatan">
                    Rancang Jembatan (SCIENCE)
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                {{-- Kolom Kiri: Daftar Kartu Prestasi --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- 1. Tirta Adhipermana Juara 1 NPC 2023 --}}
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="lomba">
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana Juara 1 National Paper Competition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">26</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">OKT</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2023</span>
                            </div>

                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 shadow-md">
                                    <i class="fa-solid fa-trophy text-xs"></i> Juara 1 Nasional
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200">
                                        <i class="fa-solid fa-medal text-[9px]"></i> National Paper Competition (NPC)
                                    </span>
                                    <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Menyisihkan 81 Peserta
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    <a href="{{ route('berita.tirta-adhipermana') }}">
                                        Tim "Tirta Adhipermana" Jurusan Teknik Sipil UNSIL Menyabet Juara 1 National Paper Competition 2023
                                    </a>
                                </h2>

                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 25 &ndash; 26 Oktober 2023</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Universitas Syiah Kuala (USK), Banda Aceh</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Ajang:</strong> The 4th Aceh International Symposium on Civil Engineering (AISCE 2023)</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Humas UNSIL &mdash; Tim Tirta Adhipermana dari Jurusan Teknik Sipil Universitas Siliwangi berhasil meraih Juara 1 dengan karya inovatif <em>"Aplikasi Sumur Artesis Inovatif sebagai Solusi Krisis Air Bersih Pasca-Bencana Gempa Bumi dan Strategi Perwujudan SDGs"</em>.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> Ria (Ketua), Farhan, Alfarozi
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Andhy Romdani, Ph.D.
                                </span>
                                <a href="{{ route('berita.tirta-adhipermana') }}" class="text-[11px] text-blue-700 font-bold hover:underline flex items-center gap-1 ml-auto">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 2. Fahmi Rahmat Publikasi Scopus --}}
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="publikasi">
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat Publikasi Scopus Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">21</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">AGU</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2025</span>
                            </div>

                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-indigo-600 text-white shadow-md">
                                    <i class="fa-solid fa-globe text-xs text-amber-300"></i> Rekor Scopus Q1 &amp; Q2
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-indigo-700 bg-indigo-50 px-2.5 py-0.5 rounded-md border border-indigo-200">
                                        <i class="fa-solid fa-book-bookmark text-[9px]"></i> Jurnal Internasional Bereputasi
                                    </span>
                                    <span class="text-[10px] text-amber-700 font-bold bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                                        Mahasiswa Ajaib UNSIL
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    <a href="{{ route('berita.fahmi-rahmat') }}">
                                        Prestasi Riset Internasional: Fahmi Rahmat Amanulloh Publikasikan 5 Karya Ilmiah Sebelum Lulus
                                    </a>
                                </h2>

                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> Agustus 2025</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Penerbit:</strong> Scopus Indexed (Journal of Natural Hazards Research Q1, J. Water &amp; Climate Change Q2)</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Capaian:</strong> 3 Jurnal Internasional Scopus &amp; 2 Jurnal Nasional Sinta</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Humas UNSIL &mdash; Fahmi Rahmat Amanulloh, mahasiswa semester 7 Teknik Sipil UNSIL, menorehkan sejarah membanggakan dengan mempublikasikan lima karya ilmiah sekaligus sebelum lulus dan bersaing di kancah riset internasional.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-graduate text-blue-600"></i>
                                    <strong>Mahasiswa:</strong> Fahmi Rahmat Amanulloh
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Andhy Romdani, Ph.D.
                                </span>
                                <a href="{{ route('berita.fahmi-rahmat') }}" class="text-[11px] text-blue-700 font-bold hover:underline flex items-center gap-1 ml-auto">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 3. Muhammad Raka Publikasi Scopus --}}
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="publikasi">
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka Publikasi Scopus Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">21</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">AGU</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2025</span>
                            </div>

                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-cyan-700 text-white shadow-md">
                                    <i class="fa-solid fa-file-shield text-xs text-amber-300"></i> Scopus Q2 &amp; Sinta
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-cyan-800 bg-cyan-50 px-2.5 py-0.5 rounded-md border border-cyan-200">
                                        <i class="fa-solid fa-microscope text-[9px]"></i> Publikasi Internasional
                                    </span>
                                    <span class="text-[10px] text-slate-400 font-medium">Lulusan Berprestasi</span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    <a href="{{ route('berita.muhammad-raka') }}">
                                        Muhammad Raka El Ghifari Tembus Jurnal Internasional Bereputasi Scopus Q2 Sebelum Hari Wisuda
                                    </a>
                                </h2>

                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 21 Agustus 2025</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Penerbit:</strong> Jurnal Internasional Bereputasi Terindeks Scopus Q2 &amp; Sinta</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Bidang:</strong> Rekayasa Ketekniksipilan &amp; Pengelolaan Sumber Daya Air Terapan</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Humas UNSIL &mdash; Muhammad Raka El Ghifari, sarjana baru Teknik Sipil Universitas Siliwangi, menorehkan prestasi istimewa dengan mempublikasikan dua karya ilmiah di jurnal internasional terindeks Scopus Q2 dan satu artikel Sinta sebelum resmi diwisuda.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-graduate text-blue-600"></i>
                                    <strong>Mahasiswa:</strong> Muhammad Raka El Ghifari
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Pembimbing:</strong> Andhy Romdani, Ph.D.
                                </span>
                                <a href="{{ route('berita.muhammad-raka') }}" class="text-[11px] text-blue-700 font-bold hover:underline flex items-center gap-1 ml-auto">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 4. Final National Bridge Design Competition SCIENCE 2026 --}}
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="jembatan">
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Final National Bridge Design Competition SCIENCE 2026 HMS UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">20</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">OKT</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-slate-800 text-amber-300 border border-amber-400/30 shadow-md">
                                    <i class="fa-solid fa-bridge text-xs text-amber-400"></i> Event Nasional
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-amber-800 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200">
                                        <i class="fa-solid fa-trophy text-[9px]"></i> Kompetisi Perancangan Jembatan
                                    </span>
                                    <span class="text-[10px] text-blue-700 font-bold bg-blue-50 px-2 py-0.5 rounded border border-blue-200">
                                        SCIENCE 2026
                                    </span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    <a href="{{ route('berita.kompetisi-jembatan') }}">
                                        HMS FT-Unsil Selenggarakan Babak Final National Bridge Design Competition dalam Ajang Bergengsi SCIENCE 2026
                                    </a>
                                </h2>

                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 19 &ndash; 20 Oktober 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Aula Gedung Teknik Sipil UNSIL, Kampus Mugarsari</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kegiatan:</strong> Babak Final National Bridge Design Competition (Finalis PTN Se-Indonesia)</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Humas UNSIL &mdash; Himpunan Mahasiswa Sipil (HMS) Universitas Siliwangi mempertemukan para inovator muda teknik sipil dari berbagai perguruan tinggi nasional untuk berkompetisi menguji efisiensi struktur dan ketahanan perancangan jembatan.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Penyelenggara:</strong> Pengurus HMS FT UNSIL
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-tie text-amber-600"></i>
                                    <strong>Ketua Jurusan:</strong> Andhy Romdani, Ph.D.
                                </span>
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="text-[11px] text-blue-700 font-bold hover:underline flex items-center gap-1 ml-auto">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 5. Seminar Nasional Jalan Tol Berkelanjutan SCIENCE 2026 --}}
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="lomba">
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional Jalan Tol Berkelanjutan SCIENCE 2026" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">22</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">OKT</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2026</span>
                            </div>

                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-emerald-600 text-white shadow-md">
                                    <i class="fa-solid fa-road text-xs text-amber-300"></i> Forum Nasional
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-800 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                                        <i class="fa-solid fa-chalkboard-user text-[9px]"></i> Seminar Nasional
                                    </span>
                                    <span class="text-[10px] text-slate-400 font-medium">Pengembangan Kapasitas Mahasiswa</span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    <a href="{{ route('berita.seminar-jalan-tol') }}">
                                        HMS FT-Unsil Selenggarakan Seminar Nasional Pembangunan Jalan Tol Berkelanjutan (SCIENCE 2026)
                                    </a>
                                </h2>

                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> 22 Oktober 2026</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Dimana:</strong> Gedung Rektorat / Fakultas Teknik Universitas Siliwangi</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Fokus:</strong> Geoteknik, Perkerasan Jalan, &amp; Manajemen Keselamatan Jalan Tol</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Humas UNSIL &mdash; Menghadirkan praktisi Kementerian PUPR dan pakar transportasi nasional untuk membekali mahasiswa teknik sipil dalam menyongsong standar rekayasa jalan tol modern dan ramah lingkungan.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Penyelenggara:</strong> HMS FT UNSIL
                                </span>
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="text-[11px] text-blue-700 font-bold hover:underline flex items-center gap-1 ml-auto">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 6. Riset HATHI Segara Anakan --}}
                    <article class="prestasi-card bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row group" data-category="publikasi">
                        <div class="relative sm:w-5/12 h-64 sm:h-auto overflow-hidden bg-slate-900 flex-shrink-0">
                            <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="Kolaborasi Riset HATHI Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent sm:hidden"></div>
                            
                            <div class="absolute top-3 left-3 bg-[#071c32]/95 backdrop-blur-md text-white border border-amber-400/40 rounded-xl px-2.5 py-1.5 text-center shadow-xl z-10 min-w-[50px]">
                                <span class="block text-base sm:text-lg font-black text-amber-400 leading-none">15</span>
                                <span class="block text-[9px] font-bold uppercase tracking-wider text-slate-200 mt-0.5">SEP</span>
                                <span class="block text-[8px] text-slate-400 leading-none">2024</span>
                            </div>

                            <div class="absolute bottom-3 left-3 sm:bottom-3 sm:left-3">
                                <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold px-3 py-1 rounded-full bg-blue-700 text-white shadow-md">
                                    <i class="fa-solid fa-water text-xs text-amber-300"></i> Forum Ilmiah HATHI
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-blue-800 bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200">
                                        <i class="fa-solid fa-droplet text-[9px]"></i> Sumber Daya Air
                                    </span>
                                    <span class="text-[10px] text-slate-400 font-medium">Kolaborasi Riset Terapan</span>
                                </div>

                                <h2 class="text-base sm:text-lg font-black text-slate-900 group-hover:text-blue-700 transition leading-snug font-heading">
                                    <a href="{{ route('berita.hathi-segara-anakan') }}">
                                        Kolaborasi Riset Sivitas Akademika Teknik Sipil UNSIL dalam Penanganan Sedimentasi Segara Anakan
                                    </a>
                                </h2>

                                <div class="mt-3.5 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-100 text-xs text-slate-600 space-y-1">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-regular fa-clock text-amber-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Kapan:</strong> September 2024</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-location-dot text-rose-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Mitra:</strong> Balai Besar Wilayah Sungai (BBWS) Citanduy &amp; HATHI</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-shapes text-blue-600 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Fokus:</strong> Dinamika Estuari, Erosi DAS, &amp; Konservasi Laguna Pesisir</span>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Keterlibatan aktif dosen dan mahasiswa Teknik Sipil UNSIL dalam riset ilmiah dan diskusi kelompok terpumpun (FGD) perumusan strategi penanganan sedimentasi laguna Segara Anakan berbasis pemodelan hidraulik.
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-500">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                    <strong>Tim:</strong> Dosen &amp; Mahasiswa Bidang Keairan FT UNSIL
                                </span>
                                <a href="{{ route('berita.hathi-segara-anakan') }}" class="text-[11px] text-blue-700 font-bold hover:underline flex items-center gap-1 ml-auto">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>

                {{-- Kolom Kanan: Sidebar Prestasi Unggulan & Informasi --}}
                <aside class="space-y-6">

                    {{-- Card Sidebar: Berita Prestasi Unggulan --}}
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                                <span>Prestasi Unggulan</span>
                            </h3>
                            <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                                Resmi
                            </span>
                        </div>

                        <div class="space-y-4">
                            {{-- Item 1: Tirta Adhipermana --}}
                            <a href="{{ route('berita.tirta-adhipermana') }}" class="flex items-start gap-3 group pb-3 border-b border-slate-100">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tirta Adhipermana" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/30"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">26</span>
                                        <span class="text-[8px] font-bold uppercase">Okt</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Tim Tirta Adhipermana Juara 1 National Paper Competition 2023
                                    </h4>
                                    <span class="text-[10px] text-amber-600 font-semibold mt-1 block">Juara 1 Nasional &bull; AISCE</span>
                                </div>
                            </a>

                            {{-- Item 2: Fahmi Rahmat --}}
                            <a href="{{ route('berita.fahmi-rahmat') }}" class="flex items-start gap-3 group pb-3 border-b border-slate-100">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/30"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">21</span>
                                        <span class="text-[8px] font-bold uppercase">Agu</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Fahmi Rahmat Publikasikan 5 Karya Ilmiah Scopus &amp; Sinta Sebelum Lulus
                                    </h4>
                                    <span class="text-[10px] text-indigo-600 font-semibold mt-1 block">Scopus Q1 &amp; Q2 Bereputasi</span>
                                </div>
                            </a>

                            {{-- Item 3: Muhammad Raka --}}
                            <a href="{{ route('berita.muhammad-raka') }}" class="flex items-start gap-3 group pb-3 border-b border-slate-100">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/30"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">21</span>
                                        <span class="text-[8px] font-bold uppercase">Agu</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Muhammad Raka Tembus Jurnal Internasional Scopus Q2 Sebelum Wisuda
                                    </h4>
                                    <span class="text-[10px] text-cyan-700 font-semibold mt-1 block">Scopus Q2 Internasional</span>
                                </div>
                            </a>

                            {{-- Item 4: Bridge Design SCIENCE 2026 --}}
                            <a href="{{ route('berita.kompetisi-jembatan') }}" class="flex items-start gap-3 group">
                                <div class="relative w-16 h-16 rounded-xl overflow-hidden bg-slate-900 flex-shrink-0">
                                    <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="SCIENCE 2026" class="w-full h-full object-cover group-hover:scale-105 transition">
                                    <div class="absolute inset-0 bg-slate-900/30"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                                        <span class="text-xs font-black text-amber-400 leading-none">20</span>
                                        <span class="text-[8px] font-bold uppercase">Okt</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Final National Bridge Design Competition SCIENCE 2026
                                    </h4>
                                    <span class="text-[10px] text-slate-500 mt-1 block">Kompetisi Jembatan Nasional</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- Card Info Pendampingan & Pembinaan Prestasi --}}
                    <div class="bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] rounded-2xl p-6 text-white shadow-md relative overflow-hidden">
                        <div class="relative z-10">
                            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider mb-3">
                                Pembinaan Mahasiswa
                            </span>
                            <h3 class="text-base font-black font-heading leading-snug">
                                Ingin Berkompetisi &amp; Meraih Prestasi?
                            </h3>
                            <p class="text-xs text-slate-200 mt-2 leading-relaxed">
                                Program Studi Teknik Sipil FT UNSIL bersama himpunan mahasiswa (HMS) menyediakan pembimbingan riset, bimbingan penulisan karya ilmiah, dan pendanaan delegasi lomba ketekniksipilan.
                            </p>
                            <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs">
                                <span class="text-amber-300 font-semibold">Ruang Kaprodi / Dosen Pembina</span>
                                <a href="{{ route('dosen') }}" class="text-xs font-bold text-white bg-amber-500 hover:bg-amber-600 px-3 py-1.5 rounded-lg transition">
                                    Lihat Dosen
                                </a>
                            </div>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    {{-- Filter Script --}}
    @push('scripts')
    <script>
        function filterPrestasi(category) {
            const cards = document.querySelectorAll('.prestasi-card');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                if (btn.getAttribute('data-cat') === category) {
                    btn.className = 'filter-btn active-filter px-3.5 py-1.5 rounded-full text-xs font-bold transition shadow-sm bg-[#0070BA] text-white';
                } else {
                    btn.className = 'filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition bg-white text-slate-700 hover:bg-slate-100 border border-slate-200';
                }
            });

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
    @endpush
@endsection
