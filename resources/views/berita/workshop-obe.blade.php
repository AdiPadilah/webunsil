@extends('layouts.app')

@section('title', 'Workshop Penguatan Kurikulum Berbasis OBE | Teknik Sipil UNSIL')
@section('meta_description', 'Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE) menghadirkan Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU. di Universitas Siliwangi.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Workshop Kurikulum OBE</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="inline-flex items-center gap-1 bg-[#0070BA] text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-chalkboard-user text-[9px]"></i> Workshop &amp; Kurikulum
                            </span>
                            <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-800 text-[10px] font-bold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar-day text-[9px]"></i> Jum'at, 27 November 2026
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Kampus 2 UNSIL Mugarsari
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE)
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Penyelenggara: <strong class="text-slate-700">Program Studi S-1 Teknik Sipil FT Universitas Siliwangi</strong> &bull; Kanal: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@sipilunsil</a>
                        </p>
                    </div>

                    
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200 bg-white">
                        <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Poster Workshop Penguatan Kurikulum OBE Teknik Sipil UNSIL" class="w-full max-h-[600px] object-contain mx-auto bg-slate-100">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed text-center">
                            Poster Resmi: Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE) bersama Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU.
                        </figcaption>
                    </figure>

                    
                    <div class="bg-blue-50 border border-blue-200 rounded-2xl p-5 mb-8">
                        <h3 class="text-sm font-bold text-blue-900 flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-circle-info text-blue-600"></i>
                            <span>Rincian Jadwal &amp; Narasumber Kegiatan</span>
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                            <div class="space-y-2">
                                <div>
                                    <span class="text-slate-500 block text-[10px] uppercase font-semibold">Narasumber Utama</span>
                                    <strong class="text-slate-900 text-sm">Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU.</strong>
                                    <p class="text-[11px] text-slate-600">Ketua Program Studi Magister Teknik Sipil Fakultas Teknik Universitas Sebelas Maret (UNS)</p>
                                </div>
                                <div>
                                    <span class="text-slate-500 block text-[10px] uppercase font-semibold">Waktu Pelaksanaan</span>
                                    <p class="font-bold text-slate-900 flex items-center gap-1.5 mt-0.5">
                                        <i class="fa-regular fa-clock text-blue-600"></i>
                                        Jum'at, 27 November 2026 &bull; 08.00 WIB s.d. Selesai
                                    </p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div>
                                    <span class="text-slate-500 block text-[10px] uppercase font-semibold">Tempat / Lokasi</span>
                                    <p class="font-bold text-slate-900 flex items-center gap-1.5 mt-0.5">
                                        <i class="fa-solid fa-location-dot text-rose-600"></i>
                                        Kampus 2 Universitas Siliwangi Mugarsari, Tasikmalaya
                                    </p>
                                </div>
                                <div>
                                    <span class="text-slate-500 block text-[10px] uppercase font-semibold">Peserta</span>
                                    <p class="text-slate-700">Dosen, Tim Pengembang Kurikulum Prodi Teknik Sipil FT UNSIL, dan Sivitas Akademika</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>TASIKMALAYA</strong> &mdash; Dalam rangka mengakselerasi peningkatan mutu lulusan keteknikan dan memenuhi standar akreditasi internasional IABEE (Indonesian Accreditation Board for Engineering Education) serta LAM Teknik, Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi akan menyelenggarakan agenda penting berupa <strong>Workshop Penguatan Kurikulum Berbasis Outcome-Based Education (OBE)</strong>.
                        </p>

                        <p>
                            Workshop ini menghadirkan pakar kurikulum ketekniksipilan nasional, yaitu <strong>Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU.</strong>, yang saat ini menjabat sebagai Ketua Program Studi Magister Teknik Sipil Fakultas Teknik Universitas Sebelas Maret (UNS).
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 pt-2 font-heading">
                            Fokus Utama Pembahasan Workshop:
                        </h3>

                        <ul class="list-disc pl-5 space-y-2">
                            <li>
                                <strong>Rekonstruksi Capaian Pembelajaran Lulusan (CPL):</strong> Penyelarasan kemampuan lulusan dengan kebutuhan revolusi industri konstruksi masa kini, standar KKNI level 6, dan asesmen berbasis luaran nyata mahasiswa.
                            </li>
                            <li>
                                <strong>Desain Rencana Pembelajaran Semester (RPS) Berbasis OBE:</strong> Perumusan Capaian Pembelajaran Mata Kuliah (CPMK) dan Sub-CPMK yang terukur dengan rubrik penilaian komprehensif.
                            </li>
                            <li>
                                <strong>Continuous Quality Improvement (CQI):</strong> Penerapan siklus evaluasi mutu kurikulum secara berkelanjutan untuk menjamin ketercapaian kompetensi sarjana teknik sipil.
                            </li>
                            <li>
                                <strong>Integrasi Digital Construction &amp; Green Engineering:</strong> Penyesuaian materi perkuliahan dengan tren teknologi mutakhir seperti BIM, rekayasa tahan gempa, dan infrastruktur berkelanjutan ramah lingkungan.
                            </li>
                        </ul>

                        <p>
                            Melalui kegiatan ini, Program Studi S-1 Teknik Sipil FT UNSIL menegaskan komitmennya untuk terus menyediakan kurikulum yang adaptif, berdaya saing global, dan responsif terhadap tantangan pembangunan infrastruktur di tingkat nasional maupun internasional.
                        </p>

                        <div class="p-4 bg-slate-100 rounded-xl text-xs text-slate-600 mt-6 border border-slate-200">
                            <p class="font-bold text-slate-800 mb-1">Informasi &amp; Kontak Sekretariat:</p>
                            <p>Email: <a href="mailto:sipil@unsil.ac.id" class="text-blue-700 underline">sipil@unsil.ac.id</a> | Instagram: <a href="https://instagram.com/sipilunsil" target="_blank" class="text-pink-600 underline">@sipilunsil</a></p>
                        </div>
                    </div>

                    
                    <div class="mt-8 pt-6 border-t border-slate-200 flex items-center justify-between">
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-blue-700 hover:text-blue-900">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Kembali ke Berita &amp; Agenda</span>
                        </a>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-slate-800">
                            <i class="fa-solid fa-house text-[10px]"></i>
                            <span>Beranda</span>
                        </a>
                    </div>
                </article>

                
                <aside class="space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <h3 class="text-sm font-bold text-slate-900 pb-3 border-b border-slate-200 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-newspaper text-blue-700"></i>
                            <span>Berita Terkait Lainnya</span>
                        </h3>
                        <div class="space-y-4">
                            <article>
                                <a href="{{ route('berita.seminar-taiwan') }}" class="group block">
                                    <span class="text-[10px] font-bold text-blue-700 block mb-0.5">12 Oktober 2026</span>
                                    <h4 class="text-xs font-bold text-slate-800 group-hover:text-blue-700 transition leading-snug">
                                        Seminar Internasional Indonesia-Taiwan bersama Yanuar Haryanto, Ph.D.
                                    </h4>
                                </a>
                            </article>
                            <article class="pt-3 border-t border-slate-100">
                                <a href="{{ route('berita.kuliah-tamu-bim') }}" class="group block">
                                    <span class="text-[10px] font-bold text-purple-700 block mb-0.5">08 Januari 2026</span>
                                    <h4 class="text-xs font-bold text-slate-800 group-hover:text-blue-700 transition leading-snug">
                                        Kuliah Tamu Building Information Modelling (BIM) untuk Infrastruktur Modern
                                    </h4>
                                </a>
                            </article>
                            <article class="pt-3 border-t border-slate-100">
                                <a href="{{ route('berita.kompetisi-jembatan') }}" class="group block">
                                    <span class="text-[10px] font-bold text-amber-700 block mb-0.5">20 Mei 2026</span>
                                    <h4 class="text-xs font-bold text-slate-800 group-hover:text-blue-700 transition leading-snug">
                                        Kompetisi Rancang Jembatan Nasional SCIENCE 2026 Digelar
                                    </h4>
                                </a>
                            </article>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] rounded-2xl p-6 text-white shadow-md">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block mb-1">Akademik UNSIL</span>
                        <h3 class="text-sm font-bold">Kurikulum 144 SKS</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">
                            Pelajari struktur kurikulum, silabus mata kuliah, dan peta konsentrasi bidang keahlian Teknik Sipil FT UNSIL.
                        </p>
                        <a href="{{ route('kurikulum') }}" class="mt-4 inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-500 text-slate-950 text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Lihat Kurikulum</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
