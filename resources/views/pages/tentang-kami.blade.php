@extends('layouts.app')

@section('title', 'Tentang Kami | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Profil lengkap, sambutan pimpinan, struktur organisasi, visi misi, sejarah, serta akreditasi Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[11px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Tentang Kami</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Profil Program Studi
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Tentang Kami
            </h1>
        </div>
    </section>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            
            {{-- Sambutan Ketua Program Studi (Proporsional & Relevan) --}}
            <div class="max-w-5xl mx-auto bg-white rounded-xl overflow-hidden border border-slate-200">
                <div class="grid grid-cols-1 md:grid-cols-12">
                    
                    {{-- Foto Pimpinan / Ketua Program Studi --}}
                    <div class="md:col-span-4 bg-slate-900 flex flex-col justify-between">
                        <div class="relative w-full aspect-[4/5] md:aspect-auto md:h-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/koordinator-prodi.jpg') }}?v={{ time() }}" 
                                 alt="Andhy Romdani, S.T., M.Eng., Ph.D. - Ketua Program Studi Teknik Sipil FT UNSIL" 
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                        </div>
                        <div class="p-3.5 sm:p-4 bg-[#0B2A4A] text-white border-t border-blue-900 flex-shrink-0 text-center md:text-left">
                            <h4 class="text-xs sm:text-sm font-bold text-white leading-tight">Andhy Romdani, S.T., M.Eng., Ph.D.</h4>
                            <p class="text-[11px] text-amber-400 font-medium mt-0.5">Ketua Program Studi S-1 Teknik Sipil</p>
                        </div>
                    </div>

                    {{-- Isi Sambutan --}}
                    <div class="md:col-span-8 p-5 sm:p-6 lg:p-7 flex flex-col justify-between">
                        <div>
                            <span class="text-[11px] font-semibold text-[#0070BA] uppercase tracking-wider block mb-1">
                                Pimpinan Program Studi
                            </span>
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading leading-tight mb-3">
                                Sambutan Ketua Program Studi
                            </h2>
                            
                            <div class="text-xs sm:text-[13px] text-slate-600 space-y-2.5 leading-relaxed text-justify">
                                <p class="font-semibold text-slate-800">
                                    Selamat datang di Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.
                                </p>
                                <p>
                                    Perkembangan teknologi, transformasi digital, dan tantangan keberlanjutan lingkungan terus mengubah lanskap dunia rekayasa infrastruktur. Teknik Sipil Universitas Siliwangi hadir sebagai ruang akademik untuk mengeksplorasi potensi tersebut melalui pendidikan berstandar mutu, riset terapan, dan penguatan fasilitas laboratorium di Kampus 2 Mugarsari.
                                </p>
                                <p>
                                    Kami berkomitmen memperkuat kualitas pembelajaran berbasis Outcome-Based Education (OBE), mendorong lahirnya inovasi keteknikan yang relevan, serta memperluas kolaborasi dengan industri jasa konstruksi dan para alumni. Mari bersama-sama membangun masa depan infrastruktur bangsa yang tangguh dan berwawasan kebangsaan.
                                </p>
                            </div>
                        </div>

                        <div class="mt-5 pt-3.5 border-t border-slate-100 flex items-center justify-between gap-4">
                            <div class="text-[11px] text-slate-500">
                                <span class="font-semibold text-slate-700">Fakultas Teknik UNSIL</span>
                            </div>
                            <a href="{{ route('visi-misi') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                <span>Lihat Visi &amp; Misi Prodi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            
            {{-- 2 Card Sejarah & Dosen (Gaya Gambar 2: Full-bleed Image, Rounded-2xl, Judul di Kiri Bawah) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Card 1: Sejarah Program Studi --}}
                <a href="{{ route('sejarah') }}" class="group relative rounded-2xl overflow-hidden block h-64 sm:h-72 lg:h-[280px] shadow-sm hover:shadow-md transition bg-slate-900">
                    <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" alt="Sejarah Program Studi" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight drop-shadow-md text-white">
                            Sejarah Program Studi
                        </h3>
                    </div>
                </a>

                {{-- Card 2: Dosen & Tenaga Pengajar --}}
                <a href="{{ route('dosen') }}" class="group relative rounded-2xl overflow-hidden block h-64 sm:h-72 lg:h-[280px] shadow-sm hover:shadow-md transition bg-slate-900">
                    <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Dosen & Tenaga Pengajar" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight drop-shadow-md text-white">
                            Dosen &amp; Tenaga Pengajar
                        </h3>
                    </div>
                </a>

            </div>

            
            <div class="space-y-6 pt-2">
                
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-3 border-b border-slate-200">
                    <div>
                        <h2 class="text-2xl font-bold text-[#0B2A4A] font-heading">
                            Berita &amp; Informasi Terkini
                        </h2>
                    </div>
                    <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                        Lihat Semua Berita &rarr;
                    </a>
                </div>

                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    
                    <article class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col group">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Bendungan Leuwikeris" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block mb-1">23 Oktober 2026</span>
                                <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                    <a href="{{ route('berita.kunjungan-leuwikeris') }}">
                                        Kunjungan Ilmiah Mahasiswa Sipil ke Bendungan Leuwikeris
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                    Rangkaian kegiatan studi lapangan mempelajari struktur bendungan dan pengelolaan sumber daya air.
                                </p>
                            </div>
                            <div class="pt-4 mt-3 border-t border-slate-100">
                                <a href="{{ route('berita.kunjungan-leuwikeris') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </article>

                    
                    <article class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col group">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional Jalan Tol" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block mb-1">20 Oktober 2026</span>
                                <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                    <a href="{{ route('berita.seminar-jalan-tol') }}">
                                        Seminar Nasional SCIENCE 2026: Strategi Jalan Tol Berkelanjutan
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                    Mengupas strategi konstruksi jalan tol berkelanjutan bersama praktisi BUMN PT Adhi Karya.
                                </p>
                            </div>
                            <div class="pt-4 mt-3 border-t border-slate-100">
                                <a href="{{ route('berita.seminar-jalan-tol') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </article>

                    
                    <article class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col group">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Bridge Design Competition" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block mb-1">20 Oktober 2026</span>
                                <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                    <a href="{{ route('berita.kompetisi-jembatan') }}">
                                        Babak Final National Bridge Design Competition SCIENCE 2026
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                    Ajang kompetisi perancangan jembatan berskala nasional di Aula Gedung Teknik Sipil UNSIL.
                                </p>
                            </div>
                            <div class="pt-4 mt-3 border-t border-slate-100">
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            </div>

        </div>
    </section>

    
    <div id="modal-akreditasi" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-[#0B2A4A] p-6 text-white rounded-t-xl">
                <button type="button" onclick="closeModal('modal-akreditasi')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <span class="text-amber-400 text-[10px] font-bold uppercase tracking-wider block">Sertifikasi &amp; Legalitas</span>
                <h3 class="text-xl font-bold mt-1">Status Akreditasi LAM Teknik</h3>
            </div>
            <div class="p-6 sm:p-8 space-y-4 text-sm text-slate-700 leading-relaxed">
                <div class="bg-emerald-50 border border-emerald-200 p-4 rounded-xl flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-emerald-600 text-white flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div>
                        <span class="block text-xs font-bold text-emerald-800">Peringkat Akreditasi</span>
                        <span class="block text-lg font-black text-emerald-900">BAIK (LAM Teknik)</span>
                    </div>
                </div>
                <div class="space-y-2 text-xs text-slate-600">
                    <p><strong>Lembaga:</strong> Lembaga Akreditasi Mandiri Program Studi Keteknikan (LAM Teknik)</p>
                    <p><strong>Jenjang Program:</strong> Sarjana (S-1)</p>
                    <p><strong>Program Studi:</strong> Teknik Sipil, Fakultas Teknik Universitas Siliwangi</p>
                    <p><strong>Masa Berlaku:</strong> Hingga 20 Agustus 2028</p>
                </div>
                <div class="pt-3">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-[#0B2A4A] hover:bg-blue-900 text-white text-xs font-semibold rounded-lg transition">
                        <i class="fa-solid fa-file-arrow-down text-amber-400"></i> Unduh Salinan Sertifikat Akreditasi
                    </a>
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-b-xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-akreditasi')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-lg transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>
@endsection

