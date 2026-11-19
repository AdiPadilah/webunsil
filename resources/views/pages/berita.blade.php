@extends('layouts.app')

@section('title', 'Berita & Informasi Terkini | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Portal berita, informasi kegiatan akademik, prestasi mahasiswa, seminar, dan agenda resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).')

@section('content')
    
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
                <span class="text-amber-400 font-bold">Berita &amp; Informasi</span>
            </nav>

            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Kabar Terkini Sivitas Akademika
            </span>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Berita &amp; Informasi
            </h1>
            <p class="text-slate-200 text-xs sm:text-sm md:text-base mt-2 max-w-2xl leading-relaxed">
                Informasi resmi seputar seminar internasional, prestasi mahasiswa, kunjungan lapangan, riset keteknikan, dan agenda akademik Program Studi S-1 Teknik Sipil FT UNSIL.
            </p>
        </div>
    </section>

    
    <div class="h-3 bg-[#0a2038] border-b border-amber-400/20 overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 12px;"></div>
    </div>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                
                <div class="lg:col-span-2 space-y-8">

                    
                    <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 group">
                        <div class="relative h-64 sm:h-80 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional SCIENCE 2026 Jalan Tol Berkelanjutan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                            
                            <div class="absolute top-4 left-4 flex flex-wrap items-center gap-2">
                                <span class="bg-blue-600 text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                                    <i class="fa-solid fa-star mr-1"></i> Berita Utama
                                </span>
                                <span class="bg-[#0B2A4A]/90 text-amber-300 text-[11px] font-bold px-3 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-newspaper mr-1"></i> Liputan unsil.ac.id
                                </span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-xs text-amber-300 font-semibold flex items-center gap-1.5 mb-1">
                                    <i class="fa-solid fa-calendar-day"></i> 20 Oktober 2026 &bull; Auditorium Rektorat UNSIL
                                </span>
                                <h2 class="text-lg sm:text-2xl font-black font-heading leading-snug group-hover:text-amber-400 transition">
                                    Seminar Nasional SCIENCE 2026 Himpunan Mahasiswa Sipil UNSIL Angkat Strategi Pembangunan Jalan Tol Berkelanjutan
                                </h2>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi menggelar Seminar Nasional bertajuk “Managing the Future for a Greater Indonesia” dengan menghadirkan praktisi BUMN PT Adhi Karya (Persero) Tbk. guna mengupas strategi konstruksi jalan tol berkelanjutan serta pengumuman pemenang National Bridge Design Competition.
                            </p>
                            <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 flex items-center gap-1.5">
                                    <i class="fa-solid fa-shield-halved text-[#0070BA]"></i> Sumber Resmi: <strong>unsil.ac.id</strong>
                                </span>
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold px-4 py-2 rounded-xl shadow-sm transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Ilmiah Bendungan Leuwikeris" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-cyan-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 23 Oktober 2026
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Himpunan Mahasiswa Sipil Universitas Siliwangi Perluas Wawasan Keteknikan melalui Kunjungan Ilmiah ke Bendungan Leuwikeris
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Rombongan HMS dan dosen Teknik Sipil UNSIL meninjau langsung struktur bendungan, instrumen rembesan, dan sistem peringatan dini di Bendungan Leuwikeris bersama tim UPB.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">KBK Keairan &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Babak Final National Bridge Design Competition SCIENCE 2026" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 20 Oktober 2026
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Himpunan Mahasiswa Sipil FT-Unsil Selenggarakan Babak Final National Bridge Design Competition dalam Ajang Bergengsi SCIENCE 2026
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Kompetisi rancang jembatan nasional di Aula Gedung Teknik Sipil UNSIL mempertemukan tim perancang jembatan terbaik dari UNDIP dan Universitas Tidar.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">@hmsftunsil &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-[#0B2A4A] text-amber-400 text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Seminar Internasional
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 12 Oktober 2026
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Narasumber Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) memaparkan peluang beasiswa S2/S3 dan riset gempa bagi lulusan Teknik Sipil FT UNSIL.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Kolaborasi Internasional</span>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Workshop Penguatan Kurikulum OBE" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-[#0070BA] text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Agenda Workshop
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 27 November 2026
                                    </span>
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

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Kuliah Tamu BIM" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                                    <span class="absolute top-3 left-3 bg-purple-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Kuliah Tamu
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 08 Januari 2026
                                    </span>
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

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pelepasan Calon Wisudawan Teknik Sipil" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                                    <span class="absolute top-3 left-3 bg-emerald-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Wisuda &amp; Alumni
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 24 Oktober 2025
                                    </span>
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

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat Amanulloh Mahasiswa Teknik Sipil UNSIL" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-emerald-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 23 Oktober 2025
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        "Mahasiswa Ajaib" dari UNSIL: Fahmi Rahmat Amanulloh Tembus 3 Jurnal Scopus &amp; 2 Nasional di Semester 7
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Mahasiswa semester 7 Teknik Sipil UNSIL ini mencetak rekor dengan 5 publikasi ilmiah sebelum lulus — termasuk Scopus Q1 di Journal of Natural Hazards Research.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Prestasi Riset &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.fahmi-rahmat') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka El Ghifari Lulusan Teknik Sipil UNSIL" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-emerald-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 22 Agustus 2025
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Lulusan Teknik Sipil UNSIL Taklukkan Dua Jurnal Internasional Bereputasi Scopus: Muhammad Raka El Ghifari
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Putra Garut kelahiran 2003 ini membuktikan bahwa mimpi besar bisa lahir dari kampus daerah dengan dua publikasi Scopus dan satu artikel Sinta sebelum wisuda.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Prestasi Riset &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.muhammad-raka') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana Juara 1 NPC 2023" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 9 November 2023
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Tim Tirta Adhipermana Teknik Sipil UNSIL Menyabet Juara 1 National Paper Competition 2023 di Aceh
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Menyisihkan 81 peserta dari seluruh Indonesia dalam AISCE 2023, tim ini membawa topik inovatif sumur artesis sebagai solusi krisis air bersih pasca-gempa bumi.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Prestasi Kompetisi &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.tirta-adhipermana') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="HATHI FGD Sedimentasi Segara Anakan Teknik Sipil UNSIL" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-cyan-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 22 Maret 2024
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Pelantikan HATHI Cabang Banjar &amp; FGD Penanganan Sedimentasi Segara Anakan bersama Teknik Sipil UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        BBWS Citanduy berkolaborasi dengan Jurusan Teknik Sipil UNSIL dalam FGD bertema Sedimentasi Laguna Segara Anakan, memperingati Hari Air Dunia ke-32.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Kolaborasi &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.hathi-segara-anakan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar Nasional HATHI Sumber Daya Air Berkelanjutan 2024" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-blue-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Liputan unsil.ac.id
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 3 Juni 2024
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Seminar Nasional Perdana HATHI: Pemanfaatan Teknologi Modern untuk Pengelolaan Sumber Daya Air Berkelanjutan
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        HATHI Cabang Banjar bersama Jurusan Teknik Sipil UNSIL menyelenggarakan seminar nasional perdana yang mempertemukan pakar, akademisi, dan pemangku kebijakan sumber daya air.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">Seminar &bull; unsil.ac.id</span>
                                <a href="{{ route('berita.seminar-hathi-air') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                    </div>
                </div>

                
                <aside class="lg:col-span-1 space-y-6">

                    
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
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
                                    <span class="text-[9px] font-bold text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full">Segera Hadir</span>
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
                                    <span class="text-[10px] font-bold text-indigo-700 block uppercase">15 &ndash; 24 Desember 2026</span>
                                    <span class="text-[9px] font-bold text-indigo-700 bg-indigo-50 border border-indigo-200 px-2 py-0.5 rounded-full">Mendatang</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-900 mt-1 leading-snug">
                                    Ujian Akhir Semester (UAS) Ganjil T.A. 2026/2027
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">
                                    Pelaksanaan evaluasi akhir semester seluruh mata kuliah keahlian teknik sipil.
                                </p>
                            </div>
                        </div>

                        
                        <div id="panel-agenda-selesai" class="hidden space-y-3">
                            
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 opacity-90 hover:opacity-100 transition">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-semibold text-slate-500 block uppercase">12 Oktober 2026</span>
                                    <span class="text-[9px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <i class="fa-solid fa-check text-[8px]"></i> Selesai
                                    </span>
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
                                    <span class="text-[9px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <i class="fa-solid fa-check text-[8px]"></i> Selesai
                                    </span>
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
                                    <span class="text-[9px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <i class="fa-solid fa-check text-[8px]"></i> Selesai
                                    </span>
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
                                    <span class="text-[9px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <i class="fa-solid fa-check text-[8px]"></i> Selesai
                                    </span>
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

                    
                    <div class="bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] rounded-2xl p-6 text-white shadow-md">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block mb-1">Kanal Resmi</span>
                        <h3 class="text-base font-bold">Instagram @sipilunsil</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">
                            Dapatkan liputan foto kegiatan harian, pengumuman perkuliahan cepat, dan dokumentasi akademik melalui akun Instagram resmi kami.
                        </p>
                        <a href="https://instagram.com/sipilunsil" target="_blank" class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-rose-600 hover:from-pink-600 hover:to-rose-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow transition w-full justify-center">
                            <i class="fa-brands fa-instagram text-sm"></i>
                            <span>Follow @sipilunsil</span>
                        </a>
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
