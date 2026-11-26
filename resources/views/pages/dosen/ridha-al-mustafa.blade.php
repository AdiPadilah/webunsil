@extends('layouts.app')

@php
    $dosen ??= \App\Models\Dosen::where('slug', 'ridha-al-mustafa')->orWhere('profile_route', 'dosen.ridha-al-mustafa')->first();
    $books ??= \App\Models\Buku::published()
        ->where('penulis_route', 'dosen.ridha-al-mustafa')
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get();
    $bukuSipil = $books->where('kategori', '!=', 'fiksi')->values();
    $namaDosen = $dosen?->nama ?? 'Ir. Muhammad Ridha Al Mustafa, S.T., M.T.';
    $kbkLabel = $dosen?->kbk_label ?? 'Manajemen Rekayasa Konstruksi';
    $fotoUrl = $dosen?->foto_url ?: asset('images/dosen/ridha-al-mustafa.jpg') . '?v=' . (@filemtime(public_path('images/dosen/ridha-al-mustafa.jpg')) ?: 2);
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik ' . $namaDosen . ' - Dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, pakar ' . $kbkLabel . ', praktisi profesional dan pemegang sertifikasi keahlian rekayasa konstruksi.')

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
                <span class="bg-blue-500/20 text-blue-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-blue-400/20">
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
                            Dosen Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-blue-800 bg-blue-50 px-2.5 py-1 rounded-md border border-blue-100">
                                <i class="fa-solid fa-list-check text-blue-600"></i> Project Management
                            </span>
                        </div>

                        {{-- Tautan Kontak & Profil Riset --}}
                        <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                            <a href="mailto:ridhalmustafaa@unsil.ac.id" 
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                    <span class="font-medium truncate block">ridhalmustafaa@unsil.ac.id</span>
                                </div>
                            </a>

                            <a href="https://linkedin.com/in/ridhalmustafaa" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0077b5] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-sky-50 text-[#0077b5] flex items-center justify-center shrink-0 group-hover:bg-[#0077b5] group-hover:text-white transition">
                                    <i class="fa-brands fa-linkedin-in text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">LinkedIn</span>
                                    <span class="font-medium truncate block">ridhalmustafaa</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-[#0077b5]"></i>
                            </a>

                            <a href="https://instagram.com/ridhalmustafaa" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-pink-600 transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-pink-50 text-pink-600 flex items-center justify-center shrink-0 group-hover:bg-gradient-to-tr group-hover:from-amber-500 group-hover:via-rose-500 group-hover:to-purple-600 group-hover:text-white transition">
                                    <i class="fa-brands fa-instagram text-sm"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Instagram</span>
                                    <span class="font-medium truncate block">@ridhalmustafaa</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-300 ml-auto group-hover:text-pink-600"></i>
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
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">2</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">2</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Jurnal Terindeks Sinta</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">4</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">SKA Madya LPJK (J8)</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">15+</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Proyek Rekayasa</span>
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
                                    Biografi &amp; Profil Profesional
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Dedikasi insinyur muda, integrasi dunia industri, dan tridharma perguruan tinggi</p>
                            </div>
                        </div>

                        <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                            <p>
                                Sebagai insinyur muda yang merambah ke dunia akademisi, Ir. Muhammad Ridha Al Mustafa membawa pengalaman langsung sebagai praktisi profesional ke dalam ruang kelas dan penelitian di Program Studi Teknik Sipil, Fakultas Teknik, Universitas Siliwangi.
                            </p>
                            <p>
                                Latar belakang industri yang kuat membentuk cara pandang beliau terhadap pemecahan masalah yang aplikatif, terukur, dan sangat relevan dengan kebutuhan lapangan. Beliau memadukan ketajaman praktik rekayasa dengan pendekatan ilmiah modern untuk berkontribusi nyata dalam pengajaran, riset, serta pengembangan solusi teknis yang berdampak bagi kemajuan infrastruktur nasional.
                            </p>
                            <p>
                                Beliau memiliki spesialisasi pada <em>Project Management</em>, <em>Green Construction</em>, evaluasi rantai pasok konstruksi (SCOR 12.0), analisis risiko HIRADC-FMEA, teknologi BIM (Building Information Modeling), survei pemetaan terestrial &amp; udara (UAV Drone), serta kepengurusan aktif di Persatuan Insinyur Indonesia (PII).
                            </p>
                        </div>
                    </div>

                    {{-- 2. Riwayat Pendidikan & Rekognisi Profesi --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pendidikan &amp; Kualifikasi Profesi
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Jenjang pendidikan akademik dan gelar profesi keinsinyuran</p>
                            </div>
                        </div>

                        {{-- Timeline Pendidikan --}}
                        <div class="space-y-4 mb-8">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-landmark text-[#0070BA]"></i> Jenjang Pendidikan Formal
                            </h4>

                            <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-6 ml-2.5 my-3">
                                {{-- Profesi Insinyur --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100">
                                            Program Profesi Insinyur (Ir.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">Tahun 2023</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Institut Teknologi Sepuluh Nopember (ITS), Surabaya</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Program Profesi Insinyur (PPI) Bidang Kejuruan Teknik Sipil</p>
                                </div>

                                {{-- S2 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Magister (M.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2021 – 2023</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Hasanuddin (UNHAS), Makassar</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Departemen Teknik Sipil, Fakultas Teknik</p>
                                </div>

                                {{-- S1 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-300 ring-4 ring-slate-100"></div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                            Program Sarjana (S.T.)
                                        </span>
                                        <span class="text-xs font-semibold text-slate-400 font-mono">2015 – 2020</span>
                                    </div>
                                    <h5 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Siliwangi (UNSIL), Tasikmalaya</h5>
                                    <p class="text-xs text-slate-600 mt-0.5">Program Studi S-1 Teknik Sipil, Fakultas Teknik</p>
                                </div>
                            </div>
                        </div>

                        {{-- Sertifikasi Keahlian LPJK (Jenjang 8) & Industri --}}
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-certificate text-amber-500"></i> Sertifikat Kompetensi Kerja (SKK LPJK Jenjang 8)
                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4">
                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-blue-50/70 to-white border border-blue-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-[#0070BA] text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-water"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider block">LPJK &bull; Tahun 2024</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Ahli Madya Dermaga (Jenjang 8)</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Spesialisasi perancangan &amp; pengawasan fasilitas pelabuhan</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-emerald-50/70 to-white border border-emerald-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-train-subway"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-emerald-700 font-bold uppercase tracking-wider block">LPJK &bull; Tahun 2024</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Ahli Madya Perencana Jalan Rel (Jenjang 8)</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Perencanaan geometrik dan struktur prasarana perkeretaapian</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-amber-50/70 to-white border border-amber-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-amber-600 text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-mountain"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider block">LPJK &bull; Tahun 2025</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Ahli Madya Geoteknik (Jenjang 8)</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Keahlian stabilitas lereng, pondasi dalam, &amp; perbaikan tanah</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-gradient-to-br from-indigo-50/70 to-white border border-indigo-200/80 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                        <i class="fa-solid fa-road"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-indigo-700 font-bold uppercase tracking-wider block">LPJK &bull; Tahun 2025</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Ahli Madya Teknik Jalan (Jenjang 8)</h6>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Perancangan, evaluasi kondisi, &amp; manajemen preservasi jalan</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Sertifikasi BIM & Software --}}
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 text-xs">
                                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200/80">
                                    <strong class="text-slate-800 block text-[11px]">Glodon Cubicost (TBQ &amp; TAS)</strong>
                                    <span class="text-slate-500 text-[10px]">Asia International &bull; QTO Architecture &amp; BOQ Estimation (2025)</span>
                                </div>
                                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200/80">
                                    <strong class="text-slate-800 block text-[11px]">BIM &amp; Beton Pracetak</strong>
                                    <span class="text-slate-500 text-[10px]">Ditjen Bina Konstruksi Kementerian PUPR (2019)</span>
                                </div>
                                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200/80">
                                    <strong class="text-slate-800 block text-[11px]">Officer SMK3 &amp; OHSMS</strong>
                                    <span class="text-slate-500 text-[10px]">CV. Gajah Mada Sakti (2021) &bull; IPB (2019)</span>
                                </div>
                            </div>
                        </div>

                        {{-- Organisasi Profesi --}}
                        <div class="pt-6 border-t border-slate-100 mt-6">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3.5 flex items-center gap-2">
                                <i class="fa-solid fa-users-gear text-slate-600"></i> Organisasi &amp; Asosiasi Profesi
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70">
                                    <span class="text-[10px] text-blue-700 font-bold uppercase block">Persatuan Insinyur Indonesia (PII)</span>
                                    <h6 class="font-bold text-slate-900 mt-0.5">Badan Kejuruan Sipil &amp; FIM PII</h6>
                                    <p class="text-slate-500 text-[11px] mt-1 leading-relaxed">
                                        &bull; Subsektor Environment, Waste &amp; Resource Recovery BKS PII (2025–skrg)<br>
                                        &bull; Staf Bidang Organisasi &amp; Kaderisasi PP FIM PII (2025–skrg)<br>
                                        &bull; Wakil Sekretaris FIM PII Wilayah Sulawesi Selatan (2025–skrg)<br>
                                        &bull; Tim Pengelola Jurnal Panrita FIM PII Sulsel (2024–skrg)
                                    </p>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70">
                                    <span class="text-[10px] text-emerald-700 font-bold uppercase block">Asosiasi Profesi &amp; Alumni</span>
                                    <h6 class="font-bold text-slate-900 mt-0.5">MASKA &amp; PERTAHKINDO</h6>
                                    <p class="text-slate-500 text-[11px] mt-1 leading-relaxed">
                                        &bull; Anggota Masyarakat Perkeretaapian Indonesia (MASKA, 2024–skrg)<br>
                                        &bull; Anggota PERTAHKINDO Sulawesi Selatan (2021–skrg)<br>
                                        &bull; Koordinator Wilayah VI Jabar-Banten FKMTSI (2019–2020)
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 3. Portofolio Proyek Rekayasa & Penugasan Universitas --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100/80 flex items-center justify-center font-bold text-base shadow-2xs">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pengalaman Industri &amp; Penugasan Kampus
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Rekam jejak praktisi lapangan, supervisi proyek strategis, dan tim teknis kampus</p>
                            </div>
                        </div>

                        {{-- Penugasan Kampus UNSIL --}}
                        <div class="mb-6">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-building-columns text-[#0070BA]"></i> Penugasan Teknis Universitas Siliwangi
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="p-3 rounded-xl bg-blue-50/60 border border-blue-200/70">
                                    <span class="text-[10px] text-[#0070BA] font-bold block">2025 &bull; 2026</span>
                                    <h6 class="font-bold text-slate-900 text-xs mt-0.5">Tenaga Ahli Swakelola</h6>
                                    <p class="text-[11px] text-slate-500 mt-1">Tim Swakelola Kegiatan Jasa Konstruksi UNSIL</p>
                                </div>
                                <div class="p-3 rounded-xl bg-emerald-50/60 border border-emerald-200/70">
                                    <span class="text-[10px] text-emerald-700 font-bold block">2025</span>
                                    <h6 class="font-bold text-slate-900 text-xs mt-0.5">Tenaga Ahli Kolaboratif Sarpras</h6>
                                    <p class="text-[11px] text-slate-500 mt-1">Tim Kolaboratif Sarana Prasarana Universitas Siliwangi</p>
                                </div>
                                <div class="p-3 rounded-xl bg-amber-50/60 border border-amber-200/70">
                                    <span class="text-[10px] text-amber-700 font-bold block">2025</span>
                                    <h6 class="font-bold text-slate-900 text-xs mt-0.5">Tenaga Ahli Asesmen Gedung</h6>
                                    <p class="text-[11px] text-slate-500 mt-1">Tim Evaluasi dan Asesmen Gedung UNSIL</p>
                                </div>
                            </div>
                        </div>

                        {{-- Rekam Jejak Proyek Lapangan Terpilih --}}
                        <div>
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-helmet-safety text-amber-600"></i> Pengalaman Proyek Rekayasa Terpilih
                            </h4>
                            <div class="space-y-2.5 text-xs">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <h6 class="font-bold text-slate-900">Tenaga Ahli Fasilitas Infrastruktur Muara Pahu</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">PT. Batara Dharma Persada / CV. Aliah Consulindo &bull; Kalimantan Selatan</p>
                                    </div>
                                    <span class="font-mono text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">2025</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <h6 class="font-bold text-slate-900">Tenaga Ahli Dermaga — Supervisi Fasilitas Pelabuhan Luwuk &amp; Kalatoa</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">PT. Primatama Prima Konsultama &bull; Banggai &amp; Kepulauan Selayar</p>
                                    </div>
                                    <span class="font-mono text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">2024 &ndash; 2025</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <h6 class="font-bold text-slate-900">Site Engineer Supervisi Breakwater Beba</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">PT. Trimako Abdi Konsulindo &bull; Kab. Takalar</p>
                                    </div>
                                    <span class="font-mono text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">2023</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <h6 class="font-bold text-slate-900">QC &amp; Quantity Surveyor Gedung Akademik PIP Makassar</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">Manajemen Konstruksi PT. Intimulya KSO PT. Primatama Prima Konsultama</p>
                                    </div>
                                    <span class="font-mono text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">2022 &ndash; 2023</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <h6 class="font-bold text-slate-900">Co-Engineer Masterplan Banjir &amp; DED Drainase Kota Mamuju</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">Center of Technology Hasanuddin University &bull; Mamuju</p>
                                    </div>
                                    <span class="font-mono text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">2022</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/70 flex items-start justify-between gap-3 flex-wrap">
                                    <div>
                                        <h6 class="font-bold text-slate-900">Site Engineering Proyek Rehabilitasi Gedung Gudang Gas</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">Balai Teknologi Keselamatan Pelayaran Kementerian Perhubungan &bull; Jakarta Utara</p>
                                    </div>
                                    <span class="font-mono text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">2021</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 4. Karya Buku --}}
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
                                    <p class="text-xs text-slate-400 font-medium">Buku referensi manajemen konstruksi dan inovasi keinsinyuran</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-200">
                                2 Judul Buku
                            </span>
                        </div>

                        <div class="space-y-3">
                            {{-- Buku 1 --}}
                            <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-emerald-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-start gap-4 group">
                                <div class="shrink-0 w-12 h-16 sm:w-14 sm:h-20 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] flex items-center justify-center text-white/50 group-hover:shadow-md transition-shadow">
                                    <i class="fa-solid fa-book-open text-base text-emerald-400" aria-hidden="true"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start gap-2">
                                        <span class="w-5 h-5 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-200/70">
                                            1
                                        </span>
                                        <div>
                                            <h5 class="text-sm sm:text-base font-bold text-slate-900 leading-snug group-hover:text-emerald-950 transition-colors">
                                                Inovasi Keinsinyuran untuk Reindustrialisasi: Mewujudkan Kemandirian Teknologi dan Ekonomi
                                            </h5>
                                            <p class="text-xs text-slate-500 mt-1">
                                                Penulis: <span class="font-semibold text-slate-700">{{ $namaDosen }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 mt-2 flex-wrap">
                                        <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200 font-semibold">Tahun 2025</span>
                                        <span class="text-emerald-700 bg-emerald-50 font-semibold text-[10px] px-2.5 py-0.5 rounded-full border border-emerald-200/70">Buku Referensi</span>
                                        <span class="text-slate-500 text-[10px] bg-slate-100 px-2 py-0.5 rounded font-medium">Teknologi &amp; Industri</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Buku 2 --}}
                            <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-emerald-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-start gap-4 group">
                                <div class="shrink-0 w-12 h-16 sm:w-14 sm:h-20 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-gradient-to-br from-emerald-900 to-[#0B2A4A] flex items-center justify-center text-white/50 group-hover:shadow-md transition-shadow">
                                    <i class="fa-solid fa-leaf text-base text-emerald-400" aria-hidden="true"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start gap-2">
                                        <span class="w-5 h-5 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-200/70">
                                            2
                                        </span>
                                        <div>
                                            <h5 class="text-sm sm:text-base font-bold text-slate-900 leading-snug group-hover:text-emerald-950 transition-colors">
                                                MANAJEMEN KONSTRUKSI (GREEN KONSTRUKSI)
                                            </h5>
                                            <p class="text-xs text-slate-500 mt-1">
                                                Penulis: <span class="font-semibold text-slate-700">{{ $namaDosen }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 mt-2 flex-wrap">
                                        <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200 font-semibold">Tahun 2025</span>
                                        <span class="text-emerald-700 bg-emerald-50 font-semibold text-[10px] px-2.5 py-0.5 rounded-full border border-emerald-200/70">Buku Referensi</span>
                                        <span class="text-emerald-700 text-[10px] bg-emerald-100/60 px-2 py-0.5 rounded font-medium">Green Building &amp; Konstruksi Berkelanjutan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 5. Publikasi Jurnal & Konferensi Ilmiah --}}
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
                                    <p class="text-xs text-slate-400 font-medium">Artikel ilmiah peer-reviewed dan partisipasi simposium internasional</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-2xs">
                                <i class="fa-solid fa-globe text-indigo-600 mr-1"></i> Riset &amp; Konferensi
                            </span>
                        </div>

                        {{-- Daftar Jurnal --}}
                        <div class="space-y-3.5 mb-8">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-2 flex items-center gap-2">
                                <i class="fa-solid fa-file-lines text-indigo-600"></i> Publikasi Jurnal Terindeks Sinta
                            </h4>

                            @php
                            $jurnalList = [
                                [
                                    'no' => 1,
                                    'title' => 'Micro-Level Construction Supply Chain Performance Analysis Using SCOR 12.0: A Case Study of Building Projects in Makassar City',
                                    'journal' => 'Jurnal Vokasi Keteknikan',
                                    'indexing' => 'Sinta 3',
                                    'year' => '2026',
                                    'badge' => 'Supply Chain & Manajemen Proyek',
                                    'badge_color' => 'bg-indigo-50 text-indigo-800 border-indigo-200/70',
                                    'icon' => 'fa-solid fa-diagram-project',
                                    'authors' => 'Ir. Muhammad Ridha Al Mustafa, dkk.',
                                ],
                                [
                                    'no' => 2,
                                    'title' => 'ANALISIS RISIKO KRITIS KONSTRUKSI DERMAGA PELABUHAN LAUT: PENDEKATAN HIRADC–FMEA',
                                    'journal' => 'Jurnal Chemurgy',
                                    'indexing' => 'Sinta 4',
                                    'year' => '2025',
                                    'badge' => 'K3 & Analisis Risiko Konstruksi',
                                    'badge_color' => 'bg-amber-50 text-amber-800 border-amber-200/70',
                                    'icon' => 'fa-solid fa-triangle-exclamation',
                                    'authors' => 'Ir. Muhammad Ridha Al Mustafa, dkk.',
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
                                            <span class="text-emerald-700 bg-emerald-50 border border-emerald-200 text-[10px] font-bold px-2 py-0.5 rounded">
                                                {{ $jurnal['indexing'] }}
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
                                        <p class="text-[11px] text-[#0070BA] font-semibold mt-1 flex items-center gap-1.5">
                                            <i class="fa-solid fa-book-bookmark text-[10px] text-slate-400"></i>
                                            <span>{{ $jurnal['journal'] }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{-- Daftar Konferensi Internasional --}}
                        <div>
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-chalkboard-user text-[#0070BA]"></i> Konferensi &amp; Simposium Internasional
                            </h4>

                            @php
                            $konferensiList = [
                                [
                                    'title' => 'The 6th International Symposium on Infrastructure Development (ISID 2023)',
                                    'theme' => 'Empowering Innovative Engineering, Science, Environment and Technology for Achieving the Sustainable Development Goals (SDGs)',
                                    'location' => 'Makassar, Indonesia',
                                    'date' => '24–25 August 2023',
                                    'year' => '2023',
                                ],
                                [
                                    'title' => 'The 2025 International Conference on Sustainable Innovation and Environment (ICSIE)',
                                    'theme' => 'Sustainable Innovation, Green Infrastructure, and Environmental Engineering',
                                    'location' => 'International Conference',
                                    'date' => 'Tahun 2025',
                                    'year' => '2025',
                                ],
                            ];
                            @endphp

                            <div class="space-y-3">
                                @foreach($konferensiList as $item)
                                <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-blue-400 hover:bg-white hover:shadow-sm transition-all duration-200 group">
                                    <div class="flex items-center justify-between gap-2 text-xs mb-1.5 flex-wrap">
                                        <span class="font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md text-[11px] border border-blue-200/70 shadow-2xs">
                                            <i class="fa-solid fa-users-viewfinder text-[10px] mr-1"></i> {{ $item['title'] }}
                                        </span>
                                        <span class="text-slate-500 font-mono text-[11px] font-bold bg-slate-100 px-2 py-0.5 rounded">{{ $item['year'] }}</span>
                                    </div>
                                    <p class="text-xs font-medium text-slate-800 leading-relaxed mt-1">
                                        <strong class="text-slate-700">Tema:</strong> {{ $item['theme'] }}
                                    </p>
                                    <p class="text-[11px] text-slate-500 mt-1.5 flex items-center gap-2 flex-wrap">
                                        <span class="inline-flex items-center gap-1 text-slate-600 font-medium">
                                            <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i> {{ $item['location'] }}
                                        </span>
                                        <span class="text-slate-400">&bull;</span>
                                        <span class="text-slate-500 font-mono text-[10px]">{{ $item['date'] }}</span>
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
