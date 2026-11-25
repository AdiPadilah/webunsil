@extends('layouts.app')

@section('title', 'Kurikulum | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Struktur kurikulum dan bidang keahlian akademik Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Kurikulum</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Pendidikan Sarjana (S-1)
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Kurikulum &amp; Pembelajaran
            </h1>
        </div>
    </section>

    
    <section class="py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Bidang Peminatan &amp; Riset</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Bidang Keahlian Akademik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-4 leading-relaxed text-sm">
                    Kurikulum didistribusikan ke dalam bidang keahlian utama rekayasa sipil yang memadukan teori fundamental, praktikum laboratorium, dan studi perancangan nyata.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
                
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Struktur</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Analisis struktur gedung tahan gempa, beton bertulang dan prategang, jembatan baja, mekanika bahan, serta inovasi material konstruksi masa depan.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-blue-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> SAP2000 &bull; ETABS &bull; SNI Gempa
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-water"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Sumber Daya Air</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Hidrologi terapan, sistem drainase ramah lingkungan, rekayasa bendungan, saluran irigasi pertanian, pemodelan hidraulik sungai, dan mitigasi banjir.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-cyan-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> HEC-RAS &bull; Saluran Terbuka
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-mountain"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Geoteknik</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Mekanika tanah, kestabilan lereng, perkuatan tanah lunak, daya dukung pondasi dangkal dan dalam, serta mitigasi bencana geologi dan tanah longsor.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-amber-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> Uji Sondir &bull; Geoteknik Terapan
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Transportasi</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Perencanaan geometrik jalan raya, teknologi perkerasan aspal dan kaku, manajemen rekayasa lalu lintas perkotaan, serta sistem transportasi berkelanjutan.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-emerald-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> Marshall Test &bull; Survei Lalin
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Manajemen Rekayasa Konstruksi</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Perencanaan dan penjadwalan proyek, estimasi anggaran biaya (RAB), manajemen mutu dan risiko K3 konstruksi, metode pelaksanaan lapangan, serta Building Information Modelling (BIM).
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-blue-700 font-semibold flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> MS Project &bull; RAB &bull; BIM
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

