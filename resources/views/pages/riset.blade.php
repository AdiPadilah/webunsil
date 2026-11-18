@extends('layouts.app')

@section('title', 'Riset dan Kolaborasi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis industri BUMN, instansi pemerintah PUPR, asosiasi profesi PII, riset unggulan dosen, dan PKM Teknik Sipil FT UNSIL.')

@section('content')
    <!-- Page Header Banner -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Riset &amp; Kolaborasi</span>
            </nav>
            <span class="inline-block bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                Inovasi, Industri &amp; Pengabdian
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Riset &amp; Kolaborasi
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-3xl leading-relaxed">
                Membangun sinergi pentahelix antara perguruan tinggi, industri konstruksi nasional, lembaga riset internasional, dan pemerintah daerah untuk percepatan pembangunan infrastruktur berkelanjutan.
            </p>
        </div>
    </section>

    <!-- Konten Kemitraan & Kerja Sama -->
    <section class="py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Kemitraan Strategis</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 font-heading">Jejaring Kerja Sama Industri</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                    Kolaborasi aktif dalam program Magang MBKM, kuliah dosen praktisi, riset terapan proyek infrastruktur, dan rekrutmen lulusan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
                <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="text-blue-700 text-3xl mb-4"><i class="fa-solid fa-building-flag"></i></div>
                    <h3 class="text-base font-bold text-slate-900">BUMN &amp; Kontraktor Nasional</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Kerja sama magang industri konstruksi bersertifikat MBKM, rekrutmen fresh graduate alumni, dan kuliah dosen praktisi berpengalaman proyek nasional.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="text-amber-600 text-3xl mb-4"><i class="fa-solid fa-landmark"></i></div>
                    <h3 class="text-base font-bold text-slate-900">Instansi Pemerintah &amp; PUPR</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Sinergi dengan Dinas PUPR Provinsi Jawa Barat, BBWS Citanduy, serta Pemda wilayah Priangan Timur dalam studi perencanaan dan mitigasi drainase/banjir.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="text-emerald-600 text-3xl mb-4"><i class="fa-solid fa-certificate"></i></div>
                    <h3 class="text-base font-bold text-slate-900">Asosiasi Profesi PII &amp; LPJK</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Pembinaan sertifikasi kompetensi Surat Tanda Registrasi Insinyur (STRI), Program Profesi Insinyur (PPI), dan uji kompetensi kerja konstruksi.
                    </p>
                </div>
            </div>

            <!-- Bagian Riset & PKM -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                <!-- Fokus Riset Dosen -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 shadow-md flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-microscope"></i>
                            </div>
                            <div>
                                <span class="text-blue-700 font-bold uppercase text-[11px] tracking-wider block">Inovasi Keilmuan</span>
                                <h3 class="text-lg font-bold text-slate-900">Fokus Penelitian Dosen</h3>
                            </div>
                        </div>
                        <ul class="space-y-3.5 text-xs text-slate-600">
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-blue-700 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Pemanfaatan fly ash dan geopolimer untuk beton berkelanjutan ramah lingkungan beremisi karbon rendah.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-blue-700 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Stabilisasi tanah lempung ekspansif dengan bahan tambah mineral lokal Priangan Timur untuk fondasi jalan dan lereng.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-blue-700 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Kajian kinerja campuran aspal panas daur ulang (Reclaimed Asphalt Pavement) untuk konstruksi jalan raya efisien.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-blue-700 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Pemodelan hidraulik limpasan hujan dan tata kelola sistem drainase perkotaan adaptif terhadap perubahan iklim.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8 pt-5 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium">Publikasi Riset Terindeks SINTA</span>
                        <a href="{{ route('karya-dosen') }}" class="text-xs font-bold text-blue-700 hover:underline">Lihat Karya Dosen &rarr;</a>
                    </div>
                </div>

                <!-- PKM -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 shadow-md flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-hands-holding-circle"></i>
                            </div>
                            <div>
                                <span class="text-amber-600 font-bold uppercase text-[11px] tracking-wider block">Bakti Masyarakat</span>
                                <h3 class="text-lg font-bold text-slate-900">Pengabdian Kepada Masyarakat (PKM)</h3>
                            </div>
                        </div>
                        <ul class="space-y-3.5 text-xs text-slate-600">
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-amber-600 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Pendampingan teknis pembangunan dan pemeliharaan sarana jembatan perintis dan jalan desa terisolir.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-amber-600 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Sosialisasi dan pelatihan konstruksi rumah sederhana tahan gempa bagi tukang bangunan dan masyarakat pedesaan.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-amber-600 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Perencanaan saluran drainase penanggulangan genangan air dan penataan sanitasi di kawasan pemukiman padat.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-circle-check text-amber-600 mt-0.5 text-sm flex-shrink-0"></i>
                                <span>Edukasi mitigasi risiko tanah longsor bagi warga di perbukitan rawan bencana wilayah Tasikmalaya dan sekitarnya.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8 pt-5 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium">Bakti Nyata Sivitas Akademika UNSIL</span>
                        <a href="{{ route('home') }}#lokasi" class="text-xs font-bold text-amber-700 hover:underline">Lokasi Pengabdian &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
