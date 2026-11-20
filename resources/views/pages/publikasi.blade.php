@extends('layouts.app')

@section('title', 'Publikasi Ilmiah & Jurnal | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terakreditasi SINTA 4 (Jurnal Akselerasi), publikasi internasional Scopus dosen dan mahasiswa Teknik Sipil FT UNSIL.')

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
                <span class="text-white font-semibold">Publikasi</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Luaran Penelitian &bull; Diseminasi Ilmiah
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Publikasi Ilmiah &amp; Jurnal Rekayasa
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Karya publikasi ilmiah berkala sivitas akademika Program Studi S-1 Teknik Sipil FT UNSIL pada jurnal terindeks SINTA 4, publikasi internasional bereputasi Scopus, dan prosiding seminar nasional.
            </p>

            {{-- Link silang ke Buku & Penelitian --}}
            <div class="flex flex-wrap items-center gap-3 mt-6 pt-6 border-t border-white/10">
                <span class="text-xs text-slate-300 font-semibold">Tautan Terkait:</span>
                <a href="{{ route('penelitian') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-microscope text-[10px]"></i> Peta Jalan Penelitian
                </a>
                <a href="{{ route('buku') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-400 text-[#0B2A4A] text-xs font-bold transition shadow-sm">
                    <i class="fa-solid fa-book text-[10px]"></i> Katalog Buku Dosen
                </a>
                <a href="{{ route('karya-dosen') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-bold text-white transition border border-white/15">
                    <i class="fa-solid fa-graduation-cap text-[10px]"></i> Hub Karya Dosen
                </a>
            </div>
        </div>
    </section>

    {{-- Jurnal Resmi Prodi: Akselerasi --}}
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Feature Jurnal Akselerasi SINTA 4 --}}
            <div class="bg-gradient-to-br from-[#0B2A4A] via-[#0d345c] to-[#124275] rounded-3xl p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden mb-14">
                <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none"
                     style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-8">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="bg-amber-400 text-slate-900 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-wider">
                                Jurnal Resmi Prodi &bull; SINTA 4
                            </span>
                            <span class="bg-white/10 text-white text-[10px] font-semibold px-3 py-1 rounded-full border border-white/20">
                                E-ISSN: 2715-7296
                            </span>
                            <span class="bg-white/10 text-white text-[10px] font-semibold px-3 py-1 rounded-full border border-white/20">
                                P-ISSN: 2715-7288
                            </span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black font-heading text-white leading-tight">
                            Akselerasi: Jurnal Ilmiah Teknik Sipil
                        </h2>
                        <p class="text-slate-300 text-xs sm:text-sm mt-3 leading-relaxed max-w-2xl">
                            Jurnal berkala ilmiah yang dikelola Program Studi S-1 Teknik Sipil FT Universitas Siliwangi. Mewadahi publikasi artikel riset orisinal dan kajian terapan di bidang struktur, geoteknik, sumber daya air, transportasi, dan manajemen konstruksi.
                        </p>

                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-6 pt-6 border-t border-white/10 text-xs">
                            <div>
                                <span class="text-slate-400 block text-[11px]">Frekuensi Terbit:</span>
                                <strong class="text-amber-400">3x Setahun</strong> (Mar, Jul, Nov)
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[11px]">Akreditasi:</span>
                                <strong class="text-emerald-400">Peringkat SINTA 4</strong>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[11px]">Sistem Review:</span>
                                <strong class="text-white">Double-blind Peer Review</strong>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 mt-8">
                            <a href="https://jurnal.unsil.ac.id/index.php/akselerasi" target="_blank"
                               class="px-5 py-3 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-900 font-extrabold text-xs uppercase tracking-wider transition shadow-md flex items-center gap-2">
                                <span>Kunjungi Portal OJS Akselerasi</span>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                            <a href="https://jurnal.unsil.ac.id/index.php/akselerasi/about/submissions" target="_blank"
                               class="px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider border border-white/20 transition flex items-center gap-2">
                                <i class="fa-solid fa-file-arrow-up"></i> Petunjuk Penulisan
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex justify-center">
                        <div class="relative w-56 sm:w-64 rounded-2xl overflow-hidden shadow-2xl border-4 border-white/20 transform rotate-1 hover:rotate-0 transition-transform duration-300">
                            <img src="{{ asset('images/unsil-prestasi-scopus-sipil.png') }}" alt="Cover Akselerasi" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Artikel Publikasi Terpilih --}}
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Artikel Ilmiah Terkini</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2 font-heading">Publikasi Riset Terpilih</h3>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-blue-300 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-bold text-blue-700 bg-blue-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Jurnal Akselerasi &bull; 2025</span>
                        <h4 class="font-extrabold text-slate-900 text-sm mt-3 leading-snug">Implementasi BIM 5D pada Perencanaan Kampus di Kab. Majalengka</h4>
                        <p class="text-xs text-slate-500 mt-2">Penulis: Hidayanto, Empung, dkk.</p>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">Analisis integrasi visual 3D, penjadwalan waktu (4D), dan estimasi biaya (5D) untuk meningkatkan efisiensi konstruksi fasilitas pendidikan.</p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-blue-700 font-semibold flex items-center justify-between">
                        <span>KBK Manajemen Konstruksi</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-bold text-cyan-800 bg-cyan-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Jurnal Akselerasi &bull; 2024</span>
                        <h4 class="font-extrabold text-slate-900 text-sm mt-3 leading-snug">Analisis Laju Erosi DAS Citanduy Hulu Berbasis SIG (MUSLE)</h4>
                        <p class="text-xs text-slate-500 mt-2">Penulis: E. Khallilah, Andhy Romdani, dkk.</p>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">Kajian spasial tingkat erosi permukaan tanah dan sedimentasi waduk dengan integrasi data citra satelit dan persamaan MUSLE.</p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-cyan-700 font-semibold flex items-center justify-between">
                        <span>KBK Sumber Daya Air</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:shadow-xl hover:border-emerald-300 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-bold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Jurnal Akselerasi &bull; 2024</span>
                        <h4 class="font-extrabold text-slate-900 text-sm mt-3 leading-snug">Kajian Redesign Struktur Gedung 5 Lantai Balai Pengobatan UNSIL</h4>
                        <p class="text-xs text-slate-500 mt-2">Penulis: M.S. Al Huseiny, R. Nursani, dkk.</p>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">Evaluasi beban gempa respon spektrum SNI 1726:2019 terhadap struktur portal beton bertulang Sistem Rangka Pemikul Momen Khusus (SRPMK).</p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-200 text-[11px] text-emerald-700 font-semibold flex items-center justify-between">
                        <span>KBK Struktur &amp; Bahan</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </div>
                </div>
            </div>

            {{-- Publikasi Scopus & Internasional --}}
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-7 sm:p-10">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 text-orange-700 flex items-center justify-center text-lg font-bold">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-lg">Publikasi Internasional Bereputasi (Scopus &amp; WoS)</h3>
                        <p class="text-xs text-slate-500">Capaian riset mahasiswa dan dosen Prodi Teknik Sipil FT UNSIL di kancah global</p>
                    </div>
                </div>

                <div class="space-y-4 text-xs text-slate-600">
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <span class="text-[10px] font-bold text-orange-700 bg-orange-50 px-2 py-0.5 rounded-md uppercase">Scopus Indexed</span>
                            <h4 class="font-bold text-slate-900 text-xs sm:text-sm mt-1">Fahmi Rahmat El Ghifari &bull; Lulusan Teknik Sipil Publikasi Jurnal Scopus</h4>
                            <p class="text-slate-500 mt-0.5 text-[11px]">Riset pemanfaatan abu ampas tebu dan geopolimer untuk beton berkelanjutan ramah lingkungan.</p>
                        </div>
                        <a href="{{ route('berita.fahmi-rahmat') }}" class="text-blue-700 font-bold hover:underline shrink-0 text-xs flex items-center gap-1">
                            Baca Berita <i class="fa-solid fa-chevron-right text-[9px]"></i>
                        </a>
                    </div>

                    <div class="bg-white p-4 rounded-2xl border border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <span class="text-[10px] font-bold text-orange-700 bg-orange-50 px-2 py-0.5 rounded-md uppercase">Scopus Indexed</span>
                            <h4 class="font-bold text-slate-900 text-xs sm:text-sm mt-1">Muhammad Raka El Ghifari &bull; Riset Kolaboratif Tingkat Internasional</h4>
                            <p class="text-slate-500 mt-0.5 text-[11px]">Pemanfaatan material limbah industri sebagai substitusi parsial semen dalam campuran beton kinerja tinggi.</p>
                        </div>
                        <a href="{{ route('berita.muhammad-raka') }}" class="text-blue-700 font-bold hover:underline shrink-0 text-xs flex items-center gap-1">
                            Baca Berita <i class="fa-solid fa-chevron-right text-[9px]"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
