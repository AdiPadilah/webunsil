@extends('layouts.app')

@section('title', 'Layanan Terpadu | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Layanan terpadu administrasi akademik, surat pengantar survei, bebas lab, dan legalisir Program Studi Teknik Sipil FT UNSIL.')

@section('content')
    
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Layanan Terpadu</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs">
                Pelayanan Mahasiswa &amp; Alumni
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Layanan Terpadu
            </h1>
        </div>
    </section>

    
    <section class="py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Administrasi &amp; Pelayanan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Layanan Administrasi Mahasiswa</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                    Kami menyediakan alur permohonan yang cepat, transparan, dan akurat untuk menunjang kelancaran studi mahasiswa dan kebutuhan alumni.
                </p>
            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
                
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-md hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Surat Pengantar &amp; Izin Survei</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Pengurusan surat permohonan izin pengambilan data lapangan, penelitian skripsi/tugas akhir, dan izin pelaksanaan Kerja Praktik (KP) ke instansi pemerintah atau kontraktor swasta.
                        </p>
                        <div class="mt-4 p-3 bg-blue-50/60 rounded-xl text-xs text-blue-950 font-medium">
                            <span class="font-bold">Estimasi:</span> 1-2 hari kerja setelah verifikasi berkas lengkap.
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="mailto:sipil@unsil.ac.id" class="text-xs font-bold text-blue-700 hover:text-blue-900 flex items-center gap-1.5">
                            <i class="fa-solid fa-paper-plane text-[10px]"></i> Ajukan Permohonan
                        </a>
                    </div>
                </div>

                
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-md hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-stamp"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Bebas Laboratorium</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Penerbitan surat keterangan bebas pinjam peralatan laboratorium dan ruang praktikum sebagai syarat wajib pendaftaran sidang yudisium dan kelulusan sarjana teknik.
                        </p>
                        <div class="mt-4 p-3 bg-amber-50/60 rounded-xl text-xs text-amber-950 font-medium">
                            <span class="font-bold">Persyaratan:</span> Tanda tangan verifikasi dari 6 kepala lab.
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('fasilitas') }}" class="text-xs font-bold text-amber-700 hover:text-amber-900 flex items-center gap-1.5">
                            <i class="fa-solid fa-flask-vial text-[10px]"></i> Cek Kontak Laboratorium
                        </a>
                    </div>
                </div>

                
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-md hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Legalisir Dokumen</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Pelayanan verifikasi keabsahan dan legalisir ijazah sarjana teknik sipil, transkrip nilai akademik, serta sertifikat akreditasi program studi untuk keperluan kerja atau studi lanjut.
                        </p>
                        <div class="mt-4 p-3 bg-emerald-50/60 rounded-xl text-xs text-emerald-950 font-medium">
                            <span class="font-bold">Pelayanan:</span> Tatap muka di Loket Akademik FT UNSIL Mugarsari.
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <span class="text-xs font-bold text-emerald-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-clock text-[10px]"></i> Senin - Jumat (08.00 - 15.00 WIB)
                        </span>
                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection

