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
                            Kebutuhan mendesak akan tenaga ahli rekayasa infrastruktur di kawasan Priangan Timurâ€”yang mencakup Tasikmalaya, Ciamis, Garut, Banjar, dan Pangandaranâ€”menjadi latar belakang historis berdirinya pendidikan teknik di Universitas Siliwangi. Para pendiri universitas yang diprakarsai oleh pejuang dan tokoh Kodam Siliwangi memandang penting hadirnya institusi keteknikan yang sanggup menjawab tantangan pembangunan fisik daerah.
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
                        <div class="relative h-60 sm:h-72 overflow-hidden">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" 
                                 alt="Tugu Fakultas Teknik Universitas Siliwangi" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/80 via-transparent to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-amber-400 text-[#0B2A4A] text-xs font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                                Landmark FT UNSIL
                            </span>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h4 class="font-bold text-base sm:text-lg leading-snug">Gedung &amp; Tugu Fakultas Teknik</h4>
                                <p class="text-xs text-slate-200 mt-0.5">Pusat Pembelajaran &amp; Riset Rekayasa Sipil</p>
                            </div>
                        </div>
                        <div class="p-5 bg-gradient-to-br from-white to-slate-50 text-xs text-slate-600 leading-relaxed border-t border-slate-100">
                            <i class="fa-solid fa-circle-info text-blue-600 mr-1.5"></i>
                            Tugu Fakultas Teknik Universitas Siliwangi berdiri tegak sebagai simbol semangat perjuangan insinyur muda berjiwa Ksatria Siliwangi.
                        </div>
                    </div>

                    <!-- Card Landasan Hukum & Milestone Resmi -->
                    <div class="bg-[#0B2A4A] text-white rounded-3xl p-6 sm:p-7 shadow-xl border border-blue-900 relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none"
                             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 180px auto;"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="w-10 h-10 rounded-xl bg-amber-400 text-[#0B2A4A] flex items-center justify-center text-lg font-bold shadow-md">
                                    <i class="fa-solid fa-scroll"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-base text-white">Landasan Hukum Institusi</h4>
                                    <span class="text-xs text-amber-400">Legalitas &amp; Status Resmi</span>
                                </div>
                            </div>

                            <div class="space-y-3.5 text-xs">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10">
                                    <i class="fa-solid fa-file-signature text-amber-400 mt-1"></i>
                                    <div>
                                        <div class="font-bold text-white">SK Pendirian Fakultas &amp; Prodi</div>
                                        <div class="text-slate-300 mt-0.5">No. 05/Kep/I-1/YUS/1984 &bull; 31 Desember 1984</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10">
                                    <i class="fa-solid fa-landmark-flag text-amber-400 mt-1"></i>
                                    <div>
                                        <div class="font-bold text-white">Izin Operasional Dirjen Dikti</div>
                                        <div class="text-slate-300 mt-0.5">SK Dirjen Dikti Depdikbud No. 0389/0/1986</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10">
                                    <i class="fa-solid fa-building-columns text-amber-400 mt-1"></i>
                                    <div>
                                        <div class="font-bold text-white">Penegerian Menjadi PTN</div>
                                        <div class="text-slate-300 mt-0.5">Peraturan Presiden RI No. 24 Tahun 2014 &bull; 2 April 2014</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10">
                                    <i class="fa-solid fa-certificate text-amber-400 mt-1"></i>
                                    <div>
                                        <div class="font-bold text-white">Akreditasi Program Studi</div>
                                        <div class="text-amber-300 font-medium mt-0.5">Peringkat &ldquo;Baik Sekali&rdquo; &bull; LAM Teknik</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Lokasi Kampus 2 -->
                    <div class="bg-white rounded-3xl p-6 shadow-md border border-slate-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0B2A4A] flex items-center justify-center text-lg">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Pusat Perkuliahan &amp; Laboratorium</h4>
                                <span class="text-xs text-blue-700 font-semibold">Kampus 2 Mugarsari, Tamansari</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Beralamat di Kelurahan Mugarsari, Kecamatan Tamansari, Kota Tasikmalaya, Jawa Barat 46196. Menampung Gedung Perkuliahan Fakultas Teknik dan Gedung Laboratorium Teknik (Labtek) terpadu seluas ribuan meter persegi.
                        </p>
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

            <!-- Timeline Container: Lebar Proporsional, Dua Sisi di Desktop -->
            <div class="relative max-w-5xl mx-auto">
                
                <!-- Garis Tengah (Hanya di Layar Desktop/Tablet) -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 top-4 bottom-4 w-1 bg-gradient-to-b from-amber-400 via-blue-400 to-[#0B2A4A] rounded-full"></div>

                <!-- Milestone 1: 1984 -->
                <div class="relative flex flex-col md:flex-row md:items-center mb-12 sm:mb-16">
                    <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                        <div class="bg-gradient-to-br from-[#0B2A4A] to-[#123861] text-white rounded-3xl p-6 sm:p-8 shadow-xl border border-blue-900 inline-block w-full hover:-translate-y-1 transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2 md:justify-end">
                                <span class="bg-amber-400 text-[#0B2A4A] text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
                                    31 Desember 1984
                                </span>
                                <span class="text-xs text-slate-300 font-semibold">Fase Perintisan</span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-white mb-2 font-heading">
                                Pendirian Jurusan Teknik Sipil Pertama
                            </h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-4">
                                Berdiri resmi berdasarkan SK Yayasan Pembina Universitas Siliwangi No. 05/Kep/I-1/YUS/1984. Menjadi program studi rekayasa perdana di lingkungan Fakultas Teknik untuk mencetak insinyur sipil di Priangan Timur.
                            </p>
                            <div class="pt-3 border-t border-white/10 flex items-center gap-2 text-[11px] text-amber-300 md:justify-end">
                                <i class="fa-solid fa-map-pin"></i> Kampus 1 Jl. Siliwangi No. 24 Tasikmalaya
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lingkaran Marker Tengah -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-amber-400 border-4 border-white shadow-lg items-center justify-center z-10 text-[#0B2A4A] font-bold text-base order-1 md:order-2">
                        <i class="fa-solid fa-flag"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12 order-1 md:order-3"></div>
                </div>

                <!-- Milestone 2: 1990-an -->
                <div class="relative flex flex-col md:flex-row md:items-center mb-12 sm:mb-16">
                    <div class="md:w-1/2 md:pr-12 order-2 md:order-1"></div>
                    
                    <!-- Lingkaran Marker Tengah -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-blue-600 border-4 border-white shadow-lg items-center justify-center z-10 text-white font-bold text-base">
                        <i class="fa-solid fa-flask"></i>
                    </div>

                    <div class="md:w-1/2 md:pl-12 order-1 md:order-2">
                        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-blue-100 text-blue-800 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
                                    Dekade 1990-an
                                </span>
                                <span class="text-xs text-slate-500 font-semibold">Standardisasi Lab</span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] mb-2 font-heading">
                                Perintisan Laboratorium &amp; Kurikulum Konsorsium
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Menyesuaikan kurikulum dengan Konsorsium Keteknikan Nasional. Mengoperasikan Laboratorium Uji Bahan dan Mekanika Tanah pertama di kawasan Priangan Timur guna menunjang praktikum dan uji mutu konstruksi daerah.
                            </p>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-2 text-[11px] text-blue-700 font-medium">
                                <i class="fa-solid fa-check-circle"></i> Mitra Dinas PU &amp; Kontraktor Daerah
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Milestone 3: 2000-an -->
                <div class="relative flex flex-col md:flex-row md:items-center mb-12 sm:mb-16">
                    <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 inline-block w-full">
                            <div class="flex items-center gap-2 mb-2 md:justify-end">
                                <span class="bg-emerald-100 text-emerald-800 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
                                    Dekade 2000-an
                                </span>
                                <span class="text-xs text-slate-500 font-semibold">Pengakuan Nasional</span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] mb-2 font-heading">
                                Akreditasi Nasional BAN-PT &amp; Prestasi Mahasiswa
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Meraih status akreditasi resmi dari BAN-PT. Mahasiswa mulai aktif menorehkan prestasi kompetisi rancang jembatan, karya ilmiah, serta pengabdian mitigasi kebencanaan di berbagai penjuru Jawa Barat.
                            </p>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-2 text-[11px] text-emerald-700 font-medium md:justify-end">
                                <i class="fa-solid fa-trophy"></i> Himpunan Mahasiswa Sipil (HMS) Berprestasi
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lingkaran Marker Tengah -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-emerald-500 border-4 border-white shadow-lg items-center justify-center z-10 text-white font-bold text-base">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12 order-1 md:order-3"></div>
                </div>

                <!-- Milestone 4: 2014 (Tonggak Penegerian) -->
                <div class="relative flex flex-col md:flex-row md:items-center mb-12 sm:mb-16">
                    <div class="md:w-1/2 md:pr-12 order-2 md:order-1"></div>
                    
                    <!-- Lingkaran Marker Tengah -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-14 h-14 rounded-full bg-amber-400 border-4 border-white shadow-2xl items-center justify-center z-10 text-[#0B2A4A] font-extrabold text-xl animate-pulse">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="md:w-1/2 md:pl-12 order-1 md:order-2">
                        <div class="bg-gradient-to-br from-[#0B2A4A] via-[#0d345c] to-[#124275] text-white rounded-3xl p-6 sm:p-8 shadow-2xl border-2 border-amber-400/50 hover:-translate-y-1 transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-amber-400 text-[#0B2A4A] text-xs font-black px-3.5 py-1.5 rounded-full uppercase tracking-wider shadow">
                                    2 April 2014
                                </span>
                                <span class="text-xs text-amber-300 font-bold">Tonggak Bersejarah</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-black text-white mb-2 font-heading">
                                Penegerian UNSIL Menjadi PTN
                            </h3>
                            <p class="text-slate-200 text-xs sm:text-sm leading-relaxed mb-4">
                                Melalui <strong>Peraturan Presiden RI Nomor 24 Tahun 2014</strong> yang diteken oleh Presiden RI Susilo Bambang Yudhoyono, Universitas Siliwangi resmi bertransformasi menjadi Perguruan Tinggi Negeri. Akselerasi fasilitas, riset dosen doktor, dan kuota seleksi nasional melonjak drastis.
                            </p>
                            <div class="pt-3 border-t border-white/15 flex items-center gap-2 text-xs text-amber-300 font-semibold">
                                <i class="fa-solid fa-stamp"></i> Perpres No. 24/2014 &bull; Di Bawah Kemendikbudristek
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Milestone 5: 2019 -->
                <div class="relative flex flex-col md:flex-row md:items-center mb-12 sm:mb-16">
                    <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 inline-block w-full">
                            <div class="flex items-center gap-2 mb-2 md:justify-end">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
                                    Tahun 2019
                                </span>
                                <span class="text-xs text-slate-500 font-semibold">Fasilitas Baru</span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] mb-2 font-heading">
                                Pemusatan Perkuliahan &amp; Labtek di Kampus 2 Mugarsari
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Fakultas Teknik membangun dan mengoperasikan kompleks gedung perkuliahan serta Gedung Laboratorium Teknik (Labtek) terpadu di Kampus 2 Mugarsari, Tamansari, Kota Tasikmalaya dengan peralatan uji modern berstandar SNI.
                            </p>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-2 text-[11px] text-indigo-700 font-medium md:justify-end">
                                <i class="fa-solid fa-compass-drafting"></i> 6 Laboratorium Terpadu Kampus 2
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lingkaran Marker Tengah -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-indigo-600 border-4 border-white shadow-lg items-center justify-center z-10 text-white font-bold text-base">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12 order-1 md:order-3"></div>
                </div>

                <!-- Milestone 6: 2023 - Kini -->
                <div class="relative flex flex-col md:flex-row md:items-center">
                    <div class="md:w-1/2 md:pr-12 order-2 md:order-1"></div>
                    
                    <!-- Lingkaran Marker Tengah -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-[#0B2A4A] border-4 border-amber-400 shadow-xl items-center justify-center z-10 text-amber-400 font-bold text-base">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <div class="md:w-1/2 md:pl-12 order-1 md:order-2">
                        <div class="bg-gradient-to-br from-white to-amber-50/50 border border-amber-300 rounded-3xl p-6 sm:p-8 shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-[#0B2A4A] text-amber-400 text-xs font-black px-3.5 py-1 rounded-full uppercase tracking-wider">
                                    2023 &mdash; Kini
                                </span>
                                <span class="text-xs text-amber-700 font-bold">Visi 2030</span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] mb-2 font-heading">
                                Akreditasi LAM Teknik &amp; Penerapan Kurikulum OBE
                            </h3>
                            <p class="text-slate-700 text-xs sm:text-sm leading-relaxed mb-4">
                                Meraih akreditasi <strong>&ldquo;Baik Sekali&rdquo;</strong> dari Lembaga Akreditasi Mandiri Teknik (LAM Teknik). Menerapkan kurikulum <em>Outcome-Based Education</em> (OBE), MBKM dengan BUMN Karya &amp; PUPR, serta riset internasional (NCKU Taiwan, dsb.) menuju akreditasi IABEE.
                            </p>
                            <div class="pt-3 border-t border-amber-200/80 flex items-center gap-2 text-xs text-amber-800 font-semibold">
                                <i class="fa-solid fa-certificate text-amber-600"></i> Akreditasi LAM Teknik &bull; Visi Pusat Unggulan 2030
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Section 3: Nilai Dasar & Karakter Siliwangi -->
    <section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="text-amber-600 font-bold uppercase text-xs tracking-widest block">Identitas &amp; Nilai Luhur</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0B2A4A] mt-2 font-heading">
                    Karakter Keinsinyuran Ksatria Siliwangi
                </h2>
                <div class="w-16 h-1 bg-amber-400 mx-auto mt-3 mb-4 rounded-full"></div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Setiap lulusan Teknik Sipil Universitas Siliwangi dibekali dengan tiga pilar nilai utama yang menjadi pembeda di dunia profesional dan industri konstruksi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <!-- Pilar 1 -->
                <div class="bg-white rounded-3xl p-7 shadow-md border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-5 shadow-sm">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0B2A4A] mb-2 font-heading">Berwawasan Kebangsaan</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Menjiwai patriotisme Siliwangi, menjunjung tinggi integritas moral, etika profesi insinyur, dan komitmen mengutamakan keselamatan publik dalam setiap perancangan infrastruktur.
                    </p>
                </div>

                <!-- Pilar 2 -->
                <div class="bg-white rounded-3xl p-7 shadow-md border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-5 shadow-sm">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0B2A4A] mb-2 font-heading">Berkarakter Wirausaha</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Memiliki jiwa mandiri, adaptif, kreatif dalam menyelesaikan problem rekayasa, serta mampu memimpin usaha jasa konstruksi dan konsultan perencana berbasis teknologi mutakhir.
                    </p>
                </div>

                <!-- Pilar 3 -->
                <div class="bg-white rounded-3xl p-7 shadow-md border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-5 shadow-sm">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0B2A4A] mb-2 font-heading">Rekayasa Berkelanjutan</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Mengedepankan prinsip keberlanjutan lingkungan (<em>green engineering</em>), efisiensi sumber daya material, dan ketahanan struktur terhadap ancaman gempa bumi dan bencana hidrometeorologi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Navigasi Tautan Terkait (CTA) -->
    <section class="py-14 bg-gradient-to-r from-[#0B2A4A] to-[#123861] text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold font-heading text-white">
                Kenali Lebih Dekat Program Studi Teknik Sipil UNSIL
            </h3>
            <p class="text-slate-300 text-xs sm:text-sm mt-2 max-w-2xl mx-auto">
                Pelajari pedoman visi ke depan, susunan kurikulum 144 SKS, laboratorium terpadu, dan profil staf pengajar kami.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 mt-7">
                <a href="{{ route('visi-misi') }}" 
                   class="px-5 py-3 rounded-xl bg-amber-400 hover:bg-amber-300 text-[#0B2A4A] font-bold text-xs uppercase tracking-wider transition-all duration-200 shadow-md">
                    <i class="fa-solid fa-eye mr-1.5"></i> Visi &amp; Misi 2030
                </a>
                <a href="{{ route('dosen') }}" 
                   class="px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider border border-white/20 transition-all duration-200">
                    <i class="fa-solid fa-user-tie mr-1.5"></i> Profil 27 Dosen
                </a>
                <a href="{{ route('fasilitas') }}" 
                   class="px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider border border-white/20 transition-all duration-200">
                    <i class="fa-solid fa-building-columns mr-1.5"></i> Fasilitas Kampus 2
                </a>
                <a href="{{ route('kurikulum') }}" 
                   class="px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider border border-white/20 transition-all duration-200">
                    <i class="fa-solid fa-book-bookmark mr-1.5"></i> Kurikulum 5 KBK
                </a>
            </div>
        </div>
    </section>
@endsection

