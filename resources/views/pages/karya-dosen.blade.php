@extends('layouts.app')

@section('title', 'Karya Dosen | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terindeks SINTA Akselerasi, paten inovasi HKI, dan buku ajar dosen Program Studi Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Karya Dosen</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Intelektual &amp; Publikasi Ilmiah
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Karya &amp; Publikasi Dosen
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Produktivitas keilmuan dosen Program Studi Teknik Sipil FT UNSIL dalam bentuk jurnal ilmiah terindeks SINTA, hak kekayaan intelektual (HKI), dan buku referensi keinsinyuran.
            </p>
            {{-- Stats bar --}}
            <div class="flex flex-wrap gap-6 mt-8 pt-6 border-t border-white/10">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-500/30 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-book-open-reader text-blue-300 text-sm"></i>
                    </div>
                    <div>
                        <div class="text-white font-black text-lg leading-none">SINTA 5</div>
                        <div class="text-slate-400 text-[11px]">Jurnal Akselerasi</div>
                    </div>
                </div>
                <div class="w-px bg-white/10 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-amber-500/30 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-lightbulb text-amber-300 text-sm"></i>
                    </div>
                    <div>
                        <div class="text-white font-black text-lg leading-none">26</div>
                        <div class="text-slate-400 text-[11px]">Dosen Aktif</div>
                    </div>
                </div>
                <div class="w-px bg-white/10 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-emerald-500/30 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-globe text-emerald-300 text-sm"></i>
                    </div>
                    <div>
                        <div class="text-white font-black text-lg leading-none">Scopus</div>
                        <div class="text-slate-400 text-[11px]">Kolaborasi Internasional</div>
                    </div>
                </div>
                <div class="w-px bg-white/10 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-purple-500/30 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-shield-halved text-purple-300 text-sm"></i>
                    </div>
                    <div>
                        <div class="text-white font-black text-lg leading-none">DJKI</div>
                        <div class="text-slate-400 text-[11px]">HKI Terdaftar</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Karya — Magazine Layout --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Karya Cipta &amp; Inovasi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Publikasi Unggulan</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            {{-- Baris 1: Jurnal besar + HKI kecil --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 mb-5">

                {{-- Jurnal — Kartu besar kiri --}}
                <div class="lg:col-span-3 group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 min-h-[340px] flex flex-col">
                    <img src="{{ asset('images/unsil-prestasi-scopus-sipil.png') }}" alt="Jurnal Akselerasi"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/95 via-[#0B2A4A]/50 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-7">
                        <span class="inline-flex items-center gap-1.5 bg-blue-500 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3">
                            <i class="fa-solid fa-book-open-reader text-[9px]"></i> Jurnal Ilmiah · SINTA 5
                        </span>
                        <h3 class="text-2xl font-black text-white leading-tight mb-2">Akselerasi: Jurnal Ilmiah Teknik Sipil</h3>
                        <p class="text-slate-300 text-xs leading-relaxed mb-4 max-w-md">
                            Jurnal berkala resmi Prodi Teknik Sipil FT UNSIL yang menerbitkan riset mutakhir bidang struktur, transportasi, geoteknik, manajemen konstruksi, dan sumber daya air.
                        </p>
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="bg-white/10 backdrop-blur-sm text-white text-[10px] font-semibold px-3 py-1 rounded-full border border-white/20">E-ISSN: 2715-7296</span>
                            <span class="bg-white/10 backdrop-blur-sm text-white text-[10px] font-semibold px-3 py-1 rounded-full border border-white/20">3× / Tahun</span>
                            <a href="https://jurnal.unsil.ac.id" target="_blank"
                               class="ml-auto bg-amber-400 hover:bg-amber-300 text-slate-900 font-bold text-xs px-4 py-2 rounded-xl transition flex items-center gap-1.5">
                                Buka OJS <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- HKI + Buku — Kolom kanan --}}
                <div class="lg:col-span-2 flex flex-col gap-5">

                    {{-- HKI --}}
                    <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex-1 min-h-[160px] flex flex-col">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="HKI Inovasi"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-amber-900/90 via-amber-900/50 to-transparent"></div>
                        <div class="relative z-10 mt-auto p-6">
                            <span class="inline-flex items-center gap-1.5 bg-amber-400 text-slate-900 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-lightbulb text-[9px]"></i> Paten &amp; HKI
                            </span>
                            <h3 class="text-base font-black text-white leading-tight">Hak Cipta Inovasi Material &amp; Metode</h3>
                            <p class="text-amber-100 text-[11px] mt-1">Terdaftar resmi di DJKI Kemenkumham RI</p>
                        </div>
                    </div>

                    {{-- Buku --}}
                    <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex-1 min-h-[160px] flex flex-col">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Buku Referensi"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/50 to-transparent"></div>
                        <div class="relative z-10 mt-auto p-6">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-400 text-slate-900 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-book text-[9px]"></i> Buku Ajar &amp; Monograf
                            </span>
                            <h3 class="text-base font-black text-white leading-tight">Buku Referensi Keinsinyuran</h3>
                            <p class="text-emerald-100 text-[11px] mt-1">UNSIL Press &amp; Penerbit Nasional, ber-ISBN</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Baris 2: 3 kartu foto kegiatan ilmiah --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-52 flex flex-col">
                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Taiwan"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-5">
                        <span class="text-[10px] text-blue-300 font-bold uppercase tracking-wider">Kolaborasi Global</span>
                        <h4 class="text-sm font-bold text-white mt-0.5 leading-snug">Seminar Internasional "Bridging Futures" Indonesia–Taiwan</h4>
                    </div>
                </div>
                <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-52 flex flex-col">
                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar HATHI"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-5">
                        <span class="text-[10px] text-cyan-300 font-bold uppercase tracking-wider">Seminar Nasional</span>
                        <h4 class="text-sm font-bold text-white mt-0.5 leading-snug">Seminar HATHI — Himpunan Ahli Teknik Hidraulik Indonesia</h4>
                    </div>
                </div>
                <div class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-52 flex flex-col">
                    <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Jalan Tol"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="relative z-10 mt-auto p-5">
                        <span class="text-[10px] text-emerald-300 font-bold uppercase tracking-wider">Riset Transportasi</span>
                        <h4 class="text-sm font-bold text-white mt-0.5 leading-snug">Kajian Rekayasa Jalan &amp; Infrastruktur Transportasi</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bidang Riset — dark navy --}}
    <section class="py-16 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 220px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-amber-400 font-bold uppercase text-xs tracking-wider">Fokus Penelitian</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2 font-heading">Bidang Riset Unggulan</h2>
                <div class="w-14 h-1 bg-amber-400 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-300 mt-3 text-sm">Lima kluster riset utama yang menjadi keahlian dosen Program Studi Teknik Sipil FT UNSIL.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-blue-500/20 border border-blue-400/30 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-road text-blue-300 text-2xl"></i>
                    </div>
                    <h5 class="font-bold text-white text-sm">Transportasi &amp; Lalu Lintas</h5>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">Analisis simpang, manajemen parkir, keselamatan jalan</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-amber-500/20 border border-amber-400/30 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-building-columns text-amber-300 text-2xl"></i>
                    </div>
                    <h5 class="font-bold text-white text-sm">Struktur &amp; Material</h5>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">Struktur beton, baja, inovasi material konstruksi</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-cyan-500/20 border border-cyan-400/30 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-water text-cyan-300 text-2xl"></i>
                    </div>
                    <h5 class="font-bold text-white text-sm">Sumber Daya Air</h5>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">Hidrologi DAS, drainase perkotaan, mitigasi banjir</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-green-500/20 border border-green-400/30 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-layer-group text-green-300 text-2xl"></i>
                    </div>
                    <h5 class="font-bold text-white text-sm">Geoteknik</h5>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">Perbaikan tanah, kestabilan lereng, fondasi &amp; longsor</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-purple-500/20 border border-purple-400/30 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-hard-hat text-purple-300 text-2xl"></i>
                    </div>
                    <h5 class="font-bold text-white text-sm">Manajemen Konstruksi</h5>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">BIM, RAB, penjadwalan proyek, manajemen risiko</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Dosen Peneliti --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Peneliti Aktif</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Dosen &amp; Kolaborasi Riset</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm">Dosen terdaftar di SINTA Kemdikbud yang aktif berkontribusi di tingkat nasional dan internasional.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-7 border border-blue-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center shrink-0 shadow-md">
                            <i class="fa-solid fa-microscope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug">Andhy Romdani, S.T., M.Eng., Ph.D.</h4>
                            <p class="text-xs text-blue-600 font-semibold mt-0.5">Hidrodinamika &amp; Analisis Spasial</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-5">Aktif mempublikasikan riset berstandar internasional terindeks <strong class="text-slate-700">Scopus</strong> di bidang rekayasa infrastruktur, mitigasi banjir, dan analisis spasial geospasial.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="text-[10px] bg-blue-100 text-blue-700 font-bold px-2.5 py-1 rounded-full">Scopus Indexed</span>
                        <span class="text-[10px] bg-slate-100 text-slate-600 font-semibold px-2.5 py-1 rounded-full">SINTA ID: 6021788</span>
                    </div>
                </div>

                <div class="group bg-gradient-to-br from-amber-50 to-white rounded-3xl p-7 border border-amber-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center shrink-0 shadow-md">
                            <i class="fa-solid fa-earth-asia text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug">Yanuar Haryanto, Ph.D.</h4>
                            <p class="text-xs text-amber-600 font-semibold mt-0.5">Struktur &amp; Kolaborasi Global</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-5">Narasumber Seminar Internasional <strong class="text-slate-700">"Bridging Futures" Indonesia–Taiwan</strong> bersama National Cheng Kung University (NCKU) Taiwan.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="text-[10px] bg-amber-100 text-amber-700 font-bold px-2.5 py-1 rounded-full">NCKU Taiwan · 2024</span>
                        <span class="text-[10px] bg-slate-100 text-slate-600 font-semibold px-2.5 py-1 rounded-full">Kolaborasi Internasional</span>
                    </div>
                </div>

                <div class="group bg-gradient-to-br from-emerald-50 to-white rounded-3xl p-7 border border-emerald-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center shrink-0 shadow-md">
                            <i class="fa-solid fa-car text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug">Nina Herlina, S.T., M.T.</h4>
                            <p class="text-xs text-emerald-600 font-semibold mt-0.5">Rekayasa Transportasi</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-5">Peneliti aktif rekayasa transportasi dan manajemen lalu lintas, termasuk inovasi <strong class="text-slate-700">Hybrid Billing Parking System</strong> dan analisis simpang Tasikmalaya.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="text-[10px] bg-emerald-100 text-emerald-700 font-bold px-2.5 py-1 rounded-full">SINTA ID: 6032197</span>
                        <span class="text-[10px] bg-slate-100 text-slate-600 font-semibold px-2.5 py-1 rounded-full">Parkir Cerdas</span>
                    </div>
                </div>

            </div>
            <div class="mt-8 text-center">
                <a href="https://sinta.kemdikbud.go.id" target="_blank"
                   class="inline-flex items-center gap-2 bg-[#0B2A4A] hover:bg-[#133E6C] text-white font-bold text-sm px-6 py-3 rounded-xl transition shadow">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    Lihat Semua Dosen di SINTA Kemdikbud
                </a>
            </div>
        </div>
    </section>

@endsection
