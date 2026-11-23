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

    {{-- Bento Grid Asimetris Persis UNPAD (Row 1: 5 & 7 | Row 2: 7 & 5) --}}
    <section class="py-10 sm:py-14 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 lg:gap-6">

                {{-- Baris 1: Card Kiri (5 Kolom ~ Persis 'Kawasan Sains dan Teknologi' di UNPAD) --}}
                <a href="#penelitian" class="col-span-1 sm:col-span-5 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Fokus Penelitian Dosen" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Inovasi Keilmuan</span>
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Fokus Penelitian Dosen
                        </h3>
                    </div>
                </a>

                {{-- Baris 1: Card Kanan (7 Kolom ~ Persis 'Laboratorium Sentral' di UNPAD) --}}
                <a href="#kolaborasi" class="col-span-1 sm:col-span-7 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Jejaring Kerja Sama Industri" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Kemitraan Strategis</span>
                        <h3 class="text-lg sm:text-xl sm:text-2xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Jejaring Kerja Sama Industri
                        </h3>
                    </div>
                </a>

                {{-- Baris 2: Card Kiri (7 Kolom ~ Persis 'Transportasi Kampus' di UNPAD) --}}
                <a href="#pengabdian" class="col-span-1 sm:col-span-7 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/event-1.jpg') }}" alt="Pengabdian Kepada Masyarakat" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Bakti Masyarakat</span>
                        <h3 class="text-lg sm:text-xl sm:text-2xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Pengabdian Kepada Masyarakat (PKM)
                        </h3>
                    </div>
                </a>

                {{-- Baris 2: Card Kanan (5 Kolom ~ Persis 'Masjid Raya Unpad' di UNPAD) --}}
                <a href="{{ route('laboratorium') }}" class="col-span-1 sm:col-span-5 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Fasilitas Laboratorium Riset" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Fasilitas Penunjang</span>
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Laboratorium Riset &amp; Uji Bahan
                        </h3>
                    </div>
                </a>

            </div>

        </div>
    </section>

    {{-- Seksi 1: Jejaring Kerja Sama Industri --}}
    <section id="kolaborasi" class="py-12 md:py-16 bg-slate-50 border-b border-slate-200 scroll-mt-20">
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
                <div class="bg-white border border-slate-200 rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-blue-100 text-[#0070BA] flex items-center justify-center text-lg mb-4">
                            <i class="fa-solid fa-building-flag"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base mb-2">BUMN &amp; Kontraktor Nasional</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Program magang industri bersertifikat MBKM, rekrutmen lulusan, serta kuliah tamu pakar konstruksi nasional.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-5">
                        <span class="inline-block text-[11px] font-semibold text-[#0070BA] bg-blue-50 px-2.5 py-1 rounded-md border border-blue-200">
                            Magang MBKM &amp; Rekrutmen
                        </span>
                    </div>
                </div>

                {{-- Kartu 2: Pemerintah & PUPR --}}
                <div class="bg-white border border-slate-200 rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-cyan-100 text-cyan-800 flex items-center justify-center text-lg mb-4">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base mb-2">Instansi Pemerintah &amp; Dinas PUPR</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Sinergi bersama Dinas Bina Marga &amp; Penataan Ruang, BBWS Citanduy, dan Pemda dalam kajian infrastruktur dan mitigasi SDA.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-5">
                        <span class="inline-block text-[11px] font-semibold text-cyan-800 bg-cyan-50 px-2.5 py-1 rounded-md border border-cyan-200">
                            Kajian Infrastruktur &amp; SDA
                        </span>
                    </div>
                </div>

                {{-- Kartu 3: Asosiasi PII & LPJK --}}
                <div class="bg-white border border-slate-200 rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg mb-4">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base mb-2">Asosiasi Profesi PII &amp; LPJK</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Dukungan pembinaan sertifikasi kompetensi keinsinyuran dan sertifikat keahlian kerja konstruksi bagi lulusan.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-5">
                        <span class="inline-block text-[11px] font-semibold text-amber-800 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                            Sertifikasi Keinsinyuran
                        </span>
                    </div>
                </div>

            </div>

            {{-- Kartu Kunjungan Lapangan --}}
            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-sm">
                <div>
                    <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-1">
                        Kolaborasi Lapangan
                    </span>
                    <h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading">
                        Kunjungan &amp; Studi Lapangan Bersama Industri
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed max-w-2xl">
                        Sinergi perkuliahan dengan proyek infrastruktur nyata bersama kontraktor dan pengelola bendungan untuk memperkuat wawasan mahasiswa.
                    </p>
                </div>
                <a href="{{ route('kolaborasi') }}" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-xl bg-[#0B2A4A] hover:bg-blue-900 text-amber-400 font-bold text-xs shadow transition shrink-0">
                    <span>Halaman Kolaborasi</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

        </div>
    </section>

    {{-- Seksi 2: Riset & Pengabdian Masyarakat --}}
    <section class="py-12 md:py-16 bg-white min-h-screen">
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
                <div id="penelitian" class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm flex flex-col justify-between scroll-mt-20">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-8 h-8 rounded-lg bg-blue-100 text-[#0070BA] flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-microscope"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Inovasi Keilmuan</span>
                                <h3 class="text-xl font-bold text-slate-900 font-heading">Fokus Penelitian Dosen</h3>
                            </div>
                        </div>

                        <div class="space-y-3 mt-6">
                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">1</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Pemanfaatan fly ash dan geopolimer untuk beton berkelanjutan ramah lingkungan beremisi karbon rendah.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">2</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Stabilisasi tanah lempung ekspansif dengan bahan tambah mineral lokal untuk fondasi dan perkuatan lereng.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">3</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Kajian kinerja campuran aspal panas daur ulang (Reclaimed Asphalt Pavement) untuk konstruksi jalan raya.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-[#0070BA] text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">4</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Pemodelan hidraulik limpasan hujan dan tata kelola drainase perkotaan adaptif terhadap perubahan iklim.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-200 mt-6">
                        <a href="{{ route('penelitian') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-white hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition">
                            <span>Buka Halaman Penelitian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- Kolom Kanan: Pengabdian Kepada Masyarakat (PKM) --}}
                <div id="pengabdian" class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm flex flex-col justify-between scroll-mt-20">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-8 h-8 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Bakti Masyarakat</span>
                                <h3 class="text-xl font-bold text-slate-900 font-heading">Pengabdian Kepada Masyarakat (PKM)</h3>
                            </div>
                        </div>

                        <div class="space-y-3 mt-6">
                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">1</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Pendampingan teknis pembangunan dan pemeliharaan sarana jembatan perintis dan jalan desa.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">2</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Sosialisasi dan pelatihan konstruksi rumah sederhana tahan gempa bagi tukang bangunan dan warga.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">3</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Perencanaan saluran drainase penanggulangan genangan air dan penataan sanitasi pemukiman warga.
                                </p>
                            </div>

                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200">
                                <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">4</span>
                                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                    Edukasi mitigasi risiko tanah longsor bagi warga di perbukitan rawan bencana Priangan Timur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-200 mt-6">
                        <a href="{{ route('pengabdian') }}" class="inline-flex items-center justify-between w-full py-2.5 px-4 rounded-xl bg-white hover:bg-[#0B2A4A] text-slate-800 hover:text-amber-400 border border-slate-200 text-xs font-bold transition">
                            <span>Buka Halaman Pengabdian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
