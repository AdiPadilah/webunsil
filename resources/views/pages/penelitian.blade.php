@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Peta jalan penelitian, fokus riset 5 Kelompok Bidang Keahlian (KBK), dan skema hibah riset dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

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
                <span class="text-white font-semibold">Penelitian</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Tridharma &bull; Inovasi &amp; Pengembangan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Penelitian &amp; Inovasi Keteknikan
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Pengembangan riset terapan berwawasan lingkungan dan mitigasi bencana pada 5 Kelompok Bidang Keahlian (KBK) guna menjawab tantangan pembangunan infrastruktur berkelanjutan di tingkat regional dan nasional.
            </p>
        </div>
    </section>

    {{-- Roadmap Riset 5 KBK --}}
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Peta Jalan Keilmuan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fokus Riset 5 Kelompok Bidang Keahlian</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Aktivitas penelitian dosen dan mahasiswa diarahkan sesuai klaster kepakaran KBK untuk menghasilkan inovasi terukur dan terpublikasi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- KBK 1: Struktur & Bahan --}}
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-7 hover:shadow-xl hover:border-blue-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-cubes-stacked"></i>
                        </div>
                        <span class="text-[10px] font-bold text-blue-800 bg-blue-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">KBK 1</span>
                        <h3 class="font-extrabold text-slate-900 text-lg mt-2 font-heading group-hover:text-blue-700 transition">Rekayasa Struktur &amp; Bahan</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Pengembangan material konstruksi ramah lingkungan (geopolimer, substitusi fly ash/slag), evaluasi ketahanan gempa SNI 1726, teknologi beton prategang, dan perkuatan struktur gedung &amp; jembatan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-blue-700 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-microscope text-[10px]"></i> Lab. Bahan &amp; Struktur Kampus 2
                    </div>
                </div>

                {{-- KBK 2: Geoteknik --}}
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-7 hover:shadow-xl hover:border-amber-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-mountain"></i>
                        </div>
                        <span class="text-[10px] font-bold text-amber-800 bg-amber-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">KBK 2</span>
                        <h3 class="font-extrabold text-slate-900 text-lg mt-2 font-heading group-hover:text-amber-700 transition">Geoteknik</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Stabilisasi tanah lempung ekspansif dengan mineral lokal Priangan Timur, perkuatan lereng rawan longsor, analisis daya dukung fondasi dalam/dangkal, dan uji triaksial batuan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-amber-700 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-trowel text-[10px]"></i> Lab. Mekanika Tanah &amp; Batuan
                    </div>
                </div>

                {{-- KBK 3: Sumber Daya Air --}}
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-7 hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-water"></i>
                        </div>
                        <span class="text-[10px] font-bold text-cyan-800 bg-cyan-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">KBK 3</span>
                        <h3 class="font-extrabold text-slate-900 text-lg mt-2 font-heading group-hover:text-cyan-700 transition">Teknik Sumber Daya Air</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Pemodelan hidraulika sungai dan bendungan (HEC-RAS), analisis laju erosi DAS Citanduy hulu berbasis SIG MUSLE, mitigasi sedimentasi muara Segara Anakan, dan sistem drainase perkotaan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-cyan-700 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-droplet text-[10px]"></i> Lab. Hidrolika &amp; Hidrologi
                    </div>
                </div>

                {{-- KBK 4: Transportasi --}}
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-7 hover:shadow-xl hover:border-emerald-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <span class="text-[10px] font-bold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">KBK 4</span>
                        <h3 class="font-extrabold text-slate-900 text-lg mt-2 font-heading group-hover:text-emerald-700 transition">Rekayasa Transportasi</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Kajian kinerja campuran aspal panas daur ulang (Reclaimed Asphalt Pavement/RAP), perencanaan geometrik jalan bebas hambatan, pemodelan kapasitas lalu lintas, dan sistem transportasi massal.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-emerald-700 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-gauge text-[10px]"></i> Lab. Perkerasan Jalan Raya
                    </div>
                </div>

                {{-- KBK 5: Manajemen Konstruksi --}}
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-7 hover:shadow-xl hover:border-purple-300 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <span class="text-[10px] font-bold text-purple-800 bg-purple-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">KBK 5</span>
                        <h3 class="font-extrabold text-slate-900 text-lg mt-2 font-heading group-hover:text-purple-700 transition">Manajemen Konstruksi</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Implementasi Building Information Modelling (BIM 5D), manajemen mutu dan risiko proyek infrastruktur, estimasi biaya RAB berbasis data digital, serta sistem Keselamatan &amp; Kesehatan Kerja (K3).
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-purple-700 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-laptop-code text-[10px]"></i> Lab. Komputasi &amp; Studio BIM
                    </div>
                </div>

                {{-- Card Skema Pendanaan --}}
                <div class="bg-[#0B2A4A] text-white rounded-3xl p-6 sm:p-7 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-400 text-[#0B2A4A] flex items-center justify-center text-xl mb-5 font-bold">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <span class="text-[10px] font-bold text-amber-300 uppercase tracking-wider">Pendanaan Riset</span>
                        <h3 class="font-extrabold text-white text-lg mt-2 font-heading">Skema Hibah Penelitian</h3>
                        <ul class="text-xs text-slate-300 mt-3 space-y-2">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-400 text-[10px]"></i> Hibah DRTPM Kemendikbudristek (Nasional)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-400 text-[10px]"></i> Hibah Penelitian Internal LPPM UNSIL</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-400 text-[10px]"></i> Riset Kemitraan Industri &amp; BUMN</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-400 text-[10px]"></i> Hibah Kolaborasi Internasional (NCKU Taiwan)</li>
                        </ul>
                    </div>
                    <div class="pt-4 mt-4 border-t border-white/10 text-[11px] text-amber-300 font-semibold">
                        Sinergi Dosen &amp; Tugas Akhir Mahasiswa
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Callout ke Buku & Publikasi --}}
    <section class="py-14 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#0B2A4A] via-[#0d345c] to-[#124275] rounded-3xl p-8 sm:p-12 text-white shadow-xl flex flex-col lg:flex-row items-center justify-between gap-6">
                <div class="max-w-2xl">
                    <span class="text-amber-400 font-bold uppercase text-xs tracking-wider">Dokumentasi Luaran Ilmiah</span>
                    <h3 class="text-2xl sm:text-3xl font-black font-heading mt-1">Eksplorasi Hasil Riset Dosen</h3>
                    <p class="text-slate-300 text-xs sm:text-sm mt-2 leading-relaxed">
                        Lihat karya nyata berupa buku ajar ber-ISBN dan publikasi artikel ilmiah terindeks SINTA 4 pada jurnal berkala resmi Akselerasi serta jurnal internasional bereputasi.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('buku') }}" class="px-5 py-3 rounded-xl bg-amber-400 hover:bg-amber-300 text-[#0B2A4A] font-bold text-xs uppercase tracking-wider transition shadow-md flex items-center gap-2">
                        <i class="fa-solid fa-book"></i> Katalog Buku Dosen
                    </a>
                    <a href="{{ route('publikasi') }}" class="px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider border border-white/20 transition flex items-center gap-2">
                        <i class="fa-solid fa-newspaper"></i> Publikasi &amp; Jurnal
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
