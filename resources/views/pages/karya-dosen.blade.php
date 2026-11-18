@extends('layouts.app')

@section('title', 'Karya Dosen | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi jurnal ilmiah terindeks SINTA Akselerasi, paten inovasi HKI, dan buku ajar dosen Program Studi Teknik Sipil FT UNSIL.')

@section('content')
    <!-- Page Header Banner -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Karya Dosen</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Intelektual &amp; Publikasi Ilmiah
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Karya &amp; Publikasi Dosen
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Produktivitas keilmuan dosen Program Studi Teknik Sipil FT UNSIL dalam bentuk jurnal ilmiah terindeks SINTA, paten hak kekayaan intelektual (HKI), dan buku referensi keinsinyuran.
            </p>
        </div>
    </section>

    <!-- Konten Karya Dosen -->
    <section class="py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Karya Cipta &amp; HKI</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Publikasi &amp; Inovasi</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Bukti nyata kontribusi akademisi Fakultas Teknik Universitas Siliwangi bagi kemajuan ilmu pengetahuan rekayasa sipil nasional.
                </p>
            </div>

            <!-- Grid 3 Kategori Karya -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
                <!-- Jurnal Ilmiah -->
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full uppercase tracking-wider">Jurnal Ilmiah &bull; SINTA</span>
                            <i class="fa-solid fa-book-open-reader text-blue-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 leading-snug">Akselerasi : Jurnal Ilmiah Teknik Sipil</h4>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Jurnal berkala resmi Program Studi Teknik Sipil FT UNSIL yang menerbitkan artikel riset mutakhir bidang rekayasa struktur, transportasi, geoteknik, manajemen konstruksi, dan sumber daya air terindeks SINTA.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-xs text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">ISSN:</strong> 2715-7318 (Online)</div>
                            <div><strong class="text-slate-800">Frekuensi:</strong> 2 Kali Setahun (Juni &amp; Desember)</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="https://jurnal.unsil.ac.id" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-900">
                            <span>Kunjungi Portal Jurnal (OJS)</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- Paten & HKI -->
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-3 py-1 rounded-full uppercase tracking-wider">Paten &amp; HKI</span>
                            <i class="fa-solid fa-lightbulb text-amber-500 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 leading-snug">Hak Cipta Inovasi Material &amp; Metode</h4>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Paten terdaftar dan hak cipta karya inovasi dosen, meliputi metode perkuatan tanah lempung lunak, formula campuran beton ramah lingkungan ekonomis, dan perangkat lunak bantu analisis struktur.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-xs text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">Kategori:</strong> Paten Sederhana &amp; Hak Cipta</div>
                            <div><strong class="text-slate-800">Lembaga:</strong> DJKI Kemenkumham RI</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <span class="text-xs font-bold text-amber-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-halved text-[10px]"></i> Terdaftar Resmi di DJKI
                        </span>
                    </div>
                </div>

                <!-- Buku Ajar -->
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full uppercase tracking-wider">Buku Ajar &amp; Monograf</span>
                            <i class="fa-solid fa-book text-emerald-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 leading-snug">Buku Referensi Keinsinyuran</h4>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Buku teks ber-ISBN yang ditulis oleh dosen-dosen Teknik Sipil UNSIL, mencakup Mekanika Rekayasa, Analisis Struktur Lanjut, Rekayasa Pondasi Dangkal &amp; Dalam, serta Hidrologi Teknik Sipil.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-xs text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">Penerbit:</strong> UNSIL Press &amp; Penerbit Nasional</div>
                            <div><strong class="text-slate-800">Distribusi:</strong> Perpustakaan &amp; Sivitas Akademika</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('download') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700 hover:text-emerald-900">
                            <span>Lihat Bahan Ajar Mahasiswa</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Highlight Seminar Internasional -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-md flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional" class="w-20 h-20 rounded-2xl object-cover shadow-sm hidden sm:block">
                    <div>
                        <span class="text-blue-700 font-bold uppercase text-[10px] bg-blue-50 px-2.5 py-0.5 rounded-full inline-block mb-1">Kolaborasi Global</span>
                        <h3 class="text-base font-bold text-slate-900">Seminar Internasional "Bridging Futures" Indonesia-Taiwan</h3>
                        <p class="text-xs text-slate-500 mt-1">Kegiatan ilmiah bersama narasumber Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) Taiwan.</p>
                    </div>
                </div>
                <a href="{{ route('berita.seminar-taiwan') }}" class="px-5 py-2.5 rounded-xl bg-[#0070BA] hover:bg-[#005a96] text-white font-bold text-xs shadow transition whitespace-nowrap self-start md:self-auto">
                    Baca Berita Ilmiah &rarr;
                </a>
            </div>

        </div>
    </section>
@endsection
