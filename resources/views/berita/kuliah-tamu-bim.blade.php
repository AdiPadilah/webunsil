@extends('layouts.app')

@section('title', 'Kuliah Tamu BIM untuk Infrastruktur Modern | Teknik Sipil UNSIL')
@section('meta_description', 'Kuliah tamu Building Information Modelling (BIM) menghadirkan praktisi BUMN Konstruksi di Program Studi Teknik Sipil Universitas Siliwangi.')

@section('content')
    <!-- Breadcrumb Header -->
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Kuliah Tamu BIM Infrastruktur</span>
        </div>
    </div>

    <!-- Article -->
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- Konten Utama -->
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="inline-flex items-center gap-1 bg-purple-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-laptop-code text-[9px]"></i> Kuliah Tamu &amp; Industri
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 08 Januari 2026
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Ruang Multimedia FT UNSIL Mugarsari
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Kuliah Tamu: Building Information Modelling (BIM) untuk Efisiensi Proyek Infrastruktur Modern
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">KBK Manajemen Konstruksi &amp; Komputasi FT UNSIL</strong> &bull; Sumber: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@sipilunsil</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/lab-civil.jpg') }}" alt="Kuliah Tamu BIM" class="w-full object-cover" onerror="this.src='{{ asset('images/gedung-rektorat-unsil.jpg') }}'">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Praktik langsung pemodelan struktur 3D dan simulasi clash detection menggunakan perangkat lunak BIM pada sesi kuliah tamu di Laboratorium Komputasi FT UNSIL.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>TASIKMALAYA</strong> &mdash; Dalam rangka membekali mahasiswa dengan keahlian digital engineering termutakhir, Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi menyelenggarakan <strong>Kuliah Tamu Spesialisasi: Building Information Modelling (BIM)</strong>.
                        </p>

                        <p>
                            Kegiatan ini menghadirkan praktisi BIM Manager dari BUMN Karya nasional yang memaparkan adopsi teknologi pemodelan informasi bangunan dari dimensi 3D (geometri model), 4D (penjadwalan waktu proyek), hingga 5D (estimasi volume material dan biaya secara otomatis/QTO).
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Peluang Karir BIM Modeler dan Coordinator</h3>
                        <p>
                            Peserta yang terdiri dari mahasiswa tingkat tiga dan empat antusias mengikuti studi kasus pendeteksian tabrakan elemen struktur (clash detection) pada proyek jembatan layang dan gedung bertingkat. Pemateri menekankan bahwa sertifikasi keahlian BIM saat ini menjadi nilai tambah yang sangat dicari oleh kontraktor dan konsultan perencana skala internasional.
                        </p>

                        <div class="p-5 bg-purple-50 border-l-4 border-purple-700 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-purple-950 italic">
                                "Teknik Sipil UNSIL terus beradaptasi dengan kebutuhan industri era konstruksi 4.0. Pengenalan BIM ini melengkapi mata kuliah Manajemen Konstruksi dan Analisis Komputasi yang telah dipelajari mahasiswa."
                            </p>
                            <span class="text-xs text-purple-800 font-bold block mt-2">&mdash; Ketua Pelaksana Kuliah Tamu FT UNSIL</span>
                        </div>

                        <p>
                            Program Studi berkomitmen untuk terus menyelenggarakan pelatihan bersertifikasi dan kuliah pakar berkala guna menjamin lulusan sarjana memiliki kompetensi teknis yang unggul dan siap pakai di pasar kerja global.
                        </p>
                    </div>

                    <div class="mt-10 pt-6 border-t border-slate-200 flex flex-wrap items-center justify-between gap-4">
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-blue-700 hover:text-blue-900 transition">
                            <i class="fa-solid fa-arrow-left"></i> Kembali ke Berita Lainnya
                        </a>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <span>Bagikan:</span>
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center hover:bg-emerald-200 transition" title="WhatsApp">
                                <i class="fa-brands fa-whatsapp text-sm"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="space-y-6">
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">08 Januari 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Laboratorium Komputasi FT UNSIL</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-laptop-code text-blue-700 mt-0.5 w-4"></i>
                                <span>Topik: 3D-5D BIM, Clash Detection &amp; QTO</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Bidang Keahlian</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Pelajari konsentrasi Manajemen Konstruksi dan kurikulum berbasis OBE di program studi kami.
                        </p>
                        <a href="{{ route('kurikulum') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Lihat Kurikulum</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
