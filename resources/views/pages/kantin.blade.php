@extends('layouts.app')

@section('title', 'Kantin Kampus Sehat & Halal | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Fasilitas kantin kampus Fakultas Teknik UNSIL Kampus 2 Mugarsari dengan sajian higienis, tersertifikasi halal, harga ramah mahasiswa, dan area semi-outdoor.')

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
                <span class="text-slate-200">Kantin</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Kuliner Kampus Sehat &amp; Nyaman
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Kantin
            </h1>
        </div>
    </section>

    {{-- Fitur Unggulan Kantin --}}
    <section class="py-12 md:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kenyamanan &amp; Kebersihan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Standar Layanan Kantin</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-xs sm:text-sm leading-relaxed">
                    Dikelola secara terpadu oleh universitas bersama para mitra penyedia kuliner yang lolos kurasi mutu sanitasi pangan dan kehalalan produk.
                </p>
            </div>

            {{-- 4 Card Fitur --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                {{-- Card 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">100% Halal &amp; Higienis</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Seluruh tenan makanan dan minuman wajib memenuhi standar kehalalan bahan baku serta inspeksi sanitasi berkala dari tim kesehatan kampus.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-shield-halved text-[10px]"></i> Pengawasan Berkala
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Harga Ramah Mahasiswa</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Menu makanan dan minuman dipatok dengan standar tarif yang terjangkau bagi mahasiswa tanpa mengorbankan kualitas rasa dan porsi kecukupan gizi.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-tag text-[10px]"></i> Standar Tarif Kampus
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-qrcode"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Transaksi Digital QRIS</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Mendukung transaksi non-tunai berbasis QRIS nasional dan e-wallet (GoPay, OVO, ShopeePay, Dana, Mobile Banking) untuk kemudahan dan kecepatan transaksi.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-mobile-screen-button text-[10px]"></i> Cashless &amp; Cepat
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-tree"></i>
                        </div>
                        <h3 class="font-bold text-slate-900 text-base font-heading">Suasana Semi-Outdoor</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Konsep arsitektur terbuka yang memaksimalkan hembusan angin segar dan pemandangan hijau kawasan Mugarsari, cocok untuk bersantai dan diskusi kelompok.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-600 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-wind text-[10px]"></i> Sirkulasi Udara Bebas
                    </div>
                </div>

            </div>



        </div>
    </section>

@endsection
