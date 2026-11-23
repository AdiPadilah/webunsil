@extends('layouts.app')

@section('title', 'Kolaborasi & Kemitraan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis Program Studi S-1 Teknik Sipil FT UNSIL dengan BUMN Karya, Kementerian PUPR, asosiasi profesi PII, dan universitas internasional.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-20 relative overflow-hidden border-b border-blue-950 min-h-[45vh] flex items-center">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset dan Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Kolaborasi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Sinergi Industri &bull; Kemitraan Strategis
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Kolaborasi Industri &amp; Instansi
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Membangun jejaring sinergis antara dunia akademik, industri jasa konstruksi nasional, kementerian teknis, dan mitra global guna mempercepat transfer teknologi dan kesiapan kerja lulusan.
            </p>
        </div>
    </section>
@endsection

