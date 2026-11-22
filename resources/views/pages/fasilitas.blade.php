@extends('layouts.app')

@section('title', 'Fasilitas & Sarana Prasarana | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas lengkap Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari: 6 Laboratorium terpadu, Ruang Kelas ber-AC, Aula Fakultas Teknik, Kantin Sehat, dan Ruang Seminar.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Fasilitas</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Sarana &amp; Prasarana
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Fasilitas Teknik Sipil
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Sarana dan prasarana di Kampus 2 Fakultas Teknik UNSIL Mugarsari yang menunjang kegiatan perkuliahan, praktikum pengujian material konstruksi, riset sivitas akademika, dan kegiatan mahasiswa.
            </p>
        </div>
    </section>

    {{-- 5 Klaster Fasilitas Utama --}}
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">Sarana Kampus Terpadu</h2>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed max-w-2xl">
                    Seluruh sarana penunjang akademik, laboratorium pengujian keinsinyuran, hingga ruang komunal mahasiswa Program Studi S-1 Teknik Sipil UNSIL.
                </p>
            </div>

            {{-- Grid 5 Fasilitas --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                
                {{-- 1. Laboratorium --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/lab-civil.jpg') }}" alt="Laboratorium Teknik Sipil"
                                 class="w-full h-full object-cover ">
                        </div>

                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">6 Unit Lab</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight">Laboratorium Terpadu</h3>
                            <p class="text-xs text-slate-500 mt-0.5 mb-3">Kampus 2 Mugarsari</p>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pusat pengujian material beton & baja, mekanika tanah, hidraulika, aspal transportasi, pemodelan struktur SAP2000, dan pengukuran topografi.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('laboratorium') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Laboratorium</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 2. Ruang Kelas --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Ruang Kelas & Perkuliahan"
                                 class="w-full h-full object-cover ">
                        </div>

                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">Ruang Kuliah</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight">Ruang Kelas Ber-AC</h3>
                            <p class="text-xs text-slate-500 mt-0.5 mb-3">Gedung FT UNSIL Lantai 1 &ndash; 3</p>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruang perkuliahan nyaman berpenyejuk udara, proyektor multimedia, kursi kuliah ergonomis, dan akses internet nirkabel Eduroam.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('kelas') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Ruang Kelas</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 3. Aula FT --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Aula Fakultas Teknik"
                                 class="w-full h-full object-cover ">
                        </div>

                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">Kapasitas 300 Kursi</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight">Aula Fakultas Teknik</h3>
                            <p class="text-xs text-slate-500 mt-0.5 mb-3">Gedung FT &bull; Kampus 2 Mugarsari</p>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Gedung pertemuan serbaguna untuk penyelenggaraan seminar nasional, kuliah tamu praktisi BUMN, yudisium, dan acara kemahasiswaan.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('aula') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Aula</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 4. Kantin --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Kantin Kampus FT UNSIL"
                                 class="w-full h-full object-cover ">
                        </div>

                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">Area Kuliner</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight">Kantin Kampus</h3>
                            <p class="text-xs text-slate-500 mt-0.5 mb-3">Area Kuliner Kampus 2 Mugarsari</p>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pusat santap kuliner mahasiswa dengan sajian higienis terjangkau dan area semi-outdoor untuk bersantai di sela perkuliahan.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('kantin') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Kantin</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 5. Ruang Seminar & Sidang --}}
                <div class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-2.jpg') }}" alt="Ruang Seminar & Sidang Teknik Sipil"
                                 class="w-full h-full object-cover ">
                        </div>

                        <div class="p-6">
                            <span class="text-xs text-slate-400 font-medium block mb-1">Ruang Sidang</span>
                            <h3 class="text-lg font-bold text-slate-900 leading-tight">Auditorium &amp; Ruang Sidang</h3>
                            <p class="text-xs text-slate-500 mt-0.5 mb-3">Gedung FT &bull; Kampus 2 Mugarsari</p>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Ruang khusus pelaksanaan seminar proposal, seminar hasil, dan sidang akhir skripsi mahasiswa sarjana Teknik Sipil.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('auditorium') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Ruang Sidang</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

