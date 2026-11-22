@extends('layouts.app')

@section('title', 'Akademik | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Pusat informasi akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    
    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-10 md:py-14 border-b border-blue-950">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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

    {{-- Main Content Section: Persis Bento Grid UNPAD --}}
    <section class="py-12 sm:py-16 lg:py-20 bg-white min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Title & Subtitle Persis Gambar Pertama (UNPAD) --}}
            <div class="mb-8 sm:mb-10 max-w-3xl">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-slate-900">
                    Studi di <span class="text-[#EAA315]">Teknik Sipil</span>
                </h2>
                <p class="text-slate-500 text-sm sm:text-base mt-3 leading-relaxed">
                    -
                </p>
            </div>

            {{-- Layout Bento Grid Persis Gambar Pertama (1 Kartu Tinggi Kiri, 2 Kartu Ditumpuk Kanan) --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 items-stretch">

                {{-- Kolom Kiri: 1 Kartu Tinggi (Program) --}}
                <a href="{{ route('kurikulum') }}" class="group relative rounded-3xl overflow-hidden block min-h-[380px] sm:min-h-[460px] lg:min-h-[500px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Program" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 via-50% to-transparent"></div>
                    <div class="relative z-10 p-6 sm:p-8">
                        <h3 class="text-2xl sm:text-3xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                            Program
                        </h3>
                        <div class="mt-4">
                            <span class="inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#EAA315] hover:bg-[#d4910b] text-slate-950 font-bold text-xs sm:text-sm shadow transition-all duration-200">
                                Lihat semua
                            </span>
                        </div>
                    </div>
                </a>

                {{-- Kolom Kanan: 2 Kartu Ditumpuk Vertikal --}}
                <div class="grid grid-rows-2 gap-6 sm:gap-7">

                    {{-- Kanan Atas: Peraturan & Informasi --}}
                    <div onclick="openModal('modal-regulasi')" class="group relative rounded-3xl overflow-hidden cursor-pointer min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
                        <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Peraturan & Informasi" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 via-50% to-transparent"></div>
                        <div class="relative z-10 p-5 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Peraturan &amp; Informasi
                            </h3>
                            <div class="mt-3">
                                <span class="inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#EAA315] hover:bg-[#d4910b] text-slate-950 font-bold text-xs sm:text-sm shadow transition-all duration-200">
                                    Lihat semua
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Kanan Bawah: Pengumuman Akademik --}}
                    <a href="{{ route('berita.index') }}" class="group relative rounded-3xl overflow-hidden block min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
                        <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pengumuman Akademik" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 via-50% to-transparent"></div>
                        <div class="relative z-10 p-5 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Pengumuman Akademik
                            </h3>
                            <div class="mt-3">
                                <span class="inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#EAA315] hover:bg-[#d4910b] text-slate-950 font-bold text-xs sm:text-sm shadow transition-all duration-200">
                                    Lihat semua
                                </span>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </section>

    {{-- Modal: Regulasi & Pedoman Akademik --}}
    <div id="modal-regulasi" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="bg-[#0B2A4A] p-6 text-white rounded-t-3xl flex items-center justify-between">
                <div>
                    <span class="text-amber-400 text-[10px] font-bold uppercase tracking-wider block">Pedoman &amp; Regulasi</span>
                    <h3 class="text-xl font-bold mt-0.5">Peraturan &amp; Informasi Akademik</h3>
                    <p class="text-xs text-slate-300 mt-0.5">Program Studi S-1 Teknik Sipil FT UNSIL</p>
                </div>
                <button type="button" onclick="closeModal('modal-regulasi')" class="text-slate-300 hover:text-white p-2 transition rounded-full hover:bg-white/10">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <div class="p-6 sm:p-8 space-y-4 text-sm text-slate-700 leading-relaxed">
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
                        Telah menempuh beban SKS yang disyaratkan, lulus mata kuliah Metodologi Penelitian, serta telah menyelesaikan seluruh praktikum laboratorium kejuruan utama.
                    </p>
                </div>

                <div class="space-y-2 pt-3 border-t border-slate-100">
                    <h4 class="font-bold text-slate-900 text-sm">
                        Kerja Praktik (KP)
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Kerja praktik dilaksanakan di proyek konstruksi lapangan aktif (jalan, jembatan, gedung, irigasi, atau bendungan) dengan bimbingan dosen prodi dan pembimbing lapangan.
                    </p>
                </div>

                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-xs font-semibold rounded-xl transition">
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
