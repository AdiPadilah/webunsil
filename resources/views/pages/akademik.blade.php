@extends('layouts.app')

@section('title', 'Akademik | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Pusat informasi akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi — kurikulum OBE, peraturan & kalender akademik, layanan terpadu, dan unduhan.')

@section('content')
    <!-- 1. Header Banner (Gaya ITS: Hero Banner Aktivitas Mahasiswa/Kampus + Breadcrumb + Judul) -->
    <section class="relative min-h-[260px] sm:min-h-[300px] flex items-center bg-[#0B2A4A] text-white overflow-hidden border-b border-blue-950">
        <!-- Background Foto Aktivitas Mahasiswa Keteknikan / Kampus -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hms-unsil.jpg') }}');"></div>
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
                <span class="text-amber-400 font-bold">Akademik</span>
            </nav>

            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Pendidikan &amp; Pembelajaran
            </span>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Akademik
            </h1>
            <p class="text-slate-200 text-xs sm:text-sm md:text-base mt-2 max-w-2xl leading-relaxed">
                Penyelenggaraan pendidikan tinggi keteknikan unggul dengan kurikulum Outcome-Based Education (OBE), 6 laboratorium kejuruan terpadu, dan bimbingan akademik berkelanjutan.
            </p>
        </div>
    </section>

    <!-- Corak Daun Pita Tipis -->
    <div class="h-3 bg-[#0a2038] border-b border-amber-400/20 overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 12px;"></div>
    </div>

    <!-- 2. Main Layout Container (Kartu Navigasi Utama + Sidebar Informasi Sesuai Desain ITS) -->
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                
                <!-- KOLOM KIRI & TENGAH: Kartu-Kartu Akademik Utama (Grid 2 Kolom Gaya ITS) -->
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- KARTU 1: Program Studi -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/lab-civil.jpg') }}" alt="Program Studi Teknik Sipil" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-graduation-cap mr-1"></i> Sarjana (S-1)
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Program Studi
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Program Studi S-1 Teknik Sipil menyediakan program studi sarjana (S1) dengan kurikulum 144 SKS berbasis Outcome-Based Education (OBE) dan 4 bidang keahlian rekayasa sipil.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <a href="{{ route('kurikulum') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- KARTU 2: Peraturan dan Informasi -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col group">
                            <div class="relative h-48 overflow-hidden bg-slate-200">
                                <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Peraturan dan Informasi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute top-3 left-3 bg-[#0B2A4A]/90 text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-sm border border-amber-400/30">
                                    <i class="fa-solid fa-book-bookmark mr-1"></i> Regulasi
                                </div>
                            </div>
                            <div class="bg-[#0B2A4A] p-5 text-white flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-amber-400 transition">
                                        Peraturan dan Informasi
                                    </h3>
                                    <p class="text-xs sm:text-[13px] text-slate-300 mt-2 leading-relaxed line-clamp-3">
                                        Temukan informasi mengenai peraturan, informasi akademik, pedoman tugas akhir/skripsi, dan kalender akademik Program Studi Teknik Sipil.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <button type="button" onclick="openModal('modal-regulasi')" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- KOLOM KANAN: Sidebar Informasi & Agenda (Persis Seperti Desain ITS) -->
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-slate-200">
                        <!-- Header Sidebar -->
                        <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-5">
                            <h2 class="text-base font-bold text-slate-900 flex items-center gap-2">
                                <i class="fa-solid fa-bell text-[#0070BA]"></i>
                                <span>Informasi Akademik</span>
                            </h2>
                            <span class="text-[10px] font-semibold bg-blue-50 text-blue-700 px-2.5 py-0.5 rounded-full">
                                Terbaru
                            </span>
                        </div>

                        <!-- Daftar Berita / Agenda Sidebar (Gaya ITS) -->
                        <div class="space-y-4">

                            <!-- Item 1: Wisuda / Prestasi -->
                            <article class="flex gap-3.5 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Wisuda Sarjana" class="w-20 h-20 rounded-xl object-cover flex-shrink-0 bg-slate-100 group-hover:opacity-90 transition">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[10px] font-semibold text-amber-600 block uppercase tracking-wide">
                                        24 Oktober 2025
                                    </span>
                                    <a href="{{ route('home') }}#berita" class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5 transition block">
                                        Selamat dan Sukses Wisuda Sarjana Teknik Sipil FT Universitas Siliwangi
                                    </a>
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                        Pelepasan lulusan sarjana teknik sipil siap berkarya di industri konstruksi nasional dan BUMN.
                                    </p>
                                </div>
                            </article>

                            <!-- Item 2: Seminar Skripsi & Tugas Akhir -->
                            <article class="flex gap-3.5 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <img src="{{ asset('images/event-3.jpg') }}" alt="Seminar Tugas Akhir" class="w-20 h-20 rounded-xl object-cover flex-shrink-0 bg-slate-100 group-hover:opacity-90 transition">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[10px] font-semibold text-amber-600 block uppercase tracking-wide">
                                        12 Januari 2026
                                    </span>
                                    <a href="{{ route('layanan') }}" class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5 transition block">
                                        Pendaftaran Seminar Proposal &amp; Sidang Skripsi Periode Genap 2025/2026
                                    </a>
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                        Pemberitahuan batas akhir pengumpulan draft naskah dan verifikasi berkas bebas lab.
                                    </p>
                                </div>
                            </article>

                            <!-- Item 3: Pengisian KRS -->
                            <article class="flex gap-3.5 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <img src="{{ asset('images/event-1.jpg') }}" alt="Bimbingan KRS" class="w-20 h-20 rounded-xl object-cover flex-shrink-0 bg-slate-100 group-hover:opacity-90 transition">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[10px] font-semibold text-amber-600 block uppercase tracking-wide">
                                        05 Januari 2026
                                    </span>
                                    <a href="{{ route('layanan') }}" class="text-xs font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5 transition block">
                                        Jadwal Pengisian KRS Online &amp; Konsultasi Dosen Pembimbing Akademik
                                    </a>
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                        Mahasiswa dihimbau untuk memperhatikan prasyarat mata kuliah dan batas maksimal SKS.
                                    </p>
                                </div>
                            </article>

                        </div>

                        <!-- Tombol Biru di Bawah Sidebar Persis Gaya ITS (Label: Informasi >) -->
                        <div class="pt-3">
                            <a href="{{ route('layanan') }}" class="block w-full py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold text-center rounded-xl transition shadow-sm hover:shadow flex items-center justify-center gap-2">
                                <span>Informasi</span>
                                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <!-- MODAL: Peraturan & Kalender Akademik -->
    <div id="modal-regulasi" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-gradient-to-r from-[#0B2A4A] to-[#133E6C] p-6 text-white rounded-t-3xl">
                <button type="button" onclick="closeModal('modal-regulasi')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <span class="text-amber-400 text-[10px] font-bold uppercase tracking-widest block">Pedoman &amp; Regulasi</span>
                <h3 class="text-xl font-bold mt-1">Peraturan &amp; Informasi Akademik</h3>
            </div>
            <div class="p-6 sm:p-8 space-y-4 text-sm text-slate-700 leading-relaxed">
                <div class="space-y-3">
                    <h4 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-blue-600"></i> Ketentuan Beban Studi &amp; Evaluasi
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Mahasiswa diwajibkan menyelesaikan minimum 144 SKS dengan IPK kelulusan minimal 2.00 dan tanpa nilai mutu E. Evaluasi keberhasilan studi dilaksanakan secara berkala pada akhir semester ke-4 dan semester ke-8.
                    </p>
                </div>

                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <h4 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-blue-600"></i> Persyaratan Tugas Akhir / Skripsi
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Telah menempuh minimal 110 SKS, lulus mata kuliah Metodologi Penelitian, serta telah menyelesaikan seluruh praktikum laboratorium kejuruan utama.
                    </p>
                </div>

                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <h4 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-blue-600"></i> Kerja Praktik (KP)
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Kerja praktik dilaksanakan di proyek konstruksi lapangan aktif (jalan, jembatan, gedung, irigasi, atau bendungan) selama minimal 2 bulan dengan bimbingan dosen prodi dan pembimbing lapangan.
                    </p>
                </div>

                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-[#0B2A4A] hover:bg-blue-900 text-white text-xs font-semibold rounded-xl transition">
                        <i class="fa-solid fa-download text-amber-400"></i> Unduh Buku Pedoman Akademik (PDF)
                    </a>
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-3xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-regulasi')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-xl transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>
@endsection
