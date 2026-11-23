@extends('layouts.app')

@section('title', 'Sejarah | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Sejarah dan rekam jejak perjalanan Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi sejak berdiri tahun 1984 hingga penegerian PTN tahun 2014 dan era Kampus 2 Mugarsari.')

@section('content')
    <!-- Hero Header -->
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Sejarah Program Studi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Rekam Jejak
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1 leading-tight">
                Sejarah Program Studi S-1 Teknik Sipil
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Menyusuri perjalanan dedikasi keinsinyuran: Dari pilar perintis pendidikan teknik di Priangan Timur hingga bertransformasi menjadi Perguruan Tinggi Negeri dengan pusat riset di Kampus 2 Mugarsari.
            </p>
        </div>
    </section>

    <!-- Ringkasan Angka & Tonggak Penting -->
    <section class="relative z-20 -mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Tahun Berdiri</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] mt-1 font-heading">-</div>
            </div>

            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Status Negeri (PTN)</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#0070BA] mt-1 font-heading">-</div>
            </div>

            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Masa Pengabdian</span>
                <div class="text-2xl sm:text-3xl font-bold text-slate-800 mt-1 font-heading">-</div>
            </div>

            <div class="bg-white rounded-lg p-4 sm:p-5 border border-slate-200">
                <span class="text-xs font-medium text-slate-400 block">Kiprah Alumni</span>
                <div class="text-2xl sm:text-3xl font-bold text-slate-800 mt-1 font-heading">-</div>
            </div>
        </div>
    </section>

    <!-- Section 1: Narasi Sejarah Komprehensif (Editorial 2 Kolom) -->
    <section class="py-16 sm:py-20 bg-slate-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                
                <!-- Kolom Kiri: Narasi Sejarah Mendalam (7 Kolom) -->
                <div class="lg:col-span-7">
                    <span class="text-[#0070BA] font-medium text-xs block mb-2">
                        Rekam Jejak Historis
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0B2A4A] font-heading leading-tight">
                        Jejak Langkah Teknik Sipil di Tanah Siliwangi
                    </h2>
                    <div class="w-12 h-0.5 bg-[#0B2A4A] mt-3 mb-6"></div>

                    <div class="space-y-5 text-slate-700 text-sm sm:text-base leading-relaxed text-justify">
                        <p>
                            Kebutuhan mendesak akan tenaga ahli rekayasa infrastruktur di kawasan Priangan Timur&mdash;yang mencakup Tasikmalaya, Ciamis, Garut, Banjar, dan Pangandaran&mdash;menjadi latar belakang historis berdirinya pendidikan teknik di Universitas Siliwangi. Para pendiri universitas yang diprakarsai oleh pejuang dan tokoh Kodam Siliwangi memandang penting hadirnya institusi keteknikan yang sanggup menjawab tantangan pembangunan fisik daerah.
                        </p>
                        
                        <div class="bg-blue-50/80 border-l-4 border-[#0B2A4A] p-4 sm:p-5 rounded-r-md">
                            <p class="font-medium text-[#0B2A4A] text-sm sm:text-base italic">
                                &ldquo;Fakultas Teknik resmi didirikan melalui Surat Keputusan Yayasan Pembina Universitas Siliwangi (YUS) Nomor: 05/Kep/I-1/YUS/1984 pada tanggal 31 Desember 1984. Program Studi Teknik Sipil menjadi program studi rekayasa pertama dan tertua yang melandasi berdirinya fakultas ini.&rdquo;
                            </p>
                        </div>

                        <p>
                            Pada dekade 1980-an hingga 1990-an, perkuliahan berpusat di Kampus 1 Jalan Siliwangi No. 24 Kahuripan, Kota Tasikmalaya. Dengan fasilitas perintisan, civitas akademika mendirikan Laboratorium Pengujian Bahan Konstruksi dan Mekanika Tanah pertama di wilayah Priangan Timur. Laboratorium ini tidak hanya menjadi kawah candradimuka praktikum mahasiswa, tetapi juga rujukan pengujian mutu beton, agregat, dan daya dukung tanah bagi proyek-proyek strategis dinas pekerjaan umum setempat.
                        </p>

                        <p>
                            Perjalanan berlanjut dengan pencapaian akreditasi nasional dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada era 2000-an. Kurikulum secara berkesinambungan diselaraskan dengan standar Badan Kerja Sama Jurusan Teknik Sipil (BKS-TS) Indonesia dan kebutuhan industri jasa konstruksi nasional.
                        </p>

                        <p>
                            Titik tolak paling monumental dalam sejarah institusi terjadi pada tanggal <strong>2 April 2014</strong>, ketika Presiden Republik Indonesia Dr. H. Susilo Bambang Yudhoyono menetapkan <strong>Peraturan Presiden (Perpres) Nomor 24 Tahun 2014</strong> tentang Pendirian Universitas Siliwangi sebagai <strong>Perguruan Tinggi Negeri (PTN)</strong>. Penegerian ini membuka babak baru akselerasi mutu: rekrutmen dosen-dosen bergelar Doktor (S-3) lulusan kampus top nasional dan mancanegara, perluasan riset terapan, serta pembiayaan sarana prasarana modern dari APBN.
                        </p>

                        <p>
                            Kini, memasuki era industri konstruksi cerdas dan digital, Program Studi Teknik Sipil UNSIL telah memusatkan perkuliahan dan pusat laboratorium terpadu di <strong>Kampus 2 Mugarsari, Tamansari, Kota Tasikmalaya</strong>. Dengan perolehan akreditasi <strong>&ldquo;Baik&rdquo;</strong> dari Lembaga Akreditasi Mandiri Teknik (LAM Teknik), program studi terus bertransformasi mengimplementasikan kurikulum <em>Outcome-Based Education</em> (OBE) berstandar IABEE demi mewujudkan Visi 2030 sebagai pusat keunggulan keteknikan sipil yang berwawasan kebangsaan dan berkarakter wirausaha.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: Visual Showcase (5 Kolom) -->
                <div class="lg:col-span-5">
                    
                    <!-- Foto Tugu Fakultas Teknik -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm max-w-sm sm:max-w-md lg:max-w-none mx-auto">
                        <div class="relative w-full aspect-[3/4] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" 
                                 alt="Tugu Fakultas Teknik Universitas Siliwangi" 
                                 class="w-full h-full object-cover object-center">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Garis Waktu Perjalanan (Milestone Timeline Horizontal) -->
    <section class="py-16 sm:py-24 bg-white border-t border-slate-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mx-auto text-center mb-10 sm:mb-14">
                <span class="text-[#0070BA] font-medium text-xs block">Garis Waktu</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0B2A4A] mt-2 font-heading">
                    Tonggak Perjalanan &amp; Prestasi
                </h2>
                <div class="w-12 h-0.5 bg-[#0B2A4A] mx-auto mt-3 mb-4"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Setiap babak menandai konsistensi dan dedikasi civitas akademika Teknik Sipil UNSIL dalam memajukan ilmu keteknikan dan mengabdi untuk bangsa.
                </p>

                <!-- Tombol Navigasi Horizontal -->
                <div class="flex items-center justify-center gap-3 mt-6">
                    <button type="button" 
                            onclick="scrollTimeline('left')" 
                            class="w-10 h-10 rounded-full border border-slate-200 bg-white hover:bg-slate-50 hover:border-[#0070BA] text-slate-700 hover:text-[#0070BA] flex items-center justify-center transition shadow-sm active:scale-95"
                            title="Geser ke kiri"
                            aria-label="Geser linimasa ke kiri">
                        <i class="fa-solid fa-chevron-left text-sm"></i>
                    </button>
                    <span class="text-xs font-medium text-slate-500 bg-slate-100 px-3.5 py-1.5 rounded-full flex items-center gap-1.5 border border-slate-200">
                        <i class="fa-solid fa-arrows-left-right text-[#0070BA] text-[11px]"></i>
                        <span>Geser linimasa 1984 &mdash; Kini</span>
                    </span>
                    <button type="button" 
                            onclick="scrollTimeline('right')" 
                            class="w-10 h-10 rounded-full border border-slate-200 bg-white hover:bg-slate-50 hover:border-[#0070BA] text-slate-700 hover:text-[#0070BA] flex items-center justify-center transition shadow-sm active:scale-95"
                            title="Geser ke kanan"
                            aria-label="Geser linimasa ke kanan">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- Kontainer Linimasa Horizontal -->
            <div class="relative">
                <div id="timeline-track" class="overflow-x-auto pb-6 pt-2 scroll-smooth snap-x snap-mandatory timeline-scrollbar">
                    <div class="relative min-w-max pb-4 px-2">
                        <!-- Garis Penghubung Horizontal Linimasa -->
                        <div class="absolute top-[18px] left-8 right-8 h-0.5 bg-slate-200 z-0"></div>

                        <!-- Deretan Kartu Milestone Horizontal -->
                        <div class="flex items-stretch gap-6 relative z-10">
                            
                            <!-- Milestone 1: 1984 -->
                            <div class="w-[320px] sm:w-[350px] shrink-0 snap-start flex flex-col">
                                <div class="flex items-center gap-2.5 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-[#0B2A4A] text-amber-400 font-bold flex items-center justify-center text-xs shadow ring-4 ring-white shrink-0">
                                        01
                                    </div>
                                    <span class="bg-white text-xs font-bold text-[#0B2A4A] px-2.5 py-1 rounded-full border border-slate-200 shadow-xs">
                                        1984
                                    </span>
                                </div>
                                <div class="flex-1 bg-white border border-slate-200 rounded-xl p-5 sm:p-6 shadow-sm hover:border-[#0070BA] hover:shadow-md transition flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between gap-2 mb-3">
                                            <span class="bg-[#0B2A4A] text-amber-400 text-[11px] font-bold px-2.5 py-1 rounded">
                                                31 Desember 1984
                                            </span>
                                            <span class="text-[11px] text-slate-500 font-medium">Fase Perintisan</span>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading mb-2 leading-snug">
                                            Pendirian Jurusan Teknik Sipil Pertama
                                        </h3>
                                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                            Berdiri resmi berdasarkan SK Yayasan Pembina Universitas Siliwangi No. 05/Kep/I-1/YUS/1984. Menjadi program studi rekayasa perdana di lingkungan Fakultas Teknik untuk mencetak insinyur sipil di Priangan Timur.
                                        </p>
                                    </div>
                                    <div class="pt-3 mt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500">
                                        <i class="fa-solid fa-map-pin text-[#0070BA]"></i> Kampus 1 Jl. Siliwangi No. 24 Tasikmalaya
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone 2: 1990-an -->
                            <div class="w-[320px] sm:w-[350px] shrink-0 snap-start flex flex-col">
                                <div class="flex items-center gap-2.5 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-[#0B2A4A] text-amber-400 font-bold flex items-center justify-center text-xs shadow ring-4 ring-white shrink-0">
                                        02
                                    </div>
                                    <span class="bg-white text-xs font-bold text-[#0B2A4A] px-2.5 py-1 rounded-full border border-slate-200 shadow-xs">
                                        1990-an
                                    </span>
                                </div>
                                <div class="flex-1 bg-white border border-slate-200 rounded-xl p-5 sm:p-6 shadow-sm hover:border-[#0070BA] hover:shadow-md transition flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between gap-2 mb-3">
                                            <span class="bg-blue-100 text-blue-800 text-[11px] font-bold px-2.5 py-1 rounded">
                                                Dekade 1990-an
                                            </span>
                                            <span class="text-[11px] text-slate-500 font-medium">Standardisasi Lab</span>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading mb-2 leading-snug">
                                            Perintisan Laboratorium &amp; Kurikulum Konsorsium
                                        </h3>
                                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                            Menyesuaikan kurikulum dengan Konsorsium Keteknikan Nasional. Mengoperasikan Laboratorium Uji Bahan dan Mekanika Tanah pertama di kawasan Priangan Timur guna menunjang praktikum dan uji mutu konstruksi daerah.
                                        </p>
                                    </div>
                                    <div class="pt-3 mt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-blue-700 font-medium">
                                        <i class="fa-solid fa-check-circle"></i> Mitra Dinas PU &amp; Kontraktor Daerah
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone 3: 2000-an -->
                            <div class="w-[320px] sm:w-[350px] shrink-0 snap-start flex flex-col">
                                <div class="flex items-center gap-2.5 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-[#0B2A4A] text-amber-400 font-bold flex items-center justify-center text-xs shadow ring-4 ring-white shrink-0">
                                        03
                                    </div>
                                    <span class="bg-white text-xs font-bold text-[#0B2A4A] px-2.5 py-1 rounded-full border border-slate-200 shadow-xs">
                                        2000-an
                                    </span>
                                </div>
                                <div class="flex-1 bg-white border border-slate-200 rounded-xl p-5 sm:p-6 shadow-sm hover:border-[#0070BA] hover:shadow-md transition flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between gap-2 mb-3">
                                            <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-2.5 py-1 rounded">
                                                Dekade 2000-an
                                            </span>
                                            <span class="text-[11px] text-slate-500 font-medium">Pengakuan Nasional</span>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading mb-2 leading-snug">
                                            Akreditasi Nasional BAN-PT &amp; Prestasi Mahasiswa
                                        </h3>
                                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                            Meraih status akreditasi resmi dari BAN-PT. Mahasiswa mulai aktif menorehkan prestasi kompetisi rancang jembatan, karya ilmiah, serta pengabdian mitigasi kebencanaan di berbagai penjuru Jawa Barat.
                                        </p>
                                    </div>
                                    <div class="pt-3 mt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-emerald-700 font-medium">
                                        <i class="fa-solid fa-trophy"></i> Himpunan Mahasiswa Sipil (HMS) Berprestasi
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone 4: 2014 (Highlight PTN) -->
                            <div class="w-[320px] sm:w-[350px] shrink-0 snap-start flex flex-col">
                                <div class="flex items-center gap-2.5 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-amber-400 text-[#0B2A4A] font-bold flex items-center justify-center text-xs shadow ring-4 ring-amber-100 shrink-0">
                                        <i class="fa-solid fa-star text-[10px]"></i>
                                    </div>
                                    <span class="bg-amber-50 text-xs font-bold text-[#0B2A4A] px-2.5 py-1 rounded-full border border-amber-300 shadow-xs">
                                        2014 &bull; PTN
                                    </span>
                                </div>
                                <div class="flex-1 bg-[#0B2A4A] text-white border border-blue-900 rounded-xl p-5 sm:p-6 shadow-md hover:border-amber-400/50 hover:shadow-lg transition flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between gap-2 mb-3">
                                            <span class="bg-amber-400 text-[#0B2A4A] text-[11px] font-bold px-2.5 py-1 rounded">
                                                2 April 2014
                                            </span>
                                            <span class="text-[11px] text-amber-300 font-medium">Tonggak Bersejarah</span>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-bold text-white font-heading mb-2 leading-snug">
                                            Penegerian UNSIL Menjadi PTN
                                        </h3>
                                        <p class="text-slate-200 text-xs sm:text-sm leading-relaxed">
                                            Melalui <strong>Peraturan Presiden RI Nomor 24 Tahun 2014</strong> yang diteken oleh Presiden RI Susilo Bambang Yudhoyono, Universitas Siliwangi resmi bertransformasi menjadi Perguruan Tinggi Negeri. Akselerasi fasilitas, riset dosen doktor, dan kuota seleksi nasional melonjak drastis.
                                        </p>
                                    </div>
                                    <div class="pt-3 mt-4 border-t border-white/10 flex items-center gap-2 text-xs text-amber-300">
                                        <i class="fa-solid fa-stamp"></i> Perpres No. 24/2014 &bull; Di Bawah Kemendikbudristek
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone 5: 2019 -->
                            <div class="w-[320px] sm:w-[350px] shrink-0 snap-start flex flex-col">
                                <div class="flex items-center gap-2.5 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-[#0B2A4A] text-amber-400 font-bold flex items-center justify-center text-xs shadow ring-4 ring-white shrink-0">
                                        05
                                    </div>
                                    <span class="bg-white text-xs font-bold text-[#0B2A4A] px-2.5 py-1 rounded-full border border-slate-200 shadow-xs">
                                        2019
                                    </span>
                                </div>
                                <div class="flex-1 bg-white border border-slate-200 rounded-xl p-5 sm:p-6 shadow-sm hover:border-[#0070BA] hover:shadow-md transition flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between gap-2 mb-3">
                                            <span class="bg-indigo-100 text-indigo-800 text-[11px] font-bold px-2.5 py-1 rounded">
                                                Tahun 2019
                                            </span>
                                            <span class="text-[11px] text-slate-500 font-medium">Fasilitas Baru</span>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading mb-2 leading-snug">
                                            Pemusatan Perkuliahan &amp; Labtek di Kampus 2 Mugarsari
                                        </h3>
                                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                            Fakultas Teknik membangun dan mengoperasikan kompleks gedung perkuliahan serta Gedung Laboratorium Teknik (Labtek) terpadu di Kampus 2 Mugarsari, Tamansari, Kota Tasikmalaya dengan peralatan uji modern berstandar SNI.
                                        </p>
                                    </div>
                                    <div class="pt-3 mt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-indigo-700 font-medium">
                                        <i class="fa-solid fa-compass-drafting"></i> 6 Laboratorium Terpadu Kampus 2 Mugarsari
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone 6: 2023 — Kini -->
                            <div class="w-[320px] sm:w-[350px] shrink-0 snap-start flex flex-col">
                                <div class="flex items-center gap-2.5 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-[#0B2A4A] text-amber-400 font-bold flex items-center justify-center text-xs shadow ring-4 ring-white shrink-0">
                                        06
                                    </div>
                                    <span class="bg-white text-xs font-bold text-[#0B2A4A] px-2.5 py-1 rounded-full border border-slate-200 shadow-xs">
                                        2023 &mdash; Kini
                                    </span>
                                </div>
                                <div class="flex-1 bg-white border border-slate-200 rounded-xl p-5 sm:p-6 shadow-sm hover:border-[#0070BA] hover:shadow-md transition flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between gap-2 mb-3">
                                            <span class="bg-[#0B2A4A] text-amber-400 text-[11px] font-bold px-2.5 py-1 rounded">
                                                2023 &mdash; Kini
                                            </span>
                                            <span class="text-[11px] text-slate-500 font-medium">Mutu Akademik</span>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading mb-2 leading-snug">
                                            Akreditasi LAM Teknik &amp; Penerapan Kurikulum OBE
                                        </h3>
                                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                            Meraih akreditasi <strong>BAIK</strong> dari Lembaga Akreditasi Mandiri Program Studi Keteknikan (LAM Teknik). Menerapkan kurikulum <em>Outcome-Based Education</em> (OBE), program MBKM dengan mitra konstruksi, serta penguatan riset civitas akademika menuju standar mutu berkelanjutan.
                                        </p>
                                    </div>
                                    <div class="pt-3 mt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-600 font-medium">
                                        <i class="fa-solid fa-certificate text-amber-500"></i> Akreditasi LAM Teknik &bull; Kurikulum OBE
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Custom Styling & Script untuk Timeline Horizontal -->
    <style>
        .timeline-scrollbar::-webkit-scrollbar {
            height: 6px;
        }
        .timeline-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 9999px;
        }
        .timeline-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 9999px;
        }
        .timeline-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>

    <script>
        function scrollTimeline(direction) {
            const track = document.getElementById('timeline-track');
            if (!track) return;
            const scrollAmount = 374; // lebar kartu (350px) + gap (24px)
            if (direction === 'left') {
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    </script>

@endsection

