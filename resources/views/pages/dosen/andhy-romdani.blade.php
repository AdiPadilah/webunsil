@extends('layouts.app')

@section('title', 'Andhy Romdani, S.T., M.Eng., Ph.D. | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik Andhy Romdani, S.T., M.Eng., Ph.D. - Ketua Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, pakar Rekayasa Sumber Daya Air, penulis 19 buku dan belasan publikasi internasional.')

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
                <span class="text-slate-200">Andhy Romdani, S.T., M.Eng., Ph.D.</span>
            </nav>

            <div class="flex items-center gap-2">
                <span class="bg-[#0070BA]/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full border border-blue-400/30 uppercase tracking-wider">
                    Ketua Program Studi
                </span>
                <span class="bg-cyan-500/20 text-cyan-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-cyan-400/20">
                    KBK Rekayasa Sumber Daya Air
                </span>
            </div>

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading tracking-tight text-white mt-2 leading-tight">
                Andhy Romdani, S.T., M.Eng., Ph.D.
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Pakar Hidrodinamika Pantai, Pemodelan Transpor Sedimen &amp; Manajemen Sumber Daya Air. Penulis produktif 19 karya buku dan peneliti senior di bidang rekayasa pantai &amp; sumber daya air.
            </p>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                {{-- Sidebar Kiri: Kartu Identitas & Kontak --}}
                <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-24">
                    
                    {{-- Kartu Foto & Info Pokok --}}
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 text-center">
                        <div class="relative w-48 sm:w-56 mx-auto aspect-square rounded-2xl overflow-hidden shadow-md border-2 border-slate-100 bg-[#CDCFDA] mb-5">
                            <img src="{{ asset('images/dosen/andhy-romdani.jpg') }}?v={{ @filemtime(public_path('images/dosen/andhy-romdani.jpg')) ?: 2 }}" 
                                 alt="Andhy Romdani, S.T., M.Eng., Ph.D." 
                                 class="w-full h-full object-cover object-center">
                        </div>

                        <h2 class="text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            Andhy Romdani, S.T., M.Eng., Ph.D.
                        </h2>
                        <p class="text-xs font-semibold text-[#0070BA] mt-1">
                            Ketua Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-cyan-800 bg-cyan-50 px-2.5 py-1 rounded-md border border-cyan-100">
                                <i class="fa-solid fa-water text-cyan-600"></i> Rekayasa Sumber Daya Air
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
                        <div class="grid grid-cols-3 gap-2 text-center">
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">19</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">4</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Konferensi</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">2</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Penghargaan</span>
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
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
                        <div class="flex items-center gap-2.5 mb-4">
                            <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#0070BA] flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading">
                                    Biografi &amp; Profil Akademik
                                </h3>
                                <p class="text-xs text-slate-400">Ringkasan perjalanan akademik dan dedikasi profesional</p>
                            </div>
                        </div>

                        <div class="space-y-6 text-sm text-slate-600 leading-relaxed">

                            {{-- Latar Belakang Pendidikan --}}
                            <div>
                                <p class="text-[10px] font-bold text-[#0070BA] uppercase tracking-widest mb-1.5">Latar Belakang Pendidikan</p>
                                <p>
                                    Andhy Romdani menempuh studi sarjana di <strong class="text-slate-800">Jurusan Teknik Sipil, Fakultas Teknik, Universitas Gadjah Mada (UGM)</strong>, Yogyakarta. Ia masuk melalui jalur <strong class="text-slate-800">PBUD (Penelusuran Bibit Unggul Daerah)</strong> mewakili Kabupaten Grobogan, Jawa Tengah, pada tahun 1998, dan berhasil menyelesaikan gelar S.T. serta M.Eng. dari kampus yang sama.
                                </p>
                            </div>

                            {{-- Studi Doktoral --}}
                            <div>
                                <p class="text-[10px] font-bold text-[#0070BA] uppercase tracking-widest mb-1.5">Studi Doktoral</p>
                                <p>
                                    Perjalanan akademiknya berlanjut ke jenjang doktoral (Ph.D.) di <strong class="text-slate-800">National Cheng Kung University (NCKU)</strong>, Taiwan, pada <em>Department of Hydraulic and Ocean Engineering</em>. Atas keunggulan riset dan prestasi akademiknya, ia dinobatkan sebagai salah satu lulusan terbaik program doktoral dan menerima penghargaan dari <strong class="text-slate-800">The Phi Tau Phi Scholastic Honor Society of the Republic of China</strong> pada tahun 2023.
                                </p>
                            </div>

                            {{-- Peran Saat Ini --}}
                            <div>
                                <p class="text-[10px] font-bold text-[#0070BA] uppercase tracking-widest mb-1.5">Peran Saat Ini</p>
                                <p>
                                    Saat ini ia aktif mengajar dan menjabat sebagai <strong class="text-slate-800">Ketua Program Studi S-1 Teknik Sipil, Fakultas Teknik, Universitas Siliwangi</strong>, Tasikmalaya, Jawa Barat.
                                </p>
                            </div>

                            {{-- Pengalaman Profesional --}}
                            <div>
                                <p class="text-[10px] font-bold text-[#0070BA] uppercase tracking-widest mb-1.5">Pengalaman Profesional</p>
                                <p>
                                    Sebelum berkarier di dunia akademik, ia aktif di industri konstruksi nasional melalui BUMN terkemuka — <strong class="text-slate-800">PT. Wijaya Karya</strong> dan <strong class="text-slate-800">PT. Pembangunan Perumahan</strong>. Ia juga pernah menjabat sebagai <em>Editor in Chief</em> di <strong class="text-slate-800">Penerbit Mizan</strong>, Bandung, mencerminkan dedikasi yang melampaui batas keilmuan teknik.
                                </p>
                            </div>

                        </div>
                    </div>

                    {{-- 2. Riwayat Pendidikan & Penghargaan --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
                        <div class="flex items-center gap-2.5 mb-6">
                            <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading">
                                    Pendidikan &amp; Rekognisi
                                </h3>
                                <p class="text-xs text-slate-400">Kualifikasi gelar akademik dan penghargaan kehormatan</p>
                            </div>
                        </div>

                        {{-- Timeline Pendidikan --}}
                        <div class="space-y-4 mb-8">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-landmark text-[#0070BA]"></i> Jenjang Pendidikan Formal
                            </h4>

                            <div class="border-l-2 border-[#0070BA]/30 pl-4 sm:pl-6 space-y-5 ml-2">
                                {{-- S3 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-50"></div>
                                    <span class="inline-block text-[11px] font-semibold text-[#0070BA] bg-blue-50 px-2 py-0.5 rounded">
                                        Program Doktoral (Ph.D.)
                                    </span>
                                    <h5 class="text-sm font-bold text-slate-800 mt-1">National Cheng Kung University (NCKU), Taiwan</h5>
                                    <p class="text-xs text-slate-600">Department of Hydraulic and Ocean Engineering</p>
                                    <p class="text-[11px] text-amber-600 font-medium mt-1">
                                        <i class="fa-solid fa-award"></i> Lulusan Terbaik Doktoral — The Phi Tau Phi Scholastic Honor Society (2023)
                                    </p>
                                </div>

                                {{-- S2 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                    <span class="inline-block text-[11px] font-semibold text-slate-700 bg-slate-100 px-2 py-0.5 rounded">
                                        Program Magister (M.Eng.)
                                    </span>
                                    <h5 class="text-sm font-bold text-slate-800 mt-1">Universitas Gadjah Mada (UGM), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600">Jurusan Teknik Sipil, Fakultas Teknik</p>
                                </div>

                                {{-- S1 --}}
                                <div class="relative group">
                                    <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-300 ring-4 ring-slate-100"></div>
                                    <span class="inline-block text-[11px] font-semibold text-slate-700 bg-slate-100 px-2 py-0.5 rounded">
                                        Program Sarjana (S.T.)
                                    </span>
                                    <h5 class="text-sm font-bold text-slate-800 mt-1">Universitas Gadjah Mada (UGM), Yogyakarta</h5>
                                    <p class="text-xs text-slate-600">Jurusan Teknik Sipil, Fakultas Teknik (Masuk Jalur PBUD Grobogan, 1998)</p>
                                </div>
                            </div>
                        </div>

                        {{-- Penghargaan --}}
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-trophy text-amber-500"></i> Penghargaan &amp; Rekognisi
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                <div class="p-3.5 rounded-xl bg-amber-50/60 border border-amber-200/60 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-amber-500 text-white flex items-center justify-center shrink-0 text-sm">
                                        <i class="fa-solid fa-medal"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider">Tahun 2023 &bull; Taiwan</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">The Phi Tau Phi Scholastic Honor Society</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">Salah satu lulusan terbaik pada program doktoral (Ph.D.) di Taiwan.</p>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-blue-50/60 border border-blue-200/60 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-[#0070BA] text-white flex items-center justify-center shrink-0 text-sm">
                                        <i class="fa-solid fa-pen-nib"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider">Penghargaan Penerbitan</span>
                                        <h6 class="text-xs font-bold text-slate-900 mt-0.5">Penulis Terfavorit</h6>
                                        <p class="text-[11px] text-slate-600 mt-0.5">Dianugerahi oleh Penerbit Mega Press, Bandung atas produktivitas karya buku.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Pengalaman Profesional --}}
                        <div class="pt-6 border-t border-slate-100 mt-6">
                            <h4 class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-briefcase text-slate-600"></i> Pengalaman Praktis &amp; Industri
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="font-bold text-slate-800 block">Akademisi &amp; Pimpinan</span>
                                    <p class="text-slate-500 mt-1 text-[11px]">Ketua Program Studi S-1 Teknik Sipil FT Universitas Siliwangi</p>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="font-bold text-slate-800 block">Kontraktor BUMN</span>
                                    <p class="text-slate-500 mt-1 text-[11px]">PT. Wijaya Karya (Persero) Tbk &bull; PT. Pembangunan Perumahan (Persero) Tbk</p>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="font-bold text-slate-800 block">Penulisan &amp; Media</span>
                                    <p class="text-slate-500 mt-1 text-[11px]">Editor in Chief di Penerbit Mizan, Bandung</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 3. Karya Buku (Koleksi 19 Buku) --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6">
                            <div class="flex items-center gap-2.5">
                                <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-sm">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading">
                                        Koleksi Karya Buku
                                    </h3>
                                    <p class="text-xs text-slate-400">19 judul buku non-fiksi keteknik-sipilan dan sastra fiksi ber-ISBN</p>
                                </div>
                            </div>
                            <span class="text-xs font-semibold px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full border border-emerald-200">
                                Total 19 Buku Diterbitkan
                            </span>
                        </div>

                        {{-- Buku Non-Fiksi Keteknik-sipilan (12 Buku) --}}
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4 pb-2 border-b border-slate-100">
                                <i class="fa-solid fa-helmet-safety text-cyan-600 text-sm"></i>
                                <h4 class="text-sm font-bold text-slate-800">Buku Non-Fiksi (Keteknik-sipilan)</h4>
                                <span class="text-[10px] text-cyan-800 font-semibold bg-cyan-50 px-2 py-0.5 rounded-full ml-auto">12 Judul</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                @php
                                $bukuSipil = [
                                    ['no' => 1, 'judul' => 'Manajemen Sungai dan Banjir: Adaptasi terhadap Perubahan Iklim Global', 'isbn' => '978-623-8221-10-3'],
                                    ['no' => 2, 'judul' => 'Hidrodinamika Pantai dan Proteksi Kawasan Pesisir', 'isbn' => '978-623-8267-23-4'],
                                    ['no' => 3, 'judul' => 'Mekanisme Pendangkalan di Alur Pelayaran Pelabuhan dan Solusi Komprehensifnya', 'isbn' => '978-623-8221-67-7'],
                                    ['no' => 4, 'judul' => 'Teknik Irigasi dan Perencanaan Swasembada Pangan', 'isbn' => '973-623-8267-39-2'],
                                    ['no' => 5, 'judul' => 'Estuari: Konsep Dasar dan Pengembangan Potensi Muara Sungai', 'isbn' => '978-623-8313-56-1'],
                                    ['no' => 6, 'judul' => 'Transpor Sedimen: Proses, Efek, dan Morfodinamika Pantai', 'isbn' => '978-623-8496-78-5'],
                                    ['no' => 7, 'judul' => 'Mekanika Fluida: Teori Fundamental dan Aplikasinya', 'isbn' => '978-623-508-029-1'],
                                    ['no' => 8, 'judul' => 'How to Write and Publish your First Research Paper (Cara Jitu Tembus Publikasi Artikel di Jurnal Internasional)', 'isbn' => '978-624-226-022-7'],
                                    ['no' => 9, 'judul' => 'Soal dan Penyelesaian Mekanika Fluida Dasar', 'isbn' => '978-623-508-432-9'],
                                    ['no' => 10, 'judul' => 'Hidrolika: Dasar-dasar, Aplikasi, dan Perencanaan Saluran Terbuka', 'isbn' => '978-624-226-427-0'],
                                    ['no' => 11, 'judul' => 'Compound Flooding: Mekanisme, Risiko, dan Strategi Ketahanan terhadap Perubahan Iklim', 'isbn' => '978-624-226-450-8'],
                                    ['no' => 12, 'judul' => 'Soal dan Solusi untuk Hidrolika', 'isbn' => '978-624-226-567-3'],
                                ];
                                @endphp

                                @foreach($bukuSipil as $buku)
                                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 hover:border-cyan-500/50 hover:bg-white hover:shadow-sm transition duration-200 flex flex-col justify-between">
                                    <div class="flex items-start gap-2.5">
                                        <span class="w-6 h-6 rounded-md bg-cyan-100 text-cyan-800 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">
                                            {{ $buku['no'] }}
                                        </span>
                                        <div>
                                            <h5 class="text-xs font-bold text-slate-800 leading-snug">
                                                {{ $buku['judul'] }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-2.5 pt-2 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                        <span class="text-slate-400 font-mono">ISBN: {{ $buku['isbn'] }}</span>
                                        <span class="text-cyan-700 font-medium text-[10px]">Non-Fiksi</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Buku Fiksi / Novel (4 Buku) --}}
                        <div>
                            <div class="flex items-center gap-2 mb-4 pb-2 border-b border-slate-100">
                                <i class="fa-solid fa-feather-pointed text-amber-600 text-sm"></i>
                                <h4 class="text-sm font-bold text-slate-800">Buku Fiksi (Novel Kreatif)</h4>
                                <span class="text-[10px] text-amber-800 font-semibold bg-amber-50 px-2 py-0.5 rounded-full ml-auto">Karya Sastra</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                @php
                                $bukuFiksi = [
                                    ['no' => 1, 'judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 1): Aksi Penyelamatan Kocak Dimulai', 'isbn' => '978-623-508-060-4'],
                                    ['no' => 2, 'judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 2): Pelumpuhan Profesor Gila Peramu Formula Penghancur', 'isbn' => '978-623-508-074-1'],
                                    ['no' => 3, 'judul' => 'Dua Burung Gereja di Kubah Emas Masjid', 'isbn' => '978-623-508-037-6'],
                                    ['no' => 4, 'judul' => 'Adam dan Hawa: Ketika Mereka Bukan dari Surga', 'isbn' => '978-624-226-110-1'],
                                ];
                                @endphp

                                @foreach($bukuFiksi as $novel)
                                <div class="p-3.5 rounded-xl bg-amber-50/40 border border-amber-200/70 hover:border-amber-400 hover:bg-white hover:shadow-sm transition duration-200 flex flex-col justify-between">
                                    <div class="flex items-start gap-2.5">
                                        <span class="w-6 h-6 rounded-md bg-amber-100 text-amber-800 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">
                                            {{ $novel['no'] }}
                                        </span>
                                        <div>
                                            <h5 class="text-xs font-bold text-slate-800 leading-snug">
                                                {{ $novel['judul'] }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-2.5 pt-2 border-t border-amber-100/60 flex items-center justify-between text-[11px]">
                                        <span class="text-slate-400 font-mono">ISBN: {{ $novel['isbn'] }}</span>
                                        <span class="text-amber-700 font-medium text-[10px]">Novel Fiksi</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    {{-- 5. Konferensi Internasional --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
                        <div class="flex items-center gap-2.5 mb-6">
                            <div class="w-9 h-9 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading">
                                    Konferensi Internasional
                                </h3>
                                <p class="text-xs text-slate-400">Penyajian hasil riset di forum ilmiah dunia</p>
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
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 hover:border-purple-400 hover:bg-white hover:shadow-sm transition duration-200">
                                <div class="flex items-center justify-between gap-2 text-xs mb-1">
                                    <span class="font-semibold text-purple-700 bg-purple-50 px-2 py-0.5 rounded text-[11px] border border-purple-100">
                                        {{ $item['event'] }}
                                    </span>
                                    <span class="text-slate-400 font-mono text-[11px]">{{ $item['year'] }}</span>
                                </div>
                                <h5 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug mt-1">
                                    {{ $item['title'] }}
                                </h5>
                                <p class="text-[11px] text-slate-500 mt-1">
                                    <strong>Penulis:</strong> {{ $item['authors'] }}
                                </p>
                                <p class="text-[11px] text-slate-500 flex items-center gap-1.5 mt-0.5">
                                    <i class="fa-solid fa-location-dot text-slate-400 text-[10px]"></i> {{ $item['location'] }}
                                </p>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
