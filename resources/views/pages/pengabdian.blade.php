@extends('layouts.app')

@section('title', 'Pengabdian Kepada Masyarakat (PkM) | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Program Pengabdian Kepada Masyarakat (PkM) dosen dan mahasiswa Program Studi S-1 Teknik Sipil FT Universitas Siliwangi untuk pemberdayaan masyarakat dan pembangunan desa.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]" aria-hidden="true"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset &amp; Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Pengabdian</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Hilirisasi Keilmuan &amp; Pemberdayaan Masyarakat
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Pengabdian Kepada Masyarakat (PkM)
            </h1>
        </div>
    </section>

    {{-- Panel Pengabdian Masyarakat --}}
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            @php
            $abmasList = [
                [
                    'article_id' => 'Hlm. 156–174',
                    'cover' => 'images/jurnal/dhigana_cover.jpg',
                    'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                    'cover_caption_title' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat',
                    'cover_caption_sub' => 'Universitas Siliwangi',
                    'cover_caption_meta' => 'e-ISSN: 2685-7723 · Vol. 4, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Pendampingan UMKM Kerajinan Tangan Tasikmalaya dalam Kurasi Produk dan Persiapan Ekspansi Pasar Global Melalui Platform E-Commerce Internasional',
                    'authors' => 'Andina Eka Mandasari, Adhitya Rahmat Taufiq, Andhy Romdani, Muhammad Dzufri Hazazy',
                    'journal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                    'volume' => 'Volume 4',
                    'issue' => 'Issue 1 (Hlm. 156–174), Mei 2026',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal PkM UNSIL',
                    'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/18612',
                    'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/18612',
                    'paragraphs' => [
                        'Kegiatan pengabdian kepada masyarakat ini memperkuat kesiapan UMKM kerajinan tangan di Kabupaten Tasikmalaya untuk melakukan ekspansi pasar melalui platform e-commerce internasional dengan membenahi kesiapan pra-digital seperti kurasi produk, dokumentasi visual, deskripsi produk, konsistensi kualitas, penataan ruang produksi, dan narasi merek.',
                        'Pendampingan dilakukan secara partisipatif melalui observasi lapangan, diskusi kelompok terpumpun (FGD), kurasi produk, telaah kondisi produksi, dokumentasi, dan refleksi bersama mitra guna menjembatani kesenjangan antara kekuatan keterampilan produksi lokal dan representasi digital.',
                        'Kegiatan ini merumuskan model pendampingan pra-onboarding marketplace yang menempatkan kurasi katalog, cerita keaslian produk, dan bukti visual sebagai fondasi awal sebelum pelaku usaha membuka akun pada platform global.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 250–258',
                    'cover' => 'images/jurnal/jagri_jurnal.png',
                    'cover_alt' => 'Cover JAGRI Jurnal Abmas Negeri (Sarana Ilmu Indonesia / Salnesia)',
                    'cover_caption_title' => 'JAGRI: Jurnal Abmas Negeri',
                    'cover_caption_sub' => 'Sarana Ilmu Indonesia · Salnesia (SINTA · Diamond OA)',
                    'cover_caption_meta' => 'e-ISSN: 2746-802X · Vol. 6, No. 2',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Optimizing Home Yards with Nutrition Gardens to Support Family Vegetable and Fruit Intake',
                    'authors' => 'Iseu Siti Aisyah, Neni, Yusrima Syamsina Wardani, Yuldan Faturahman, Andhy Romdani, Aulia Putri Wahyuningtyas',
                    'journal' => 'JAGRI: Jurnal Abmas Negeri (Sarana Ilmu Indonesia / Salnesia)',
                    'volume' => 'Volume 6',
                    'issue' => 'Issue 2 (Hlm. 250–258), Desember 2025',
                    'index_type' => 'SINTA',
                    'index_detail' => 'SINTA · Diamond OA',
                    'doi_label' => '10.36590/jagri.v6i2.1771',
                    'doi_url' => 'https://doi.org/10.36590/jagri.v6i2.1771',
                    'paragraphs' => [
                        'Program pengabdian masyarakat ini bertujuan meningkatkan pengetahuan, keterampilan, dan kesadaran gizi dengan mengoptimalkan pekarangan rumah menjadi kebun gizi guna memperkuat ketahanan pangan keluarga. Kegiatan dilaksanakan pada 31 Juli 2025 di Kelurahan Sukahurip, Kecamatan Tamansari, Kota Tasikmalaya, melibatkan 35 peserta dari Kelompok Wanita Tani (KWT) dan kader Posyandu.',
                        'Pelaksanaan menggunakan pendekatan partisipatif melalui lima tahap: sosialisasi, pelatihan keterampilan berkebun dan edukasi gizi, penerapan teknologi kebun gizi, pendampingan, dan evaluasi.',
                        'Hasil menunjukkan peningkatan pemahaman peserta secara signifikan mengenai manfaat konsumsi sayur-buah dan pemanfaatan lahan terbatas, ditunjukkan oleh kenaikan skor rata-rata pengetahuan dari 6,65 (pre-test) menjadi 8,60 (post-test) dengan nilai p = 0,001.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 162–168',
                    'cover' => 'images/jurnal/balanga_v13n2.jpg',
                    'cover_alt' => 'Cover BALANGA Vol. 13 No. 2 (Universitas Palangka Raya)',
                    'cover_caption_title' => 'BALANGA: Jurnal Pendidikan Teknologi dan Kejuruan',
                    'cover_caption_sub' => 'Universitas Palangka Raya (SINTA · Diamond OA)',
                    'cover_caption_meta' => 'ISSN: 2338-462X · 2723-1216 · Vol. 13, No. 2',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Mass Circumcision for Unprosperous Children: A Community Service Model Based on Health and Social Values',
                    'authors' => 'Mudatsir, Andhy Romdani, Daniel Bara Padang Allo, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Aquinaldo Sistanto Putra, Revianti Coenraad, Muhammad Raka El Ghifari, Fahmi Rahmat Amanulloh',
                    'journal' => 'BALANGA: Jurnal Pendidikan Teknologi dan Kejuruan (Universitas Palangka Raya)',
                    'volume' => 'Volume 13',
                    'issue' => 'Issue 2 (Hlm. 162–168), Desember 2025',
                    'index_type' => 'SINTA',
                    'index_detail' => 'SINTA · Diamond OA',
                    'doi_label' => '10.37304/balanga.v13i2.20016',
                    'doi_url' => 'https://doi.org/10.37304/balanga.v13i2.20016',
                    'paragraphs' => [
                        'Kegiatan pengabdian kepada masyarakat ini menjawab keterbatasan akses layanan khitan yang aman dan higienis bagi keluarga prasejahtera di kawasan perkotaan padat penduduk melalui program khitanan massal gratis pada 12 Juli 2025 di Bekasi yang diikuti 40 anak berusia 5–13 tahun.',
                        'Metode pelaksanaan mencakup identifikasi sasaran, penyuluhan kesehatan bagi anak dan orang tua, tindakan khitan dengan teknik dorsumsisi, serta pendampingan perawatan pasca-khitan.',
                        'Seluruh peserta menjalani prosedur dengan aman tanpa komplikasi berarti. Program ini mengintegrasikan intervensi kesehatan preventif dengan pemberdayaan sosial serta memperkuat kepercayaan diri anak dan ikatan sosial masyarakat.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 46–55',
                    'cover' => 'images/jurnal/gotong_royong.jpg',
                    'cover_alt' => 'Cover Jurnal Gotong Royong (CV. Akira Java Bulu)',
                    'cover_caption_title' => 'Gotong Royong: Jurnal Pengabdian Masyarakat',
                    'cover_caption_sub' => 'CV. Akira Java Bulu (Open Access)',
                    'cover_caption_meta' => 'e-ISSN: 3047-8189 · Vol. 2, No. 2',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Optimalisasi Budidaya Ikan Melalui Sistem Bioflok: Pengenalan Dan Pelatihan Bagi Muda-Mudi Ancol',
                    'authors' => 'Firmansyah Maulana Sugiartana Nursuwars, Asep Andang, Rahmi Nur Shofa, Muhammad Adi Khairul Anshary, Aripin, Andhy Romdani',
                    'journal' => 'Gotong Royong (CV. Akira Java Bulu)',
                    'volume' => 'Volume 2',
                    'issue' => 'Issue 2 (Hlm. 46–55), Mei 2025',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal PkM · Open Access',
                    'doi_label' => '10.63935/gr.v2i2.116',
                    'doi_url' => 'https://doi.org/10.63935/gr.v2i2.116',
                    'paragraphs' => [
                        'Pengabdian kepada masyarakat ini mengatasi keterbatasan budidaya ikan konvensional yang dihadapi komunitas Muda-Mudi Ancol di Dusun Ancol, Desa Sindangkasih, Kabupaten Ciamis, dengan memperkenalkan inovasi sistem cerdas bioflok.',
                        'Pendampingan berlangsung bertahap mulai pelatihan pemrograman Arduino pada 2023, pelatihan budidaya ikan bioflok pada 2024, hingga penerapan sistem cerdas bioflok berbasis Arduino pada 2025 melalui pelatihan, pendampingan teknis, serta uji coba lapangan.',
                        'Program menargetkan peningkatan efisiensi dan keberlanjutan budidaya perikanan lokal sekaligus menumbuhkan keterampilan teknologi generasi muda desa bersama tim dosen lintas keahlian Universitas Siliwangi.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 1–9',
                    'cover' => 'images/jurnal/dhigana_cover.jpg',
                    'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                    'cover_caption_title' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat',
                    'cover_caption_sub' => 'Universitas Siliwangi',
                    'cover_caption_meta' => 'e-ISSN: 2685-7723 · Vol. 3, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Pengembangan Wisata Religi Ziarah Makam Syekh Muhammad Thohir yang Tersembunyi dan Kompleks Gua di Kecamatan Bantar Kalong, Kabupaten Tasikmalaya',
                    'authors' => 'Andhy Romdani, Fahmi Rahmat Amanulloh, Muhammad Raka El Ghifari, Mudatsir, Iseu Siti Aisyah, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Aquinaldo Sistanto Putra, Revianti Coenraad, Empung, Ilmiawan Surya Bayuaji',
                    'journal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                    'volume' => 'Volume 3',
                    'issue' => 'Issue 1 (Hlm. 1–9), Mei 2025',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal PkM UNSIL',
                    'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/14396',
                    'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/14396',
                    'paragraphs' => [
                        'Kegiatan pengabdian kepada masyarakat Universitas Siliwangi ini berfokus mengangkat potensi wisata religi Makam Syekh Muhammad Thohir dan Kompleks Gua di Desa Wangunsari, Kecamatan Bantar Kalong, Kabupaten Tasikmalaya, yang sebelumnya belum tergarap optimal.',
                        'Tim melaksanakan sosialisasi dan pemetaan tantangan bersama warga serta perangkat setempat, menemukan masih rendahnya kesadaran potensi wisata lokal, keterbatasan literasi teknologi pemasaran digital, dan kolaborasi pengelolaan desa yang belum optimal.',
                        'Melalui pendampingan tersebut, kegiatan ini mendorong warga dan pemerintah desa untuk berkolaborasi mengembangkan tata kelola dan promosi kedua aset wisata unggulan Tasikmalaya selatan tersebut.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 126–132',
                    'cover' => 'images/jurnal/dhigana_cover.jpg',
                    'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                    'cover_caption_title' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat',
                    'cover_caption_sub' => 'Universitas Siliwangi',
                    'cover_caption_meta' => 'e-ISSN: 2685-7723 · Vol. 2, No. 2',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Pengadaan Fasilitas Sanitasi Berbasis Peran Serta Aktif Warga Kelurahan Cilamajang untuk Lingkungan Sehat Kota Tasikmalaya',
                    'authors' => 'Andhy Romdani, Empung, Iman Sandisi, Muhammad Raka El Ghifari, Fahmi Rahmat Amanulloh, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Mudatsir, Tryantini Sundi Putri',
                    'journal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                    'volume' => 'Volume 2',
                    'issue' => 'Issue 2 (Hlm. 126–132), November 2024',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal PkM UNSIL',
                    'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/13075',
                    'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/13075',
                    'paragraphs' => [
                        'Program pengabdian kepada masyarakat ini menjawab tantangan rendahnya tingkat bebas buang air besar sembarangan (ODF sebesar 17%) serta kepemilikan fasilitas sanitasi warga (56,25%) di Kota Tasikmalaya melalui pembangunan fasilitas sanitasi partisipatif di Kelurahan Cilamajang, Kecamatan Kawalu, pada Oktober hingga Desember 2024.',
                        'Kegiatan melibatkan masyarakat secara aktif sejak tahap persiapan (musyawarah warga, koordinasi pemerintah daerah, dan survei lokasi), pelaksanaan konstruksi fisik, hingga edukasi pasca-pembangunan.',
                        'Tim akademisi juga mendampingi warga dalam tata cara pembersihan, pengelolaan limbah yang benar, serta perawatan rutin agar fasilitas sanitasi tetap berfungsi baik dalam jangka panjang.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 83–88',
                    'cover' => 'images/jurnal/dhigana_cover.jpg',
                    'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                    'cover_caption_title' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat',
                    'cover_caption_sub' => 'Universitas Siliwangi',
                    'cover_caption_meta' => 'e-ISSN: 2685-7723 · Vol. 2, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Edukasi Tata Kelola Sampah dan Pelatihan Pembuatan Pupuk Kompos dari Limbah Domestik di Kabupaten Ciamis',
                    'authors' => 'Mudatsir, Tryantini Sundi Putri, Andhy Romdani',
                    'journal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                    'volume' => 'Volume 2',
                    'issue' => 'Issue 1 (Hlm. 83–88), Juli 2024',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal PkM UNSIL',
                    'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/11840',
                    'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/11840',
                    'paragraphs' => [
                        'Program pengabdian kepada masyarakat di Kelurahan Sindangrasa, Kecamatan Ciamis, Kabupaten Ciamis ini mengatasi kebiasaan pembakaran sampah dan belum terpilahnya limbah organik-anorganik rumah tangga melalui edukasi pengelolaan sampah berbasis keluarga.',
                        'Tim melaksanakan sosialisasi bersama warga dan pemangku kepentingan daerah, dilanjutkan pelatihan praktik pembuatan pupuk kompos memanfaatkan alat komposter serta praktik pemasaran produk lewat media sosial.',
                        'Dengan pendampingan berkelanjutan, masyarakat didorong mandiri melakukan pemilahan sampah domestik sekaligus memperoleh nilai tambah ekonomi dari penjualan pupuk kompos secara daring.',
                    ],
                ],
                [
                    'article_id' => 'Hlm. 76–82',
                    'cover' => 'images/jurnal/dhigana_cover.jpg',
                    'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                    'cover_caption_title' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat',
                    'cover_caption_sub' => 'Universitas Siliwangi',
                    'cover_caption_meta' => 'e-ISSN: 2685-7723 · Vol. 2, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'The Next Green Wave: Pemuda Kabupaten Tasikmalaya sebagai Pembawa Perubahan bagi Kawasan Pesisir Pantai',
                    'authors' => 'Andhy Romdani, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Mudatsir, Tryantini Sundi Putri',
                    'journal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                    'volume' => 'Volume 2',
                    'issue' => 'Issue 1 (Hlm. 76–82), Mei 2024',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal PkM UNSIL',
                    'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/10029',
                    'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/10029',
                    'paragraphs' => [
                        'Program pengabdian kepada masyarakat ini berfokus meningkatkan peran generasi muda berwawasan lingkungan (green youth generation) sebagai agen pengelolaan ekosistem pesisir dan wisata bahari berkelanjutan di Kabupaten Tasikmalaya.',
                        'Sebanyak 55 pemuda lintas latar belakang dari tiga desa pesisir mengikuti penyuluhan komprehensif melalui ceramah, diskusi interaktif, dan survei mengenai peluang pelestarian sekaligus pengembangan potensi pantai.',
                        'Antusiasme dan tanggapan kritis peserta menunjukkan keberhasilan sosialisasi dalam menumbuhkan kepedulian terhadap aset pesisir daerah serta perlunya kolaborasi lanjutan bersama pemerintah daerah, kampus, dan mitra komunitas.',
                    ],
                ],
                [
                    'article_id' => 'Vol. 5, No. 1',
                    'cover' => 'images/jurnal/skie_umm.jpg',
                    'cover_alt' => 'Cover Studi Kasus Inovasi Ekonomi Universitas Muhammadiyah Malang',
                    'cover_caption_title' => 'Studi Kasus Inovasi Ekonomi (SKIE)',
                    'cover_caption_sub' => 'Universitas Muhammadiyah Malang (Open Access)',
                    'cover_caption_meta' => 'ISSN: 2528-6269 · 2623-2103 · Vol. 5, No. 1',
                    'lecturer_route' => 'dosen.andhy-romdani',
                    'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                    'title' => 'Pemberdayaan Remaja Pengangguran Di Pesisir Pantai Karang Paranje Kabupaten Garut Lewat Produksi Lampu Tidur Artistik Dari Limbah Batok Kelapa Kering',
                    'authors' => 'Andhy Romdani, Adhitya Rahmat Taufiq, Andina Eka Mandasari',
                    'journal' => 'Studi Kasus Inovasi Ekonomi (Universitas Muhammadiyah Malang)',
                    'volume' => 'Volume 5',
                    'issue' => 'Issue 1, April 2021',
                    'index_type' => 'PKM',
                    'index_detail' => 'Jurnal Pengabdian Ekonomi',
                    'doi_label' => 'ejournal.umm.ac.id/index.php/skie/article/view/15865',
                    'doi_url' => 'https://ejournal.umm.ac.id/index.php/skie/article/view/15865',
                    'paragraphs' => [
                        'Program pemberdayaan masyarakat di kawasan pesisir Pantai Karang Paranje, Desa Karyasari, Kabupaten Garut Selatan ini melatih remaja pengangguran mengolah limbah melimpah berupa batok kelapa kering menjadi produk kerajinan lampu tidur bernilai seni dan ekonomi.',
                        'Selain pelatihan produksi kerajinan, tim memberikan pendampingan pemasaran berbasis teknologi digital agar peserta mampu mempromosikan karya secara mandiri.',
                        'Melalui kegiatan ini, pemuda dan warga Desa Karyasari memperoleh keterampilan mengolah limbah lokal menjadi produk siap jual sekaligus pemahaman pemasaran daring melalui media sosial untuk mendukung kemandirian wirausaha pesisir.',
                    ],
                ],
            ];
            @endphp

            @foreach($abmasList as $abmas)
                @include('pages._publikasi-panel', ['item' => $abmas])
            @endforeach

        </div>
    </section>
@endsection
