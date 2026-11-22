@extends('layouts.app')

@section('title', 'Download Berkas | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Pusat unduhan dokumen resmi, modul praktikum, panduan kerja praktik, pedoman skripsi, dan SOP Program Studi Teknik Sipil FT UNSIL.')

@section('content')
    
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Download</span>
            </nav>
            <span class="text-amber-400 text-xs font-medium mb-2">
                Dokumen &amp; Berkas Resmi
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Pusat Unduhan (Download)
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Akses berkas resmi modul praktikum laboratorium, pedoman penulisan skripsi/TA, panduan kerja praktik, dan formulir akademik Program Studi Teknik Sipil FT UNSIL.
            </p>
        </div>
    </section>

    
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.08] bg-repeat pointer-events-none"
             style="background-image: url('{{ asset('images/corak-busur-gold.png') }}'); background-size: 260px auto;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Akses Berkas Resmi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Kategori Dokumen Akademik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Pastikan Anda mengunduh dokumen versi terbaru sesuai ketentuan akademik Fakultas Teknik Universitas Siliwangi.
                </p>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-2xl mb-4">
                            <i class="fa-solid fa-file-pdf"></i>
                        </div>
                        <h4 class="text-base font-bold text-slate-900">Modul Praktikum</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                            Panduan praktikum TBK, Perkerasan Jalan, Perpetaan &amp; Ukur Tanah, Mekanika Tanah, dan Hidrolika.
                        </p>
                    </div>
                    <a href="#tabel-unduhan" class="inline-flex items-center gap-1.5 mt-5 text-xs font-bold text-blue-700 hover:text-blue-900">
                        <span>Lihat Berkas</span>
                        <i class="fa-solid fa-arrow-down text-[10px]"></i>
                    </a>
                </div>

                
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-2xl mb-4">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <h4 class="text-base font-bold text-slate-900">Panduan KP</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                            Standar operasional prosedur pelaksanaan Kerja Praktik, format penyusunan laporan, dan lembar asistensi.
                        </p>
                    </div>
                    <a href="#tabel-unduhan" class="inline-flex items-center gap-1.5 mt-5 text-xs font-bold text-amber-600 hover:text-amber-800">
                        <span>Lihat Berkas</span>
                        <i class="fa-solid fa-arrow-down text-[10px]"></i>
                    </a>
                </div>

                
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl mb-4">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <h4 class="text-base font-bold text-slate-900">Pedoman Skripsi/TA</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                            Buku pedoman sistematika penulisan proposal, skripsi sarjana teknik, format kutipan, dan template Word/LaTeX.
                        </p>
                    </div>
                    <a href="#tabel-unduhan" class="inline-flex items-center gap-1.5 mt-5 text-xs font-bold text-emerald-600 hover:text-emerald-800">
                        <span>Lihat Berkas</span>
                        <i class="fa-solid fa-arrow-down text-[10px]"></i>
                    </a>
                </div>

                
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl mb-4">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4 class="text-base font-bold text-slate-900">SOP Laboratorium</h4>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                            Tata tertib praktikum, standar keselamatan dan kesehatan kerja (K3), serta prosedur peminjaman alat laboratorium.
                        </p>
                    </div>
                    <a href="#tabel-unduhan" class="inline-flex items-center gap-1.5 mt-5 text-xs font-bold text-purple-600 hover:text-purple-800">
                        <span>Lihat Berkas</span>
                        <i class="fa-solid fa-arrow-down text-[10px]"></i>
                    </a>
                </div>
            </div>

            
            <div id="tabel-unduhan" class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-lg">
                <div class="bg-[#0B2A4A] px-6 py-4 text-white flex items-center justify-between">
                    <div>
                        <h3 class="text-base font-bold">Daftar Dokumen Resmi Siap Unduh</h3>
                        <p class="text-xs text-slate-300">Format PDF / DOCX &bull; Program Studi Teknik Sipil UNSIL</p>
                    </div>
                    <span class="text-xs bg-amber-400 text-slate-950 font-bold px-3 py-1 rounded-full">
                        Tahun Akademik Terbaru
                    </span>
                </div>

                <div class="divide-y divide-slate-100 text-xs sm:text-sm">
                    @php
                    $files = [
                        ['title' => 'Buku Pedoman Penyusunan Skripsi & Tugas Akhir FT UNSIL', 'cat' => 'Tugas Akhir', 'type' => 'PDF', 'size' => '2.4 MB'],
                        ['title' => 'Format & Template Penulisan Skripsi Mahasiswa Teknik Sipil', 'cat' => 'Tugas Akhir', 'type' => 'DOCX', 'size' => '1.1 MB'],
                        ['title' => 'Buku Panduan Pelaksanaan & Penulisan Laporan Kerja Praktik (KP)', 'cat' => 'Kerja Praktik', 'type' => 'PDF', 'size' => '1.8 MB'],
                        ['title' => 'Formulir Permohonan Izin Kerja Praktik ke Instansi / BUMN', 'cat' => 'Formulir', 'type' => 'DOCX', 'size' => '420 KB'],
                        ['title' => 'Modul Praktikum Teknologi Bahan Konstruksi (TBK)', 'cat' => 'Laboratorium', 'type' => 'PDF', 'size' => '3.5 MB'],
                        ['title' => 'Modul Praktikum Mekanika Tanah & Rekayasa Geoteknik', 'cat' => 'Laboratorium', 'type' => 'PDF', 'size' => '4.2 MB'],
                        ['title' => 'Modul Praktikum Perpetaan & Pengukuran Tanah (Ukur Tanah)', 'cat' => 'Laboratorium', 'type' => 'PDF', 'size' => '3.1 MB'],
                        ['title' => 'Standar Keselamatan dan Kesehatan Kerja (K3) Laboratorium Sipil', 'cat' => 'K3 & SOP', 'type' => 'PDF', 'size' => '950 KB'],
                        ['title' => 'Formulir Bebas Laboratorium untuk Syarat Yudisium', 'cat' => 'Yudisium', 'type' => 'PDF', 'size' => '380 KB'],
                    ];
                    @endphp

                    @foreach($files as $f)
                    <div class="p-4 sm:px-6 sm:py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:bg-slate-50 transition">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-file-arrow-down text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 leading-snug">{{ $f['title'] }}</h4>
                                <div class="flex items-center gap-2 mt-1 text-[11px] text-slate-500">
                                    <span class="bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-medium">{{ $f['cat'] }}</span>
                                    <span>&bull;</span>
                                    <span class="font-semibold text-blue-700">{{ $f['type'] }}</span>
                                    <span>&bull;</span>
                                    <span>{{ $f['size'] }}</span>
                                </div>
                            </div>
                        </div>

                        <a href="#" onclick="alert('Berkas {{ $f['title'] }} siap diunduh.'); return false;" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-blue-700 hover:bg-blue-800 text-white font-bold text-xs shadow-sm transition whitespace-nowrap self-start sm:self-center">
                            <i class="fa-solid fa-download text-[10px]"></i>
                            <span>Unduh Berkas</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection

