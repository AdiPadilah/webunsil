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
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-amber-400 font-bold">Prestasi Mahasiswa</span>
            </nav>

            <span class="text-amber-400 text-xs font-medium mb-2">
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
                    <article class="prestasi-card bg-[#0B2A4A] text-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 shadow-md border border-blue-900/60 hover:border-amber-400/40 hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row gap-6 items-start group" data-category="lomba">
                        <div class="w-full md:w-52 lg:w-56 shrink-0 flex flex-col items-center md:items-start">
                            <div class="w-full aspect-[4/3] md:aspect-square rounded-2xl overflow-hidden bg-slate-900 shadow">
                                <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana Juara 1 National Paper Competition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-white mt-3 text-center md:text-left leading-snug font-heading">
                                Tim "Tirta Adhipermana"
                            </h4>
                            <p class="text-xs font-semibold text-amber-400 mt-1 text-center md:text-left">
                                Teknik Sipil FT UNSIL
                            </p>
                            <p class="text-[11px] text-slate-300 mt-0.5 text-center md:text-left leading-tight">
                                Ria (Ketua), Farhan, Alfarozi &bull; Pembimbing: Andhy Romdani, Ph.D.
                            </p>
                        </div>

                        <div class="flex-1 flex flex-col justify-between h-full w-full">
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-extrabold italic font-heading text-white leading-snug mb-3">
                                    <a href="{{ route('berita.tirta-adhipermana') }}" class="hover:text-amber-300 transition">
                                        &ldquo;Aplikasi Sumur Artesis Inovatif Solusi Krisis Air Pasca-Bencana Gempa&rdquo;
                                    </a>
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-justify sm:text-left">
                                    Tim Tirta Adhipermana dari Jurusan Teknik Sipil Universitas Siliwangi sukses menyabet Juara 1 National Paper Competition pada ajang The 4th Aceh International Symposium on Civil Engineering (AISCE 2023) di Universitas Syiah Kuala Banda Aceh, berhasil menyisihkan 81 tim dari perguruan tinggi se-Indonesia.
                                </p>
                            </div>

                            <div class="mt-5 pt-3.5 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                                <span class="text-[11px] text-slate-400">
                                    26 Oktober 2023 &bull; Banda Aceh
                                </span>
                                <a href="{{ route('berita.tirta-adhipermana') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1.5 ml-auto transition">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 2. Fahmi Rahmat Publikasi Scopus --}}
                    <article class="prestasi-card bg-[#0B2A4A] text-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 shadow-md border border-blue-900/60 hover:border-amber-400/40 hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row gap-6 items-start group" data-category="publikasi">
                        <div class="w-full md:w-52 lg:w-56 shrink-0 flex flex-col items-center md:items-start">
                            <div class="w-full aspect-[4/3] md:aspect-square rounded-2xl overflow-hidden bg-slate-900 shadow">
                                <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat Publikasi Scopus Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-white mt-3 text-center md:text-left leading-snug font-heading">
                                Fahmi Rahmat Amanulloh
                            </h4>
                            <p class="text-xs font-semibold text-amber-400 mt-1 text-center md:text-left">
                                Teknik Sipil FT UNSIL
                            </p>
                            <p class="text-[11px] text-slate-300 mt-0.5 text-center md:text-left leading-tight">
                                Mahasiswa Berprestasi &bull; Pembimbing: Andhy Romdani, Ph.D.
                            </p>
                        </div>

                        <div class="flex-1 flex flex-col justify-between h-full w-full">
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-extrabold italic font-heading text-white leading-snug mb-3">
                                    <a href="{{ route('berita.fahmi-rahmat') }}" class="hover:text-amber-300 transition">
                                        &ldquo;Dedikasi Riset &amp; Rekor Publikasi 5 Karya Ilmiah Scopus Sebelum Lulus&rdquo;
                                    </a>
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-justify sm:text-left">
                                    Fahmi Rahmat Amanulloh, mahasiswa Teknik Sipil UNSIL, menorehkan sejarah membanggakan dengan mempublikasikan lima karya ilmiah sekaligus sebelum lulus, menembus jurnal internasional terindeks Scopus Q1 (Journal of Natural Hazards Research) dan Scopus Q2 (Water and Climate Change), serta 2 jurnal nasional Sinta.
                                </p>
                            </div>

                            <div class="mt-5 pt-3.5 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                                <span class="text-[11px] text-slate-400">
                                    Agustus 2025 &bull; Scopus Q1 &amp; Q2
                                </span>
                                <a href="{{ route('berita.fahmi-rahmat') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1.5 ml-auto transition">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 3. Muhammad Raka Publikasi Scopus --}}
                    <article class="prestasi-card bg-[#0B2A4A] text-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 shadow-md border border-blue-900/60 hover:border-amber-400/40 hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row gap-6 items-start group" data-category="publikasi">
                        <div class="w-full md:w-52 lg:w-56 shrink-0 flex flex-col items-center md:items-start">
                            <div class="w-full aspect-[4/3] md:aspect-square rounded-2xl overflow-hidden bg-slate-900 shadow">
                                <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka Publikasi Scopus Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-white mt-3 text-center md:text-left leading-snug font-heading">
                                Muhammad Raka El Ghifari
                            </h4>
                            <p class="text-xs font-semibold text-amber-400 mt-1 text-center md:text-left">
                                Teknik Sipil FT UNSIL
                            </p>
                            <p class="text-[11px] text-slate-300 mt-0.5 text-center md:text-left leading-tight">
                                Lulusan Berprestasi &bull; Pembimbing: Andhy Romdani, Ph.D.
                            </p>
                        </div>

                        <div class="flex-1 flex flex-col justify-between h-full w-full">
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-extrabold italic font-heading text-white leading-snug mb-3">
                                    <a href="{{ route('berita.muhammad-raka') }}" class="hover:text-amber-300 transition">
                                        &ldquo;Menembus Jurnal Bereputasi Internasional Scopus Q2 Menjelang Hari Wisuda&rdquo;
                                    </a>
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-justify sm:text-left">
                                    Muhammad Raka El Ghifari menorehkan prestasi istimewa dengan mempublikasikan dua karya ilmiah di jurnal internasional bereputasi terindeks Scopus Q2 pada bidang pengelolaan sumber daya air terapan serta satu artikel Sinta sebelum resmi diwisuda sebagai sarjana teknik.
                                </p>
                            </div>

                            <div class="mt-5 pt-3.5 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                                <span class="text-[11px] text-slate-400">
                                    21 Agustus 2025 &bull; Scopus Q2 &amp; Sinta
                                </span>
                                <a href="{{ route('berita.muhammad-raka') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1.5 ml-auto transition">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 4. Final National Bridge Design Competition SCIENCE 2026 --}}
                    <article class="prestasi-card bg-[#0B2A4A] text-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 shadow-md border border-blue-900/60 hover:border-amber-400/40 hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row gap-6 items-start group" data-category="jembatan">
                        <div class="w-full md:w-52 lg:w-56 shrink-0 flex flex-col items-center md:items-start">
                            <div class="w-full aspect-[4/3] md:aspect-square rounded-2xl overflow-hidden bg-slate-900 shadow">
                                <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Final National Bridge Design Competition SCIENCE 2026 HMS UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-white mt-3 text-center md:text-left leading-snug font-heading">
                                Final National Bridge Competition
                            </h4>
                            <p class="text-xs font-semibold text-amber-400 mt-1 text-center md:text-left">
                                HMS FT UNSIL &bull; SCIENCE 2026
                            </p>
                            <p class="text-[11px] text-slate-300 mt-0.5 text-center md:text-left leading-tight">
                                Finalis Perguruan Tinggi Nasional Se-Indonesia
                            </p>
                        </div>

                        <div class="flex-1 flex flex-col justify-between h-full w-full">
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-extrabold italic font-heading text-white leading-snug mb-3">
                                    <a href="{{ route('berita.kompetisi-jembatan') }}" class="hover:text-amber-300 transition">
                                        &ldquo;Inovasi Rancang Jembatan Efisien, Kuat, dan Berkelanjutan Masa Depan&rdquo;
                                    </a>
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-justify sm:text-left">
                                    Himpunan Mahasiswa Sipil (HMS) Universitas Siliwangi mempertemukan para inovator muda teknik sipil dari berbagai perguruan tinggi nasional untuk berkompetisi menguji efisiensi struktur, keandalan beban, dan ketahanan rancangan jembatan pada ajang bergengsi SCIENCE 2026.
                                </p>
                            </div>

                            <div class="mt-5 pt-3.5 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                                <span class="text-[11px] text-slate-400">
                                    20 Oktober 2026 &bull; Kampus Mugarsari
                                </span>
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1.5 ml-auto transition">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 5. Seminar Nasional Jalan Tol Berkelanjutan SCIENCE 2026 --}}
                    <article class="prestasi-card bg-[#0B2A4A] text-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 shadow-md border border-blue-900/60 hover:border-amber-400/40 hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row gap-6 items-start group" data-category="lomba">
                        <div class="w-full md:w-52 lg:w-56 shrink-0 flex flex-col items-center md:items-start">
                            <div class="w-full aspect-[4/3] md:aspect-square rounded-2xl overflow-hidden bg-slate-900 shadow">
                                <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional Jalan Tol Berkelanjutan SCIENCE 2026" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-white mt-3 text-center md:text-left leading-snug font-heading">
                                Seminar Nasional Jalan Tol
                            </h4>
                            <p class="text-xs font-semibold text-amber-400 mt-1 text-center md:text-left">
                                HMS FT UNSIL &bull; SCIENCE 2026
                            </p>
                            <p class="text-[11px] text-slate-300 mt-0.5 text-center md:text-left leading-tight">
                                Geoteknik &bull; Perkerasan &bull; Keselamatan Jalan Tol
                            </p>
                        </div>

                        <div class="flex-1 flex flex-col justify-between h-full w-full">
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-extrabold italic font-heading text-white leading-snug mb-3">
                                    <a href="{{ route('berita.seminar-jalan-tol') }}" class="hover:text-amber-300 transition">
                                        &ldquo;Pembangunan Jalan Tol Berkelanjutan &amp; Tantangan Rekayasa Modern&rdquo;
                                    </a>
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-justify sm:text-left">
                                    Menghadirkan praktisi Kementerian PUPR dan pakar transportasi nasional untuk membekali civitas akademika dan mahasiswa teknik sipil dalam menyongsong standar rekayasa jalan tol modern, stabilisasi geoteknik tanah bermasalah, dan keselamatan konstruksi ramah lingkungan.
                                </p>
                            </div>

                            <div class="mt-5 pt-3.5 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                                <span class="text-[11px] text-slate-400">
                                    22 Oktober 2026 &bull; Fakultas Teknik UNSIL
                                </span>
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1.5 ml-auto transition">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    {{-- 6. Riset HATHI Segara Anakan --}}
                    <article class="prestasi-card bg-[#0B2A4A] text-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 shadow-md border border-blue-900/60 hover:border-amber-400/40 hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row gap-6 items-start group" data-category="publikasi">
                        <div class="w-full md:w-52 lg:w-56 shrink-0 flex flex-col items-center md:items-start">
                            <div class="w-full aspect-[4/3] md:aspect-square rounded-2xl overflow-hidden bg-slate-900 shadow">
                                <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="Kolaborasi Riset HATHI Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-white mt-3 text-center md:text-left leading-snug font-heading">
                                Sivitas Akademika Keairan
                            </h4>
                            <p class="text-xs font-semibold text-amber-400 mt-1 text-center md:text-left">
                                Teknik Sipil FT UNSIL
                            </p>
                            <p class="text-[11px] text-slate-300 mt-0.5 text-center md:text-left leading-tight">
                                Kolaborasi BBWS Citanduy &amp; HATHI Jawa Barat
                            </p>
                        </div>

                        <div class="flex-1 flex flex-col justify-between h-full w-full">
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-extrabold italic font-heading text-white leading-snug mb-3">
                                    <a href="{{ route('berita.hathi-segara-anakan') }}" class="hover:text-amber-300 transition">
                                        &ldquo;Konservasi Laguna Segara Anakan Berbasis Pemodelan Hidraulik Terapan&rdquo;
                                    </a>
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-justify sm:text-left">
                                    Keterlibatan aktif dosen dan mahasiswa Teknik Sipil UNSIL dalam riset ilmiah kolaboratif dan perumusan strategi penanganan sedimentasi kritis laguna Segara Anakan, mengintegrasikan analisis dinamika estuari dan pengendalian erosi daerah aliran sungai.
                                </p>
                            </div>

                            <div class="mt-5 pt-3.5 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                                <span class="text-[11px] text-slate-400">
                                    September 2024 &bull; Riset Terapan SDA
                                </span>
                                <a href="{{ route('berita.hathi-segara-anakan') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1.5 ml-auto transition">
                                    <span>Baca Berita</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
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

