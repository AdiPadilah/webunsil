<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan Teknik Sipil | Fakultas Teknik Universitas Siliwangi</title>
    <meta name="description" content="Website Resmi Jurusan / Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya.">
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
        .hero-banner {
            background-image: linear-gradient(to right, rgba(11,42,74,0.90) 0%, rgba(11,42,74,0.60) 50%, rgba(11,42,74,0.10) 100%), url('{{ asset("images/gedung-rektorat-unsil.jpg") }}');
            background-size: cover;
            background-position: center right;
        }
        /* Counter animation */
        .counter-num { transition: all 0.3s ease; }
        /* Galeri hover */
        .ig-card:hover .ig-overlay { opacity: 1; }
        .ig-overlay { opacity: 0; transition: opacity 0.3s ease; }
        /* Active nav link */
        nav a.nav-active { color: #FBBF24 !important; }
        /* Scroll-reveal */
        .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        /* Smooth image fallback gradient */
        .img-fallback { background: linear-gradient(135deg, #0B2A4A 0%, #1e4d8c 100%); }
        /* Panel navigation */
        .nav-panel { display: block; }
        .nav-panel.hidden { display: none; }
        /* Active nav link */
        .nav-link.active-nav { color: #FBBF24 !important; }
        .nav-link.active-nav span { color: #FBBF24; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-amber-500 selection:text-white">


    <!-- 2. Main Navigation Header (Deep Navy Style) -->
    <header class="bg-unsil-nav sticky top-0 z-50 shadow-md border-b border-blue-950">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center h-20">
                <!-- Brand / Logo (Ukuran Program Studi sama persis dengan TEKNIK SIPIL) -->
                <a href="#" data-panel="panel-visi-misi" data-scroll="beranda" class="flex items-center space-x-3 group flex-shrink-0 py-2">
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
                        <a href="#" data-panel="panel-visi-misi" id="nav-tentang" class="nav-link active-nav px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg flex items-center space-x-1 transition whitespace-nowrap">
                            <span>Tentang Kami</span>
                            <i class="fa-solid fa-chevron-down text-[8px] text-slate-400 ml-0.5"></i>
                        </a>
                        <div class="dropdown-menu hidden absolute top-full left-0 w-48 bg-white border border-slate-200 shadow-2xl rounded-xl py-2 z-50 text-slate-800">
                            <a href="#" data-panel="panel-visi-misi" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap">Visi &amp; Misi</a>
                            <a href="#" data-panel="panel-sejarah" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap">Sejarah Program Studi</a>
                            <a href="#" data-panel="panel-dosen" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap">Dosen &amp; Staf</a>
                        </div>
                    </div>

                    <!-- Akademik Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" data-panel="panel-kurikulum" id="nav-akademik" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg flex items-center space-x-1 transition whitespace-nowrap">
                            <span>Akademik</span>
                            <i class="fa-solid fa-chevron-down text-[8px] text-slate-400 ml-0.5"></i>
                        </a>
                        <div class="dropdown-menu hidden absolute top-full left-0 w-48 bg-white border border-slate-200 shadow-2xl rounded-xl py-2 z-50 text-slate-800">
                            <a href="#" data-panel="panel-kurikulum" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap">Kurikulum</a>
                            <a href="#" data-panel="panel-layanan" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap">Layanan Terpadu</a>
                            <a href="#" data-panel="panel-download" class="nav-link block px-4 py-2 text-xs font-medium hover:bg-slate-50 hover:text-blue-700 whitespace-nowrap">Download</a>
                        </div>
                    </div>

                    <a href="#" data-panel="panel-fasilitas" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap">Fasilitas</a>
                    <a href="#" data-panel="panel-riset" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap">Riset dan Kolaborasi</a>
                    <a href="#" data-panel="panel-karya" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap">Karya Dosen</a>
                    <a href="#" data-panel="panel-mahasiswa" class="nav-link px-2 py-1.5 hover:text-amber-400 hover:bg-unsil-navhover rounded-lg transition whitespace-nowrap">Mahasiswa dan Alumni</a>
                </nav>

                <!-- Search & Language Widget -->
                <div class="hidden lg:flex items-center space-x-3 text-xs text-slate-300">
                    <button class="w-8 h-8 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-200 flex items-center justify-center transition">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </button>
                    <div class="flex items-center bg-slate-800 px-2 py-1 rounded-full text-[11px] font-bold">
                        <span class="text-amber-400 px-1">ID</span>
                        <span class="text-slate-500">|</span>
                        <span class="text-slate-400 px-1 hover:text-white cursor-pointer">EN</span>
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

                <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden xl:hidden bg-slate-900 border-b border-slate-800 px-6 pt-3 pb-6 space-y-2 text-sm text-slate-200">
            <a href="#" data-panel="panel-visi-misi" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800">Tentang Kami</a>
            <a href="#" data-panel="panel-visi-misi" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs">&mdash; Visi &amp; Misi</a>
            <a href="#" data-panel="panel-sejarah" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs">&mdash; Sejarah Program Studi</a>
            <a href="#" data-panel="panel-dosen" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs">&mdash; Dosen &amp; Staf</a>
            <a href="#" data-panel="panel-kurikulum" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800">Akademik</a>
            <a href="#" data-panel="panel-kurikulum" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs">&mdash; Kurikulum</a>
            <a href="#" data-panel="panel-layanan" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs">&mdash; Layanan Terpadu</a>
            <a href="#" data-panel="panel-download" class="nav-link block py-1.5 pl-4 text-slate-400 hover:text-amber-400 border-b border-slate-800 text-xs">&mdash; Download</a>
            <a href="#" data-panel="panel-fasilitas" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800">Fasilitas</a>
            <a href="#" data-panel="panel-riset" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800">Riset dan Kolaborasi</a>
            <a href="#" data-panel="panel-karya" class="nav-link block py-2 hover:text-amber-400 border-b border-slate-800">Karya Dosen</a>
            <a href="#" data-panel="panel-mahasiswa" class="nav-link block py-2 hover:text-amber-400">Mahasiswa dan Alumni</a>
        </div>
    </header>

    <!-- 3. HERO BERANDA (GAYA KAMPUS RESMI: TANPA KOTAK/TABEL, TEKS MENYATU ALAMI DENGAN LATAR BELAKANG) -->
    <div id="panel-visi-misi" class="nav-panel"><section id="beranda" class="hero-banner relative min-h-[560px] lg:min-h-[640px] flex items-center py-20 lg:py-28 border-b border-slate-800 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="max-w-2xl lg:max-w-3xl space-y-4">
                
                <!-- Tab Shortcut (Gaya ITS) -->
                <div class="flex flex-wrap gap-2 mb-2">
                    <span class="inline-flex items-center bg-amber-400 text-slate-950 text-xs font-bold px-4 py-1.5 rounded-full shadow">
                        <i class="fa-solid fa-star mr-1.5 text-[10px]"></i> Selamat Datang
                    </span>
                    <a href="#profil-prodi" class="inline-flex items-center bg-white/20 hover:bg-white/30 text-white text-xs font-semibold px-4 py-1.5 rounded-full backdrop-blur-sm border border-white/20 transition">
                        <i class="fa-solid fa-eye mr-1.5 text-[10px]"></i> Visi 2030
                    </a>
                    <a href="#akademik" class="inline-flex items-center bg-white/20 hover:bg-white/30 text-white text-xs font-semibold px-4 py-1.5 rounded-full backdrop-blur-sm border border-white/20 transition">
                        <i class="fa-solid fa-award mr-1.5 text-[10px]"></i> Akreditasi &amp; Riset
                    </a>
                </div>

                <span class="text-white/90 text-lg sm:text-xl font-medium tracking-wide block drop-shadow-md">
                    Selamat datang di
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white font-heading tracking-tight leading-tight drop-shadow-lg">
                    Program Studi<br><span class="text-amber-400">Teknik Sipil</span>
                </h1>

                <p class="text-xl sm:text-2xl text-slate-100 font-bold drop-shadow-md pb-1">
                    Fakultas Teknik Universitas Siliwangi
                </p>

                <p class="text-slate-100 text-base sm:text-lg leading-relaxed text-justify sm:text-left font-normal pt-2 drop-shadow-md max-w-2xl">
                    Program Studi Teknik Sipil UNSIL berkomitmen pada keunggulan dalam pendidikan, penelitian, dan inovasi di bidang teknik sipil. Kami menghasilkan lulusan profesional, kompeten, dan berintegritas yang siap menghadapi tantangan dunia kerja serta berkontribusi dalam pembangunan infrastruktur yang berkelanjutan.
                </p>

                <!-- Tombol Aksi Langsung Bersih -->
                <div class="flex flex-wrap items-center gap-4 pt-6">
                    <a href="#profil" class="px-6 py-3 rounded-xl bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold text-sm shadow-xl transition transform hover:-translate-y-0.5 inline-flex items-center">
                        <span>Tentang Kami</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                    <a href="#akademik" class="px-6 py-3 rounded-xl bg-white/20 hover:bg-white/30 text-white font-semibold text-sm backdrop-blur-md border border-white/30 transition inline-flex items-center">
                        <i class="fa-solid fa-graduation-cap mr-2 text-xs"></i>
                        <span>Akademik</span>
                    </a>
                    <a href="#fasilitas" class="px-6 py-3 rounded-xl bg-blue-700/40 hover:bg-blue-700/60 text-white font-semibold text-sm backdrop-blur-md border border-blue-400/30 transition inline-flex items-center">
                        <i class="fa-solid fa-flask mr-2 text-xs"></i>
                        <span>Fasilitas</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Corak 2: Pita Aksen Krawangan Daun Khas Tugu Fakultas Teknik UNSIL -->
    <div class="h-4 bg-[#0a2038] border-y border-amber-400/30 overflow-hidden relative">
        <div class="absolute inset-0 opacity-25 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 16px;"></div>
    </div>

    <!-- 4. PROFIL PROGRAM STUDI (VISI & MISI) -->
    <section id="profil-prodi" class="py-20 bg-[#0B2A4A] relative overflow-hidden">
        <!-- Corak 3: Background Texture Krawangan Busur Geometris Tugu FT UNSIL -->
        <div class="absolute inset-0 opacity-[0.035] bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 240px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Label -->
            <div class="text-center mb-12">
                <span class="text-amber-400 font-bold uppercase text-xs tracking-widest">IDENTITAS &amp; KEUNGGULAN</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">Profil Program Studi</h2>
                <p class="text-slate-300 mt-3 text-sm max-w-2xl mx-auto leading-relaxed">
                    Pedoman arah pengembangan Tri Dharma Perguruan Tinggi Jurusan Teknik Sipil Universitas Siliwangi.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <!-- VISI 2030 (Kartu Putih Sama Seperti Misi) -->
                <div class="bg-white rounded-3xl p-8 shadow-xl relative overflow-hidden flex flex-col justify-between h-full">
                    <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih -->
                    <div class="absolute inset-0 opacity-[0.12] bg-repeat pointer-events-none"
                         style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 240px auto;"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-9 h-9 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-base">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-black text-slate-900">Visi 2030</h3>
                                <p class="text-xs text-slate-500">Arah &amp; Sasaran Strategis Program Studi</p>
                            </div>
                        </div>

                        <blockquote class="text-slate-800 text-base leading-relaxed italic font-normal bg-slate-50/80 p-6 rounded-2xl border-l-4 border-amber-500 my-4 shadow-sm">
                            "Menjadi pusat keunggulan dalam pengembangan ilmu Teknik Sipil yang berwawasan kebangsaan, berkarakter wirausaha, dan inovatif di tingkat nasional pada tahun 2030."
                        </blockquote>
                    </div>

                    <div class="mt-8 pt-5 border-t border-slate-200 flex justify-between text-xs text-slate-500 font-semibold uppercase tracking-wide relative z-10">
                        <span>Program Studi Teknik Sipil</span>
                        <span>Universitas Siliwangi</span>
                    </div>
                </div>

                <!-- MISI (Kartu Terang Kanan dengan Corak Batik Krawangan Kuning Emas) -->
                <div class="bg-white rounded-3xl p-8 shadow-xl relative overflow-hidden flex flex-col justify-between h-full">
                    <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih -->
                    <div class="absolute inset-0 opacity-[0.12] bg-repeat pointer-events-none"
                         style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 240px auto;"></div>

                    <div class="relative z-10">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-9 h-9 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-base">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-black text-slate-900">Misi Program Studi</h3>
                                <p class="text-xs text-slate-500">Empat Pilar Pelaksanaan Tri Dharma Perguruan Tinggi</p>
                            </div>
                        </div>
                    <ol class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">1</span>
                            <p class="text-xs text-slate-700 leading-relaxed">Menyelenggarakan pendidikan dan pembelajaran yang mampu menghasilkan lulusan yang unggul, berwawasan kebangsaan, berjiwa wirausaha dan berinovasi teknologi di bidang Teknik Sipil.</p>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">2</span>
                            <p class="text-xs text-slate-700 leading-relaxed">Melaksanakan penelitian yang berkualitas, inovatif, dan berdaya saing global di bidang Teknik Sipil.</p>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">3</span>
                            <p class="text-xs text-slate-700 leading-relaxed">Melaksanakan pengabdian kepada masyarakat untuk penerapan dan inovasi teknologi di bidang Teknik Sipil.</p>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center">4</span>
                            <p class="text-xs text-slate-700 leading-relaxed">Menyelenggarakan kerja sama yang produktif dan berkelanjutan di tingkat lokal, nasional, dan internasional di bidang Teknik Sipil.</p>
                        </li>
                    </ol>
                    </div>
                </div>

            </div>

            <!-- Stats Row -->
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-5">
                <div class="bg-white/5 backdrop-blur rounded-2xl p-5 border border-blue-800/30 text-center">
                    <span class="block text-3xl font-black text-amber-400">S-1</span>
                    <span class="block text-xs text-slate-300 mt-1">Jenjang Program</span>
                </div>
                <div class="bg-white/5 backdrop-blur rounded-2xl p-5 border border-blue-800/30 text-center">
                    <span class="block text-3xl font-black text-amber-400">144</span>
                    <span class="block text-xs text-slate-300 mt-1">Total SKS</span>
                </div>
                <div class="bg-white/5 backdrop-blur rounded-2xl p-5 border border-blue-800/30 text-center">
                    <span class="block text-3xl font-black text-amber-400">8</span>
                    <span class="block text-xs text-slate-300 mt-1">Semester</span>
                </div>
                <div class="bg-white/5 backdrop-blur rounded-2xl p-5 border border-blue-800/30 text-center">
                    <span class="block text-3xl font-black text-amber-400">Baik</span>
                    <span class="block text-xs text-slate-300 mt-1">Akreditasi LAM Teknik</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SECTION Program Studi, KEGIATAN MAHASISWA, AGENDA & INFORMASI (PERSIS GAYA FOTO PERTAMA) -->
    <section id="profil" class="py-16 bg-white border-b border-slate-200 relative overflow-hidden">
        <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih Polos -->
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 280px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
                
                <!-- KOLOM KIRI (LEBAR: Program Studi TEKNIK SIPIL & KEGIATAN MAHASISWA) -->
                <div class="lg:col-span-8 space-y-12">
                    
                    <!-- BLOK 1: Program Studi TEKNIK SIPIL -->
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight mb-6">
                            Program Studi Teknik Sipil
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <!-- Card 1: Capaian Pembelajaran Lulusan -->
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Capaian Pembelajaran Lulusan" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1541888946425-d0fbb18615f8?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Capaian Pembelajaran Lulusan
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Capaian Pembelajaran Lulusan mahasiswa Program Studi Teknik Sipil Universitas Siliwangi.
                                </p>
                                <a href="#akademik" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            <!-- Card 2: Profil Profesional Mandiri -->
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Profil Profesional Mandiri" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Profil Profesional Mandiri
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Merupakan cerminan pencapaian kualitas yang diharapkan dari lulusan Teknik Sipil UNSIL.
                                </p>
                                <a href="#profil" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            <!-- Card 3: Kurikulum Teknik Sipil -->
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/lab-civil.jpg') }}" alt="Kurikulum Teknik Sipil" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Kurikulum Teknik Sipil
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Kurikulum Program Studi Sarjana (S-1) Teknik Sipil Universitas Siliwangi.
                                </p>
                                <a href="#akademik" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- BLOK 2: KEGIATAN MAHASISWA (BERDASARKAN DATA RESMI @SIPILUNSIL & @HMSFTUNSIL) -->
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                            <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight">
                                Kegiatan Mahasiswa
                            </h2>
                            <div class="flex items-center space-x-2">
                                <a href="https://instagram.com/hmsftunsil" target="_blank" class="inline-flex items-center text-xs font-bold text-pink-700 bg-pink-50 hover:bg-pink-100 px-3 py-1.5 rounded-full border border-pink-200 transition">
                                    <i class="fa-brands fa-instagram mr-1.5 text-sm"></i> @hmsftunsil
                                </a>
                                <a href="https://instagram.com/sipilunsil" target="_blank" class="inline-flex items-center text-xs font-bold text-blue-700 bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded-full border border-blue-200 transition">
                                    <i class="fa-brands fa-instagram mr-1.5 text-sm"></i> @sipilunsil
                                </a>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <!-- Card 1: SCIENCE Bridge Competition (pindah ke posisi 1) -->
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/event-1.jpg') }}" alt="Kompetisi Jembatan Nasional SCIENCE" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    SCIENCE: Bridge Competition
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Ajang tahunan bergengsi National Bridge Design Competition & Lomba Kuat Tekan Beton tingkat nasional.
                                </p>
                                <a href="#mahasiswa-alumni" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            <!-- Card 2: Organisasi HMS UNSIL (pindah ke posisi 2) -->
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Himpunan Mahasiswa Sipil FT UNSIL" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=600'">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Organisasi HMS FT UNSIL
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    Wadah pengembangan kepemimpinan, keprofesian, dan solidaritas mahasiswa Teknik Sipil UNSIL.
                                </p>
                                <a href="#mahasiswa-alumni" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>

                            <!-- Card 3: Seminar Internasional Taiwan (tetap posisi 3) -->
                            <div class="relative rounded-2xl overflow-hidden shadow-md group h-96 flex flex-col justify-end p-5 bg-slate-900">
                                <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan NCKU" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c2f52]/95 via-[#0c2f52]/65 to-transparent"></div>
                                <span class="relative z-10 inline-flex items-center gap-1 text-[10px] font-bold text-amber-300 bg-amber-400/20 border border-amber-400/30 px-2 py-0.5 rounded-full mb-2 w-fit">
                                    <i class="fa-solid fa-globe text-[9px]"></i> 12 Okt 2026
                                </span>
                                <h3 class="relative z-10 text-base font-bold text-white leading-tight">
                                    Seminar Internasional IndonesiaTaiwan
                                </h3>
                                <p class="relative z-10 text-xs text-slate-200 mt-2 line-clamp-3 leading-relaxed font-normal">
                                    "Bridging Futures"  Peluang studi S2 &amp; S3 di Taiwan bersama Yanuar Haryanto, Ph.D. dari NCKU Taiwan.
                                </p>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="relative z-10 inline-block bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs px-5 py-2 rounded-lg shadow-md mt-4 transition text-center w-fit">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!-- end kolom kiri -->

                <!-- KOLOM KANAN: AGENDA & INFORMASI (BERITA) -->
                <div class="lg:col-span-4 space-y-10 lg:pl-2">
                    
                    <!-- BLOK AGENDA (SUMBER: @HMSFTUNSIL & @SIPILUNSIL) -->
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight">
                            Agenda
                        </h2>
                        
                        <div class="mt-4 p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2.5">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full inline-block">
                                Segera Hadir
                            </span>
                            <h4 class="text-xs font-bold text-slate-900 leading-snug">
                                SCIENCE: National Bridge Design & Concrete Competition
                            </h4>
                            <p class="text-[11px] text-slate-500">
                                <i class="fa-solid fa-calendar-day text-blue-700 mr-1"></i> Rangkaian kegiatan tahunan HMS FT UNSIL
                            </p>
                        </div>

                        <div class="mt-4 flex flex-wrap gap-2">
                            <a href="#agenda" class="inline-block bg-[#0070BA] hover:bg-[#005a96] text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition">
                                Lihat Agenda Selengkapnya
                            </a>
                            <a href="https://instagram.com/hmsftunsil" target="_blank" class="inline-flex items-center text-xs font-bold text-pink-700 bg-pink-50 hover:bg-pink-100 px-3 py-2 rounded-lg border border-pink-200 transition">
                                <i class="fa-brands fa-instagram mr-1.5"></i> @hmsftunsil
                            </a>
                        </div>
                    </div>

                    <!-- BLOK INFORMASI / BERITA RESMI (@SIPILUNSIL & @HMSFTUNSIL) -->
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-[#154c79] font-heading tracking-tight mb-5">
                            Informasi
                        </h2>

                        <div class="space-y-5">
                            <!-- Berita 1: Seminar Internasional Taiwan (TERBARU) -->
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <div class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-blue-700 font-bold text-[10px] bg-blue-50 border border-blue-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-solid fa-globe text-[9px]"></i> 12 Oktober 2026 &bull; @sipilunsil
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        <a href="{{ route('berita.seminar-taiwan') }}" class="hover:underline">Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL</a>
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Narasumber: Yanuar Haryanto, Ph.D. (NCKU Taiwan) - peluang studi S2 &amp; S3 di Taiwan bagi sivitas akademika Teknik Sipil UNSIL.
                                    </p>
                                </div>
                            </article>

                            <!-- Berita 2: National Bridge Design Competition SCIENCE -->
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <div class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video">
                                    <img src="{{ asset('images/event-3.jpg') }}" alt="Bridge Design Competition" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" onerror="this.style.opacity='0.4'">
                                </div>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-pink-700 font-bold text-[10px] bg-pink-50 border border-pink-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-brands fa-instagram text-[9px]"></i> @hmsftunsil
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        Babak Final National Bridge Design Competition SCIENCE di FT UNSIL
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Kompetisi rancang jembatan nasional mempertemukan finalis dari berbagai perguruan tinggi se-Indonesia.
                                    </p>
                                </div>
                            </article>

                            <!-- Berita 3: Kunjungan Ilmiah Bendungan Leuwikeris -->
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <div class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video">
                                    <img src="{{ asset('images/event-1.jpg') }}" alt="Kunjungan Bendungan Leuwikeris" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" onerror="this.style.opacity='0.4'">
                                </div>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-blue-700 font-bold text-[10px] bg-blue-50 border border-blue-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-brands fa-instagram text-[9px]"></i> @sipilunsil
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        Kunjungan Ilmiah ke Proyek Strategis Bendungan Leuwikeris bersama BBWS
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Studi lapangan metode konstruksi tubuh bendungan dan konservasi sumber daya air.
                                    </p>
                                </div>
                            </article>

                            <!-- Berita 4: Pelepasan Calon Wisudawan Sarjana Teknik Sipil -->
                            <article class="flex items-start space-x-3.5 group cursor-pointer">
                                <div class="w-24 sm:w-28 flex-shrink-0 rounded-xl overflow-hidden bg-slate-200 aspect-video">
                                    <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pelepasan Calon Wisudawan Teknik Sipil" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex-1">
                                    <span class="inline-flex items-center gap-1 text-blue-700 font-bold text-[10px] bg-blue-50 border border-blue-200 px-2 py-0.5 rounded-full mb-1">
                                        <i class="fa-solid fa-graduation-cap text-[9px]"></i> Periode Wisuda &bull; @sipilunsil
                                    </span>
                                    <h3 class="text-xs sm:text-sm font-bold text-slate-900 group-hover:text-blue-700 leading-snug line-clamp-2 mt-0.5">
                                        Pelepasan Calon Wisudawan Program Studi Teknik Sipil Fakultas Teknik UNSIL
                                    </h3>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                        Mencetak lulusan sarjana teknik yang kompeten, beretika, dan siap berkontribusi di industri konstruksi nasional.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- STATISTIK BAR - di bawah Kegiatan Mahasiswa (Diberi Ornamen Corak Tugu FT UNSIL) -->
    <div class="bg-[#0070BA] border-y border-blue-700 relative overflow-hidden">
        <!-- Corak 3: Background Texture Krawangan Busur Geometris FT UNSIL -->
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>

        <!-- Corak 2: Pita Aksen Daun Halus di atas & bawah -->
        <div class="absolute top-0 left-0 right-0 h-1 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 8px;"></div>
        <div class="absolute bottom-0 left-0 right-0 h-1 opacity-20 bg-repeat-x" style="background-image: url('{{ asset('images/corak-daun-white.png') }}'); background-size: auto 8px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-9 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
                <div class="reveal">
                    <span class="block text-3xl sm:text-4xl font-black counter-num" data-target="1200">0</span>
                    <span class="block text-xs font-semibold text-blue-100 mt-1 uppercase tracking-wide">Mahasiswa Aktif</span>
                </div>
                <div class="reveal">
                    <span class="block text-3xl sm:text-4xl font-black counter-num" data-target="18">0</span>
                    <span class="block text-xs font-semibold text-blue-100 mt-1 uppercase tracking-wide">Dosen Aktif</span>
                </div>
                <div class="reveal">
                    <span class="block text-3xl sm:text-4xl font-black counter-num" data-target="3500">0</span>
                    <span class="block text-xs font-semibold text-blue-100 mt-1 uppercase tracking-wide">Alumni Lulus</span>
                </div>
                <div class="reveal">
                    <span class="block text-3xl sm:text-4xl font-black counter-num" data-target="40">0</span>
                    <span class="block text-xs font-semibold text-blue-100 mt-1 uppercase tracking-wide">Tahun Dedikasi (1984)</span>
                </div>
            </div>
        </div>
    </div>



    <!-- LOKASI KAMPUS (HANYA DI BERANDA / VISI MISI) -->
<section id="lokasi" class="bg-white relative overflow-hidden border-t border-slate-100">
        <!-- Corak batik tipis -->
        <div class="absolute inset-0 opacity-[0.07] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 240px auto;"></div>

        <div class="relative z-10">
            <!-- Header strip -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-8">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
                    <div>
                        <span class="text-amber-600 font-bold uppercase text-xs tracking-widest">
                            <i class="fa-solid fa-location-dot mr-1.5"></i>Lokasi Kampus
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0B2A4A] mt-1 font-heading">
                            UNSIL Kampus 2 &mdash; Fakultas Teknik
                        </h2>
                        <p class="text-slate-500 text-sm mt-1">Universitas Siliwangi, Tasikmalaya, Jawa Barat</p>
                    </div>
                    <a href="https://maps.app.goo.gl/X63psJj9kgDz1GCt6" target="_blank"
                       class="inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-[#0B2A4A] font-bold text-xs px-5 py-2.5 rounded-full shadow transition whitespace-nowrap self-start md:self-auto">
                        <i class="fa-solid fa-diamond-turn-right"></i>
                        Petunjuk Arah
                    </a>
                </div>

                <!-- Grid: Map + Info -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 rounded-2xl overflow-hidden shadow-xl border border-slate-200">

                    <!-- Google Maps Embed (2/3 lebar) — zoom ke UNSIL Kampus 2 -->
                    <div class="lg:col-span-2 h-80 lg:h-[420px]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.3!2d108.22451!3d-7.35549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5ea6c4d7e97f%3A0x4a2bc0a960bf2e6!2sKampus%202%20Universitas%20Siliwangi!5e0!3m2!1sid!2sid!4v1731830000000!5m2!1sid!2sid"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Lokasi Fakultas Teknik Universitas Siliwangi Kampus 2">
                        </iframe>
                    </div>

                    <!-- Info Kontak (1/3 lebar) — background putih -->
                    <div class="bg-white p-7 flex flex-col justify-between gap-6">
                        <!-- Alamat -->
                        <div>
                            <div class="flex items-start gap-3 mb-5">
                                <div class="w-9 h-9 bg-amber-50 border border-amber-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-map-pin text-amber-500 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Alamat</p>
                                    <p class="text-slate-500 text-xs leading-relaxed">
                                        Jl. Mugarsari, Kelurahan Mugarsari,<br>
                                        Kec. Tamansari, Kota Tasikmalaya,<br>
                                        Jawa Barat 46196
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 mb-5">
                                <div class="w-9 h-9 bg-blue-50 border border-blue-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-phone text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Telepon</p>
                                    <p class="text-slate-500 text-xs">(0265) 330634</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 mb-5">
                                <div class="w-9 h-9 bg-green-50 border border-green-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-envelope text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Email</p>
                                    <p class="text-slate-500 text-xs">sipil@unsil.ac.id</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 bg-purple-50 border border-purple-200 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fa-solid fa-clock text-purple-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[#0B2A4A] font-bold text-sm mb-1">Jam Layanan</p>
                                    <p class="text-slate-500 text-xs leading-relaxed">
                                        Senin &ndash; Jumat<br>
                                        07.30 &ndash; 16.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Transport info -->
                        <div class="border-t border-slate-100 pt-5">
                            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-3">Akses Transportasi</p>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <i class="fa-solid fa-train text-amber-500 w-4 text-center"></i>
                                    <span>&#177;3 km dari Stasiun Tasikmalaya</span>
                                </div>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <i class="fa-solid fa-bus text-amber-500 w-4 text-center"></i>
                                    <span>&#177;1 km dari Terminal Indihiang</span>
                                </div>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <i class="fa-solid fa-car text-amber-500 w-4 text-center"></i>
                                    <span>Tersedia area parkir luas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div><!-- /panel-visi-misi -->

<div id="panel-sejarah" class="nav-panel hidden">
    <!-- SEJARAH PROGRAM STUDI -->
    <section id="profil-sejarah" class="py-12 bg-white relative overflow-hidden border-t border-slate-100">
        <!-- Corak Batik Background -->
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-amber-600 font-bold uppercase text-xs tracking-widest">Program Studi Teknik Sipil &bull; UNSIL</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B2A4A] mt-2 font-heading">Sejarah Program Studi</h2>
                <div class="w-16 h-1 bg-amber-400 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">Perjalanan panjang dalam membangun generasi insinyur sipil yang unggul, berkarakter, dan berdaya saing nasional.</p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <!-- Garis vertikal timeline -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-amber-400 via-blue-300 to-[#0B2A4A]/20"></div>

                <!-- Item 1: Pendirian 1984 -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-6">
                    <div class="md:w-1/2 md:pr-14 md:text-right order-2 md:order-1">
                        <div class="bg-[#0B2A4A] text-white rounded-2xl p-6 shadow-lg inline-block w-full text-left md:text-right">
                            <span class="text-amber-400 text-xs font-bold uppercase tracking-widest">1984</span>
                            <h3 class="text-lg font-bold mt-1 mb-2">Pendirian Program Studi</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                Program Studi Teknik Sipil Universitas Siliwangi resmi berdiri berdasarkan Surat Keputusan Yayasan
                                Universitas Siliwangi pada tanggal 31 Desember 1984. Program studi ini merupakan salah satu program
                                studi tertua di lingkungan Fakultas Teknik Universitas Siliwangi, Tasikmalaya, Jawa Barat.
                            </p>
                        </div>
                    </div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-amber-400 border-4 border-white shadow-md items-center justify-center z-10 order-1 md:order-2 mt-4">
                        <i class="fa-solid fa-landmark text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-3"></div>
                </div>

                <!-- Item 2: Izin Operasional 1990 -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-6">
                    <div class="md:w-1/2 md:pr-14 order-2 md:order-1"></div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-file-contract text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2">
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-md">
                            <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">1990-an</span>
                            <h3 class="text-lg font-bold text-[#0B2A4A] mt-1 mb-2">Perkembangan & Kurikulum Nasional</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Memasuki era 1990-an, Program Studi Teknik Sipil terus berkembang dengan penyesuaian kurikulum
                                mengikuti standar nasional. Dosen-dosen berkualifikasi tinggi mulai bergabung, laboratorium
                                struktural dan mekanika tanah dibangun sebagai penunjang kegiatan akademik mahasiswa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Akreditasi Pertama -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-6">
                    <div class="md:w-1/2 md:pr-14 md:text-right order-2 md:order-1">
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-md inline-block w-full text-left md:text-right">
                            <span class="text-green-600 text-xs font-bold uppercase tracking-widest">2000-an</span>
                            <h3 class="text-lg font-bold text-[#0B2A4A] mt-1 mb-2">Akreditasi Nasional & Ekspansi Riset</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Program studi berhasil mendapatkan akreditasi nasional dari BAN-PT, menandai pengakuan resmi
                                atas kualitas penyelenggaraan pendidikan. Kegiatan penelitian dan pengabdian masyarakat
                                di bidang infrastruktur, keairan, dan geoteknik mulai tumbuh pesat di era ini.
                            </p>
                        </div>
                    </div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-green-500 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-award text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2"></div>
                </div>

                <!-- Item 4: Era Modern 2010s -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-6">
                    <div class="md:w-1/2 md:pr-14 order-2 md:order-1"></div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-indigo-600 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-flask text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2">
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-md">
                            <span class="text-indigo-600 text-xs font-bold uppercase tracking-widest">2010-an</span>
                            <h3 class="text-lg font-bold text-[#0B2A4A] mt-1 mb-2">Modernisasi Laboratorium & Kerja Sama Industri</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Pembangunan laboratorium modern meliputi Lab. Teknologi Bahan Konstruksi, Lab. Perkerasan Jalan,
                                dan Lab. Hidrolika &amp; Hidrologi. Program studi menjalin kerja sama dengan instansi pemerintah
                                (Dinas PUPR, BBWS Citanduy) dan kontraktor nasional untuk program magang dan riset terapan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Kini / Akreditasi LAM Teknik -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0">
                    <div class="md:w-1/2 md:pr-14 md:text-right order-2 md:order-1">
                        <div class="bg-gradient-to-br from-[#0B2A4A] to-[#154c79] text-white rounded-2xl p-6 shadow-lg inline-block w-full text-left md:text-right">
                            <span class="text-amber-400 text-xs font-bold uppercase tracking-widest">2023 &mdash; Kini</span>
                            <h3 class="text-lg font-bold mt-1 mb-2">Akreditasi &ldquo;Baik&rdquo; LAM Teknik &amp; Menuju Visi 2030</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                Program Studi Teknik Sipil berhasil meraih akreditasi <strong class="text-amber-400">&ldquo;Baik&rdquo;</strong>
                                dari Lembaga Akreditasi Mandiri Teknik (LAM Teknik) pada tahun 2023, berlaku hingga 2027.
                                Saat ini program studi aktif mengembangkan riset unggulan, seminar internasional, dan
                                kolaborasi lintas negara untuk mewujudkan visi sebagai pusat keunggulan Teknik Sipil
                                di tingkat nasional pada tahun 2030.
                            </p>
                        </div>
                    </div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-amber-400 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-star text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2"></div>
                </div>
            </div>

            <!-- Bottom stat strip -->
            <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-5">
                <div class="bg-[#0B2A4A] rounded-2xl p-5 text-center text-white shadow">
                    <div class="text-3xl font-black text-amber-400">1984</div>
                    <div class="text-xs text-slate-300 mt-1 font-semibold uppercase tracking-wide">Tahun Berdiri</div>
                </div>
                <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center shadow">
                    <div class="text-3xl font-black text-blue-700">40+</div>
                    <div class="text-xs text-slate-500 mt-1 font-semibold uppercase tracking-wide">Tahun Berkiprah</div>
                </div>
                <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center shadow">
                    <div class="text-3xl font-black text-green-700">3.500+</div>
                    <div class="text-xs text-slate-500 mt-1 font-semibold uppercase tracking-wide">Alumni Lulus</div>
                </div>
                <div class="bg-[#0B2A4A] rounded-2xl p-5 text-center text-white shadow">
                    <div class="text-3xl font-black text-amber-400">S-1</div>
                    <div class="text-xs text-slate-300 mt-1 font-semibold uppercase tracking-wide">Jenjang Program</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. AKADEMIK (Kurikulum) -->
</div><!-- /panel-sejarah -->

<div id="panel-dosen" class="nav-panel hidden">
        <!-- DOSEN & TENAGA PENGAJAR -->
    <section id="dosen" class="py-16 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Sumber Daya Manusia</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Dosen &amp; Tenaga Pengajar</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm">Dosen-dosen berkualifikasi S-2 dan S-3 lulusan perguruan tinggi terkemuka dalam dan luar negeri.</p>
            </div>
            <div class="max-w-4xl mx-auto bg-white rounded-2xl p-4 sm:p-6 border border-slate-200 text-center shadow-md">
                <img src="{{ asset('images/daftar-dosen.png') }}" alt="Daftar Dosen Teknik Sipil UNSIL" class="w-full rounded-xl shadow-sm mx-auto object-cover" onerror="this.parentElement.innerHTML='<div class=\'py-10 text-slate-500\'><i class=\'fa-solid fa-users text-4xl text-slate-400 mb-2\'></i><p class=\'text-sm font-semibold\'>Daftar Dosen &amp; Tenaga Pengajar Teknik Sipil UNSIL</p></div>'">
            </div>
        </div>
    </section>
</div><!-- /panel-dosen -->

<div id="panel-kurikulum" class="nav-panel hidden"><section id="akademik" class="py-20 bg-slate-100 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kurikulum & Pembelajaran</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Bidang Keahlian Akademik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-4 leading-relaxed">
                    Kurikulum 144 SKS dirancang untuk menjawab kebutuhan industri jasa konstruksi dan rekayasa sipil.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-bridge"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Rekayasa Struktur</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Analisis struktur gedung bertingkat tahan gempa, beton bertulang, struktur baja prategang, dan jembatan.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-mountain"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Geoteknik & Pondasi</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Mekanika tanah, pengujian sondir/boring, daya dukung pondasi dalam & dangkal, serta stabilitas lereng.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-road"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Transportasi & Jalan</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Perancangan geometrik jalan raya, teknologi perkerasan aspal lentur & kaku, dan rekayasa lalu lintas.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Sumber Daya Air</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Hidrologi terapan, sistem drainase perkotaan, bendungan, saluran irigasi, dan mitigasi banjir.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FASILITAS (Laboratorium) -->
    

</div><!-- /panel-kurikulum -->

<div id="panel-download" class="nav-panel hidden">
<!-- 10. DOWNLOAD -->
    <section id="download" class="py-20 bg-white relative overflow-hidden">
        <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih Polos -->
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Akses Berkas Resmi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Download</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                    <div class="text-blue-700 text-2xl mb-2"><i class="fa-solid fa-file-pdf"></i></div>
                    <h4 class="text-sm font-bold text-slate-900">Modul Praktikum</h4>
                    <p class="text-xs text-slate-500 mt-1">TBK, Jalan, Ukur Tanah, Tanah.</p>
                    <a href="#download" class="inline-block mt-3 text-xs font-bold text-blue-700 hover:underline">Unduh Berkas &rarr;</a>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                    <div class="text-amber-600 text-2xl mb-2"><i class="fa-solid fa-file-lines"></i></div>
                    <h4 class="text-sm font-bold text-slate-900">Panduan KP</h4>
                    <p class="text-xs text-slate-500 mt-1">SOP & Format Laporan KP.</p>
                    <a href="#download" class="inline-block mt-3 text-xs font-bold text-amber-600 hover:underline">Unduh Berkas &rarr;</a>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                    <div class="text-emerald-600 text-2xl mb-2"><i class="fa-solid fa-book-bookmark"></i></div>
                    <h4 class="text-sm font-bold text-slate-900">Pedoman Skripsi/TA</h4>
                    <p class="text-xs text-slate-500 mt-1">Sistematika penulisan tugas akhir.</p>
                    <a href="#download" class="inline-block mt-3 text-xs font-bold text-emerald-600 hover:underline">Unduh Berkas &rarr;</a>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                    <div class="text-purple-600 text-2xl mb-2"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4 class="text-sm font-bold text-slate-900">SOP Laboratorium</h4>
                    <p class="text-xs text-slate-500 mt-1">Tata tertib & keselamatan K3.</p>
                    <a href="#download" class="inline-block mt-3 text-xs font-bold text-purple-600 hover:underline">Unduh Berkas &rarr;</a>
                </div>
            </div>
        </div>
    </section>

</div><!-- /panel-download -->

<div id="panel-layanan" class="nav-panel hidden">
    <!-- 11. LAYANAN TERPADU -->
    <section id="layanan" class="py-20 bg-slate-100 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Administrasi & Pelayanan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Layanan Terpadu</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h4 class="text-sm font-bold text-slate-900">Surat Pengantar & Izin Survei</h4>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pengurusan surat pengantar penelitian skripsi dan izin kerja praktik ke instansi eksternal.</p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-stamp"></i>
                    </div>
                    <h4 class="text-sm font-bold text-slate-900">Bebas Laboratorium</h4>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Penerbitan surat bebas pinjam alat laboratorium sebagai syarat yudisium kelulusan.</p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h4 class="text-sm font-bold text-slate-900">Legalisir Dokumen</h4>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pelayanan verifikasi keabsahan dan legalisir ijazah serta transkrip akademik.</p>
                </div>
            </div>
        </div>
    </section>

    
</div><!-- /panel-layanan -->

<div id="panel-fasilitas" class="nav-panel hidden"><section id="fasilitas" class="py-20 bg-white relative overflow-hidden">
        <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih Polos -->
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Sarana Praktikum</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Laboratorium</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-cube"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Lab. Teknologi Bahan Konstruksi (TBK)</h4>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Mesin uji tekan beton, uji tarik baja tulangan, sieve shaker agregat, dan oven pengering.</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Lab. Perkerasan Jalan</h4>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Marshall Test compactor, penetrometer aspal, daktilitas, titik nyala, dan uji kadar aspal.</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-bore-hole"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Lab. Mekanika Tanah & Geoteknik</h4>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Alat sondir hidrolik 2.5 ton, bor mesin, direct shear test, triaxial, dan konsolidasi tanah.</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Lab. Hidrolika & Sumber Daya Air</h4>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Open channel flume, alat ukur debit air, uji aliran pipa, dan alat demonstrasi hidraulik.</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Lab. Komputasi Rekayasa Sipil</h4>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Software rekayasa sipil: SAP2000, ETABS, AutoCAD, HEC-RAS, dan bahasa pemrograman komputasi.</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Lab. Perpetaan & Ukur Tanah</h4>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Total Station digital, Theodolite optik/elektronik, Waterpass otomatis, dan GPS Geodetik navigasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. KERJA SAMA -->
    </div><!-- /panel-fasilitas -->
<div id="panel-riset" class="nav-panel hidden"><section id="kerjasama" class="py-20 bg-slate-100 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kemitraan Strategis</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Kerja Sama</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <div class="text-blue-700 text-2xl mb-3"><i class="fa-solid fa-building-flag"></i></div>
                    <h3 class="text-base font-bold text-slate-900">BUMN & Kontraktor Nasional</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Magang MBKM industri konstruksi, rekrutmen alumni, dan kuliah praktisi.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <div class="text-amber-600 text-2xl mb-3"><i class="fa-solid fa-landmark"></i></div>
                    <h3 class="text-base font-bold text-slate-900">Instansi Pemerintah & PUPR</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Kerja sama dengan Dinas PUPR, BBWS Citanduy, dan Pemda wilayah Priangan Timur.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <div class="text-emerald-600 text-2xl mb-3"><i class="fa-solid fa-certificate"></i></div>
                    <h3 class="text-base font-bold text-slate-900">Asosiasi Profesi PII & LPJK</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Pembinaan sertifikasi kompetensi keinsinyuran dan uji kompetensi kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. RISET DAN PKM -->
    <section id="riset-pkm" class="py-20 bg-white relative overflow-hidden">
        <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih Polos -->
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Inovasi & Kontribusi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Riset dan Kolaborasi</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center"><i class="fa-solid fa-microscope text-blue-700 mr-2"></i> Fokus Penelitian Dosen</h3>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li class="flex items-start space-x-2"><i class="fa-solid fa-check text-blue-700 mt-0.5"></i><span>Pemanfaatan fly ash dan geopolimer untuk beton berkelanjutan ramah lingkungan.</span></li>
                        <li class="flex items-start space-x-2"><i class="fa-solid fa-check text-blue-700 mt-0.5"></i><span>Stabilisasi tanah lempung ekspansif dengan bahan tambah lokal Priangan Timur.</span></li>
                        <li class="flex items-start space-x-2"><i class="fa-solid fa-check text-blue-700 mt-0.5"></i><span>Kajian kinerja campuran aspal panas daur ulang untuk jalan raya.</span></li>
                    </ul>
                </div>

                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center"><i class="fa-solid fa-hands-holding-circle text-amber-600 mr-2"></i> Pengabdian Kepada Masyarakat (PKM)</h3>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li class="flex items-start space-x-2"><i class="fa-solid fa-check text-amber-600 mt-0.5"></i><span>Pendampingan teknis pembangunan sarana jembatan perintis dan jalan desa.</span></li>
                        <li class="flex items-start space-x-2"><i class="fa-solid fa-check text-amber-600 mt-0.5"></i><span>Sosialisasi dan pelatihan konstruksi rumah sederhana tahan gempa bagi masyarakat.</span></li>
                        <li class="flex items-start space-x-2"><i class="fa-solid fa-check text-amber-600 mt-0.5"></i><span>Perencanaan saluran drainase penanggulangan genangan air di kawasan pemukiman.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. KARYA DOSEN & DOSEN -->
    </div><!-- /panel-riset -->
<div id="panel-karya" class="nav-panel hidden"><section id="karya-dosen" class="py-20 bg-slate-100 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Intelektual & Publikasi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Karya Dosen</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <span class="text-[10px] font-bold text-blue-700 bg-blue-50 px-2 py-0.5 rounded-full uppercase">Jurnal Ilmiah &bull; SINTA</span>
                    <h4 class="text-sm font-bold text-slate-900 mt-2">Akselerasi : Jurnal Ilmiah Teknik Sipil</h4>
                    <p class="text-xs text-slate-500 mt-1">Jurnal berkala publikasi riset rekayasa struktur, transportasi, geoteknik, dan sumber daya air FT UNSIL terindeks SINTA.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-full uppercase">Paten & HKI</span>
                    <h4 class="text-sm font-bold text-slate-900 mt-2">Hak Cipta Inovasi Material</h4>
                    <p class="text-xs text-slate-500 mt-1">Paten metode perkuatan tanah dan formula campuran beton ekonomis.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full uppercase">Buku Ajar</span>
                    <h4 class="text-sm font-bold text-slate-900 mt-2">Buku Referensi Keinsinyuran</h4>
                    <p class="text-xs text-slate-500 mt-1">Buku Mekanika Rekayasa, Analisis Struktur, dan Rekayasa Pondasi.</p>
                </div>
            </div>

        </div>
    </section>
    </div><!-- /panel-karya -->

    <div id="panel-mahasiswa" class="nav-panel hidden">
    <!-- 12. MAHASISWA DAN ALUMNI -->
    <section id="mahasiswa-alumni" class="py-20 bg-white relative overflow-hidden">
        <!-- Corak Batik Krawangan Kuning Emas Cerah pada Background Putih Polos -->
        <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Komunitas Kampus</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Mahasiswa dan Alumni</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Himpunan Mahasiswa Sipil (HMS) UNSIL</h3>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Wadah organisasi kemahasiswaan yang aktif mengasah kepemimpinan, menyelenggarakan Civil Festival, seminar rekayasa infrastruktur, dan lomba jembatan nasional.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-slate-200 mt-6 text-xs font-semibold text-blue-700">
                        <i class="fa-solid fa-award mr-1 text-amber-500"></i> Berprestasi di Lomba Rancang Jembatan & Beton Nasional
                    </div>
                </div>

                <div id="tracer" class="bg-slate-50 rounded-3xl p-8 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Ikatan Alumni & Tracer Study</h3>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Jejaring ribuan alumni Teknik Sipil UNSIL yang berkarier di BUMN konstruksi, konsultan perencana/pengawas, kementerian PUPR, perbankan, dan pengusaha jasa konstruksi.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-slate-200 mt-6">
                        <a href="https://unsil.ac.id" target="_blank" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-800">
                            <span>Kuesioner Tracer Study Alumni UNSIL</span>
                            <i class="fa-solid fa-arrow-right ml-1.5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12b. GALERI INSTAGRAM @sipilunsil -->
    <section class="py-16 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10">
                <div>
                    <span class="text-pink-600 font-bold uppercase text-xs tracking-widest">Media Sosial Resmi</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1 font-heading">Galeri <span class="text-pink-600">@sipilunsil</span></h2>
                </div>
                <a href="https://instagram.com/sipilunsil" target="_blank"
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white text-xs font-bold px-5 py-2.5 rounded-full shadow-lg hover:shadow-pink-400/40 transition hover:-translate-y-0.5">
                    <i class="fa-brands fa-instagram text-sm"></i>
                    Ikuti @sipilunsil
                </a>
            </div>

            <!-- Grid 6 foto  gambar dari backup wp-uploads, fallback gradient navy -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                @php
                $igPhotos = [
                    ['img' => 'seminar-taiwan-ncku.jpg',       'caption' => 'Seminar Internasional "Bridging Futures" Indonesia - Taiwan'],
                    ['img' => 'tugu-fakultas-teknik-unsil.jpg', 'caption' => 'Tugu Landmark Ornamen Fakultas Teknik Universitas Siliwangi'],
                    ['img' => 'event-1.jpg',                   'caption' => 'Kunjungan Ilmiah Bendungan Leuwikeris bersama BBWS'],
                    ['img' => 'event-3.jpg',                   'caption' => 'SCIENCE: National Bridge Design & Concrete Competition'],
                    ['img' => 'hms-unsil.jpg',                 'caption' => 'Organisasi HMS FT UNSIL - Pengembangan Mahasiswa'],
                    ['img' => 'wisuda-unsil.jpg',              'caption' => 'Wisuda Sarjana Teknik Sipil Universitas Siliwangi'],
                ];
                @endphp
                @foreach($igPhotos as $p)
                <div class="ig-card relative aspect-square rounded-2xl overflow-hidden bg-[#0B2A4A] img-fallback shadow-md group cursor-pointer">
                    <img src="{{ asset('images/' . $p['img']) }}" alt="{{ $p['caption'] }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.style.display='none'">
                    <div class="ig-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-3">
                        <i class="fa-brands fa-instagram text-white/70 text-xl mb-1"></i>
                        <p class="text-white text-[10px] leading-tight font-semibold line-clamp-2">{{ $p['caption'] }}</p>
                        <span class="text-pink-300 text-[9px] font-bold mt-1">@sipilunsil</span>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-8">
                <a href="https://instagram.com/sipilunsil" target="_blank"
                   class="inline-flex items-center gap-2 text-sm font-semibold text-pink-600 hover:text-pink-800 transition">
                    <i class="fa-brands fa-instagram"></i>
                    Lihat semua 38 postingan di Instagram
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    </div><!-- /panel-mahasiswa -->


<!-- Footer (dengan Ornamen Krawangan FT UNSIL) -->
    <footer class="bg-unsil-nav text-slate-300 pt-16 pb-8 border-t border-slate-800 relative overflow-hidden">
        <!-- Corak 3: Texture Krawangan halus -->
        <div class="absolute inset-0 opacity-[0.03] bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 240px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-slate-800 text-xs">
                <!-- Brand -->
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
                    <p class="text-slate-400 leading-relaxed mb-4">
                        Fakultas Teknik Universitas Siliwangi, Kampus 2 Mugarsari, Kec. Tamansari, Kota Tasikmalaya, Jawa Barat 46196.
                    </p>

                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-5">Kontak Resmi</h4>
                    <ul class="space-y-3 text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-phone text-amber-400 mt-0.5 w-4"></i>
                            <span>(0265) 323537</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-envelope text-amber-400 mt-0.5 w-4"></i>
                            <span>sipil@unsil.ac.id</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-globe text-amber-400 mt-0.5 w-4"></i>
                            <a href="https://unsil.ac.id" target="_blank" class="hover:text-white transition">unsil.ac.id</a>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-amber-400 mt-0.5 w-4"></i>
                            <span>J7C2+CVM, Mugarsari, Tamansari, Tasikmalaya 46196</span>
                        </li>
                    </ul>
                </div>

                <!-- Akreditasi & Link -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-5">Akreditasi</h4>
                    <div class="bg-amber-400/10 border border-amber-400/20 rounded-xl p-4 mb-4">
                        <span class="text-amber-400 font-black text-lg block">BAIK</span>
                        <p class="text-slate-400 leading-relaxed mt-1">
                            LAM Teknik No. 0018/SK/LAM Teknik/AS/IV/2023
                        </p>
                    </div>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="#" data-panel="panel-visi-misi" data-scroll="profil" class="hover:text-amber-400 transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[9px] text-amber-400"></i> Profil Program Studi</a></li>
                        <li><a href="#" data-panel="panel-kurikulum" data-scroll="akademik" class="hover:text-amber-400 transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[9px] text-amber-400"></i> Kurikulum S-1</a></li>
                        <li><a href="#" data-panel="panel-fasilitas" class="hover:text-amber-400 transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[9px] text-amber-400"></i> Laboratorium</a></li>
                        <li><a href="#" data-panel="panel-download" data-scroll="download" class="hover:text-amber-400 transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[9px] text-amber-400"></i> Download Berkas</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>


    <!-- Scripts -->
    <script>
        // --- 1. Mobile Drawer Toggle ---
        const btn  = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => menu.classList.toggle('hidden'));
        }

        // --- 2. Counter Animation ---
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

        // --- 3. Scroll Reveal Observer ---
        const revealEls = document.querySelectorAll('.reveal');
        const counterEls = document.querySelectorAll('.counter-num');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        }, { threshold: 0.15 });

        revealEls.forEach(el => observer.observe(el));

        function triggerPanelAnimations(panel) {
            if (!panel) return;
            panel.querySelectorAll('.reveal:not(.visible)').forEach(el => {
                el.classList.add('visible');
            });
            panel.querySelectorAll('.counter-num').forEach(el => {
                if (el.textContent === '0' || el.textContent === '') {
                    animateCounter(el);
                }
            });
        }

        // --- 4. Panel Mapping & Navigation ---
        const panelMap = {
            // Tentang Kami
            'beranda':          'panel-visi-misi',
            'tentang':          'panel-visi-misi',
            'profil':           'panel-visi-misi',
            'profil-prodi':     'panel-visi-misi',
            'visi-misi':        'panel-visi-misi',
            'sejarah':          'panel-sejarah',
            'profil-sejarah':   'panel-sejarah',
            'dosen':            'panel-dosen',
            'staf':             'panel-dosen',

            // Akademik
            'akademik':         'panel-kurikulum',
            'kurikulum':        'panel-kurikulum',
            'layanan':          'panel-layanan',
            'layanan-terpadu':  'panel-layanan',
            'download':         'panel-download',

            // Menu Langsung
            'fasilitas':        'panel-fasilitas',
            'riset':            'panel-riset',
            'riset-pkm':        'panel-riset',
            'kerjasama':        'panel-riset',
            'karya':            'panel-karya',
            'karya-dosen':      'panel-karya',
            'mahasiswa':        'panel-mahasiswa',
            'mahasiswa-alumni': 'panel-mahasiswa',
            'alumni':           'panel-mahasiswa',
            'tracer':           'panel-mahasiswa',
            'lokasi':           'panel-visi-misi'
        };

        function getParentMenuId(panelId) {
            if (panelId === 'panel-visi-misi' || panelId === 'panel-sejarah' || panelId === 'panel-dosen') {
                return 'nav-tentang';
            }
            if (panelId === 'panel-kurikulum' || panelId === 'panel-layanan' || panelId === 'panel-download') {
                return 'nav-akademik';
            }
            return null;
        }

        function switchPanel(panelId) {
            if (!panelId) return;

            // 1. Hide all panels
            const panels = document.querySelectorAll('.nav-panel');
            panels.forEach(p => p.classList.add('hidden'));

            // 2. Show target panel
            const target = document.getElementById(panelId);
            if (target) {
                target.classList.remove('hidden');
                triggerPanelAnimations(target);
            }

            // 3. Update active nav link styling
            const parentId = getParentMenuId(panelId);

            document.querySelectorAll('nav .nav-link, #mobile-menu .nav-link').forEach(link => {
                const linkPanel = link.getAttribute('data-panel');
                const linkId = link.id;
                const isDropdownParent = linkId === 'nav-tentang' || linkId === 'nav-akademik';
                const isDirectMatch = linkPanel === panelId;
                const isParentMatch = isDropdownParent && linkId === parentId;

                if (isDirectMatch || isParentMatch) {
                    link.classList.add('active-nav', 'text-amber-400');
                    const span = link.querySelector('span');
                    if (span) span.classList.add('text-amber-400');
                } else {
                    link.classList.remove('active-nav', 'text-amber-400');
                    const span = link.querySelector('span');
                    if (span) span.classList.remove('text-amber-400');
                }
            });

            // 4. Scroll smoothly to top
            window.scrollTo({ top: 0, behavior: 'smooth' });

            // 5. Close mobile drawer if open
            if (menu) menu.classList.add('hidden');
        }

        // --- 5. Click Listeners for all [data-panel] Elements ---
        document.querySelectorAll('[data-panel]').forEach(el => {
            el.addEventListener('click', (e) => {
                e.preventDefault();
                const panel = el.getAttribute('data-panel');
                if (panel) {
                    switchPanel(panel);
                    history.pushState(null, null, '#' + panel.replace('panel-', ''));
                }
            });
        });

        // --- 6. Intercept Regular Hash Links Inside Content ---
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            if (a.hasAttribute('data-panel')) return;
            a.addEventListener('click', (e) => {
                const href = a.getAttribute('href').replace('#', '');
                if (!href) return;

                if (panelMap.hasOwnProperty(href)) {
                    e.preventDefault();
                    const targetPanel = panelMap[href];
                    if (targetPanel) {
                        switchPanel(targetPanel);
                        history.pushState(null, null, '#' + targetPanel.replace('panel-', ''));
                    } else if (href === 'lokasi') {
                        document.getElementById('lokasi')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                    if (menu) menu.classList.add('hidden');
                }
            });
        });

        // --- 7. Handle Initial Hash on Load & Popstate ---
        function handleHash() {
            const hash = window.location.hash.replace('#', '');
            if (hash && panelMap.hasOwnProperty(hash)) {
                const targetPanel = panelMap[hash];
                if (targetPanel) {
                    switchPanel(targetPanel);
                } else if (hash === 'lokasi') {
                    setTimeout(() => {
                        document.getElementById('lokasi')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100);
                }
            } else {
                switchPanel('panel-visi-misi');
            }
        }

        window.addEventListener('popstate', handleHash);
        window.addEventListener('load', handleHash);
    </script>
</body>
</html>
