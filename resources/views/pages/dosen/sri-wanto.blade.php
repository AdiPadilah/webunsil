@extends('layouts.app')

@section('title', 'Sri Wanto, S.T., M.T. | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik Sri Wanto, S.T., M.T. - Dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, bidang keahlian Rekayasa Struktur dan Bahan, kandidat doktor Universitas Sebelas Maret (UNS).')

@section('content')

    {{-- Hero Section Berlatar Khas Website UNSIL --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Sri Wanto, S.T., M.T.</span>
            </nav>

            <div class="flex items-center gap-2 flex-wrap">
                <span class="bg-[#0070BA]/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full border border-blue-400/30 uppercase tracking-wider">
                    Dosen Tetap
                </span>
                <span class="bg-blue-500/20 text-blue-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-blue-400/25">
                    KBK Rekayasa Struktur dan Bahan
                </span>
            </div>

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading tracking-tight text-white mt-2 leading-tight">
                Sri Wanto, S.T., M.T.
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                {{-- Sidebar Kiri: Kartu Identitas & Kontak (Scroll Terpisah di Desktop) --}}
                <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-24 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:overscroll-contain lg:pt-0.5 lg:pb-2 lg:pl-0.5 lg:pr-2 profile-sidebar-scroll">

                    {{-- Kartu Foto & Info Pokok --}}
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 text-center">
                        <div class="relative w-48 sm:w-56 mx-auto aspect-square rounded-2xl overflow-hidden shadow-md border-2 border-slate-100 bg-[#CDCFDA] mb-5">
                            <img src="{{ asset('images/dosen/sri-wanto.jpg') }}?v={{ @filemtime(public_path('images/dosen/sri-wanto.jpg')) ?: 2 }}"
                                 alt="Sri Wanto, S.T., M.T."
                                 class="w-full h-full object-cover object-center">
                        </div>

                        <h2 class="text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            Sri Wanto, S.T., M.T.
                        </h2>
                        <p class="text-xs font-semibold text-[#0070BA] mt-1">
                            Dosen Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-blue-800 bg-blue-50 px-2.5 py-1 rounded-md border border-blue-100">
                                <i class="fa-solid fa-building-columns text-blue-600"></i> Rekayasa Struktur dan Bahan
                            </span>
                        </div>

                        {{-- Tautan Kontak & Profil Riset --}}
                        <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                            <a href="mailto:sriwanto@unsil.ac.id"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                    <span class="font-medium truncate block">sriwanto@unsil.ac.id</span>
                                </div>
                            </a>

                            <div class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-50/70 text-slate-700 border border-slate-100">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-graduation-cap text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">SINTA Kemdikbud</span>
                                    <span class="font-medium truncate block text-[11px]">sinta.kemdikbud.go.id/profile/Sri Wanto</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-50/70 text-slate-700 border border-slate-100">
                                <div class="w-8 h-8 rounded-lg bg-sky-50 text-[#0A66C2] flex items-center justify-center shrink-0">
                                    <i class="fa-brands fa-linkedin-in text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">LinkedIn</span>
                                    <span class="font-medium truncate block text-[11px]">linkedin.com/in/Sri Wanto</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Ringkasan Prestasi Angka --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-chart-simple text-[#0070BA]"></i> Ringkasan Rekam Jejak
                        </h3>
                        <div class="grid grid-cols-2 gap-2.5 text-center">
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">7</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Publikasi Ilmiah</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">7</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Software Keahlian</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">2</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Pengalaman Industri</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">S-3</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Kandidat Doktor UNS</span>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100">
                            <a href="{{ route('dosen') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-[#0B2A4A] hover:text-white text-slate-700 text-xs font-semibold transition duration-200">
                                <i class="fa-solid fa-arrow-left text-[11px]"></i> Kembali ke Semua Dosen
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Konten Utama Kanan: Biografi, Pendidikan & Keahlian, Pengalaman Kerja, Publikasi, Roadmap Riset --}}
                <div class="lg:col-span-8 space-y-8">

                    {{-- 1. Biografi & Profil Akademik --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-5 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070BA] border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Biografi &amp; Profil Akademik
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Ringkasan perjalanan akademik dan dedikasi riset profesional</p>
                            </div>
                        </div>

                        <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                            <p>
                                Sejak menempuh pendidikan sarjana, Sri Wanto memiliki ketertarikan riset yang kuat khususnya pada bidang rekayasa material dan pemodelan numerik. Misi keilmuannya berfokus pada pengembangan material rekayasa serta penilaian kerentanan konstruksi infrastruktur terhadap bahaya alam, seperti gempa bumi dan bencana alam lainnya, sebagai warisan keilmuan bagi generasi mendatang yang terus memotivasinya melanjutkan pendidikan tinggi.
                            </p>
                            <p>
                                Beliau menyelesaikan pendidikan Sarjana Teknik Sipil (B.Eng. / S.T.) di Universitas Bung Karno (UBK), Jakarta pada tahun 2012–2016, lalu melanjutkan Program Magister (M.T.) di Universitas Sebelas Maret (UNS), Surakarta pada tahun 2019–2021. Sejak tahun 2025, beliau menempuh Program Doktoral (S-3) di Universitas Sebelas Maret (UNS) sekaligus mengabdikan diri sebagai Dosen Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL).
                            </p>
                            <p>
                                Di luar dunia akademik, beliau membawa pengalaman praktis lapangan dan perancangan struktur di industri konstruksi nasional, baik sebagai <em>Site Manager</em> di PT. Jaya Konstruksi MP Tbk. (2015–2018) maupun sebagai <em>Structure Engineer</em> di perusahaan konsultan PT. Indra Karya (2021–2024).
                            </p>
                        </div>
                    </div>

                    {{-- 2. Pendidikan & Keahlian Software --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pendidikan &amp; Keahlian Perangkat Lunak
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Riwayat pendidikan formal dan kompetensi piranti lunak analisis struktur &amp; rekayasa</p>
                            </div>
                        </div>

                        {{-- Timeline Pendidikan --}}
                        <div class="space-y-4 mb-8">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-landmark text-[#0070BA]"></i> Jenjang Pendidikan Formal
                            </h4>

                            <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-6 ml-2.5 my-3">
                                {{-- S3 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100">
                                            Program Doktoral (S-3)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2025 &ndash; Sekarang</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Sebelas Maret (UNS), Surakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Surakarta, Indonesia</p>
                                </div>

                                {{-- S2 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Magister (M.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2019 &ndash; 2021</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Sebelas Maret (UNS), Surakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Surakarta, Indonesia</p>
                                </div>

                                {{-- S1 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-300 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Sarjana (B.Eng. / S.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2012 &ndash; 2016</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Bung Karno (UBK), Jakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Bachelor of Engineering (B.Eng.) in Civil Engineering &bull; Jakarta, Indonesia</p>
                                </div>
                            </div>
                        </div>

                        {{-- Keahlian Perangkat Lunak --}}
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-laptop-code text-[#0070BA]"></i> Keahlian Perangkat Lunak (Skills)
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                <div class="p-4 rounded-xl bg-gradient-to-br from-blue-50/70 to-blue-50/20 border border-blue-200/80">
                                    <div class="flex items-center gap-2.5 mb-2.5">
                                        <div class="w-8 h-8 rounded-lg bg-[#0070BA] text-white flex items-center justify-center shrink-0 text-xs shadow-sm">
                                            <i class="fa-solid fa-cubes"></i>
                                        </div>
                                        <div>
                                            <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider block">Analyzing Devices</span>
                                            <h6 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">Perangkat Analisis Rekayasa</h6>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-1.5">
                                        @foreach(['SeismoStruct', 'SeismoBuild', 'PLAXIS', 'AFES', 'HEC-RAS'] as $tool)
                                        <span class="text-[11px] font-semibold text-blue-900 bg-white px-2.5 py-1 rounded-md border border-blue-200/70 shadow-sm">{{ $tool }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="p-4 rounded-xl bg-gradient-to-br from-amber-50/70 to-amber-50/20 border border-amber-200/80">
                                    <div class="flex items-center gap-2.5 mb-2.5">
                                        <div class="w-8 h-8 rounded-lg bg-amber-500 text-white flex items-center justify-center shrink-0 text-xs shadow-sm">
                                            <i class="fa-solid fa-compass-drafting"></i>
                                        </div>
                                        <div>
                                            <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider block">Engineering Software</span>
                                            <h6 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">Perangkat Gambar &amp; Pemodelan</h6>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-1.5">
                                        @foreach(['AutoCAD', 'SketchUp'] as $tool)
                                        <span class="text-[11px] font-semibold text-amber-900 bg-white px-2.5 py-1 rounded-md border border-amber-200/70 shadow-sm">{{ $tool }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Pengalaman Kerja & Industri --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Pengalaman Kerja &amp; Industri
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Rekam jejak sebagai akademisi, insinyur struktur, dan manajer proyek konstruksi</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            {{-- UNSIL --}}
                            <div class="p-4 sm:p-5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-blue-300 hover:bg-white transition-all duration-200">
                                <div class="flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <span class="inline-block text-[10px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200/70 uppercase tracking-wider">Akademisi</span>
                                        <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Siliwangi</h4>
                                        <p class="text-xs font-semibold text-slate-700">Lecturer (Dosen Tetap)</p>
                                    </div>
                                    <div class="text-left sm:text-right">
                                        <span class="text-[11px] font-bold text-slate-600 bg-white px-2.5 py-1 rounded-md border border-slate-200/80 font-mono inline-block">2025 &ndash; Sekarang</span>
                                        <p class="text-[11px] text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-rose-500 mr-1"></i>Tasikmalaya, Indonesia</p>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-600 mt-3 leading-relaxed">
                                    Mengampu kegiatan tridharma perguruan tinggi pada Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi, khususnya pada KBK Rekayasa Struktur dan Bahan.
                                </p>
                            </div>

                            {{-- PT. Indra Karya --}}
                            <div class="p-4 sm:p-5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-emerald-300 hover:bg-white transition-all duration-200">
                                <div class="flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <span class="inline-block text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200/70 uppercase tracking-wider">Konsultan Rekayasa</span>
                                        <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">PT. Indra Karya (Consultant)</h4>
                                        <p class="text-xs font-semibold text-slate-700">Structure Engineer</p>
                                    </div>
                                    <div class="text-left sm:text-right">
                                        <span class="text-[11px] font-bold text-slate-600 bg-white px-2.5 py-1 rounded-md border border-slate-200/80 font-mono inline-block">2021 &ndash; 2024</span>
                                        <p class="text-[11px] text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-rose-500 mr-1"></i>Semarang, Indonesia</p>
                                    </div>
                                </div>
                                <ul class="mt-3 space-y-1.5 text-xs text-slate-600 list-disc pl-4 leading-relaxed">
                                    <li>Merencanakan dan merancang struktur bangunan seperti jembatan, stadion, gedung, dan konstruksi lainnya secara detail dari tahap konsep dasar.</li>
                                    <li>Berkolaborasi dengan berbagai pihak terkait, antara lain arsitek, kontraktor, dan tim rekayasa lintas disiplin.</li>
                                    <li>Menganalisis permasalahan yang disebabkan oleh faktor lingkungan maupun manusia serta menyusun solusi teknisnya.</li>
                                    <li>Mengawasi dan mengoordinasikan penyelesaian pelaksanaan proyek konstruksi.</li>
                                    <li>Menyusun estimasi pembiayaan pembangunan proyek.</li>
                                    <li>Menyusun laporan pelaksanaan proyek secara berkala.</li>
                                </ul>
                            </div>

                            {{-- PT. Jaya Konstruksi --}}
                            <div class="p-4 sm:p-5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-amber-300 hover:bg-white transition-all duration-200">
                                <div class="flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <span class="inline-block text-[10px] font-bold text-amber-800 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200/70 uppercase tracking-wider">Kontraktor Konstruksi</span>
                                        <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">PT. JAYA KONSTRUKSI MP Tbk.</h4>
                                        <p class="text-xs font-semibold text-slate-700">Site Manager</p>
                                    </div>
                                    <div class="text-left sm:text-right">
                                        <span class="text-[11px] font-bold text-slate-600 bg-white px-2.5 py-1 rounded-md border border-slate-200/80 font-mono inline-block">2015 &ndash; 2018</span>
                                        <p class="text-[11px] text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-rose-500 mr-1"></i>Jakarta, Indonesia</p>
                                    </div>
                                </div>
                                <ul class="mt-3 space-y-1.5 text-xs text-slate-600 list-disc pl-4 leading-relaxed">
                                    <li>Mengarahkan pelaksanaan proyek, memastikan pemenuhan spesifikasi dan kebutuhan klien, meninjau progres, serta berkoordinasi dengan <em>quantity surveyor</em> untuk memantau biaya.</li>
                                    <li>Menjembatani komunikasi dengan klien, tenaga profesional konstruksi, maupun masyarakat terkait koordinasi dan pengawasan pekerja lapangan.</li>
                                    <li>Terlibat langsung dalam pemilihan peralatan serta material konstruksi proyek.</li>
                                    <li>Melakukan inspeksi keselamatan kerja dan memastikan standar keamanan konstruksi serta area proyek terpenuhi.</li>
                                    <li>Memeriksa dan menyiapkan laporan lapangan, desain, gambar kerja, serta menjaga prosedur kendali mutu (<em>quality control</em>).</li>
                                    <li>Mengantisipasi dan menyelesaikan kendala lapangan serta melakukan kajian dan mitigasi risiko proyek.</li>
                                    <li>Menyusun laporan dan dokumen proyek serta membantu proses negosiasi kontrak dan pengurusan perizinan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- 4. Publikasi Ilmiah --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Publikasi Ilmiah
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Artikel jurnal terindeks dan prosiding seminar nasional maupun internasional</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-sm">
                                <i class="fa-solid fa-book-open text-indigo-600 mr-1"></i> 7 Publikasi
                            </span>
                        </div>

                        <div class="space-y-3.5">
                            @php
                            $publikasiList = [
                                [
                                    'no' => 1,
                                    'jenis' => 'Jurnal Nasional',
                                    'authors' => 'Wanto, S., Arviananda, R. R. D., Jatnika, G. R., Aziz, I., Ramadhan, M. A., & Seinari, K.',
                                    'year' => '2026',
                                    'title' => 'Edukasi Desain Rumah Sederhana Tahan Gempa Berbasis Simulasi SeismoBuild: Bukti Kuantitatif Pengaruh Regularitas Denah dan Distribusi Infill di Mugarsari, Tasikmalaya',
                                    'venue' => 'Jurnal SOLMA',
                                    'vol' => '15(1), 21–32',
                                    'doi' => 'https://doi.org/10.22236/solma.v15i1.21213',
                                    'doi_label' => '10.22236/solma.v15i1.21213',
                                ],
                                [
                                    'no' => 2,
                                    'jenis' => 'Jurnal Nasional',
                                    'authors' => 'Wanto, S.',
                                    'year' => '2025',
                                    'title' => 'Mengevaluasi Struktur Beton Pada Bangunan Eksisting Dengan Penambahan Sistem Base Isolation Berdasarkan Seismic Fragility',
                                    'venue' => 'JTERA (Jurnal Teknologi Rekayasa)',
                                    'vol' => '9(2), 33–44',
                                    'doi' => 'https://doi.org/10.31544/jtera.v9.i2.2024.33-44',
                                    'doi_label' => '10.31544/jtera.v9.i2.2024.33-44',
                                ],
                                [
                                    'no' => 3,
                                    'jenis' => 'Prosiding Internasional',
                                    'authors' => 'Wanto, S., Diharjo, K., Suryanti, V., Wahyudi, A. H., Sulong, A. B., & Wibowo, C. H.',
                                    'year' => '2025',
                                    'title' => 'Preliminary Research on Tensile Properties of Vulcanized EPDM-Rubber Joint for Application in Inflatable Rubber Dam',
                                    'venue' => 'E3S Web of Conferences',
                                    'vol' => '645, 02006',
                                    'doi' => 'https://doi.org/10.1051/e3sconf/202564502006',
                                    'doi_label' => '10.1051/e3sconf/202564502006',
                                ],
                                [
                                    'no' => 4,
                                    'jenis' => 'Jurnal Nasional',
                                    'authors' => 'Wanto, S., Devianty, S., Wulandari, A., & Wantoro, M.',
                                    'year' => '2024',
                                    'title' => 'Metode Numerik Dan Alat Komputasi Untuk Menilai Keandalan Sistem Infrastruktur Dan Kerentanan Bahaya Gempa',
                                    'venue' => 'Jurnal Rekayasa Infrastruktur',
                                    'vol' => '10(2), 59–65',
                                    'doi' => 'https://doi.org/10.31943/jri.v10i2.272',
                                    'doi_label' => '10.31943/jri.v10i2.272',
                                ],
                                [
                                    'no' => 5,
                                    'jenis' => 'Prosiding',
                                    'authors' => 'Wanto, S. dkk',
                                    'year' => '2024',
                                    'title' => 'Evaluating Concrete Structures in Existing Buildings with the Addition of Base Isolation Systems Based on Seismic Fragility',
                                    'venue' => 'Semnastera Proceeding',
                                    'vol' => '2024',
                                    'doi' => null,
                                    'doi_label' => null,
                                ],
                                [
                                    'no' => 6,
                                    'jenis' => 'Prosiding',
                                    'authors' => 'Wanto, S. dkk',
                                    'year' => '2024',
                                    'title' => 'Computational System for Modeling Repeat Time Floods with HEC-RAS Software in Determining River Embankment Height',
                                    'venue' => 'Proceeding SNTS 2024',
                                    'vol' => '2024',
                                    'doi' => null,
                                    'doi_label' => null,
                                ],
                                [
                                    'no' => 7,
                                    'jenis' => 'Prosiding Ilmiah',
                                    'authors' => 'Wanto, S., Sangadji, S., & Saifullah, H. A.',
                                    'year' => '2023',
                                    'title' => 'Seismic retrofitting of existing steel structures with X-bracing',
                                    'venue' => 'Artikel Prosiding / Konferensi',
                                    'vol' => '050020',
                                    'doi' => 'https://doi.org/10.1063/5.0112776',
                                    'doi_label' => '10.1063/5.0112776',
                                ],
                            ];
                            @endphp

                            @foreach($publikasiList as $pub)
                            <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-indigo-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                <div class="flex items-center justify-between gap-3 mb-1.5 flex-wrap">
                                    <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-indigo-50 text-indigo-700 border border-indigo-200/60">
                                        #{{ $pub['no'] }} &bull; {{ $pub['jenis'] }}
                                    </span>
                                    <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                        {{ $pub['year'] }}
                                    </span>
                                </div>
                                <h5 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-indigo-950 transition-colors">
                                    {{ $pub['title'] }}
                                </h5>
                                <p class="text-xs text-indigo-950/80 font-medium italic mt-1.5 flex items-center gap-1.5 flex-wrap">
                                    <i class="fa-solid fa-book-open text-indigo-500 text-[11px]"></i>
                                    <span>{{ $pub['venue'] }}</span>
                                    <span class="text-slate-400 not-italic">&bull;</span>
                                    <span class="text-slate-600 not-italic">{{ $pub['vol'] }}</span>
                                </p>
                                <p class="text-[11px] text-slate-500 mt-1">
                                    <strong class="text-slate-700">Penulis:</strong> {{ $pub['authors'] }}
                                </p>
                                @if(!empty($pub['doi']))
                                <div class="mt-2.5 pt-2 border-t border-slate-100 flex items-center justify-between flex-wrap gap-2">
                                    <a href="{{ $pub['doi'] }}" target="_blank" rel="noopener noreferrer"
                                       class="text-[11px] text-[#0070BA] hover:text-[#0B2A4A] font-mono inline-flex items-center gap-1.5 bg-white px-2.5 py-0.5 rounded border border-slate-200/80 hover:border-[#0070BA]/40 transition shadow-sm">
                                        <i class="fa-solid fa-link text-[10px] text-slate-400"></i> DOI: {{ $pub['doi_label'] }}
                                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-0.5"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 5. Roadmap Penelitian (2024–2029) --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-diagram-project"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Roadmap Penelitian (2024 &ndash; 2029)
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Peta jalan riset dari perkuatan struktur hingga integrasi kecerdasan buatan (AI)</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-blue-50 text-[#0B2A4A] rounded-full border border-blue-200/70">
                                Structural Retrofit
                            </span>
                        </div>

                        <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-5 ml-2.5 my-2">
                            {{-- 2024 --}}
                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80">
                                    <div class="flex items-center gap-2 flex-wrap mb-2">
                                        <span class="text-xs font-bold text-white bg-[#0B2A4A] px-2.5 py-0.5 rounded-md font-mono">2024</span>
                                        <span class="text-[11px] font-semibold text-slate-600">Fondasi Structural Retrofit &amp; Evaluasi Kerentanan</span>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-2">
                                        <div class="p-3 rounded-lg bg-white border border-slate-200/80">
                                            <p class="text-xs font-semibold text-slate-800 leading-snug">
                                                Evaluating Concrete Structures in Existing Buildings with the Addition of Base Isolation Systems Based on Seismic Fragility
                                            </p>
                                            <span class="inline-block mt-2 text-[10px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded">
                                                Luaran: Semnastera Sinta 5
                                            </span>
                                        </div>
                                        <div class="p-3 rounded-lg bg-white border border-slate-200/80">
                                            <p class="text-xs font-semibold text-slate-800 leading-snug">
                                                Numerical Methods and Computing Tools for Assessing Infrastructure System Reliability and Earthquake Hazard Vulnerability
                                            </p>
                                            <span class="inline-block mt-2 text-[10px] font-bold text-indigo-700 bg-indigo-50 border border-indigo-200 px-2 py-0.5 rounded">
                                                Luaran: Jurnal Artikel Sinta 6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- 2024-2027 Long Term --}}
                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-100"></div>
                                <div class="p-4 rounded-xl bg-blue-50/50 border border-blue-200/80">
                                    <div class="flex items-center gap-2 flex-wrap mb-1.5">
                                        <span class="text-xs font-bold text-white bg-[#0070BA] px-2.5 py-0.5 rounded-md font-mono">2024 &ndash; 2027</span>
                                        <span class="text-[11px] font-bold text-[#0070BA] uppercase tracking-wider">Jangka Panjang &bull; Disertasi Doktoral</span>
                                    </div>
                                    <p class="text-xs sm:text-sm font-bold text-slate-900 leading-snug mt-1">
                                        Study of reinforcement and strength degradation of rubber joints in rubber weir structures
                                    </p>
                                    <span class="inline-block mt-2 text-[10px] font-bold text-blue-800 bg-white border border-blue-200 px-2.5 py-0.5 rounded">
                                        Target Luaran: Publikasi 2 Artikel Scopus Q2 &amp; Q3
                                    </span>
                                </div>
                            </div>

                            {{-- 2028 --}}
                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-amber-500 ring-4 ring-amber-100"></div>
                                <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80">
                                    <div class="flex items-center gap-2 flex-wrap mb-1.5">
                                        <span class="text-xs font-bold text-white bg-amber-600 px-2.5 py-0.5 rounded-md font-mono">2028</span>
                                        <span class="text-[11px] font-semibold text-slate-600">Topik Riset</span>
                                    </div>
                                    <p class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                        Redundancy of structural by AI
                                    </p>
                                    <span class="inline-block mt-2 text-[10px] font-bold text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-0.5 rounded">
                                        Target Luaran: Publikasi Artikel Scopus Q2/Q3
                                    </span>
                                </div>
                            </div>

                            {{-- 2029 --}}
                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></div>
                                <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80">
                                    <div class="flex items-center gap-2 flex-wrap mb-1.5">
                                        <span class="text-xs font-bold text-white bg-emerald-600 px-2.5 py-0.5 rounded-md font-mono">2029</span>
                                        <span class="text-[11px] font-semibold text-slate-600">Topik Riset</span>
                                    </div>
                                    <p class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                        Prediction of building collapse with AI
                                    </p>
                                    <span class="inline-block mt-2 text-[10px] font-bold text-emerald-800 bg-emerald-50 border border-emerald-200 px-2.5 py-0.5 rounded">
                                        Target Luaran: Buku (Book)
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- Visi Akhir Roadmap --}}
                        <div class="mt-5 p-4 rounded-xl bg-gradient-to-r from-[#0B2A4A] to-[#133E6C] text-white flex items-center gap-3.5">
                            <div class="w-9 h-9 rounded-lg bg-amber-400/20 text-amber-400 flex items-center justify-center shrink-0 border border-amber-400/30">
                                <i class="fa-solid fa-microchip"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-amber-400 uppercase tracking-wider">Arah Riset Berkelanjutan</span>
                                <p class="text-xs sm:text-sm font-semibold text-white mt-0.5">
                                    Utilization of software and Artificial Intelligence for speed in analysis
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    @push('styles')
    <style>
        @media (min-width: 1024px) {
            .profile-sidebar-scroll::-webkit-scrollbar {
                width: 5px;
            }
            .profile-sidebar-scroll::-webkit-scrollbar-track {
                background: transparent;
            }
            .profile-sidebar-scroll::-webkit-scrollbar-thumb {
                background-color: rgba(148, 163, 184, 0.55);
                border-radius: 9999px;
            }
            .profile-sidebar-scroll::-webkit-scrollbar-thumb:hover {
                background-color: rgba(100, 116, 139, 0.8);
            }
            .profile-sidebar-scroll {
                scrollbar-width: thin;
                scrollbar-color: rgba(148, 163, 184, 0.55) transparent;
            }
        }
    </style>
    @endpush

@endsection
