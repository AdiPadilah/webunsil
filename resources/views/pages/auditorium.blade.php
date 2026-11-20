@extends('layouts.app')

@section('title', 'Auditorium Gedung Mandala | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas Auditorium Gedung Mandala Universitas Siliwangi berkapasitas 2.500+ orang untuk wisuda sarjana, rapat terbuka senat, dan konferensi internasional.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('fasilitas') }}" class="hover:underline text-slate-300">Fasilitas</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Auditorium</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Landmark &amp; Gedung Pertemuan Akbar
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Auditorium <span class="text-amber-400">Gedung Mandala</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Gedung pertemuan utama dan kebanggaan Universitas Siliwangi dengan daya tampung hingga 2.500+ orang, dilengkapi panggung megah, sistem pendingin udara sentral, tata akustik profesional, serta area tribun bertingkat yang menjadi saksi sejarah pengukuhan sarjana teknik sipil dan perhelatan akbar tingkat internasional.
            </p>
        </div>
    </section>

    {{-- Section Spesifikasi & Keunggulan Auditorium --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kemegahan &amp; Skala Akbar</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Gedung Mandala</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Dirancang sebagai sarana serbaguna dengan standar infrastruktur gedung konvensi modern di wilayah Priangan Timur.
                </p>
            </div>

            {{-- 4 Card Keunggulan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users-viewfinder"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kapasitas 2.500+ Orang</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Terbagi atas area lantai utama (lantai bawah) untuk wisudawan dan senat, serta tribun melingkar lantai 2 untuk keluarga dan undangan umum.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold">
                        Lantai Utama + Tribun
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-temperature-arrow-down"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">AC Sentral Berdaya Tinggi</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Sistem pendingin udara chiller sentral terintegrasi yang menjamin kesejukan merata ke seluruh sudut ruangan meski terisi ribuan orang.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold">
                        Central Chiller System
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-tower-broadcast"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Akustik Berstandar Konser</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Panel peredam suara khusus yang meminimalisir gema, menghasilkan kejernihan vokal pidato senat, orasi ilmiah, hingga alunan paduan suara universitas.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-purple-600 font-semibold">
                        Acoustic Wall Treatment
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Parkir &amp; Lobi Luas</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Lobi depan megah untuk registrasi dan pameran, didukung kantong parkir mobil dan motor berkapasitas ratusan kendaraan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold">
                        Akses Leluasa
                    </div>
                </div>

            </div>

            {{-- Feature Showcase Foto Wisuda & Gedung Mandala --}}
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    
                    {{-- Foto Wisuda Besar --}}
                    <div class="lg:col-span-7 relative min-h-[340px] lg:min-h-[460px] bg-slate-900 overflow-hidden">
                        <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Suasana Sidang Senat Terbuka Wisuda Sarjana di Auditorium Gedung Mandala UNSIL"
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <span class="inline-block bg-amber-400 text-slate-900 text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-graduation-cap mr-1"></i> Sidang Senat Terbuka Wisuda Sarjana
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black leading-tight">Auditorium Gedung Mandala Universitas Siliwangi</h3>
                            <p class="text-slate-300 text-xs mt-1.5 leading-relaxed">
                                Tempat dilantiknya ribuan sarjana teknik sipil UNSIL yang kini berkiprah di BUMN karya, kementerian, konsultan perencana, dan kontraktor nasional.
                            </p>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Agenda Akbar --}}
                    <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Perhelatan Akbar</span>
                            <h3 class="text-2xl font-black text-slate-900 font-heading mt-1">Penggunaan Gedung Mandala</h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed">
                                Menjadi episentrum berbagai perhelatan resmi berskala besar di lingkungan Universitas Siliwangi.
                            </p>

                            <div class="space-y-4 mt-6">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0 text-sm font-bold mt-0.5">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-900">Wisuda Sarjana &amp; Pascasarjana</h4>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Digelar secara berkala 3 kali dalam setahun untuk melantik lulusan seluruh fakultas di UNSIL.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 text-sm font-bold mt-0.5">
                                        <i class="fa-solid fa-earth-asia"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-900">Konferensi Internasional &amp; Kuliah Perdana</h4>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Menghadirkan menteri kabinet, pakar keinsinyuran dunia, dan delegasi peneliti internasional.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center shrink-0 text-sm font-bold mt-0.5">
                                        <i class="fa-solid fa-cake-candles"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-900">Dies Natalis &amp; Peringatan Hari Jadi</h4>
                                        <p class="text-[11px] text-slate-500 mt-0.5">Rangkaian upacara kehormatan hari lahir Universitas Siliwangi serta penganugerahan penghargaan prestasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 mt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                            <span>Lokasi: <strong>Kampus 1 UNSIL Tasikmalaya</strong></span>
                            <span class="text-blue-700 font-bold">Kapasitas 2.500 Kursi</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
