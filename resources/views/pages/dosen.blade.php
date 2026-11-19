@extends('layouts.app')

@section('title', 'Dosen & Staf | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Daftar dosen dan tenaga pengajar Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi berkualifikasi S-2 dan S-3.')

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
                Didukung oleh staf pengajar berkualifikasi Magister (S-2) dan Doktor (S-3) lulusan perguruan tinggi terkemuka di dalam dan luar negeri, berdedikasi dalam pendidikan dan riset keinsinyuran.
            </p>
        </div>
    </section>

    
    <section class="py-16 bg-slate-50 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.06] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kualifikasi Akademik</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Staf Pengajar &amp; Tenaga Pendidik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                    Dosen-dosen Program Studi S-1 Teknik Sipil FT UNSIL terdistribusi ke dalam 5 Kelompok Bidang Keahlian (KBK) untuk mendukung tridharma perguruan tinggi dan bimbingan akademik mahasiswa.
                </p>
            </div>

            <!-- Tab Filter 5 Bidang Keahlian (Sesuai Tata Letak DTSI UGM) -->
            <div class="max-w-6xl mx-auto mb-10">
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 p-2 bg-slate-100/90 rounded-2xl border border-slate-200 shadow-inner">
                    <button type="button" onclick="filterKbk('all', this)" class="kbk-tab-btn px-4 sm:px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 shadow-md bg-orange-600 text-white">
                        Semua Dosen
                    </button>
                    <button type="button" onclick="filterKbk('struktur', this)" class="kbk-tab-btn px-4 sm:px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-slate-200 text-slate-700 border border-slate-200">
                        KBK Struktur
                    </button>
                    <button type="button" onclick="filterKbk('keairan', this)" class="kbk-tab-btn px-4 sm:px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-slate-200 text-slate-700 border border-slate-200">
                        KBK Sumber Daya Air
                    </button>
                    <button type="button" onclick="filterKbk('geoteknik', this)" class="kbk-tab-btn px-4 sm:px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-slate-200 text-slate-700 border border-slate-200">
                        KBK Geoteknik
                    </button>
                    <button type="button" onclick="filterKbk('transportasi', this)" class="kbk-tab-btn px-4 sm:px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-slate-200 text-slate-700 border border-slate-200">
                        KBK Transportasi
                    </button>
                    <button type="button" onclick="filterKbk('manajemen', this)" class="kbk-tab-btn px-4 sm:px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wide transition-all duration-200 bg-white hover:bg-slate-200 text-slate-700 border border-slate-200">
                        KBK Manajemen Konstruksi
                    </button>
                </div>
            </div>

            <!-- Grid Kartu Dosen (Tata Letak 4 Kolom Sesuai Referensi UGM) -->
            <div id="dosen-grid" class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-7 mb-14">

                <!-- 1. Ir. Pengki Irawan, S.T., M.T. (Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="transportasi">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/pengki-irawan.jpg') }}" alt="Ir. Pengki Irawan, S.T., M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-blue-100 text-[#0B2A4A] flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                PI
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                        <span class="absolute top-3 left-3 bg-[#0B2A4A] text-amber-400 text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                            Ketua Jurusan
                        </span>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-orange-600 uppercase tracking-wider mb-1">KBK Transportasi</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Pengki Irawan, S.T., M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Transportasi &amp; Jalan Raya</p>
                        </div>
                    </div>
                </div>

                <!-- 2. Andhy Romdani, S.T., M.Eng., Ph.D. (Keairan / SDA) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="keairan">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/andhy-romdani.jpg') }}" alt="Andhy Romdani, S.T., M.Eng., Ph.D." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-cyan-100 text-cyan-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                AR
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                        <span class="absolute top-3 left-3 bg-cyan-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">
                            Pakar Keairan
                        </span>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-700 uppercase tracking-wider mb-1">KBK Sumber Daya Air</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Andhy Romdani, S.T., M.Eng., Ph.D.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Hidraulika &amp; Sains Pantai</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Dr. Ir. Yusep Ramdani, S.T., M.T., IPM., ASEAN Eng. (Struktur) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="struktur">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/yusep-ramdani.jpg') }}" alt="Dr. Ir. Yusep Ramdani, S.T., M.T., IPM., ASEAN Eng." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                YR
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-700 uppercase tracking-wider mb-1">KBK Struktur</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Dr. Ir. Yusep Ramdani, S.T., M.T., IPM., ASEAN Eng.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Rekayasa Struktur &amp; Material</p>
                        </div>
                    </div>
                </div>

                <!-- 4. Ir. Fitriana Sarifah, S.T., M.T. (Geoteknik) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="geoteknik">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/fitriana-sarifah.jpg') }}" alt="Ir. Fitriana Sarifah, S.T., M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                FS
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-amber-700 uppercase tracking-wider mb-1">KBK Geoteknik</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Ir. Fitriana Sarifah, S.T., M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Mekanika Tanah &amp; Pondasi</p>
                        </div>
                    </div>
                </div>

                <!-- 5. Dr. Ir. Iman Handiman, S.T., M.T. (Struktur) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="struktur">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/iman-handiman.jpg') }}" alt="Dr. Ir. Iman Handiman, S.T., M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                IH
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-700 uppercase tracking-wider mb-1">KBK Struktur</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Dr. Ir. Iman Handiman, S.T., M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Rekayasa Gempa &amp; Beton Bertulang</p>
                        </div>
                    </div>
                </div>

                <!-- 6. M. Syarif Al-Huseiny, S.T., M.T. (Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="keairan">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/syarif-al-huseiny.jpg') }}" alt="M. Syarif Al-Huseiny, S.T., M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-cyan-100 text-cyan-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                MS
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-700 uppercase tracking-wider mb-1">KBK Sumber Daya Air</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                M. Syarif Al-Huseiny, S.T., M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Hidrologi &amp; Drainase</p>
                        </div>
                    </div>
                </div>

                <!-- 7. Intan Nuriska Rachma, M.T. (Manajemen Konstruksi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="manajemen">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/intan-nuriska.jpg') }}" alt="Intan Nuriska Rachma, M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-purple-100 text-purple-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                IN
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-700 uppercase tracking-wider mb-1">KBK Manajemen Konstruksi</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Intan Nuriska Rachma, M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Manajemen Proyek &amp; Biaya</p>
                        </div>
                    </div>
                </div>

                <!-- 8. Kartika Seinari Manggala, S.T., M.T. (Geoteknik) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="geoteknik">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/kartika-seinari.jpg') }}" alt="Kartika Seinari Manggala, S.T., M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                KS
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-amber-700 uppercase tracking-wider mb-1">KBK Geoteknik</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Kartika Seinari Manggala, S.T., M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Stabilitas Lereng &amp; Geoteknik</p>
                        </div>
                    </div>
                </div>

                <!-- 9. H. Herianto, M.T. (Struktur) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="struktur">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/herianto.jpg') }}" alt="H. Herianto, M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                HH
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-blue-700 uppercase tracking-wider mb-1">KBK Struktur</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                H. Herianto, M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Analisis Struktur &amp; Mekanika</p>
                        </div>
                    </div>
                </div>

                <!-- 10. Zakwan Gusnadi, M.T. (Sumber Daya Air) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="keairan">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/zakwan-gusnadi.jpg') }}" alt="Zakwan Gusnadi, M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-cyan-100 text-cyan-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                ZG
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-cyan-700 uppercase tracking-wider mb-1">KBK Sumber Daya Air</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Zakwan Gusnadi, M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Irigasi &amp; Bangunan Air</p>
                        </div>
                    </div>
                </div>

                <!-- 11. Hidayanto, S.T., M.T. (Transportasi) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="transportasi">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/hidayanto.jpg') }}" alt="Hidayanto, S.T., M.T." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-orange-100 text-orange-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                HD
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-orange-600 uppercase tracking-wider mb-1">KBK Transportasi</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Hidayanto, S.T., M.T.
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Geometrik Jalan &amp; Rekayasa Trafik</p>
                        </div>
                    </div>
                </div>

                <!-- 12. Dosen Manajemen Konstruksi & BIM (Manajemen) -->
                <div class="dosen-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 flex flex-col group" data-kbk="manajemen">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-slate-100 to-slate-200 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/dosen/dosen-mk.jpg') }}" alt="Dosen Manajemen Konstruksi & BIM" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null; this.parentElement.querySelector('.fallback-avatar').classList.remove('hidden'); this.classList.add('hidden');">
                        <div class="fallback-avatar hidden flex flex-col items-center justify-center text-slate-400 p-4 text-center">
                            <div class="w-20 h-20 rounded-full bg-purple-100 text-purple-800 flex items-center justify-center text-3xl mb-2 font-black shadow-inner">
                                MK
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500">Foto Siap Ditambahkan</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-[10px] font-bold text-purple-700 uppercase tracking-wider mb-1">KBK Manajemen Konstruksi</span>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base leading-snug group-hover:text-blue-700 transition">
                                Tim Dosen MK &amp; BIM
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">Dosen Teknik Sipil &bull; Manajemen Konstruksi &amp; K3</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    @push('scripts')
    <script>
        function filterKbk(category, btn) {
            // Update tampilan tombol tab aktif
            const buttons = document.querySelectorAll('.kbk-tab-btn');
            buttons.forEach(b => {
                b.classList.remove('bg-orange-600', 'text-white', 'shadow-md');
                b.classList.add('bg-white', 'text-slate-700', 'hover:bg-slate-200');
            });
            btn.classList.remove('bg-white', 'text-slate-700', 'hover:bg-slate-200');
            btn.classList.add('bg-orange-600', 'text-white', 'shadow-md');

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
