@extends('layouts.app')

@section('title', 'Tenaga Kependidikan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Profil dan informasi Tenaga Kependidikan Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi Kampus 2 Mugarsari dalam mendukung layanan akademik, laboratorium, dan administrasi kemahasiswaan.')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Tenaga Kependidikan</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Layanan Administrasi, Laboratorium &amp; Dukungan Akademik
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Tenaga <span class="text-amber-400">Kependidikan</span>
            </h1>
        </div>
    </section>

    {{-- Konten Utama --}}
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            

            {{-- Grid Layanan & Peran Tendik --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                
                {{-- Unit 1: Administrasi Akademik & Kemahasiswaan --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-[#0B2A4A] flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base font-heading">Administrasi Akademik &amp; Kemahasiswaan</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Mengelola administrasi kartu rencana studi (KRS), berkas kerja praktik, pendaftaran seminar proposal, seminar hasil, sidang skripsi, yudisium, dan legalisir dokumen akademik mahasiswa.
                    </p>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] text-blue-700 font-semibold">
                        <i class="fa-solid fa-clock text-[10px]"></i> Layanan Hari Kerja 07.30 - 16.00 WIB
                    </div>
                </div>

                {{-- Unit 2: Pranata Laboratorium Pendidikan (PLP) / Laboran --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base font-heading">Pranata Laboratorium Pendidikan (PLP)</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Bertanggung jawab atas pemeliharaan instrumen uji, kalibrasi alat laboratorium terpadu teknik sipil (Struktur &amp; Bahan, Mekanika Tanah, Keairan, Pemetaan/Ukur Tanah, Transportasi &amp; Komputasi), serta mendampingi kegiatan praktikum mahasiswa.
                    </p>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] text-emerald-700 font-semibold">
                        <i class="fa-solid fa-microscope text-[10px]"></i> Pengujian &amp; Praktikum Terstandar
                    </div>
                </div>

                {{-- Unit 3: Tata Usaha, Persuratan & Kearsipan --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base font-heading">Tata Usaha &amp; Kearsipan</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Pengelolaan persuratan resmi, surat pengantar izin survei penelitian/KP mahasiswa, dokumen akreditasi, inventarisasi data program studi, serta kearsipan resmi Fakultas Teknik UNSIL.
                    </p>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] text-amber-700 font-semibold">
                        <i class="fa-solid fa-file-shield text-[10px]"></i> Tata Kelola Dokumen Terintegrasi
                    </div>
                </div>

                {{-- Unit 4: Pengelolaan TI & Sistem Informasi --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base font-heading">Teknologi Informasi &amp; Sistem Akademik</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Mendukung kelancaran portal sistem informasi akademik (SIAKAD), jaringan internet kampus, pemeliharaan website resmi program studi, serta infrastruktur komputasi laboratorium rekayasa sipil.
                    </p>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] text-purple-700 font-semibold">
                        <i class="fa-solid fa-network-wired text-[10px]"></i> Dukungan Digital Kampus
                    </div>
                </div>

                {{-- Unit 5: Sarana & Prasarana Kampus --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                    <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-building-circle-check"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base font-heading">Sarana &amp; Prasarana Gedung</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Pemeliharaan ruang kelas ber-AC, ruang seminar, ruang sidang skripsi, ruang konsentrasi keahlian (KBK), ruang komunal mahasiswa, serta fasilitas pendukung kebersihan dan keamanan lingkungan kampus.
                    </p>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] text-cyan-700 font-semibold">
                        <i class="fa-solid fa-location-dot text-[10px]"></i> Kampus 2 Mugarsari UNSIL
                    </div>
                </div>

                {{-- Unit 6: Pusat Informasi & Bantuan Mahasiswa --}}
                <div class="bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] text-white rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-amber-400 text-slate-900 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3 class="font-bold text-white text-base font-heading">Pusat Layanan &amp; Konsultasi</h3>
                        <p class="text-xs text-slate-200 mt-2 leading-relaxed">
                            Mahasiswa yang memerlukan asistensi administrasi persuratan atau layanan laboratorium dapat langsung mengunjungi ruang administrasi Program Studi S-1 Teknik Sipil FT UNSIL.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-blue-900/60 flex items-center gap-2 text-xs text-amber-300 font-medium">
                        <i class="fa-solid fa-envelope"></i> sipil@unsil.ac.id
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
