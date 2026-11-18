@extends('layouts.app')

@section('title', 'Sejarah | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Sejarah dan rekam jejak perjalanan Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi sejak berdiri tahun 1984.')

@section('content')
    <!-- Page Header Banner -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Sejarah</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Rekam Jejak &amp; Dedikasi
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Sejarah Program Studi
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Empat dekade membangun negeri: perjalanan panjang mendidik dan melahirkan generasi insinyur sipil unggul, berkarakter Siliwangi, dan berdaya saing nasional.
            </p>
        </div>
    </section>

    <!-- Konten Sejarah & Timeline -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.08] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Intro Card -->
            <div class="max-w-3xl mx-auto text-center mb-14">
                <span class="text-amber-600 font-bold uppercase text-xs tracking-widest">Program Studi Teknik Sipil &bull; UNSIL</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0B2A4A] mt-2 font-heading">Tonggak Perjalanan Sejak 1984</h2>
                <div class="w-16 h-1 bg-amber-400 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-4 text-sm leading-relaxed">
                    Didirikan sebagai salah satu pilar pendidikan rekayasa di Priangan Timur, Program Studi Teknik Sipil Universitas Siliwangi telah berkontribusi nyata dalam pembangunan infrastruktur regional dan nasional melalui ribuan lulusan yang tersebar di berbagai sektor industri konstruksi.
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative max-w-5xl mx-auto">
                <!-- Garis vertikal timeline -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-amber-400 via-blue-300 to-[#0B2A4A]/20"></div>

                <!-- Item 1: Pendirian 1984 -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-10">
                    <div class="md:w-1/2 md:pr-14 md:text-right order-2 md:order-1">
                        <div class="bg-[#0B2A4A] text-white rounded-2xl p-6 sm:p-7 shadow-lg inline-block w-full text-left md:text-right">
                            <span class="text-amber-400 text-xs font-bold uppercase tracking-widest bg-amber-400/20 px-2.5 py-1 rounded-full inline-block mb-2">1984</span>
                            <h3 class="text-lg font-bold text-white mb-2">Pendirian Program Studi</h3>
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

                <!-- Item 2: Perkembangan 1990-an -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-10">
                    <div class="md:w-1/2 md:pr-14 order-2 md:order-1"></div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-file-contract text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2">
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-md">
                            <span class="text-blue-600 text-xs font-bold uppercase tracking-widest bg-blue-50 px-2.5 py-1 rounded-full inline-block mb-2">1990-an</span>
                            <h3 class="text-lg font-bold text-[#0B2A4A] mb-2">Perkembangan &amp; Kurikulum Nasional</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Memasuki era 1990-an, Program Studi Teknik Sipil terus berkembang dengan penyesuaian kurikulum
                                mengikuti standar konsorsium teknik nasional. Dosen-dosen berkualifikasi tinggi mulai bergabung, laboratorium
                                struktural dan mekanika tanah dibangun sebagai penunjang kegiatan praktikum mahasiswa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Akreditasi BAN-PT 2000-an -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-10">
                    <div class="md:w-1/2 md:pr-14 md:text-right order-2 md:order-1">
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-md inline-block w-full text-left md:text-right">
                            <span class="text-green-700 text-xs font-bold uppercase tracking-widest bg-green-50 px-2.5 py-1 rounded-full inline-block mb-2">2000-an</span>
                            <h3 class="text-lg font-bold text-[#0B2A4A] mb-2">Akreditasi Nasional &amp; Ekspansi Riset</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Program studi berhasil mendapatkan status akreditasi nasional dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT),
                                menandai pengakuan resmi atas kualitas penyelenggaraan pendidikan. Kegiatan penelitian dosen dan mahasiswa di bidang rekayasa jalan,
                                drainase, dan material konstruksi mulai tumbuh pesat.
                            </p>
                        </div>
                    </div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-green-500 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-award text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2"></div>
                </div>

                <!-- Item 4: Modernisasi Lab 2010-an -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0 mb-10">
                    <div class="md:w-1/2 md:pr-14 order-2 md:order-1"></div>
                    <!-- Dot -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-indigo-600 border-4 border-white shadow-md items-center justify-center z-10 mt-4">
                        <i class="fa-solid fa-flask text-white text-sm"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-14 order-1 md:order-2">
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-md">
                            <span class="text-indigo-600 text-xs font-bold uppercase tracking-widest bg-indigo-50 px-2.5 py-1 rounded-full inline-block mb-2">2010-an</span>
                            <h3 class="text-lg font-bold text-[#0B2A4A] mb-2">Modernisasi Laboratorium &amp; Industri</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Pembangunan laboratorium modern meliputi Lab. Teknologi Bahan Konstruksi, Lab. Perkerasan Jalan,
                                dan Lab. Hidrolika &amp; Hidrologi. Program studi menjalin kerja sama kemitraan dengan instansi pemerintah
                                (Dinas PUPR, BBWS Citanduy) dan kontraktor nasional untuk program magang dan riset terapan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Kini / Akreditasi LAM Teknik -->
                <div class="relative flex flex-col md:flex-row md:items-start md:gap-0">
                    <div class="md:w-1/2 md:pr-14 md:text-right order-2 md:order-1">
                        <div class="bg-gradient-to-br from-[#0B2A4A] to-[#154c79] text-white rounded-2xl p-6 sm:p-7 shadow-lg inline-block w-full text-left md:text-right">
                            <span class="text-amber-400 text-xs font-bold uppercase tracking-widest bg-amber-400/20 px-2.5 py-1 rounded-full inline-block mb-2">2023 &mdash; Kini</span>
                            <h3 class="text-lg font-bold mt-1 mb-2">Akreditasi &ldquo;Baik&rdquo; LAM Teknik &amp; Menuju Visi 2030</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                Program Studi Teknik Sipil berhasil meraih akreditasi <strong class="text-amber-400">&ldquo;Baik&rdquo;</strong>
                                dari Lembaga Akreditasi Mandiri Teknik (LAM Teknik) pada tahun 2023, berlaku hingga 2027.
                                Saat ini program studi aktif mengembangkan riset unggulan, seminar internasional lintas negara (Taiwan, dll.),
                                serta kolaborasi industri untuk mewujudkan visi sebagai pusat keunggulan Teknik Sipil pada tahun 2030.
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
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-5 max-w-5xl mx-auto">
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
@endsection
