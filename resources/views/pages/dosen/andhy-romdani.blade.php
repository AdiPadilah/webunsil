@extends('layouts.app')

@php
    $dosen ??= \App\Models\Dosen::where('slug', 'andhy-romdani')->orWhere('profile_route', 'dosen.andhy-romdani')->first();
    $books ??= \App\Models\Buku::published()
        ->where('penulis_route', 'dosen.andhy-romdani')
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get();
    $bukuSipil = $books->where('kategori', '!=', 'fiksi')->values();
    $bukuFiksi = $books->where('kategori', 'fiksi')->values();
    $namaDosen = $dosen?->nama ?? 'Andhy Romdani, S.T., M.Eng., Ph.D.';
    $kbkLabel = $dosen?->kbk_label ?? 'Rekayasa Sumber Daya Air';
    $fotoUrl = $dosen?->foto_url ?: asset('images/dosen/andhy-romdani.jpg') . '?v=' . (@filemtime(public_path('images/dosen/andhy-romdani.jpg')) ?: 2);
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik ' . $namaDosen . ' - Ketua Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, pakar ' . $kbkLabel . ', penulis 19 buku dan belasan publikasi internasional.')

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

            <div class="flex items-center gap-2">
                <span class="bg-[#0070BA]/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full border border-blue-400/30 uppercase tracking-wider">
                    Ketua Program Studi
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
                                 class="w-full h-full object-cover object-center">
                        </div>

                        <h2 class="text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            {{ $namaDosen }}
                        </h2>
                        <p class="text-xs font-semibold text-[#0070BA] mt-1">
                            Ketua Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-cyan-800 bg-cyan-50 px-2.5 py-1 rounded-md border border-cyan-100">
                                <i class="fa-solid fa-water text-cyan-600"></i> {{ $kbkLabel }}
                            </span>
                        </div>

                        {{-- Tautan Kontak & Profil Riset --}}
                        <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                            <a href="mailto:andhyromdani@unsil.ac.id" 
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                    <span class="font-medium truncate block">andhyromdani@unsil.ac.id</span>
                                </div>
                            </a>

                            <a href="https://orcid.org/0009-0008-3138-9078" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#a6ce39] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-[#a6ce39] flex items-center justify-center shrink-0 group-hover:bg-[#a6ce39] group-hover:text-white transition">
                                    <i class="fa-brands fa-orcid text-base"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">ORCID ID</span>
                                    <span class="font-medium truncate block font-mono text-[11px]">0009-0008-3138-9078</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-[#a6ce39]"></i>
                            </a>

                            <a href="https://www.researchgate.net/profile/Andhy-Romdani" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#00ccbb] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-teal-50 text-[#00ccbb] flex items-center justify-center shrink-0 group-hover:bg-[#00ccbb] group-hover:text-white transition">
                                    <i class="fa-brands fa-researchgate text-base"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">ResearchGate</span>
                                    <span class="font-medium truncate block">Andhy Romdani</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-[#00ccbb]"></i>
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
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">{{ $books->count() }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">14</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Jurnal Internasional</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">4</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Konferensi Global</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">4</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Penghargaan Prestisius</span>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100">
                            <a href="{{ route('dosen') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-[#0B2A4A] hover:text-white text-slate-700 text-xs font-semibold transition duration-200">
                                <i class="fa-solid fa-arrow-left text-[11px]"></i> Kembali ke Semua Dosen
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Konten Utama Kanan: Biografi, Riwayat, Buku, Publikasi --}}
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
                                <p class="text-xs text-slate-400 font-medium">Ringkasan perjalanan akademik dan dedikasi profesional</p>
                            </div>
                        </div>


                        <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                            <p>
                                Andhy Romdani menempuh studi sarjana di Jurusan Teknik Sipil, Fakultas Teknik, Universitas Gadjah Mada (UGM), Yogyakarta, dan berhasil menyelesaikan gelar Sarjana Teknik (S.T.) serta Master of Engineering (M.Eng.) dari almamater yang sama.
                            </p>
                            <p>
                                Perjalanan keilmuannya berlanjut ke jenjang doktoral (Ph.D.) di National Cheng Kung University (NCKU), Taiwan, pada Department of Hydraulic and Ocean Engineering. Berkat kualitas riset dan capaian akademiknya yang unggul, beliau dinobatkan sebagai salah satu lulusan terbaik program doktoral dan dianugerahi penghargaan kehormatan dari <em>The Phi Tau Phi Scholastic Honor Society of the Republic of China</em> pada tahun 2023.
                            </p>
                            <p>
                                Sebelum mendedikasikan diri sepenuhnya di dunia akademik, beliau menimba pengalaman praktis di industri konstruksi skala nasional melalui BUMN terkemuka, yaitu PT Wijaya Karya (Persero) Tbk dan PT Pembangunan Perumahan (Persero) Tbk. Beliau juga memiliki rekam jejak kepemimpinan literasi sebagai <em>Editor in Chief</em> di Penerbit Mizan, Bandung.
                            </p>
                        </div>


                    </div>

                    {{-- 2. Riwayat Pendidikan & Rekognisi --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pendidikan &amp; Rekognisi
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Kualifikasi gelar akademik, rekognisi internasional, dan rekam jejak industri</p>
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
                                            Program Doktoral (Ph.D.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">Lulus 2023</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">National Cheng Kung University (NCKU), Taiwan</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Department of Hydraulic and Ocean Engineering</p>
                                    <div class="inline-flex items-center gap-1.5 text-xs font-semibold text-amber-700 bg-amber-50/80 border border-amber-200/70 px-2.5 py-1 rounded-lg mt-2">
                                        <i class="fa-solid fa-award text-amber-500"></i> Lulusan Terbaik Doktoral — The Phi Tau Phi Scholastic Honor Society (2023)
                                    </div>
                                </div>

                                {{-- S2 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Magister (M.Eng.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">Lulus 2012</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Gadjah Mada (UGM), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Jurusan Teknik Sipil, Fakultas Teknik</p>
                                </div>

                                {{-- S1 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-300 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Sarjana (S.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">Lulus 2004</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Gadjah Mada (UGM), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Jurusan Teknik Sipil, Fakultas Teknik</p>
                                </div>
                            </div>
                        </div>

                        {{-- Penghargaan --}}
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-trophy text-amber-500"></i> Penghargaan &amp; Rekognisi Kehormatan
                            </h4>

                            <div class="p-4 rounded-xl bg-gradient-to-br from-amber-50/70 to-amber-50/20 border border-amber-200/80 flex items-start gap-3.5 mb-3.5 hover:shadow-2xs transition">
                                <div class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0 text-base shadow-2xs">
                                    <i class="fa-solid fa-medal"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider block">Tahun 2023 &bull; Taiwan</span>
                                    <h6 class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5 leading-snug">The Phi Tau Phi Scholastic Honor Society</h6>
                                    <p class="text-[11px] text-slate-600 mt-1 leading-relaxed">Dianugerahi sebagai salah satu lulusan terbaik pada program doktoral (Ph.D.) di Taiwan.</p>
                                </div>
                            </div>

                            @php
                            $penghargaanPenerbit = [
                                [
                                    'meta' => 'Februari 2026 • LovRinz',
                                    'title' => 'Penulis Dosen Terproduktif',
                                    'desc' => 'Penghargaan Penulis Dosen Terproduktif dari Penerbit LovRinz (Cirebon, 7 Februari 2026).',
                                    'img' => 'images/penghargaan/andhy-lovrinz-terproduktif-2026.jpg',
                                ],
                                [
                                    'meta' => 'Tahun 2025 • Mega Press Nusantara',
                                    'title' => 'Penulis Terbaik & Terproduktif',
                                    'desc' => 'Sertifikat No. 122/II/e-serkep/MPNus/2025 atas kontribusi menerbitkan 11 judul buku ber-ISBN bersama CV. Mega Press Nusantara.',
                                    'img' => 'images/penghargaan/andhy-mega-press-terproduktif-2025.jpg',
                                ],
                                [
                                    'meta' => 'November 2023 • Mega Press Nusantara',
                                    'title' => 'Penulis Terfavorit',
                                    'desc' => 'Piagam Penghargaan No. 001/MP/xi/2023 sebagai Penulis Terfavorit dari CV. Mega Press Nusantara (Sumedang, 28 November 2023).',
                                    'img' => 'images/penghargaan/andhy-mega-press-terfavorit-2023.jpg',
                                ],
                            ];
                            @endphp

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5">
                                @foreach($penghargaanPenerbit as $award)
                                <div class="rounded-xl bg-gradient-to-br from-blue-50/60 to-white border border-blue-200/80 overflow-hidden flex flex-col hover:border-[#0070BA]/60 hover:shadow-sm transition group">
                                    <button type="button"
                                            onclick="openPiagamModal(this)"
                                            data-src="{{ asset($award['img']) }}"
                                            data-title="{{ $award['title'] }}"
                                            data-meta="{{ $award['meta'] }}"
                                            aria-label="Perbesar piagam {{ $award['title'] }}"
                                            class="relative aspect-[4/3] w-full overflow-hidden bg-slate-100 cursor-zoom-in focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#0070BA]">
                                        <img src="{{ asset($award['img']) }}"
                                             alt="Piagam {{ $award['title'] }} - Andhy Romdani"
                                             loading="lazy"
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                        <span class="absolute bottom-2 right-2 bg-[#0B2A4A]/80 backdrop-blur-sm text-white text-[10px] font-semibold px-2 py-0.5 rounded-md inline-flex items-center gap-1 shadow-sm">
                                            <i class="fa-solid fa-magnifying-glass-plus text-[9px] text-amber-400"></i> Perbesar
                                        </span>
                                    </button>
                                    <div class="p-3.5 flex-1 flex flex-col">
                                        <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider block">{{ $award['meta'] }}</span>
                                        <h6 class="text-xs sm:text-[13px] font-bold text-slate-900 mt-1 leading-snug">{{ $award['title'] }}</h6>
                                        <p class="text-[11px] text-slate-600 mt-1.5 leading-relaxed">{{ $award['desc'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Pengalaman Profesional --}}
                        <div class="pt-6 border-t border-slate-100 mt-6">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-briefcase text-slate-600"></i> Pengalaman Praktis &amp; Industri
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                    <div class="w-7 h-7 rounded-lg bg-blue-100/80 text-[#0070BA] flex items-center justify-center text-xs mb-2">
                                        <i class="fa-solid fa-chalkboard-user"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 block text-xs">Akademisi &amp; Pimpinan</span>
                                    <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">Ketua Program Studi S-1 Teknik Sipil FT Universitas Siliwangi</p>
                                </div>
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                    <div class="w-7 h-7 rounded-lg bg-emerald-100/80 text-emerald-700 flex items-center justify-center text-xs mb-2">
                                        <i class="fa-solid fa-city"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 block text-xs">Kontraktor BUMN</span>
                                    <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">PT Wijaya Karya (Persero) Tbk &bull; PT Pembangunan Perumahan (Persero) Tbk</p>
                                </div>
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                    <div class="w-7 h-7 rounded-lg bg-blue-100/80 text-blue-700 flex items-center justify-center text-xs mb-2">
                                        <i class="fa-solid fa-newspaper"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 block text-xs">Penulisan &amp; Media</span>
                                    <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">Editor in Chief di Penerbit Mizan, Bandung</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 3. Karya Buku --}}
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
                                    <p class="text-xs text-slate-400 font-medium">Koleksi buku non-fiksi keteknik-sipilan dan sastra fiksi ber-ISBN</p>
                                </div>
                            </div>
                        </div>

                        {{-- Buku Non-Fiksi Keteknik-sipilan --}}
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-slate-100">
                                <h4 class="text-sm font-bold text-slate-800">Buku Non-Fiksi (Keteknik-sipilan)</h4>
                                <span class="text-[10px] text-cyan-800 font-semibold bg-cyan-50 border border-cyan-200/60 px-2.5 py-0.5 rounded-full ml-auto">{{ $bukuSipil->count() }} Judul</span>
                            </div>

                            <div class="space-y-2.5">
                                @forelse($bukuSipil as $index => $buku)
                                <div class="p-3 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-cyan-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-center gap-3 group">
                                    {{-- Cover Thumbnail --}}
                                    <div class="shrink-0 w-10 h-14 sm:w-12 sm:h-16 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-slate-100 group-hover:shadow-md transition-shadow">
                                        @if($buku->cover_url)
                                            <img src="{{ $buku->cover_url }}"
                                                 alt="{{ $buku->judul }}"
                                                 class="w-full h-full object-cover"
                                                 onerror="this.style.display='none'">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] flex items-center justify-center text-white/40">
                                                <i class="fa-solid fa-book text-xs" aria-hidden="true"></i>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- Nomor + Judul --}}
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start gap-2">
                                            <span class="w-5 h-5 rounded bg-cyan-100 text-cyan-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-cyan-200/70">
                                                {{ $index + 1 }}
                                            </span>
                                            <h5 class="text-xs sm:text-[13px] font-bold text-slate-800 leading-snug group-hover:text-cyan-950 transition-colors">
                                                {{ $buku->judul }}
                                            </h5>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1.5 flex-wrap">
                                            @if(!empty($buku->isbn))
                                                <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200/80">ISBN: {{ $buku->isbn }}</span>
                                            @endif
                                            <span class="text-cyan-700 bg-cyan-50 font-semibold text-[10px] px-2 py-0.5 rounded-full border border-cyan-200/70">{{ $buku->label ?: 'Non-Fiksi' }}</span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p class="text-xs text-slate-400">Belum ada buku non-fiksi yang tertaut.</p>
                                @endforelse
                            </div>
                        </div>

                        {{-- Buku Fiksi / Novel --}}
                        <div>
                            <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-slate-100">
                                <i class="fa-solid fa-feather-pointed text-amber-600 text-sm"></i>
                                <h4 class="text-sm font-bold text-slate-800">Buku Fiksi (Novel Kreatif)</h4>
                                <span class="text-[10px] text-amber-800 font-semibold bg-amber-50 border border-amber-200/60 px-2.5 py-0.5 rounded-full ml-auto">{{ $bukuFiksi->count() }} Judul</span>
                            </div>

                            <div class="space-y-2.5">
                                @forelse($bukuFiksi as $index => $novel)
                                <div class="p-3 rounded-xl bg-amber-50/30 border border-amber-200/70 hover:border-amber-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-center gap-3 group">
                                    {{-- Cover Thumbnail --}}
                                    <div class="shrink-0 w-10 h-14 sm:w-12 sm:h-16 rounded-md overflow-hidden border border-amber-200/70 shadow-sm bg-amber-50 group-hover:shadow-md transition-shadow">
                                        @if($novel->cover_url)
                                            <img src="{{ $novel->cover_url }}"
                                                 alt="{{ $novel->judul }}"
                                                 class="w-full h-full object-cover"
                                                 onerror="this.style.display='none'">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-amber-600 to-amber-800 flex items-center justify-center text-white/60">
                                                <i class="fa-solid fa-book text-xs" aria-hidden="true"></i>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- Nomor + Judul --}}
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start gap-2">
                                            <span class="w-5 h-5 rounded bg-amber-100 text-amber-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-amber-200/70">
                                                {{ $index + 1 }}
                                            </span>
                                            <h5 class="text-xs sm:text-[13px] font-bold text-slate-800 leading-snug group-hover:text-amber-950 transition-colors">
                                                {{ $novel->judul }}
                                            </h5>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1.5 flex-wrap">
                                            @if(!empty($novel->isbn))
                                                <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200/80">ISBN: {{ $novel->isbn }}</span>
                                            @endif
                                            <span class="text-amber-700 bg-amber-100/70 font-semibold text-[10px] px-2 py-0.5 rounded-full border border-amber-200">{{ $novel->label ?: 'Novel Fiksi' }}</span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p class="text-xs text-slate-400">Belum ada karya fiksi yang tertaut.</p>
                                @endforelse
                            </div>
                        </div>

                    </div>

                    {{-- 4. Publikasi Jurnal Internasional (14 Artikel Peer-Reviewed) --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Publikasi Jurnal Internasional
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Artikel ilmiah peer-reviewed bereputasi global (ASCE, Elsevier, Taylor &amp; Francis)</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-2xs">
                                <i class="fa-solid fa-globe text-indigo-600 mr-1"></i> 14 Artikel Terindeks
                            </span>
                        </div>

                        <div class="space-y-3.5">
                            @php
                            $jurnalList = [
                                [
                                    'no' => 1,
                                    'authors' => 'Romdani, A., Chen, J.-L., Chien, H., Lin, J.-H., Hung, C.-K., Huang, Y.-Q.',
                                    'year' => '2022',
                                    'title' => 'Adjacent to a River Mouth: Mechanisms and Effects of Littoral Sediment Transport to the Navigation Channel',
                                    'journal' => 'Journal of Waterway, Port, Coastal, and Ocean Engineering (ASCE)',
                                    'vol' => '148(5), 05022001',
                                    'doi' => 'https://doi.org/10.1061/(ASCE)WW.1943-5460.0000700',
                                    'doi_label' => '10.1061/(ASCE)WW.1943-5460.0000700',
                                ],
                                [
                                    'no' => 2,
                                    'authors' => 'Romdani, A., Tsai, S.-D., Tsai, W.-Z., Lin, Y.-C., Chen, J.-L.',
                                    'year' => '2022',
                                    'title' => 'A numerical investigation on the occurrence of the typhoon-triggered density currents of the 2008-flood event',
                                    'journal' => 'Journal of Coastal and Offshore Science and Engineering',
                                    'vol' => '1, 100-116',
                                    'doi' => 'https://doi.org/10.53256/COSE_220106',
                                    'doi_label' => '10.53256/COSE_220106',
                                ],
                                [
                                    'no' => 3,
                                    'authors' => 'Romdani, A., Chen, J.-L., Chien, H., Lin, J.-H., Liao, C.-Y., Hou, C.-Q.',
                                    'year' => '2022',
                                    'title' => 'Downdrift Port Siltation Adjacent to a River Mouth: Effects of Meso-tidal Conditions and Typhoon',
                                    'journal' => 'Journal of Waterway, Port, Coastal, and Ocean Engineering (ASCE)',
                                    'vol' => 'JWPED5/WWENG-1940',
                                    'doi' => 'https://doi.org/10.1061/JWPED5/WWENG-1940',
                                    'doi_label' => '10.1061/JWPED5/WWENG-1940',
                                ],
                                [
                                    'no' => 4,
                                    'authors' => 'Tsai, S.-D., Lin, Y.-C., Romdani, A., Chen, J.-L., Hsu, R.T., Liu, J.T.',
                                    'year' => '2023',
                                    'title' => 'On the Occurrence of Low Concentration Hyperpycnal River Plumes in a Small Mountainous River-Canyon System',
                                    'journal' => 'Continental Shelf Research (Elsevier)',
                                    'vol' => '267, 104952',
                                    'doi' => 'https://doi.org/10.1016/j.csr.2023.104952',
                                    'doi_label' => '10.1016/j.csr.2023.104952',
                                ],
                                [
                                    'no' => 5,
                                    'authors' => 'Tsai, S.-D., Chen, J.-L., Hsu, W.-Y., Tsai, W.-Z., Romdani, A.',
                                    'year' => '2023',
                                    'title' => 'Morphological Evolution and Sediment Budget of a River-Dominated Meso-Tidal Coast',
                                    'journal' => 'Journal of Marine Science and Engineering',
                                    'vol' => '11(7), 1361',
                                    'doi' => 'https://doi.org/10.3390/jmse11071361',
                                    'doi_label' => '10.3390/jmse11071361',
                                ],
                                [
                                    'no' => 6,
                                    'authors' => 'Romdani, A. and Chen, J.-L.',
                                    'year' => '2024',
                                    'title' => 'Tidal and Seasonal Variations in Suspended Sediment Concentrations in a Meso-Tidal Macro-Estuary',
                                    'journal' => 'Estuarine, Coastal and Shelf Science (Elsevier)',
                                    'vol' => '303, 108819',
                                    'doi' => 'https://doi.org/10.1016/j.ecss.2024.108819',
                                    'doi_label' => '10.1016/j.ecss.2024.108819',
                                ],
                                [
                                    'no' => 7,
                                    'authors' => 'Romdani, A., Amanulloh, F. R., Mudatsir',
                                    'year' => '2024',
                                    'title' => 'Coastal Vulnerability of East Priangan, Indonesia to Waves and Tidal Flooding during the 2022 La Niña Event',
                                    'journal' => 'Coastal Engineering Journal (Taylor & Francis)',
                                    'vol' => '67(1), 1-17',
                                    'doi' => 'https://doi.org/10.1080/21664250.2024.2415174',
                                    'doi_label' => '10.1080/21664250.2024.2415174',
                                ],
                                [
                                    'no' => 8,
                                    'authors' => 'Pamungkas, M. T. P., Romdani, A., Gusnadi, Z., Senyaji, H., Atlie, D. B. P.',
                                    'year' => '2024',
                                    'title' => 'Analysis of Pile Foundation Bearing Capacity for Bridge Pier on Clay Soil: Case Study of Kali Ketiwon Bridge, Tegal',
                                    'journal' => 'Jurnal Ilmiah Desain & Konstruksi',
                                    'vol' => '23(2), 173-184',
                                    'doi' => 'https://doi.org/10.35760/dk.2024.v23i2.11585',
                                    'doi_label' => '10.35760/dk.2024.v23i2.11585',
                                ],
                                [
                                    'no' => 9,
                                    'authors' => 'Pamungkas, M. T. P., Romdani, A., Senyaji, H., Gusnadi, Z., Atlie, D. B. P.',
                                    'year' => '2025',
                                    'title' => 'Geotechnical and Slope Stability Evaluation for Warehouse Infrastructure on Clay Shale and Marine Mud in Balikpapan',
                                    'journal' => 'Jurnal Rekayasa Sipil (JRS-Unand)',
                                    'vol' => '21(1), 32-45',
                                    'doi' => 'https://doi.org/10.25077/jrs.21.1.32-45.2025',
                                    'doi_label' => '10.25077/jrs.21.1.32-45.2025',
                                ],
                                [
                                    'no' => 10,
                                    'authors' => 'Mudatsir, Romdani, A., Amanulloh, F. R., Priatna, L., Sudrajat, D. A.',
                                    'year' => '2025',
                                    'title' => 'A Review of Recent Extreme Wave and Sea Level Rise in the Southern Coast of West Java, Indonesia: Coastal Vulnerability, Impacts, and Adaptation Challenges',
                                    'journal' => 'Omni-Akuatika',
                                    'vol' => '21(1)',
                                    'doi' => 'https://doi.org/10.20884/1.oa.2025.21.1.1215',
                                    'doi_label' => '10.20884/1.oa.2025.21.1.1215',
                                ],
                                [
                                    'no' => 11,
                                    'authors' => 'Amanulloh, F. R., Romdani, A., Mudatsir, Raharjo, P., Cosmaad, R.',
                                    'year' => '2025',
                                    'title' => 'Spatial Distribution of Water Column Stability and Ocean Heat Content Under Extreme Weather in West Java\'s Southern Coast, Indonesia',
                                    'journal' => 'Omni-Akuatika',
                                    'vol' => '21(1)',
                                    'doi' => 'https://doi.org/10.20884/1.oa.2025.21.1.1207',
                                    'doi_label' => '10.20884/1.oa.2025.21.1.1207',
                                ],
                                [
                                    'no' => 12,
                                    'authors' => 'Pamungkas, M. T. P., Romdani, A., Gusnadi, Z., Senyaji, H., Atlie, D. B. P.',
                                    'year' => '2026',
                                    'title' => 'Soil Improvement Analysis for Container Yard Using Prefabricated Vertical Drains (PVD) and Preloading: a Case Study of Reclaimed Land in the Madura Strait',
                                    'journal' => 'Balanga: Jurnal Pendidikan Teknologi dan Kejuruan',
                                    'vol' => '14(1)',
                                    'doi' => 'https://doi.org/10.37304/balanga.v14i1.26433',
                                    'doi_label' => '10.37304/balanga.v14i1.26433',
                                ],
                                [
                                    'no' => 13,
                                    'authors' => 'Romdani, A., Mudatsir, Amanulloh, F. R., El Ghifari, M. R., Cosmaad, R., Atlie, D. B. P.',
                                    'year' => '2026',
                                    'title' => 'Mapping Climate and Air Quality Risks for Acute Respiratory Infections in Eastern Priangan, Indonesia',
                                    'journal' => 'Jurnal Ilmiah Kandang Tilagang',
                                    'vol' => '17(2)',
                                    'doi' => 'https://doi.org/10.37304/jikt.v17i2.46',
                                    'doi_label' => '10.37304/jikt.v17i2.46',
                                ],
                                [
                                    'no' => 14,
                                    'authors' => 'Romdani, A.',
                                    'year' => '2027',
                                    'title' => 'Advanced Spatial Mapping of River-Wave-Compound Flooding in a Tropical Monsoon Coast Using Statistical-Hydrodynamic Integration: Insights from Brebes Coast, Indonesia',
                                    'journal' => 'Marine Development',
                                    'vol' => 'In Press / Accepted',
                                    'doi' => '#',
                                    'doi_label' => 'Marine Development 2027',
                                ],
                            ];
                            @endphp

                            @foreach($jurnalList as $jurnal)
                            <div class="p-4 sm:p-4.5 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-indigo-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                <div class="flex items-center justify-between gap-3 mb-1.5 flex-wrap">
                                    <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-indigo-50 text-indigo-700 border border-indigo-200/60 shadow-2xs">
                                        #{{ $jurnal['no'] }} &bull; Peer-Reviewed
                                    </span>
                                    <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                        {{ $jurnal['year'] }}
                                    </span>
                                </div>
                                <h5 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-indigo-950 transition-colors">
                                    {{ $jurnal['title'] }}
                                </h5>
                                <p class="text-xs text-indigo-950/80 font-medium italic mt-1.5 flex items-center gap-1.5 flex-wrap">
                                    <i class="fa-solid fa-book-open text-indigo-500 text-[11px]"></i>
                                    <span>{{ $jurnal['journal'] }}</span>
                                    <span class="text-slate-400 not-italic">&bull;</span>
                                    <span class="text-slate-600 not-italic">{{ $jurnal['vol'] }}</span>
                                </p>
                                <p class="text-[11px] text-slate-500 mt-1">
                                    <strong class="text-slate-700">Penulis:</strong> {{ $jurnal['authors'] }}
                                </p>
                                @if(!empty($jurnal['doi_label']) && $jurnal['doi_label'] !== '#')
                                <div class="mt-2.5 pt-2 border-t border-slate-100 flex items-center justify-between flex-wrap gap-2">
                                    <span class="text-[11px] text-slate-500 font-mono inline-flex items-center gap-1.5 bg-white px-2 py-0.5 rounded border border-slate-200/70 shadow-2xs">
                                        <i class="fa-solid fa-link text-[10px] text-slate-400"></i> DOI: {{ $jurnal['doi_label'] }}
                                    </span>
                                    <span class="text-[10px] text-indigo-600 font-semibold bg-indigo-50/60 px-2 py-0.5 rounded">Scopus / Global</span>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 5. Konferensi Internasional --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Konferensi Internasional
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Penyajian hasil riset di forum ilmiah dunia</p>
                            </div>
                        </div>

                        <div class="space-y-3.5">
                            @php
                            $konferensiList = [
                                [
                                    'title' => 'Downdrift Erosion adjacent to a River Mouth: Mechanisms and Effects of Episodic Riverine Sediments and Littoral Sediment transport',
                                    'event' => 'AGU Fall Meeting 2020',
                                    'location' => 'Amerika Serikat (USA)',
                                    'authors' => 'Romdani, A., Chen, J.-L., Chien, H., Hsu, L.-J., Hung, C.-K., Huang, Y.-Q.',
                                    'year' => '2020',
                                ],
                                [
                                    'title' => 'Downdrift Siltation Adjacent to River Mouth: Effects of Meso-tidal Conditions',
                                    'event' => 'Proceeding of 44th Ocean Engineering Conference in Taiwan',
                                    'location' => 'National Sun Yat-sen University, Kaohsiung, Taiwan',
                                    'authors' => 'Romdani, A., Chen, J. L., Hou, C. Q., Tsai, W. Z., Liao, C. Y., Pao, C. H.',
                                    'year' => '2022',
                                ],
                                [
                                    'title' => 'Anomaly of the 2022 La Niña Extreme Event and Its Impacts on The Southern Coastal Area of West Java, Indonesia',
                                    'event' => 'Global Forum on Disaster Solutions (GFDS) — Two Decades Post Aceh-Indonesia\'s Earthquake and Tsunami',
                                    'location' => 'Yogyakarta, Indonesia',
                                    'authors' => 'Amanulloh, F.-R. and Romdani, A.',
                                    'year' => '2024',
                                ],
                                [
                                    'title' => 'Numerical Simulation Study of The River Plume Processes Under the Effect of Coriolis Force During Extreme Typhoon Event',
                                    'event' => 'Global Forum on Disaster Solutions (GFDS) — Two Decades Post Aceh-Indonesia\'s Earthquake and Tsunami',
                                    'location' => 'Yogyakarta, Indonesia',
                                    'authors' => 'Romdani, A.',
                                    'year' => '2024',
                                ],
                            ];
                            @endphp

                            @foreach($konferensiList as $item)
                            <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-blue-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                <div class="flex items-center justify-between gap-2 text-xs mb-1.5 flex-wrap">
                                    <span class="font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md text-[11px] border border-blue-200/70 shadow-2xs">
                                        <i class="fa-solid fa-users-viewfinder text-[10px] mr-1"></i> {{ $item['event'] }}
                                    </span>
                                    <span class="text-slate-500 font-mono text-[11px] font-bold bg-slate-100 px-2 py-0.5 rounded">{{ $item['year'] }}</span>
                                </div>
                                <h5 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug mt-1 group-hover:text-blue-950 transition-colors">
                                    {{ $item['title'] }}
                                </h5>
                                <p class="text-[11px] text-slate-500 mt-1.5">
                                    <strong class="text-slate-700">Penulis:</strong> {{ $item['authors'] }}
                                </p>
                                <p class="text-[11px] text-slate-600 font-medium flex items-center gap-1.5 mt-1">
                                    <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i> {{ $item['location'] }}
                                </p>
                            </div>
                            @endforeach
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

    {{-- Lightbox Preview Piagam Penghargaan --}}
    <div id="modal-piagam-andhy" class="fixed inset-0 z-50 hidden bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="piagam-modal-title">
        <div class="bg-white rounded-2xl max-w-3xl w-full overflow-hidden shadow-2xl border border-slate-200">
            <div class="bg-[#0B2A4A] px-5 py-3.5 flex items-center justify-between gap-4 text-white">
                <div class="min-w-0">
                    <span id="piagam-modal-meta" class="block text-[10px] font-bold uppercase tracking-wider text-amber-400"></span>
                    <h4 id="piagam-modal-title" class="text-sm sm:text-base font-bold truncate"></h4>
                </div>
                <button type="button" onclick="closePiagamModal()" aria-label="Tutup pratinjau piagam" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-slate-200 hover:text-white flex items-center justify-center shrink-0 transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="bg-slate-900/95 p-3 sm:p-5 flex items-center justify-center">
                <img id="piagam-modal-img" src="" alt="Piagam Penghargaan" class="max-h-[75vh] w-auto max-w-full object-contain rounded-lg shadow-lg">
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function openPiagamModal(trigger) {
            const modal = document.getElementById('modal-piagam-andhy');
            const img = document.getElementById('piagam-modal-img');
            const title = document.getElementById('piagam-modal-title');
            const meta = document.getElementById('piagam-modal-meta');
            if (!modal || !img || !title || !meta) return;

            img.src = trigger.dataset.src || '';
            img.alt = 'Piagam ' + (trigger.dataset.title || 'Penghargaan');
            title.textContent = trigger.dataset.title || '';
            meta.textContent = trigger.dataset.meta || '';
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closePiagamModal() {
            const modal = document.getElementById('modal-piagam-andhy');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }

        document.addEventListener('click', function (e) {
            const modal = document.getElementById('modal-piagam-andhy');
            if (modal && e.target === modal) {
                closePiagamModal();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closePiagamModal();
            }
        });
    </script>
    @endpush

@endsection
