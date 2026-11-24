@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Peta jalan penelitian, fokus riset 5 Kelompok Bidang Keahlian (KBK), dan skema hibah riset dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-20 relative overflow-hidden border-b border-blue-950 min-h-[45vh] flex items-center">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300">Riset dan Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Penelitian</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Tridharma &bull; Inovasi &amp; Pengembangan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Penelitian &amp; Inovasi Keteknikan
            </h1>
        </div>
    </section>
@endsection
