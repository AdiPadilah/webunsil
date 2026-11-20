@extends('layouts.app')

@section('title', 'Akademik | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Pusat informasi akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi — kurikulum OBE, peraturan & kalender akademik, layanan terpadu, dan unduhan.')

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

            <p class="text-[#0070BA] font-semibold text-xs uppercase tracking-wide">
                Pendidikan &amp; Kurikulum
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Akademik
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
                Penyelenggaraan pendidikan tinggi keteknikan dengan kurikulum Outcome-Based Education (OBE), 6 laboratorium terpadu, dan bimbingan akademik terstruktur.
            </p>
        </div>
    </section>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                
                
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div class="h-48 overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/lab-civil.jpg') }}" alt="Program Studi Teknik Sipil" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider block mb-1">Sarjana (S-1)</span>
                                    <h3 class="text-lg font-bold text-slate-900 leading-tight">
                                        Kurikulum &amp; Struktur Studi
                                    </h3>
                                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                        Kurikulum 144 SKS berbasis Outcome-Based Education (OBE) yang mencakup 5 bidang keahlian rekayasa sipil.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <a href="{{ route('kurikulum') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                        <span>Buka Kurikulum</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between group">
                            <div class="h-48 overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Peraturan dan Informasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider block mb-1">Pedoman Akademik</span>
                                    <h3 class="text-lg font-bold text-slate-900 leading-tight">
                                        Peraturan &amp; Informasi
                                    </h3>
                                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                        Informasi mengenai beban studi, evaluasi keberhasilan, pedoman tugas akhir/skripsi, dan kerja praktik.
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <button type="button" onclick="openModal('modal-regulasi')" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                        <span>Lihat Regulasi</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                        
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                            <h2 class="text-base font-bold text-slate-900">
                                Pengumuman Akademik
                            </h2>
                        </div>

                        
                        <div class="space-y-4">

                            
                            <article class="flex gap-3 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">
                                        24 Oktober 2025
                                    </span>
                                    <a href="{{ route('berita.wisuda-sarjana') }}" class="text-xs font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition block">
                                        Selamat dan Sukses Wisuda Sarjana Teknik Sipil FT Universitas Siliwangi
                                    </a>
                                </div>
                            </article>

                            
                            <article class="flex gap-3 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">
                                        12 Januari 2026
                                    </span>
                                    <a href="{{ route('layanan') }}" class="text-xs font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition block">
                                        Pendaftaran Seminar Proposal &amp; Sidang Skripsi Periode Genap
                                    </a>
                                </div>
                            </article>

                            
                            <article class="flex gap-3 items-start pb-4 border-b border-slate-100 last:border-0 group">
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">
                                        05 Januari 2026
                                    </span>
                                    <a href="{{ route('layanan') }}" class="text-xs font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition block">
                                        Jadwal Pengisian KRS Online &amp; Konsultasi Dosen PA
                                    </a>
                                </div>
                            </article>

                        </div>

                        
                        <div class="pt-3 border-t border-slate-100 mt-4">
                            <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:underline flex items-center justify-between">
                                <span>Lihat Semua Informasi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

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
                        Mahasiswa diwajibkan menyelesaikan minimum 144 SKS dengan IPK kelulusan minimal 2.00 dan tanpa nilai mutu E. Evaluasi keberhasilan studi dilaksanakan secara berkala pada akhir semester ke-4 dan semester ke-8.
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
