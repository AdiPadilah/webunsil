@extends('layouts.app')

@section('title', 'Pengabdian Kepada Masyarakat (PkM) | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Program Pengabdian Kepada Masyarakat (PkM) dosen dan mahasiswa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi untuk pemberdayaan masyarakat dan pembangunan desa.')

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
                <span class="text-slate-200">Pengabdian</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Tridharma Perguruan Tinggi &bull; Bakti Siliwangi
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Pengabdian Kepada Masyarakat (PkM)
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Pengantar & Nilai PkM --}}
            <div class="max-w-3xl mb-12">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Hilirisasi Keilmuan
                </p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Mendedikasikan Keahlian Ketekniksipilan untuk Kesejahteraan Rakyat
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Pengabdian kepada Masyarakat (PkM) merupakan wujud komitmen sivitas akademika Program Studi S-1 Teknik Sipil FT UNSIL dalam menghilirkan hasil riset dan keahlian rekayasa untuk mengatasi persoalan nyata infrastruktur pedesaan, mitigasi bencana, dan penataan lingkungan permukiman.
                </p>
            </div>

            {{-- 4 Program Unggulan PkM --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">

                {{-- Program 1: Jembatan & Jalan Desa --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-bridge"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Infrastruktur Pedesaan</span>
                                <h3 class="text-lg font-bold text-slate-900">Pendampingan Jembatan &amp; Jalan Desa Perintis</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Membantu aparat desa dan warga dalam perencanaan teknis, survei elevasi kontur, estimasi anggaran biaya (RAB), dan pengawasan konstruksi jembatan gantung serta jalan rabat beton pedesaan.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Perhitungan kekuatan bentang jembatan penyeberangan warga</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Penyusunan gambar kerja teknis (DED) untuk dana desa</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Pemeriksaan kelaikan struktur jembatan eksisting</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Program 2: Rumah Tahan Gempa --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-blue-100 text-[#0070BA] flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-house-chimney-crack"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Ketahanan Bencana</span>
                                <h3 class="text-lg font-bold text-slate-900">Pelatihan Rumah Sederhana Tahan Gempa</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Sosialisasi dan pelatihan langsung bagi tukang bangunan lokal, mandor, dan warga mengenai kaidah penulangan kolom praktis, ikatan sloof-fondasi, dan angkur atap sesuai kaidah bangunan tahan gempa.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Bimbingan teknis detail pembesian sudut dan tumpuan</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Modul panduan praktis rumah aman gempa bagi warga</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Simulasi perkuatan dinding bata dengan kawat ayam/ferosemen</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Program 3: Mitigasi Longsor --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-mound"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Geoteknik Lingkungan</span>
                                <h3 class="text-lg font-bold text-slate-900">Mitigasi Risiko Longsor di Priangan Timur</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Edukasi masyarakat di daerah perbukitan dan lereng terjal mengenai tanda-tanda retakan tanah, pemanfaatan tanaman penahan erosi (rumput vetiver), serta pembuatan terasering dan sistem sulingan drainase lereng.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Pemetaan titik rawan longsor tingkat kecamatan/desa</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Pemasangan patok pemantau pergerakan tanah sederhana</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Pelatihan evakuasi mandiri bersama BPBD daerah</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Program 4: Drainase & Sanitasi --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-800 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-faucet-drip"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Kesehatan Lingkungan</span>
                                <h3 class="text-lg font-bold text-slate-900">Tata Kelola Drainase &amp; Sanitasi Permukiman</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Pendampingan perancangan saluran drainase penanggulangan genangan air hujan, pembangunan sumur resapan komunal, dan penataan instalasi pengolahan air limbah domestik (IPALD) sederhana bagi warga.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Desain dimensi saluran drainase bebas sumbatan</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Penerapan biopori dan lubang resapan air hujan di lingkungan RT/RW</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Sosialisasi sanitasi ramah lingkungan dan perlindungan air tanah</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
