@extends('layouts.app')

@section('title', 'Buku Ajar & Referensi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Katalog buku ajar dan buku referensi keinsinyuran ber-ISBN karya staf pengajar Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('karya-dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Karya Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Buku</span>
            </nav>
            <p class="text-[#0070BA] font-semibold text-xs uppercase tracking-wide">
                Luaran Penelitian &amp; Buku Ajar
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Buku Ajar &amp; Referensi Dosen
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Koleksi buku ber-ISBN hasil riset dan pengalaman praktis dosen Program Studi S-1 Teknik Sipil FT UNSIL sebagai pegangan kuliah dan rujukan profesi insinyur di industri konstruksi.
            </p>
        </div>
    </section>
@endsection
