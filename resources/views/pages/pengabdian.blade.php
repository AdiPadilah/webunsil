@extends('layouts.app')

@section('title', 'Pengabdian Kepada Masyarakat (PkM) | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Program Pengabdian Kepada Masyarakat (PkM) dosen dan mahasiswa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi untuk pemberdayaan masyarakat dan pembangunan desa.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300">Riset dan Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-white font-semibold">Pengabdian</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Tridharma Perguruan Tinggi &bull; Bakti Siliwangi
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Pengabdian Kepada Masyarakat (PkM)
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Menerapkan kepakaran keinsinyuran teknik sipil secara nyata untuk membantu problem lingkungan masyarakat, mitigasi bencana alam, dan pembangunan infrastruktur desa di wilayah Priangan Timur.
            </p>
        </div>
    </section>

    {{-- Program Unggulan PkM --}}
    <section class="py-16 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Aksi Nyata di Masyarakat</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Program Pengabdian Unggulan</h2>
                <div class="w-14 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                    Kombinasi keahlian dosen 5 KBK bersama mahasiswa Himpunan Mahasiswa Sipil (HMS) dalam program bakti sosial terstruktur.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Program 1 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-house-chimney-crack"></i>
                        </div>
                        <span class="text-[10px] font-bold text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Mitigasi Bencana</span>
                        <h3 class="font-extrabold text-slate-900 text-base mt-2 font-heading">Sosialisasi Rumah Ramah Gempa</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Pelatihan teknis penulangan kolom praktis, ikatan sloof, dan teknik pasangan bata tahan gempa bagi tukang bangunan dan warga perdesaan rawan gempa Tasikmalaya.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-amber-700 font-semibold">
                        KBK Struktur &amp; Bahan
                    </div>
                </div>

                {{-- Program 2 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-faucet-drip"></i>
                        </div>
                        <span class="text-[10px] font-bold text-cyan-800 bg-cyan-50 border border-cyan-200 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Lingkungan &amp; Air</span>
                        <h3 class="font-extrabold text-slate-900 text-base mt-2 font-heading">Penataan Drainase &amp; Sanitasi Desa</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Perencanaan saluran drainase resapan ramah lingkungan untuk mencegah genangan banjir serta penyuluhan penataan saluran air limbah rumah tangga di perkampungan.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-cyan-700 font-semibold">
                        KBK Sumber Daya Air
                    </div>
                </div>

                {{-- Program 3 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-hill-rockslide"></i>
                        </div>
                        <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 border border-emerald-200 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Geoteknik Terapan</span>
                        <h3 class="font-extrabold text-slate-900 text-base mt-2 font-heading">Mitigasi Longsor Lereng Perbukitan</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Pemberdayaan masyarakat dalam pemasangan bronjong kawat, sistem terasering vegetatif penahan erosi, dan pemasangan rambu peringatan dini di titik rawan longsor.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-emerald-700 font-semibold">
                        KBK Geoteknik
                    </div>
                </div>

                {{-- Program 4 --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-bridge"></i>
                        </div>
                        <span class="text-[10px] font-bold text-blue-800 bg-blue-50 border border-blue-200 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Infrastruktur Desa</span>
                        <h3 class="font-extrabold text-slate-900 text-base mt-2 font-heading">Perbaikan Jembatan &amp; Jalan Desa</h3>
                        <p class="text-xs text-slate-600 mt-2.5 leading-relaxed">
                            Pendampingan teknis pengukuran topografi, perancangan konstruksi jembatan perintis desa, dan perbaikan perkerasan jalan poros antar-dusun terisolasi.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-slate-100 text-[11px] text-blue-700 font-semibold">
                        KBK Transportasi &amp; MK
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
