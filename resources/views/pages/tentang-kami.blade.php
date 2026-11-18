@extends('layouts.app')

@section('title', 'Tentang Kami | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Profil lengkap, sambutan pimpinan, struktur organisasi, visi misi, sejarah, serta akreditasi Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    <!-- 1. Page Header Banner (Gaya ITS: Hero Banner Gedung Kampus + Breadcrumb + Judul) -->
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
                    <i class="fa-solid fa-house text-[11px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-amber-400 font-bold">Tentang Kami</span>
            </nav>

            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Profil &amp; Identitas Program Studi
            </span>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Tentang Kami
            </h1>
            <p class="text-slate-200 text-xs sm:text-sm md:text-base mt-2 max-w-2xl leading-relaxed">
                Mengenal lebih dekat Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi — komitmen pada integritas keilmuan, keunggulan pendidikan keteknikan, dan dedikasi pembangunan berkelanjutan.
            </p>
        </div>
    </section>

    <!-- Corak Daun Pita Tipis -->
    <div class="h-3 bg-[#0a2038] border-b border-amber-400/20 overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 12px;"></div>
    </div>

    <!-- 2. Main Layout Container (2 Kolom Kartu Navigasi + 1 Kolom Sidebar Berita Sesuai Desain ITS) -->
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                
                <!-- KOLOM KIRI & TENGAH: 6 Kartu Utama (Grid 2 Kolom Gaya ITS) -->
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- KARTU 1: Sambutan Koordinator Program Studi -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Sambutan Koordinator Program Studi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-bullhorn mr-1"></i> Kepemimpinan
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Sambutan Koordinator Prodi
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Penyampaian visi kepemimpinan, komitmen mutu tridharma perguruan tinggi, serta arah strategis pengembangan sarjana Teknik Sipil FT UNSIL yang berdaya saing.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <button type="button" onclick="openModal('modal-sambutan')" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- KARTU 2: Struktur Organisasi -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/daftar-dosen.png') }}" alt="Struktur Organisasi" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-sitemap mr-1"></i> Organisasi
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Struktur Organisasi
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Bagan kepemimpinan jurusan, pengelola 6 unit laboratorium, 4 kelompok bidang keahlian (KBK), dan seluruh jajaran dosen serta staf administrasi.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <a href="{{ route('dosen') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- KARTU 3: Visi dan Misi -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Visi dan Misi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-bullseye mr-1"></i> Visi 2030
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Visi dan Misi
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Menjadi pusat keunggulan dalam pengembangan ilmu Teknik Sipil berwawasan kebangsaan dan berkarakter wirausaha tingkat nasional pada tahun 2030.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <a href="{{ route('visi-misi') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- KARTU 4: Sejarah -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" alt="Sejarah Program Studi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-landmark mr-1"></i> Sejak 1984
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Sejarah Program Studi
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Rekam jejak perjalanan lebih dari 4 dekade sejak berdirinya Jurusan Teknik Sipil tahun 1984, penegerian UNSIL tahun 2014, hingga kampus modern Mugarsari.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <a href="{{ route('sejarah') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- KARTU 5: Departemen dalam Angka -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Program Studi dalam Angka" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-chart-simple mr-1"></i> Statistik
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Prodi dalam Angka
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Statistik capaian: 144 SKS kurikulum OBE, 8 semester, 6 laboratorium terpadu, 18+ dosen bersertifikasi, dan 800+ alumni berkarya aktif.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <button type="button" onclick="openModal('modal-angka')" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- KARTU 6: Akreditasi -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/lab-civil.jpg') }}" alt="Akreditasi Program Studi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-award mr-1"></i> LAM Teknik
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Akreditasi &amp; Penjaminan Mutu
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Terakreditasi BAIK oleh Lembaga Akreditasi Mandiri Program Studi Keteknikan (LAM Teknik) No. 0182/SK/LAM Teknik/AS/VIII/2023.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <button type="button" onclick="openModal('modal-akreditasi')" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- KOLOM KANAN: Sidebar Berita Terkini (Persis Seperti Desain ITS) -->
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-slate-200">
                        <!-- Header Sidebar -->
                        <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-5">
                            <h2 class="text-base font-bold text-slate-900 flex items-center gap-2">
                                <i class="fa-solid fa-newspaper text-[#0070BA]"></i>
                                <span>Berita Terkini</span>
                            </h2>
                            <span class="text-[10px] font-semibold bg-blue-50 text-blue-700 px-2.5 py-0.5 rounded-full">
                                Update
                            </span>
                        </div>

                        <!-- Daftar Berita Sidebar (Gaya ITS) -->
                        <div class="space-y-4">

                            <!-- Item Berita 1 -->
                            <article class="flex gap-3.5 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Taiwan" class="w-20 h-20 rounded-xl object-cover flex-shrink-0 bg-slate-100 group-hover:opacity-90 transition">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[10px] font-semibold text-amber-600 block uppercase tracking-wide">
                                        15 Januari 2026
                                    </span>
                                    <a href="{{ route('berita.seminar-taiwan') }}" class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5 transition block">
                                        Seminar Internasional Indonesia - Taiwan: Inovasi Struktur Tahan Gempa
                                    </a>
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                        Kolaborasi riset antara Teknik Sipil UNSIL dan National Cheng Kung University (NCKU) Taiwan.
                                    </p>
                                </div>
                            </article>

                            <!-- Item Berita 2 -->
                            <article class="flex gap-3.5 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <img src="{{ asset('images/event-1.jpg') }}" alt="Kunjungan Industri" class="w-20 h-20 rounded-xl object-cover flex-shrink-0 bg-slate-100 group-hover:opacity-90 transition">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[10px] font-semibold text-amber-600 block uppercase tracking-wide">
                                        08 Januari 2026
                                    </span>
                                    <a href="{{ route('home') }}#berita" class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5 transition block">
                                        Kuliah Tamu Building Information Modelling (BIM) untuk Infrastruktur Modern
                                    </a>
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                        Menghadirkan praktisi BUMN Konstruksi guna membekali kompetensi digital engineering mahasiswa.
                                    </p>
                                </div>
                            </article>

                            <!-- Item Berita 3 -->
                            <article class="flex gap-3.5 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <img src="{{ asset('images/event-2.jpg') }}" alt="Prestasi Mahasiswa" class="w-20 h-20 rounded-xl object-cover flex-shrink-0 bg-slate-100 group-hover:opacity-90 transition">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[10px] font-semibold text-amber-600 block uppercase tracking-wide">
                                        20 Desember 2025
                                    </span>
                                    <a href="{{ route('home') }}#berita" class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5 transition block">
                                        Mahasiswa Teknik Sipil UNSIL Sabet Juara di Kompetisi Jembatan Nasional
                                    </a>
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                        Karya inovasi jembatan ramah lingkungan berhasil menembus podium 3 besar universitas nasional.
                                    </p>
                                </div>
                            </article>

                        </div>

                        <!-- Tombol Biru di Bawah Sidebar Persis Gaya ITS -->
                        <div class="pt-3">
                            <a href="{{ route('home') }}#berita" class="block w-full py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold text-center rounded-xl transition shadow-sm hover:shadow">
                                Lihat Semua Berita
                            </a>
                        </div>
                    </div>

                    <!-- Kotak Informasi Cepat Tambahan -->
                    <div class="bg-gradient-to-br from-[#0B2A4A] to-[#071c32] rounded-2xl p-6 text-white shadow-md border border-blue-900">
                        <div class="flex items-center gap-2 text-amber-400 text-xs font-bold uppercase tracking-wider mb-2">
                            <i class="fa-solid fa-headset"></i> Layanan Informasi
                        </div>
                        <h3 class="text-sm font-bold text-white">Butuh Informasi Akademik?</h3>
                        <p class="text-slate-300 text-xs mt-1 leading-relaxed">
                            Sekretariat Program Studi S-1 Teknik Sipil FT UNSIL melayani konsultasi akademik, surat pengantar, dan administrasi perkuliahan.
                        </p>
                        <a href="{{ route('layanan') }}" class="inline-flex items-center gap-1.5 mt-4 text-xs font-bold text-amber-400 hover:text-amber-300">
                            <span>Hubungi Layanan Terpadu</span>
                            <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MODAL 1: Sambutan Koordinator Program Studi -->
    <div id="modal-sambutan" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-gradient-to-r from-[#0B2A4A] to-[#133E6C] p-6 text-white rounded-t-3xl">
                <button type="button" onclick="closeModal('modal-sambutan')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <span class="text-amber-400 text-[10px] font-bold uppercase tracking-widest block">Pimpinan Program Studi</span>
                <h3 class="text-xl font-bold mt-1">Sambutan Koordinator Program Studi</h3>
            </div>
            <div class="p-6 sm:p-8 space-y-4 text-sm text-slate-700 leading-relaxed">
                <div class="flex items-center gap-4 pb-4 border-b border-slate-100">
                    <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" class="w-16 h-16 rounded-2xl object-cover border-2 border-amber-400">
                    <div>
                        <h4 class="font-bold text-slate-900 text-base">Koordinator Program Studi S-1 Teknik Sipil</h4>
                        <p class="text-xs text-slate-500">Fakultas Teknik Universitas Siliwangi</p>
                    </div>
                </div>
                <p>
                    <em>Assalamu’alaikum Warahmatullahi Wabarakatuh, Salam Sejahtera untuk Kita Semua.</em>
                </p>
                <p>
                    Selamat datang di website resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi. Sebagai bagian integral dari universitas kebanggaan masyarakat Priangan Timur, kami senantiasa berikhtiar menyelenggarakan pendidikan tinggi keteknikan yang adaptif terhadap perkembangan ilmu pengetahuan, teknologi terapan, dan dinamika industri infrastruktur masa kini.
                </p>
                <p>
                    Kurikulum kami dirancang berbasis <em>Outcome-Based Education</em> (OBE) yang terintegrasi dengan pembelajaran praktik di 6 laboratorium kejuruan serta magang industri. Kami membekali mahasiswa tidak hanya dengan kepiawaian kalkulasi struktural, geoteknik, dan manajemen konstruksi, namun juga etika keinsinyuran serta jiwa kewirausahaan kebangsaan.
                </p>
                <p class="font-medium text-slate-900">
                    Mari bersama-sama membangun peradaban bangsa melalui karya infrastruktur yang tangguh, lestari, dan bermartabat.
                </p>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-3xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-sambutan')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-xl transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- MODAL 2: Program Studi dalam Angka -->
    <div id="modal-angka" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-gradient-to-r from-[#0B2A4A] to-[#133E6C] p-6 text-white rounded-t-3xl">
                <button type="button" onclick="closeModal('modal-angka')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <span class="text-amber-400 text-[10px] font-bold uppercase tracking-widest block">Data &amp; Statistik</span>
                <h3 class="text-xl font-bold mt-1">Program Studi dalam Angka</h3>
            </div>
            <div class="p-6 sm:p-8 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <span class="block text-3xl font-black text-[#0070BA]">144</span>
                        <span class="text-xs text-slate-600 font-medium">Beban SKS Kelulusan</span>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <span class="block text-3xl font-black text-[#0070BA]">8</span>
                        <span class="text-xs text-slate-600 font-medium">Semester Masa Tempuh</span>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <span class="block text-3xl font-black text-amber-500">6</span>
                        <span class="text-xs text-slate-600 font-medium">Laboratorium Spesifik</span>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <span class="block text-3xl font-black text-amber-500">18+</span>
                        <span class="text-xs text-slate-600 font-medium">Dosen &amp; Praktisi Ahli</span>
                    </div>
                </div>
                <div class="bg-blue-50 p-4 rounded-2xl border border-blue-100 text-xs text-blue-900 leading-relaxed">
                    <i class="fa-solid fa-circle-info mr-1 text-[#0070BA]"></i>
                    Lulusan Teknik Sipil FT UNSIL telah terserap di berbagai instansi kementerian PUPR, konsultan perencana, kontraktor BUMN/swasta, perbankan, dan wirausaha jasa konstruksi nasional.
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-3xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-angka')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-xl transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- MODAL 3: Akreditasi -->
    <div id="modal-akreditasi" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-gradient-to-r from-[#0B2A4A] to-[#133E6C] p-6 text-white rounded-t-3xl">
                <button type="button" onclick="closeModal('modal-akreditasi')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <span class="text-amber-400 text-[10px] font-bold uppercase tracking-widest block">Sertifikasi &amp; Legalitas</span>
                <h3 class="text-xl font-bold mt-1">Status Akreditasi LAM Teknik</h3>
            </div>
            <div class="p-6 sm:p-8 space-y-4 text-sm text-slate-700 leading-relaxed">
                <div class="bg-emerald-50 border border-emerald-200 p-4 rounded-2xl flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div>
                        <span class="block text-xs font-bold text-emerald-800 uppercase tracking-wide">Peringkat Akreditasi</span>
                        <span class="block text-lg font-black text-emerald-900">BAIK (LAM Teknik)</span>
                    </div>
                </div>
                <div class="space-y-2 text-xs text-slate-600">
                    <p><strong>Lembaga:</strong> Lembaga Akreditasi Mandiri Program Studi Keteknikan (LAM Teknik)</p>
                    <p><strong>Jenjang Program:</strong> Sarjana (S-1)</p>
                    <p><strong>Program Studi:</strong> Teknik Sipil, Fakultas Teknik Universitas Siliwangi</p>
                    <p><strong>Masa Berlaku:</strong> Hingga 20 Agustus 2028</p>
                </div>
                <div class="pt-3">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-[#0B2A4A] hover:bg-blue-900 text-white text-xs font-semibold rounded-xl transition">
                        <i class="fa-solid fa-file-arrow-down text-amber-400"></i> Unduh Salinan Sertifikat Akreditasi
                    </a>
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-3xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-akreditasi')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-xl transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>
@endsection
