<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Program Studi Teknik Sipil | Fakultas Teknik Universitas Siliwangi')</title>
    <meta name="description" content="@yield('meta_description', 'Website Resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya.')">
    <link rel="icon" href="{{ asset('images/logo-unsil.png') }}" type="image/png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Montserrat"', 'sans-serif'],
                    },
                    colors: {
                        unsil: {
                            topbar: '#0070BA',
                            nav: '#0B2A4A',
                            navhover: '#133E6C',
                            primary: '#0B2A4A',
                            accent: '#F39C12',
                            gold: '#E5A823',
                            light: '#F4F7FB'
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        .dropdown:hover .dropdown-menu { display: block; }
        .nav-link.active-nav { color: #FBBF24 !important; }
        .nav-link.active-nav span { color: #FBBF24; }
        .hero-banner {
            background-image: linear-gradient(to right, rgba(11,42,74,0.92) 0%, rgba(11,42,74,0.65) 50%, rgba(11,42,74,0.15) 100%), url('{{ asset("images/gedung-rektorat-unsil.jpg") }}');
            background-size: cover;
            background-position: center right;
        }
        .counter-num { transition: all 0.3s ease; }
        .ig-card:hover .ig-overlay { opacity: 1; }
        .ig-overlay { opacity: 0; transition: opacity 0.3s ease; }
        .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .img-fallback { background: linear-gradient(135deg, #0B2A4A 0%, #1e4d8c 100%); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-amber-500 selection:text-white flex flex-col min-h-screen">

    <!-- Main Navigation Header (Deep Navy Style - Layout Asli) -->
    <header class="bg-unsil-nav sticky top-0 z-50 shadow-md border-b border-blue-950">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center h-20">
                <!-- Brand / Logo (Ukuran Program Studi sama persis dengan TEKNIK SIPIL) -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group flex-shrink-0 py-2" title="Program Studi Teknik Sipil FT UNSIL">
                    <img src="{{ asset('images/logo-unsil.png') }}" alt="Logo UNSIL" class="h-12 w-auto object-contain transition-transform group-hover:scale-105" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/e/e0/Logo_Universitas_Siliwangi.png'">
                    <div class="border-l-2 border-slate-500/80 pl-3 flex flex-col justify-center font-heading" style="line-height:1.1; gap:0">
                        <span class="block text-sm font-black text-white uppercase tracking-tight leading-none">PROGRAM STUDI</span>
                        <span class="block text-sm font-black text-white uppercase tracking-tight leading-none mt-[3px]">TEKNIK SIPIL</span>
                        <span class="block text-[9px] font-bold text-slate-300 uppercase tracking-wide leading-none mt-[4px]">UNIVERSITAS SILIWANGI</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden xl:flex items-center space-x-0.5 2xl:space-x-1.5 text-[13px] lg:text-[13.5px] font-semibold text-slate-200 whitespace-nowrap">

                    <!-- Tentang Kami Dropdown -->
                    <div class="relative dropdown">
                        <a href="{{ route('tentang-kami') }}" id="nav-tentang" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg flex items-center space-x-1 transition whitespace-nowrap {{ request()->routeIs('tentang-kami', 'visi-misi', 'sejarah', 'dosen') ? 'active-nav text-amber-400' : '' }}">
                            <span>Tentang Kami</span>
                            <i class="fa-solid fa-chevron-down text-[8px] text-slate-400 ml-0.5"></i>
                        </a>
                        <div class="dropdown-menu hidden absolute top-full left-0 w-48 bg-white border border-slate-200 shadow-2xl rounded-xl py-2 z-50 text-slate-800">
                            <a href="{{ route('visi-misi') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('visi-misi') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Visi &amp; Misi</a>
                            <a href="{{ route('sejarah') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('sejarah') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Sejarah Program Studi</a>
                            <a href="{{ route('dosen') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('dosen') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Dosen &amp; Staf</a>
                        </div>
                    </div>

                    <!-- Akademik Dropdown -->
                    <div class="relative dropdown">
                        <a href="{{ route('akademik') }}" id="nav-akademik" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg flex items-center space-x-1 transition whitespace-nowrap {{ request()->routeIs('akademik', 'kurikulum', 'prestasi-mahasiswa', 'layanan', 'download') ? 'active-nav text-amber-400' : '' }}">
                            <span>Akademik</span>
                            <i class="fa-solid fa-chevron-down text-[8px] text-slate-400 ml-0.5"></i>
                        </a>
                        <div class="dropdown-menu hidden absolute top-full left-0 w-52 bg-white border border-slate-200 shadow-2xl rounded-xl py-2 z-50 text-slate-800">
                            <a href="{{ route('kurikulum') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('kurikulum') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Kurikulum</a>
                            <a href="{{ route('prestasi-mahasiswa') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('prestasi-mahasiswa') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Prestasi Mahasiswa</a>
                            <a href="{{ route('layanan') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('layanan') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Layanan Terpadu</a>
                            <a href="{{ route('download') }}" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap {{ request()->routeIs('download') ? 'text-blue-700 font-bold bg-blue-50/60' : '' }}">Download</a>
                        </div>
                    </div>

                    <a href="{{ route('fasilitas') }}" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap {{ request()->routeIs('fasilitas') ? 'active-nav text-amber-400' : '' }}">Fasilitas</a>
                    <a href="{{ route('riset') }}" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap {{ request()->routeIs('riset') ? 'active-nav text-amber-400' : '' }}">Riset dan Kolaborasi</a>
                    <a href="{{ route('karya-dosen') }}" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap {{ request()->routeIs('karya-dosen') ? 'active-nav text-amber-400' : '' }}">Karya Dosen</a>
                    <a href="{{ route('mahasiswa-alumni') }}" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap {{ request()->routeIs('mahasiswa-alumni') ? 'active-nav text-amber-400' : '' }}">Mahasiswa dan Alumni</a>
                </nav>

                <!-- Search & Language Widget (Fungsional) -->
                <div class="hidden lg:flex items-center space-x-3 text-xs text-slate-300">
                    <button type="button" onclick="openModal('modal-search-global')" class="w-8 h-8 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-200 hover:text-amber-400 flex items-center justify-center transition shadow-sm" title="Cari halaman & informasi">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </button>
                    <div class="flex items-center bg-slate-800 px-2 py-1 rounded-full text-[11px] font-bold border border-slate-700/50">
                        <button type="button" onclick="switchLanguage('ID')" id="lang-btn-id" class="text-amber-400 px-1 font-extrabold cursor-pointer transition">ID</button>
                        <span class="text-slate-600">|</span>
                        <button type="button" onclick="switchLanguage('EN')" id="lang-btn-en" class="text-slate-400 px-1 hover:text-amber-300 cursor-pointer transition">EN</button>
                    </div>
                </div>

                <!-- Mobile Nav Button -->
                <div class="flex xl:hidden items-center">
                    <button id="mobile-menu-btn" class="text-white hover:text-amber-400 p-2 rounded-lg focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu (Layout Asli) -->
        <div id="mobile-menu" class="hidden xl:hidden bg-slate-900 border-b border-slate-800 px-6 pt-3 pb-6 space-y-2 text-sm text-slate-200">
            <a href="{{ route('tentang-kami') }}" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800 {{ request()->routeIs('tentang-kami', 'visi-misi', 'sejarah', 'dosen') ? 'text-amber-400 font-bold' : '' }}">Tentang Kami</a>
            <a href="{{ route('visi-misi') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('visi-misi') ? 'text-amber-400 font-bold' : '' }}">&mdash; Visi &amp; Misi</a>
            <a href="{{ route('sejarah') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('sejarah') ? 'text-amber-400 font-bold' : '' }}">&mdash; Sejarah Program Studi</a>
            <a href="{{ route('dosen') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('dosen') ? 'text-amber-400 font-bold' : '' }}">&mdash; Dosen &amp; Staf</a>

            <a href="{{ route('akademik') }}" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800 {{ request()->routeIs('akademik', 'kurikulum', 'prestasi-mahasiswa', 'layanan', 'download') ? 'text-amber-400 font-bold' : '' }}">Akademik</a>
            <a href="{{ route('kurikulum') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('kurikulum') ? 'text-amber-400 font-bold' : '' }}">&mdash; Kurikulum</a>
            <a href="{{ route('prestasi-mahasiswa') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('prestasi-mahasiswa') ? 'text-amber-400 font-bold' : '' }}">&mdash; Prestasi Mahasiswa</a>
            <a href="{{ route('layanan') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('layanan') ? 'text-amber-400 font-bold' : '' }}">&mdash; Layanan Terpadu</a>
            <a href="{{ route('download') }}" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs {{ request()->routeIs('download') ? 'text-amber-400 font-bold' : '' }}">&mdash; Download</a>

            <a href="{{ route('fasilitas') }}" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800 {{ request()->routeIs('fasilitas') ? 'text-amber-400 font-bold' : '' }}">Fasilitas</a>
            <a href="{{ route('riset') }}" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800 {{ request()->routeIs('riset') ? 'text-amber-400 font-bold' : '' }}">Riset dan Kolaborasi</a>
            <a href="{{ route('karya-dosen') }}" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800 {{ request()->routeIs('karya-dosen') ? 'text-amber-400 font-bold' : '' }}">Karya Dosen</a>
            <a href="{{ route('mahasiswa-alumni') }}" class="nav-link block py-2 hover:text-amber-400 {{ request()->routeIs('mahasiswa-alumni') ? 'text-amber-400 font-bold' : '' }}">Mahasiswa dan Alumni</a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer dengan Ornamen Krawangan FT UNSIL -->
    <footer class="bg-unsil-nav text-slate-300 pt-16 pb-8 border-t border-slate-800 relative overflow-hidden mt-auto">
        <!-- Background Texture Krawangan -->
        <div class="absolute inset-0 opacity-[0.03] bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 240px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-slate-800 text-xs">
                <!-- Brand & Deskripsi -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('images/logo-unsil.png') }}" alt="Logo UNSIL" class="h-10 w-auto"
                             onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/e/e0/Logo_Universitas_Siliwangi.png'">
                        <div class="font-heading">
                            <span class="block text-[10px] font-black text-amber-400 uppercase tracking-wider leading-none">PROGRAM STUDI</span>
                            <span class="block text-sm font-black text-white uppercase tracking-tight my-0.5 leading-tight">TEKNIK SIPIL</span>
                            <span class="block text-[10px] font-bold text-slate-300 uppercase tracking-wide leading-none">UNIVERSITAS SILIWANGI</span>
                        </div>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-4 max-w-md">
                        Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi menghasilkan lulusan insinyur sipil yang profesional, inovatif, berwawasan kebangsaan, dan berjiwa wirausaha.
                    </p>
                    <p class="text-slate-400 leading-relaxed flex items-start gap-2">
                        <i class="fa-solid fa-map-pin text-amber-400 mt-0.5"></i>
                        <span>Kampus 2 Mugarsari, Kec. Tamansari, Kota Tasikmalaya, Jawa Barat 46196</span>
                    </p>
                </div>

                <!-- Kontak Resmi -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-5 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Kontak Resmi
                    </h4>
                    <ul class="space-y-3 text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-envelope text-amber-400 mt-0.5 w-4"></i>
                            <span>sipil@unsil.ac.id</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-globe text-amber-400 mt-0.5 w-4"></i>
                            <a href="https://unsil.ac.id" target="_blank" class="hover:text-white transition">unsil.ac.id</a>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-brands fa-instagram text-pink-400 mt-0.5 w-4"></i>
                            <a href="https://instagram.com/sipilunsil" target="_blank" class="hover:text-white transition">@sipilunsil</a>
                        </li>
                    </ul>
                </div>

                <!-- Navigasi Cepat & Akreditasi -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-5 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Halaman Utama
                    </h4>
                    <div class="bg-amber-400/10 border border-amber-400/20 rounded-xl p-3 mb-4">
                        <span class="text-amber-400 font-black text-sm block">AKREDITASI: BAIK</span>
                        <p class="text-slate-400 text-[11px] leading-relaxed mt-0.5">
                            LAM Teknik No. 0018/SK/LAM Teknik/AS/IV/2023
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-x-2 gap-y-1.5 text-slate-400">
                        <a href="{{ route('visi-misi') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Visi Misi</a>
                        <a href="{{ route('sejarah') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Sejarah</a>
                        <a href="{{ route('dosen') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Dosen</a>
                        <a href="{{ route('kurikulum') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Kurikulum</a>
                        <a href="{{ route('layanan') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Layanan</a>
                        <a href="{{ route('download') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Download</a>
                        <a href="{{ route('fasilitas') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Fasilitas</a>
                        <a href="{{ route('riset') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Riset</a>
                        <a href="{{ route('karya-dosen') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Karya</a>
                        <a href="{{ route('mahasiswa-alumni') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Mahasiswa</a>
                        <a href="{{ route('berita.index') }}" class="hover:text-amber-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[8px] text-amber-400"></i> Berita &amp; Informasi</a>
                    </div>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[11px] text-slate-500 gap-3">
                <p>&copy; {{ date('Y') }} Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi. Hak Cipta Dilindungi.</p>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="hover:text-slate-300 transition">Beranda</a>
                    <span>&bull;</span>
                    <a href="{{ route('visi-misi') }}" class="hover:text-slate-300 transition">Visi Misi</a>
                    <span>&bull;</span>
                    <a href="{{ route('layanan') }}" class="hover:text-slate-300 transition">Layanan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ========================================================
         MODAL 1: Detail Sertifikat & Akreditasi LAM Teknik
         ======================================================== -->
    <div id="modal-akreditasi-top" class="fixed inset-0 z-50 hidden bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-gradient-to-r from-[#0B2A4A] to-[#133E6C] p-6 text-white rounded-t-3xl">
                <button type="button" onclick="closeModal('modal-akreditasi-top')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition" title="Tutup">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="inline-flex items-center gap-1.5 bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                    <i class="fa-solid fa-certificate"></i> Akreditasi Resmi
                </div>
                <h3 class="text-xl font-bold">Akreditasi Program Studi</h3>
                <p class="text-slate-300 text-xs mt-1">S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi</p>
            </div>
            <div class="p-6 space-y-4 text-sm text-slate-700">
                <div class="p-4 bg-emerald-50 border border-emerald-200 rounded-2xl flex items-center gap-4">
                    <div class="w-12 h-12 bg-emerald-500 text-white rounded-xl flex items-center justify-center text-xl flex-shrink-0 shadow-md">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div>
                        <span class="text-emerald-800 text-[11px] font-bold uppercase tracking-wider block">Peringkat Akreditasi</span>
                        <span class="text-2xl font-black text-emerald-950">BAIK</span>
                        <span class="text-xs text-emerald-700 block">LAM Teknik &bull; Terakreditasi Aktif</span>
                    </div>
                </div>

                <div class="space-y-3 pt-2 text-xs">
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-500 font-medium">Lembaga Akreditasi:</span>
                        <span class="text-slate-900 font-semibold text-right">LAM Teknik (Keteknikan)</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-500 font-medium">Nomor Keputusan SK:</span>
                        <span class="text-slate-900 font-semibold text-right font-mono text-[11px]">0182/SK/LAM Teknik/AS/VIII/2023</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-500 font-medium">Masa Berlaku:</span>
                        <span class="text-slate-900 font-semibold text-right">21 Agustus 2023 &ndash; 20 Agustus 2028</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-500 font-medium">Jenjang &amp; Gelar:</span>
                        <span class="text-slate-900 font-semibold text-right">Sarjana (S-1) &bull; S.T. (Sarjana Teknik)</span>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap gap-2.5">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 px-4 py-2.5 bg-[#0B2A4A] hover:bg-blue-900 text-white text-xs font-semibold rounded-xl transition shadow">
                        <i class="fa-solid fa-download text-amber-400"></i> Unduh Sertifikat &amp; SK (PDF)
                    </a>
                    <a href="{{ route('tentang-kami') }}" class="inline-flex items-center gap-2 px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-semibold rounded-xl transition">
                        <i class="fa-solid fa-circle-info text-blue-600"></i> Profil Lengkap Prodi
                    </a>
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-3xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-akreditasi-top')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-xl transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- ========================================================
         MODAL 2: Pencarian Cepat Global (Search Modal)
         ======================================================== -->
    <div id="modal-search-global" class="fixed inset-0 z-50 hidden bg-slate-950/75 backdrop-blur-sm flex items-start justify-center p-4 pt-16 sm:pt-24">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[80vh] overflow-hidden shadow-2xl border border-slate-200 flex flex-col">
            <!-- Search Header -->
            <div class="p-4 sm:p-5 border-b border-slate-200 flex items-center gap-3 bg-slate-50">
                <i class="fa-solid fa-magnifying-glass text-slate-400 text-lg ml-2"></i>
                <input type="text" id="global-search-input"
                       placeholder="Cari halaman, kurikulum, dosen, laboratorium, atau layanan..."
                       class="w-full bg-transparent text-sm sm:text-base text-slate-900 placeholder:text-slate-400 focus:outline-none"
                       oninput="filterSearchResults(this.value)" autocomplete="off">
                <button type="button" onclick="closeModal('modal-search-global')" class="text-slate-400 hover:text-slate-700 px-2.5 py-1 text-xs font-semibold bg-slate-200 hover:bg-slate-300 rounded-lg transition" title="Tutup">
                    ESC
                </button>
            </div>

            <!-- Search Results List -->
            <div id="search-results-container" class="overflow-y-auto p-4 space-y-1.5 flex-1 divide-y divide-slate-100">
                <a href="{{ route('home') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="beranda home utama unsil fakultas teknik sipil">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-house text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Beranda</p>
                            <p class="text-[11px] text-slate-500">Halaman utama Program Studi S-1 Teknik Sipil FT UNSIL</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('tentang-kami') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="tentang kami profil jurusan sambutan struktur organisasi akreditasi">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-building-columns text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Tentang Kami</p>
                            <p class="text-[11px] text-slate-500">Profil jurusan, sambutan koordinator prodi, dan struktur organisasi</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('visi-misi') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="visi misi sasaran tujuan 2030 kompetensi keunggulan wirausaha">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-bullseye text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Visi &amp; Misi</p>
                            <p class="text-[11px] text-slate-500">Visi keunggulan 2030, misi tridharma, dan profil lulusan</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('sejarah') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="sejarah rekam jejak berdirinya 1984 penegerian unsil mugarsari">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-purple-50 text-purple-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-clock-rotate-left text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Sejarah Program Studi</p>
                            <p class="text-[11px] text-slate-500">Perjalanan lebih dari 4 dekade sejak tahun 1984 hingga penegerian</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('dosen') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="dosen pengajar staf tenaga kependidikan kbk struktur guru besar lektor">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-cyan-50 text-cyan-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-user-tie text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Dosen &amp; Staf Pengajar</p>
                            <p class="text-[11px] text-slate-500">Daftar dosen, kepakaran bidang keahlian, dan tenaga kependidikan</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('akademik') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="akademik pendidikan perkuliahan kalender peraturan sarjana s1">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-graduation-cap text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Akademik</p>
                            <p class="text-[11px] text-slate-500">Pusat informasi akademik, peraturan evaluasi studi, dan pengumuman</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('kurikulum') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="kurikulum mata kuliah sks obe silabus semester struktur konsentrasi prasyarat">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-orange-50 text-orange-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-book-open text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Kurikulum OBE 144 SKS</p>
                            <p class="text-[11px] text-slate-500">Sebaran 8 semester, 4 peminatan KBK, dan silabus mata kuliah</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('layanan') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="layanan surat permohonan pengajuan krs cuti bebas lab tugas akhir skripsi sidang yudisium">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-indigo-50 text-indigo-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-bell-concierge text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Layanan Terpadu &amp; Persuratan</p>
                            <p class="text-[11px] text-slate-500">Pengajuan surat aktif, izin penelitian, kerja praktik, dan ujian skripsi</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('download') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="download unduh berkas pdf panduan format pedoman akademik formulir skripsi">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-red-50 text-red-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-file-arrow-down text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Pusat Download Berkas</p>
                            <p class="text-[11px] text-slate-500">Unduh buku pedoman skripsi, format laporan KP, dan sertifikat akreditasi</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('fasilitas') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="fasilitas laboratorium alat uji struktur tanah hidrolika ukur tanah transportasi komputasi">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-flask-vial text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Fasilitas Laboratorium (6 Unit)</p>
                            <p class="text-[11px] text-slate-500">Laboratorium bahan struktur, mekanika tanah, keairan, ukur tanah, dsb</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('riset') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="riset kolaborasi penelitian pengabdian kerjasama industri bumn pemda lp2m hibah">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-sky-50 text-sky-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-handshake text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Riset dan Kolaborasi</p>
                            <p class="text-[11px] text-slate-500">Roadmap penelitian terapan, pengabdian masyarakat, dan kemitraan</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('karya-dosen') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="karya dosen publikasi jurnal scopus sinta prosiding buku ajar paten hki">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-rose-50 text-rose-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-newspaper text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Karya Dosen &amp; Publikasi</p>
                            <p class="text-[11px] text-slate-500">Karya ilmiah terindeks Sinta, Scopus, buku ajar, dan HKI</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('berita.index') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="berita informasi agenda kegiatan seminar kompetensi lomba wisuda pengumuman">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-bullhorn text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Berita &amp; Informasi</p>
                            <p class="text-[11px] text-slate-500">Portal berita resmi, seminar, prestasi kompetisi, dan agenda akademik</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('mahasiswa-alumni') }}" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="mahasiswa alumni himpunan hms prestasi ikatan alumni lulusan karir">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-users text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Mahasiswa dan Alumni</p>
                            <p class="text-[11px] text-slate-500">Kegiatan Himpunan Mahasiswa Sipil (HMS), prestasi lomba, dan jejaring alumni</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>

                <a href="{{ route('home') }}#lokasi" class="search-item flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition group" data-keywords="lokasi alamat maps google peta kampus 2 unsil mugarsari tamansari tasikmalaya">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-red-50 text-red-700 flex items-center justify-center flex-shrink-0 group-hover:bg-[#0B2A4A] group-hover:text-amber-400 transition">
                            <i class="fa-solid fa-map-location-dot text-sm"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700">Lokasi Kampus 2 UNSIL Mugarsari</p>
                            <p class="text-[11px] text-slate-500">Peta Google Maps, alamat resmi, rute transportasi, dan jam layanan</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-[10px] text-slate-400 group-hover:text-blue-700 transition"></i>
                </a>
            </div>

            <div id="no-search-results" class="hidden p-8 text-center text-slate-500">
                <i class="fa-solid fa-circle-exclamation text-2xl text-slate-400 mb-2"></i>
                <p class="text-xs font-semibold">Tidak ditemukan hasil untuk kata kunci tersebut.</p>
                <p class="text-[11px] text-slate-400 mt-0.5">Coba kata kunci lain seperti: kurikulum, visi, dosen, atau layanan.</p>
            </div>

            <!-- Footer hint -->
            <div class="p-3 bg-slate-50 border-t border-slate-200 text-[11px] text-slate-500 flex justify-between items-center px-5">
                <span>Tekan <kbd class="px-1.5 py-0.5 bg-slate-200 text-slate-700 rounded text-[10px] font-mono">ESC</kbd> untuk menutup</span>
                <span class="text-blue-600 font-medium">14 Halaman &amp; Layanan Siap Diakses</span>
            </div>
        </div>
    </div>

    <!-- ========================================================
         TOAST NOTIFICATION (Language switcher / alerts)
         ======================================================== -->
    <div id="toast-notification" class="fixed bottom-6 right-6 z-50 hidden max-w-sm bg-slate-900 text-white p-4 rounded-2xl shadow-2xl border border-slate-700/80 flex items-start gap-3 transition-all duration-300">
        <div id="toast-icon" class="w-8 h-8 rounded-xl bg-amber-400/20 text-amber-400 flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fa-solid fa-info text-sm"></i>
        </div>
        <div class="flex-1 min-w-0">
            <p id="toast-title" class="text-xs font-bold text-white">Pemberitahuan</p>
            <p id="toast-message" class="text-[11px] text-slate-300 mt-0.5 leading-relaxed">Pesan</p>
        </div>
        <button type="button" onclick="hideToast()" class="text-slate-400 hover:text-white text-xs p-1" title="Tutup">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- Global Scripts -->
    <script>
        // 1. Mobile Drawer Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // 2. Global Modal Functions
        function openModal(id) {
            const el = document.getElementById(id);
            if (el) {
                el.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                if (id === 'modal-search-global') {
                    const inp = document.getElementById('global-search-input');
                    if (inp) setTimeout(() => inp.focus(), 80);
                }
            }
        }

        function closeModal(id) {
            const el = document.getElementById(id);
            if (el) {
                el.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }

        // Close modal on outside backdrop click or ESC key
        window.addEventListener('click', function(e) {
            ['modal-akreditasi-top', 'modal-search-global', 'modal-regulasi', 'modal-sambutan', 'modal-angka'].forEach(id => {
                const modal = document.getElementById(id);
                if (modal && e.target === modal) {
                    closeModal(id);
                }
            });
        });

        window.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                ['modal-akreditasi-top', 'modal-search-global', 'modal-regulasi', 'modal-sambutan', 'modal-angka'].forEach(id => {
                    closeModal(id);
                });
            }
        });

        // 3. Global Search Live Filter
        function filterSearchResults(query) {
            const term = (query || '').toLowerCase().trim();
            const items = document.querySelectorAll('#search-results-container .search-item');
            const noRes = document.getElementById('no-search-results');
            let visibleCount = 0;

            items.forEach(item => {
                const text = (item.textContent + ' ' + (item.dataset.keywords || '')).toLowerCase();
                if (!term || text.includes(term)) {
                    item.style.display = 'flex';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            if (noRes) {
                if (visibleCount === 0 && term) {
                    noRes.classList.remove('hidden');
                } else {
                    noRes.classList.add('hidden');
                }
            }
        }

        // 4. Language Switcher
        function switchLanguage(lang) {
            const btnId = document.getElementById('lang-btn-id');
            const btnEn = document.getElementById('lang-btn-en');
            if (lang === 'EN') {
                if (btnEn) btnEn.className = 'text-amber-400 px-1 font-extrabold cursor-pointer transition';
                if (btnId) btnId.className = 'text-slate-400 px-1 hover:text-white cursor-pointer transition';
                showToast('Language: English', 'English version is currently under preparation. Full content remains in Bahasa Indonesia.');
            } else {
                if (btnId) btnId.className = 'text-amber-400 px-1 font-extrabold cursor-pointer transition';
                if (btnEn) btnEn.className = 'text-slate-400 px-1 hover:text-white cursor-pointer transition';
                showToast('Bahasa Indonesia', 'Website resmi ditampilkan dalam Bahasa Indonesia.');
            }
        }

        let toastTimer = null;
        function showToast(title, message) {
            const toast = document.getElementById('toast-notification');
            const titleEl = document.getElementById('toast-title');
            const msgEl = document.getElementById('toast-message');
            if (!toast) return;
            if (titleEl) titleEl.textContent = title;
            if (msgEl) msgEl.textContent = message;
            toast.classList.remove('hidden');
            if (toastTimer) clearTimeout(toastTimer);
            toastTimer = setTimeout(hideToast, 4000);
        }

        function hideToast() {
            const toast = document.getElementById('toast-notification');
            if (toast) toast.classList.add('hidden');
        }

        // 5. Counter Animation
        function animateCounter(el) {
            const target = +el.dataset.target;
            if (!target) return;
            const duration = 1600;
            const step = target / (duration / 16);
            let current = 0;
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = Math.floor(current).toLocaleString('id-ID');
            }, 16);
        }

        // 6. Scroll Reveal Observer
        const revealEls = document.querySelectorAll('.reveal');
        const counterEls = document.querySelectorAll('.counter-num');

        if (window.IntersectionObserver) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.classList.add('visible');
                        if (e.target.classList.contains('counter-num')) {
                            animateCounter(e.target);
                        }
                        const innerCounters = e.target.querySelectorAll('.counter-num');
                        innerCounters.forEach(animateCounter);
                        observer.unobserve(e.target);
                    }
                });
            }, { threshold: 0.15 });

            revealEls.forEach(el => observer.observe(el));
            counterEls.forEach(el => observer.observe(el));
        } else {
            revealEls.forEach(el => el.classList.add('visible'));
            counterEls.forEach(el => animateCounter(el));
        }
    </script>
    @stack('scripts')
</body>
</html>
