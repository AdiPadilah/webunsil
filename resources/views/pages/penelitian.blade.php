@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Peta jalan penelitian, fokus riset 5 Kelompok Bidang Keahlian (KBK), dan skema hibah riset dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset &amp; Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Penelitian</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Tridharma &bull; Inovasi &amp; Pengembangan
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Penelitian &amp; Inovasi Keteknikan
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Pengantar & Peta Jalan Riset --}}
            <div class="max-w-3xl mb-12">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Peta Jalan Penelitian
                </p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Inovasi Berkelanjutan untuk Ketahanan Infrastruktur Nasional
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Arah penelitian Program Studi S-1 Teknik Sipil FT UNSIL diprioritaskan pada pengembangan material rendah emisi karbon, pemanfaatan sumber daya lokal Priangan Timur, ketahanan bencana gempa bumi dan tanah longsor, serta efisiensi tata kelola air dan transportasi modern.
                </p>
            </div>

            {{-- 5 Kelompok Bidang Keahlian (KBK) Showcase --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                
                {{-- KBK 1 --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-base mb-4">
                            <i class="fa-solid fa-cubes-stacked"></i>
                        </div>
                        <span class="text-[10px] font-bold text-blue-700 uppercase tracking-wide block mb-1">KBK 01</span>
                        <h3 class="text-base font-bold text-slate-900 font-heading mb-2">Rekayasa Struktur dan Bahan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            Fokus pada riset beton geopolimer ramah lingkungan berbahan dasar abu terbang (fly ash), inovasi sambungan ekspansi jembatan EPDM, dan analisis performa komponen pracetak tahan gempa.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-200 text-[11px] text-slate-500 font-medium flex items-center justify-between">
                        <span>Lab Bahan &amp; Struktur</span>
                        <span class="text-[#0070BA] font-bold">5 Peneliti</span>
                    </div>
                </div>

                {{-- KBK 2 --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-cyan-100 text-cyan-800 flex items-center justify-center font-bold text-base mb-4">
                            <i class="fa-solid fa-water"></i>
                        </div>
                        <span class="text-[10px] font-bold text-cyan-800 uppercase tracking-wide block mb-1">KBK 02</span>
                        <h3 class="text-base font-bold text-slate-900 font-heading mb-2">Rekayasa Sumber Daya Air</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            Kajian sedimentasi Laguna Segara Anakan, pemodelan hidraulik limpasan DAS Citanduy, analisis tampungan waduk Leuwikeris, dan perancangan drainase perkotaan berwawasan lingkungan (Ecodrainage).
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-200 text-[11px] text-slate-500 font-medium flex items-center justify-between">
                        <span>Lab Hidraulika &amp; SDA</span>
                        <span class="text-[#0070BA] font-bold">6 Peneliti</span>
                    </div>
                </div>

                {{-- KBK 3 --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-base mb-4">
                            <i class="fa-solid fa-mountain"></i>
                        </div>
                        <span class="text-[10px] font-bold text-amber-800 uppercase tracking-wide block mb-1">KBK 03</span>
                        <h3 class="text-base font-bold text-slate-900 font-heading mb-2">Rekayasa Geoteknik</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            Stabilisasi tanah lempung ekspansif menggunakan bahan tambah mineral lokal, mitigasi dan perkuatan lereng rawan longsor, serta analisis daya dukung fondasi di zona seismik aktif.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-200 text-[11px] text-slate-500 font-medium flex items-center justify-between">
                        <span>Lab Mekanika Tanah</span>
                        <span class="text-[#0070BA] font-bold">3 Peneliti</span>
                    </div>
                </div>

                {{-- KBK 4 --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-base mb-4">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <span class="text-[10px] font-bold text-emerald-800 uppercase tracking-wide block mb-1">KBK 04</span>
                        <h3 class="text-base font-bold text-slate-900 font-heading mb-2">Rekayasa Transportasi &amp; Jalan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            Evaluasi kinerja perkerasan aspal daur ulang (RAP), analisis karakteristik lalu lintas jalan arteri dan tol, audit keselamatan geometrik jalan raya, dan perancangan rute angkutan umum terpadu.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-200 text-[11px] text-slate-500 font-medium flex items-center justify-between">
                        <span>Lab Transportasi &amp; Jalan</span>
                        <span class="text-[#0070BA] font-bold">7 Peneliti</span>
                    </div>
                </div>

                {{-- KBK 5 --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between md:col-span-2 lg:col-span-2">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-base mb-4">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        <span class="text-[10px] font-bold text-purple-800 uppercase tracking-wide block mb-1">KBK 05</span>
                        <h3 class="text-base font-bold text-slate-900 font-heading mb-2">Manajemen Rekayasa Konstruksi</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            Penerapan Building Information Modeling (BIM) dalam siklus hidup proyek infrastruktur, evaluasi produktivitas tenaga kerja, manajemen risiko rantai pasok material konstruksi, dan implementasi Sistem Manajemen Keselamatan Konstruksi (SMKK).
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-200 text-[11px] text-slate-500 font-medium flex items-center justify-between">
                        <span>Lab Komputasi Rekayasa &amp; BIM</span>
                        <span class="text-[#0070BA] font-bold">3 Peneliti</span>
                    </div>
                </div>

            </div>

            {{-- Fasilitas Laboratorium Pendukung Riset --}}
            <div class="pt-10 border-t border-slate-200">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 font-heading">
                            Fasilitas Laboratorium Riset &amp; Pengujian
                        </h3>
                        <p class="text-slate-500 text-xs sm:text-sm mt-0.5">
                            Didukung peralatan uji terstandar SNI dan ASTM untuk riset mandiri, skripsi, dan pengujian industri:
                        </p>
                    </div>
                    <a href="{{ route('laboratorium') }}" class="text-xs font-semibold text-[#0070BA] hover:underline flex items-center gap-1">
                        <span>Lihat Semua Lab</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <span class="text-xs font-bold text-[#0070BA] block mb-1">Lab Struktur &amp; Bahan</span>
                        <p class="text-xs text-slate-600 leading-relaxed">Mesin uji tekan beton (Compression Testing Machine), uji tarik baja, dan nondestructive test (Hammer Test).</p>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <span class="text-xs font-bold text-[#0070BA] block mb-1">Lab Mekanika Tanah</span>
                        <p class="text-xs text-slate-600 leading-relaxed">Uji kuat geser langsung (Direct Shear), Triaxial, Konsolidasi, Atterberg Limits, dan Sondir lapangan.</p>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <span class="text-xs font-bold text-[#0070BA] block mb-1">Lab Hidraulika &amp; SDA</span>
                        <p class="text-xs text-slate-600 leading-relaxed">Saluran terbuka (Flume Channel), uji debit aliran, pengukuran tekanan air, dan pemodelan hidraulik fisik.</p>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <span class="text-xs font-bold text-[#0070BA] block mb-1">Lab Transportasi &amp; Ukur</span>
                        <p class="text-xs text-slate-600 leading-relaxed">Marshall Test alat uji campuran aspal, penetrasi bitumen, Total Station, dan alat ukur pemetaan kontur.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
