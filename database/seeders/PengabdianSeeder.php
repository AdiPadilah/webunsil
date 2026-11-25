<?php

namespace Database\Seeders;

use App\Models\Pengabdian;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PengabdianSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Pendampingan UMKM Kerajinan Tangan Tasikmalaya dalam Kurasi Produk dan Persiapan Ekspansi Pasar Global Melalui Platform E-Commerce Internasional',
                'penulis' => 'Andina Eka Mandasari, Adhitya Rahmat Taufiq, Andhy Romdani, Muhammad Dzufri Hazazy',
                'nama_jurnal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                'volume' => 'Volume 4',
                'terbitan' => 'Issue 1 (Hlm. 156–174), Mei 2026',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal PkM UNSIL',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2026,
                'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/18612',
                'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/18612',
                'cover' => 'images/jurnal/dhigana_cover.jpg',
                'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                'article_id' => 'Hlm. 156–174',
            ],
            [
                'judul' => 'Optimizing Home Yards with Nutrition Gardens to Support Family Vegetable and Fruit Intake',
                'penulis' => 'Iseu Siti Aisyah, Neni, Yusrima Syamsina Wardani, Yuldan Faturahman, Andhy Romdani, Aulia Putri Wahyuningtyas',
                'nama_jurnal' => 'JAGRI: Jurnal Abmas Negeri (Sarana Ilmu Indonesia / Salnesia)',
                'volume' => 'Volume 6',
                'terbitan' => 'Issue 2 (Hlm. 250–258), Desember 2025',
                'index_type' => 'SINTA',
                'index_detail' => 'SINTA · Diamond OA',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2025,
                'doi_label' => '10.36590/jagri.v6i2.1771',
                'doi_url' => 'https://doi.org/10.36590/jagri.v6i2.1771',
                'cover' => 'images/jurnal/jagri_jurnal.png',
                'cover_alt' => 'Cover JAGRI Jurnal Abmas Negeri (Sarana Ilmu Indonesia / Salnesia)',
                'article_id' => 'Hlm. 250–258',
            ],
            [
                'judul' => 'Mass Circumcision for Unprosperous Children: A Community Service Model Based on Health and Social Values',
                'penulis' => 'Mudatsir, Andhy Romdani, Daniel Bara Padang Allo, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Aquinaldo Sistanto Putra, Revianti Coenraad, Muhammad Raka El Ghifari, Fahmi Rahmat Amanulloh',
                'nama_jurnal' => 'BALANGA: Jurnal Pendidikan Teknologi dan Kejuruan (Universitas Palangka Raya)',
                'volume' => 'Volume 13',
                'terbitan' => 'Issue 2 (Hlm. 162–168), Desember 2025',
                'index_type' => 'SINTA',
                'index_detail' => 'SINTA · Diamond OA',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2025,
                'doi_label' => '10.37304/balanga.v13i2.20016',
                'doi_url' => 'https://doi.org/10.37304/balanga.v13i2.20016',
                'cover' => 'images/jurnal/balanga_v13n2.jpg',
                'cover_alt' => 'Cover BALANGA Vol. 13 No. 2 (Universitas Palangka Raya)',
                'article_id' => 'Hlm. 162–168',
            ],
            [
                'judul' => 'Optimalisasi Budidaya Ikan Melalui Sistem Bioflok: Pengenalan Dan Pelatihan Bagi Muda-Mudi Ancol',
                'penulis' => 'Firmansyah Maulana Sugiartana Nursuwars, Asep Andang, Rahmi Nur Shofa, Muhammad Adi Khairul Anshary, Aripin, Andhy Romdani',
                'nama_jurnal' => 'Gotong Royong (CV. Akira Java Bulu)',
                'volume' => 'Volume 2',
                'terbitan' => 'Issue 2 (Hlm. 46–55), Mei 2025',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal PkM · Open Access',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2025,
                'doi_label' => '10.63935/gr.v2i2.116',
                'doi_url' => 'https://doi.org/10.63935/gr.v2i2.116',
                'cover' => 'images/jurnal/gotong_royong.jpg',
                'cover_alt' => 'Cover Jurnal Gotong Royong (CV. Akira Java Bulu)',
                'article_id' => 'Hlm. 46–55',
            ],
            [
                'judul' => 'Pengembangan Wisata Religi Ziarah Makam Syekh Muhammad Thohir yang Tersembunyi dan Kompleks Gua di Kecamatan Bantar Kalong, Kabupaten Tasikmalaya',
                'penulis' => 'Andhy Romdani, Fahmi Rahmat Amanulloh, Muhammad Raka El Ghifari, Mudatsir, Iseu Siti Aisyah, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Aquinaldo Sistanto Putra, Revianti Coenraad, Empung, Ilmiawan Surya Bayuaji',
                'nama_jurnal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                'volume' => 'Volume 3',
                'terbitan' => 'Issue 1 (Hlm. 1–9), Mei 2025',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal PkM UNSIL',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2025,
                'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/14396',
                'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/14396',
                'cover' => 'images/jurnal/dhigana_cover.jpg',
                'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                'article_id' => 'Hlm. 1–9',
            ],
            [
                'judul' => 'Pengadaan Fasilitas Sanitasi Berbasis Peran Serta Aktif Warga Kelurahan Cilamajang untuk Lingkungan Sehat Kota Tasikmalaya',
                'penulis' => 'Andhy Romdani, Empung, Iman Sandisi, Muhammad Raka El Ghifari, Fahmi Rahmat Amanulloh, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Mudatsir, Tryantini Sundi Putri',
                'nama_jurnal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                'volume' => 'Volume 2',
                'terbitan' => 'Issue 2 (Hlm. 126–132), November 2024',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal PkM UNSIL',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2024,
                'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/13075',
                'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/13075',
                'cover' => 'images/jurnal/dhigana_cover.jpg',
                'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                'article_id' => 'Hlm. 126–132',
            ],
            [
                'judul' => 'Edukasi Tata Kelola Sampah dan Pelatihan Pembuatan Pupuk Kompos dari Limbah Domestik di Kabupaten Ciamis',
                'penulis' => 'Mudatsir, Tryantini Sundi Putri, Andhy Romdani',
                'nama_jurnal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                'volume' => 'Volume 2',
                'terbitan' => 'Issue 1 (Hlm. 83–88), Juli 2024',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal PkM UNSIL',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2024,
                'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/11840',
                'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/11840',
                'cover' => 'images/jurnal/dhigana_cover.jpg',
                'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                'article_id' => 'Hlm. 83–88',
            ],
            [
                'judul' => 'The Next Green Wave: Pemuda Kabupaten Tasikmalaya sebagai Pembawa Perubahan bagi Kawasan Pesisir Pantai',
                'penulis' => 'Andhy Romdani, Andina Eka Mandasari, Adhitya Rahmat Taufiq, Mudatsir, Tryantini Sundi Putri',
                'nama_jurnal' => 'DHIGANA: Jurnal Pengabdian kepada Masyarakat (Universitas Siliwangi)',
                'volume' => 'Volume 2',
                'terbitan' => 'Issue 1 (Hlm. 76–82), Mei 2024',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal PkM UNSIL',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2024,
                'doi_label' => 'jurnal.unsil.ac.id/index.php/dhigana/article/view/10029',
                'doi_url' => 'https://jurnal.unsil.ac.id/index.php/dhigana/article/view/10029',
                'cover' => 'images/jurnal/dhigana_cover.jpg',
                'cover_alt' => 'Cover DHIGANA Jurnal Pengabdian kepada Masyarakat Universitas Siliwangi',
                'article_id' => 'Hlm. 76–82',
            ],
            [
                'judul' => 'Pemberdayaan Remaja Pengangguran Di Pesisir Pantai Karang Paranje Kabupaten Garut Lewat Produksi Lampu Tidur Artistik Dari Limbah Batok Kelapa Kering',
                'penulis' => 'Andhy Romdani, Adhitya Rahmat Taufiq, Andina Eka Mandasari',
                'nama_jurnal' => 'Studi Kasus Inovasi Ekonomi (Universitas Muhammadiyah Malang)',
                'volume' => 'Volume 5',
                'terbitan' => 'Issue 1, April 2021',
                'index_type' => 'PKM',
                'index_detail' => 'Jurnal Pengabdian Ekonomi',
                'eyebrow' => 'Publikasi Pengabdian Masyarakat',
                'tahun' => 2021,
                'doi_label' => 'ejournal.umm.ac.id/index.php/skie/article/view/15865',
                'doi_url' => 'https://ejournal.umm.ac.id/index.php/skie/article/view/15865',
                'cover' => 'images/jurnal/skie_umm.jpg',
                'cover_alt' => 'Cover Studi Kasus Inovasi Ekonomi Universitas Muhammadiyah Malang',
                'article_id' => 'Vol. 5, No. 1',
            ],
        ];

        foreach (array_reverse($data) as $row) {
            if (! empty($row['cover'])) {
                $source = public_path($row['cover']);
                $target = 'jurnal-covers/' . basename($row['cover']);

                if (is_file($source)) {
                    if (! Storage::disk('public')->exists($target)) {
                        Storage::disk('public')->put($target, file_get_contents($source));
                    }

                    $row['cover'] = $target;
                }
            }

            Pengabdian::updateOrCreate(
                ['doi_label' => $row['doi_label']],
                array_merge($row, ['is_published' => true])
            );
        }
    }
}
