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
                        <p class="text-slate-400 italic">
                            Konten narasi sejarah akan diperbarui dengan data resmi dari Program Studi.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: Visual Showcase & Dasar Hukum (5 Kolom) -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Foto Tugu & Gedung Kebanggaan -->
                    <div class="bg-white rounded-lg overflow-hidden border border-slate-200">
                        <div class="relative h-60 sm:h-72 overflow-hidden">
                            <img src="{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}" 
                                 alt="Tugu Fakultas Teknik Universitas Siliwangi" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/70 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h4 class="font-bold text-base sm:text-lg leading-snug">Gedung &amp; Tugu Fakultas Teknik</h4>
                                <p class="text-xs text-slate-200 mt-0.5">Pusat Pembelajaran &amp; Riset Rekayasa Sipil</p>
                            </div>
                        </div>
                        <div class="p-4 text-xs text-slate-600 leading-relaxed border-t border-slate-100">
                            <i class="fa-solid fa-circle-info text-slate-400 mr-1.5"></i>
                            Tugu Fakultas Teknik Universitas Siliwangi berdiri tegak sebagai simbol semangat perjuangan insinyur muda berjiwa Ksatria Siliwangi.
                        </div>
                    </div>

                    <!-- Card Lokasi Kampus 2 -->
                    <div class="bg-white rounded-lg p-6 border border-slate-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-9 h-9 rounded-md bg-slate-100 text-[#0B2A4A] flex items-center justify-center text-base">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Pusat Perkuliahan &amp; Laboratorium</h4>
                                <span class="text-xs text-blue-700 font-semibold">Kampus 2 Mugarsari, Tamansari</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Kampus 2 Mugarsari, Tamansari, Kota Tasikmalaya, Jawa Barat.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Garis Waktu Perjalanan (Milestone Timeline Modern & Proporsional) -->
    <section class="py-16 sm:py-24 bg-white border-t border-slate-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mx-auto text-center mb-16 sm:mb-20">
                <span class="text-[#0070BA] font-medium text-xs block">Garis Waktu</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0B2A4A] mt-2 font-heading">
                    Tonggak Perjalanan &amp; Prestasi (1984 &mdash; Kini)
                </h2>
                <div class="w-12 h-0.5 bg-[#0B2A4A] mx-auto mt-3 mb-4"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Setiap babak menandai konsistensi dan dedikasi civitas akademika Teknik Sipil UNSIL dalam memajukan ilmu keteknikan dan mengabdi untuk bangsa.
                </p>
            </div>

            <!-- Grid Garis Waktu: Kiri & Kanan Sejajar (2 Kolom) -->
            <div class="max-w-5xl mx-auto">
                <p class="text-slate-400 italic text-sm text-center">
                    Konten garis waktu akan diperbarui dengan data resmi dari Program Studi.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 3: Nilai Dasar & Karakter Siliwangi -->
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="text-[#0070BA] font-medium text-xs block">Identitas &amp; Nilai</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] mt-2 font-heading">
                    Karakter Keinsinyuran Ksatria Siliwangi
                </h2>
                <div class="w-12 h-0.5 bg-[#0B2A4A] mx-auto mt-3 mb-4"></div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Setiap lulusan Teknik Sipil Universitas Siliwangi dibekali dengan tiga pilar nilai utama yang menjadi pembeda di dunia profesional dan industri konstruksi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <!-- Pilar 1 -->
                <div class="bg-white rounded-lg p-6 border border-slate-200 hover:border-slate-300 transition">
                    <div class="w-10 h-10 rounded-md bg-slate-100 text-[#0B2A4A] flex items-center justify-center text-lg mb-4">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0B2A4A] mb-2 font-heading">Berwawasan Kebangsaan</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Menjiwai patriotisme Siliwangi, menjunjung tinggi integritas moral, etika profesi insinyur, dan komitmen mengutamakan keselamatan publik dalam setiap perancangan infrastruktur.
                    </p>
                </div>

                <!-- Pilar 2 -->
                <div class="bg-white rounded-lg p-6 border border-slate-200 hover:border-slate-300 transition">
                    <div class="w-10 h-10 rounded-md bg-slate-100 text-[#0B2A4A] flex items-center justify-center text-lg mb-4">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0B2A4A] mb-2 font-heading">Berkarakter Wirausaha</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Memiliki jiwa mandiri, adaptif, kreatif dalam menyelesaikan problem rekayasa, serta mampu memimpin usaha jasa konstruksi dan konsultan perencana berbasis teknologi mutakhir.
                    </p>
                </div>

                <!-- Pilar 3 -->
                <div class="bg-white rounded-lg p-6 border border-slate-200 hover:border-slate-300 transition">
                    <div class="w-10 h-10 rounded-md bg-slate-100 text-[#0B2A4A] flex items-center justify-center text-lg mb-4">
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
    <section class="py-14 bg-[#0B2A4A] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold font-heading text-white">
                Kenali Lebih Dekat Program Studi Teknik Sipil UNSIL
            </h3>
            <p class="text-slate-300 text-xs sm:text-sm mt-2 max-w-2xl mx-auto">
                Pelajari pedoman visi ke depan, susunan kurikulum, laboratorium terpadu, dan profil staf pengajar kami.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 mt-7">
                <a href="{{ route('visi-misi') }}" 
                   class="px-5 py-3 rounded-lg bg-amber-400 hover:bg-amber-300 text-[#0B2A4A] font-bold text-xs transition">
                    <i class="fa-solid fa-eye mr-1.5"></i> Visi &amp; Misi
                </a>
                <a href="{{ route('dosen') }}" 
                   class="px-5 py-3 rounded-lg bg-white/10 hover:bg-white/20 text-white font-medium text-xs border border-white/20 transition">
                    <i class="fa-solid fa-user-tie mr-1.5"></i> Profil Dosen
                </a>
                <a href="{{ route('fasilitas') }}" 
                   class="px-5 py-3 rounded-lg bg-white/10 hover:bg-white/20 text-white font-medium text-xs border border-white/20 transition">
                    <i class="fa-solid fa-building-columns mr-1.5"></i> Fasilitas Kampus 2
                </a>
                <a href="{{ route('kurikulum') }}" 
                   class="px-5 py-3 rounded-lg bg-white/10 hover:bg-white/20 text-white font-medium text-xs border border-white/20 transition">
                    <i class="fa-solid fa-book-bookmark mr-1.5"></i> Kurikulum
                </a>
            </div>
        </div>
    </section>
@endsection

