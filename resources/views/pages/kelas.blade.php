@extends('layouts.app')

@section('title', 'Ruang Kelas & Perkuliahan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas ruang kelas representatif ber-AC, proyektor multimedia, dan smart classroom di Gedung Fakultas Teknik UNSIL Kampus 2 Mugarsari.')

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
                <span class="text-white font-semibold">Kelas</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Lingkungan Pembelajaran Interaktif
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Ruang Kelas <span class="text-amber-400">&amp; Perkuliahan</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Ruang perkuliahan modern di Gedung Fakultas Teknik Kampus 2 UNSIL Mugarsari yang didesain ergonomis, dilengkapi penyejuk udara (AC), perangkat multimedia interaktif, dan jaringan Wi-Fi berkecepatan tinggi guna mendukung implementasi kurikulum OBE (Outcome-Based Education).
            </p>
        </div>
    </section>

    {{-- Fitur Unggulan Ruang Kelas --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Standar Kenyamanan Belajar</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Ruang Perkuliahan</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Setiap ruang kelas ditata dengan standar pencahayaan dan akustik optimal guna menjamin konsentrasi dan interaksi dialogis antara dosen dan mahasiswa.
                </p>
            </div>

            {{-- 6 Fitur Card --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                
                {{-- Fitur 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Smart Classroom &amp; Multimedia</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Dilengkapi proyektor beresolusi tinggi, pointer wireless, dan Smart TV interaktif untuk presentasi gambar kerja teknik sipil dan simulasi model struktur secara real-time.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-[10px]"></i> Display Full HD &bull; HDMI Ready
                    </div>
                </div>

                {{-- Fitur 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-snowflake"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Pendingin Ruangan (Full AC)</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Seluruh ruang kelas menggunakan sistem pendingin ruangan (AC) yang selalu terjaga suhunya antara 20&deg;C &ndash; 23&deg;C, dipadukan dengan jendela ventilasi alami udara perbukitan Mugarsari.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-cyan-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-[10px]"></i> Suhu Terjaga &bull; Udara Bersih
                    </div>
                </div>

                {{-- Fitur 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chair"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kursi Kuliah Ergonomis</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Kursi kuliah berkualitas dengan bantalan busa tebal dan meja lipat berlengan kokoh yang menunjang kenyamanan duduk selama perkuliahan teori maupun asistensi gambar proyek.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-[10px]"></i> Desain Ergonomis &bull; Ramah Postur
                    </div>
                </div>

                {{-- Fitur 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-wifi"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Akses Wi-Fi Eduroam &amp; UNSIL</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Jaringan internet nirkabel fiber optic berkecepatan tinggi dengan coverage menyeluruh di seluruh blok ruang kelas untuk akses literatur daring, e-learning LMS, dan jurnal ilmiah.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-[10px]"></i> Eduroam Global &bull; High Bandwidth
                    </div>
                </div>

                {{-- Fitur 5 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-volume-high"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Akustik &amp; Tata Suara Jernih</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Ruang kelas didesain dengan peredaman suara eksternal, dilengkapi sound system built-in dan mikrofon wireless sehingga pemaparan materi terdengar merata hingga ke barisan belakang.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-purple-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-[10px]"></i> Wireless Mic &bull; Sound Merata
                    </div>
                </div>

                {{-- Fitur 6 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users-rectangle"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Kapasitas Ideal 40&ndash;50 Mahasiswa</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Rasio luas ruangan dan jumlah mahasiswa diperhitungkan secara presisi agar tercipta suasana belajar yang kondusif, interaktif, dan mudah dimonitor oleh dosen pengampu.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-rose-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-[10px]"></i> Tata Letak Fleksibel &bull; Luas &amp; Lapang
                    </div>
                </div>

            </div>

            {{-- Showcase Foto Ruang Kelas / Workshop --}}
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="relative rounded-2xl overflow-hidden shadow-md">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Suasana Perkuliahan dan Workshop OBE FT UNSIL" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[10px] font-bold bg-amber-400 text-slate-900 px-2.5 py-0.5 rounded-full uppercase">Suasana Ruang Kuliah</span>
                            <h4 class="text-base font-bold mt-1">Gedung Fakultas Teknik &bull; Kampus 2 UNSIL Mugarsari</h4>
                        </div>
                    </div>
                    <div>
                        <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kenyamanan Akademik</span>
                        <h3 class="text-2xl font-black text-slate-900 font-heading mt-1">Daftar Ruang Kuliah &amp; Seminar</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed">
                            Prodi Teknik Sipil memanfaatkan klaster ruang kuliah di lantai 1 hingga lantai 3 Gedung Fakultas Teknik Mugarsari, termasuk ruang seminar khusus untuk sidang proposal skripsi dan sidang sarjana.
                        </p>

                        <div class="grid grid-cols-2 gap-3 mt-5 text-xs text-slate-700">
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 flex items-center gap-2.5">
                                <i class="fa-solid fa-door-open text-blue-600"></i>
                                <div>
                                    <div class="font-bold">Ruang Kuliah FT 101 &ndash; 104</div>
                                    <div class="text-[10px] text-slate-500">Lantai 1 &bull; Kapasitas 50 Mhs</div>
                                </div>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 flex items-center gap-2.5">
                                <i class="fa-solid fa-door-open text-blue-600"></i>
                                <div>
                                    <div class="font-bold">Ruang Kuliah FT 201 &ndash; 206</div>
                                    <div class="text-[10px] text-slate-500">Lantai 2 &bull; Kapasitas 45 Mhs</div>
                                </div>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 flex items-center gap-2.5">
                                <i class="fa-solid fa-door-open text-blue-600"></i>
                                <div>
                                    <div class="font-bold">Ruang Kuliah FT 301 &ndash; 304</div>
                                    <div class="text-[10px] text-slate-500">Lantai 3 &bull; Kapasitas 40 Mhs</div>
                                </div>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 flex items-center gap-2.5">
                                <i class="fa-solid fa-graduation-cap text-amber-600"></i>
                                <div>
                                    <div class="font-bold">Ruang Sidang &amp; Seminar</div>
                                    <div class="text-[10px] text-slate-500">Lantai 2 &bull; Sidang Sarjana</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
