@extends('layouts.app')

@php
    $dosen ??= \App\Models\Dosen::where('slug', 'muhamad-anugerah')->orWhere('profile_route', 'dosen.muhamad-anugerah')->first();
    $books ??= \App\Models\Buku::published()
        ->where('penulis_route', 'dosen.muhamad-anugerah')
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get();
    $bukuSipil = $books->where('kategori', '!=', 'fiksi')->values();
    $namaDosen = $dosen?->nama ?? 'Muhamad Anugerah Ramadhan, S.T., M.T.';
    $kbkLabel = $dosen?->kbk_label ?? 'Rekayasa Transportasi dan Jalan Raya';
    $fotoUrl = $dosen?->foto_url ?: asset('images/dosen/muhamad-anugerah.jpg') . '?v=' . (@filemtime(public_path('images/dosen/muhamad-anugerah.jpg')) ?: 2);
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik ' . $namaDosen . ' - Dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, bidang keahlian ' . $kbkLabel . ', spesialisasi perkerasan jalan.')

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
                    Dosen Program Studi
                </span>
                <span class="bg-emerald-500/20 text-emerald-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-emerald-400/20">
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
                            Dosen Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
                                <i class="fa-solid fa-road text-emerald-600"></i> Rekayasa Transportasi
                            </span>
                        </div>

                        {{-- Tautan Kontak & Info Akademik --}}
                        <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                            <a href="mailto:anugerah.ramadhan@unsil.ac.id" 
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                    <span class="font-medium truncate block">anugerah.ramadhan@unsil.ac.id</span>
                                </div>
                            </a>

                            <div class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-50/70 text-slate-700 border border-slate-100">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-compass-drafting text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Fokus Keahlian</span>
                                    <span class="font-medium truncate block">Perkerasan Jalan &amp; Transportasi</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-50/70 text-slate-700 border border-slate-100">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-building-columns text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Homebase</span>
                                    <span class="font-medium truncate block">Kampus Mugarsari, Tasikmalaya</span>
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
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">1</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku (ISBN)</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">3</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Publikasi Ilmiah</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">3</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Pengalaman Praktis</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">2</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Gelar Formal</span>
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
                                <p class="text-xs text-slate-400 font-medium">Ringkasan perjalanan akademik, fokus keilmuan, dan dedikasi profesional</p>
                            </div>
                        </div>

                        <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                            <p>
                                Akademisi dan praktisi di bidang Teknik Sipil yang terlibat dalam pengelolaan serta pelaksanaan teknis infrastruktur kampus melalui keterlibatan aktif pada Tim Sarana dan Prasarana Rektorat Universitas Siliwangi.
                            </p>
                            <p>
                                Saat ini mengabdi sebagai Dosen pada Program Studi Teknik Sipil, Fakultas Teknik, Universitas Siliwangi, dengan fokus keilmuan serta publikasi ilmiah pada bidang transportasi, terutama perkerasan jalan (asphalt pavement technology).
                            </p>
                            <p>
                                Dalam aktivitas tridharma perguruan tinggi, beliau aktif melakukan riset material perkerasan maju seperti aspal porus termodifikasi, edukasi konstruksi tahan gempa untuk masyarakat, serta kajian kinerja infrastruktur jaringan jalan di Jawa Barat.
                            </p>
                        </div>
                    </div>

                    {{-- 2. Riwayat Pendidikan & Rekam Jejak Profesional --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pendidikan &amp; Pengalaman Profesional
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Kualifikasi akademik formal dan rekam jejak pengabdian institusi</p>
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
                                            Program Magister (M.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">Lulus 2022</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Islam Indonesia (UII), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Program Pascasarjana Magister Teknik Sipil</p>
                                </div>

                                {{-- S1 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Sarjana (S.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">Lulus 2012</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Siliwangi (UNSIL), Tasikmalaya</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Program Studi S-1 Teknik Sipil, Fakultas Teknik</p>
                                </div>
                            </div>
                        </div>

                        {{-- Pengalaman Profesional & Praktis --}}
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-briefcase text-slate-600"></i> Pengalaman Akademik &amp; Pengelolaan Infrastruktur
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                    <div class="w-7 h-7 rounded-lg bg-blue-100/80 text-[#0070BA] flex items-center justify-center text-xs mb-2">
                                        <i class="fa-solid fa-chalkboard-user"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 block text-xs">Dosen Teknik Sipil</span>
                                    <span class="text-[10px] text-blue-700 font-semibold block mt-0.5">2025 – Sekarang</span>
                                    <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">Program Studi Teknik Sipil, Fakultas Teknik Universitas Siliwangi</p>
                                </div>
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                    <div class="w-7 h-7 rounded-lg bg-emerald-100/80 text-emerald-700 flex items-center justify-center text-xs mb-2">
                                        <i class="fa-solid fa-city"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 block text-xs">Tim Teknis Sarpras</span>
                                    <span class="text-[10px] text-emerald-700 font-semibold block mt-0.5">2022 – Sekarang</span>
                                    <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">Tim Teknis Sarana dan Prasarana, Rektorat Universitas Siliwangi</p>
                                </div>
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 hover:border-slate-300 transition">
                                    <div class="w-7 h-7 rounded-lg bg-amber-100/80 text-amber-700 flex items-center justify-center text-xs mb-2">
                                        <i class="fa-solid fa-screwdriver-wrench"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 block text-xs">Tim Swakelola</span>
                                    <span class="text-[10px] text-amber-700 font-semibold block mt-0.5">2022 – Sekarang</span>
                                    <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">Tim Swakelola Pembangunan &amp; Perawatan, Universitas Siliwangi</p>
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
                                    <p class="text-xs text-slate-400 font-medium">Buku referensi akademik ber-ISBN bidang keteknik-sipilan</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-200">
                                1 Judul Buku
                            </span>
                        </div>

                        {{-- Daftar Buku --}}
                        <div class="space-y-3">
                            <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-emerald-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-start gap-4 group">
                                {{-- Cover Thumbnail --}}
                                <div class="shrink-0 w-12 h-16 sm:w-14 sm:h-20 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] flex items-center justify-center text-white/50 group-hover:shadow-md transition-shadow">
                                    <i class="fa-solid fa-book-open text-base text-emerald-400" aria-hidden="true"></i>
                                </div>
                                {{-- Informasi Buku --}}
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start gap-2">
                                        <span class="w-5 h-5 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-200/70">
                                            1
                                        </span>
                                        <div>
                                            <h5 class="text-sm sm:text-base font-bold text-slate-900 leading-snug group-hover:text-emerald-950 transition-colors">
                                                Konstruksi dan Pemeliharaan Jalan
                                            </h5>
                                            <p class="text-xs text-slate-500 mt-1">
                                                Penulis: <span class="font-semibold text-slate-700">{{ $namaDosen }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 mt-2 flex-wrap">
                                        <span class="text-slate-600 font-mono text-[10px] bg-white px-2.5 py-0.5 rounded border border-slate-200 shadow-2xs font-semibold">
                                            <i class="fa-solid fa-barcode text-slate-400 mr-1"></i> ISBN: 9786347905208
                                        </span>
                                        <span class="text-emerald-700 bg-emerald-50 font-semibold text-[10px] px-2.5 py-0.5 rounded-full border border-emerald-200/70">
                                            Buku Referensi / Ajar
                                        </span>
                                        <span class="text-slate-500 text-[10px] bg-slate-100 px-2 py-0.5 rounded font-medium">
                                            Teknik Transportasi
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 4. Publikasi Ilmiah & Penelitian --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Publikasi Ilmiah
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Artikel ilmiah hasil penelitian dan kajian keteknik-sipilan</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-2xs">
                                <i class="fa-solid fa-file-lines text-indigo-600 mr-1"></i> 3 Artikel Terpublikasi
                            </span>
                        </div>

                        <div class="space-y-3.5">
                            @php
                            $jurnalList = [
                                [
                                    'no' => 1,
                                    'title' => 'Kinerja Aspal Porus Termodifikasi Gilsonite: Penilaian Ketahanan Campuran',
                                    'journal' => 'Reinforcement Review in Civil Engineering Studies and Management',
                                    'vol' => 'Vol. 5 No. 1 (2026)',
                                    'year' => '2026',
                                    'badge' => 'Perkerasan Jalan',
                                    'badge_color' => 'bg-emerald-50 text-emerald-800 border-emerald-200/70',
                                    'icon' => 'fa-solid fa-road',
                                    'authors' => 'Muhamad Anugerah Ramadhan',
                                ],
                                [
                                    'no' => 2,
                                    'title' => 'Edukasi Desain Rumah Sederhana Tahan Gempa Berbasis Simulasi SeismoBuild: Bukti Kuantitatif Pengaruh Regularitas Denah dan Distribusi Infill di Mugarsari, Tasikmalaya',
                                    'journal' => 'Jurnal Solma UHAMKA',
                                    'vol' => 'Vol. 15 No. 1 (2026)',
                                    'year' => '2026',
                                    'badge' => 'Pengabdian Masyarakat & Rekayasa Struktur',
                                    'badge_color' => 'bg-amber-50 text-amber-800 border-amber-200/70',
                                    'icon' => 'fa-solid fa-house-chimney-crack',
                                    'authors' => 'Muhamad Anugerah Ramadhan, dkk.',
                                ],
                                [
                                    'no' => 3,
                                    'title' => 'Analisis Kinerja Ruas Jalan Cimanuk Kabupaten Garut',
                                    'journal' => 'Akselerasi: Jurnal Ilmiah Teknik Sipil',
                                    'vol' => 'Vol. 7 No. 1 (2025): Juli',
                                    'year' => '2025',
                                    'badge' => 'Manajemen Lalu Lintas & Kapasitas Jalan',
                                    'badge_color' => 'bg-blue-50 text-blue-800 border-blue-200/70',
                                    'icon' => 'fa-solid fa-traffic-light',
                                    'authors' => 'Muhamad Anugerah Ramadhan, dkk.',
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
                                            <span class="text-slate-400 font-normal">&bull;</span>
                                            <span class="text-slate-600 font-mono text-[10px]">{{ $jurnal['vol'] }}</span>
                                        </p>
                                    </div>
                                </div>
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

@endsection
