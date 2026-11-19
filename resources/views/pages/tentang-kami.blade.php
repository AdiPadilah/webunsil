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

    <!-- 2. Main Content Container (Full Width Sambutan & Kartu + Berita di Bagian Bawah) -->
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- 1. Sambutan Koordinator Prodi (Layout Horizontal Lebar Penuh: Penjelasan di Pinggir Foto Tanpa Panel Modal) -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-md border border-slate-200">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    <!-- Foto di Samping Kiri -->
                    <div class="lg:col-span-4 md:col-span-5 relative min-h-[300px] lg:min-h-full bg-slate-900 overflow-hidden">
                        <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" 
                             alt="Koordinator Program Studi Teknik Sipil FT UNSIL" 
                             class="w-full h-full object-cover min-h-[300px] lg:min-h-[420px]"
                             onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/90 via-[#0B2A4A]/30 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#0B2A4A]/90 text-amber-400 text-[11px] font-bold px-3 py-1 rounded-full backdrop-blur-sm border border-amber-400/30 shadow-md">
                                <i class="fa-solid fa-bullhorn text-[10px]"></i> Kepemimpinan
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h4 class="text-sm sm:text-base font-bold text-white leading-tight">Koordinator Program Studi</h4>
                            <p class="text-xs text-slate-300">S-1 Teknik Sipil FT UNSIL</p>
                        </div>
                    </div>

                    <!-- Penjelasan Sambutan di Pinggirnya Langsung (Lebar & Leluasa) -->
                    <div class="lg:col-span-8 md:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                                <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Pimpinan Program Studi</span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-black text-[#0B2A4A] font-heading leading-tight mb-4">
                                Sambutan Koordinator Program Studi
                            </h2>
                            
                            <div class="text-sm sm:text-[15px] text-slate-600 space-y-3.5 leading-relaxed">
                                <p class="italic font-medium text-slate-800">
                                    Assalamu’alaikum Warahmatullahi Wabarakatuh, Salam Sejahtera untuk Kita Semua.
                                </p>
                                <p>
                                    Selamat datang di website resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi. Kami senantiasa berikhtiar menyelenggarakan pendidikan tinggi keteknikan yang adaptif terhadap perkembangan ilmu pengetahuan, teknologi terapan, dan dinamika industri infrastruktur masa kini.
                                </p>
                                <p>
                                    Kurikulum kami dirancang berbasis <em>Outcome-Based Education</em> (OBE) yang terintegrasi dengan pembelajaran praktik di 6 laboratorium kejuruan serta magang industri. Kami membekali mahasiswa dengan kepiawaian kalkulasi struktural, geoteknik, dan manajemen konstruksi, serta integritas etika keinsinyuran dan jiwa kewirausahaan kebangsaan.
                                </p>
                                <p class="font-medium text-slate-900">
                                    Mari bersama-sama membangun peradaban bangsa melalui karya infrastruktur yang tangguh, inovatif, dan berkelanjutan.
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 pt-5 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center gap-2 text-xs text-slate-500 font-semibold">
                                <i class="fa-solid fa-building-columns text-amber-500 text-sm"></i>
                                <span>Fakultas Teknik Universitas Siliwangi</span>
                            </div>
                            <a href="{{ route('visi-misi') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 hover:bg-blue-100 text-[#0070BA] hover:text-[#005a96] text-xs font-bold rounded-xl transition">
                                <span>Visi &amp; Misi Prodi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Kartu Sejarah & Akreditasi (Grid 2 Kolom Lebar Penuh) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- KARTU 1: Sejarah -->
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

                <!-- KARTU 2: Akreditasi -->
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

            <!-- 3. BAGIAN BERITA TERKINI (DIPINDAH KE BAWAH: TAMPIL DALAM GRID 3 KOLOM) -->
            <div class="space-y-6 pt-4">
                <!-- Header Berita -->
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-4 border-b border-slate-200">
                    <div>
                        <div class="flex items-center gap-2 mb-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Warta Sivitas Akademika</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black text-[#0B2A4A] font-heading tracking-tight flex items-center gap-2.5">
                            <i class="fa-solid fa-newspaper text-[#0070BA] text-xl sm:text-2xl"></i>
                            <span>Berita Terkini</span>
                        </h2>
                    </div>
                    <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 px-4 py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold rounded-xl shadow-sm hover:shadow transition w-fit">
                        <span>Lihat Semua Berita</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <!-- Grid 3 Kolom Berita Terkini -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Berita 1 -->
                    <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Taiwan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                <i class="fa-regular fa-calendar-days mr-1"></i> 15 Januari 2026
                            </div>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-700 transition line-clamp-2 leading-snug">
                                    <a href="{{ route('berita.seminar-taiwan') }}">
                                        Seminar Internasional Indonesia - Taiwan: Inovasi Struktur Tahan Gempa
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                    Kolaborasi riset antara Teknik Sipil UNSIL dan National Cheng Kung University (NCKU) Taiwan dalam pengembangan infrastruktur tahan bencana gempa.
                                </p>
                            </div>
                            <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] font-semibold text-amber-600">Seminar Internasional</span>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] hover:text-[#005a96] transition">
                                    <span>Baca Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Berita 2 -->
                    <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Kuliah Tamu BIM" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                <i class="fa-regular fa-calendar-days mr-1"></i> 08 Januari 2026
                            </div>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-700 transition line-clamp-2 leading-snug">
                                    <a href="{{ route('berita.kuliah-tamu-bim') }}">
                                        Kuliah Tamu Building Information Modelling (BIM) untuk Infrastruktur Modern
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                    Menghadirkan praktisi BUMN Konstruksi guna membekali kompetensi digital engineering dan implementasi BIM multidimensi kepada mahasiswa.
                                </p>
                            </div>
                            <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] font-semibold text-blue-600">Kuliah Tamu</span>
                                <a href="{{ route('berita.kuliah-tamu-bim') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] hover:text-[#005a96] transition">
                                    <span>Baca Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Berita 3 -->
                    <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-2.jpg') }}" alt="Prestasi Kompetisi Jembatan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                <i class="fa-regular fa-calendar-days mr-1"></i> 20 Desember 2025
                            </div>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-700 transition line-clamp-2 leading-snug">
                                    <a href="{{ route('berita.kompetisi-jembatan') }}">
                                        Mahasiswa Teknik Sipil UNSIL Sabet Juara di Kompetisi Jembatan Nasional
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                                    Karya inovasi jembatan ramah lingkungan berhasil menembus podium 3 besar nasional, membuktikan daya saing riset rekayasa mahasiswa.
                                </p>
                            </div>
                            <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] font-semibold text-emerald-600">Prestasi Mahasiswa</span>
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] hover:text-[#005a96] transition">
                                    <span>Baca Selengkapnya</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            </div>

        </div>
    </section>

    <!-- MODAL: Akreditasi -->
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
