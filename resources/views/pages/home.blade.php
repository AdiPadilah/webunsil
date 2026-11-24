@extends('layouts.app')

@section('title', 'Beranda | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Website Resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya. Akreditasi BAIK LAM Teknik.')

@section('content')
    
    <section id="beranda" class="hero-banner relative min-h-[560px] lg:min-h-[640px] flex items-center py-20 lg:py-28 border-b border-slate-800 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="max-w-2xl lg:max-w-3xl space-y-4">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white font-heading tracking-tight leading-tight drop-shadow-lg">
                    Program Studi<br><span class="text-amber-400">Teknik Sipil</span>
                </h1>

                <p class="text-xl sm:text-2xl text-slate-100 font-bold drop-shadow-md pb-1">
                    Fakultas Teknik Universitas Siliwangi
                </p>

                <p class="text-slate-100 text-base sm:text-lg leading-relaxed text-justify sm:text-left font-normal pt-2 drop-shadow-md max-w-2xl">
                    Mengembangkan ilmu pengetahuan, teknologi, dan inovasi untuk menjawab tantangan di bidang infrastruktur, teknologi, dan lingkungan. Menghadirkan gagasan, penelitian, dan karya rekayasa yang mendorong terciptanya infrastruktur yang tangguh, cerdas, dan berkelanjutan.
                </p>
            </div>
        </div>
    </section>

    
    {{-- Section Sejarah Singkat --}}
    <section class="py-14 lg:py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                
                <div>
                    <div class="rounded-xl overflow-hidden shadow-md bg-slate-100">
                        <img src="{{ asset('images/sejarah-singkat-beranda.jpg') }}?v={{ time() }}" 
                             alt="Sejarah Singkat Program Studi S-1 Teknik Sipil FT UNSIL" 
                             class="w-full h-auto object-cover">
                    </div>
                </div>

                <div class="space-y-4">
                    <p class="text-[#0070BA] font-semibold text-sm uppercase tracking-wide">
                        Sejarah Singkat
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading leading-snug">
                        Empat Dekade Teknik Sipil FT UNSIL Membangun Infrastruktur dan Peradaban Bangsa
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-[15px] leading-relaxed">
                        Berdiri sejak 31 Desember 1984 di bawah naungan Yayasan Universitas Siliwangi dan resmi bertransformasi menjadi Perguruan Tinggi Negeri (PTN) melalui Perpres RI No. 24 Tahun 2014, Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi telah mencetak lebih dari 3.500 alumni yang berkiprah di sektor konstruksi nasional maupun internasional.
                    </p>

                    <p class="text-slate-600 text-sm sm:text-[15px] leading-relaxed">
                        Kini berpusat di Kampus 2 Mugarsari dengan fasilitas 6 laboratorium modern terakreditasi LAM Teknik, kami berkomitmen menyelenggarakan pendidikan tinggi keteknikan yang unggul berbasis <em>Outcome-Based Education</em> (OBE), adaptif terhadap perkembangan teknologi terapan, dan berjiwa wirausaha kebangsaan.
                    </p>

                    <div class="pt-1">
                        <a href="{{ route('sejarah') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-sm font-semibold rounded-lg transition">
                            Baca Selengkapnya
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Statistik --}}
    <section class="py-10 bg-[#0B2A4A] border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
                <div class="text-center py-3">
                    <span class="block text-3xl sm:text-4xl font-bold text-amber-400 counter-num" data-target="6">6</span>
                    <span class="block text-xs font-medium text-slate-300 mt-1">Laboratorium</span>
                </div>
                <div class="text-center py-3">
                    <span class="block text-3xl sm:text-4xl font-bold text-amber-400 counter-num" data-target="27">27</span>
                    <span class="block text-xs font-medium text-slate-300 mt-1">Dosen Tetap</span>
                </div>
                <div class="text-center py-3">
                    <span class="block text-3xl sm:text-4xl font-bold text-amber-400 counter-num" data-target="5">5</span>
                    <span class="block text-xs font-medium text-slate-300 mt-1">Bidang Keahlian</span>
                </div>
                <div class="text-center py-3">
                    <span class="block text-3xl sm:text-4xl font-bold text-amber-400 counter-num" data-target="1200">1.200+</span>
                    <span class="block text-xs font-medium text-slate-300 mt-1">Mahasiswa Aktif</span>
                </div>
                <div class="text-center py-3">
                    <span class="block text-3xl sm:text-4xl font-bold text-amber-400 counter-num" data-target="3500">3.500+</span>
                    <span class="block text-xs font-medium text-slate-300 mt-1">Alumni</span>
                </div>
                <div class="text-center py-3">
                    <span class="block text-3xl sm:text-4xl font-bold text-amber-400 counter-num" data-target="40">40</span>
                    <span class="block text-xs font-medium text-slate-300 mt-1">Tahun Berdiri</span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-14 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
                
                
                <div class="lg:col-span-8 space-y-10">
                    
                    
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading mb-5">
                            Program Studi Teknik Sipil
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Capaian Pembelajaran Lulusan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1541888946425-d0fbb18615f8?q=80&w=600'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Capaian Pembelajaran Lulusan
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Capaian Pembelajaran Lulusan mahasiswa Program Studi Teknik Sipil Universitas Siliwangi.
                                    </p>
                                    <a href="{{ route('kurikulum') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>

                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Profil Profesional Mandiri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Profil Profesional Mandiri
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Cerminan pencapaian kualitas yang diharapkan dari lulusan Teknik Sipil UNSIL.
                                    </p>
                                    <a href="{{ route('visi-misi') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>

                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Prestasi Mahasiswa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/event-2.jpg') }}'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Prestasi Mahasiswa
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Prestasi dan capaian membanggakan mahasiswa Teknik Sipil di tingkat nasional dan regional.
                                    </p>
                                    <a href="{{ route('prestasi-mahasiswa') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                                Kegiatan Mahasiswa
                            </h2>
                            <div class="flex items-center space-x-2">
                                <a href="https://instagram.com/hmsftunsil" target="_blank" class="inline-flex items-center text-xs font-semibold text-slate-600 hover:text-pink-600 gap-1 transition">
                                    <i class="fa-brands fa-instagram text-sm"></i> @hmsftunsil
                                </a>
                                <span class="text-slate-300">|</span>
                                <a href="https://instagram.com/sipilunsil" target="_blank" class="inline-flex items-center text-xs font-semibold text-slate-600 hover:text-pink-600 gap-1 transition">
                                    <i class="fa-brands fa-instagram text-sm"></i> @sipilunsil
                                </a>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/event-1.jpg') }}" alt="Kompetisi Jembatan Nasional SCIENCE" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?q=80&w=600'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        SCIENCE: Bridge Competition
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Ajang tahunan bergengsi National Bridge Design Competition & Lomba Kuat Tekan Beton.
                                    </p>
                                    <a href="{{ route('mahasiswa-alumni') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>

                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Himpunan Mahasiswa Sipil FT UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=600'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Organisasi HMS FT UNSIL
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Wadah pengembangan kepemimpinan, keprofesian, dan solidaritas mahasiswa Teknik Sipil UNSIL.
                                    </p>
                                    <a href="{{ route('mahasiswa-alumni') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>

                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan NCKU" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="p-4">
                                    <span class="text-[11px] font-semibold text-slate-400">12 Oktober 2026</span>
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug mt-0.5">
                                        Seminar Internasional Indonesia-Taiwan
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        "Bridging Futures" — Peluang studi S2 & S3 di Taiwan bersama Yanuar Haryanto, Ph.D. dari NCKU.
                                    </p>
                                    <a href="{{ route('berita.seminar-taiwan') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
                            <div>
                                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                                    Fasilitas Laboratorium
                                </h2>
                            </div>
                            <a href="{{ route('fasilitas') }}" class="text-xs font-semibold text-[#0070BA] hover:underline self-start sm:self-auto">
                                Lihat 6 Laboratorium →
                            </a>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Laboratorium Bahan Konstruksi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/event-1.jpg') }}'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Lab. Teknologi Bahan Konstruksi
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Uji mutu kuat tekan beton, tarik baja tulangan, agregat, dan material konstruksi.
                                    </p>
                                    <a href="{{ route('fasilitas') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>

                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Laboratorium Mekanika Tanah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Lab. Mekanika Tanah & Geoteknik
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Penyelidikan tanah lapangan, analisis daya dukung fondasi, dan kestabilan lereng.
                                    </p>
                                    <a href="{{ route('fasilitas') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>

                            
                            <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200 bg-white group">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/gedung-unsil.jpg') }}" alt="Studio Komputasi dan BIM" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ asset('images/event-3.jpg') }}'">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-bold text-slate-900 leading-snug">
                                        Studio Komputasi & BIM
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                                        Pemodelan struktur SAP2000, ETABS, perancangan CAD, dan Building Information Modeling.
                                    </p>
                                    <a href="{{ route('fasilitas') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline mt-3">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="lg:col-span-4 space-y-8 lg:pl-2">
                    
                    
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-2xl font-bold text-[#0B2A4A] font-heading">
                                Agenda
                            </h2>
                        </div>
                        
                        
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-200 group">
                            <div class="overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Workshop OBE" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-4 space-y-3">
                                <div>
                                    <span class="text-[11px] font-semibold text-slate-400 block mb-1">27 November 2026</span>
                                    <h4 class="text-sm font-bold text-slate-900 leading-snug">
                                        Workshop Penguatan Kurikulum Teknik Sipil Berbasis OBE
                                    </h4>
                                </div>
                                <div class="text-xs text-slate-500 space-y-1 pt-1 border-t border-slate-100">
                                    <p><strong>Narasumber:</strong> Dr. Eng. Ir. Halwan Alfisa S., ST., MT., IPU. (UNS)</p>
                                    <p>Jum'at, 27 Nov 2026 · 08.00 WIB s.d. Selesai</p>
                                    <p>Kampus 2 Universitas Siliwangi</p>
                                </div>
                                <a href="{{ route('berita.workshop-obe') }}" class="inline-block text-xs font-semibold text-[#0070BA] hover:underline">
                                    Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-2xl font-bold text-[#0B2A4A] font-heading">
                                Berita
                            </h2>
                            <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                Semua →
                            </a>
                        </div>

                        <div class="space-y-4">
                            
                            <article class="flex items-start gap-3 group">
                                <a href="{{ route('berita.seminar-hasil-uns') }}" class="w-24 flex-shrink-0 rounded-lg overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-2.jpg') }}" alt="Seminar Hasil Disertasi UNS" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </a>
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">29 Oktober 2026</span>
                                    <h3 class="text-xs sm:text-sm font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                        <a href="{{ route('berita.seminar-hasil-uns') }}">Dosen Teknik Sipil UNSIL Penguji Eksternal Seminar Hasil Disertasi di FT UNS</a>
                                    </h3>
                                </div>
                            </article>

                            <article class="flex items-start gap-3 group">
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="w-24 flex-shrink-0 rounded-lg overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Bendungan Leuwikeris" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </a>
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">23 Oktober 2026</span>
                                    <h3 class="text-xs sm:text-sm font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                        <a href="{{ route('berita.kunjungan-leuwikeris') }}">Kunjungan Ilmiah Mahasiswa Sipil ke Bendungan Leuwikeris</a>
                                    </h3>
                                </div>
                            </article>

                            <article class="flex items-start gap-3 group">
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="w-24 flex-shrink-0 rounded-lg overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional Jalan Tol" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </a>
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">20 Oktober 2026</span>
                                    <h3 class="text-xs sm:text-sm font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                        <a href="{{ route('berita.seminar-jalan-tol') }}">Seminar Nasional SCIENCE 2026: Strategi Jalan Tol Berkelanjutan</a>
                                    </h3>
                                </div>
                            </article>

                            <article class="flex items-start gap-3 group">
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="w-24 flex-shrink-0 rounded-lg overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Bridge Design Competition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </a>
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] text-slate-400 block mb-0.5">20 Oktober 2026</span>
                                    <h3 class="text-xs sm:text-sm font-semibold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                        <a href="{{ route('berita.kompetisi-jembatan') }}">Final National Bridge Design Competition SCIENCE 2026</a>
                                    </h3>
                                </div>
                            </article>
                        </div>

                        <div class="mt-5">
                            <a href="{{ route('berita.index') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-lg transition">
                                <span>Lihat Semua Berita</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    
    <section id="lokasi" class="bg-white py-12 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
                <div>
                    <p class="text-amber-600 font-semibold uppercase text-xs tracking-wider">
                        Lokasi Kampus
                    </p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] mt-1 font-heading">
                        UNSIL Kampus 2 Mugarsari &mdash; Fakultas Teknik
                    </h2>
                    <p class="text-slate-500 text-sm mt-1">Universitas Siliwangi, Tasikmalaya, Jawa Barat</p>
                </div>
                <a href="https://maps.app.goo.gl/szSbqfg9FWsZnMc67" target="_blank"
                   class="inline-flex items-center gap-2 bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition whitespace-nowrap self-start md:self-auto">
                    <i class="fa-solid fa-location-arrow text-amber-400"></i>
                    Buka Google Maps
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 rounded-xl overflow-hidden shadow-sm border border-slate-200">
                <div class="lg:col-span-2 h-72 lg:h-[380px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.883726715206!2d108.24907807499997!3d-7.379663392629738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5817bf80530b%3A0x170d075986c8ed42!2sUNIVERSITAS%20SILIWANGI%20-%20KAMPUS%202%20MUGARSARI!5e0!3m2!1sid!2sid!4v1731900000000!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Kampus 2 Universitas Siliwangi Mugarsari - Fakultas Teknik">
                    </iframe>
                </div>

                <div class="bg-slate-50 p-6 flex flex-col justify-between gap-5 border-t lg:border-t-0 lg:border-l border-slate-200">
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin text-[#0070BA] text-sm mt-0.5"></i>
                            <div>
                                <p class="text-[#0B2A4A] font-semibold text-xs uppercase tracking-wide mb-0.5">Alamat</p>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Jl. Mugarsari, Kelurahan Mugarsari, Kec. Tamansari, Kota Tasikmalaya, Jawa Barat 46196
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-envelope text-[#0070BA] text-sm mt-0.5"></i>
                            <div>
                                <p class="text-[#0B2A4A] font-semibold text-xs uppercase tracking-wide mb-0.5">Email</p>
                                <p class="text-slate-600 text-xs">sipil@unsil.ac.id</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-clock text-[#0070BA] text-sm mt-0.5"></i>
                            <div>
                                <p class="text-[#0B2A4A] font-semibold text-xs uppercase tracking-wide mb-0.5">Jam Layanan</p>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Senin &ndash; Jumat &bull; 07.30 &ndash; 16.00 WIB
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-4">
                        <p class="text-slate-500 text-[11px] font-semibold uppercase tracking-wider mb-2">Akses Transportasi</p>
                        <ul class="text-xs text-slate-600 space-y-1">
                            <li>&bull; &plusmn;3 km dari Stasiun Tasikmalaya</li>
                            <li>&bull; &plusmn;1 km dari Terminal Indihiang</li>
                            <li>&bull; Area parkir kendaraan tersedia di dalam kampus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
