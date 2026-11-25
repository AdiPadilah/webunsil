@extends('layouts.app')

@section('title', 'Ruang Rapat & Diskusi Akademik | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Ruang Rapat Pimpinan dan Diskusi Dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari — dilengkapi smart display, AC, hybrid meeting set, dan WiFi Eduroam.')

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
                <span class="text-slate-200">Ruang Rapat</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs">
                Pusat Koordinasi &amp; Musyawarah Akademik
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Rapat <span class="text-amber-400">&amp; Diskusi</span>
            </h1>
        </div>
    </section>

    {{-- Galeri Foto Dokumentasi Ruang Rapat --}}
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Dokumentasi Ruangan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Galeri Ruang Rapat</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/ruang-rapat-1.jpg') }}" alt="Ruang Rapat 1"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/ruang-rapat-2.jpg') }}" alt="Ruang Rapat 2"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/ruang-rapat-3.jpg') }}" alt="Ruang Rapat 3"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/ruang-rapat-4.jpg') }}" alt="Ruang Rapat 4"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
