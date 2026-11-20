@extends('layouts.app')

@section('title', 'Buku Ajar & Referensi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Katalog buku ajar dan buku referensi keinsinyuran ber-ISBN karya staf pengajar Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

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
                <a href="{{ route('penelitian') }}" class="hover:underline text-slate-300">Penelitian</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Buku</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Luaran Penelitian &bull; Karya Cipta Ber-ISBN
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Buku Ajar &amp; Buku Referensi Dosen
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Koleksi buku ber-ISBN hasil riset dan pengalaman praktis dosen Program Studi S-1 Teknik Sipil FT UNSIL sebagai pegangan kuliah mahasiswa dan rujukan profesi insinyur di industri konstruksi.
            </p>

            {{-- Link silang ke Publikasi & Penelitian --}}
            <div class="flex flex-wrap items-center gap-3 mt-6 pt-6 border-t border-white/10">
                <span class="text-xs text-slate-300 font-semibold">Tautan Terkait:</span>
                <a href="{{ route('penelitian') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-microscope text-[10px]"></i> Peta Jalan Penelitian
                </a>
                <a href="{{ route('publikasi') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-400 text-[#0B2A4A] text-xs font-bold transition shadow-sm">
                    <i class="fa-solid fa-newspaper text-[10px]"></i> Publikasi &amp; Jurnal Ilmiah
                </a>
                <a href="{{ route('karya-dosen') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-graduation-cap text-[10px]"></i> Hub Karya Dosen
                </a>
            </div>
        </div>
    </section>

    {{-- Katalog Buku --}}
    <section class="py-16 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Penerbitan Resmi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Koleksi Buku Ber-ISBN</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Buku ajar dan referensi yang terbit dan terdaftar resmi di Perpustakaan Nasional Republik Indonesia.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Buku 1 --}}
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-emerald-800 to-[#0B2A4A]">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Manajemen Kualitas Proyek"
                             class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-emerald-400 text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                Buku Ajar &bull; 2024
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[11px] text-emerald-300 font-bold uppercase tracking-wider">ISBN: 978-623-8722-77-8</span>
                            <h3 class="text-base font-black leading-snug mt-1">Manajemen Proyek: Manajemen Kualitas Proyek</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-800 font-bold text-xs flex items-center justify-center">
                                    <i class="fa-solid fa-user-pen text-[10px]"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-800">Hidayanto, S.T., M.T.</span>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Membahas metodologi kendali mutu konstruksi, standar ISO 9001 untuk jasa pemborong, audit mutu lapangan, serta implementasi Total Quality Management (TQM) dalam siklus proyek sipil.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                            <span>MK: Manajemen Proyek</span>
                            <span class="text-emerald-700 font-bold">Terbit 2024</span>
                        </div>
                    </div>
                </div>

                {{-- Buku 2 --}}
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-blue-900 to-[#0B2A4A]">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Manajemen Konstruksi"
                             class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-400 text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                Buku Ajar &bull; 2025
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[11px] text-blue-300 font-bold uppercase tracking-wider">ISBN: 978-634-7310-43-9</span>
                            <h3 class="text-base font-black leading-snug mt-1">Manajemen Konstruksi</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-800 font-bold text-xs flex items-center justify-center">
                                    <i class="fa-solid fa-user-pen text-[10px]"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-800">Ir. M. Ridha Al Mustafa, S.T., M.T.</span>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Panduan komprehensif estimasi anggaran biaya (RAB), network planning (CPM/PERT), manajemen risiko K3, pengadaan barang/jasa pemerintah, dan kontrak konstruksi FIDIC.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                            <span>MK: Manajemen Konstruksi</span>
                            <span class="text-blue-700 font-bold">Terbit 2025</span>
                        </div>
                    </div>
                </div>

                {{-- Buku 3 --}}
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-amber-900 to-[#0B2A4A]">
                        <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Teknologi Bahan Konstruksi"
                             class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-amber-400 text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                Buku Referensi
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[11px] text-amber-300 font-bold uppercase tracking-wider">KBK Struktur &amp; Bahan</span>
                            <h3 class="text-base font-black leading-snug mt-1">Teknologi Bahan &amp; Beton Berkelanjutan</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-800 font-bold text-xs flex items-center justify-center">
                                    <i class="fa-solid fa-user-pen text-[10px]"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-800">Dr. Ir. Empung, S.T., M.T. &amp; Tim KBK</span>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Tinjauan material semen alternatif, beton geopolimer ramah emisi, agregat daur ulang, durabilitas beton di lingkungan agresif, serta uji laboratorium standar SNI/ASTM.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                            <span>MK: Teknologi Bahan</span>
                            <span class="text-amber-700 font-bold">Buku Referensi</span>
                        </div>
                    </div>
                </div>

                {{-- Buku 4 --}}
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-indigo-900 to-[#0B2A4A]">
                        <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Rekayasa Perkerasan Jalan"
                             class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-indigo-400 text-white text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                Buku Ajar
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[11px] text-indigo-300 font-bold uppercase tracking-wider">KBK Transportasi</span>
                            <h3 class="text-base font-black leading-snug mt-1">Rekayasa &amp; Evaluasi Perkerasan Jalan</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-800 font-bold text-xs flex items-center justify-center">
                                    <i class="fa-solid fa-user-pen text-[10px]"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-800">Ir. Hendra, S.T., M.Sc. &amp; Tim</span>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Perancangan tebal perkerasan lentur dan kaku (Bina Marga &amp; AASHTO), uji Marshall di laboratorium, drainase jalan, dan teknologi perkerasan daur ulang RAP.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                            <span>MK: Perkerasan Jalan</span>
                            <span class="text-indigo-700 font-bold">Buku Ajar</span>
                        </div>
                    </div>
                </div>

                {{-- Buku 5 --}}
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-amber-800 to-[#0B2A4A]">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Mekanika Tanah"
                             class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-amber-400 text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                Buku Ajar
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[11px] text-amber-300 font-bold uppercase tracking-wider">KBK Geoteknik</span>
                            <h3 class="text-base font-black leading-snug mt-1">Mekanika Tanah &amp; Fondasi Terapan</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-800 font-bold text-xs flex items-center justify-center">
                                    <i class="fa-solid fa-user-pen text-[10px]"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-800">Dr. Ir. Iman Handiman, S.T., M.T.</span>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Dasar mekanika tanah, permeabilitas, konsolidasi, kuat geser tanah, perancangan fondasi tiang pancang/bored pile, dan stabilitas lereng perbukitan.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                            <span>MK: Rekayasa Fondasi</span>
                            <span class="text-amber-700 font-bold">Buku Ajar</span>
                        </div>
                    </div>
                </div>

                {{-- Buku 6 --}}
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-cyan-900 to-[#0B2A4A]">
                        <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Hidrologi Terapan"
                             class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-cyan-400 text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">
                                Buku Referensi
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[11px] text-cyan-300 font-bold uppercase tracking-wider">KBK Sumber Daya Air</span>
                            <h3 class="text-base font-black leading-snug mt-1">Hidrologi Terapan &amp; Pengelolaan DAS</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-800 font-bold text-xs flex items-center justify-center">
                                    <i class="fa-solid fa-user-pen text-[10px]"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-800">Andhy Romdani, S.T., M.Eng., Ph.D.</span>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Analisis curah hujan rencana, hidrograf satuan sintetik, penelusuran banjir waduk, erosi DAS sungai tropis, dan perencanaan bangunan pelimpah bendungan.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-medium">
                            <span>MK: Hidrologi Terapan</span>
                            <span class="text-cyan-700 font-bold">Buku Referensi</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
