@extends('layouts.app')

@section('title', 'Riset dan Kolaborasi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis industri BUMN, instansi pemerintah PUPR, asosiasi profesi PII, riset unggulan dosen, dan PKM Teknik Sipil FT UNSIL.')

@section('content')

    {{-- Hero Header --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Riset &amp; Kolaborasi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Inovasi, Industri &amp; Pengabdian
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Riset &amp; Kolaborasi
            </h1>
        </div>
    </section>

    {{-- Bento Grid Asimetris Persis UNPAD (Row 1: 5 & 7 | Row 2: 7 & 5) --}}
    <section class="py-12 sm:py-16 lg:py-20 bg-white min-h-[70vh]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 lg:gap-6">

                {{-- Baris 1: Card Kiri (5 Kolom ~ Persis 'Kawasan Sains dan Teknologi' di UNPAD) --}}
                <a href="{{ route('penelitian') }}" class="col-span-1 sm:col-span-5 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Fokus Penelitian Dosen" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Penelitian
                        </h3>
                    </div>
                </a>

                {{-- Baris 1: Card Kanan (7 Kolom ~ Persis 'Laboratorium Sentral' di UNPAD) --}}
                <a href="{{ route('kolaborasi') }}" class="col-span-1 sm:col-span-7 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Jejaring Kerja Sama Industri" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <h3 class="text-lg sm:text-xl sm:text-2xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Kolaborasi
                        </h3>
                    </div>
                </a>

                {{-- Baris 2: Card Kiri (7 Kolom ~ Persis 'Transportasi Kampus' di UNPAD) --}}
                <a href="{{ route('pengabdian') }}" class="col-span-1 sm:col-span-7 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/event-1.jpg') }}" alt="Pengabdian Kepada Masyarakat" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <h3 class="text-lg sm:text-xl sm:text-2xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Pengabdian
                        </h3>
                    </div>
                </a>

                {{-- Baris 2: Card Kanan (5 Kolom ~ Persis 'Masjid Raya Unpad' di UNPAD) --}}
                <a href="{{ route('laboratorium') }}" class="col-span-1 sm:col-span-5 group relative rounded-2xl sm:rounded-3xl overflow-hidden block h-64 sm:h-72 lg:h-[320px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900">
                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Fasilitas Laboratorium Riset" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 via-40% to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7 text-white">
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight text-white group-hover:text-amber-300 transition-colors">
                            Laboratorium Riset &amp; Uji Bahan
                        </h3>
                    </div>
                </a>


            </div>

        </div>
    </section>

@endsection
