@extends('layouts.app')

@section('title', 'Ruang Konsentrasi Keahlian (KBK) | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Ruang Konsentrasi Keahlian (KBK) Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari sebagai pusat riset, diskusi kelompok keilmuan dosen, dan bimbingan skripsi.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Ruang Konsentrasi Keahlian (KBK)</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Pusat Riset Kelompok Bidang Keahlian &amp; Bimbingan Akademik
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Konsentrasi <span class="text-amber-400">Keahlian (KBK)</span>
            </h1>
        </div>
    </section>

    {{-- Dokumentasi & Profil 5 KBK --}}
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Pengantar --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Fasilitas Kolaborasi Riset</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Pusat Diskusi &amp; Bimbingan KBK</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-xs sm:text-sm text-slate-600 mt-4 leading-relaxed">
                    Ruang Konsentrasi Keahlian (KBK) dirancang sebagai ruang kerja kolaboratif dosen dan mahasiswa untuk pendalaman materi spesifik, koordinasi riset dosen, pembimbingan tugas akhir/skripsi, serta asistensi praktikum sesuai klaster keilmuan Teknik Sipil.
                </p>
            </div>

            {{-- Galeri Foto Ruangan --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-12">
                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/ruang-rapat-4.jpg') }}" alt="Ruang Diskusi KBK 1"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-slate-900 text-sm">Area Diskusi &amp; Asistensi Riset</h4>
                        <p class="text-xs text-slate-500 mt-1">Dilengkapi meja konferensi, smart screen, dan akses WiFi Eduroam berkecepatan tinggi.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/ruang-rapat-2.jpg') }}" alt="Ruang Diskusi KBK 2"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-slate-900 text-sm">Ruang Koordinasi Dosen Kelompok Keahlian</h4>
                        <p class="text-xs text-slate-500 mt-1">Sarana musyawarah pengembangan kurikulum berbasis OBE dan penentuan topik skripsi mahasiswa.</p>
                    </div>
                </div>
            </div>

            {{-- 5 Kelompok Bidang Keahlian (KBK) --}}
            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070BA] flex items-center justify-center text-lg font-bold">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading">
                            5 Kelompok Bidang Keahlian (KBK) Teknik Sipil UNSIL
                        </h3>
                        <p class="text-xs text-slate-500">Fokus keilmuan tridharma yang bernaung di dalam ruang konsentrasi keahlian</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-xs">
                    
                    {{-- 1. Struktur --}}
                    <div class="p-4 rounded-xl bg-blue-50/50 border border-blue-200/80 hover:border-blue-400 transition">
                        <div class="flex items-center gap-2 text-blue-800 font-bold text-sm mb-1.5">
                            <i class="fa-solid fa-building text-blue-600"></i>
                            <span>Rekayasa Struktur dan Bahan</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px]">
                            Fokus pada perancangan beton bertulang, struktur baja tahan gempa, retrofitting struktur, serta rekayasa material konstruksi ramah lingkungan.
                        </p>
                    </div>

                    {{-- 2. Keairan --}}
                    <div class="p-4 rounded-xl bg-cyan-50/50 border border-cyan-200/80 hover:border-cyan-400 transition">
                        <div class="flex items-center gap-2 text-cyan-800 font-bold text-sm mb-1.5">
                            <i class="fa-solid fa-water text-cyan-600"></i>
                            <span>Rekayasa Sumber Daya Air</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px]">
                            Mempelajari hidrologi, hidraulika saluran terbuka, sistem drainase perkotaan (SUDS), bangunan air/bendungan, dan teknik pesisir-pantai.
                        </p>
                    </div>

                    {{-- 3. Transportasi --}}
                    <div class="p-4 rounded-xl bg-emerald-50/50 border border-emerald-200/80 hover:border-emerald-400 transition">
                        <div class="flex items-center gap-2 text-emerald-800 font-bold text-sm mb-1.5">
                            <i class="fa-solid fa-road text-emerald-600"></i>
                            <span>Rekayasa Transportasi &amp; Jalan Raya</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px]">
                            Fokus perencanaan geometrik jalan raya, teknologi campuran aspal perkerasan jalan, manajemen rekayasa lalu lintas, dan sistem perkeretaapian.
                        </p>
                    </div>

                    {{-- 4. Geoteknik --}}
                    <div class="p-4 rounded-xl bg-amber-50/50 border border-amber-200/80 hover:border-amber-400 transition">
                        <div class="flex items-center gap-2 text-amber-800 font-bold text-sm mb-1.5">
                            <i class="fa-solid fa-mountain text-amber-600"></i>
                            <span>Rekayasa Geoteknik</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px]">
                            Kajian mekanika tanah lanjut, stabilitas lereng dengan geosintetik, perkuatan fondasi dalam, dan mitigasi bahaya longsor di Jawa Barat Selatan.
                        </p>
                    </div>

                    {{-- 5. Manajemen Konstruksi --}}
                    <div class="p-4 rounded-xl bg-purple-50/50 border border-purple-200/80 hover:border-purple-400 transition md:col-span-2 lg:col-span-2">
                        <div class="flex items-center gap-2 text-purple-800 font-bold text-sm mb-1.5">
                            <i class="fa-solid fa-clipboard-check text-purple-600"></i>
                            <span>Manajemen Rekayasa Konstruksi</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px]">
                            Manajemen proyek konstruksi, perencanaan estimasi biaya (QTO/BOQ), K3 konstruksi (SMK3), Building Information Modeling (BIM), dan evaluasi rantai pasok.
                        </p>
                    </div>

                </div>

                {{-- Tautan ke Dosen --}}
                <div class="mt-6 pt-5 border-t border-slate-100 flex flex-wrap items-center justify-between gap-3 text-xs">
                    <span class="text-slate-500">Ingin melihat profil dosen pengampu pada masing-masing KBK?</span>
                    <a href="{{ route('dosen') }}" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-[#0B2A4A] hover:bg-[#0070BA] text-white font-semibold transition">
                        <i class="fa-solid fa-users text-[11px]"></i>
                        <span>Lihat Dosen Berdasarkan KBK</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
