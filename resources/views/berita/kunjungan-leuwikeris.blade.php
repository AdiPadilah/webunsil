@extends('layouts.app')

@section('title', 'Kunjungan Ilmiah Proyek Bendungan Leuwikeris | Teknik Sipil UNSIL')
@section('meta_description', 'Studi lapangan mahasiswa dan dosen Teknik Sipil Universitas Siliwangi ke Proyek Strategis Nasional Bendungan Leuwikeris bersama Balai Besar Wilayah Sungai (BBWS) Citanduy.')

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
            <span class="text-slate-800 font-semibold truncate">Kunjungan Ilmiah Bendungan Leuwikeris</span>
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
                            <span class="inline-flex items-center gap-1 bg-cyan-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-water text-[9px]"></i> Sumber Daya Air
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 18 November 2025
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Bendungan Leuwikeris, Tasikmalaya - Ciamis
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Kunjungan Ilmiah ke Proyek Strategis Bendungan Leuwikeris bersama BBWS Citanduy
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">KBK Keairan &amp; Sumber Daya Air FT UNSIL</strong> &bull; Sumber: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@sipilunsil</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/event-1.jpg') }}" alt="Kunjungan Bendungan Leuwikeris" class="w-full object-cover" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Rombongan mahasiswa dan dosen Teknik Sipil FT UNSIL bersama tim satuan kerja BBWS Citanduy saat meninjau langsung area spillway dan tubuh bendungan Leuwikeris.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>TASIKMALAYA</strong> &mdash; Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi menyelenggarakan kegiatan <em>field study</em> dan kunjungan ilmiah mahasiswa mata kuliah Rekayasa Bangunan Air dan Hidrologi ke Proyek Strategis Nasional (PSN) <strong>Bendungan Leuwikeris</strong>.
                        </p>

                        <p>
                            Kunjungan ini bertujuan untuk menyelaraskan teori perkuliahan perancangan hidraulika, stabilitas lereng bendungan urugan, dan manajemen sumber daya air dengan kondisi nyata di proyek lapangan berskala besar. Rombongan diterima secara resmi oleh pihak Balai Besar Wilayah Sungai (BBWS) Citanduy Kementerian PUPR.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Peninjauan Teknis dan Diskusi Bersama Ahli</h3>
                        <p>
                            Para mahasiswa berkesempatan mendengarkan pemaparan mendalam dari para insinyur pelaksana mengenai sistem instrumentasi bendungan, pemantauan rembesan (seepage monitoring), konstruksi terowongan pengelak (diversion tunnel), serta fungsi multi-guna bendungan untuk suplai air baku, irigasi 11.200 hektar, dan reduksi banjir di wilayah hilir Sungai Citanduy.
                        </p>

                        <div class="p-5 bg-cyan-50 border-l-4 border-cyan-700 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-cyan-950 italic">
                                "Pengalaman melihat langsung rekayasa geoteknik dan konstruksi hidrolika di lapangan memberikan pemahaman komprehensif bagi calon sarjana teknik sipil UNSIL yang tidak dapat digantikan hanya dengan pembelajaran kelas."
                            </p>
                            <span class="text-xs text-cyan-800 font-bold block mt-2">&mdash; Dosen Pengampu Mata Kuliah Rekayasa Keairan FT UNSIL</span>
                        </div>

                        <p>
                            Kegiatan lapangan ini merupakan bagian dari kurikulum Outcome-Based Education (OBE) Teknik Sipil FT UNSIL yang konsisten mendorong keterlibatan mahasiswa dalam proyek-proyek infrastruktur strategis nasional di Jawa Barat.
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
                                <span><strong class="text-slate-800">18 November 2025</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Proyek Bendungan Leuwikeris, Kab. Ciamis &amp; Tasikmalaya</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-handshake text-blue-700 mt-0.5 w-4"></i>
                                <span>Mitra: BBWS Citanduy Kementerian PUPR</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Laboratorium Keairan</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Pelajari fasilitas pengujian hidrolika, saluran terbuka, dan analisis kualitas air di laboratorium keairan kami.
                        </p>
                        <a href="{{ route('fasilitas') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Lihat Fasilitas Lab</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
