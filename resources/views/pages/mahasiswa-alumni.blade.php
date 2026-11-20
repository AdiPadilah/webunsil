@extends('layouts.app')

@section('title', 'Mahasiswa dan Alumni | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Himpunan Mahasiswa Sipil (HMS), Ikatan Alumni, Tracer Study, dan Galeri Dokumentasi @sipilunsil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Mahasiswa &amp; Alumni</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Komunitas &amp; Jejak Lulusan
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Mahasiswa &amp; Alumni
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Wadah kreativitas, kepemimpinan organisasi Himpunan Mahasiswa Sipil (HMS), jejaring ribuan alumni berkarier nasional, dan galeri kegiatan sivitas akademika.
            </p>
        </div>
    </section>

    
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.08] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-daun-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Keluarga Besar Teknik Sipil</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Organisasi &amp; Ikatan Alumni</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Menghubungkan mahasiswa aktif dengan jejaring alumni profesional di BUMN, kementerian PUPR, konsultan rekayasa, dan pengusaha jasa konstruksi.
                </p>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16 items-stretch">
                
                {{-- HMS --}}
                <div id="hms" class="bg-slate-50 rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm flex flex-col justify-between scroll-mt-28">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl">
                                    <i class="fa-solid fa-users-gear"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Himpunan Mahasiswa Sipil (HMS)</h3>
                                    <span class="text-xs text-slate-500">Fakultas Teknik Universitas Siliwangi</span>
                                </div>
                            </div>
                            <a href="https://instagram.com/hmsftunsil" target="_blank" class="text-xs font-bold text-pink-600 bg-pink-50 hover:bg-pink-100 px-3 py-1.5 rounded-full border border-pink-200 transition">
                                <i class="fa-brands fa-instagram mr-1"></i> @hmsftunsil
                            </a>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Organisasi kemahasiswaan tingkat program studi yang aktif mengembangkan bakat kepemimpinan, soft skills, dan keilmuan sipil mahasiswa. HMS rutin menyelenggarakan Civil Festival, seminar rekayasa infrastruktur, bakti desa perintisan jembatan, serta kompetisi rancang jembatan nasional (SCIENCE).
                        </p>
                        <div class="mt-6 p-4 bg-white rounded-2xl border border-slate-200 space-y-2 text-xs">
                            <div class="font-bold text-slate-800 flex items-center gap-2">
                                <i class="fa-solid fa-trophy text-amber-500"></i> Prestasi Mahasiswa:
                            </div>
                            <p class="text-slate-600 leading-relaxed">
                                Finalis &amp; Juara pada Lomba Kuat Tekan Beton Nasional, Lomba Rancang Jembatan Indonesia, dan Program Kreativitas Mahasiswa (PKM) Kemendikbudristek.
                            </p>
                        </div>
                    </div>
                    <div class="pt-6 border-t border-slate-200 mt-6 flex items-center justify-between text-xs font-semibold text-blue-700">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-award text-amber-500"></i> Solidaritas Tanpa Batas</span>
                        <a href="https://instagram.com/hmsftunsil" target="_blank" class="hover:underline flex items-center gap-1">
                            Akun Resmi HMS <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                
                {{-- Alumni & Tracer --}}
                <div id="alumni" class="bg-slate-50 rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm flex flex-col justify-between scroll-mt-28">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl">
                                    <i class="fa-solid fa-user-graduate"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Ikatan Alumni &amp; Tracer Study</h3>
                                    <span class="text-xs text-slate-500">Jejaring Lebih dari 3.500+ Alumni</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-amber-700 bg-amber-50 px-3 py-1.5 rounded-full border border-amber-200">
                                Sejak 1984
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Jejaring ribuan alumni Sarjana Teknik Sipil UNSIL yang berkarier di BUMN konstruksi terkemuka (Wika, PP, Adhi Karya, Waskita, Hutama Karya), konsultan perencana dan pengawas nasional, kementerian PUPR, perbankan, serta wiraswasta di bidang jasa konstruksi.
                        </p>
                        <div id="tracer" class="mt-6 p-4 bg-white rounded-2xl border border-slate-200 space-y-2 text-xs scroll-mt-28">
                            <div class="font-bold text-slate-800 flex items-center gap-2">
                                <i class="fa-solid fa-chart-line text-blue-600"></i> Program Tracer Study UNSIL:
                            </div>
                            <p class="text-slate-600 leading-relaxed">
                                Pelacakan jejak alumni secara berkelanjutan untuk mengevaluasi relevansi kurikulum, masa tunggu kerja lulusan, dan kepuasan pengguna lulusan industri konstruksi.
                            </p>
                        </div>
                    </div>
                    <div class="pt-6 border-t border-slate-200 mt-6 flex items-center justify-between">
                        <a href="https://unsil.ac.id" target="_blank" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-800 transition gap-1.5">
                            <i class="fa-solid fa-clipboard-list"></i>
                            <span>Isi Kuesioner Tracer Study Alumni</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                        <span class="text-[11px] text-slate-400">Portal Resmi UNSIL</span>
                    </div>
                </div>
            </div>

            
            <div class="border-t border-slate-200 pt-16">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10">
                    <div>
                        <span class="text-pink-600 font-bold uppercase text-xs tracking-widest flex items-center gap-1.5">
                            <i class="fa-brands fa-instagram text-sm"></i> Dokumentasi &amp; Aktivitas
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1 font-heading">Galeri <span class="text-pink-600">@sipilunsil</span></h2>
                        <p class="text-slate-500 text-xs sm:text-sm mt-1">Potret kegiatan akademik, seminar internasional, praktikum, dan wisuda sarjana.</p>
                    </div>
                    <a href="https://instagram.com/sipilunsil" target="_blank"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white text-xs font-bold px-5 py-2.5 rounded-full shadow-lg hover:shadow-pink-400/40 transition hover:-translate-y-0.5">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        Ikuti @sipilunsil
                    </a>
                </div>

                
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3.5">
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
                        <div class="ig-overlay absolute inset-0 bg-gradient-to-t from-black/85 via-black/45 to-transparent flex flex-col justify-end p-3">
                            <i class="fa-brands fa-instagram text-white/80 text-lg mb-1"></i>
                            <p class="text-white text-[10px] leading-tight font-semibold line-clamp-2">{{ $p['caption'] }}</p>
                            <span class="text-pink-300 text-[9px] font-bold mt-1">@sipilunsil</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center mt-10">
                    <a href="https://instagram.com/sipilunsil" target="_blank"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-pink-600 hover:text-pink-800 transition">
                        <i class="fa-brands fa-instagram"></i>
                        Lihat semua postingan di Instagram resmi @sipilunsil
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection
