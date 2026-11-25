@extends('layouts.app')

@section('title', 'Aula Pertemuan Fakultas Teknik | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Aula Fakultas Teknik Universitas Siliwangi untuk seminar nasional keteknikan, kuliah umum praktisi, yudisium kelulusan, dan kegiatan kemahasiswaan.')

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
                <span class="text-slate-200">Aula</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Pusat Pertemuan &amp; Konferensi Akademik
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Aula
            </h1>
        </div>
    </section>

    {{-- Fitur Unggulan Aula --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Sarana Pertemuan Representatif</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas &amp; Keunggulan Aula</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Dirancang multifungsi untuk mengakomodasi kegiatan akademik formal, konferensi ilmiah, serta perhelatan kemahasiswaan tingkat fakultas dan universitas.
                </p>
            </div>

            {{-- 4 Card Fitur Utama --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kapasitas 300 Kursi</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Daya tampung fleksibel dengan penataan kursi teater maupun banquet, memungkinkan penyelenggaraan acara berskala menengah hingga besar.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        Pengaturan Fleksibel
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Audio &amp; Tata Cahaya</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Dilengkapi digital mixer sound system, multi mikrofon wireless UHF, dan tata pencahayaan panggung yang memberikan kejernihan suara prima.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold">
                        Digital Pro Sound
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-display"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Layar Proyektor Ganda</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Dua unit motorized screen berukuran besar di sisi kiri dan kanan panggung menjamin materi presentasi terlihat jelas dari seluruh penjuru ruangan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-cyan-600 font-semibold">
                        Dual Wide Screen
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-couch"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Ruang Transit VIP</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Tersedia ruang tunggu khusus bagi pimpinan fakultas, guru besar, pemateri tamu, maupun narasumber seminar sebelum acara dimulai.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold">
                        Fasilitas VIP Lengkap
                    </div>
                </div>

            </div>


        </div>
    </section>

@endsection

