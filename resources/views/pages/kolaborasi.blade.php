@extends('layouts.app')

@section('title', 'Kolaborasi & Kemitraan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis Program Studi S-1 Teknik Sipil FT UNSIL dengan BUMN Karya, Kementerian PUPR, asosiasi profesi PII, dan universitas internasional.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300">Riset dan Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Kolaborasi</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Sinergi Industri &bull; Kemitraan Strategis
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Kolaborasi Industri &amp; Instansi
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Membangun jejaring sinergis antara dunia akademik, industri jasa konstruksi nasional, kementerian teknis, dan mitra global guna mempercepat transfer teknologi dan kesiapan kerja lulusan.
            </p>

            {{-- Link navigasi ke turunan lainnya --}}
            <div class="flex flex-wrap items-center gap-3 mt-6 pt-6 border-t border-white/10">
                <span class="text-xs text-slate-300 font-semibold">Navigasi Riset:</span>
                <a href="{{ route('penelitian') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-microscope text-[10px]"></i> Penelitian
                </a>
                <a href="{{ route('pengabdian') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-people-carry-box text-[10px]"></i> Pengabdian (PkM)
                </a>
                <a href="{{ route('buku') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-book text-[10px]"></i> Buku
                </a>
                <a href="{{ route('publikasi') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-newspaper text-[10px]"></i> Publikasi
                </a>
            </div>
        </div>
    </section>

    {{-- Klaster Mitra Kolaborasi --}}
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Jejaring Mitra</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Ekosistem Kemitraan Sinergis</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Kerja sama terstruktur yang mencakup program MBKM, magang industri bersertifikat, kuliah dosen praktisi, dan uji mutu laboratorium.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
                {{-- Klaster 1: BUMN Karya --}}
                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-blue-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-building-flag"></i>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base font-heading">BUMN &amp; Kontraktor</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            PT Wijaya Karya (Wika), PT Waskita Karya, PT PP, PT Adhi Karya, dan kontraktor nasional terkemuka.
                        </p>
                        <ul class="mt-3 space-y-1.5 text-[11px] text-slate-500">
                            <li>&bull; Magang Industri MBKM 1-2 Semester</li>
                            <li>&bull; Kuliah Praktisi Proyek Nyata</li>
                            <li>&bull; Rekrutmen Khusus Lulusan</li>
                        </ul>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-blue-700 font-semibold">
                        Sektor Jasa Konstruksi
                    </div>
                </div>

                {{-- Klaster 2: Instansi Pemerintah --}}
                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-amber-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base font-heading">Kementerian &amp; Dinas PUPR</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Kementerian PUPR, Balai Besar Wilayah Sungai (BBWS Citanduy), Dinas Bina Marga &amp; Tata Air Jabar, Pemda Priangan Timur.
                        </p>
                        <ul class="mt-3 space-y-1.5 text-[11px] text-slate-500">
                            <li>&bull; Studi Kelayakan &amp; Amdal Daerah</li>
                            <li>&bull; Kajian Pengendalian Banjir &amp; Erosi</li>
                            <li>&bull; Penataan Drainase Kawasan</li>
                        </ul>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-amber-700 font-semibold">
                        Sektor Regulator &amp; Pengairan
                    </div>
                </div>

                {{-- Klaster 3: Asosiasi Profesi --}}
                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-emerald-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base font-heading">Asosiasi Profesi Keinsinyuran</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Persatuan Insinyur Indonesia (PII), LPJK, Himpunan Ahli Teknik Hidraulik Indonesia (HATHI), HPJI.
                        </p>
                        <ul class="mt-3 space-y-1.5 text-[11px] text-slate-500">
                            <li>&bull; Pembinaan Sertifikasi Keinsinyuran (STRI)</li>
                            <li>&bull; Program Profesi Insinyur (PPI)</li>
                            <li>&bull; Uji Kompetensi Keahlian Kerja</li>
                        </ul>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-emerald-700 font-semibold">
                        Sektor Sertifikasi Profesi
                    </div>
                </div>

                {{-- Klaster 4: Universitas Global --}}
                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-purple-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base font-heading">Mitra Global &amp; Internasional</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            National Cheng Kung University (NCKU) Taiwan, konsorsium BKS-TS Indonesia, dan forum akademisi Asia Tenggara.
                        </p>
                        <ul class="mt-3 space-y-1.5 text-[11px] text-slate-500">
                            <li>&bull; Joint International Conference</li>
                            <li>&bull; Visiting Professor &amp; Guest Lecture</li>
                            <li>&bull; Riset Kolaboratif Dua Negara</li>
                        </ul>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-purple-700 font-semibold">
                        Sektor Internasionalisasi
                    </div>
                </div>
            </div>

            {{-- Dokumentasi Kegiatan Kolaborasi --}}
            <div class="bg-[#0B2A4A] text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-2xl">
                <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none"
                     style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <span class="text-amber-400 font-bold uppercase text-[11px] tracking-wider mb-2 block">
                            Aktivitas Nyata di Lapangan
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-black font-heading leading-tight">
                            Kunjungan &amp; Studi Lapangan Proyek Strategis Nasional
                        </h3>
                        <p class="text-slate-300 text-xs sm:text-sm mt-3 leading-relaxed">
                            Mahasiswa dan dosen Prodi S-1 Teknik Sipil FT UNSIL terlibat langsung dalam peninjauan konstruksi bendungan raksasa Leuwikeris, proyek jalan tol Cigatas (Cileunyi-Garut-Tasikmalaya), dan pengujian mutu material bersama instansi pemerintah dan BUMN Karya.
                        </p>
                        <div class="flex items-center gap-4 mt-6">
                            <div class="bg-white/10 px-4 py-2 rounded-xl border border-white/15">
                                <span class="text-lg font-black text-amber-400">25+</span>
                                <span class="text-[11px] text-slate-300 block">Mitra Industri Aktif</span>
                            </div>
                            <div class="bg-white/10 px-4 py-2 rounded-xl border border-white/15">
                                <span class="text-lg font-black text-amber-400">100%</span>
                                <span class="text-[11px] text-slate-300 block">Dukungan MBKM</span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl overflow-hidden shadow-xl border-2 border-white/20">
                        <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Industri Bendungan Leuwikeris" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
