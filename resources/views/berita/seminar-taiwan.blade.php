@extends('layouts.app')

@section('title', 'Seminar Internasional "Bridging Futures" | Program Studi Teknik Sipil UNSIL')
@section('meta_description', 'Seminar internasional Indonesia-Taiwan di Auditorium FT UNSIL, 12 Oktober 2026. Narasumber: Yanuar Haryanto, Ph.D. dari NCKU Taiwan.')

@section('content')
    
    {{-- Breadcrumb --}}
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

    {{-- Main Article --}}
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <article class="lg:col-span-2">
                    
                    {{-- Header Berita --}}
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">
                            Internasional &bull; 12 Oktober 2026 &bull; Auditorium FT UNSIL
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Seminar Internasional "Bridging Futures: Strengthening Indonesia-Taiwan Academic Collaboration"
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas Program Studi Teknik Sipil UNSIL</strong> &bull; Sumber: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@sipilunsil</a>
                        </p>
                    </div>

                    {{-- Foto Utama / Cover --}}
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/seminar-taiwan-cover.jpg') }}"
                             alt="Seminar Internasional Bridging Futures di Auditorium Fakultas Teknik UNSIL"
                             class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Suasana Auditorium Fakultas Teknik Universitas Siliwangi yang dipadati ratusan mahasiswa dan dosen Teknik Sipil dalam Seminar Internasional "Bridging Futures", Senin 12 Oktober 2026.
                        </figcaption>
                    </figure>

                    {{-- Isi Berita & Deskripsi Acara --}}
                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p>
                            Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) menyelenggarakan seminar internasional bertajuk <strong>"Bridging Futures: Strengthening Indonesia-Taiwan Academic Collaboration"</strong> pada Senin (12/10/2026) di Auditorium Fakultas Teknik UNSIL.
                        </p>

                        <p>
                            Kegiatan akademik bertaraf internasional ini diikuti oleh ratusan mahasiswa dan dosen Teknik Sipil UNSIL. Seminar ini bertujuan memperluas wawasan akademik global, mengenalkan kultur penelitian mutakhir di bidang rekayasa infrastruktur, serta membuka jalur beasiswa studi lanjut jenjang Magister (S-2) dan Doktor (S-3) di perguruan tinggi terkemuka di Taiwan.
                        </p>

                        <p>
                            Pada seminar ini, hadir sebagai narasumber utama <strong>Yanuar Haryanto, Ph.D.</strong> (Associate Professor Teknik Sipil Universitas Jenderal Soedirman sekaligus <em>Research Affiliate</em> di National Cheng Kung University / NCKU Taiwan dan National Center for Research on Earthquake Engineering / NCREE Taiwan). Beliau membawakan materi bertajuk <em>"Discovering Taiwan: Opportunities, Challenges, and Lasting Memories"</em>.
                        </p>

                        <p>
                            Dalam pemaparannya, narasumber membagikan pengalaman nyata selama menjalani riset rekayasa kegempaan di Taiwan, memaparkan peluang beasiswa pemerintah maupun universitas di Taiwan, serta memberikan kiat praktis dalam mempersiapkan portofolio akademik bagi mahasiswa Teknik Sipil UNSIL yang berminat melanjutkan studi ke luar negeri.
                        </p>

                        <p>
                            Sesi dilanjutkan dengan diskusi interaktif dan tanya jawab yang disambut antusias oleh para mahasiswa, serta telekonferensi daring untuk memperluas jejaring komunikasi akademik antara sivitas akademika UNSIL dan mitra perguruan tinggi di Taiwan.
                        </p>
                    </div>

                    {{-- Profil Narasumber Card --}}
                    <div class="mt-8 bg-gradient-to-br from-[#0B2A4A] to-[#1a4a7a] rounded-2xl p-6 text-white shadow-xl">
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
                                        <span>Research Affiliate &bull; <strong class="text-white">National Cheng Kung University (NCKU)</strong>, Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-flask text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Tainan Experimental Technology Division &bull; <strong class="text-white">National Center for Research on Earthquake Engineering (NCREE)</strong>, Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-laptop-code text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Research Assistant &bull; <strong class="text-white">CASALab</strong>, Department of Civil Engineering, NCKU Taiwan</span>
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <i class="fa-solid fa-book-open text-amber-400 mt-0.5 w-4 flex-shrink-0"></i>
                                        <span>Lebih dari <strong class="text-white">30 publikasi ilmiah</strong> di jurnal internasional bereputasi</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Galeri Foto Dokumentasi Kegiatan --}}
                    <div class="mt-10 pt-8 border-t border-slate-200">
                        <div class="mb-5">
                            <h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading flex items-center gap-2">
                                <i class="fa-solid fa-images text-[#0070BA]"></i> Dokumentasi Kegiatan
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">
                                Rangkaian dokumentasi foto pelaksanaan Seminar Internasional di Auditorium FT UNSIL:
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            {{-- Foto 1: Suasana Auditorium Penuh --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan/seminar-taiwan-auditorium.jpg') }}"
                                         alt="Suasana Auditorium FT UNSIL Seminar Internasional"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Suasana auditorium dipadati mahasiswa Teknik Sipil UNSIL saat pembukaan seminar internasional.
                                </div>
                            </div>

                            {{-- Foto 2: Pemaparan Materi di Panggung --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan/seminar-taiwan-presentasi.jpg') }}"
                                         alt="Pemaparan Materi Seminar Internasional oleh Narasumber"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Pemaparan materi <em>"Discovering Taiwan"</em> oleh Yanuar Haryanto, Ph.D. di panggung utama auditorium.
                                </div>
                            </div>

                            {{-- Foto 3: Sesi Tanya Jawab 1 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan/seminar-taiwan-tanya-jawab-1.jpg') }}"
                                         alt="Sesi Tanya Jawab Mahasiswa Teknik Sipil UNSIL"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Antusiasme mahasiswa Teknik Sipil UNSIL dalam sesi tanya jawab interaktif seputar peluang beasiswa.
                                </div>
                            </div>

                            {{-- Foto 4: Sesi Tanya Jawab 2 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan/seminar-taiwan-tanya-jawab-2.jpg') }}"
                                         alt="Peserta Mahasiswa dalam Sesi Diskusi"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Peserta seminar menyimak penjelasan mendalam mengenai tantangan riset dan kehidupan akademik di Taiwan.
                                </div>
                            </div>

                            {{-- Foto 5: Sesi Daring --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition sm:col-span-2">
                                <div class="aspect-[16/9] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan/seminar-taiwan-sesi-daring.jpg') }}"
                                         alt="Sesi Telekonferensi Daring Interaktif"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Sesi koneksi telekonferensi daring interaktif yang ditampilkan melalui layar panggung auditorium.
                                </div>
                            </div>

                            {{-- Foto 6: Banner Layar Seminar --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition sm:col-span-2">
                                <div class="aspect-[16/9] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-taiwan/seminar-taiwan-banner-layar.jpg') }}"
                                         alt="Banner layar Seminar Internasional Bridging Futures UNSIL"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Layar backdrop Seminar Internasional "Bridging Futures" menampilkan narasumber Yanuar Haryanto, Ph.D. (NCKU Taiwan), testimoni M. Raka El Ghifari, S.T. (penerima beasiswa S2 NCKU), dan moderator Intan Nursikha Rahma, M.— di Auditorium Fakultas Teknik UNSIL, 12 Oktober 2026.
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Tombol Navigasi / Share --}}
                    <div class="mt-8 pt-6 border-t border-slate-200 flex flex-wrap items-center gap-3">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wide">Bagikan:</span>
                        <a href="https://instagram.com/sipilunsil" target="_blank"
                           class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs font-semibold transition">
                            <i class="fa-brands fa-instagram"></i> @sipilunsil
                        </a>
                        <span class="text-slate-300">&bull;</span>
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-[#0070BA] hover:text-[#005a96] text-xs font-semibold transition">
                            <i class="fa-solid fa-newspaper"></i> Kembali ke Berita
                        </a>
                        <span class="text-slate-300">&bull;</span>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs font-semibold transition">
                            <i class="fa-solid fa-house"></i> Beranda
                        </a>
                    </div>
                </article>

                {{-- Sidebar --}}
                <aside class="space-y-6">
                    
                    {{-- Informasi Kegiatan --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span><strong class="text-slate-800">Senin, 12 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-clock text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>09.30 WIB &ndash; Selesai</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Auditorium Fakultas Teknik, Universitas Siliwangi</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-building-columns text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Penyelenggara: Prodi S-1 Teknik Sipil FT UNSIL</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-handshake text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Mitra: NCKU Taiwan &bull; NCREE Taiwan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-tag text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Seminar Internasional, Kolaborasi Akademik, Beasiswa S2 &amp; S3</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-users text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Peserta: Mahasiswa &amp; Dosen Teknik Sipil UNSIL</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Info Lebih Lanjut --}}
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

                    {{-- Halaman Terkait --}}
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
