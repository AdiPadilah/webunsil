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
                        <div class="grid grid-cols-2 gap-2.5 text-center">
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">16</span>
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
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">2</span>
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
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                <div class="p-4 rounded-xl bg-gradient-to-br from-amber-50/70 to-amber-50/20 border border-amber-200/80 flex items-start gap-3.5 hover:shadow-2xs transition">
                                    <div class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0 text-base shadow-2xs">
                                        <i class="fa-solid fa-medal"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider block">Tahun 2023 &bull; Taiwan</span>
                                        <h6 class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5 leading-snug">The Phi Tau Phi Scholastic Honor Society</h6>
                                        <p class="text-[11px] text-slate-600 mt-1 leading-relaxed">Dianugerahi sebagai salah satu lulusan terbaik pada program doktoral (Ph.D.) di Taiwan.</p>
                                    </div>
                                </div>

                                <div class="p-4 rounded-xl bg-gradient-to-br from-blue-50/70 to-blue-50/20 border border-blue-200/80 flex items-start gap-3.5 hover:shadow-2xs transition">
                                    <div class="w-9 h-9 rounded-xl bg-[#0070BA] text-white flex items-center justify-center shrink-0 text-base shadow-2xs">
                                        <i class="fa-solid fa-pen-nib"></i>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-[#0070BA] font-bold uppercase tracking-wider block">Penghargaan Penerbitan</span>
                                        <h6 class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5 leading-snug">Penulis Terfavorit Nasional</h6>
                                        <p class="text-[11px] text-slate-600 mt-1 leading-relaxed">Dianugerahi oleh Penerbit Mega Press, Bandung atas produktivitas dan mutu penulisan karya buku.</p>
                                    </div>
                                </div>
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

                        {{-- Buku Non-Fiksi Keteknik-sipilan (12 Buku) --}}
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-slate-100">
                                <h4 class="text-sm font-bold text-slate-800">Buku Non-Fiksi (Keteknik-sipilan)</h4>
                                <span class="text-[10px] text-cyan-800 font-semibold bg-cyan-50 border border-cyan-200/60 px-2.5 py-0.5 rounded-full ml-auto">12 Judul</span>
                            </div>

                            <div class="space-y-2.5 max-h-[420px] overflow-y-auto pr-1 scrollbar-thin scrollbar-thumb-cyan-200 scrollbar-track-transparent">
                                @php
                                $bukuSipil = [
                                    ['no' => 1,  'judul' => 'Manajemen Sungai dan Banjir: Adaptasi terhadap Perubahan Iklim Global',                                           'isbn' => '978-623-8221-10-3', 'cover' => 'manajemen-sungai-dan-banjir-adaptasi-terhadap-perubahan-iklim-global.png'],
                                    ['no' => 2,  'judul' => 'Hidrodinamika Pantai dan Proteksi Kawasan Pesisir',                                                               'isbn' => '978-623-8267-23-4', 'cover' => 'hidrodinamika-pantai-dan-proteksi-kawasan-pesisir.jpeg'],
                                    ['no' => 3,  'judul' => 'Mekanisme Pendangkalan di Alur Pelayaran Pelabuhan dan Solusi Komprehensifnya',                                   'isbn' => '978-623-8221-67-7', 'cover' => 'mekanisme-pendangkalan-di-alur-pelayaran-pelabuhan-dan-solusi-komprehensifnya.png'],
                                    ['no' => 4,  'judul' => 'Teknik Irigasi dan Perencanaan Swasembada Pangan',                                                               'isbn' => '973-623-8267-39-2', 'cover' => 'teknik-irigasi-dan-perencanaan-swasembada-pangan.png'],
                                    ['no' => 5,  'judul' => 'Estuari: Konsep Dasar dan Pengembangan Potensi Muara Sungai',                                                    'isbn' => '978-623-8313-56-1', 'cover' => 'estuari-konsep-dasar-dan-usaha-pengembangan-potensi-muara-sungai.png'],
                                    ['no' => 6,  'judul' => 'Transpor Sedimen: Proses, Efek, dan Morfodinamika Pantai',                                                       'isbn' => '978-623-8496-78-5', 'cover' => 'transpor-sedimen-proses-efek-dan-morfodinamika-pantai-2.png'],
                                    ['no' => 7,  'judul' => 'Mekanika Fluida: Teori Fundamental dan Aplikasinya',                                                             'isbn' => '978-623-508-029-1', 'cover' => 'mekanika-fluida-teori-fundamental-dan-aplikasinya.jpg'],
                                    ['no' => 8,  'judul' => 'How to Write and Publish your First Research Paper (Cara Jitu Tembus Publikasi Artikel di Jurnal Internasional)', 'isbn' => '978-624-226-022-7', 'cover' => 'how-to-write-and-publish-your-first-research-paper.jpg'],
                                    ['no' => 9,  'judul' => 'Soal dan Penyelesaian Mekanika Fluida Dasar',                                                                    'isbn' => '978-623-508-432-9', 'cover' => 'soal-dan-penyelesaian-mekanika-fluida-dasar.jpg'],
                                    ['no' => 10, 'judul' => 'Hidrolika: Dasar-dasar, Aplikasi, dan Perencanaan Saluran Terbuka',                                              'isbn' => '978-624-226-427-0', 'cover' => 'hidraulika-dasar-dasar-aplikasi-dan-perencanaan-saluran-terbuka.jpg'],
                                    ['no' => 11, 'judul' => 'Compound Flooding: Mekanisme, Risiko, dan Strategi Ketahanan terhadap Perubahan Iklim',                          'isbn' => '978-624-226-450-8', 'cover' => 'compound-flooding-di-pantai-dan-estuari.jpg'],
                                    ['no' => 12, 'judul' => 'Soal dan Solusi untuk Hidrolika',                                                                                'isbn' => '978-624-226-567-3', 'cover' => 'soal-dan-solusi-untuk-hidraulika.jpg'],
                                ];
                                @endphp

                                @foreach($bukuSipil as $buku)
                                <div class="p-3 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-cyan-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-center gap-3 group">
                                    {{-- Cover Thumbnail --}}
                                    <div class="shrink-0 w-10 h-14 sm:w-12 sm:h-16 rounded-md overflow-hidden border border-slate-200/70 shadow-sm bg-slate-100 group-hover:shadow-md transition-shadow">
                                        <img src="{{ asset('images/buku/' . $buku['cover']) }}"
                                             alt="{{ $buku['judul'] }}"
                                             class="w-full h-full object-cover"
                                             onerror="this.style.display='none'">
                                    </div>
                                    {{-- Nomor + Judul --}}
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start gap-2">
                                            <span class="w-5 h-5 rounded bg-cyan-100 text-cyan-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-cyan-200/70">
                                                {{ $buku['no'] }}
                                            </span>
                                            <h5 class="text-xs sm:text-[13px] font-bold text-slate-800 leading-snug group-hover:text-cyan-950 transition-colors">
                                                {{ $buku['judul'] }}
                                            </h5>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1.5 flex-wrap">
                                            <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200/80">ISBN: {{ $buku['isbn'] }}</span>
                                            <span class="text-cyan-700 bg-cyan-50 font-semibold text-[10px] px-2 py-0.5 rounded-full border border-cyan-200/70">Non-Fiksi</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Buku Fiksi / Novel (4 Buku) --}}
                        <div>
                            <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-slate-100">
                                <i class="fa-solid fa-feather-pointed text-amber-600 text-sm"></i>
                                <h4 class="text-sm font-bold text-slate-800">Buku Fiksi (Novel Kreatif)</h4>
                                <span class="text-[10px] text-amber-800 font-semibold bg-amber-50 border border-amber-200/60 px-2.5 py-0.5 rounded-full ml-auto">Karya Sastra</span>
                            </div>

                            <div class="space-y-2.5 max-h-[280px] overflow-y-auto pr-1 scrollbar-thin scrollbar-thumb-amber-200 scrollbar-track-transparent">
                                @php
                                $bukuFiksi = [
                                    ['no' => 1, 'judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 1): Aksi Penyelamatan Kocak Dimulai',              'isbn' => '978-623-508-060-4', 'cover' => '6-hero-dan-ancaman-bom-di-borobudur-seri-1.jpg'],
                                    ['no' => 2, 'judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 2): Pelumpuhan Profesor Gila Peramu Formula Penghancur', 'isbn' => '978-623-508-074-1', 'cover' => '6-hero-dan-ancaman-bom-di-borobudur-seri-2.jpg'],
                                    ['no' => 3, 'judul' => 'Dua Burung Gereja di Kubah Emas Masjid',                                                      'isbn' => '978-623-508-037-6', 'cover' => 'dua-burung-gereja-di-kubah-emas-masjid.jpg'],
                                    ['no' => 4, 'judul' => 'Adam dan Hawa: Ketika Mereka Bukan dari Surga',                                                'isbn' => '978-624-226-110-1', 'cover' => 'adam-dan-hawa-ketika-mereka-bukan-dari-surga.jpg'],
                                ];
                                @endphp

                                @foreach($bukuFiksi as $novel)
                                <div class="p-3 rounded-xl bg-amber-50/30 border border-amber-200/70 hover:border-amber-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-center gap-3 group">
                                    {{-- Cover Thumbnail --}}
                                    <div class="shrink-0 w-10 h-14 sm:w-12 sm:h-16 rounded-md overflow-hidden border border-amber-200/70 shadow-sm bg-amber-50 group-hover:shadow-md transition-shadow">
                                        <img src="{{ asset('images/buku/' . $novel['cover']) }}"
                                             alt="{{ $novel['judul'] }}"
                                             class="w-full h-full object-cover"
                                             onerror="this.style.display='none'">
                                    </div>
                                    {{-- Nomor + Judul --}}
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start gap-2">
                                            <span class="w-5 h-5 rounded bg-amber-100 text-amber-800 font-bold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-amber-200/70">
                                                {{ $novel['no'] }}
                                            </span>
                                            <h5 class="text-xs sm:text-[13px] font-bold text-slate-800 leading-snug group-hover:text-amber-950 transition-colors">
                                                {{ $novel['judul'] }}
                                            </h5>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1.5 flex-wrap">
                                            <span class="text-slate-500 font-mono text-[10px] bg-white px-2 py-0.5 rounded border border-slate-200/80">ISBN: {{ $novel['isbn'] }}</span>
                                            <span class="text-amber-700 bg-amber-100/70 font-semibold text-[10px] px-2 py-0.5 rounded-full border border-amber-200">Novel Fiksi</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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

@endsection
