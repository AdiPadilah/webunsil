@extends('layouts.app')

@section('title', 'Ruang Seminar & Sidang Teknik Sipil | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Ruang Seminar dan Sidang Tugas Akhir Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari â€” dilengkapi proyektor, AC, sound system, dan layar motorized.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Ruang Seminar & Sidang</span>
            </nav>
            <span class="text-amber-400 text-xs font-medium mb-2">
                Ruang Presentasi & Sidang Ilmiah
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Seminar <span class="text-amber-400">&amp; Sidang</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Fasilitas ruang seminar dan sidang tugas akhir di Gedung Fakultas Teknik Kampus 2 UNSIL Mugarsari dengan kapasitas 60â€“100 orang, dilengkapi peralatan audiovisual modern, pendingin udara, dan tata suara profesional untuk mendukung sidang ilmiah, seminar jurusan, serta kuliah pakar Teknik Sipil.
            </p>
        </div>
    </section>

    {{-- Section Spesifikasi & Keunggulan --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Sarana Ilmiah Kampus 2 Mugarsari</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Ruang Seminar & Sidang</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Dirancang untuk mendukung kegiatan akademik formal Program Studi Teknik Sipil, mulai dari sidang tugas akhir hingga seminar nasional di lingkungan Kampus 2 FT UNSIL Mugarsari.
                </p>
            </div>

            {{-- 4 Card Keunggulan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users-viewfinder"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kapasitas 60â€“100 Orang</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Penataan kursi fleksibel model teater dan classroom, cocok untuk sidang tugas akhir, seminar terbuka, maupun kuliah tamu program studi.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-purple-600 font-semibold">
                        Layout Fleksibel
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-temperature-arrow-down"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">AC & Sirkulasi Udara</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Pendingin udara split yang menjamin kenyamanan suhu selama sesi sidang tugas akhir maupun seminar yang berlangsung berjam-jam.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        AC Ruangan Full
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-display"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Proyektor & Layar Motorized</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Proyektor Full HD dengan layar motorized berukuran besar untuk presentasi materi seminar, penayangan video penelitian, dan sidang tugas akhir.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold">
                        Full HD Projector
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Sound System Wireless</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Sistem tata suara digital dengan mikrofon wireless UHF untuk meja penguji dan podium presentasi mahasiswa, memastikan kejelasan suara di seluruh ruangan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold">
                        Wireless UHF Mic
                    </div>
                </div>

            </div>

            {{-- Feature Showcase: Kegiatan di Ruang Seminar --}}
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    
                    {{-- Foto Utama --}}
                    <div class="lg:col-span-7 relative min-h-[340px] lg:min-h-[460px] bg-slate-900 overflow-hidden">
                        <img src="{{ asset('images/event-2.jpg') }}" alt="Seminar Nasional & Kuliah Tamu Teknik Sipil FT UNSIL Kampus 2 Mugarsari"
                             class="w-full h-full object-cover"
                             onerror="this.src='{{ asset('images/workshop-obe.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <span class="inline-block bg-amber-400 text-slate-900 text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-chalkboard-user mr-1"></i> Seminar & Kuliah Tamu
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black leading-tight">Ruang Seminar Teknik Sipil FT UNSIL</h3>
                            <p class="text-slate-300 text-xs mt-1.5 leading-relaxed">
                                Kampus 2 Mugarsari, Jl. Siliwangi No. 24 Tasikmalaya â€” pusat kegiatan ilmiah dan sidang akademik Program Studi Teknik Sipil.
                            </p>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Agenda --}}
                    <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kegiatan Akademik</span>
                            <h3 class="text-2xl font-black text-slate-900 font-heading mt-1">Penggunaan Ruang Seminar</h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Menjadi pusat kegiatan ilmiah dan seremonial akademik di lingkungan Program Studi Teknik Sipil Kampus 2 FT UNSIL Mugarsari.
                            </p>

                            <div class="space-y-4 mt-6">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0 text-sm font-bold mt-0.5">
                                        <i class="fa-solid fa-scroll"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-900">Sidang Tugas Akhir (TA)</h4>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Sidang komprehensif mahasiswa di hadapan tim penguji dosen, digelar secara rutin setiap periode kelulusan.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 text-sm font-bold mt-0.5">
                                        <i class="fa-solid fa-chalkboard-teacher"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-900">Seminar Nasional & Kuliah Pakar</h4>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Menghadirkan praktisi BUMN Karya, konsultan, dan akademisi nasional dalam forum ilmiah terbuka.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center shrink-0 text-sm font-bold mt-0.5">
                                        <i class="fa-solid fa-people-group"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-900">Rapat & Musyawarah Prodi</h4>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Forum resmi rapat pimpinan, musyawarah besar HMS, dan pertemuan koordinasi civitas akademika Teknik Sipil.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 mt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                            <span>Lokasi: <strong>Kampus 2 FT UNSIL Mugarsari</strong></span>
                            <span class="text-purple-700 font-bold">Kapasitas 60â€“100 Kursi</span>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Galeri Agenda --}}
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="group relative rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/event-1.jpg') }}" alt="Seminar Nasional Teknik Sipil" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <span class="text-[10px] font-bold bg-amber-400 text-slate-900 px-2 py-0.5 rounded-full uppercase">Seminar Nasional</span>
                        <h4 class="text-sm font-bold mt-1">Seminar Infrastruktur Berkelanjutan</h4>
                        <p class="text-[11px] text-slate-300 mt-0.5">Dihadiri praktisi LPJK & akademisi nasional</p>
                    </div>
                </div>

                <div class="group relative rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/event-3.jpg') }}" alt="Sidang Tugas Akhir Teknik Sipil" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <span class="text-[10px] font-bold bg-purple-400 text-white px-2 py-0.5 rounded-full uppercase">Sidang TA</span>
                        <h4 class="text-sm font-bold mt-1">Sidang Tugas Akhir Mahasiswa</h4>
                        <p class="text-[11px] text-slate-300 mt-0.5">Presentasi di hadapan tim dosen penguji</p>
                    </div>
                </div>

                <div class="group relative rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Workshop & Pelatihan Teknik Sipil" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <span class="text-[10px] font-bold bg-blue-400 text-white px-2 py-0.5 rounded-full uppercase">Workshop</span>
                        <h4 class="text-sm font-bold mt-1">Workshop & Pelatihan Kurikulum OBE</h4>
                        <p class="text-[11px] text-slate-300 mt-0.5">Peningkatan kompetensi sivitas akademika</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

