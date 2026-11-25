@extends('layouts.app')

@section('title', 'Visi & Misi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Visi 2030 dan Misi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya.')

@section('content')
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Visi &amp; Misi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Identitas &amp; Pedoman Akademik
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Visi &amp; Misi Program Studi
            </h1>
        </div>
    </section>

    
    <section class="py-14 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch mb-12">
                
                
                <div class="bg-white rounded-xl p-8 sm:p-10 shadow-sm border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="mb-5">
                            <span class="text-amber-600 font-semibold uppercase text-xs tracking-wider block">Pedoman Masa Depan</span>
                            <h2 class="text-2xl font-bold text-slate-900 font-heading mt-1">Visi 2030</h2>
                        </div>

                        <blockquote class="text-slate-800 text-base sm:text-lg leading-relaxed italic bg-amber-50/70 p-5 rounded-lg border-l-4 border-amber-500 my-4">
                            "Menjadi pusat keunggulan dalam pengembangan ilmu Teknik Sipil yang berwawasan kebangsaan, berkarakter wirausaha, dan inovatif di tingkat nasional pada tahun 2030."
                        </blockquote>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-4">
                            Visi ini mencerminkan tekad Program Studi Teknik Sipil FT UNSIL untuk melahirkan insinyur berdaya saing tinggi yang tidak hanya mahir dalam perencanaan dan pelaksanaan konstruksi, tetapi juga berintegritas dan siap berwirausaha secara mandiri.
                        </p>
                    </div>
                </div>

                
                <div class="bg-white rounded-xl p-8 sm:p-10 shadow-sm border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="mb-5">
                            <span class="text-[#0070BA] font-semibold uppercase text-xs tracking-wider block">Pelaksanaan Tri Dharma</span>
                            <h2 class="text-2xl font-bold text-slate-900 font-heading mt-1">Misi Program Studi</h2>
                        </div>

                        <ol class="space-y-4">
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-6 h-6 rounded bg-[#0B2A4A] text-white text-xs font-bold flex items-center justify-center mt-0.5">1</span>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-900">Pendidikan &amp; Pengajaran Berkualitas</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Menyelenggarakan pendidikan dan pembelajaran yang mampu menghasilkan lulusan yang unggul, berwawasan kebangsaan, berjiwa wirausaha dan berinovasi teknologi di bidang Teknik Sipil.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-6 h-6 rounded bg-[#0B2A4A] text-white text-xs font-bold flex items-center justify-center mt-0.5">2</span>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-900">Riset &amp; Inovasi Teknologi</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Melaksanakan penelitian yang berkualitas, inovatif, dan berdaya saing global untuk menjawab tantangan infrastruktur berkelanjutan.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-6 h-6 rounded bg-[#0B2A4A] text-white text-xs font-bold flex items-center justify-center mt-0.5">3</span>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-900">Pengabdian Kepada Masyarakat (PKM)</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Melaksanakan pengabdian kepada masyarakat untuk penerapan dan hilirisasi inovasi teknologi di bidang Teknik Sipil demi kemaslahatan publik.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3.5">
                                <span class="flex-shrink-0 w-6 h-6 rounded bg-[#0B2A4A] text-white text-xs font-bold flex items-center justify-center mt-0.5">4</span>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-900">Kemitraan &amp; Kolaborasi Strategis</h4>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-0.5">Menyelenggarakan kerja sama yang produktif dan berkelanjutan di tingkat lokal, nasional, dan internasional dengan industri, asosiasi profesi, dan lembaga riset.</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

