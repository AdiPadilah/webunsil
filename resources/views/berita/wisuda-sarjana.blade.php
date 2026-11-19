@extends('layouts.app')

@section('title', 'Pelepasan Calon Wisudawan Sarjana Teknik Sipil | Teknik Sipil UNSIL')
@section('meta_description', 'Pelepasan wisudawan Sarjana Teknik (S.T.) Program Studi Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya.')

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
            <span class="text-slate-800 font-semibold truncate">Wisuda Sarjana Teknik Sipil UNSIL</span>
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
                            <span class="inline-flex items-center gap-1 bg-emerald-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-graduation-cap text-[9px]"></i> Wisuda &amp; Alumni
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 24 Oktober 2025
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Gedung Rektorat Mandala UNSIL
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Pelepasan Calon Wisudawan Program Studi S-1 Teknik Sipil FT UNSIL
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas &amp; Ikatan Alumni Teknik Sipil UNSIL</strong> &bull; Sumber: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@sipilunsil</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Pelepasan Calon Wisudawan Teknik Sipil" class="w-full object-cover" onerror="this.src='{{ asset('images/gedung-unsil.jpg') }}'">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Foto bersama pimpinan fakultas, koordinator program studi, para dosen pengajar, dan wisudawan sarjana Teknik Sipil FT UNSIL pada sesi prosesi pelepasan.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>TASIKMALAYA</strong> &mdash; Suasana bangga dan haru mewarnai acara <em>Pelepasan Calon Wisudawan Periode II</em> Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi yang berlangsung khidmat di Gedung Mandala UNSIL.
                        </p>

                        <p>
                            Pada periode kelulusan ini, puluhan lulusan resmi menyandang gelar <strong>Sarjana Teknik (S.T.)</strong> setelah menyelesaikan kurikulum 144 SKS, tugas besar perancangan laboratorium, kerja praktik di industri konstruksi, serta sidang skripsi tugas akhir. Sebagian lulusan berhasil lulus dengan predikat <em>Dengan Pujian (Cum Laude)</em> dan masa studi tepat waktu.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Amanat Koordinator Program Studi</h3>
                        <p>
                            Koordinator Program Studi Teknik Sipil FT UNSIL berpesan agar para alumni senantiasa menjunjung tinggi kode etik keinsinyuran, integritas moral, serta adaptif terhadap transformasi digital di bidang pemodelan konstruksi seperti BIM dan rekayasa ramah lingkungan (green infrastructure).
                        </p>

                        <div class="p-5 bg-emerald-50 border-l-4 border-emerald-700 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-emerald-950 italic">
                                "Gelar Sarjana Teknik bukan akhir, melainkan gerbang awal pengabdian nyata kepada bangsa. Bawa nama baik almamater Universitas Siliwangi di manapun Anda berkarya, baik di BUMN, kontraktor, konsultan, maupun birokrasi pemerintahan."
                            </p>
                            <span class="text-xs text-emerald-800 font-bold block mt-2">&mdash; Koordinator Program Studi S-1 Teknik Sipil FT UNSIL</span>
                        </div>

                        <p>
                            Dalam kesempatan tersebut, perwakilan Ikatan Alumni Teknik Sipil (IKATSI) UNSIL turut hadir menyambut anggota baru dan memaparkan peluang jenjang karir serta program mentoring alumni untuk mempercepat transisi lulusan ke dunia kerja industri.
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
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Acara
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">24 Oktober 2025</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Gedung Mandala, Universitas Siliwangi</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-user-graduate text-blue-700 mt-0.5 w-4"></i>
                                <span>Gelar: Sarjana Teknik (S.T.)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Jejaring Alumni</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Informasi seputar tracer study alumni, lowongan kerja keteknikan, dan kegiatan silaturahmi alumni Teknik Sipil UNSIL.
                        </p>
                        <a href="{{ route('mahasiswa-alumni') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Halaman Mahasiswa &amp; Alumni</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
