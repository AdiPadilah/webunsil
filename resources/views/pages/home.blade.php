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

    
    <div class="h-4 bg-[#0a2038] border-y border-amber-400/30 overflow-hidden relative">
        <div class="absolute inset-0 opacity-25 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 16px;"></div>
    </div>


    
    <section class="py-20 bg-[#0B2A4A] relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.035] bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 240px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <span class="text-amber-400 font-bold uppercase text-xs tracking-widest">IDENTITAS &amp; KEUNGGULAN</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">Profil Program Studi</h2>
                <p class="text-slate-300 mt-3 text-sm max-w-2xl mx-auto leading-relaxed">
                    Pedoman arah pengembangan Tri Dharma Perguruan Tinggi Jurusan Teknik Sipil Universitas Siliwangi.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                
                <div class="bg-white rounded-3xl p-8 shadow-xl relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute inset-0 opacity-[0.12] bg-repeat pointer-events-none"
                         style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 240px auto;"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-9 h-9 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-base">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-black text-slate-900">Visi 2030</h3>
                                <p class="text-xs text-slate-500">Arah &amp; Sasaran Strategis Program Studi</p>
                            </div>
                        </div>

                        <blockquote class="text-slate-800 text-base leading-relaxed italic font-normal bg-slate-50/80 p-6 rounded-2xl border-l-4 border-amber-500 my-4 shadow-sm">
                            "Menjadi pusat keunggulan dalam pengembangan ilmu Teknik Sipil yang berwawasan kebangsaan, berkarakter wirausaha, dan inovatif di tingkat nasional pada tahun 2030."
                        </blockquote>
                    </div>

                    <div class="mt-8 pt-5 border-t border-slate-200 flex justify-between items-center relative z-10">
                        <span class="text-xs text-slate-500 font-semibold uppercase tracking-wide">Program Studi Teknik Sipil UNSIL</span>
                        <a href="{{ route('visi-misi') }}" class="text-xs font-bold text-blue-700 hover:text-amber-600 transition flex items-center gap-1">
                            Lihat Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                
                <div class="bg-white rounded-3xl p-8 shadow-xl relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute inset-0 opacity-[0.12] bg-repeat pointer-events-none"
                         style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 240px auto;"></div>

                    <div class="relative z-10">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-9 h-9 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-base">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-black text-slate-900">Misi Program Studi</h3>
                                <p class="text-xs text-slate-500">Empat Pilar Pelaksanaan Tri Dharma Perguruan Tinggi</p>
                            </div>
                        </div>
                        <ol class="space-y-4">
                            <li class="flex items-start space-x-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">1</span>
                                <p class="text-xs text-slate-700 leading-relaxed">Menyelenggarakan pendidikan dan pembelajaran yang mampu menghasilkan lulusan yang unggul, berwawasan kebangsaan, berjiwa wirausaha dan berinovasi teknologi.</p>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">2</span>
                                <p class="text-xs text-slate-700 leading-relaxed">Melaksanakan penelitian yang berkualitas, inovatif, dan berdaya saing global di bidang Teknik Sipil.</p>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">3</span>
                                <p class="text-xs text-slate-700 leading-relaxed">Melaksanakan pengabdian kepada masyarakat untuk penerapan dan inovasi teknologi.</p>
                            </li>
                        </ol>
                    </div>

                    <div class="mt-8 pt-5 border-t border-slate-200 flex justify-between items-center relative z-10">
                        <span class="text-xs text-slate-500 font-semibold uppercase tracking-wide">Tri Dharma Perguruan Tinggi</span>
                        <a href="{{ route('visi-misi') }}" class="text-xs font-bold text-blue-700 hover:text-amber-600 transition flex items-center gap-1">
                            Buka Halaman Visi &amp; Misi <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            
            {{-- Statistik Profil Teknik Sipil UNSIL (Kampus 2 Mugarsari) --}}
            <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-5">
                <div class="bg-white/[0.07] backdrop-blur-sm rounded-2xl p-5 border border-white/15 text-center reveal hover:bg-white/[0.12] hover:border-amber-400/50 hover:shadow-lg transition-all duration-300">
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num" data-target="6">6</span>
                    <span class="block text-xs font-semibold text-slate-200 mt-1 uppercase tracking-wide">Laboratorium</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">Kampus 2 Mugarsari</span>
                </div>
                <div class="bg-white/[0.07] backdrop-blur-sm rounded-2xl p-5 border border-white/15 text-center reveal hover:bg-white/[0.12] hover:border-amber-400/50 hover:shadow-lg transition-all duration-300">
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num" data-target="27">27</span>
                    <span class="block text-xs font-semibold text-slate-200 mt-1 uppercase tracking-wide">Dosen Tetap</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">Magister &amp; Doktor</span>
                </div>
                <div class="bg-white/[0.07] backdrop-blur-sm rounded-2xl p-5 border border-white/15 text-center reveal hover:bg-white/[0.12] hover:border-amber-400/50 hover:shadow-lg transition-all duration-300">
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num" data-target="5">5</span>
                    <span class="block text-xs font-semibold text-slate-200 mt-1 uppercase tracking-wide">Bidang Keahlian</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">Fokus Kurikulum S-1</span>
                </div>
                <div class="bg-white/[0.07] backdrop-blur-sm rounded-2xl p-5 border border-white/15 text-center reveal hover:bg-white/[0.12] hover:border-amber-400/50 hover:shadow-lg transition-all duration-300">
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num" data-target="1200">1.200</span>
                    <span class="block text-xs font-semibold text-slate-200 mt-1 uppercase tracking-wide">Mahasiswa Aktif</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">Sivitas Akademika</span>
                </div>
                <div class="bg-white/[0.07] backdrop-blur-sm rounded-2xl p-5 border border-white/15 text-center reveal hover:bg-white/[0.12] hover:border-amber-400/50 hover:shadow-lg transition-all duration-300">
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num" data-target="3500">3.500</span>
                    <span class="block text-xs font-semibold text-slate-200 mt-1 uppercase tracking-wide">Alumni Lulus</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">Kiprah Nasional</span>
                </div>
                <div class="bg-white/[0.07] backdrop-blur-sm rounded-2xl p-5 border border-white/15 text-center reveal hover:bg-white/[0.12] hover:border-amber-400/50 hover:shadow-lg transition-all duration-300">
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num" data-target="40">40</span>
                    <span class="block text-xs font-semibold text-slate-200 mt-1 uppercase tracking-wide">Tahun Dedikasi</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">Berdiri Sejak 1984</span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-white border-b border-slate-200 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 280px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
                
                
                <div class="lg:col-span-8 space-y-12">
                    
                    
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight mb-6">
                            Program Studi Teknik Sipil
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Capaian Pembelajaran Lulusan" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1541888946425-d0fbb18615f8?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Capaian Pembelajaran Lulusan
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Capaian Pembelajaran Lulusan mahasiswa Program Studi Teknik Sipil Universitas Siliwangi.
                                </p>
                                <a href="{{ route('kurikulum') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Profil Profesional Mandiri" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Profil Profesional Mandiri
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Merupakan cerminan pencapaian kualitas yang diharapkan dari lulusan Teknik Sipil UNSIL.
                                </p>
                                <a href="{{ route('visi-misi') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Prestasi Mahasiswa" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='{{ asset('images/event-2.jpg') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Prestasi Mahasiswa
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Prestasi dan capaian membanggakan mahasiswa Teknik Sipil Universitas Siliwangi di tingkat nasional dan regional.
                                </p>
                                <a href="{{ route('prestasi-mahasiswa') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                            <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight">
                                Kegiatan Mahasiswa
                            </h2>
                            <div class="flex items-center space-x-2">
                                <a href="https://instagram.com/hmsftunsil" target="_blank" class="inline-flex items-center text-xs font-bold text-pink-700 bg-pink-50 hover:bg-pink-100 px-3 py-1.5 rounded-full border border-pink-200 transition">
                                    <i class="fa-brands fa-instagram mr-1.5 text-sm"></i> @hmsftunsil
                                </a>
                                <a href="https://instagram.com/sipilunsil" target="_blank" class="inline-flex items-center text-xs font-bold text-blue-700 bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded-full border border-blue-200 transition">
                                    <i class="fa-brands fa-instagram mr-1.5 text-sm"></i> @sipilunsil
                                </a>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/event-1.jpg') }}" alt="Kompetisi Jembatan Nasional SCIENCE" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    SCIENCE: Bridge Competition
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Ajang tahunan bergengsi National Bridge Design Competition & Lomba Kuat Tekan Beton tingkat nasional.
                                </p>
                                <a href="{{ route('mahasiswa-alumni') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Himpunan Mahasiswa Sipil FT UNSIL" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Organisasi HMS FT UNSIL
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Wadah pengembangan kepemimpinan, keprofesian, dan solidaritas mahasiswa Teknik Sipil UNSIL.
                                </p>
                                <a href="{{ route('mahasiswa-alumni') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan NCKU" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <span class="relative z-10 inline-flex items-center gap-1 text-[10px] font-bold text-amber-300 bg-amber-400/20 border border-amber-400/30 px-2 py-0.5 rounded-full mb-2 w-fit">
                                    <i class="fa-solid fa-globe text-[9px]"></i> 12 Okt 2026
                                </span>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Seminar Internasional Indonesia-Taiwan
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    "Bridging Futures" &bull; Peluang studi S2 &amp; S3 di Taiwan bersama Yanuar Haryanto, Ph.D. dari NCKU Taiwan.
                                </p>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                            <div>
                                <span class="text-blue-700 font-bold uppercase text-[11px] tracking-wider block">Peralatan Pengujian &amp; Komputasi</span>
                                <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight mt-0.5">
                                    Fasilitas Laboratorium
                                </h2>
                            </div>
                            <a href="{{ route('fasilitas') }}" class="inline-flex items-center text-xs font-bold text-blue-700 hover:text-blue-900 bg-blue-50 hover:bg-blue-100 px-3.5 py-1.5 rounded-full border border-blue-200 transition gap-1.5 self-start sm:self-auto">
                                <span>Lihat 6 Laboratorium</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/lab-civil.jpg') }}" alt="Laboratorium Bahan Konstruksi" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='{{ asset('images/event-1.jpg') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <span class="relative z-10 inline-flex items-center gap-1 text-[10px] font-bold text-amber-300 bg-amber-400/20 border border-amber-400/30 px-2 py-0.5 rounded-full mb-2 w-fit">
                                    <i class="fa-solid fa-flask text-[9px]"></i> Pengujian SNI
                                </span>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Lab. Teknologi Bahan Konstruksi
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Uji mutu kuat tekan beton, tarik baja tulangan, agregat, dan standardisasi material konstruksi.
                                </p>
                                <a href="{{ route('fasilitas') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Laboratorium Mekanika Tanah" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <span class="relative z-10 inline-flex items-center gap-1 text-[10px] font-bold text-emerald-300 bg-emerald-400/20 border border-emerald-400/30 px-2 py-0.5 rounded-full mb-2 w-fit">
                                    <i class="fa-solid fa-mountain text-[9px]"></i> Geoteknik
                                </span>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Lab. Mekanika Tanah &amp; Geoteknik
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Penyelidikan tanah lapangan (sondir, boring), analisis daya dukung fondasi, dan kestabilan lereng.
                                </p>
                                <a href="{{ route('fasilitas') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/gedung-unsil.jpg') }}" alt="Studio Komputasi dan BIM" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='{{ asset('images/event-3.jpg') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <span class="relative z-10 inline-flex items-center gap-1 text-[10px] font-bold text-cyan-300 bg-cyan-400/20 border border-cyan-400/30 px-2 py-0.5 rounded-full mb-2 w-fit">
                                    <i class="fa-solid fa-laptop-code text-[9px]"></i> Studio Digital
                                </span>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Studio Komputasi &amp; BIM
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Pemodelan struktur SAP2000, ETABS, perancangan CAD, dan integrasi Building Information Modeling (BIM).
                                </p>
                                <a href="{{ route('fasilitas') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="lg:col-span-4 space-y-10 lg:pl-2">
                    
                    
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight">
                                Agenda
                            </h2>
                            <span class="text-[11px] font-bold text-amber-700 bg-amber-100 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                Segera Hadir
                            </span>
                        </div>
                        
                        
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-200 group flex flex-col">
                            <div class="relative overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Workshop Penguatan Kurikulum OBE Teknik Sipil UNSIL" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-3 left-3 bg-[#0B2A4A]/90 backdrop-blur-sm text-amber-400 border border-amber-400/40 text-[10px] font-bold px-2.5 py-1 rounded-lg shadow-md flex items-center gap-1">
                                    <i class="fa-solid fa-calendar-day text-[9px]"></i> 27 Nov 2026
                                </span>
                            </div>
                            <div class="p-4 space-y-3">
                                <div>
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-2 py-0.5 rounded-md inline-block mb-1.5">
                                        Workshop &amp; Kurikulum
                                    </span>
                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 transition leading-snug">
                                        Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE)
                                    </h4>
                                </div>
                                <div class="text-[11px] text-slate-600 space-y-1.5 pt-1 border-t border-slate-100">
                                    <p class="flex items-start gap-1.5">
                                        <i class="fa-solid fa-user-tie text-blue-700 mt-0.5 flex-shrink-0"></i>
                                        <span><strong>Narasumber:</strong> Dr. Eng. Ir. Halwan Alfisa S., ST., MT., IPU. (UNS)</span>
                                    </p>
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-regular fa-clock text-amber-600 flex-shrink-0"></i>
                                        <span>Jum'at, 27 Nov 2026 &bull; 08.00 WIB s.d. Selesai</span>
                                    </p>
                                    <p class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-location-dot text-rose-600 flex-shrink-0"></i>
                                        <span>Kampus 2 Universitas Siliwangi</span>
                                    </p>
                                </div>
                                <div class="pt-2 border-t border-slate-100 flex items-center justify-between">
                                    <a href="{{ route('berita.workshop-obe') }}" class="inline-flex items-center gap-1.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold px-4 py-2 rounded-xl shadow-sm transition">
                                        <span>Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                    <a href="https://instagram.com/sipilunsil" target="_blank" class="inline-flex items-center text-xs font-semibold text-pink-700 hover:underline gap-1">
                                        <i class="fa-brands fa-instagram text-sm"></i> @sipilunsil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight">
                                <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition" title="Buka Portal Berita &amp; Informasi">
                                    Informasi &amp; Berita
                                </a>
                            </h2>
                            <a href="{{ route('berita.index') }}" class="text-xs font-bold text-[#0070BA] hover:underline flex items-center gap-1">
                                <span>Semua Berita</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>

                        <div class="space-y-5">
                            
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Bendungan Leuwikeris" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </a>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-cyan-800 font-bold text-[10px] bg-cyan-50 border border-cyan-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-solid fa-newspaper text-[9px]"></i> 23 Oktober 2026 &bull; unsil.ac.id
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="hover:underline">Himpunan Mahasiswa Sipil Universitas Siliwangi Perluas Wawasan Keteknikan melalui Kunjungan Ilmiah ke Bendungan Leuwikeris</a>
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Rangkaian SCIENCE 2026: studi lapangan instrumentasi rembesan dan pengelolaan sumber daya air bersama UPB.
                                    </p>
                                </div>
                            </article>

                            
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional Jalan Tol SCIENCE 2026" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </a>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-blue-700 font-bold text-[10px] bg-blue-50 border border-blue-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-solid fa-road text-[9px]"></i> 20 Oktober 2026 &bull; unsil.ac.id
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        <a href="{{ route('berita.seminar-jalan-tol') }}" class="hover:underline">Seminar Nasional SCIENCE 2026 Himpunan Mahasiswa Sipil UNSIL Angkat Strategi Pembangunan Jalan Tol Berkelanjutan</a>
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Menghadirkan narasumber PT Adhi Karya (Persero) Tbk. di Auditorium Rektorat Universitas Siliwangi.
                                    </p>
                                </div>
                            </article>

                            
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Bridge Design Competition SCIENCE 2026" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </a>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-pink-700 font-bold text-[10px] bg-pink-50 border border-pink-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-solid fa-trophy text-[9px]"></i> 20 Oktober 2026 &bull; unsil.ac.id
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        <a href="{{ route('berita.kompetisi-jembatan') }}" class="hover:underline">Himpunan Mahasiswa Sipil FT-Unsil Selenggarakan Babak Final National Bridge Design Competition dalam Ajang Bergengsi SCIENCE 2026</a>
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Ajang perancangan jembatan nasional di Aula Gedung Teknik Sipil UNSIL mempertemukan tim UNDIP dan Universitas Tidar.
                                    </p>
                                </div>
                            </article>

                            
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <a href="{{ route('berita.seminar-taiwan') }}" class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video block">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </a>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-amber-700 font-bold text-[10px] bg-amber-50 border border-amber-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-solid fa-globe text-[9px]"></i> 12 Oktober 2026 &bull; unsil.ac.id
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        <a href="{{ route('berita.seminar-taiwan') }}" class="hover:underline">Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL</a>
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Narasumber NCKU Taiwan: peluang beasiswa studi lanjut S2 &amp; S3 dan riset gempa terapan bagi lulusan Teknik Sipil FT UNSIL.
                                    </p>
                                </div>
                            </article>
                        </div>

                        
                        <div class="mt-6 pt-3">
                            <a href="{{ route('berita.index') }}" class="inline-flex items-center justify-center gap-2 w-full py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-bold rounded-xl shadow-sm transition">
                                <span>Lihat Semua Berita &amp; Informasi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    
    <section id="lokasi" class="bg-white relative overflow-hidden border-t border-slate-100">
        <div class="absolute inset-0 opacity-[0.07] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 240px auto;"></div>

        <div class="relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-14">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
                    <div>
                        <span class="text-amber-600 font-bold uppercase text-xs tracking-widest">
                            <i class="fa-solid fa-location-dot mr-1.5"></i>Lokasi Kampus
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0B2A4A] mt-1 font-heading">
                            UNSIL Kampus 2 &mdash; Fakultas Teknik
                        </h2>
                        <p class="text-slate-500 text-sm mt-1">Universitas Siliwangi, Tasikmalaya, Jawa Barat</p>
                    </div>
                    <a href="https://maps.app.goo.gl/szSbqfg9FWsZnMc67" target="_blank"
                       class="inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-[#0B2A4A] font-bold text-xs px-5 py-2.5 rounded-full shadow transition whitespace-nowrap self-start md:self-auto">
                        <i class="fa-solid fa-diamond-turn-right"></i>
                        Petunjuk Arah Google Maps
                    </a>
                </div>

                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 rounded-2xl overflow-hidden shadow-xl border border-slate-200">
                    <div class="lg:col-span-2 h-80 lg:h-[420px]">
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

                    <div class="bg-white p-7 flex flex-col justify-between gap-6">
                        <div>
                            <div class="flex items-start gap-3 mb-5">
                                <div class="w-9 h-9 bg-amber-50 border border-amber-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-map-pin text-amber-500 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Alamat</p>
                                    <p class="text-slate-500 text-xs leading-relaxed">
                                        Jl. Mugarsari, Kelurahan Mugarsari,<br>
                                        Kec. Tamansari, Kota Tasikmalaya,<br>
                                        Jawa Barat 46196
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 mb-5">
                                <div class="w-9 h-9 bg-green-50 border border-green-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-envelope text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Email</p>
                                    <p class="text-slate-500 text-xs">sipil@unsil.ac.id</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 bg-purple-50 border border-purple-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-clock text-purple-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Jam Layanan</p>
                                    <p class="text-slate-500 text-xs leading-relaxed">
                                        Senin &ndash; Jumat<br>
                                        07.30 &ndash; 16.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-slate-100 pt-5">
                            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-3">Akses Transportasi</p>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <i class="fa-solid fa-train text-amber-500 w-4 text-center"></i>
                                    <span>&#177;3 km dari Stasiun Tasikmalaya</span>
                                </div>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <i class="fa-solid fa-bus text-amber-500 w-4 text-center"></i>
                                    <span>&#177;1 km dari Terminal Indihiang</span>
                                </div>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <i class="fa-solid fa-car text-amber-500 w-4 text-center"></i>
                                    <span>Tersedia area parkir luas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
