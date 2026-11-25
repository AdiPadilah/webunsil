@extends('layouts.app')

@section('title', 'Fasilitas & Sarana Prasarana | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas lengkap Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari: 6 Laboratorium terpadu, Ruang Kelas ber-AC, Aula Fakultas Teknik, Kantin Sehat, Ruang Seminar, dan Ruang Rapat.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Fasilitas</span>
            </nav>
            <p class="text-[#0070BA] font-semibold text-xs uppercase tracking-wide">
                Sarana &amp; Prasarana
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Fasilitas Teknik Sipil
            </h1>
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

            {{-- Grid 6 Fasilitas --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8 reveal">
                
                {{-- 1. Laboratorium --}}
                <div id="laboratorium" class="bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow hover-lift">
                    <div>
                        <a href="{{ route('laboratorium') }}" class="block h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/lab-civil.jpg') }}" alt="Laboratorium Teknik Sipil"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                <a href="{{ route('laboratorium') }}">Laboratorium</a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
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
                <div id="kelas" class="bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow hover-lift">
                    <div>
                        <a href="{{ route('kelas') }}" class="block h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Ruang Kelas & Perkuliahan"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                <a href="{{ route('kelas') }}">Kelas</a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                                Ruang perkuliahan nyaman berpenyejuk udara, proyektor multimedia, kursi kuliah ergonomis, dan akses internet nirkabel Eduroam.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('kelas') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Kelas</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 3. Aula --}}
                <div id="aula" class="bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow hover-lift">
                    <div>
                        <a href="{{ route('aula') }}" class="block h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-1.jpg') }}" alt="Aula Fakultas Teknik"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                <a href="{{ route('aula') }}">Aula</a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
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
                <div id="kantin" class="bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow hover-lift">
                    <div>
                        <a href="{{ route('kantin') }}" class="block h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Kantin Kampus FT UNSIL"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                <a href="{{ route('kantin') }}">Kantin</a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
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

                {{-- 5. Auditorium --}}
                <div id="auditorium" class="bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow hover-lift">
                    <div>
                        <a href="{{ route('auditorium') }}" class="block h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/event-2.jpg') }}" alt="Auditorium &amp; Ruang Sidang Teknik Sipil"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                <a href="{{ route('auditorium') }}">Auditorium</a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                                Ruang khusus pelaksanaan seminar proposal, seminar hasil, dan sidang akhir skripsi mahasiswa sarjana Teknik Sipil.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('auditorium') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Auditorium</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                {{-- 6. Ruang Rapat --}}
                <div id="ruang-rapat" class="bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow hover-lift">
                    <div>
                        <a href="{{ route('ruang-rapat') }}" class="block h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/ruang-rapat-1.jpg') }}" alt="Ruang Rapat &amp; Diskusi Teknik Sipil"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-[#0070BA] transition">
                                <a href="{{ route('ruang-rapat') }}">Ruang Rapat</a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                                Sarana ruang rapat boardroom representatif dengan fasilitas hybrid meeting, smart display, pendingin udara, dan koneksi internet stabil untuk koordinasi prodi.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('ruang-rapat') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                            <span>Lihat Detail Ruang Rapat</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
