@extends('layouts.app')

@section('title', 'Berita & Informasi Terkini | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Portal berita, informasi kegiatan akademik, prestasi mahasiswa, seminar, dan agenda resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).')

@section('content')
    <!-- 1. Page Header Banner -->
    <section class="relative min-h-[260px] sm:min-h-[300px] flex items-center bg-[#0B2A4A] text-white overflow-hidden border-b border-blue-950">
        <!-- Background Foto Kampus dengan Gradient Navy -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/gedung-unsil.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#071c32]/95 via-[#0B2A4A]/85 to-[#0B2A4A]/60"></div>
        
        <!-- Ornamen Corak Khas FT UNSIL -->
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 220px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-12 w-full">
            <!-- Breadcrumbs -->
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

    <!-- Corak Daun Pita Tipis -->
    <div class="h-3 bg-[#0a2038] border-b border-amber-400/20 overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 12px;"></div>
    </div>

    <!-- 2. Main News Content -->
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                <!-- KOLOM KIRI & TENGAH: Daftar Berita -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Berita Utama / Featured News -->
                    <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 group">
                        <div class="relative h-64 sm:h-80 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan NCKU" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                            
                            <div class="absolute top-4 left-4 flex items-center gap-2">
                                <span class="bg-blue-600 text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                                    <i class="fa-solid fa-star mr-1"></i> Berita Utama
                                </span>
                                <span class="bg-[#0B2A4A]/90 text-amber-300 text-[11px] font-bold px-3 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    Seminar Internasional
                                </span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-xs text-amber-300 font-semibold flex items-center gap-1.5 mb-1">
                                    <i class="fa-solid fa-calendar-day"></i> 12 Oktober 2026 &bull; Auditorium FT UNSIL
                                </span>
                                <h2 class="text-lg sm:text-2xl font-black font-heading leading-snug group-hover:text-amber-400 transition">
                                    Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL
                                </h2>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Program Studi S-1 Teknik Sipil FT Universitas Siliwangi menyelenggarakan seminar kolaborasi riset internasional menghadirkan pembicara Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) Taiwan, membahas riset gempa terapan serta peluang beasiswa studi lanjut S2 dan S3 bagi mahasiswa.
                            </p>
                            <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-400 flex items-center gap-1">
                                    <i class="fa-solid fa-user-pen text-blue-600"></i> Humas Teknik Sipil UNSIL
                                </span>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold px-4 py-2 rounded-xl shadow-sm transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Grid Berita Lainnya -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- Berita: Workshop Penguatan Kurikulum OBE -->
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
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> Jum'at, 27 November 2026
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

                        <!-- Berita 2: National Bridge Design Competition SCIENCE -->
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/event-3.jpg') }}" alt="National Bridge Design Competition SCIENCE" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                                    <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Kompetisi Mahasiswa
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 20 Desember 2025
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Babak Final National Bridge Design Competition SCIENCE di FT UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Kompetisi rancang jembatan berskala nasional yang diselenggarakan Himpunan Mahasiswa Sipil (HMS) FT UNSIL, mempertemukan talenta perancang jembatan dari universitas terkemuka.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">@hmsftunsil</span>
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        <!-- Berita 3: Kunjungan Bendungan Leuwikeris -->
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 flex flex-col justify-between group">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/event-1.jpg') }}" alt="Kunjungan Bendungan Leuwikeris" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                                    <span class="absolute top-3 left-3 bg-cyan-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                                        Kunjungan Lapangan
                                    </span>
                                </div>
                                <div class="p-5">
                                    <span class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mb-1.5">
                                        <i class="fa-solid fa-calendar-day text-[10px]"></i> 18 November 2025
                                    </span>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 transition">
                                        Kunjungan Ilmiah ke Proyek Strategis Bendungan Leuwikeris bersama BBWS
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                        Mahasiswa dan dosen pembimbing Teknik Sipil UNSIL meninjau langsung implementasi struktur bendungan urugan batu dan teknologi pelimpah air di Proyek Strategis Nasional Leuwikeris.
                                    </p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] text-slate-400">KBK Sumber Daya Air</span>
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900 group-hover:translate-x-0.5 transition">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </article>

                        <!-- Berita 4: Wisuda Sarjana Teknik Sipil -->
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

                        <!-- Berita 5: Kuliah Tamu BIM Infrastruktur -->
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

                    </div>
                </div>

                <!-- KOLOM KANAN: Sidebar -->
                <aside class="lg:col-span-1 space-y-6">

                    <!-- Box Agenda & Event Mendatang -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-4">
                            <h3 class="text-sm font-bold text-slate-900 flex items-center gap-2">
                                <i class="fa-solid fa-calendar-check text-[#0070BA]"></i>
                                <span>Agenda Mendatang</span>
                            </h3>
                            <span class="text-[10px] font-semibold bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full">
                                2026
                            </span>
                        </div>
                        <div class="space-y-4">
                            <!-- Agenda Workshop OBE Unggulan -->
                            <div class="p-3.5 rounded-xl bg-blue-50/80 border border-blue-200">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-bold text-blue-700 block uppercase">27 November 2026</span>
                                    <span class="text-[9px] font-bold text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full">Segera Hadir</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-900 mt-1">Workshop Kurikulum Berbasis OBE</h4>
                                <p class="text-[11px] text-slate-600 mt-0.5">Narasumber: Dr. Eng. Ir. Halwan Alfisa S. (UNS) &bull; Kampus 2 UNSIL</p>
                                <a href="{{ route('berita.workshop-obe') }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-blue-700 hover:text-blue-900 mt-2">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                </a>
                            </div>

                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-[10px] font-bold text-blue-700 block uppercase">12 &ndash; 15 April 2026</span>
                                <h4 class="text-xs font-bold text-slate-900 mt-0.5">Ujian Tengah Semester (UTS) Genap</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Pelaksanaan UTS Genap T.A. 2025/2026 seluruh angkatan.</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-[10px] font-bold text-emerald-700 block uppercase">01 &ndash; 10 Mei 2026</span>
                                <h4 class="text-xs font-bold text-slate-900 mt-0.5">Pendaftaran Seminar Proposal &amp; Sidang TA</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Verifikasi berkas persyaratan sidang skripsi periode kedua.</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-[10px] font-bold text-purple-700 block uppercase">Juni 2026</span>
                                <h4 class="text-xs font-bold text-slate-900 mt-0.5">Civil Expo &amp; Seminar Nasional 2026</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Pameran karya mahasiswa dan seminar nasional keteknikan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Box Media Sosial Resmi -->
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

                    <!-- Box Layanan Mahasiswa Cepat -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <h3 class="text-sm font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-link text-[#0070BA]"></i>
                            <span>Tautan Cepat</span>
                        </h3>
                        <ul class="space-y-2.5 text-xs text-slate-600">
                            <li>
                                <a href="{{ route('kurikulum') }}" class="hover:text-blue-700 flex items-center justify-between group py-1">
                                    <span>Kurikulum &amp; Silabus OBE</span>
                                    <i class="fa-solid fa-chevron-right text-[9px] text-slate-400 group-hover:text-blue-700"></i>
                                </a>
                            </li>
                            <li class="border-t border-slate-100 pt-2">
                                <a href="{{ route('layanan') }}" class="hover:text-blue-700 flex items-center justify-between group py-1">
                                    <span>Layanan Persuratan &amp; Akademik</span>
                                    <i class="fa-solid fa-chevron-right text-[9px] text-slate-400 group-hover:text-blue-700"></i>
                                </a>
                            </li>
                            <li class="border-t border-slate-100 pt-2">
                                <a href="{{ route('download') }}" class="hover:text-blue-700 flex items-center justify-between group py-1">
                                    <span>Download Buku Pedoman &amp; Format SK</span>
                                    <i class="fa-solid fa-chevron-right text-[9px] text-slate-400 group-hover:text-blue-700"></i>
                                </a>
                            </li>
                            <li class="border-t border-slate-100 pt-2">
                                <a href="{{ route('fasilitas') }}" class="hover:text-blue-700 flex items-center justify-between group py-1">
                                    <span>6 Laboratorium Kejuruan</span>
                                    <i class="fa-solid fa-chevron-right text-[9px] text-slate-400 group-hover:text-blue-700"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </aside>

            </div>
        </div>
    </section>
@endsection
