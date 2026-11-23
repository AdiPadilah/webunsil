@extends('layouts.app')

@section('title', 'Berita & Informasi Terkini | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Portal berita, informasi kegiatan akademik, prestasi mahasiswa, seminar, dan agenda resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).')

@section('content')
    
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
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
                Informasi resmi seputar seminar internasional, prestasi mahasiswa, kunjungan lapangan, riset keteknikan, dan agenda akademik Program Studi S-1 Teknik Sipil FT UNSIL.
            </p>
        </div>
    </section>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                
                <div class="lg:col-span-2 space-y-8">

                    
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

                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Ilmiah Bendungan Leuwikeris" class="w-full h-full object-cover  ">
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] text-slate-400 block mb-1">
                                        23 Oktober 2026
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        Himpunan Mahasiswa Sipil Universitas Siliwangi Perluas Wawasan Keteknikan melalui Kunjungan Ilmiah ke Bendungan Leuwikeris
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Rombongan HMS dan dosen Teknik Sipil UNSIL meninjau langsung struktur bendungan, instrumen rembesan, dan sistem pemantauan di Bendungan Leuwikeris bersama tim UPB.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    <span>Selengkapnya →</span>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Babak Final National Bridge Design Competition SCIENCE 2026" class="w-full h-full object-cover  ">
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] text-slate-400 block mb-1">
                                        20 Oktober 2026
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        Himpunan Mahasiswa Sipil FT-Unsil Selenggarakan Babak Final National Bridge Design Competition dalam Ajang Bergengsi SCIENCE 2026
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Kompetisi rancang jembatan nasional di Aula Gedung Teknik Sipil UNSIL mempertemukan tim perancang jembatan terbaik dari UNDIP dan Universitas Tidar.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    <span>Selengkapnya →</span>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan-cover.jpg') }}" alt="Seminar Internasional Bridging Futures Indonesia-Taiwan FT UNSIL" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] text-slate-400 block mb-1">
                                        12 Oktober 2026
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Narasumber Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) memaparkan peluang beasiswa S2/S3 dan riset gempa bagi lulusan Teknik Sipil FT UNSIL.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Kerja Sama NCKU</span>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    <span>Selengkapnya →</span>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-2.jpg') }}" alt="Dosen UNSIL Penguji Eksternal Seminar Hasil Disertasi UNS" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Riset &amp; Kolaborasi &bull; 29 Oktober 2026
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Dosen Teknik Sipil UNSIL Diundang sebagai Penguji Eksternal Seminar Hasil Disertasi di Pascasarjana FT UNS
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Pengakuan kompetensi keilmuan dosen UNSIL di tingkat nasional melalui peran sebagai penguji eksternal dalam sidang seminar hasil disertasi Program Doktor Teknik Sipil FT UNS, Surakarta.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Kolaborasi Nasional</span>
                                <a href="{{ route('berita.seminar-hasil-uns') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
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
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">@sipilunsil</span>
                                <a href="{{ route('berita.workshop-obe') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
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
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Akademik &amp; Industri</span>
                                <a href="{{ route('berita.kuliah-tamu-bim') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
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
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Alumni S-1 Sipil</span>
                                <a href="{{ route('berita.wisuda-sarjana') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
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
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.fahmi-rahmat') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
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
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.muhammad-raka') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana Juara 1 NPC 2023" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Prestasi Kompetisi &bull; 9 November 2023
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Tim Tirta Adhipermana Teknik Sipil UNSIL Menyabet Juara 1 National Paper Competition 2023 di Aceh
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Menyisihkan 81 peserta dari seluruh Indonesia dalam AISCE 2023, tim ini membawa topik inovatif sumur artesis sebagai solusi krisis air bersih pasca-gempa bumi.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.tirta-adhipermana') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
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
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.hathi-segara-anakan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar Nasional HATHI Sumber Daya Air Berkelanjutan 2024" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5">
                                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                                        Seminar Ilmiah &bull; 3 Juni 2024
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Seminar Nasional Perdana HATHI: Pemanfaatan Teknologi Modern untuk Pengelolaan Sumber Daya Air Berkelanjutan
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        HATHI Cabang Banjar bersama Jurusan Teknik Sipil UNSIL menyelenggarakan seminar nasional perdana yang mempertemukan pakar, akademisi, dan pemangku kebijakan sumber daya air.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Liputan unsil.ac.id</span>
                                <a href="{{ route('berita.seminar-hathi-air') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

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

                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:shadow-sm transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-bold text-slate-700 block uppercase">15 &ndash; 24 Desember 2026</span>
                                    <span class="text-[10px] font-medium text-slate-500">Mendatang</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-900 mt-1 leading-snug">
                                    Ujian Akhir Semester (UAS) Ganjil T.A. 2026/2027
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Pelaksanaan evaluasi akhir semester seluruh mata kuliah keahlian teknik sipil.
                                </p>
                                <span class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-400 mt-2">-</span>
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

