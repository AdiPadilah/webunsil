@extends('layouts.app')

@section('title', 'Riset dan Kolaborasi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis industri BUMN, instansi pemerintah PUPR, asosiasi profesi PII, riset unggulan dosen, dan PKM Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero --}}
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

    {{-- Jejaring Kerja Sama --}}
    <section id="kolaborasi" class="py-12 md:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">Jejaring Kerja Sama Industri</h2>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed max-w-2xl">
                    Kolaborasi aktif dalam program Magang MBKM, kuliah dosen praktisi, riset terapan, dan rekrutmen lulusan bersama mitra strategis.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">

                {{-- Foto kiri --}}
                <div class="relative rounded-lg overflow-hidden min-h-[320px] bg-slate-100 border border-slate-200">
                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kerja Sama Industri"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/80 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="text-xs text-amber-400 font-medium block mb-1">Kolaborasi Lapangan</span>
                        <h3 class="text-xl font-bold leading-tight">Kunjungan &amp; Studi Lapangan Bersama Industri</h3>
                        <p class="text-slate-300 text-xs mt-1.5 leading-relaxed">Sinergi perkuliahan dengan proyek infrastruktur nyata bersama kontraktor dan pengelola bendungan.</p>
                    </div>
                </div>

                {{-- 3 kartu kanan --}}
                <div class="flex flex-col gap-4">
                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-5 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-md bg-slate-100 text-slate-600 flex items-center justify-center text-lg shrink-0">
                            <i class="fa-solid fa-building-flag"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm">BUMN &amp; Kontraktor Nasional</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Program magang industri bersertifikat MBKM, rekrutmen lulusan, serta kuliah tamu pakar konstruksi nasional.</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-5 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-md bg-slate-100 text-slate-600 flex items-center justify-center text-lg shrink-0">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm">Instansi Pemerintah &amp; Dinas PUPR</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Sinergi bersama Dinas Bina Marga & Penataan Ruang, BBWS Citanduy, dan Pemda dalam kajian infrastruktur dan mitigasi SDA.</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-5 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-md bg-slate-100 text-slate-600 flex items-center justify-center text-lg shrink-0">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm">Asosiasi Profesi PII &amp; LPJK</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Dukungan pembinaan sertifikasi kompetensi keinsinyuran dan sertifikat keahlian kerja konstruksi bagi lulusan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fokus Riset + PKM --}}
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">Riset &amp; Pengabdian Masyarakat</h2>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed max-w-2xl">
                    Karya nyata penelitian dosen dan pengabdian sivitas akademika Teknik Sipil FT UNSIL bagi masyarakat luas.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- Fokus Penelitian --}}
                <div id="penelitian" class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Fokus Penelitian Dosen"
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">Inovasi Keilmuan</span>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Fokus Penelitian Dosen</h3>
                            <ul class="space-y-2.5 text-xs text-slate-600">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-[#0070BA] font-bold">&bull;</span>
                                    <span>Pemanfaatan fly ash dan geopolimer untuk beton berkelanjutan ramah lingkungan beremisi karbon rendah.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-[#0070BA] font-bold">&bull;</span>
                                    <span>Stabilisasi tanah lempung ekspansif dengan bahan tambah mineral lokal untuk fondasi dan perkuatan lereng.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-[#0070BA] font-bold">&bull;</span>
                                    <span>Kajian kinerja campuran aspal panas daur ulang (Reclaimed Asphalt Pavement) untuk konstruksi jalan raya.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-[#0070BA] font-bold">&bull;</span>
                                    <span>Pemodelan hidraulik limpasan hujan dan tata kelola drainase perkotaan adaptif terhadap perubahan iklim.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-3 border-t border-slate-100">
                        <a href="{{ route('penelitian') }}" class="text-xs font-semibold text-[#0070BA] hover:underline flex items-center gap-1.5">
                            <span>Buka Halaman Penelitian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- PKM --}}
                <div id="pengabdian" class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Pengabdian Kepada Masyarakat"
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">Bakti Masyarakat</span>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Pengabdian Kepada Masyarakat (PKM)</h3>
                            <ul class="space-y-2.5 text-xs text-slate-600">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-amber-600 font-bold">&bull;</span>
                                    <span>Pendampingan teknis pembangunan dan pemeliharaan sarana jembatan perintis dan jalan desa.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-amber-600 font-bold">&bull;</span>
                                    <span>Sosialisasi dan pelatihan konstruksi rumah sederhana tahan gempa bagi tukang bangunan dan warga.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-amber-600 font-bold">&bull;</span>
                                    <span>Perencanaan saluran drainase penanggulangan genangan air dan penataan sanitasi pemukiman warga.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-amber-600 font-bold">&bull;</span>
                                    <span>Edukasi mitigasi risiko tanah longsor bagi warga di perbukitan rawan bencana Priangan Timur.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-3 border-t border-slate-100">
                        <a href="{{ route('pengabdian') }}" class="text-xs font-semibold text-[#0070BA] hover:underline flex items-center gap-1.5">
                            <span>Buka Halaman Pengabdian</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


