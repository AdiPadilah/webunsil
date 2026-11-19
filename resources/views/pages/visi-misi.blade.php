@extends('layouts.app')

@section('title', 'Visi & Misi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Visi 2030 dan Misi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya.')

@section('content')
    
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Visi &amp; Misi</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Identitas &amp; Pedoman Akademik
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Visi &amp; Misi Program Studi
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Arah kebijakan dan pedoman penyelenggaraan Tri Dharma Perguruan Tinggi Jurusan Teknik Sipil Fakultas Teknik Universitas Siliwangi menuju keunggulan nasional.
            </p>
        </div>
    </section>

    
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.08] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch mb-14">
                
                
                <div class="bg-gradient-to-br from-white to-slate-50 rounded-3xl p-8 sm:p-10 shadow-xl border border-slate-200 relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
                         style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 240px auto;"></div>

                    <div class="relative z-10">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl shadow-sm">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div>
                                <span class="text-amber-600 font-bold uppercase text-[11px] tracking-widest block">Pedoman Masa Depan</span>
                                <h2 class="text-xl sm:text-2xl font-black text-slate-900 font-heading">Visi 2030</h2>
                            </div>
                        </div>

                        <blockquote class="text-slate-800 text-base sm:text-lg leading-relaxed italic font-normal bg-amber-50/70 p-6 sm:p-7 rounded-2xl border-l-4 border-amber-500 my-4 shadow-sm">
                            "Menjadi pusat keunggulan dalam pengembangan ilmu Teknik Sipil yang berwawasan kebangsaan, berkarakter wirausaha, dan inovatif di tingkat nasional pada tahun 2030."
                        </blockquote>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-4">
                            Visi ini mencerminkan tekad Program Studi Teknik Sipil FT UNSIL untuk melahirkan insinyur berdaya saing tinggi yang tidak hanya mahir dalam perencanaan dan pelaksanaan konstruksi, tetapi juga berintegritas dan siap berwirausaha secara mandiri.
                        </p>
                    </div>

                    <div class="mt-8 pt-5 border-t border-slate-200 flex justify-between text-xs text-slate-500 font-semibold uppercase tracking-wide relative z-10">
                        <span>Program Studi Teknik Sipil</span>
                        <span>Universitas Siliwangi</span>
                    </div>
                </div>

                
                <div class="bg-gradient-to-br from-white to-slate-50 rounded-3xl p-8 sm:p-10 shadow-xl border border-slate-200 relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute inset-0 opacity-[0.10] bg-repeat pointer-events-none"
                         style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 240px auto;"></div>

                    <div class="relative z-10">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl shadow-sm">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <div>
                                <span class="text-blue-700 font-bold uppercase text-[11px] tracking-widest block">Pelaksanaan Tri Dharma</span>
                                <h2 class="text-xl sm:text-2xl font-black text-slate-900 font-heading">Misi Program Studi</h2>
                            </div>
                        </div>

                        <ol class="space-y-4">
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center mt-0.5 shadow">1</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Pendidikan &amp; Pengajaran Berkualitas</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Menyelenggarakan pendidikan dan pembelajaran yang mampu menghasilkan lulusan yang unggul, berwawasan kebangsaan, berjiwa wirausaha dan berinovasi teknologi di bidang Teknik Sipil.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center mt-0.5 shadow">2</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Riset &amp; Inovasi Teknologi</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Melaksanakan penelitian yang berkualitas, inovatif, dan berdaya saing global untuk menjawab tantangan infrastruktur berkelanjutan.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center mt-0.5 shadow">3</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Pengabdian Kepada Masyarakat (PKM)</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Melaksanakan pengabdian kepada masyarakat untuk penerapan dan hilirisasi inovasi teknologi di bidang Teknik Sipil demi kemaslahatan publik.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-[#0B2A4A] text-white text-xs font-black flex items-center justify-center mt-0.5 shadow">4</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Kemitraan &amp; Kolaborasi Strategis</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Menyelenggarakan kerja sama yang produktif dan berkelanjutan di tingkat lokal, nasional, dan internasional dengan industri, asosiasi profesi, dan lembaga riset.</p>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="mt-8 pt-5 border-t border-slate-200 flex justify-between text-xs text-slate-500 font-semibold uppercase tracking-wide relative z-10">
                        <span>Fakultas Teknik</span>
                        <span>Universitas Siliwangi</span>
                    </div>
                </div>

            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Tujuan Pendidikan</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Membentuk sarjana teknik sipil yang menguasai dasar-dasar keilmuan sipil, mampu menganalisis permasalahan rekayasa, dan siap merancang solusi infrastruktur yang aman, efisien, dan ramah lingkungan.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Karakter Wirausaha</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Menanamkan jiwa kepemimpinan, kemandirian, etika profesi yang kokoh, dan kemampuan melihat peluang usaha di sektor jasa konstruksi, konsultan perencana, dan inovasi bahan bangunan lokal.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg mb-3">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Nilai Kejuangan Siliwangi</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Menjiwai semangat juang Siliwangi: pantang menyerah, jujur, setia pada bangsa dan negara, serta menjunjung tinggi kearifan budaya Sunda dan kesetiakawanan sosial.
                    </p>
                </div>
            </div>

            
            <div class="bg-[#0B2A4A] rounded-3xl p-8 text-white shadow-xl">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div>
                        <span class="block text-3xl sm:text-4xl font-black text-amber-400">S-1</span>
                        <span class="block text-xs text-slate-300 mt-1 uppercase tracking-wide">Jenjang Program</span>
                    </div>
                    <div>
                        <span class="block text-3xl sm:text-4xl font-black text-amber-400">144</span>
                        <span class="block text-xs text-slate-300 mt-1 uppercase tracking-wide">Beban SKS Lulus</span>
                    </div>
                    <div>
                        <span class="block text-3xl sm:text-4xl font-black text-amber-400">8</span>
                        <span class="block text-xs text-slate-300 mt-1 uppercase tracking-wide">Semester Tempuh</span>
                    </div>
                    <div>
                        <span class="block text-3xl sm:text-4xl font-black text-amber-400">BAIK</span>
                        <span class="block text-xs text-slate-300 mt-1 uppercase tracking-wide">Akreditasi LAM Teknik</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
