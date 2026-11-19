@extends('layouts.app')

@section('title', 'Dosen & Staf | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Daftar dosen dan tenaga pengajar Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi berkualifikasi S-2 dan S-3.')

@section('content')
    <!-- Page Header Banner -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Dosen &amp; Staf</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Sumber Daya Manusia Unggul
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Dosen &amp; Tenaga Pengajar
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Didukung oleh staf pengajar berkualifikasi Magister (S-2) dan Doktor (S-3) lulusan perguruan tinggi terkemuka di dalam dan luar negeri, berdedikasi dalam pendidikan dan riset keinsinyuran.
            </p>
        </div>
    </section>

    <!-- Konten Dosen & Tenaga Pengajar -->
    <section class="py-16 bg-slate-50 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.06] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kualifikasi Akademik</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Staf Pengajar Berkompeten</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                    Dosen-dosen Program Studi Teknik Sipil UNSIL aktif dalam publikasi ilmiah terindeks, riset terapan bersama industri konstruksi, serta pengabdian masyarakat di berbagai wilayah.
                </p>
            </div>

            <!-- Kartu Gambar Utama Daftar Dosen Resmi -->
            <div class="max-w-5xl mx-auto bg-white rounded-3xl p-4 sm:p-8 border border-slate-200 text-center shadow-xl mb-14">
                <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100 px-2">
                    <div class="text-left">
                        <h3 class="text-base font-bold text-[#0B2A4A]">Daftar Dosen &amp; Tenaga Pendidik</h3>
                        <p class="text-xs text-slate-500">Program Studi Teknik Sipil Fakultas Teknik UNSIL</p>
                    </div>
                    <span class="hidden sm:inline-flex items-center gap-1.5 text-xs font-semibold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">
                        <i class="fa-solid fa-certificate text-amber-500"></i> Terverifikasi PDDikti
                    </span>
                </div>
                <img src="{{ asset('images/daftar-dosen.png') }}" alt="Daftar Dosen Teknik Sipil UNSIL" class="w-full rounded-2xl shadow-sm mx-auto object-cover" onerror="this.parentElement.innerHTML='<div class=\'py-12 text-slate-500\'><i class=\'fa-solid fa-users text-5xl text-slate-400 mb-3\'></i><p class=\'text-base font-bold text-slate-800\'>Daftar Dosen &amp; Tenaga Pengajar Teknik Sipil UNSIL</p><p class=\'text-xs text-slate-500 mt-1\'>Koleksi pengajar berpendidikan S-2 dan S-3 Fakultas Teknik Universitas Siliwangi</p></div>'">
            </div>

        </div>
    </section>
@endsection
