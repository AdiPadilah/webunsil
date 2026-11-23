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
                Pusat informasi kurikulum OBE, regulasi akademik, dan 5 bidang keahlian rekayasa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.
            </p>
        </div>
    </section>

    {{-- Main Content Section: Persis Bento Grid UNPAD --}}
    <section class="py-12 sm:py-16 lg:py-20 bg-white min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

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
                    <a href="{{ route('download') }}" class="group relative rounded-3xl overflow-hidden block min-h-[220px] sm:min-h-[238px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end">
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
                    </a>

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

            {{-- Seksi 5 Bidang Keahlian / Konsentrasi Sipil UNSIL (Bento Grid) --}}
            <div class="mt-16 sm:mt-20 pt-12 border-t border-slate-200">
                <div class="mb-8 sm:mb-10 max-w-3xl">
                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1">
                        Disiplin Ilmu &amp; Peminatan
                    </p>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                        5 Bidang Keahlian Teknik Sipil UNSIL
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                        Kurikulum S-1 Teknik Sipil FT UNSIL mencakup lima pilar utama rekayasa sipil yang memadukan teori fundamental, komputasi terapan, dan pengujian laboratorium modern.
                    </p>
                </div>

                {{-- Bento Grid 5 Bidang Keahlian --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-5 sm:gap-6 items-stretch">

                    {{-- 1. Rekayasa Struktur & Material (Lebar: 7 Kolom) --}}
                    <div class="lg:col-span-7 group relative rounded-3xl overflow-hidden min-h-[300px] sm:min-h-[340px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6 sm:p-8">
                        <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Rekayasa Struktur & Material" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/75 via-45% to-slate-950/20"></div>
                        <div class="relative z-10">
                            <p class="text-[11px] font-bold text-amber-400 uppercase tracking-wider mb-1.5">
                                Pilar 01 &bull; Struktur &amp; Material
                            </p>
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Rekayasa Struktur &amp; Material Konstruksi
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-300 mt-2 leading-relaxed max-w-xl">
                                Perancangan struktur beton bertulang, konstruksi baja, rekayasa jembatan bentang panjang, analisis beban gempa dinamis, serta inovasi teknologi beton ramah lingkungan.
                            </p>
                            <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-amber-400">
                                <i class="fa-solid fa-flask-vial text-[11px]"></i>
                                <span>Didukung: Lab Uji Bahan &amp; Konstruksi</span>
                            </div>
                        </div>
                    </div>

                    {{-- 2. Geoteknik & Mekanika Tanah (Lebar: 5 Kolom) --}}
                    <div class="lg:col-span-5 group relative rounded-3xl overflow-hidden min-h-[300px] sm:min-h-[340px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6 sm:p-8">
                        <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" alt="Geoteknik & Mekanika Tanah" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/75 via-45% to-slate-950/20"></div>
                        <div class="relative z-10">
                            <p class="text-[11px] font-bold text-amber-400 uppercase tracking-wider mb-1.5">
                                Pilar 02 &bull; Geoteknik
                            </p>
                            <h3 class="text-xl sm:text-2xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Geoteknik &amp; Mekanika Tanah
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-300 mt-2 leading-relaxed">
                                Penyelidikan daya dukung tanah pondasi dangkal dan dalam, stabilitas lereng, perkuatan tanah (geosintetik), dan mitigasi bahaya kelongsoran.
                            </p>
                            <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-amber-400">
                                <i class="fa-solid fa-flask-vial text-[11px]"></i>
                                <span>Didukung: Lab Mekanika Tanah</span>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Teknik Sumber Daya Air (Lebar: 4 Kolom) --}}
                    <div class="lg:col-span-4 group relative rounded-3xl overflow-hidden min-h-[280px] sm:min-h-[300px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6">
                        <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Teknik Sumber Daya Air" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 via-50% to-slate-950/25"></div>
                        <div class="relative z-10">
                            <p class="text-[10px] font-bold text-cyan-400 uppercase tracking-wider mb-1">
                                Pilar 03 &bull; Keairan
                            </p>
                            <h3 class="text-lg sm:text-xl font-bold text-white font-heading leading-tight group-hover:text-cyan-300 transition-colors">
                                Teknik Sumber Daya Air
                            </h3>
                            <p class="text-xs text-slate-300 mt-1.5 leading-relaxed">
                                Hidrologi terapan, bangunan air &amp; bendungan, perencanaan irigasi, sistem drainase perkotaan, serta mitigasi sedimentasi DAS.
                            </p>
                            <div class="mt-3 flex items-center gap-1.5 text-[11px] font-semibold text-cyan-400">
                                <i class="fa-solid fa-water text-[10px]"></i>
                                <span>Didukung: Lab Hidrolika</span>
                            </div>
                        </div>
                    </div>

                    {{-- 4. Rekayasa Transportasi & Jalan Raya (Lebar: 4 Kolom) --}}
                    <div class="lg:col-span-4 group relative rounded-3xl overflow-hidden min-h-[280px] sm:min-h-[300px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6">
                        <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Rekayasa Transportasi" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 via-50% to-slate-950/25"></div>
                        <div class="relative z-10">
                            <p class="text-[10px] font-bold text-amber-400 uppercase tracking-wider mb-1">
                                Pilar 04 &bull; Transportasi
                            </p>
                            <h3 class="text-lg sm:text-xl font-bold text-white font-heading leading-tight group-hover:text-amber-300 transition-colors">
                                Rekayasa Transportasi
                            </h3>
                            <p class="text-xs text-slate-300 mt-1.5 leading-relaxed">
                                Perancangan geometrik dan perkerasan jalan raya (lentur &amp; kaku), pemodelan transportasi terpadu, dan keselamatan jalan.
                            </p>
                            <div class="mt-3 flex items-center gap-1.5 text-[11px] font-semibold text-amber-400">
                                <i class="fa-solid fa-road text-[10px]"></i>
                                <span>Didukung: Lab Jalan Raya</span>
                            </div>
                        </div>
                    </div>

                    {{-- 5. Manajemen Rekayasa Konstruksi (Lebar: 4 Kolom) --}}
                    <div class="lg:col-span-4 group relative rounded-3xl overflow-hidden min-h-[280px] sm:min-h-[300px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 flex flex-col justify-end p-6">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Manajemen Rekayasa Konstruksi" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 via-50% to-slate-950/25"></div>
                        <div class="relative z-10">
                            <p class="text-[10px] font-bold text-emerald-400 uppercase tracking-wider mb-1">
                                Pilar 05 &bull; Konstruksi
                            </p>
                            <h3 class="text-lg sm:text-xl font-bold text-white font-heading leading-tight group-hover:text-emerald-300 transition-colors">
                                Manajemen Konstruksi
                            </h3>
                            <p class="text-xs text-slate-300 mt-1.5 leading-relaxed">
                                Estimasi biaya proyek (RAB), penjadwalan terpadu, Building Information Modelling (BIM), K3 konstruksi, dan kontrak proyek.
                            </p>
                            <div class="mt-3 flex items-center gap-1.5 text-[11px] font-semibold text-emerald-400">
                                <i class="fa-solid fa-laptop-code text-[10px]"></i>
                                <span>Didukung: Studio Komputasi Rekayasa</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
