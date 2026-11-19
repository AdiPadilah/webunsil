@extends('layouts.app')

@section('title', 'Riset dan Kolaborasi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis industri BUMN, instansi pemerintah PUPR, asosiasi profesi PII, riset unggulan dosen, dan PKM Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Riset &amp; Kolaborasi</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Inovasi, Industri &amp; Pengabdian
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Riset &amp; Kolaborasi
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Membangun sinergi antara perguruan tinggi, industri konstruksi nasional, lembaga riset, dan pemerintah daerah untuk percepatan pembangunan infrastruktur berkelanjutan.
            </p>
        </div>
    </section>

    {{-- Jejaring Kerja Sama — foto besar + 3 kartu --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kemitraan Strategis</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Jejaring Kerja Sama Industri</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">Kolaborasi aktif dalam program Magang MBKM, kuliah dosen praktisi, riset terapan, dan rekrutmen lulusan.</p>
            </div>

            {{-- Layout: foto kiri besar + 3 kartu kanan --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">

                {{-- Foto besar --}}
                <div class="relative rounded-3xl overflow-hidden min-h-[360px] shadow-lg">
                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kerja Sama Industri"
                         class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/90 via-[#0B2A4A]/40 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-8">
                        <span class="text-amber-400 font-bold uppercase text-[11px] tracking-wider mb-2">Kolaborasi Lapangan</span>
                        <h3 class="text-2xl font-black text-white leading-tight mb-2">Kunjungan & Studi Lapangan Bersama Industri</h3>
                        <p class="text-slate-300 text-xs leading-relaxed">Mahasiswa dan dosen bersinergi langsung dengan proyek infrastruktur nyata bersama mitra industri konstruksi nasional.</p>
                    </div>
                </div>

                {{-- 3 kartu kanan --}}
                <div class="flex flex-col gap-4">
                    <div class="group bg-slate-50 hover:bg-blue-50 border border-slate-200 hover:border-blue-200 rounded-2xl p-6 transition-all duration-300 flex items-start gap-5">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl shrink-0 group-hover:bg-blue-200 transition">
                            <i class="fa-solid fa-building-flag"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm">BUMN &amp; Kontraktor Nasional</h3>
                            <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Kerja sama magang industri konstruksi bersertifikat MBKM, rekrutmen fresh graduate, dan kuliah dosen praktisi berpengalaman proyek nasional.</p>
                        </div>
                    </div>
                    <div class="group bg-slate-50 hover:bg-amber-50 border border-slate-200 hover:border-amber-200 rounded-2xl p-6 transition-all duration-300 flex items-start gap-5">
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl shrink-0 group-hover:bg-amber-200 transition">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm">Instansi Pemerintah &amp; PUPR</h3>
                            <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Sinergi dengan Dinas PUPR Provinsi Jawa Barat, BBWS Citanduy, dan Pemda Priangan Timur dalam studi perencanaan dan mitigasi drainase/banjir.</p>
                        </div>
                    </div>
                    <div class="group bg-slate-50 hover:bg-emerald-50 border border-slate-200 hover:border-emerald-200 rounded-2xl p-6 transition-all duration-300 flex items-start gap-5">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl shrink-0 group-hover:bg-emerald-200 transition">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm">Asosiasi Profesi PII &amp; LPJK</h3>
                            <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pembinaan sertifikasi kompetensi STRI, Program Profesi Insinyur (PPI), dan uji kompetensi kerja konstruksi bagi lulusan Teknik Sipil UNSIL.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fokus Riset + PKM — dark navy bg --}}
    <section class="py-16 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 220px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-amber-400 font-bold uppercase text-xs tracking-wider">Inovasi &amp; Bakti</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2 font-heading">Riset &amp; Pengabdian Masyarakat</h2>
                <div class="w-14 h-1 bg-amber-400 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- Fokus Penelitian --}}
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Fokus Penelitian Dosen"
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-5">
                            <span class="text-[10px] text-blue-300 font-bold uppercase tracking-wider">Inovasi Keilmuan</span>
                            <h3 class="text-lg font-black text-white">Fokus Penelitian Dosen</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-xs text-slate-300">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Pemanfaatan fly ash dan geopolimer untuk beton berkelanjutan ramah lingkungan beremisi karbon rendah.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Stabilisasi tanah lempung ekspansif dengan bahan tambah mineral lokal Priangan Timur untuk fondasi jalan dan lereng.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Kajian kinerja campuran aspal panas daur ulang (Reclaimed Asphalt Pavement) untuk konstruksi jalan raya efisien.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Pemodelan hidraulik limpasan hujan dan tata kelola drainase perkotaan adaptif terhadap perubahan iklim.</span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-white/10 flex items-center justify-between">
                            <span class="text-[11px] text-slate-400">Publikasi Riset Terindeks SINTA</span>
                            <a href="{{ route('karya-dosen') }}" class="text-xs font-bold text-amber-400 hover:text-amber-300 transition">Lihat Karya Dosen &rarr;</a>
                        </div>
                    </div>
                </div>

                {{-- PKM --}}
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/event-1.jpg') }}" alt="Pengabdian Kepada Masyarakat"
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-5">
                            <span class="text-[10px] text-amber-300 font-bold uppercase tracking-wider">Bakti Masyarakat</span>
                            <h3 class="text-lg font-black text-white">Pengabdian Kepada Masyarakat (PKM)</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-xs text-slate-300">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Pendampingan teknis pembangunan dan pemeliharaan sarana jembatan perintis dan jalan desa terisolir.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Sosialisasi dan pelatihan konstruksi rumah sederhana tahan gempa bagi tukang bangunan dan masyarakat pedesaan.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Perencanaan saluran drainase penanggulangan genangan air dan penataan sanitasi di kawasan pemukiman padat.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-400 mt-0.5 text-sm shrink-0"></i>
                                <span>Edukasi mitigasi risiko tanah longsor bagi warga di perbukitan rawan bencana wilayah Tasikmalaya dan sekitarnya.</span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-white/10 flex items-center justify-between">
                            <span class="text-[11px] text-slate-400">Bakti Nyata Sivitas Akademika UNSIL</span>
                            <a href="{{ route('home') }}#lokasi" class="text-xs font-bold text-amber-400 hover:text-amber-300 transition">Lokasi Pengabdian &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
