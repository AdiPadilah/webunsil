@extends('layouts.app')

@section('title', 'Fasilitas & Sarana Prasarana | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas lengkap Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari: 6 Laboratorium terpadu, Ruang Kelas ber-AC, Aula Fakultas Teknik, Kantin Sehat, dan Ruang Seminar Teknik Sipil.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Fasilitas</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Infrastruktur &amp; Ekosistem Akademik
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Fasilitas <span class="text-amber-400">Teknik Sipil</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Sarana dan prasarana modern di Kampus 2 Fakultas Teknik UNSIL Mugarsari, Jl. Siliwangi No. 24 Tasikmalaya, yang menunjang kegiatan belajar-mengajar, pengujian material konstruksi, riset sivitas akademika, serta pengembangan karakter mahasiswa Teknik Sipil.
            </p>
        </div>
    </section>

    {{-- 5 Klaster Fasilitas Utama --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Pilihan Fasilitas</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Sarana Kampus Terpadu</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Eksplorasi seluruh sarana penunjang akademik, pengujian keinsinyuran, hingga ruang komunal mahasiswa Program Studi S-1 Teknik Sipil UNSIL.
                </p>
            </div>

            {{-- Grid 5 Fasilitas (3 Atas + 2 Bawah) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                
                {{-- 1. Laboratorium --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=1000" alt="Laboratorium Teknik Sipil"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-blue-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                6 Unit Lab
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl font-black text-white leading-tight">Laboratorium</h3>
                                <p class="text-slate-300 text-xs mt-0.5">Gedung Lab FT &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pusat pengujian material, mekanika tanah, hidraulika, aspal transportasi, pemodelan struktur SAP2000, dan pengukuran topografi berstandar SNI &amp; ASTM.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1.5 text-[11px] text-slate-500">
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Lab TBK</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Lab Mekanika Tanah</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Lab Hidraulika</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Lab Transportasi</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Lab Komputasi</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Lab Ukur Tanah</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('laboratorium') }}" class="w-full inline-flex items-center justify-center gap-2 bg-[#0B2A4A] hover:bg-blue-800 text-amber-400 font-bold text-xs py-2.5 rounded-xl transition shadow-sm">
                            <span>Buka Laboratorium</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 2. Ruang Kelas --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Ruang Kelas & Perkuliahan"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-emerald-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Full AC &bull; Smart Class
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl font-black text-white leading-tight">Ruang Kelas</h3>
                                <p class="text-slate-300 text-xs mt-0.5">Gedung FT UNSIL Lantai 1 &ndash; 3</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruang perkuliahan berpenyejuk udara (AC), proyektor multimedia, smart display, kursi ergonomis, dan koneksi internet wireless Eduroam untuk implementasi kurikulum OBE.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1.5 text-[11px] text-slate-500">
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">40-50 Kursi/Kelas</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">LCD Projector Full HD</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Wi-Fi Eduroam</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Ruang Seminar Sidang</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('kelas') }}" class="w-full inline-flex items-center justify-center gap-2 bg-[#0B2A4A] hover:bg-blue-800 text-amber-400 font-bold text-xs py-2.5 rounded-xl transition shadow-sm">
                            <span>Buka Ruang Kelas</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 3. Aula FT --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Aula Fakultas Teknik"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-amber-500/95 text-slate-900 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                300 Kursi
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl font-black text-white leading-tight">Aula Fakultas Teknik</h3>
                                <p class="text-slate-300 text-xs mt-0.5">Gedung FT &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Gedung pertemuan serbaguna untuk penyelenggaraan seminar nasional, kuliah pakar BUMN karya, pelepasan yudisium sarjana, dan musyawarah mahasiswa sipil.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1.5 text-[11px] text-slate-500">
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Panggung Kehormatan</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Dual Screen Proyektor</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Sound System Digital</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Transit VIP</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('aula') }}" class="w-full inline-flex items-center justify-center gap-2 bg-[#0B2A4A] hover:bg-blue-800 text-amber-400 font-bold text-xs py-2.5 rounded-xl transition shadow-sm">
                            <span>Buka Aula FT</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>

            {{-- Baris 2: Kantin & Auditorium (2 Kolom Lebar) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                {{-- 4. Kantin --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=1000" alt="Kantin Kampus FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-teal-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Halal &amp; Higienis
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">Kantin Kampus</h3>
                                <p class="text-slate-300 text-xs mt-0.5">Area Kuliner &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pusat santap kuliner sehat dan higienis bersuasana semi-outdoor dengan semilir udara perbukitan Mugarsari. Menyediakan hidangan bergizi terjangkau serta fasilitas transaksi non-tunai QRIS.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1.5 text-[11px] text-slate-500">
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Harga Mahasiswa</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Cashless QRIS</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Meja Komunal Diskusi</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Wastafel Antiseptik</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('kantin') }}" class="w-full inline-flex items-center justify-center gap-2 bg-[#0B2A4A] hover:bg-blue-800 text-amber-400 font-bold text-xs py-2.5 rounded-xl transition shadow-sm">
                            <span>Buka Kantin Kampus</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 5. Ruang Seminar & Sidang --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden bg-slate-900">
                            <img src="{{ asset('images/event-2.jpg') }}" alt="Ruang Seminar & Sidang Teknik Sipil"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 onerror="this.src='{{ asset('images/workshop-obe.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <span class="absolute top-4 left-4 bg-purple-600/95 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Seminar &bull; Sidang TA
                            </span>

                            <div class="absolute bottom-4 left-5 right-5">
                                <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">Ruang Seminar & Sidang</h3>
                                <p class="text-slate-300 text-xs mt-0.5">Gedung FT &bull; Kampus 2 Mugarsari</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruang seminar dan sidang tugas akhir ber-AC dengan kapasitas 60–100 orang, dilengkapi proyektor, sound system, dan layar motorized untuk presentasi ilmiah mahasiswa.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1.5 text-[11px] text-slate-500">
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Sidang Tugas Akhir</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">Seminar Jurusan</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">AC & Proyektor</span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-lg">60–100 Kapasitas</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('auditorium') }}" class="w-full inline-flex items-center justify-center gap-2 bg-[#0B2A4A] hover:bg-blue-800 text-amber-400 font-bold text-xs py-2.5 rounded-xl transition shadow-sm">
                            <span>Buka Ruang Seminar</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
