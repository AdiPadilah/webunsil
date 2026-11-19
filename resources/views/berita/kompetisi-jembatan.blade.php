@extends('layouts.app')

@section('title', 'Babak Final National Bridge Design Competition SCIENCE 2026 | Teknik Sipil UNSIL')
@section('meta_description', 'Himpunan Mahasiswa Sipil FT-Unsil selenggarakan babak final National Bridge Design Competition dalam ajang bergengsi SCIENCE 2026.')

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
            <span class="text-slate-800 font-semibold truncate">Final National Bridge Design Competition SCIENCE 2026</span>
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
                            <span class="inline-flex items-center gap-1 bg-pink-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-trophy text-[9px]"></i> Prestasi &amp; Kompetisi
                            </span>
                            <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-800 text-[10px] font-bold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 20 Oktober 2026
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Aula Gedung Teknik Sipil UNSIL
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Himpunan Mahasiswa Sipil FT-Unsil Selenggarakan Babak Final National Bridge Design Competition dalam Ajang Bergengsi SCIENCE 2026
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2026/10/20/himpunan-mahasiswa-sipil-ft-unsil-selenggarakan-babak-final-national-bridge-design-competition-dalam-ajang-bergengsi-science-2026/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Babak Final National Bridge Design Competition SCIENCE 2026 FT UNSIL" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Ketua Program Studi Teknik Sipil Unsil Andhy Romdani, Ph.D., dewan juri, panitia HMS FT-Unsil, serta perwakilan finalis dari Universitas Diponegoro dan Universitas Tidar pada pembukaan babak final National Bridge Design Competition SCIENCE 2026.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Himpunan Mahasiswa Sipil (HMS) Universitas Siliwangi menyelenggarakan babak final <em>National Bridge Design Competition</em> dalam rangkaian <strong>SCIENCE 2026</strong> di Aula Gedung Teknik Sipil Unsil, Senin (19/10/2026). Kegiatan ini mempertemukan tiga tim mahasiswa dari Universitas Diponegoro, Semarang, yaitu <strong>Tim Joetata</strong> dan <strong>Tim Circle Zenith</strong>, serta <strong>Tim Eljatar Closingan</strong> dari Universitas Tidar, Magelang, untuk berkompetisi dalam merancang jembatan.
                        </p>

                        <p>
                            Pembukaan babak final dihadiri oleh Ketua Program Studi Teknik Sipil Unsil, <strong>Andhy Romdani, Ph.D.</strong>, dewan juri, tamu undangan dari himpunan mahasiswa program studi di Fakultas Teknik, panitia, serta para finalis. Dalam sambutannya, Andhy mengapresiasi kerja keras panitia dan pengurus HMS Unsil dalam mempersiapkan kegiatan tersebut. Menurutnya, penyelenggaraan kompetisi membutuhkan perencanaan yang matang, kerja sama tim, dan komitmen dari seluruh pihak yang terlibat. Ia berharap seluruh rangkaian kegiatan dapat berlangsung lancar dan memberikan manfaat bagi peserta maupun pihak yang terlibat, sekaligus membawa nama baik Program Studi Teknik Sipil Unsil.
                        </p>

                        <div class="p-5 bg-blue-50 border-l-4 border-pink-600 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-blue-950 italic">
                                "Kompetisi perancangan jembatan menjadi kesempatan bagi mahasiswa untuk menerapkan teori mekanika, analisis struktur, dan ilmu bahan ke dalam proses perancangan nyata. Mahasiswa diharapkan dapat mengembangkan kemampuan teknis sekaligus memahami penerapan ilmu teknik sipil dalam menghadapi persoalan rekayasa di dunia nyata."
                            </p>
                            <span class="text-xs text-blue-800 font-bold block mt-2">&mdash; Andhy Romdani, Ph.D. (Ketua Program Studi Teknik Sipil FT UNSIL)</span>
                        </div>

                        <p>
                            Ketua HMS Unsil, Muhammad Naufal Alwan, menyampaikan bahwa SCIENCE 2026 tidak hanya menghadirkan kompetisi, tetapi juga akan dilanjutkan dengan seminar nasional dan kunjungan ilmiah, sebelum ditutup dengan civil concert. Sementara itu, Ketua Pelaksana SCIENCE 2026, Restu Ramadhan, menyampaikan terima kasih kepada seluruh panitia yang telah mencurahkan waktu, tenaga, dan pikiran untuk mendukung terselenggaranya kegiatan tersebut.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Dewan Juri &amp; Makna Filosofis Kompetisi</h3>
                        <p>
                            Adapun dewan juri dalam babak final ini terdiri atas tiga dosen Program Studi Teknik Sipil yaitu <strong>Dr. Ir. Yusep Ramdani, S.T., M.T., IPM., ASEAN Eng.</strong>, <strong>Intan Nuriska Rachma, M.T.</strong>, dan <strong>Kartika Seinari Manggala, S.T., M.T.</strong>
                        </p>

                        <div class="p-5 bg-slate-100 border-l-4 border-[#0B2A4A] rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-slate-900 italic">
                                "Jembatan yang baik tidak hanya menghubungkan dua sisi sungai. Dalam kompetisi ini, jembatan juga menjadi penghubung antara teori dan praktik, gagasan dan penerapan, serta mahasiswa dan masa depan profesinya. Dengan adanya kompetisi desain jembatan bertaraf nasional ini diharapkan daya saing dan keterampilan mahasiswa semakin terasah."
                            </p>
                            <span class="text-xs text-slate-700 font-bold block mt-2">&mdash; Dr. Ir. Yusep Ramdani, S.T., M.T., IPM., ASEAN Eng. (Dewan Juri &amp; Wakil Dekan I FT UNSIL)</span>
                        </div>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Hasil Babak Final</h3>
                        <p>
                            Berdasarkan hasil penilaian dewan juri terhadap rancangan analisis struktur, efisiensi berat, dan uji pembebanan:
                        </p>
                        <ul class="list-disc pl-5 space-y-1 text-sm text-slate-700">
                            <li><strong>Juara 1:</strong> Tim Joetata &mdash; Universitas Diponegoro (Undip)</li>
                            <li><strong>Juara 2:</strong> Tim Eljatar Closingan &mdash; Universitas Tidar (Untidar)</li>
                            <li><strong>Juara 3:</strong> Tim Circle Zenith &mdash; Universitas Diponegoro (Undip)</li>
                        </ul>
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
                                <span><strong class="text-slate-800">Senin, 19 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Aula Gedung Teknik Sipil UNSIL</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-award text-blue-700 mt-0.5 w-4"></i>
                                <span>Juara 1: Tim Joetata (Universitas Diponegoro)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-users text-blue-700 mt-0.5 w-4"></i>
                                <span>Penyelenggara: HMS FT UNSIL &bull; SCIENCE 2026</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Portal Resmi UNSIL</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Berita ini diliput resmi oleh Humas Universitas Siliwangi dan terbit di portal unsil.ac.id.
                        </p>
                        <a href="https://unsil.ac.id/2026/10/20/himpunan-mahasiswa-sipil-ft-unsil-selenggarakan-babak-final-national-bridge-design-competition-dalam-ajang-bergengsi-science-2026/" target="_blank" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Baca di unsil.ac.id</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
