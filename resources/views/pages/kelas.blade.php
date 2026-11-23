@extends('layouts.app')

@section('title', 'Ruang Kelas & Perkuliahan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas ruang kelas representatif ber-AC, proyektor multimedia, dan smart classroom di Gedung Fakultas Teknik UNSIL Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Kelas</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Lingkungan Pembelajaran Interaktif
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Kelas <span class="text-amber-400">&amp; Perkuliahan</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Ruang perkuliahan modern di Gedung Fakultas Teknik Kampus 2 UNSIL Mugarsari yang didesain ergonomis, dilengkapi penyejuk udara (AC), perangkat multimedia interaktif, dan jaringan Wi-Fi berkecepatan tinggi guna mendukung implementasi kurikulum OBE (Outcome-Based Education).
            </p>
        </div>
    </section>

    {{-- Fitur Unggulan Ruang Kelas --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Standar Kenyamanan Belajar</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Ruang Perkuliahan</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Setiap ruang kelas ditata dengan standar pencahayaan dan akustik optimal guna menjamin konsentrasi dan interaksi dialogis antara dosen dan mahasiswa.
                </p>
            </div>

            {{-- 4 Card Fitur --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Smart Classroom &amp; Multimedia</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Dilengkapi proyektor Full HD dan layar interaktif untuk presentasi gambar kerja teknik sipil dan simulasi model struktur.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        Full HD Display
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-snowflake"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Pendingin Ruangan (Full AC)</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Sistem pendingin udara terjaga dipadukan dengan ventilasi alami kawasan perbukitan Mugarsari untuk kenyamanan belajar.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-cyan-600 font-semibold">
                        AC Ruangan Full
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chair"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kursi Kuliah Ergonomis</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Kursi kuliah berkualitas dengan meja lipat kokoh yang menunjang kenyamanan selama perkuliahan teori maupun asistensi gambar.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold">
                        Desain Ergonomis
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-wifi"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Akses Wi-Fi Eduroam</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Jaringan internet nirkabel fiber optic berkecepatan tinggi di seluruh blok ruang kelas untuk akses literatur daring dan e-learning.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold">
                        High Bandwidth
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

