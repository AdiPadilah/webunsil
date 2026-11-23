@extends('layouts.app')

@section('title', 'Beranda | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Website Resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya. Akreditasi BAIK LAM Teknik.')

@section('content')
    
    <section id="beranda" class="hero-banner relative min-h-[560px] lg:min-h-[640px] flex items-center py-20 lg:py-28 border-b border-slate-800 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="max-w-2xl lg:max-w-3xl space-y-4">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white font-heading tracking-tight leading-tight drop-shadow-lg">
                    Program Studi<br><span class="text-amber-400">Teknik Sipil</span>
                </h1>

                <p class="text-xl sm:text-2xl text-slate-100 font-bold drop-shadow-md pb-1">
                    Fakultas Teknik Universitas Siliwangi
                </p>

                <p class="text-slate-100 text-base sm:text-lg leading-relaxed text-justify sm:text-left font-normal pt-2 drop-shadow-md max-w-2xl">
                    Mengembangkan ilmu pengetahuan, teknologi, dan inovasi untuk menjawab tantangan di bidang infrastruktur, teknologi, dan lingkungan. Menghadirkan gagasan, penelitian, dan karya rekayasa yang mendorong terciptanya infrastruktur yang tangguh, cerdas, dan berkelanjutan.
                </p>
            </div>
        </div>
    </section>

    
    {{-- Section Sejarah Singkat --}}
    <section class="py-14 lg:py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                
                <div>
                    <div class="rounded-lg overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/sejarah-singkat-beranda.jpg') }}?v={{ time() }}" 
                             alt="Sejarah Singkat Program Studi S-1 Teknik Sipil FT UNSIL" 
                             class="w-full h-auto object-cover">
                    </div>
                </div>

                <div class="space-y-4">
                    <p class="text-[#0070BA] font-semibold text-sm">
                        Sejarah Singkat
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading leading-snug">
                        Empat Dekade Teknik Sipil FT UNSIL Membangun Infrastruktur dan Peradaban Bangsa
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-[15px] leading-relaxed">
                        Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi merupakan program studi rekayasa pertama di lingkungan Fakultas Teknik UNSIL. Kini telah bertransformasi menjadi Perguruan Tinggi Negeri (PTN) dan terus mencetak lulusan yang berkiprah di sektor konstruksi nasional maupun internasional.
                    </p>

                    <p class="text-slate-600 text-sm sm:text-[15px] leading-relaxed">
                        Berpusat di Kampus 2 Mugarsari dengan fasilitas laboratorium modern terakreditasi LAM Teknik, kami berkomitmen menyelenggarakan pendidikan tinggi keteknikan yang unggul berbasis <em>Outcome-Based Education</em> (OBE), adaptif terhadap perkembangan teknologi terapan, dan berjiwa wirausaha kebangsaan.
                    </p>

                    <div class="pt-1">
                        <a href="{{ route('sejarah') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-sm font-semibold rounded-md transition">
                            Baca Selengkapnya
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section Pimpinan (Inspirasi Layout ITB dengan Foto Bulat & Daftar Struktur) --}}
    <section class="py-16 lg:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Title Section ala ITB --}}
            <div class="mb-10 lg:mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 font-heading tracking-tight">
                    Pimpinan
                </h2>
                <div class="w-12 h-1 bg-[#0070BA] mt-2.5"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                
                {{-- Sisi Kiri: Profil & List Pimpinan --}}
                <div class="lg:col-span-7 space-y-4">
                    <p class="text-slate-600 font-medium text-sm sm:text-base">
                        Ketua Program Studi
                    </p>

                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading leading-snug">
                        Andhy Romdani, S.T., M.Eng., Ph.D.
                    </h3>

                    <p class="text-slate-600 text-sm sm:text-[15px] leading-relaxed min-h-[4.5rem]">
                        -
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('tentang-kami') }}" class="inline-block px-5 py-2 border border-slate-700 hover:border-[#0070BA] hover:bg-[#0070BA] text-slate-800 hover:text-white text-xs sm:text-sm font-medium rounded-md transition duration-200">
                            Selengkapnya
                        </a>
                    </div>

                    {{-- List Struktur & Jajaran (Divider Garis Horizontal) --}}
                    <div class="pt-6 border-t border-slate-200 divide-y divide-slate-200">
                        <div class="py-3.5 text-slate-700 text-sm flex justify-between items-center font-medium">
                            <span>Sekretaris Program Studi</span>
                            <span class="text-slate-400 font-semibold">-</span>
                        </div>
                        <div class="py-3.5 text-slate-700 text-sm flex justify-between items-center font-medium">
                            <span>Pimpinan Fakultas Teknik</span>
                            <span class="text-slate-400 font-semibold">-</span>
                        </div>
                        <div class="py-3.5 text-slate-700 text-sm flex justify-between items-center font-medium">
                            <span>Kelompok Bidang Keahlian (KBK)</span>
                            <span class="text-slate-400 font-semibold">-</span>
                        </div>
                        <div class="py-3.5 text-slate-700 text-sm flex justify-between items-center font-medium">
                            <span>Dosen &amp; Tenaga Pengajar</span>
                            <span class="text-slate-400 font-semibold">-</span>
                        </div>
                    </div>
                </div>

                {{-- Sisi Kanan: Foto Pimpinan Lingkaran Besar (Circular Crop ala ITB) --}}
                <div class="lg:col-span-5 flex justify-center lg:justify-end items-center">
                    <div class="relative w-64 h-64 sm:w-80 sm:h-80 lg:w-[380px] lg:h-[380px] rounded-full overflow-hidden bg-slate-100 shadow-xl border-4 sm:border-8 border-slate-100 flex-shrink-0">
                        <img src="{{ asset('images/pimpinan-prodi.jpg') }}?v={{ time() }}" 
                             alt="Andhy Romdani, S.T., M.Eng., Ph.D. - Ketua Program Studi S-1 Teknik Sipil FT UNSIL" 
                             class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Statistik --}}
    <section class="py-8 bg-[#0B2A4A] border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-between gap-y-4 text-center">
                <div class="w-1/3 sm:w-auto px-3 py-2">
                    <span class="block text-2xl sm:text-3xl font-bold text-white">-</span>
                    <span class="block text-[11px] text-slate-400 mt-0.5">Laboratorium</span>
                </div>
                <div class="w-1/3 sm:w-auto px-3 py-2">
                    <span class="block text-2xl sm:text-3xl font-bold text-white">-</span>
                    <span class="block text-[11px] text-slate-400 mt-0.5">Dosen Tetap</span>
                </div>
                <div class="w-1/3 sm:w-auto px-3 py-2">
                    <span class="block text-2xl sm:text-3xl font-bold text-white">-</span>
                    <span class="block text-[11px] text-slate-400 mt-0.5">Bidang Keahlian</span>
                </div>
                <div class="w-1/3 sm:w-auto px-3 py-2">
                    <span class="block text-2xl sm:text-3xl font-bold text-white">-</span>
                    <span class="block text-[11px] text-slate-400 mt-0.5">Mahasiswa Aktif</span>
                </div>
                <div class="w-1/3 sm:w-auto px-3 py-2">
                    <span class="block text-2xl sm:text-3xl font-bold text-white">-</span>
                    <span class="block text-[11px] text-slate-400 mt-0.5">Alumni</span>
                </div>
                <div class="w-1/3 sm:w-auto px-3 py-2">
                    <span class="block text-2xl sm:text-3xl font-bold text-white">-</span>
                    <span class="block text-[11px] text-slate-400 mt-0.5">Tahun Berdiri</span>
                </div>
            </div>
        </div>
    </section>

    
    {{-- Section Program Studi, Kegiatan & Fasilitas (Bento Grid 2x2 Proporsional Persis UNPAD) --}}
    <section class="py-16 lg:py-20 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            {{-- 1. Program Studi Teknik Sipil (Bento Grid 2x2 Proporsi UNPAD) --}}
            <div>
                <div class="flex items-center justify-between mb-6 pb-2 border-b border-slate-200">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block">Pendidikan &amp; Kompetensi</span>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading mt-0.5">
                            Program Studi Teknik Sipil
                        </h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 lg:gap-6">
                    
                    {{-- Baris 1: Card Kiri (4 Kolom ~ Persis rasio card kiri UNPAD) --}}
                    <a href="{{ route('kurikulum') }}" class="col-span-1 sm:col-span-5 lg:col-span-4 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Program Studi Teknik Sipil" class="w-full h-full object-cover object-center" onerror="this.src='https://images.unsplash.com/photo-1541888946425-d0fbb18615f8?q=80&w=600'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 1: Card Kanan (8 Kolom ~ Persis rasio card kanan UNPAD) --}}
                    <a href="{{ route('visi-misi') }}" class="col-span-1 sm:col-span-7 lg:col-span-8 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Program Studi Teknik Sipil" class="w-full h-full object-cover object-center" onerror="this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 2: Card Kiri (8 Kolom ~ Bersilangan dengan baris 1) --}}
                    <a href="{{ route('kurikulum') }}" class="col-span-1 sm:col-span-7 lg:col-span-8 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Program Studi Teknik Sipil" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/event-3.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 2: Card Kanan (4 Kolom ~ Bersilangan dengan baris 1) --}}
                    <a href="{{ route('prestasi-mahasiswa') }}" class="col-span-1 sm:col-span-5 lg:col-span-4 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Prestasi Mahasiswa Teknik Sipil" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/event-2.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                Prestasi Mahasiswa
                            </h3>
                        </div>
                    </a>

                </div>
            </div>

            {{-- 2. Kegiatan Mahasiswa (Bento Grid 2x2 Proporsi UNPAD) --}}
            <div>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6 pb-2 border-b border-slate-200">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block">Aktivitas &amp; Organisasi</span>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading mt-0.5">
                            Kegiatan Mahasiswa
                        </h2>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-semibold text-slate-500">
                        <a href="https://instagram.com/hmsftunsil" target="_blank" rel="noopener noreferrer" class="hover:text-[#0070BA] transition flex items-center gap-1.5 bg-white px-3 py-1.5 rounded-full border border-slate-200 shadow-2xs">
                            <i class="fa-brands fa-instagram text-pink-600 text-sm"></i> @hmsftunsil
                        </a>
                        <a href="https://instagram.com/sipilunsil" target="_blank" rel="noopener noreferrer" class="hover:text-[#0070BA] transition flex items-center gap-1.5 bg-white px-3 py-1.5 rounded-full border border-slate-200 shadow-2xs">
                            <i class="fa-brands fa-instagram text-pink-600 text-sm"></i> @sipilunsil
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 lg:gap-6">
                    
                    {{-- Baris 1: Card Kiri (4 Kolom) --}}
                    <a href="{{ route('berita.kompetisi-jembatan') }}" class="col-span-1 sm:col-span-5 lg:col-span-4 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Kegiatan Mahasiswa" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/event-1.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 1: Card Kanan (8 Kolom) --}}
                    <a href="{{ route('mahasiswa-alumni') }}" class="col-span-1 sm:col-span-7 lg:col-span-8 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Kegiatan Mahasiswa" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/event-2.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 2: Card Kiri (8 Kolom) --}}
                    <a href="{{ route('berita.seminar-taiwan') }}" class="col-span-1 sm:col-span-7 lg:col-span-8 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Kegiatan Mahasiswa" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 2: Card Kanan (4 Kolom) --}}
                    <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="col-span-1 sm:col-span-5 lg:col-span-4 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kegiatan Mahasiswa" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                </div>
            </div>

            {{-- 3. Fasilitas Laboratorium (Bento Grid 2x2 Persis UNPAD) --}}
            <div>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6 pb-2 border-b border-slate-200">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block">Sarana Riset &amp; Pengujian</span>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading mt-0.5">
                            Fasilitas Laboratorium
                        </h2>
                    </div>
                    <a href="{{ route('laboratorium') }}" class="text-xs sm:text-sm font-semibold text-[#0070BA] hover:text-[#0B2A4A] transition inline-flex items-center gap-1.5">
                        <span>Lihat Semua Fasilitas</span>
                        <i class="fa-solid fa-arrow-right text-[11px]"></i>
                    </a>
                </div>

                {{-- Layout Asimetris Bento Grid Persis UNPAD (Row 1: 4 & 8 | Row 2: 8 & 4) --}}
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 lg:gap-6">
                    
                    {{-- Baris 1: Card Kiri (4 Kolom ~ Persis 'Kawasan Sains dan Teknologi' di UNPAD) --}}
                    <a href="{{ route('laboratorium') }}" class="col-span-1 sm:col-span-5 lg:col-span-4 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Fasilitas Laboratorium" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/event-1.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 1: Card Kanan (8 Kolom ~ Persis 'Laboratorium Sentral' di UNPAD) --}}
                    <a href="{{ route('laboratorium') }}" class="col-span-1 sm:col-span-7 lg:col-span-8 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Fasilitas Laboratorium" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 2: Card Kiri (8 Kolom ~ Persis 'Transportasi Kampus' di UNPAD) --}}
                    <a href="{{ route('fasilitas') }}" class="col-span-1 sm:col-span-7 lg:col-span-8 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/gedung-unsil.jpg') }}" alt="Fasilitas Laboratorium" class="w-full h-full object-cover object-center" onerror="this.src='{{ asset('images/event-3.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                    {{-- Baris 2: Card Kanan (4 Kolom ~ Persis 'Masjid Raya Unpad' di UNPAD) --}}
                    <a href="{{ route('fasilitas') }}" class="col-span-1 sm:col-span-5 lg:col-span-4 group relative rounded-xl overflow-hidden block h-64 sm:h-72 lg:h-[340px] shadow-sm hover:shadow-md transition bg-slate-900">
                        <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Fasilitas Laboratorium" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors duration-300">
                                -
                            </h3>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </section>

    {{-- Section Berita & Agenda Terkini --}}
    <section class="py-14 sm:py-18 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
                
                {{-- Kolom Kiri: Berita Terkini (8 Kolom) --}}
                <div class="lg:col-span-8">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-6">
                        <div>
                            <span class="text-[#0070BA] font-medium text-xs block">Warta Sivitas Akademika</span>
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading mt-0.5">
                                Berita Terkini
                            </h2>
                        </div>
                        <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:text-[#0B2A4A] flex items-center gap-1.5 transition">
                            <span>Lihat Semua Berita</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>

                    {{-- Berita Utama (Featured News) --}}
                    <article class="bg-slate-50 rounded-xl overflow-hidden border border-slate-200 hover:border-slate-300 transition mb-6 group">
                        <div class="grid grid-cols-1 md:grid-cols-12">
                            <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="md:col-span-6 block overflow-hidden bg-slate-200 aspect-[16/10] md:aspect-auto h-full min-h-[220px]">
                                <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" 
                                     alt="Kunjungan Ilmiah Mahasiswa Sipil ke Bendungan Leuwikeris" 
                                     class="w-full h-full object-cover">
                            </a>
                            <div class="md:col-span-6 p-5 sm:p-6 flex flex-col justify-between">
                                <div>
                                    <span class="text-[11px] font-medium text-[#0070BA] block mb-1.5">
                                        23 Oktober 2026 &bull; Liputan Kampus
                                    </span>
                                    <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug transition mb-2">
                                        <a href="{{ route('berita.kunjungan-leuwikeris') }}">
                                            Kunjungan Ilmiah Mahasiswa Sipil ke Bendungan Leuwikeris
                                        </a>
                                    </h3>
                                    <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed">
                                        Rombongan mahasiswa dan dosen Teknik Sipil UNSIL meninjau langsung struktur bendungan, instrumen rembesan, serta sistem monitoring geoteknik di Bendungan Leuwikeris bersama tim UPB.
                                    </p>
                                </div>
                                <div class="pt-4 mt-3 border-t border-slate-200/70">
                                    <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:text-[#0B2A4A] transition">
                                        <span>Baca Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 2 Berita Pendamping (Grid 2 Kolom) --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        {{-- Sub Berita 1 --}}
                        <article class="bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-slate-300 transition flex flex-col justify-between group">
                            <div>
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="block overflow-hidden bg-slate-100 aspect-video">
                                    <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" 
                                         alt="Seminar Nasional Jalan Tol" 
                                         class="w-full h-full object-cover">
                                </a>
                                <div class="p-4 sm:p-5">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">20 Oktober 2026</span>
                                    <h4 class="text-sm sm:text-[15px] font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        <a href="{{ route('berita.seminar-jalan-tol') }}">Seminar Nasional SCIENCE 2026: Strategi Jalan Tol Berkelanjutan</a>
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                        Menghadirkan praktisi BUMN PT Adhi Karya guna mengupas tuntas inovasi struktur perkerasan jalan tol modern di Indonesia.
                                    </p>
                                </div>
                            </div>
                            <div class="px-4 sm:px-5 pb-4 pt-2 border-t border-slate-100">
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="text-xs font-semibold text-[#0070BA] hover:underline inline-flex items-center gap-1">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-chevron-right text-[9px]"></i>
                                </a>
                            </div>
                        </article>

                        {{-- Sub Berita 2 --}}
                        <article class="bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-slate-300 transition flex flex-col justify-between group">
                            <div>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="block overflow-hidden bg-slate-100 aspect-video">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" 
                                         alt="Seminar Internasional Indonesia-Taiwan" 
                                         class="w-full h-full object-cover">
                                </a>
                                <div class="p-4 sm:p-5">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">12 Oktober 2026</span>
                                    <h4 class="text-sm sm:text-[15px] font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition">
                                        <a href="{{ route('berita.seminar-taiwan') }}">Seminar Internasional "Bridging Futures" Bersama NCKU Taiwan</a>
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                        Peluang kolaborasi riset rekayasa kegempaan dan beasiswa studi lanjut bagi alumni dan mahasiswa Teknik Sipil UNSIL.
                                    </p>
                                </div>
                            </div>
                            <div class="px-4 sm:px-5 pb-4 pt-2 border-t border-slate-100">
                                <a href="{{ route('berita.seminar-taiwan') }}" class="text-xs font-semibold text-[#0070BA] hover:underline inline-flex items-center gap-1">
                                    <span>Selengkapnya</span>
                                    <i class="fa-solid fa-chevron-right text-[9px]"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>

                {{-- Kolom Kanan: Agenda Akademik & Kegiatan (4 Kolom) --}}
                <div class="lg:col-span-4">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-6">
                        <div>
                            <span class="text-amber-600 font-medium text-xs block">Jadwal &amp; Kalender</span>
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading mt-0.5">
                                Agenda Sivitas
                            </h2>
                        </div>
                        <span class="text-[11px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded">
                            Mendatang
                        </span>
                    </div>

                    <div class="space-y-4">
                        {{-- Agenda 1 --}}
                        <div class="bg-white rounded-xl p-4 border border-slate-200 hover:border-slate-300 transition flex items-start gap-4">
                            <div class="flex-shrink-0 w-14 text-center rounded-lg overflow-hidden border border-[#0B2A4A]">
                                <div class="bg-[#0B2A4A] text-amber-400 text-[10px] font-bold py-1 uppercase tracking-wider">
                                    NOV
                                </div>
                                <div class="bg-white text-[#0B2A4A] text-xl font-bold py-1.5 font-heading">
                                    27
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                    <a href="{{ route('berita.workshop-obe') }}" class="hover:text-[#0070BA] transition">
                                        Workshop Penguatan Kurikulum Berbasis OBE
                                    </a>
                                </h4>
                                <div class="text-[11px] text-slate-500 space-y-0.5 mt-1.5">
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-regular fa-clock text-slate-400 text-[10px]"></i>
                                        <span>08.00 WIB s.d. Selesai</span>
                                    </p>
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-location-dot text-slate-400 text-[10px]"></i>
                                        <span>Kampus 2 Universitas Siliwangi</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Agenda 2 --}}
                        <div class="bg-white rounded-xl p-4 border border-slate-200 hover:border-slate-300 transition flex items-start gap-4">
                            <div class="flex-shrink-0 w-14 text-center rounded-lg overflow-hidden border border-slate-200">
                                <div class="bg-slate-700 text-slate-300 text-[10px] font-bold py-1 uppercase tracking-wider">
                                    -
                                </div>
                                <div class="bg-white text-slate-700 text-xl font-bold py-1.5 font-heading">
                                    -
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                    -
                                </h4>
                                <div class="text-[11px] text-slate-500 space-y-0.5 mt-1.5">
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-regular fa-clock text-slate-400 text-[10px]"></i>
                                        <span>-</span>
                                    </p>
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-location-dot text-slate-400 text-[10px]"></i>
                                        <span>-</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Agenda 3 --}}
                        <div class="bg-white rounded-xl p-4 border border-slate-200 hover:border-slate-300 transition flex items-start gap-4">
                            <div class="flex-shrink-0 w-14 text-center rounded-lg overflow-hidden border border-slate-200">
                                <div class="bg-slate-700 text-slate-300 text-[10px] font-bold py-1 uppercase tracking-wider">
                                    -
                                </div>
                                <div class="bg-white text-slate-700 text-xl font-bold py-1.5 font-heading">
                                    -
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                    -
                                </h4>
                                <div class="text-[11px] text-slate-500 space-y-0.5 mt-1.5">
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-regular fa-clock text-slate-400 text-[10px]"></i>
                                        <span>-</span>
                                    </p>
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-location-dot text-slate-400 text-[10px]"></i>
                                        <span>-</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center justify-center gap-2 w-full py-2.5 bg-slate-50 hover:bg-[#0B2A4A] hover:text-white text-slate-700 text-xs font-semibold rounded-lg border border-slate-200 hover:border-[#0B2A4A] transition duration-200">
                            <span>Lihat Seluruh Agenda &amp; Warta</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    
    <section id="lokasi" class="bg-white py-12 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                        Lokasi Kampus
                    </h2>
                    <p class="text-slate-500 text-sm mt-1">UNSIL Kampus 2 Mugarsari &mdash; Fakultas Teknik, Tasikmalaya, Jawa Barat</p>
                </div>
                <a href="https://maps.app.goo.gl/szSbqfg9FWsZnMc67" target="_blank"
                   class="inline-flex items-center gap-2 bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-xs font-semibold px-4 py-2 rounded-lg transition whitespace-nowrap self-start md:self-auto">
                    <i class="fa-solid fa-location-arrow text-amber-400"></i>
                    Buka Google Maps
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 rounded-lg overflow-hidden border border-slate-200">
                <div class="lg:col-span-2 h-72 lg:h-[380px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.883726715206!2d108.24907807499997!3d-7.379663392629738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5817bf80530b%3A0x170d075986c8ed42!2sUNIVERSITAS%20SILIWANGI%20-%20KAMPUS%202%20MUGARSARI!5e0!3m2!1sid!2sid!4v1731900000000!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Kampus 2 Universitas Siliwangi Mugarsari - Fakultas Teknik">
                    </iframe>
                </div>

                <div class="bg-slate-50 p-6 flex flex-col justify-between gap-5 border-t lg:border-t-0 lg:border-l border-slate-200">
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin text-[#0070BA] text-sm mt-0.5"></i>
                            <div>
                                <p class="text-[#0B2A4A] font-semibold text-xs uppercase tracking-wide mb-0.5">Alamat</p>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Jl. Mugarsari, Kelurahan Mugarsari, Kec. Tamansari, Kota Tasikmalaya, Jawa Barat 46196
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-envelope text-[#0070BA] text-sm mt-0.5"></i>
                            <div>
                                <p class="text-[#0B2A4A] font-semibold text-xs uppercase tracking-wide mb-0.5">Email</p>
                                <p class="text-slate-600 text-xs">sipil@unsil.ac.id</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-clock text-[#0070BA] text-sm mt-0.5"></i>
                            <div>
                                <p class="text-[#0B2A4A] font-semibold text-xs uppercase tracking-wide mb-0.5">Jam Layanan</p>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Senin &ndash; Jumat &bull; 07.30 &ndash; 16.00 WIB
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-4">
                        <p class="text-slate-500 text-[11px] font-semibold uppercase tracking-wider mb-2">Akses Transportasi</p>
                        <ul class="text-xs text-slate-600 space-y-1">
                            <li>&bull; &plusmn;3 km dari Stasiun Tasikmalaya</li>
                            <li>&bull; &plusmn;1 km dari Terminal Indihiang</li>
                            <li>&bull; Area parkir kendaraan tersedia di dalam kampus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
