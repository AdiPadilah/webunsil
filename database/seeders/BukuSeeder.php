<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['judul' => 'Konstruksi Struktur Jembatan', 'penulis' => 'Sri Wanto, S.T., M.T.', 'penulis_route' => 'dosen.sri-wanto', 'kategori' => 'non-fiksi', 'label' => 'Buku Referensi', 'tahun' => 2026, 'isbn' => '978-634-7526-24-3', 'cover' => 'images/buku/konstruksi-struktur-jembatan.jpg'],
            ['judul' => 'Inovasi Keinsinyuran untuk Reindustrialisasi: Mewujudkan Kemandirian Teknologi dan Ekonomi', 'penulis' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.', 'penulis_route' => 'dosen.ridha-al-mustafa', 'kategori' => 'non-fiksi', 'label' => 'Buku Referensi', 'tahun' => 2025, 'isbn' => null, 'cover' => null],
            ['judul' => 'MANAJEMEN KONSTRUKSI (GREEN KONSTRUKSI)', 'penulis' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.', 'penulis_route' => 'dosen.ridha-al-mustafa', 'kategori' => 'non-fiksi', 'label' => 'Buku Referensi', 'tahun' => 2025, 'isbn' => null, 'cover' => null],
            ['judul' => 'Konstruksi dan Pemeliharaan Jalan', 'penulis' => 'Muhamad Anugerah Ramadhan, S.T., M.T.', 'penulis_route' => 'dosen.muhamad-anugerah', 'kategori' => 'non-fiksi', 'label' => 'Buku Referensi', 'tahun' => 2026, 'isbn' => '978-634-7905-20-8', 'cover' => null],
            ['judul' => 'Konstruksi dan Pemeliharaan Jalan', 'penulis' => 'Kartika Seinari Manggala, S.T., M.T.', 'penulis_route' => 'dosen.kartika-seinari', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '9786347905208', 'cover' => null],
            ['judul' => 'Manajemen Konstruksi', 'penulis' => 'Kartika Seinari Manggala, S.T., M.T.', 'penulis_route' => 'dosen.kartika-seinari', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '9786347310439', 'cover' => null],
            ['judul' => 'Transportasi Perkerasan Jalan', 'penulis' => 'Shanti Astri Noviani, S.Pd., M.T.', 'penulis_route' => 'dosen.shanti-astri-noviani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => 2025, 'isbn' => null, 'cover' => null],
            ['judul' => 'Timbunan dan Konstruksi Penahan Tanah', 'penulis' => 'Shanti Astri Noviani, S.Pd., M.T.', 'penulis_route' => 'dosen.shanti-astri-noviani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => 2026, 'isbn' => null, 'cover' => null],
            ['judul' => 'Manajemen Konstruksi', 'penulis' => 'Shanti Astri Noviani, S.Pd., M.T.', 'penulis_route' => 'dosen.shanti-astri-noviani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => 2026, 'isbn' => null, 'cover' => null],
            ['judul' => 'Manajemen Sungai dan Banjir: Adaptasi terhadap Perubahan Iklim Global', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-8221-10-3', 'cover' => 'images/buku/manajemen-sungai-dan-banjir-adaptasi-terhadap-perubahan-iklim-global.png'],
            ['judul' => 'Hidrodinamika Pantai dan Proteksi Kawasan Pesisir', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-8267-23-4', 'cover' => 'images/buku/hidrodinamika-pantai-dan-proteksi-kawasan-pesisir.jpeg'],
            ['judul' => 'Mekanisme Pendangkalan di Alur Pelayaran Pelabuhan dan Solusi Komprehensifnya', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-8221-67-7', 'cover' => 'images/buku/mekanisme-pendangkalan-di-alur-pelayaran-pelabuhan-dan-solusi-komprehensifnya.png'],
            ['judul' => 'Teknik Irigasi dan Perencanaan Swasembada Pangan', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '973-623-8267-39-2', 'cover' => 'images/buku/teknik-irigasi-dan-perencanaan-swasembada-pangan.png'],
            ['judul' => 'Estuari: Konsep Dasar dan Pengembangan Potensi Muara Sungai', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-8313-56-1', 'cover' => 'images/buku/estuari-konsep-dasar-dan-usaha-pengembangan-potensi-muara-sungai.png'],
            ['judul' => 'Transpor Sedimen: Proses, Efek, dan Morfodinamika Pantai', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-8496-78-5', 'cover' => 'images/buku/transpor-sedimen-proses-efek-dan-morfodinamika-pantai-2.png'],
            ['judul' => 'Mekanika Fluida: Teori Fundamental dan Aplikasinya', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-508-029-1', 'cover' => 'images/buku/mekanika-fluida-teori-fundamental-dan-aplikasinya.jpg'],
            ['judul' => 'How to Write and Publish your First Research Paper (Cara Jitu Tembus Publikasi Artikel di Jurnal Internasional)', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-624-226-022-7', 'cover' => 'images/buku/how-to-write-and-publish-your-first-research-paper.jpg'],
            ['judul' => 'Soal dan Penyelesaian Mekanika Fluida Dasar', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-623-508-432-9', 'cover' => 'images/buku/soal-dan-penyelesaian-mekanika-fluida-dasar.jpg'],
            ['judul' => 'Hidrolika: Dasar-dasar, Aplikasi, dan Perencanaan Saluran Terbuka', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-624-226-427-0', 'cover' => 'images/buku/hidraulika-dasar-dasar-aplikasi-dan-perencanaan-saluran-terbuka.jpg'],
            ['judul' => 'Compound Flooding: Mekanisme, Risiko, dan Strategi Ketahanan terhadap Perubahan Iklim', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-624-226-450-8', 'cover' => 'images/buku/compound-flooding-di-pantai-dan-estuari.jpg'],
            ['judul' => 'Soal dan Solusi untuk Hidrolika', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi', 'tahun' => null, 'isbn' => '978-624-226-567-3', 'cover' => 'images/buku/soal-dan-solusi-untuk-hidraulika.jpg'],
            ['judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 1): Aksi Penyelamatan Kocak Dimulai', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'fiksi', 'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-623-508-060-4', 'cover' => 'images/buku/6-hero-dan-ancaman-bom-di-borobudur-seri-1.jpg'],
            ['judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 2): Pelumpuhan Profesor Gila Peramu Formula Penghancur', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'fiksi', 'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-623-508-074-1', 'cover' => 'images/buku/6-hero-dan-ancaman-bom-di-borobudur-seri-2.jpg'],
            ['judul' => 'Dua Burung Gereja di Kubah Emas Masjid', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'fiksi', 'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-623-508-037-6', 'cover' => 'images/buku/dua-burung-gereja-di-kubah-emas-masjid.jpg'],
            ['judul' => 'Adam dan Hawa: Ketika Mereka Bukan dari Surga', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_route' => 'dosen.andhy-romdani', 'kategori' => 'fiksi', 'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-624-226-110-1', 'cover' => 'images/buku/adam-dan-hawa-ketika-mereka-bukan-dari-surga.jpg'],
        ];

        foreach (array_reverse($books) as $row) {
            if (! empty($row['cover'])) {
                $source = public_path($row['cover']);
                $target = 'buku-covers/' . basename($row['cover']);

                if (is_file($source)) {
                    if (! Storage::disk('public')->exists($target)) {
                        Storage::disk('public')->put($target, file_get_contents($source));
                    }

                    $row['cover'] = $target;
                }
            }

            $lookup = ! empty($row['isbn'])
                ? ['isbn' => $row['isbn'], 'penulis_route' => $row['penulis_route']]
                : ['judul' => $row['judul'], 'penulis' => $row['penulis']];

            Buku::updateOrCreate(
                $lookup,
                array_merge($row, ['is_published' => true])
            );
        }
    }
}
