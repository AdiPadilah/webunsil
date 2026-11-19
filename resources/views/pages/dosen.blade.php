@extends('layouts.app')

@section('title', 'Dosen & Staf | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Daftar 27 dosen dan tenaga pengajar resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi berkualifikasi S-2 dan S-3.')

@section('content')
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Dosen &amp; Staf</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Sumber Daya Manusia Unggul
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Dosen &amp; Tenaga Pengajar
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Didukung oleh 27 staf pengajar berkualifikasi Magister (S-2) dan Doktor (S-3) lulusan perguruan tinggi terkemuka di dalam dan luar negeri, berdedikasi dalam pendidikan dan riset keinsinyuran.
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50 relative overflow-hidden min-h-screen">
        <div class="absolute inset-0 opacity-[0.06] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Tab Filter 5 Bidang Keahlian (Tema Resmi FT UNSIL) -->
            <div class="max-w-6xl mx-auto mb-10">
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-2.5 p-2 bg-slate-100/90 rounded-2xl border border-slate-200 shadow-inner">
                    <button type="button" onclick="filterKbk('all', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 shadow-md bg-[#0B2A4A] text-amber-400 border border-amber-400/40">
                        Semua Dosen (27)
                    </button>
                    <button type="button" onclick="filterKbk('struktur', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Struktur &amp; Bahan (5)
                    </button>
                    <button type="button" onclick="filterKbk('keairan', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Sumber Daya Air (6)
                    </button>
                    <button type="button" onclick="filterKbk('geoteknik', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Geoteknik (3)
                    </button>
                    <button type="button" onclick="filterKbk('transportasi', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Transportasi (7)
                    </button>
                    <button type="button" onclick="filterKbk('manajemen', this)" class="kbk-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-blue-50 text-slate-700 hover:text-[#0B2A4A] border border-slate-200">
                        Manajemen Konstruksi (5)
                    </button>
                </div>
            </div>

            <!-- Grid Kartu Dosen (Tata Letak 4 Kolom Sesuai Referensi UGM) -->
            <div id="dosen-grid" class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-7 mb-14">
                <!-- Dr. Ir. Empung, S.T., M.T. (Teknik Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="keairan">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/empung.jpg') }}" alt="Dr. Ir. Empung, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-800 bg-cyan-50 border-cyan-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Teknik Sumber Daya Air
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Dr. Ir. Empung, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Andhy Romdani, S.T., M.Eng., Ph.D. (Teknik Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="keairan">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/andhy-romdani.jpg') }}" alt="Andhy Romdani, S.T., M.Eng., Ph.D." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-800 bg-cyan-50 border-cyan-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Teknik Sumber Daya Air
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Andhy Romdani, S.T., M.Eng., Ph.D.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ir. Pengki Irawan, S.TP., M.Si. (Teknik Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="keairan">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/pengki-irawan.jpg') }}" alt="Ir. Pengki Irawan, S.TP., M.Si." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-800 bg-cyan-50 border-cyan-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Teknik Sumber Daya Air
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Pengki Irawan, S.TP., M.Si.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Novia Komala Sari, S.Pd., M.T. (Teknik Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="keairan">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/novia-komala-sari.jpg') }}" alt="Novia Komala Sari, S.Pd., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-800 bg-cyan-50 border-cyan-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Teknik Sumber Daya Air
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Novia Komala Sari, S.Pd., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Galih Rahmat Jatnika, S.T., M.T. (Teknik Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="keairan">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/galih-rahmat-jatnika.jpg') }}" alt="Galih Rahmat Jatnika, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-800 bg-cyan-50 border-cyan-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Teknik Sumber Daya Air
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Galih Rahmat Jatnika, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Raden Roro Dita Arviananda, S.Pd., M.Eng. (Teknik Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="keairan">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/raden-roro-dita.jpg') }}" alt="Raden Roro Dita Arviananda, S.Pd., M.Eng." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-800 bg-cyan-50 border-cyan-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Teknik Sumber Daya Air
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Raden Roro Dita Arviananda, S.Pd., M.Eng.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ir. Nina Herlina, Dra., M.T. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/nina-herlina.jpg') }}" alt="Ir. Nina Herlina, Dra., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Nina Herlina, Dra., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Gary Raya Prima, S.Pd., M.T. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/gary-raya-prima.jpg') }}" alt="Gary Raya Prima, S.Pd., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Gary Raya Prima, S.Pd., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ir. Hendra, S.T., M.Sc. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/hendra.jpg') }}" alt="Ir. Hendra, S.T., M.Sc." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Hendra, S.T., M.Sc.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Herianto, S.T., M.T. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/herianto.jpg') }}" alt="Herianto, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Herianto, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Muhamad Anugerah Ramadhan, S.T., M.T. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/muhamad-anugerah.jpg') }}" alt="Muhamad Anugerah Ramadhan, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Muhamad Anugerah Ramadhan, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Indrajathie Aziz, S.T., M.T. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/indrajathie-aziz.jpg') }}" alt="Indrajathie Aziz, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Indrajathie Aziz, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Kartika Seinari Manggala, S.T., M.T. (Rekayasa Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="transportasi">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/kartika-seinari.jpg') }}" alt="Kartika Seinari Manggala, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 border-emerald-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Transportasi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Kartika Seinari Manggala, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Dr. Ir. Yusep Ramdani, S.T., M.T. (Rekayasa Struktur & Bahan) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="struktur">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/yusep-ramdani.jpg') }}" alt="Dr. Ir. Yusep Ramdani, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-800 bg-blue-50 border-blue-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Struktur & Bahan
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Dr. Ir. Yusep Ramdani, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Rosi Nursani, S.T., M.T. (Rekayasa Struktur & Bahan) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="struktur">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/rosi-nursani.jpg') }}" alt="Rosi Nursani, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-800 bg-blue-50 border-blue-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Struktur & Bahan
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Rosi Nursani, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Mohammad Syarif Al-Huseiny, S.T., M.T. (Rekayasa Struktur & Bahan) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="struktur">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/syarif-al-huseiny.jpg') }}" alt="Mohammad Syarif Al-Huseiny, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-800 bg-blue-50 border-blue-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Struktur & Bahan
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Mohammad Syarif Al-Huseiny, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Intan Nuriskha Rachma, S.T., M.T. (Rekayasa Struktur & Bahan) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="struktur">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/intan-nuriskha.jpg') }}" alt="Intan Nuriskha Rachma, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-800 bg-blue-50 border-blue-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Struktur & Bahan
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Intan Nuriskha Rachma, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Sri Wanto, S.T., M.T. (Rekayasa Struktur & Bahan) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="struktur">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/sri-wanto.jpg') }}" alt="Sri Wanto, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-800 bg-blue-50 border-blue-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Rekayasa Struktur & Bahan
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Sri Wanto, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Dr. Ir. Iman Handiman, S.T., M.T. (Geoteknik) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="geoteknik">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/iman-handiman.jpg') }}" alt="Dr. Ir. Iman Handiman, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-amber-800 bg-amber-50 border-amber-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Geoteknik
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Dr. Ir. Iman Handiman, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ir. Fitriana Sarifah, S.T., M.T. (Geoteknik) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="geoteknik">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/fitriana-sarifah.jpg') }}" alt="Ir. Fitriana Sarifah, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-amber-800 bg-amber-50 border-amber-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Geoteknik
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Fitriana Sarifah, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Zakwan Gusnadi, S.T., M.T. (Geoteknik) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="geoteknik">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/zakwan-gusnadi.jpg') }}" alt="Zakwan Gusnadi, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-amber-800 bg-amber-50 border-amber-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Geoteknik
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Zakwan Gusnadi, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ir. Indra Mahdi, Drs., M.T. (Manajemen Konstruksi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="manajemen">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/indra-mahdi.jpg') }}" alt="Ir. Indra Mahdi, Drs., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-800 bg-purple-50 border-purple-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Manajemen Konstruksi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Indra Mahdi, Drs., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Hidayanto, S.T., M.T. (Manajemen Konstruksi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="manajemen">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/hidayanto.jpg') }}" alt="Hidayanto, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-800 bg-purple-50 border-purple-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Manajemen Konstruksi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Hidayanto, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Helty Fatimah Bakri, S.T., M.T. (Manajemen Konstruksi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="manajemen">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/helty-fatimah-bakri.jpg') }}" alt="Helty Fatimah Bakri, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-800 bg-purple-50 border-purple-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Manajemen Konstruksi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Helty Fatimah Bakri, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Shanti Astri Noviani, S.Pd., M.T. (Manajemen Konstruksi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="manajemen">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/shanti-astri-noviani.jpg') }}" alt="Shanti Astri Noviani, S.Pd., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-800 bg-purple-50 border-purple-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Manajemen Konstruksi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Shanti Astri Noviani, S.Pd., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ir. M. Ridha Al Mustafa, S.T., M.T. (Manajemen Konstruksi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="manajemen">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/ridha-al-mustafa.jpg') }}" alt="Ir. M. Ridha Al Mustafa, S.T., M.T." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-800 bg-purple-50 border-purple-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Manajemen Konstruksi
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. M. Ridha Al Mustafa, S.T., M.T.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Ceceng Saepulmilah, S.Pd.I., M.Pd. (Mata Kuliah Dasar Umum) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group text-center" data-kbk="mkdu">
                    <div class="p-6 pb-2 bg-gradient-to-b from-slate-50 to-white flex items-center justify-center relative">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-full p-1 bg-white shadow-md border-2 border-slate-200 group-hover:border-[#0070BA] transition-all duration-300 overflow-hidden">
                            <img src="{{ asset('images/dosen/ceceng-saepulmilah.jpg') }}" alt="Ceceng Saepulmilah, S.Pd.I., M.Pd." class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-300" loading="lazy">
                        </div>
                    </div>
                    <div class="p-4 pt-1 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-slate-800 bg-slate-100 border-slate-200 border px-2.5 py-0.5 rounded-full uppercase tracking-wider mb-2">
                                Mata Kuliah Dasar Umum
                            </span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ceceng Saepulmilah, S.Pd.I., M.Pd.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @push('scripts')
    <script>
        function filterKbk(category, btn) {
            // Update tampilan tombol tab aktif (Tema Resmi FT UNSIL: Navy #0B2A4A & Gold Amber)
            const buttons = document.querySelectorAll('.kbk-tab-btn');
            buttons.forEach(b => {
                b.classList.remove('bg-[#0B2A4A]', 'text-amber-400', 'border-amber-400/40', 'shadow-md');
                b.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });
            btn.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
            btn.classList.add('bg-[#0B2A4A]', 'text-amber-400', 'border-amber-400/40', 'shadow-md');

            // Filter kartu dosen berdasarkan data-kbk
            const items = document.querySelectorAll('.dosen-item');
            items.forEach(item => {
                const itemKbk = item.getAttribute('data-kbk');
                if (category === 'all' || itemKbk === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    </script>
    @endpush
@endsection
