@extends('layouts.app')

@section('title', 'Ruang Seminar & Sidang Teknik Sipil | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Ruang Seminar dan Sidang Tugas Akhir Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari — dilengkapi proyektor, AC, sound system, dan layar motorized.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Ruang Seminar & Sidang</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Ruang Presentasi &amp; Sidang Ilmiah
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Seminar <span class="text-amber-400">&amp; Sidang</span>
            </h1>
        </div>
    </section>

    {{-- Section Spesifikasi & Keunggulan --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Sarana Ilmiah Kampus 2 Mugarsari</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Ruang Seminar & Sidang</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Dirancang untuk mendukung kegiatan akademik formal Program Studi Teknik Sipil, mulai dari sidang tugas akhir hingga seminar nasional di lingkungan Kampus 2 FT UNSIL Mugarsari.
                </p>
            </div>

            {{-- 4 Card Keunggulan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users-viewfinder"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kapasitas 60–100 Orang</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Penataan kursi fleksibel model teater dan classroom, cocok untuk sidang tugas akhir, seminar terbuka, maupun kuliah tamu program studi.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        Layout Fleksibel
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-temperature-arrow-down"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">AC & Sirkulasi Udara</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Pendingin udara split yang menjamin kenyamanan suhu selama sesi sidang tugas akhir maupun seminar yang berlangsung berjam-jam.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        AC Ruangan Full
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-display"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Proyektor & Layar Motorized</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Proyektor Full HD dengan layar motorized berukuran besar untuk presentasi materi seminar, penayangan video penelitian, dan sidang tugas akhir.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold">
                        Full HD Projector
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Sound System Wireless</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Sistem tata suara digital dengan mikrofon wireless UHF untuk meja penguji dan podium presentasi mahasiswa, memastikan kejelasan suara di seluruh ruangan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold">
                        Wireless UHF Mic
                    </div>
                </div>

            </div>


        </div>
    </section>

@endsection

