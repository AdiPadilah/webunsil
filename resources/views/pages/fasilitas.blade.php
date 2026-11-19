@extends('layouts.app')

@section('title', 'Fasilitas & Laboratorium | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas laboratorium terstandarisasi, ruang kelas modern, dan sarana penunjang akademik Program Studi S-1 Teknik Sipil FT Universitas Siliwangi Kampus 2 Mugarsari.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Fasilitas</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Sarana &amp; Prasarana Kampus
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Fasilitas &amp; Laboratorium
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Sarana pembelajaran komprehensif berstandar nasional di Kampus 2 UNSIL Mugarsari guna menunjang praktikum keinsinyuran, komputasi rekayasa, penelitian mutakhir, serta kenyamanan belajar mahasiswa.
            </p>
        </div>
    </section>

    {{-- Section 1: Laboratorium Kejuruan (6 Lab) --}}
    <section class="py-16 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Laboratorium Kejuruan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">6 Laboratorium Teknik Sipil</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Pusat praktikum dan pengujian bahan konstruksi terstandarisasi yang dibimbing oleh kepala laboratorium, pranata laboratorium (laboran), serta asisten dosen.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
                
                {{-- 1. Lab TBK --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/lab-civil.jpg') }}" alt="Lab. Teknologi Bahan Konstruksi"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-blue-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Struktur &amp; Bahan
                            </span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-slate-900 text-base group-hover:text-blue-700 transition leading-snug">
                                Lab. Teknologi Bahan Konstruksi (TBK)
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Pengujian sifat fisis dan mekanis material beton, agregat, semen, serta uji kuat tarik baja tulangan gedung dan jembatan.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 space-y-1.5 text-xs text-slate-600">
                                <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Universal Testing Machine (UTM) Baja</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Mesin Uji Kuat Tekan Beton Hidrolik</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Sieve Shaker Elektrik &amp; Oven Pengering</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2. Lab Perkerasan Jalan --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Lab. Perkerasan Jalan"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.src='https://images.unsplash.com/photo-1541888946425-d0fbb18086f6?q=80&w=600'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-amber-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Transportasi
                            </span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-slate-900 text-base group-hover:text-amber-600 transition leading-snug">
                                Lab. Perkerasan Jalan &amp; Aspal
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Pusat pengujian karakteristik campuran aspal panas (hotmix), kadar aspal optimum, dan durabilitas perkerasan lentur maupun kaku.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 space-y-1.5 text-xs text-slate-600">
                                <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-amber-600 text-[10px]"></i> Marshall Test Compactor &amp; Stabilitas</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-amber-600 text-[10px]"></i> Alat Penetrasi &amp; Titik Lembek Aspal</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-amber-600 text-[10px]"></i> Centrifuge Extractor Pemisah Aspal</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3. Lab Mekanika Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=600" alt="Lab. Mekanika Tanah & Geoteknik"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.src='{{ asset('images/lab-civil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-emerald-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Geoteknik
                            </span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-slate-900 text-base group-hover:text-emerald-700 transition leading-snug">
                                Lab. Mekanika Tanah &amp; Geoteknik
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Analisis sifat indeks tanah, parameter geser, permeabilitas, dan kapasitas daya dukung tanah pondasi dangkal maupun dalam.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 space-y-1.5 text-xs text-slate-600">
                                <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-600 text-[10px]"></i> Mesin Sondir Hidrolik 2.5 Ton (CPT)</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-600 text-[10px]"></i> Direct Shear Test &amp; Triaxial Test</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-600 text-[10px]"></i> Oedometer Konsolidasi &amp; Uji Pemadatan</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4. Lab Hidrolika & SDA --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="Lab. Hidrolika & Sumber Daya Air"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.src='{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-cyan-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Keairan &amp; SDA
                            </span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-slate-900 text-base group-hover:text-cyan-700 transition leading-snug">
                                Lab. Hidrolika &amp; Sumber Daya Air
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Simulasi hidrodinamika saluran terbuka, hidraulika pipa tertutup, pola aliran debit sungai, dan bangunan air (pelimpah &amp; bendung).
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 space-y-1.5 text-xs text-slate-600">
                                <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-cyan-600 text-[10px]"></i> Open Channel Flume Aliran Terbuka</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-cyan-600 text-[10px]"></i> Venturimeter &amp; Alat Ukur Aliran Pipa</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-cyan-600 text-[10px]"></i> Model Ambang &amp; Pelimpah Hidraulik</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 5. Lab Komputasi Rekayasa Sipil & BIM --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/gedung-unsil.jpg') }}" alt="Lab. Komputasi Rekayasa Sipil"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.src='https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=600'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-purple-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Komputasi &amp; BIM
                            </span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-slate-900 text-base group-hover:text-purple-700 transition leading-snug">
                                Lab. Komputasi Rekayasa &amp; BIM
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Laboratorium komputer spesifikasi tinggi untuk pemodelan struktur tahan gempa, perancangan CAD, simulasi HEC-RAS, dan BIM 5D.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 space-y-1.5 text-xs text-slate-600">
                                <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Perangkat Lunak:</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-purple-600 text-[10px]"></i> SAP2000 &amp; ETABS Structural</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-purple-600 text-[10px]"></i> Autodesk AutoCAD &amp; Civil 3D</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-purple-600 text-[10px]"></i> HEC-RAS &amp; Arc-GIS Pemodelan Spasial</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 6. Lab Perpetaan & Ukur Tanah --}}
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1581092335397-9583fe92d232?q=80&w=600" alt="Lab. Perpetaan & Ukur Tanah"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-rose-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Geomatika &amp; Survei
                            </span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-slate-900 text-base group-hover:text-rose-700 transition leading-snug">
                                Lab. Perpetaan &amp; Ukur Tanah
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Pengukuran terestris pemetaan kontur, penentuan poligon koordinat, elevasi trase jalan raya, dan geodesi satelit presisi.
                            </p>
                            <div class="mt-4 pt-4 border-t border-slate-100 space-y-1.5 text-xs text-slate-600">
                                <div class="font-semibold text-slate-800 text-[11px] uppercase tracking-wide">Peralatan Utama:</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-rose-600 text-[10px]"></i> Total Station Digital Elektronik</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-rose-600 text-[10px]"></i> Theodolite Digital &amp; Automatic Level</div>
                                <div class="flex items-center gap-1.5"><i class="fa-solid fa-check text-rose-600 text-[10px]"></i> GPS Geodetik Handheld &amp; Statif</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 2: Fasilitas Pembelajaran & Penunjang Akademik (Gaya ITS) --}}
    <section class="py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Lingkungan Belajar</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Fasilitas Penunjang Akademik</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Sarana komunal dan infrastruktur ruang belajar terintegrasi untuk mendukung proses perkuliahan, diskusi mandiri, dan kegiatan kemahasiswaan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Smart Classroom --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Smart Classroom"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-white font-bold text-xs">Smart Classroom</span>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h4 class="font-bold text-slate-900 text-sm">Ruang Kuliah Multimedia</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed flex-grow">
                            Ruang kelas ber-AC yang dilengkapi proyektor LCD interaktif, sound system, dan akses Wi-Fi kampus berkecepatan tinggi.
                        </p>
                    </div>
                </div>

                {{-- Ruang Baca & Perpustakaan --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" alt="Ruang Baca & Referensi"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-white font-bold text-xs">Pustaka &amp; Jurnal</span>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h4 class="font-bold text-slate-900 text-sm">Ruang Baca &amp; Referensi</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed flex-grow">
                            Koleksi buku teks keinsinyuran, standar SNI terbaru, dokumen tugas akhir alumni, dan akses repositori jurnal online.
                        </p>
                    </div>
                </div>

                {{-- Ruang Sidang & Seminar --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Ruang Sidang"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-white font-bold text-xs">Seminar &amp; Sidang</span>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h4 class="font-bold text-slate-900 text-sm">Ruang Sidang Tugas Akhir</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed flex-grow">
                            Ruangan formal representatif untuk seminar proposal, kolokium ilmiah, kuliah tamu pakar industri, dan ujian komprehensif.
                        </p>
                    </div>
                </div>

                {{-- Gazebo & Coworking Space --}}
                <div class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Coworking & Gazebo"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-white font-bold text-xs">Coworking Space</span>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h4 class="font-bold text-slate-900 text-sm">Selasar &amp; Gazebo Diskusi</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed flex-grow">
                            Area terbuka hijau untuk belajar mandiri, asistensi tugas besar gambar rekayasa, dan kegiatan kolaboratif organisasi mahasiswa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 3: Standar K3L Laboratorium --}}
    <section class="py-14 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] rounded-3xl p-8 sm:p-10 text-white shadow-md relative overflow-hidden">
                <div class="absolute inset-0 opacity-[0.04] bg-repeat pointer-events-none"
                     style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
                
                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <span class="text-amber-400 font-bold uppercase text-xs tracking-wider block mb-1">
                            Keselamatan Kerja Laboratorium
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading">
                            Standar K3L (Kesehatan &amp; Keselamatan Kerja)
                        </h3>
                        <p class="text-slate-300 text-xs sm:text-sm mt-3 leading-relaxed">
                            Seluruh kegiatan praktikum dan riset wajib mematuhi protokol K3L, penggunaan Alat Pelindung Diri (APD: helm proyek, rompi, sepatu safety, kacamata), serta ketersediaan kotak P3K dan tabung pemadam api (APAR) di setiap laboratorium.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-3 shrink-0">
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-4 text-center min-w-[120px]">
                            <i class="fa-solid fa-helmet-safety text-amber-400 text-2xl mb-1"></i>
                            <div class="text-xs font-bold text-white mt-1">Wajib APD</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-4 text-center min-w-[120px]">
                            <i class="fa-solid fa-fire-extinguisher text-amber-400 text-2xl mb-1"></i>
                            <div class="text-xs font-bold text-white mt-1">APAR Siaga</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
