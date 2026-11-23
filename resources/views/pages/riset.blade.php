@extends('layouts.app')

@section('title', 'Riset dan Kolaborasi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Pusat riset unggulan 5 KBK, hilirisasi pengabdian kepada masyarakat, dan jejaring kemitraan industri BUMN, Kementerian PUPR, dan asosiasi profesi Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Riset &amp; Kolaborasi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Inovasi, Industri &amp; Pengabdian
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Riset &amp; Kolaborasi
            </h1>
        </div>
    </section>

    {{-- 3 Pilar Utama Tridharma (Bento Cards: Penelitian, Kolaborasi, Pengabdian) --}}
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-10">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Pilar Inovasi &amp; Kemitraan
                </p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Ekosistem Tridharma Berdampak Nyata
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Mengintegrasikan riset terapan ketekniksipilan, hilirisasi pengabdian kepada masyarakat, dan jejaring kerja sama strategis dengan industri konstruksi nasional.
                </p>
            </div>

            {{-- 3 Bento Pillar Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-7 items-stretch">
                
                {{-- Pilar 1: Penelitian --}}
                <div class="group bg-white rounded-2xl border border-slate-200 hover:border-blue-300 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Penelitian Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold bg-[#0070BA] text-white shadow-sm uppercase tracking-wider">
                                Tridharma 01
                            </span>
                            <div class="absolute bottom-3 left-4 right-4 text-white">
                                <span class="text-xs text-amber-400 font-medium">Inovasi Rekayasa</span>
                                <h3 class="text-lg font-bold font-heading leading-tight">Penelitian &amp; Inovasi</h3>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed mb-4">
                                Riset terapan 5 Kelompok Bidang Keahlian (KBK) yang menjawab tantangan infrastruktur berkelanjutan, inovasi material rendah karbon, dan mitigasi bencana.
                            </p>
                            <div class="space-y-2 text-xs text-slate-700">
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Riset Unggulan Berbasis Laboratorium</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Publikasi Scopus &amp; SINTA Nasional</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Hibah Riset Dosen Terapan &amp; Pengujian</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 pt-0 border-t border-slate-100 mt-2">
                        <a href="{{ route('penelitian') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-slate-50 hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition group-hover:border-[#0B2A4A]">
                            <span>Jelajahi Penelitian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- Pilar 2: Kolaborasi --}}
                <div class="group bg-white rounded-2xl border border-slate-200 hover:border-blue-300 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kolaborasi Industri UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold bg-[#0B2A4A] text-amber-400 shadow-sm uppercase tracking-wider border border-amber-400/30">
                                Tridharma 02
                            </span>
                            <div class="absolute bottom-3 left-4 right-4 text-white">
                                <span class="text-xs text-amber-400 font-medium">Sinergi Industri</span>
                                <h3 class="text-lg font-bold font-heading leading-tight">Kolaborasi &amp; Kemitraan</h3>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed mb-4">
                                Kemitraan aktif dengan BUMN Karya terkemuka, Kementerian PUPR, BBWS Citanduy, asosiasi profesi insinyur, dan perguruan tinggi luar negeri.
                            </p>
                            <div class="space-y-2 text-xs text-slate-700">
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Magang Bersertifikat Industri &amp; MBKM</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Kuliah Pakar Dosen Praktisi Konstruksi</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Sertifikasi Profesi Keinsinyuran PII / LPJK</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 pt-0 border-t border-slate-100 mt-2">
                        <a href="{{ route('kolaborasi') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-slate-50 hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition group-hover:border-[#0B2A4A]">
                            <span>Lihat Jejaring Kemitraan</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- Pilar 3: Pengabdian (PkM) --}}
                <div class="group bg-white rounded-2xl border border-slate-200 hover:border-blue-300 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Pengabdian Masyarakat UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold bg-[#EAA315] text-slate-950 shadow-sm uppercase tracking-wider">
                                Tridharma 03
                            </span>
                            <div class="absolute bottom-3 left-4 right-4 text-white">
                                <span class="text-xs text-amber-300 font-medium">Bakti Siliwangi</span>
                                <h3 class="text-lg font-bold font-heading leading-tight">Pengabdian Masyarakat</h3>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-xs text-slate-600 leading-relaxed mb-4">
                                Penerapan keilmuan dan keahlian rekayasa sipil bagi peningkatan kualitas infrastruktur pedesaan, mitigasi bencana lereng, dan edukasi gempa.
                            </p>
                            <div class="space-y-2 text-xs text-slate-700">
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Pendampingan Jembatan &amp; Jalan Desa</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Pelatihan Konstruksi Sederhana Tahan Gempa</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                    <span>Penataan Drainase &amp; Sanitasi Wilayah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 pt-0 border-t border-slate-100 mt-2">
                        <a href="{{ route('pengabdian') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-slate-50 hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition group-hover:border-[#0B2A4A]">
                            <span>Lihat Program Pengabdian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Seksi 2: Peta Riset 5 Kelompok Bidang Keahlian (KBK) --}}
    <section class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                <div>
                    <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                        Peta Jalan Penelitian
                    </p>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                        5 Kelompok Bidang Keahlian (KBK)
                    </h2>
                    <p class="text-slate-600 text-sm mt-1 max-w-2xl leading-relaxed">
                        Fokus penelitian terapan dosen berkualifikasi doktor dan magister dalam memajukan keilmuan dan teknologi infrastruktur.
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a href="{{ route('dosen') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] hover:text-[#0B2A4A] transition">
                        <span>Lihat Profil Peneliti / Dosen</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- KBK 1: Struktur & Bahan --}}
                <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center font-bold text-sm">
                            <i class="fa-solid fa-cubes-stacked"></i>
                        </span>
                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-blue-50 text-blue-700 uppercase tracking-wide">
                            Struktur &amp; Bahan
                        </span>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 font-heading mb-2">
                        Rekayasa Struktur &amp; Bahan
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Inovasi beton geopolimer rendah emisi karbon, optimasi material sambungan ekspansi jembatan (EPDM), dan sistem struktur tahan gempa.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                        <span>Lab: Uji Bahan &amp; Struktur</span>
                        <span class="text-[#0070BA] font-bold">5 Dosen Peneliti</span>
                    </div>
                </div>

                {{-- KBK 2: Sumber Daya Air --}}
                <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-lg bg-cyan-50 text-cyan-700 flex items-center justify-center font-bold text-sm">
                            <i class="fa-solid fa-water"></i>
                        </span>
                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-cyan-50 text-cyan-700 uppercase tracking-wide">
                            Keairan (SDA)
                        </span>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 font-heading mb-2">
                        Rekayasa Sumber Daya Air
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Pemodelan hidraulik limpasan DAS Citanduy, tata kelola sedimentasi Laguna Segara Anakan, konservasi waduk Leuwikeris, dan drainase perkotaan.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                        <span>Lab: Hidraulika &amp; SDA</span>
                        <span class="text-[#0070BA] font-bold">6 Dosen Peneliti</span>
                    </div>
                </div>

                {{-- KBK 3: Geoteknik --}}
                <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-sm">
                            <i class="fa-solid fa-mountain"></i>
                        </span>
                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-amber-50 text-amber-700 uppercase tracking-wide">
                            Geoteknik
                        </span>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 font-heading mb-2">
                        Rekayasa Geoteknik &amp; Pondasi
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Stabilisasi tanah lempung ekspansif dengan mineral lokal, analisis kestabilan lereng rawan longsor Priangan Timur, dan daya dukung tanah lunak.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                        <span>Lab: Mekanika Tanah</span>
                        <span class="text-[#0070BA] font-bold">3 Dosen Peneliti</span>
                    </div>
                </div>

                {{-- KBK 4: Transportasi --}}
                <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold text-sm">
                            <i class="fa-solid fa-road"></i>
                        </span>
                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 uppercase tracking-wide">
                            Transportasi
                        </span>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 font-heading mb-2">
                        Rekayasa Transportasi &amp; Jalan
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Pemanfaatan Reclaimed Asphalt Pavement (RAP), keselamatan koridor jalan tol &amp; arteri, manajemen mobilitas, dan audit geometrik jalan.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                        <span>Lab: Transportasi &amp; Jalan</span>
                        <span class="text-[#0070BA] font-bold">7 Dosen Peneliti</span>
                    </div>
                </div>

                {{-- KBK 5: Manajemen Konstruksi --}}
                <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition md:col-span-2 lg:col-span-2">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center font-bold text-sm">
                            <i class="fa-solid fa-diagram-project"></i>
                        </span>
                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-purple-50 text-purple-700 uppercase tracking-wide">
                            Manajemen Konstruksi
                        </span>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 font-heading mb-2">
                        Manajemen Rekayasa Konstruksi
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Penerapan Building Information Modeling (BIM) dalam perencanaan dan konstruksi, evaluasi rantai pasok material, sistem manajemen keselamatan konstruksi (SMKK), dan estimasi biaya terintegrasi.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                        <span>Lab: Komputasi Rekayasa &amp; BIM</span>
                        <span class="text-[#0070BA] font-bold">3 Dosen Peneliti</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Seksi 3: Ekosistem Kemitraan Strategis Industri & Instansi --}}
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-10">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Kemitraan Terpercaya
                </p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Mitra Industri, Pemerintah &amp; Asosiasi Profesi
                </h2>
                <p class="text-slate-600 text-sm mt-1 leading-relaxed">
                    Kerja sama terstruktur yang membuka akses magang kerja bersertifikat, studi lapangan proyek nyata, dan rekrutmen lulusan secara langsung.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Mitra 1: BUMN --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-2">BUMN Konstruksi</span>
                        <h4 class="font-bold text-slate-900 text-sm mb-2">Kontraktor &amp; Konsultan Nasional</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            PT Wijaya Karya (Persero) Tbk, PT PP (Persero) Tbk, PT Adhi Karya (Persero) Tbk, dan PT Hutama Karya.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-4 text-[11px] text-slate-500 font-medium">
                        Fokus: Magang MBKM &amp; Rekrutmen
                    </div>
                </div>

                {{-- Mitra 2: Pemerintah --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-2">Instansi Pemerintah</span>
                        <h4 class="font-bold text-slate-900 text-sm mb-2">Kementerian PUPR &amp; Dinas Terkait</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Balai Besar Wilayah Sungai (BBWS) Citanduy, Dinas BMPR Prov. Jabar, dan Dinas PUTR Tasikmalaya.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-4 text-[11px] text-slate-500 font-medium">
                        Fokus: Kajian Infrastruktur &amp; SDA
                    </div>
                </div>

                {{-- Mitra 3: Asosiasi --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-2">Asosiasi Profesi</span>
                        <h4 class="font-bold text-slate-900 text-sm mb-2">PII, HATHI &amp; LPJK</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Persatuan Insinyur Indonesia (PII Cabang Tasikmalaya), Himpunan Ahli Teknik Hidraulik Indonesia (HATHI), dan LPJK.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-4 text-[11px] text-slate-500 font-medium">
                        Fokus: Sertifikasi Insinyur (IPM/IPP)
                    </div>
                </div>

                {{-- Mitra 4: Global --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-2">Kemitraan Global</span>
                        <h4 class="font-bold text-slate-900 text-sm mb-2">Universitas Luar Negeri</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            National Cheng Kung University (NCKU) Taiwan, penyelenggaraan seminar internasional, dan peluang beasiswa S2/S3.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-4 text-[11px] text-slate-500 font-medium">
                        Fokus: Riset Global &amp; Studi Lanjut
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Seksi 4: Publikasi Ilmiah & Buku Dosen (Direktori Cepat) --}}
    <section class="py-12 sm:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">

                {{-- Card Publikasi --}}
                <div class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070BA] flex items-center justify-center font-bold">
                                <i class="fa-solid fa-newspaper text-base"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Luaran Riset</span>
                                <h3 class="text-lg font-bold text-slate-900">Publikasi Jurnal Ilmiah</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                            Kompilasi artikel ilmiah hasil penelitian dosen dan mahasiswa Teknik Sipil UNSIL yang terbit di jurnal internasional bereputasi Scopus (Q1-Q4) dan jurnal nasional terakreditasi SINTA.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('publikasi') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#0070BA] hover:text-[#0B2A4A] group transition">
                            <span>Buka Direktori Publikasi</span>
                            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                {{-- Card Buku Dosen --}}
                <div class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-10 h-10 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold">
                                <i class="fa-solid fa-book text-base"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Karya Intelektual</span>
                                <h3 class="text-lg font-bold text-slate-900">Buku Ajar &amp; Monograf Dosen</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                            Koleksi buku teks perkuliahan, buku referensi, dan monograf hasil penelitian ber-ISBN yang ditulis oleh sivitas akademika Teknik Sipil FT UNSIL untuk referensi akademik nasional.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('buku') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#0070BA] hover:text-[#0B2A4A] group transition">
                            <span>Buka Koleksi Buku Dosen</span>
                            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
