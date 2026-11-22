@extends('layouts.app')

@section('title', 'Akademik | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Pusat informasi akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi â€” kurikulum OBE, peraturan & kalender akademik, layanan terpadu, dan unduhan.')

@section('content')
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[11px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Akademik</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Pendidikan &amp; Kurikulum
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Akademik
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
                -
            </p>
        </div>
    </section>

    
    {{-- Main Content Section --}}
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- 3 Kartu Akademik Utama (Grid 3 Kolom Simetris & Seimbang) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 items-stretch">

                {{-- 1. Kurikulum & Struktur Studi --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all duration-200 flex flex-col justify-between h-full group">
                    <div class="h-48 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Kurikulum & Struktur Studi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block mb-1">Sarjana (S-1)</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                Kurikulum &amp; Struktur Studi
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                Kurikulum berbasis Outcome-Based Education (OBE) yang mencakup bidang keahlian rekayasa sipil.
                            </p>
                        </div>
                        <div class="pt-5 mt-auto border-t border-slate-100">
                            <a href="{{ route('kurikulum') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                <span>Buka Kurikulum</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- 2. Peraturan & Informasi --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all duration-200 flex flex-col justify-between h-full group">
                    <div class="h-48 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Peraturan & Informasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block mb-1">Pedoman Akademik</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                Peraturan &amp; Informasi
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                Informasi mengenai beban studi, evaluasi keberhasilan, pedoman tugas akhir/skripsi, dan kerja praktik.
                            </p>
                        </div>
                        <div class="pt-5 mt-auto border-t border-slate-100">
                            <button type="button" onclick="openModal('modal-regulasi')" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                <span>Lihat Regulasi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- 3. Pengumuman Akademik --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all duration-200 flex flex-col justify-between h-full group">
                    <div class="h-48 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pengumuman Akademik" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block mb-1">Warta Sivitas</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                Pengumuman Akademik
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                Informasi jadwal perkuliahan, registrasi semester, seminar proposal, sidang skripsi, dan agenda wisuda.
                            </p>
                        </div>
                        <div class="pt-5 mt-auto border-t border-slate-100">
                            <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                <span>Lihat Semua Informasi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Section Pengumuman & Warta Akademik Terkini --}}
            <div class="mt-14 pt-10 border-t border-slate-200">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between pb-4 border-b border-slate-200 mb-6 gap-2">
                    <div>
                        <span class="text-[#0070BA] font-semibold text-xs tracking-wider uppercase block">Warta Sivitas Akademika</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading mt-1">
                            Pengumuman &amp; Warta Terkini
                        </h2>
                    </div>
                    <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:text-[#0B2A4A] flex items-center gap-1.5 transition">
                        <span>Lihat Semua Berita</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                {{-- Grid 3 Kolom Berita & Pengumuman --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    {{-- Pengumuman 1 --}}
                    <article class="bg-white rounded-lg border border-slate-200 hover:border-slate-300 hover:shadow-md transition p-5 flex flex-col justify-between group">
                        <div>
                            <span class="text-[11px] font-medium text-[#0070BA] block mb-1.5">
                                24 Oktober 2025 &bull; Wisuda Sarjana
                            </span>
                            <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug transition">
                                <a href="{{ route('berita.wisuda-sarjana') }}">
                                    Selamat dan Sukses Wisuda Sarjana Teknik Sipil FT Universitas Siliwangi
                                </a>
                            </h3>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-xs font-medium text-slate-500 group-hover:text-[#0070BA] transition">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </div>
                    </article>

                    {{-- Pengumuman 2 --}}
                    <article class="bg-white rounded-lg border border-slate-200 hover:border-slate-300 hover:shadow-md transition p-5 flex flex-col justify-between group">
                        <div>
                            <span class="text-[11px] font-medium text-[#0070BA] block mb-1.5">
                                27 November 2026 &bull; Kurikulum OBE
                            </span>
                            <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug transition">
                                <a href="{{ route('berita.workshop-obe') }}">
                                    Workshop Penguatan Kurikulum OBE Berstandar Internasional IABEE
                                </a>
                            </h3>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-xs font-medium text-slate-500 group-hover:text-[#0070BA] transition">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </div>
                    </article>

                    {{-- Pengumuman 3 --}}
                    <article class="bg-white rounded-lg border border-slate-200 hover:border-slate-300 hover:shadow-md transition p-5 flex flex-col justify-between group">
                        <div>
                            <span class="text-[11px] font-medium text-[#0070BA] block mb-1.5">
                                23 Oktober 2026 &bull; Kunjungan Lapangan
                            </span>
                            <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug transition">
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}">
                                    Kunjungan Ilmiah Mahasiswa Sipil ke Bendungan Leuwikeris
                                </a>
                            </h3>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-xs font-medium text-slate-500 group-hover:text-[#0070BA] transition">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </div>
                    </article>

                </div>
            </div>

        </div>
    </section>

    
    <div id="modal-regulasi" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-xl border border-slate-200">
            <div class="bg-[#0B2A4A] p-5 text-white rounded-t-xl flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold">Peraturan &amp; Informasi Akademik</h3>
                    <p class="text-xs text-slate-300 mt-0.5">Program Studi S-1 Teknik Sipil FT UNSIL</p>
                </div>
                <button type="button" onclick="closeModal('modal-regulasi')" class="text-slate-300 hover:text-white p-1 transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <div class="p-6 space-y-4 text-sm text-slate-700 leading-relaxed">
                <div class="space-y-2">
                    <h4 class="font-bold text-slate-900 text-sm">
                        Ketentuan Beban Studi &amp; Evaluasi
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Mahasiswa diwajibkan menyelesaikan beban SKS yang ditetapkan dengan IPK kelulusan sesuai ketentuan yang berlaku dan tanpa nilai mutu E. Evaluasi keberhasilan studi dilaksanakan secara berkala.
                    </p>
                </div>

                <div class="space-y-2 pt-3 border-t border-slate-100">
                    <h4 class="font-bold text-slate-900 text-sm">
                        Persyaratan Tugas Akhir / Skripsi
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Telah menempuh minimal 110 SKS, lulus mata kuliah Metodologi Penelitian, serta telah menyelesaikan seluruh praktikum laboratorium kejuruan utama.
                    </p>
                </div>

                <div class="space-y-2 pt-3 border-t border-slate-100">
                    <h4 class="font-bold text-slate-900 text-sm">
                        Kerja Praktik (KP)
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Kerja praktik dilaksanakan di proyek konstruksi lapangan aktif (jalan, jembatan, gedung, irigasi, atau bendungan) selama minimal 2 bulan dengan bimbingan dosen prodi dan pembimbing lapangan.
                    </p>
                </div>

                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-xs font-semibold rounded-lg transition">
                        <i class="fa-solid fa-download text-amber-400"></i> Unduh Buku Pedoman Akademik (PDF)
                    </a>
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-regulasi')" class="px-4 py-1.5 bg-slate-700 hover:bg-slate-600 text-white text-xs font-semibold rounded-lg transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>
@endsection

