@extends('layouts.app')

@section('title', 'Penelitian | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Publikasi dan ringkasan riset ilmiah dosen Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    {{-- Hero --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[11px]" aria-hidden="true"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset dan Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Penelitian</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Riset &amp; Publikasi Ilmiah
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Penelitian Dosen
            </h1>
        </div>
    </section>

    {{-- Panel Riset (Gaya Sambutan) --}}
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            @php
            $risetList = [
                [
                    'article_id' => 'Hlm. 1–11',
                    'cover' => 'images/jurnal/tandf_trbm2.jpg',
                    'cover_alt' => 'Cover Resmi International Journal of River Basin Management (Taylor & Francis)',
                    'cover_caption_title' => 'International Journal of River Basin Management',
                    'cover_caption_sub' => 'Taylor & Francis · Informa UK Limited (SCOPUS Q2)',
                    'cover_caption_meta' => 'ISSN: 1571-5124 · 1814-2060',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Jurnal Internasional',
                    'title' => 'Integrating hydrodynamic modelling and hazard assessment to mitigate flood risks in the Pemali River Basin, Central Java, Indonesia',
                    'authors' => 'Muhammad Raka El Ghifari, Andhy Romdani, Ilmiawan Surya Bayuaji, Litan Dey, Mudatsir, Empung, Aquinaldo Sistanto Putra',
                    'journal' => 'International Journal of River Basin Management (Taylor & Francis / Informa UK Limited)',
                    'volume' => 'Ahead-of-Print',
                    'issue' => 'Hlm. 1–11 (Terbit Daring: 11 September 2025)',
                    'index_type' => 'SCOPUS',
                    'index_detail' => 'SCOPUS Q2',
                    'doi_label' => '10.1080/15715124.2025.2551574',
                    'doi_url' => 'https://doi.org/10.1080/15715124.2025.2551574',
                    'paragraphs' => [
                        'Studi ini mengkaji karakteristik hidrodinamika dan risiko banjir di Daerah Aliran Sungai (DAS) Pemali, Jawa Tengah, menggunakan model 2D HEC-RAS yang dikombinasikan dengan metode penilaian bahaya banjir terhadap manusia (\'Flood Hazard to People\') yang dikembangkan oleh DEFRA.',
                        'Simulasi dilakukan pada empat skenario debit banjir, yaitu Q10, Q100, Q1000, dan QPMF, menunjukkan tren peningkatan kedalaman, kecepatan aliran, dan luas genangan seiring meningkatnya intensitas banjir. Kedalaman genangan umumnya kurang dari 1 m dan kecepatan aliran di bawah 0,5 m/s, namun kecepatan lokal dapat mencapai 1,8 m/s di tepi sungai bagian hulu dan kedalaman hingga 2 m di wilayah pesisir padat penduduk.',
                        'Analisis spasial mengidentifikasi Kecamatan Brebes dan Wanasari sebagai wilayah paling terdampak banjir. Peta bahaya banjir diklasifikasikan menjadi empat kategori (rendah, sedang, signifikan, dan ekstrem), menekankan pentingnya integrasi pemodelan hidrodinamika ke dalam penilaian risiko banjir dan perencanaan mitigasi bencana di tingkat regional.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 340–354',
                    'cover' => 'images/jurnal/kanderang_tingang.jpg',
                    'cover_alt' => 'Cover Jurnal Ilmiah Kanderang Tingang (Universitas Palangka Raya)',
                    'cover_caption_title' => 'Jurnal Ilmiah Kanderang Tingang',
                    'cover_caption_sub' => 'Universitas Palangka Raya (SINTA)',
                    'cover_caption_meta' => 'ISSN: 2087-166X · 2721-012X · Vol. 17, No. 2',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Jurnal Nasional',
                    'title' => 'Mapping Climate and Air Quality Risks for Acute Respiratory Infections in Eastern Priangan, Indonesia',
                    'authors' => 'Andhy Romdani, Mudatsir, Fahmi Rahmat Amanulloh, Muhammad Raka El Ghifari, Revianti Coenraad, Daniel Bara Padang Allo, Haniful Birri Ramdani',
                    'journal' => 'Jurnal Ilmiah Kanderang Tingang (Universitas Palangka Raya)',
                    'volume' => 'Volume 17',
                    'issue' => 'Issue 2 (Hlm. 340–354), November 2026',
                    'index_type' => 'SINTA',
                    'index_detail' => 'SINTA · Diamond OA',
                    'doi_label' => '10.37304/jikt.v17i2.466',
                    'doi_url' => 'https://doi.org/10.37304/jikt.v17i2.466',
                    'paragraphs' => [
                        'Studi ini mengkaji hubungan antara parameter iklim, kualitas udara, dan angka rawat inap akibat infeksi saluran pernapasan akut (ISPA) di wilayah Priangan Timur, Indonesia, menggunakan data observasi periode 2022–2023.',
                        'Hasil penelitian menunjukkan peningkatan signifikan kasus ISPA pada periode ekstrem iklim: curah hujan dan suhu tinggi selama September–November 2022, serta curah hujan dan suhu rendah dari Juli hingga Oktober 2023. Meskipun kualitas udara di wilayah ini secara umum memenuhi standar nasional, Indeks Kualitas Udara (AQI) memburuk selama musim kemarau panjang dan berkorelasi dengan lonjakan rawat inap. Kelompok anak-anak diidentifikasi sebagai yang paling rentan terhadap perubahan lingkungan ini.',
                        'Temuan ini menegaskan sifat multifaktorial risiko ISPA yang dipengaruhi oleh efek langsung maupun tidak langsung variabilitas iklim. Studi ini merekomendasikan strategi mitigasi terpadu yang menggabungkan rekayasa teknik, kesiapan layanan kesehatan, dan tindakan pemerintah daerah untuk menghadapi risiko kesehatan berbasis iklim di masa mendatang.',
                    ],
                ],
                [
                    'article_id' => 'Vol. 14, No. 1',
                    'cover' => 'images/jurnal/balanga_jurnal.jpg',
                    'cover_alt' => 'Cover BALANGA Jurnal Pendidikan Teknologi dan Kejuruan (Universitas Palangka Raya)',
                    'cover_caption_title' => 'BALANGA: Jurnal Pendidikan Teknologi dan Kejuruan',
                    'cover_caption_sub' => 'Universitas Palangka Raya (SINTA · Diamond OA)',
                    'cover_caption_meta' => 'ISSN: 2338-462X · 2723-1216 · Vol. 14, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Jurnal Nasional',
                    'title' => 'Soil Improvement Analysis for Container Yard Using Prefabricated Vertical Drains (PVD) and Preloading: A Case Study of Reclaimed Land in the Madura Strait',
                    'authors' => 'Muhammad Teja Pribadi Pamungkas, Andhy Romdani, Zakwan Gusnadi, Hery Setiyaji, Daniel Bara Padang Allo',
                    'journal' => 'BALANGA: Jurnal Pendidikan Teknologi dan Kejuruan (Universitas Palangka Raya)',
                    'volume' => 'Volume 14',
                    'issue' => 'Issue 1 · 2026',
                    'index_type' => 'SINTA',
                    'index_detail' => 'SINTA · Diamond OA',
                    'doi_label' => 'e-journal.upr.ac.id/index.php/JBL/article/view/26433',
                    'doi_url' => 'https://e-journal.upr.ac.id/index.php/JBL/article/view/26433',
                    'paragraphs' => [
                        'Studi ini bertujuan menganalisis efektivitas metode Prefabricated Vertical Drain (PVD) dan preloading dalam mempercepat proses konsolidasi serta meningkatkan stabilitas tanah dasar pada proyek reklamasi lahan untuk container yard di Selat Madura.',
                        'Analisis dilakukan menggunakan perangkat lunak metode elemen hingga dua dimensi (FEM 2D). Kondisi tanah didominasi oleh lempung dengan konsistensi yang bervariasi berdasarkan kedalaman uji SPT. Hasil simulasi menunjukkan bahwa tanpa perbaikan, penurunan 90% mencapai 1,34 m dengan waktu konsolidasi sekitar ±39 tahun dan lereng tidak stabil. Setelah perbaikan, penurunan utama sebesar 1,64 m terjadi dalam masa tunggu 420 hari.',
                        'Penurunan sisa selama periode operasional sebesar 27,84 cm masih di bawah batas desain 30 cm, dengan nilai FK meningkat menjadi 1,617 (FK > 1,3) pada periode konstruksi dan 1,617 (FK > 1,5) pada periode operasional. Kombinasi PVD dan preloading terbukti efektif mempercepat konsolidasi, mengendalikan penurunan, dan meningkatkan stabilitas tanah lunak pada proyek reklamasi terminal peti kemas.',
                    ],
                ],
                [
                    'article_id' => 'Vol. 21, No. 1, Hlm. 34',
                    'cover' => 'images/jurnal/omni_akuatika.jpg',
                    'cover_alt' => 'Cover Omni-Akuatika (Universitas Jenderal Soedirman)',
                    'cover_caption_title' => 'Omni-Akuatika',
                    'cover_caption_sub' => 'Universitas Jenderal Soedirman (SINTA · Diamond OA)',
                    'cover_caption_meta' => 'ISSN: 1858-3873 · 2476-9347 · Vol. 21, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Jurnal Nasional',
                    'title' => 'Exploring Coastal Green Infrastructure (CGI): A Promising Approach to Mitigating Climate Change-Related Disasters in West Java\'s Southern Coast, Indonesia',
                    'authors' => 'Muhammad Raka El Ghifari, Andhy Romdani, Fahmi Rahmat Amanulloh, Empung, Tryantini Sundi Putri, Mudatsir',
                    'journal' => 'Omni-Akuatika (Universitas Jenderal Soedirman)',
                    'volume' => 'Volume 21',
                    'issue' => 'Issue 1 (Hlm. 34), Januari 2026',
                    'index_type' => 'SINTA',
                    'index_detail' => 'SINTA · Diamond OA',
                    'doi_label' => '10.20884/1.oa.2025.21.1.1207',
                    'doi_url' => 'https://doi.org/10.20884/1.oa.2025.21.1.1207',
                    'paragraphs' => [
                        'Coastal Green Infrastructure (CGI) semakin diakui sebagai solusi berbasis alam untuk menghadapi tantangan iklim seperti kenaikan muka air laut, erosi pantai, dan banjir pesisir. Namun, masih terdapat keterbatasan metode yang terstandarisasi dan adaptif secara global untuk mengidentifikasi serta memilih lokasi implementasi CGI optimal, khususnya di kawasan pesisir tropis dengan karakteristik lingkungan yang beragam.',
                        'Studi ini mengembangkan pendekatan penilaian alternatif dengan membangun CGI Coastal Protection Index dan CGI Coastal Vulnerability Index yang disesuaikan khusus untuk pesisir tropis. Metode ini mengintegrasikan indikator ekologis dan fisik dari penginderaan jauh, analisis spasial, serta kerangka pengambilan keputusan, dan diterapkan pada kawasan pesisir selatan Jawa Barat, Indonesia.',
                        'Temuan menunjukkan bahwa wilayah pesisir selatan Jawa Barat sangat rentan terhadap bahaya pesisir akibat perubahan iklim, dengan perlindungan eksisting yang tidak memadai dan potensi implementasi CGI yang relatif rendah. Studi ini mengisi kesenjangan metodologis dalam riset CGI dan memberikan wawasan berharga bagi pengembangan strategi pengelolaan pesisir di lingkungan tropis.',
                    ],
                ],
            ];
            @endphp

            @foreach($risetList as $riset)
            <article class="max-w-5xl mx-auto bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 sm:p-8 lg:p-10 reveal">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                    {{-- Cover Resmi Jurnal (Panel Kiri) --}}
                    <div class="lg:col-span-4 flex justify-center">
                        <a href="{{ $riset['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="block rounded-2xl overflow-hidden shadow-sm border border-slate-200 bg-white w-full max-w-[260px] sm:max-w-[280px] hover:shadow-md transition-shadow group">
                            <div class="aspect-[3/4] overflow-hidden bg-slate-100">
                                <img src="{{ asset($riset['cover']) }}"
                                     alt="{{ $riset['cover_alt'] }}"
                                     class="w-full h-full object-cover object-center group-hover:scale-[1.03] transition-transform duration-500">
                            </div>
                            <div class="p-3.5 bg-[#0B2A4A] text-white text-center">
                                <h3 class="text-xs sm:text-sm font-bold text-white leading-tight">{{ $riset['cover_caption_title'] }}</h3>
                                <p class="text-[11px] text-amber-400 font-medium mt-0.5">{{ $riset['cover_caption_sub'] }}</p>
                                <p class="text-[10px] text-slate-300 mt-0.5">{{ $riset['cover_caption_meta'] }}</p>
                            </div>
                        </a>
                    </div>

                    {{-- Penjelasan & Metadata Riset (Panel Kanan) --}}
                    <div class="lg:col-span-8 flex flex-col justify-between space-y-5">
                        <div>
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                                <span class="text-[11px] font-semibold text-[#0070BA] uppercase tracking-wider">
                                    {{ $riset['eyebrow'] }}
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-bold border {{ $riset['index_type'] === 'SCOPUS' ? 'bg-cyan-50 text-cyan-800 border-cyan-200' : 'bg-emerald-50 text-emerald-800 border-emerald-200' }}">
                                    <i class="fa-solid fa-globe text-[10px]" aria-hidden="true"></i>
                                    {{ $riset['index_detail'] }}
                                </span>
                            </div>

                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading leading-snug mb-4">
                                {{ $riset['title'] }}
                            </h2>

                            {{-- Penjelasan Riset --}}
                            <div class="text-xs sm:text-[13px] text-slate-600 space-y-3 leading-relaxed text-justify">
                                @foreach($riset['paragraphs'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>

                            {{-- Rincian Bibliografis --}}
                            <dl class="mt-5 bg-slate-50 rounded-xl border border-slate-200/80 p-4 sm:p-5 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-3 text-xs">
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Halaman / ID Artikel</dt>
                                    <dd class="font-bold text-slate-900 mt-0.5">{{ $riset['article_id'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Indeksasi</dt>
                                    <dd class="font-bold text-cyan-800 mt-0.5">{{ $riset['index_detail'] }}</dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Judul Artikel</dt>
                                    <dd class="font-semibold text-slate-900 mt-0.5 leading-snug">{{ $riset['title'] }}</dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Penulis</dt>
                                    <dd class="text-slate-700 mt-0.5 leading-relaxed">{{ $riset['authors'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Nama Jurnal</dt>
                                    <dd class="font-semibold text-[#0B2A4A] mt-0.5">{{ $riset['journal'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Volume</dt>
                                    <dd class="text-slate-800 font-medium mt-0.5">{{ $riset['volume'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Terbitan</dt>
                                    <dd class="text-slate-800 mt-0.5">{{ $riset['issue'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">DOI</dt>
                                    <dd class="mt-0.5">
                                        <a href="{{ $riset['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center gap-1 font-semibold text-[#0070BA] hover:text-[#0B2A4A] hover:underline break-all focus:outline-none focus:ring-2 focus:ring-blue-400 rounded">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]" aria-hidden="true"></i>
                                            {{ $riset['doi_label'] }}
                                        </a>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div class="pt-3.5 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                            @if(!empty($riset['lecturer_route']) && Route::has($riset['lecturer_route']))
                            <a href="{{ route($riset['lecturer_route']) }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-600 hover:text-[#0B2A4A] transition">
                                <i class="fa-solid fa-id-badge text-[11px]" aria-hidden="true"></i>
                                <span>Lihat Profil Peneliti</span>
                            </a>
                            @endif

                            <a href="{{ $riset['doi_url'] }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline ml-auto">
                                <span>Buka Artikel via DOI</span>
                                <i class="fa-solid fa-arrow-right text-[10px]" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </article>
            @endforeach

        </div>
    </section>
@endsection
