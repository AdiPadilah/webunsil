@extends('layouts.app')

@php
    $dosen ??= \App\Models\Dosen::where('slug', 'raden-roro-dita')->orWhere('profile_route', 'dosen.raden-roro-dita')->first();
    $books ??= \App\Models\Buku::published()
        ->where('penulis_route', 'dosen.raden-roro-dita')
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get();
    $bukuSipil = $books->where('kategori', '!=', 'fiksi')->values();
    $namaDosen = $dosen?->nama ?? 'Raden Roro Dita Arviananda, S.Pd., M.Eng.';
    $kbkLabel = $dosen?->kbk_label ?? 'Rekayasa Sumber Daya Air';
    $fotoUrl = $dosen?->foto_url ?: asset('images/dosen/raden-roro-dita.jpg') . '?v=' . (@filemtime(public_path('images/dosen/raden-roro-dita.jpg')) ?: 2);
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik ' . $namaDosen . ' - Dosen Tetap Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, bidang keahlian ' . $kbkLabel . ', spesialisasi Rekayasa Sanitasi, Pengelolaan Air Bersih dan Air Limbah.')

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
                <span class="text-slate-200">{{ $namaDosen }}</span>
            </nav>

            <div class="flex items-center gap-2 flex-wrap">
                <span class="bg-[#0070BA]/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full border border-blue-400/30 uppercase tracking-wider">
                    Dosen Tetap
                </span>
                <span class="bg-cyan-500/20 text-cyan-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-cyan-400/20">
                    KBK {{ $kbkLabel }}
                </span>
            </div>

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading tracking-tight text-white mt-2 leading-tight">
                {{ $namaDosen }}
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                {{-- Sidebar Kiri: Kartu Identitas & Kontak --}}
                <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-24 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:overscroll-contain lg:pt-0.5 lg:pb-2 lg:pl-0.5 lg:pr-2 profile-sidebar-scroll">
                    
                    {{-- Kartu Foto & Info Pokok --}}
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 text-center">
                        <div class="relative w-48 sm:w-56 mx-auto aspect-square rounded-2xl overflow-hidden shadow-md border-2 border-slate-100 bg-[#CDCFDA] mb-5">
                            <img src="{{ $fotoUrl }}" 
                                 alt="{{ $namaDosen }}" 
                                 class="w-full h-full object-cover object-top">
                        </div>

                        <h2 class="text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            {{ $namaDosen }}
                        </h2>
                        <p class="text-xs font-semibold text-[#0070BA] mt-1">
                            Dosen Tetap Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-cyan-800 bg-cyan-50 px-2.5 py-1 rounded-md border border-cyan-100">
                                <i class="fa-solid fa-water text-cyan-600"></i> {{ $kbkLabel }}
                            </span>
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
                                <i class="fa-solid fa-droplet text-emerald-600"></i> Sanitasi &amp; Kualitas Air
                            </span>
                        </div>

                        {{-- Tautan Kontak & Profil Riset --}}
                        <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                            <a href="mailto:arvianandadita@unsil.ac.id" 
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                    <span class="font-medium truncate block">arvianandadita@unsil.ac.id</span>
                                </div>
                            </a>

                            <div class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-50/70 text-slate-700 border border-slate-100">
                                <div class="w-8 h-8 rounded-lg bg-slate-200/80 text-slate-600 flex items-center justify-center shrink-0 font-mono font-bold text-xs">
                                    ID
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">NUPTK</span>
                                    <span class="font-medium truncate block font-mono text-[11px]">4661773674230262</span>
                                </div>
                            </div>

                            <a href="https://sinta.kemdikbud.go.id/authors/profile/6962622" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-emerald-600 transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition font-bold text-xs">
                                    S
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">SINTA ID</span>
                                    <span class="font-medium truncate block font-mono text-[11px]">6962622</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-emerald-600"></i>
                            </a>

                            <a href="https://scholar.google.com/citations?user=F5eZXCoAAAAJ" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-blue-600 transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:text-white transition">
                                    <i class="fa-brands fa-google-scholar text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Google Scholar</span>
                                    <span class="font-medium truncate block font-mono text-[11px]">F5eZXCoAAAAJ</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-blue-600"></i>
                            </a>

                            <a href="https://orcid.org/0009-0001-1109-6373" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#a6ce39] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-lime-50 text-[#a6ce39] flex items-center justify-center shrink-0 group-hover:bg-[#a6ce39] group-hover:text-white transition">
                                    <i class="fa-brands fa-orcid text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">ORCID iD</span>
                                    <span class="font-medium truncate block font-mono text-[11px]">0009-0001-1109-6373</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-[#a6ce39]"></i>
                            </a>
                        </div>
                    </div>

                    {{-- Ringkasan Prestasi Angka --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-chart-simple text-[#0070BA]"></i> Ringkasan Rekam Jejak
                        </h3>
                        <div class="grid grid-cols-2 gap-2.5 text-center">
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">1</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku (ISBN)</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">5</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Jurnal Ilmiah</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">2</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Konferensi Global</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">7</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Sertifikasi &amp; Bimtek</span>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100">
                            <a href="{{ route('dosen') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-[#0B2A4A] hover:text-white text-slate-700 text-xs font-semibold transition duration-200">
                                <i class="fa-solid fa-arrow-left text-[11px]"></i> Kembali ke Semua Dosen
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Konten Utama Kanan: Biografi, Riwayat, Sertifikasi, Buku, Publikasi --}}
                <div class="lg:col-span-8 space-y-8">
                    
                    {{-- 1. Biografi Naratif Lengkap --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-5 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070BA] border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Biografi &amp; Profil Akademik
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Rekayasa sanitasi, konservasi sumber daya air, dan dedikasi tridharma</p>
                            </div>
                        </div>

                        <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                            <p>
                                Raden Roro Dita Arviananda menempuh pendidikan tinggi di bidang ketekniksipilan, dimulai dari Jurusan Pendidikan Teknik Sipil dan Perencanaan di Universitas Negeri Yogyakarta (lulus 2017) hingga melanjutkan studi magister di Departemen Teknik Sipil dan Lingkungan, Universitas Gadjah Mada (UGM), dengan konsentrasi Pengelolaan Air dan Air Limbah (lulus 2023). Saat ini, ia telah menyandang gelar Sarjana Pendidikan (S.Pd.) dan Master of Engineering (M.Eng.).
                            </p>
                            <p>
                                Aktif mengajar di Program Studi Teknik Sipil, Fakultas Teknik, Universitas Siliwangi, Tasikmalaya, Jawa Barat, ia memfokuskan kegiatan tridharmanya pada bidang <strong>Rekayasa Sanitasi</strong>, <strong>Pengelolaan Air Bersih dan Air Limbah</strong>, serta <strong>Kualitas Air</strong>.
                            </p>
                            <p>
                                Sebelum berkarier sebagai dosen, ia memiliki rekam jejak profesional dalam manajemen pemeliharaan sarana prasarana gedung (RS Mata Dr. Yap Yogyakarta) serta berpengalaman luas sebagai tenaga pendamping dan fasilitator lapangan pada berbagai program infrastruktur publik Kementerian PUPR (Program BSPS, SANDES-PK, dan P3-TGAI di wilayah D.I. Yogyakarta). Di samping kegiatan mengajar, ia aktif menulis dan memublikasikan karya ilmiah pada jurnal nasional, prosiding konferensi internasional, serta berkontribusi dalam penulisan buku referensi.
                            </p>
                        </div>
                    </div>

                    {{-- 2. Riwayat Pendidikan & Sertifikasi Kompetensi --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pendidikan &amp; Kualifikasi Keahlian
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Jenjang pendidikan formal dan lisensi sertifikasi profesional</p>
                            </div>
                        </div>

                        {{-- Timeline Pendidikan --}}
                        <div class="space-y-4 mb-8">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-landmark text-[#0070BA]"></i> Jenjang Pendidikan Formal
                            </h4>

                            <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-6 ml-2.5 my-3">
                                {{-- S2 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100">
                                            Program Magister (M.Eng.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2019 – 2023</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Gadjah Mada (UGM), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Departemen Teknik Sipil dan Lingkungan &bull; Konsentrasi Pengelolaan Air dan Air Limbah</p>
                                </div>

                                {{-- S1 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Sarjana (S.Pd.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2013 – 2017</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Negeri Yogyakarta (UNY), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Jurusan Pendidikan Teknik Sipil dan Perencanaan, Fakultas Teknik</p>
                                </div>
                            </div>
                        </div>

                        {{-- Sertifikasi & Pelatihan Relevan --}}
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-certificate text-amber-500"></i> Sertifikasi Profesional &amp; Pelatihan Kompetensi
                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-blue-50/70 to-white border border-blue-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-[#0070BA] text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-brands fa-google"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider block">Google for Education &bull; 2026</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Gemini Certified Educator</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Pendidik tersertifikasi pemanfaatan AI generatif untuk pendidikan tinggi</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-cyan-50/70 to-white border border-cyan-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-cyan-600 text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-cubes"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-cyan-700 font-bold uppercase tracking-wider block">Glodon International &bull; 2025</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">5D BIM Application (TBQ, TAS, TRB)</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Sertifikasi Cubicost BOQ Cost Estimation, QTO Architecture, &amp; Rebar</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-emerald-50/70 to-white border border-emerald-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-faucet-drip"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-emerald-700 font-bold uppercase tracking-wider block">Waterpedia &bull; 2020</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Water and Wastewater Treatment Training</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Konservasi sumber air &amp; manajemen instalasi pengolahan air bersih/limbah</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-amber-50/70 to-white border border-amber-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-amber-600 text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-building-shield"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider block">Kementerian PUPR &bull; 2017</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Ahli Pengawas Konstruksi Bangunan Gedung</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Pelatihan teknis pengawasan mutu dan keselamatan konstruksi gedung</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 text-xs">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-chart-line text-indigo-600"></i>
                                    <strong class="text-slate-800">Webinar Series Riset Bibliometrik:</strong>
                                    <span class="text-slate-600">R Studio &amp; VOSviewer &bull; Minds Research Institute (2025)</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 3. Pengalaman Akademik & Profesional (PUPR & Sarpras) --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pengalaman Akademik &amp; Fasilitasi Infrastruktur
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Dedikasi pengajaran perguruan tinggi dan program infrastruktur publik Kementerian PUPR</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div class="p-4 rounded-xl bg-blue-50/60 border border-blue-200/70 hover:shadow-2xs transition">
                                <div class="w-8 h-8 rounded-lg bg-[#0070BA] text-white flex items-center justify-center text-xs mb-2 shadow-2xs">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </div>
                                <span class="font-bold text-slate-900 block text-xs">Dosen Program Studi Teknik Sipil</span>
                                <span class="text-[10px] text-blue-700 font-semibold block mt-0.5">2024 – Sekarang</span>
                                <p class="text-slate-500 mt-1.5 text-[11px] leading-relaxed">Fakultas Teknik, Universitas Siliwangi &bull; Pengampu mata kuliah keairan, sanitasi, dan pembimbing tridharma.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-emerald-50/60 border border-emerald-200/70 hover:shadow-2xs transition">
                                <div class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center text-xs mb-2 shadow-2xs">
                                    <i class="fa-solid fa-house-chimney-user"></i>
                                </div>
                                <span class="font-bold text-slate-900 block text-xs">Tenaga Fasilitator Lapangan (TFL) BSPS</span>
                                <span class="text-[10px] text-emerald-700 font-semibold block mt-0.5">2019, 2022 – 2023</span>
                                <p class="text-slate-500 mt-1.5 text-[11px] leading-relaxed">Program Bantuan Stimulan Perumahan Swadaya &bull; SNVT Penyediaan Perumahan Prov. D.I. Yogyakarta.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-cyan-50/60 border border-cyan-200/70 hover:shadow-2xs transition">
                                <div class="w-8 h-8 rounded-lg bg-cyan-600 text-white flex items-center justify-center text-xs mb-2 shadow-2xs">
                                    <i class="fa-solid fa-pump-soap"></i>
                                </div>
                                <span class="font-bold text-slate-900 block text-xs">Tenaga Fasilitator Lapangan SANDES-PK</span>
                                <span class="text-[10px] text-cyan-700 font-semibold block mt-0.5">2021</span>
                                <p class="text-slate-500 mt-1.5 text-[11px] leading-relaxed">Program Sanitasi Perdesaan Padat Karya Kementerian PUPR &bull; Wilayah D.I. Yogyakarta.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-teal-50/60 border border-teal-200/70 hover:shadow-2xs transition">
                                <div class="w-8 h-8 rounded-lg bg-teal-600 text-white flex items-center justify-center text-xs mb-2 shadow-2xs">
                                    <i class="fa-solid fa-water"></i>
                                </div>
                                <span class="font-bold text-slate-900 block text-xs">Tenaga Pendamping Masyarakat (TPM) P3-TGAI</span>
                                <span class="text-[10px] text-teal-700 font-semibold block mt-0.5">2020</span>
                                <p class="text-slate-500 mt-1.5 text-[11px] leading-relaxed">Program Peningkatan Tata Guna Air Irigasi &bull; Balai Besar Wilayah Sungai (BBWS) Progo Opak Serang.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/70 hover:shadow-2xs transition sm:col-span-2">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-slate-600 text-white flex items-center justify-center text-xs shrink-0 shadow-2xs">
                                        <i class="fa-solid fa-hospital"></i>
                                    </div>
                                    <div>
                                        <span class="font-bold text-slate-900 block text-xs">Staf Instalasi Pemeliharaan Sarana &amp; Prasarana Gedung</span>
                                        <span class="text-[10px] text-slate-500 font-semibold block mt-0.5">2017 – 2018</span>
                                        <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">RS Mata Dr. Yap Yogyakarta &bull; Manajemen operasi, inspeksi teknis, dan pemeliharaan fasilitas utilitas gedung kesehatan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 4. Koleksi Karya Buku --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Koleksi Karya Buku
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Buku referensi ilmiah dan book chapter bidang ketekniksipilan &amp; lingkungan</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-200">
                                1 Judul Buku
                            </span>
                        </div>

                        <div class="space-y-3">
                            <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-emerald-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-start gap-4 group">
                                <div class="shrink-0 w-12 h-16 sm:w-14 sm:h-20 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-gradient-to-br from-teal-800 to-[#0B2A4A] flex items-center justify-center text-white/60 group-hover:shadow-md transition-shadow">
                                    <i class="fa-solid fa-flask-vial text-base text-cyan-400" aria-hidden="true"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start gap-2">
                                        <span class="w-5 h-5 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-200/70">
                                            1
                                        </span>
                                        <div>
                                            <h5 class="text-sm sm:text-base font-bold text-slate-900 leading-snug group-hover:text-emerald-950 transition-colors">
                                                Kimia Lingkungan
                                            </h5>
                                            <p class="text-xs text-slate-500 mt-1">
                                                Penulis: <span class="font-semibold text-slate-700">Faradika, M., Suyasa, W. B., Ikbal, M., Jatnika, G. R., Arviananda, R. R. D., Kusmardini, D., Fadillah, G., &amp; Utami, C. R.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 mt-2 flex-wrap">
                                        <span class="text-slate-600 font-mono text-[10px] bg-white px-2.5 py-0.5 rounded border border-slate-200 shadow-2xs font-semibold">
                                            <i class="fa-solid fa-barcode text-slate-400 mr-1"></i> ISBN: 978-634-7526-21-2
                                        </span>
                                        <span class="text-emerald-700 bg-emerald-50 font-semibold text-[10px] px-2.5 py-0.5 rounded-full border border-emerald-200/70">
                                            Book Chapter &bull; Tahun 2026
                                        </span>
                                        <span class="text-slate-500 text-[10px] bg-slate-100 px-2 py-0.5 rounded font-medium">
                                            CV Hei Publishing Indonesia, Padang
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 5. Publikasi Jurnal & Konferensi Internasional --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Publikasi Jurnal &amp; Konferensi
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Artikel riset peer-reviewed dan prosiding ilmiah internasional</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-2xs">
                                <i class="fa-solid fa-globe text-indigo-600 mr-1"></i> 5 Jurnal &bull; 2 Prosiding
                            </span>
                        </div>

                        {{-- Daftar Jurnal Ilmiah --}}
                        <div class="space-y-3.5 mb-8">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-2 flex items-center gap-2">
                                <i class="fa-solid fa-file-lines text-indigo-600"></i> Publikasi Jurnal Ilmiah &amp; Pengabdian
                            </h4>

                            @php
                            $jurnalList = [
                                [
                                    'no' => 1,
                                    'title' => 'Edukasi Desain Rumah Sederhana Tahan Gempa Berbasis Simulasi SeismoBuild: Bukti Kuantitatif Pengaruh Regularitas Denah dan Distribusi Infill di Mugarsari, Tasikmalaya',
                                    'journal' => 'Jurnal SOLMA, Vol. 15 No. 1, Hal. 21–32',
                                    'year' => '2026',
                                    'badge' => 'Pengabdian Masyarakat & Ketahanan Gempa',
                                    'badge_color' => 'bg-amber-50 text-amber-800 border-amber-200/70',
                                    'icon' => 'fa-solid fa-house-chimney-crack',
                                    'authors' => 'Wanto, S., Arviananda, R. R. D., Jatnika, G. R., Aziz, I., Ramadhan, M. A., & Seinari, K.',
                                    'doi' => 'https://doi.org/10.22236/solma.v15i1.21213',
                                ],
                                [
                                    'no' => 2,
                                    'title' => 'Micro-Level Construction Supply Chain Performance Analysis Using SCOR 12.0: A Case Study of Building Projects in Makassar City',
                                    'journal' => 'Jurnal Vokasi Keteknikan, Universitas Negeri Makassar (Sinta 3)',
                                    'year' => '2025/2026',
                                    'badge' => 'Manajemen Rantai Pasok Konstruksi',
                                    'badge_color' => 'bg-indigo-50 text-indigo-800 border-indigo-200/70',
                                    'icon' => 'fa-solid fa-diagram-project',
                                    'authors' => 'Al Mustafa, M. R., Abdurrahman, M. A., Hamzah, S., Wanto, S., Jatnika, G. R., & Arviananda, R. R. D.',
                                    'doi' => null,
                                ],
                                [
                                    'no' => 3,
                                    'title' => 'Evaluasi Sistem Drainase Menggunakan Program EPA SWMM 5.2 di Rumah Sakit Umum Daerah Dokter Soekardjo Kota Tasikmalaya',
                                    'journal' => 'Akselerasi: Jurnal Ilmiah Teknik Sipil, Vol. 7 No. 1',
                                    'year' => '2025',
                                    'badge' => 'Drainase Perkotaan & EPA SWMM',
                                    'badge_color' => 'bg-cyan-50 text-cyan-800 border-cyan-200/70',
                                    'icon' => 'fa-solid fa-water',
                                    'authors' => 'Fauziah, I. K., Rahman, R. S., Pirdaus, G. F., Syaban, A. F., Nabila, E., Irawan, P., Arviananda, R. R. D., et al.',
                                    'doi' => null,
                                ],
                                [
                                    'no' => 4,
                                    'title' => 'Studies of Improving Drinking Water Quality in the Kalurahan Banaran Kabupaten Kulon Progo Using Porous Concrete Filter',
                                    'journal' => 'INERSIA: Informasi dan Ekspose Hasil Riset Teknik Sipil dan Arsitektur, Vol. 19 No. 2',
                                    'year' => '2023',
                                    'badge' => 'Kualitas Air Minum & Porous Concrete',
                                    'badge_color' => 'bg-teal-50 text-teal-800 border-teal-200/70',
                                    'icon' => 'fa-solid fa-filter',
                                    'authors' => 'Arviananda, R. D., Kamulyan, B., & Nurrochmad, F.',
                                    'doi' => null,
                                ],
                                [
                                    'no' => 5,
                                    'title' => 'Pelaksanaan Pembelajaran Team Teaching pada Mata Pelajaran Gambar Konstruksi Bangunan Kelas XI di SMK Negeri 2 Yogyakarta',
                                    'journal' => 'Jurnal Elektronik Mahasiswa Pendidikan Teknik Sipil (JEPTS), Vol. 5 No. 6, Hal. 36',
                                    'year' => '2017',
                                    'badge' => 'Pendidikan Vokasi Ketekniksipilan',
                                    'badge_color' => 'bg-blue-50 text-blue-800 border-blue-200/70',
                                    'icon' => 'fa-solid fa-pen-ruler',
                                    'authors' => 'Arviananda, R. D., & Haryadi, B.',
                                    'doi' => null,
                                ],
                            ];
                            @endphp

                            @foreach($jurnalList as $jurnal)
                            <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-indigo-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                <div class="flex items-start gap-3">
                                    <span class="w-6 h-6 rounded-lg bg-indigo-100 text-indigo-800 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5 border border-indigo-200">
                                        {{ $jurnal['no'] }}
                                    </span>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                                            <span class="text-[10px] font-bold px-2 py-0.5 rounded-md border {{ $jurnal['badge_color'] }} inline-flex items-center gap-1">
                                                <i class="{{ $jurnal['icon'] }} text-[9px]"></i> {{ $jurnal['badge'] }}
                                            </span>
                                            <span class="text-slate-500 font-mono text-[10px] bg-slate-100 px-2 py-0.5 rounded font-semibold ml-auto">
                                                {{ $jurnal['year'] }}
                                            </span>
                                        </div>
                                        <h5 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-indigo-950 transition-colors">
                                            {{ $jurnal['title'] }}
                                        </h5>
                                        <p class="text-[11px] text-slate-500 mt-1.5 leading-relaxed">
                                            <strong class="text-slate-700">Penulis:</strong> {{ $jurnal['authors'] }}
                                        </p>
                                        <p class="text-[11px] text-[#0070BA] font-semibold mt-1 flex items-center gap-1.5 flex-wrap">
                                            <i class="fa-solid fa-book-bookmark text-[10px] text-slate-400"></i>
                                            <span>{{ $jurnal['journal'] }}</span>
                                            @if(!empty($jurnal['doi']))
                                                <a href="{{ $jurnal['doi'] }}" target="_blank" rel="noopener noreferrer" class="text-emerald-700 hover:underline inline-flex items-center gap-1 text-[10px] ml-auto">
                                                    <span>DOI: 10.22236/solma</span>
                                                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                                </a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{-- Daftar Prosiding Konferensi Internasional --}}
                        <div>
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-chalkboard-user text-[#0070BA]"></i> Prosiding Konferensi Internasional
                            </h4>

                            @php
                            $konferensiList = [
                                [
                                    'title' => 'Seismic Retrofit of Existing Steel Buildings for Resilient and Sustainable Infrastructure: A Comparative Study of X and V-Bracing',
                                    'proceeding' => 'E3S Web of Conferences, Vol. 736, 05001',
                                    'publisher' => 'EDP Sciences',
                                    'year' => '2026',
                                    'authors' => 'Wanto, S., Manggala, K. S., Arviananda, R. R. D., Virawan, Z. F., Jatnika, G. R., Aziz, I., Ramadhan, M. A., & Sulong, A. B.',
                                    'role' => 'Scopus Indexed Proceeding',
                                ],
                                [
                                    'title' => 'Study of Micro-Level Construction Supply Chain Performance on Building Construction in Makassar City',
                                    'proceeding' => 'The 2025 International Conference on Sustainable Innovation and Environment (ICSIE), Surakarta',
                                    'publisher' => 'ICSIE 2025',
                                    'year' => '2025',
                                    'authors' => 'Al Mustafa, M. R., Abdurrahman, M. A., Hamzah, S., Wanto, S., Jatnika, G. R., & Arviananda, R. R. D.',
                                    'role' => 'Presenter Konferensi Internasional',
                                ],
                            ];
                            @endphp

                            <div class="space-y-3">
                                @foreach($konferensiList as $item)
                                <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-blue-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                    <div class="flex items-center justify-between gap-2 text-xs mb-1.5 flex-wrap">
                                        <span class="font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md text-[11px] border border-blue-200/70 shadow-2xs">
                                            <i class="fa-solid fa-users-viewfinder text-[10px] mr-1"></i> {{ $item['role'] }}
                                        </span>
                                        <span class="text-slate-500 font-mono text-[11px] font-bold bg-slate-100 px-2 py-0.5 rounded">{{ $item['year'] }}</span>
                                    </div>
                                    <h5 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-blue-950 transition-colors">
                                        {{ $item['title'] }}
                                    </h5>
                                    <p class="text-[11px] text-slate-500 mt-1.5">
                                        <strong class="text-slate-700">Penulis:</strong> {{ $item['authors'] }}
                                    </p>
                                    <p class="text-[11px] text-slate-600 font-medium flex items-center gap-1.5 mt-1">
                                        <i class="fa-solid fa-book-open text-cyan-600 text-[10px]"></i>
                                        <span>{{ $item['proceeding'] }} &bull; {{ $item['publisher'] }}</span>
                                    </p>
                                </div>
                                @endforeach
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
