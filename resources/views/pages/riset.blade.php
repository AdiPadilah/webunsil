@extends('layouts.app')

@section('title', 'Riset dan Kolaborasi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis industri BUMN, instansi pemerintah PUPR, asosiasi profesi PII, riset unggulan dosen, dan PKM Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
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

    {{-- Seksi 1: Jejaring Kerja Sama Industri --}}
    <section id="kolaborasi" class="py-12 md:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-10">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Kemitraan Strategis
                </p>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                    Jejaring Kerja Sama Industri
                </h2>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed">
                    Kolaborasi aktif dalam program Magang MBKM, kuliah dosen praktisi, riset terapan, dan rekrutmen lulusan bersama mitra strategis.
                </p>
            </div>

            {{-- 3 Kartu Kemitraan Sejajar --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                
                {{-- Kartu 1: BUMN --}}
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-blue-100 text-[#0070BA] flex items-center justify-center text-lg mb-4">
                            <i class="fa-solid fa-building-flag"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base mb-2">BUMN &amp; Kontraktor Nasional</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Program magang industri bersertifikat MBKM, rekrutmen lulusan, serta kuliah tamu pakar konstruksi nasional.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-5">
                        <span class="inline-block text-[11px] font-semibold text-[#0070BA] bg-blue-50 px-2.5 py-1 rounded-md border border-blue-200">
                            Magang MBKM &amp; Rekrutmen
                        </span>
                    </div>
                </div>

                {{-- Kartu 2: Pemerintah & PUPR --}}
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-cyan-100 text-cyan-800 flex items-center justify-center text-lg mb-4">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base mb-2">Instansi Pemerintah &amp; Dinas PUPR</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Sinergi bersama Dinas Bina Marga &amp; Penataan Ruang, BBWS Citanduy, dan Pemda dalam kajian infrastruktur dan mitigasi SDA.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-5">
                        <span class="inline-block text-[11px] font-semibold text-cyan-800 bg-cyan-50 px-2.5 py-1 rounded-md border border-cyan-200">
                            Kajian Infrastruktur &amp; SDA
                        </span>
                    </div>
                </div>

                {{-- Kartu 3: Asosiasi PII & LPJK --}}
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg mb-4">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base mb-2">Asosiasi Profesi PII &amp; LPJK</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Dukungan pembinaan sertifikasi kompetensi keinsinyuran dan sertifikat keahlian kerja konstruksi bagi lulusan.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200 mt-5">
                        <span class="inline-block text-[11px] font-semibold text-amber-800 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                            Sertifikasi Keinsinyuran
                        </span>
                    </div>
                </div>

            </div>

            {{-- Kartu Showcase Kunjungan Lapangan --}}
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden shadow-sm grid grid-cols-1 lg:grid-cols-12 items-stretch">
                <div class="lg:col-span-5 relative min-h-[240px] sm:min-h-[280px] bg-slate-200">
                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan & Studi Lapangan Bersama Industri" class="w-full h-full object-cover">
                </div>
                <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-2">
                            Kolaborasi Lapangan
                        </span>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading mb-3 leading-snug">
                            Kunjungan &amp; Studi Lapangan Bersama Industri
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Sinergi perkuliahan dengan proyek infrastruktur nyata bersama kontraktor dan pengelola bendungan untuk memperkaya pemahaman praktis mahasiswa dalam perancangan dan pelaksanaan konstruksi modern.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-slate-200 mt-6 flex flex-wrap items-center justify-between gap-3">
                        <div class="flex items-center gap-4 text-xs text-slate-500">
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-location-dot text-[#0070BA]"></i> Bendungan Leuwikeris</span>
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-users text-[#0070BA]"></i> Dosen &amp; Mahasiswa</span>
                        </div>
                        <a href="{{ route('kolaborasi') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] hover:text-[#0B2A4A] transition">
                            <span>Buka Halaman Kolaborasi</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Seksi 2: Riset & Pengabdian Masyarakat --}}
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-10">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Tridharma Keteknikan
                </p>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                    Riset &amp; Pengabdian Masyarakat
                </h2>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed">
                    Karya nyata penelitian dosen dan pengabdian sivitas akademika Teknik Sipil FT UNSIL bagi masyarakat luas.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

                {{-- Kolom Kiri: Fokus Penelitian Dosen --}}
                <div id="penelitian" class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="h-52 overflow-hidden bg-slate-100 relative">
                            <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Fokus Penelitian Dosen" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-6 right-6 text-white">
                                <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-0.5">Inovasi Keilmuan</span>
                                <h3 class="text-xl font-bold font-heading">Fokus Penelitian Dosen</h3>
                            </div>
                        </div>

                        <div class="p-6 space-y-3">
                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">1</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Pemanfaatan fly ash dan geopolimer untuk beton berkelanjutan ramah lingkungan beremisi karbon rendah.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">2</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Stabilisasi tanah lempung ekspansif dengan bahan tambah mineral lokal untuk fondasi dan perkuatan lereng.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">3</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Kajian kinerja campuran aspal panas daur ulang (Reclaimed Asphalt Pavement) untuk konstruksi jalan raya.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">4</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Pemodelan hidraulik limpasan hujan dan tata kelola drainase perkotaan adaptif terhadap perubahan iklim.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0 border-t border-slate-100 mt-2">
                        <a href="{{ route('penelitian') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-slate-50 hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition">
                            <span>Buka Halaman Penelitian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- Kolom Kanan: Pengabdian Kepada Masyarakat (PKM) --}}
                <div id="pengabdian" class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="h-52 overflow-hidden bg-slate-100 relative">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Pengabdian Kepada Masyarakat" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-6 right-6 text-white">
                                <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider block mb-0.5">Bakti Masyarakat</span>
                                <h3 class="text-xl font-bold font-heading">Pengabdian Kepada Masyarakat (PKM)</h3>
                            </div>
                        </div>

                        <div class="p-6 space-y-3">
                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">1</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Pendampingan teknis pembangunan dan pemeliharaan sarana jembatan perintis dan jalan desa.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">2</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Sosialisasi dan pelatihan konstruksi rumah sederhana tahan gempa bagi tukang bangunan dan warga.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">3</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Perencanaan saluran drainase penanggulangan genangan air dan penataan sanitasi pemukiman warga.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">4</span>
                                <p class="text-xs text-slate-700 leading-relaxed">
                                    Edukasi mitigasi risiko tanah longsor bagi warga di perbukitan rawan bencana Priangan Timur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0 border-t border-slate-100 mt-2">
                        <a href="{{ route('pengabdian') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-slate-50 hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition">
                            <span>Buka Halaman Pengabdian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
