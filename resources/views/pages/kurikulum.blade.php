@extends('layouts.app')

@section('title', 'Kurikulum | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Struktur kurikulum 144 SKS dan bidang keahlian akademik Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    <!-- Page Header Banner -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Kurikulum</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Pendidikan Sarjana (S-1) &bull; 144 SKS
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Kurikulum &amp; Pembelajaran
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Struktur kurikulum berbasis capaian pembelajaran (OBE) dirancang komprehensif selama 8 semester untuk menghasilkan lulusan yang adaptif, kompeten, dan siap bersaing di pasar kerja konstruksi modern.
            </p>
        </div>
    </section>

    <!-- Konten Bidang Keahlian -->
    <section class="py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Bidang Peminatan &amp; Riset</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Bidang Keahlian Akademik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-4 leading-relaxed text-sm">
                    Kurikulum 144 SKS didistribusikan ke dalam empat pilar utama rekayasa sipil yang memadukan teori fundamental, praktikum laboratorium, dan studi perancangan nyata.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <!-- Card 1: Struktur -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Struktur &amp; Rekayasa Material</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Analisis struktur gedung tahan gempa, beton bertulang dan prategang, jembatan baja, mekanika bahan, serta inovasi material konstruksi masa depan.
                    </p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-blue-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> SAP2000 &bull; ETABS &bull; SNI Gempa
                    </div>
                </div>

                <!-- Card 2: Geoteknik -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-mountain"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Geoteknik &amp; Rekayasa Pondasi</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Mekanika tanah, kestabilan lereng, perkuatan tanah lunak, daya dukung pondasi dangkal dan dalam, serta mitigasi bencana geologi dan tanah longsor.
                    </p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-amber-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> Uji Sondir &bull; Geoteknik Terapan
                    </div>
                </div>

                <!-- Card 3: Transportasi -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-road"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Transportasi &amp; Jalan Raya</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Perencanaan geometrik jalan raya, teknologi perkerasan aspal dan kaku, manajemen rekayasa lalu lintas perkotaan, serta sistem transportasi berkelanjutan.
                    </p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-emerald-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> Marshall Test &bull; Survei Lalin
                    </div>
                </div>

                <!-- Card 4: Keairan -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Keairan &amp; Sumber Daya Air</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Hidrologi terapan, sistem drainase ramah lingkungan, rekayasa bendungan, saluran irigasi pertanian, pemodelan hidraulik sungai, dan mitigasi banjir.
                    </p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-cyan-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> HEC-RAS &bull; Saluran Terbuka
                    </div>
                </div>
            </div>

            <!-- Ringkasan Struktur 8 Semester -->
            <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-lg border border-slate-200">
                <div class="flex flex-col md:flex-row md:items-center justify-between pb-6 mb-8 border-b border-slate-200 gap-4">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading">Distribusi Kurikulum 144 SKS</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1">Rancangan tahapan akademik dari pengenalan dasar hingga karya tugas akhir sarjana.</p>
                    </div>
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow transition self-start md:self-auto">
                        <i class="fa-solid fa-file-pdf"></i> Download Panduan Akademik
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-black text-blue-700 bg-blue-100 px-2 py-0.5 rounded-full uppercase">Tahun 1 (Sem 1-2)</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-3">Fondasi Dasar Sains &amp; Rekayasa</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Kalkulus, Fisika Dasar, Kimia Dasar, Menggambar Rekayasa, dan Mekanika Rekayasa Dasar.</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-black text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full uppercase">Tahun 2 (Sem 3-4)</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-3">Keilmuan Inti &amp; Praktikum</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Teknologi Bahan Konstruksi, Mekanika Fluida, Mekanika Tanah 1, Analisis Struktur, dan Ukur Tanah.</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-black text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full uppercase">Tahun 3 (Sem 5-6)</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-3">Perancangan Lanjut &amp; MBKM</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Struktur Beton Lanjut, Struktur Baja, Rekayasa Pondasi, Geometrik Jalan, Irigasi &amp; Bangunan Air.</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-black text-purple-700 bg-purple-100 px-2 py-0.5 rounded-full uppercase">Tahun 4 (Sem 7-8)</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-3">Kerja Praktik &amp; Tugas Akhir</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Manajemen Konstruksi, Aspek Hukum Proyek, Seminar Proposal, Kerja Praktik (KP), dan Skripsi/TA.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
