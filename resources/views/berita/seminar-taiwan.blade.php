@extends('layouts.app')

@section('title', 'Seminar Internasional "Bridging Futures" | Program Studi Teknik Sipil UNSIL')
@section('meta_description', 'Seminar internasional Indonesia-Taiwan di Auditorium FT UNSIL, 12 Oktober 2026. Narasumber: Yanuar Haryanto, Ph.D. dari NCKU Taiwan.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Seminar Internasional Indonesia-Taiwan 2026</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">
                            Internasional · 12 Oktober 2026 · Auditorium FT UNSIL
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Seminar Internasional "Bridging Futures: Strengthening Indonesia-Taiwan Academic Collaboration"
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas Program Studi Teknik Sipil UNSIL</strong> &bull; Sumber: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@sipilunsil</a>
                        </p>
                    </div>

                    
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}"
                             alt="Seminar Internasional Bridging Futures - Narasumber Yanuar Haryanto Ph.D. dari NCKU Taiwan"
                             class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Narasumber Yanuar Haryanto, Ph.D. (kanan) dalam sesi diskusi Seminar Internasional "Bridging Futures" di Auditorium Fakultas Teknik Universitas Siliwangi, Senin 12 Oktober 2026.
                        </figcaption>
                    </figure>

                    
                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p>
                            Upaya peningkatan daya saing internasional terus diwujudkan Program Studi Teknik Sipil Fakultas Teknik Universitas Siliwangi melalui penyelenggaraan seminar internasional <strong>"Bridging Futures: Strengthening Indonesia-Taiwan Academic Collaboration"</strong> di Auditorium Fakultas Teknik Unsil, Senin (12/10/2026). Kegiatan ini mempertemukan sivitas akademika dengan informasi dan pengalaman nyata mengenai peluang melanjutkan studi magister (S2) dan doktor (S3) di universitas terkemuka di Taiwan.
                        </p>

                        <p>
                            Seminar menghadirkan <strong>Yanuar Haryanto, Ph.D.</strong>, <em>associate professor</em> dari Program Studi Teknik Sipil Universitas Jenderal Soedirman, yang juga memiliki keterlibatan akademik dan penelitian aktif di <strong>National Cheng Kung University (NCKU)</strong>, Taiwan. Beliau juga berkiprah di <em>Tainan Experimental Technology Division</em>, National Center for Research on Earthquake Engineering, Taiwan.
                        </p>

                        <p>
                            Selain itu, ia juga merupakan <em>research assistant</em> di <strong>Computer Aided Structural Analysis Laboratory (CASALab)</strong>, Department of Civil Engineering, National Cheng Kung University, Taiwan. Dengan rekam jejak lebih dari <strong>30 publikasi</strong> di jurnal internasional bereputasi, Yanuar membagikan wawasan mengenai pengembangan karier akademik, peluang beasiswa riset (scholarship), dan kesempatan menembus lingkungan laboratorium internasional bagi mahasiswa dan dosen Teknik Sipil UNSIL.
                        </p>
                    </div>

                    
                    <div class="mt-10 bg-gradient-to-br from-[#0B2A4A] to-[#1a4a7a] rounded-2xl p-6 text-white shadow-xl">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-chalkboard-user"></i> Profil Narasumber
                        </h3>
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-full bg-amber-400/20 border-2 border-amber-400/40 flex items-center justify-center text-amber-400 text-2xl flex-shrink-0">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-black text-white">Yanuar Haryanto, Ph.D.</h4>
                                <p class="text-blue-200 text-xs mt-0.5">Associate Professor - Teknik Sipil, Universitas Jenderal Soedirman</p>
                                <div class="mt-3 space-y-1.5 text-xs text-slate-300">
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-building-columns text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Research Affiliate - <strong class="text-white">National Cheng Kung University (NCKU)</strong>, Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-flask text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Tainan Experimental Technology Division, <strong class="text-white">National Center for Research on Earthquake Engineering</strong>, Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-laptop-code text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Research Assistant - <strong class="text-white">CASALab (Computer Aided Structural Analysis Laboratory)</strong>, Dept. Civil Engineering, NCKU Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-book-open text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Lebih dari <strong class="text-white">30 publikasi</strong> di jurnal internasional bereputasi</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="mt-8 pt-6 border-t border-slate-200 flex flex-wrap items-center gap-3">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wide">Bagikan:</span>
                        <a href="https://instagram.com/sipilunsil" target="_blank"
                           class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs font-semibold transition">
                            <i class="fa-brands fa-instagram"></i> @sipilunsil
                        </a>
                        <span class="text-slate-300">·</span>
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-[#0070BA] hover:text-[#005a96] text-xs font-semibold transition">
                            <i class="fa-solid fa-newspaper"></i> Kembali ke Berita
                        </a>
                        <span class="text-slate-300">·</span>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs font-semibold transition">
                            <i class="fa-solid fa-house"></i> Beranda
                        </a>
                    </div>
                </article>

                
                <aside class="space-y-6">
                    
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">Senin, 12 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Auditorium Fakultas Teknik, Universitas Siliwangi</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-tag text-blue-700 mt-0.5 w-4"></i>
                                <span>Seminar Internasional, Kolaborasi Akademik, Studi Luar Negeri</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-users text-blue-700 mt-0.5 w-4"></i>
                                <span>Sivitas Akademika Teknik Sipil UNSIL</span>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Info Lebih Lanjut</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Ikuti akun Instagram resmi untuk update kegiatan akademik dan kemahasiswaan terbaru Program Studi Teknik Sipil UNSIL.
                        </p>
                        <a href="https://instagram.com/sipilunsil" target="_blank"
                           class="inline-flex items-center gap-2 text-slate-300 hover:text-white text-xs font-semibold transition w-full justify-center">
                            <i class="fa-brands fa-instagram"></i> @sipilunsil
                        </a>
                    </div>

                    
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4">Halaman Terkait</h3>
                        <div class="space-y-3">
                            <a href="{{ route('mahasiswa-alumni') }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ asset('images/event-3.jpg') }}" alt="SCIENCE Bridge" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    SCIENCE: National Bridge Design &amp; Concrete Competition HMS FT UNSIL
                                </p>
                            </a>
                            <a href="{{ route('riset') }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ asset('images/event-1.jpg') }}" alt="Leuwikeris" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    Kunjungan Ilmiah ke Proyek Strategis Bendungan Leuwikeris bersama BBWS Citanduy
                                </p>
                            </a>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
