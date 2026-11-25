<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE)',
                'slug' => 'workshop-penguatan-kurikulum-obe-2026',
                'category' => 'Agenda',
                'thumbnail' => 'images/workshop-obe.jpg',
                'excerpt' => 'Menghadirkan Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU. (UNS) membahas penyelarasan kurikulum OBE, CPL, dan akreditasi internasional IABEE di Kampus 2 UNSIL.',
                'content' => '<p>Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi menyelenggarakan Workshop Penguatan Kurikulum Berbasis Outcome-Based Education (OBE) guna meningkatkan kualitas pembelajaran serta menyelaraskan Capaian Pembelajaran Lulusan (CPL) dengan standar akreditasi internasional IABEE.</p>',
                'published_at' => Carbon::parse('2026-11-27 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Seminar Nasional SCIENCE 2026 Himpunan Mahasiswa Sipil UNSIL Angkat Strategi Pembangunan Jalan Tol Berkelanjutan',
                'slug' => 'seminar-nasional-science-2026-jalan-tol-berkelanjutan',
                'category' => 'Berita',
                'thumbnail' => 'images/unsil-seminar-jalan-tol.jpeg',
                'excerpt' => 'Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi menggelar Seminar Nasional bertajuk “Managing the Future for a Greater Indonesia” dengan menghadirkan praktisi BUMN PT Adhi Karya.',
                'content' => '<p>Himpunan Mahasiswa Sipil Fakultas Teknik Universitas Siliwangi sukses menyelenggarakan Seminar Nasional SCIENCE 2026 dengan tema Managing the Future for a Greater Indonesia yang fokus pada pembangunan infrastruktur jalan tol berkelanjutan.</p>',
                'published_at' => Carbon::parse('2026-10-20 08:30:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Kunjungan Ilmiah Mahasiswa Sipil ke Bendungan Leuwikeris Tasikmalaya-Ciamis',
                'slug' => 'kunjungan-ilmiah-bendungan-leuwikeris',
                'category' => 'Berita',
                'thumbnail' => 'images/unsil-kunjungan-leuwikeris.jpeg',
                'excerpt' => 'Studi lapangan mahasiswa Teknik Sipil mempelajari struktur bendungan, instrumentasi geoteknik, dan sistem hidrologi proyek strategis nasional Leuwikeris.',
                'content' => '<p>Ratusan mahasiswa Teknik Sipil UNSIL melaksanakan kuliah lapangan ke Bendungan Leuwikeris untuk mempelajari secara langsung sistem bendungan urugan batu, terowongan pengelak, dan pelimpah beton bertulang.</p>',
                'published_at' => Carbon::parse('2026-10-23 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Tim Tirta Adhipermana Mahasiswa Sipil UNSIL Raih Juara 1 National Paper Competition',
                'slug' => 'tim-tirta-adhipermana-juara-1-national-paper-competition-2023',
                'category' => 'Prestasi',
                'thumbnail' => 'images/prestasi-juara-1-paper.jpg',
                'excerpt' => 'Mahasiswa Teknik Sipil UNSIL berhasil menjuarai kompetisi karya tulis ilmiah tingkat nasional dengan gagasan inovasi manajemen sumber daya air ramah lingkungan.',
                'content' => '<p>Prestasi membanggakan kembali diraih mahasiswa Teknik Sipil Universitas Siliwangi. Tim Tirta Adhipermana sukses menyabet Juara 1 dalam National Paper Competition melalui riset inovatif konservasi air.</p>',
                'published_at' => Carbon::parse('2026-09-15 10:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Kuliah Tamu Aplikasi Building Information Modelling (BIM) dalam Konstruksi Modern',
                'slug' => 'kuliah-tamu-bim-infrastruktur-modern',
                'category' => 'Agenda',
                'thumbnail' => 'images/kuliah-tamu-bim.jpg',
                'excerpt' => 'Mempersiapkan lulusan yang adaptif terhadap digitalisasi konstruksi, menghadirkan instruktur bersertifikasi Autodesk BIM Management.',
                'content' => '<p>Perkembangan industri konstruksi 4.0 menuntut penguasaan Building Information Modelling (BIM). Teknik Sipil UNSIL menyelenggarakan kuliah tamu intensif mengenai pemodelan 3D hingga 5D konstruksi.</p>',
                'published_at' => Carbon::parse('2026-08-10 13:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Seminar Internasional Kolaborasi Riset Rekayasa Sipil Indonesia - Taiwan 2026',
                'slug' => 'seminar-internasional-indonesia-taiwan-2026',
                'category' => 'Berita',
                'thumbnail' => 'images/seminar-taiwan.jpg',
                'excerpt' => 'Kerjasama riset dan pertukaran akademik antara FT Universitas Siliwangi dengan perguruan tinggi mitra terkemuka di Taiwan bidang mitigasi gempa.',
                'content' => '<p>Fakultas Teknik UNSIL memperluas jejaring global melalui International Joint Symposium bersama universitas mitra dari Taiwan dalam bidang ketahanan gempa dan material cerdas.</p>',
                'published_at' => Carbon::parse('2026-07-22 09:00:00'),
                'is_published' => true,
            ],
        ];

        foreach ($articles as $data) {
            Article::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
