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
            <p class="text-[#0070BA] font-semibold text-xs uppercase tracking-wide">
                Rekam Jejak
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1 leading-tight">
                Sejarah Program Studi S-1 Teknik Sipil
            </h1>

        </div>
    </section>

    <!-- Ringkasan Angka & Tonggak Penting -->
    <section class="relative z-20 -mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
            <div class="bg-white rounded-xl p-4 sm:p-5 shadow-sm border border-slate-200">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Tahun Berdiri</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] mt-1 font-heading">1984</div>
                <p class="text-[11px] text-slate-500 mt-0.5">SK Pembina YUS 31 Des 1984</p>
            </div>

            <div class="bg-white rounded-xl p-4 sm:p-5 shadow-sm border border-slate-200">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Status Negeri (PTN)</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#0070BA] mt-1 font-heading">2014</div>
                <p class="text-[11px] text-slate-500 mt-0.5">Perpres RI No. 24 Tahun 2014</p>
            </div>

            <div class="bg-white rounded-xl p-4 sm:p-5 shadow-sm border border-slate-200">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Masa Pengabdian</span>
                <div class="text-2xl sm:text-3xl font-bold text-slate-800 mt-1 font-heading">40+ Tahun</div>
                <p class="text-[11px] text-slate-500 mt-0.5">Membangun Bangsa</p>
            </div>

            <div class="bg-white rounded-xl p-4 sm:p-5 shadow-sm border border-slate-200">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Kiprah Alumni</span>
                <div class="text-2xl sm:text-3xl font-bold text-slate-800 mt-1 font-heading">3.500+</div>
                <p class="text-[11px] text-slate-500 mt-0.5">Insinyur &amp; Praktisi</p>
            </div>
        </div>
    </section>

    <!-- Section 1: Narasi Sejarah Komprehensif (Editorial 2 Kolom) -->
    <section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.05] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                
                <!-- Kolom Kiri: Narasi Sejarah Mendalam (7 Kolom) -->
                <div class="lg:col-span-7">
                    <span class="text-amber-600 font-bold uppercase text-xs tracking-widest block mb-2">
                        Rekam Jejak Historis
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#0B2A4A] font-heading leading-tight">
                        Jejak Langkah Teknik Sipil di Tanah Siliwangi
                    </h2>
                    <div class="w-20 h-1.5 bg-gradient-to-r from-amber-400 to-[#0B2A4A] mt-3 mb-6 rounded-full"></div>

                    <div class="space-y-5 text-slate-700 text-sm sm:text-base leading-relaxed text-justify">
                        <p>
                            Kebutuhan mendesak akan tenaga ahli rekayasa infrastruktur di kawasan Priangan Timur—yang mencakup Tasikmalaya, Ciamis, Garut, Banjar, dan Pangandaran—menjadi latar belakang historis berdirinya pendidikan teknik di Universitas Siliwangi. Para pendiri universitas yang diprakarsai oleh pejuang dan tokoh Kodam Siliwangi memandang penting hadirnya institusi keteknikan yang sanggup menjawab tantangan pembangunan fisik daerah.
                        </p>
                        
                        <div class="bg-blue-50/80 border-l-4 border-[#0B2A4A] p-4 sm:p-5 rounded-r-xl">
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
                            Kini, memasuki era industri konstruksi cerdas dan digital, Program Studi Teknik Sipil UNSIL telah memusatkan perkuliahan dan pusat laboratorium terpadu di <strong>Kampus 2 Mugarsari, Tamansari, Kota Tasikmalaya</strong>. Dengan perolehan akreditasi <strong>&ldquo;Baik Sekali&rdquo;</strong> dari Lembaga Akreditasi Mandiri Teknik (LAM Teknik), program studi terus bertransformasi mengimplementasikan kurikulum <em>Outcome-Based Education</em> (OBE) berstandar IABEE demi mewujudkan Visi 2030 sebagai pusat keunggulan keteknikan sipil yang berwawasan kebangsaan dan berkarakter wirausaha.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: Visual Showcase & Dasar Hukum (5 Kolom) -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Foto Tugu & Gedung Kebanggaan -->
                    <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-slate-200 group">
                        <div class="relative h-80 sm:h-96 overflow-hidden">
                            <img src="{{ asset('images/arsip-unsil-1984.jpg') }}"
                                 alt="Arsip Historis Persiapan Universitas Siliwangi 1984 — UPT Kearsipan UNSIL"
                                 class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/80 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h4 class="font-bold text-base sm:text-lg leading-snug">Arsip Historis — Persiapan Universitas Siliwangi</h4>
                                <p class="text-xs text-slate-300 mt-0.5">Sumber: UPT Kearsipan UNSIL</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Garis Waktu Perjalanan (Milestone Timeline Modern & Proporsional) -->
    <section class="py-16 sm:py-24 bg-white relative overflow-hidden border-t border-slate-200">
        <div class="absolute inset-0 opacity-[0.06] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="max-w-3xl mx-auto text-center mb-16 sm:mb-20">
                <span class="text-amber-600 font-bold uppercase text-xs tracking-widest block">Garis Waktu Historis</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#0B2A4A] mt-2 font-heading">
                    Tonggak Perjalanan &amp; Prestasi (1984 &mdash; Kini)
                </h2>
                <div class="w-20 h-1.5 bg-amber-400 mx-auto mt-3 mb-4 rounded-full"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Setiap babak menandai konsistensi dan dedikasi civitas akademika Teknik Sipil UNSIL dalam memajukan ilmu keteknikan dan mengabdi untuk bangsa.
                </p>
            </div>

            <!-- Timeline Container: Horizontal Scrollable -->
            <div class="overflow-x-auto pb-8 -mx-4 px-4">
                <div class="flex items-start gap-0 relative" style="min-width: max-content;">

                    <!-- Garis Horizontal -->
                    <div class="absolute left-0 right-0 h-1 bg-gradient-to-r from-amber-400 via-blue-400 to-[#0B2A4A] rounded-full z-0" style="top: 3.75rem;"></div>

                    <!-- Milestone 1: 1984 -->
                    <div class="flex flex-col items-center w-56 sm:w-64 relative px-3">
                        <div class="text-[11px] font-black text-amber-600 mb-2 text-center whitespace-nowrap bg-amber-50 border border-amber-200 rounded-full px-2 py-0.5">31 Des 1984</div>
                        <div class="w-12 h-12 rounded-full bg-amber-400 border-4 border-white shadow-lg flex items-center justify-center z-10 text-[#0B2A4A] font-bold text-base relative">
                            <i class="fa-solid fa-flag"></i>
                        </div>
                        <div class="w-0.5 h-5 bg-slate-300 my-1"></div>
                        <div class="bg-gradient-to-br from-[#0B2A4A] to-[#123861] text-white rounded-2xl p-4 shadow-xl border border-blue-900 w-full hover:-translate-y-1 transition-all duration-300">
                            <div class="text-[10px] text-slate-300 font-semibold mb-1 uppercase tracking-wider">Fase Perintisan</div>
                            <h3 class="text-sm font-bold text-white mb-2 font-heading leading-snug">Pendirian Jurusan Teknik Sipil</h3>
                            <p class="text-slate-300 text-[11px] leading-relaxed mb-3">SK Yayasan No. 05/Kep/I-1/YUS/1984. Program studi rekayasa perdana Fakultas Teknik untuk mencetak insinyur sipil di Priangan Timur.</p>
                        </div>
                    </div>

                    <!-- Milestone 2: 1990-an -->
                    <div class="flex flex-col items-center w-56 sm:w-64 relative px-3">
                        <div class="text-[11px] font-black text-blue-600 mb-2 text-center whitespace-nowrap bg-blue-50 border border-blue-200 rounded-full px-2 py-0.5">Dekade 1990-an</div>
                        <div class="w-12 h-12 rounded-full bg-blue-600 border-4 border-white shadow-lg flex items-center justify-center z-10 text-white font-bold text-base relative">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                        <div class="w-0.5 h-5 bg-slate-300 my-1"></div>
                        <div class="bg-white border border-slate-200 rounded-2xl p-4 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 w-full">
                            <div class="text-[10px] text-slate-500 font-semibold mb-1 uppercase tracking-wider">Standardisasi Lab</div>
                            <h3 class="text-sm font-bold text-[#0B2A4A] mb-2 font-heading leading-snug">Perintisan Laboratorium &amp; Kurikulum</h3>
                            <p class="text-slate-600 text-[11px] leading-relaxed mb-3">Kurikulum Konsorsium Keteknikan Nasional. Lab Uji Bahan &amp; Mekanika Tanah pertama di Priangan Timur.</p>
                        </div>
                    </div>

                    <!-- Milestone 3: 2000-an -->
                    <div class="flex flex-col items-center w-56 sm:w-64 relative px-3">
                        <div class="text-[11px] font-black text-emerald-700 mb-2 text-center whitespace-nowrap bg-emerald-50 border border-emerald-200 rounded-full px-2 py-0.5">Dekade 2000-an</div>
                        <div class="w-12 h-12 rounded-full bg-emerald-500 border-4 border-white shadow-lg flex items-center justify-center z-10 text-white font-bold text-base relative">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="w-0.5 h-5 bg-slate-300 my-1"></div>
                        <div class="bg-white border border-slate-200 rounded-2xl p-4 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 w-full">
                            <div class="text-[10px] text-slate-500 font-semibold mb-1 uppercase tracking-wider">Pengakuan Nasional</div>
                            <h3 class="text-sm font-bold text-[#0B2A4A] mb-2 font-heading leading-snug">Akreditasi BAN-PT &amp; Prestasi Mahasiswa</h3>
                            <p class="text-slate-600 text-[11px] leading-relaxed mb-3">Akreditasi resmi BAN-PT. Mahasiswa berprestasi kompetisi jembatan, karya ilmiah, dan pengabdian kebencanaan Jawa Barat.</p>
                        </div>
                    </div>

                    <!-- Milestone 4: 2014 (Tonggak Penegerian) -->
                    <div class="flex flex-col items-center w-56 sm:w-64 relative px-3">
                        <div class="text-[11px] font-black text-amber-700 mb-2 text-center whitespace-nowrap bg-amber-100 border border-amber-400 rounded-full px-2 py-0.5">2 April 2014</div>
                        <div class="w-14 h-14 rounded-full bg-amber-400 border-4 border-white shadow-2xl flex items-center justify-center z-10 text-[#0B2A4A] font-extrabold text-xl animate-pulse relative -mt-1">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="w-0.5 h-4 bg-amber-300 my-1"></div>
                        <div class="bg-gradient-to-br from-[#0B2A4A] via-[#0d345c] to-[#124275] text-white rounded-2xl p-4 shadow-2xl border-2 border-amber-400/50 hover:-translate-y-1 transition-all duration-300 w-full">
                            <div class="text-[10px] text-amber-300 font-bold mb-1 uppercase tracking-wider">Tonggak Bersejarah</div>
                            <h3 class="text-sm font-black text-white mb-2 font-heading leading-snug">Penegerian UNSIL Menjadi PTN</h3>
                            <p class="text-slate-200 text-[11px] leading-relaxed mb-3">Perpres RI No. 24 Tahun 2014 oleh Presiden SBY. UNSIL resmi menjadi PTN — fasilitas, riset &amp; kuota nasional melonjak drastis.</p>
                        </div>
                    </div>

                    <!-- Milestone 5: 2019 -->
                    <div class="flex flex-col items-center w-56 sm:w-64 relative px-3">
                        <div class="text-[11px] font-black text-indigo-700 mb-2 text-center whitespace-nowrap bg-indigo-50 border border-indigo-200 rounded-full px-2 py-0.5">Tahun 2019</div>
                        <div class="w-12 h-12 rounded-full bg-indigo-600 border-4 border-white shadow-lg flex items-center justify-center z-10 text-white font-bold text-base relative">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div class="w-0.5 h-5 bg-slate-300 my-1"></div>
                        <div class="bg-white border border-slate-200 rounded-2xl p-4 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 w-full">
                            <div class="text-[10px] text-slate-500 font-semibold mb-1 uppercase tracking-wider">Fasilitas Baru</div>
                            <h3 class="text-sm font-bold text-[#0B2A4A] mb-2 font-heading leading-snug">Kampus 2 Mugarsari &amp; Labtek Terpadu</h3>
                            <p class="text-slate-600 text-[11px] leading-relaxed mb-3">Gedung perkuliahan &amp; Labtek terpadu di Mugarsari, Tamansari, Tasikmalaya — peralatan uji modern berstandar SNI.</p>
                        </div>
                    </div>

                    <!-- Milestone 6: 2023 - Kini -->
                    <div class="flex flex-col items-center w-56 sm:w-64 relative px-3">
                        <div class="text-[11px] font-black text-[#0B2A4A] mb-2 text-center whitespace-nowrap bg-amber-100 border border-amber-400 rounded-full px-2 py-0.5">2023 — Kini</div>
                        <div class="w-12 h-12 rounded-full bg-[#0B2A4A] border-4 border-amber-400 shadow-xl flex items-center justify-center z-10 text-amber-400 font-bold text-base relative">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="w-0.5 h-5 bg-amber-300 my-1"></div>
                        <div class="bg-gradient-to-br from-white to-amber-50/50 border border-amber-300 rounded-2xl p-4 shadow-xl hover:-translate-y-1 transition-all duration-300 w-full">
                            <div class="text-[10px] text-amber-700 font-bold mb-1 uppercase tracking-wider">Visi 2030</div>
                            <h3 class="text-sm font-bold text-[#0B2A4A] mb-2 font-heading leading-snug">LAM Teknik &amp; Kurikulum OBE</h3>
                            <p class="text-slate-700 text-[11px] leading-relaxed mb-3">Akreditasi <strong>"Baik Sekali"</strong> LAM Teknik. OBE, MBKM dengan BUMN Karya &amp; PUPR, riset NCKU Taiwan menuju akreditasi IABEE.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
