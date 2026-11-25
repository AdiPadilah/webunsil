<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

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
                'excerpt' => 'Narasumber: Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU. (UNS) · Jumat, 27 Nov 2026, pukul 08.00 WIB · Kampus 2 Universitas Siliwangi.',
                'content' => '<p>Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi menyelenggarakan Workshop Penguatan Kurikulum Berbasis Outcome-Based Education (OBE) guna meningkatkan kualitas pembelajaran serta menyelaraskan Capaian Pembelajaran Lulusan (CPL) dengan standar akreditasi internasional IABEE.</p><p><strong>Narasumber:</strong> Dr. Eng. Ir. Halwan Alfisa Saifullah, ST., MT., IPU. (Universitas Sebelas Maret)<br><strong>Waktu:</strong> Jumat, 27 November 2026, pukul 08.00 WIB s.d. Selesai<br><strong>Lokasi:</strong> Kampus 2 Universitas Siliwangi Mugarsari</p>',
                'published_at' => Carbon::parse('2026-11-27 08:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Dosen Teknik Sipil UNSIL Diundang sebagai Penguji Eksternal Seminar Hasil Disertasi di Pascasarjana FT UNS',
                'slug' => 'dosen-penguji-eksternal-seminar-hasil-disertasi-uns-2026',
                'category' => 'Berita',
                'thumbnail' => 'images/seminar-hasil-uns/foto-2.jpg',
                'excerpt' => 'Pengakuan kompetensi keilmuan dosen UNSIL di tingkat nasional melalui peran sebagai penguji eksternal dalam sidang seminar hasil disertasi Program Doktor Teknik Sipil FT UNS, Surakarta.',
                'content' => '<p>Dosen Program Studi Teknik Sipil Fakultas Teknik Universitas Siliwangi mendapat kehormatan diundang sebagai penguji eksternal dalam sidang seminar hasil disertasi pada Program Studi Doktor Ilmu Teknik Sipil Fakultas Teknik Universitas Sebelas Maret (UNS), Surakarta.</p><p>Kehadiran ini mencerminkan kolaborasi akademik dan pengakuan rekognisi keilmuan sivitas akademika Teknik Sipil UNSIL di tingkat nasional.</p>',
                'published_at' => Carbon::parse('2026-10-29 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Himpunan Mahasiswa Sipil Universitas Siliwangi Perluas Wawasan Keteknikan melalui Kunjungan Ilmiah ke Bendungan Leuwikeris',
                'slug' => 'kunjungan-ilmiah-bendungan-leuwikeris',
                'category' => 'Berita',
                'thumbnail' => 'images/unsil-kunjungan-leuwikeris.jpeg',
                'excerpt' => 'Rombongan HMS dan dosen Teknik Sipil UNSIL meninjau langsung struktur bendungan, instrumen rembesan, dan sistem pemantauan di Bendungan Leuwikeris bersama tim UPB.',
                'content' => '<p>Ratusan mahasiswa Himpunan Mahasiswa Sipil (HMS) bersama dosen Teknik Sipil UNSIL melaksanakan kunjungan ilmiah ke Proyek Strategis Nasional Bendungan Leuwikeris, Tasikmalaya-Ciamis, untuk mempelajari struktur bendungan urugan batu, terowongan pengelak, dan pelimpah beton bertulang secara langsung di lapangan.</p>',
                'published_at' => Carbon::parse('2026-10-23 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Seminar Nasional SCIENCE 2026 Himpunan Mahasiswa Sipil UNSIL Angkat Strategi Pembangunan Jalan Tol Berkelanjutan',
                'slug' => 'seminar-nasional-science-2026-jalan-tol-berkelanjutan',
                'category' => 'Berita',
                'thumbnail' => 'images/unsil-seminar-jalan-tol.jpeg',
                'excerpt' => 'Himpunan Mahasiswa Sipil (HMS) FT UNSIL menggelar Seminar Nasional bertajuk Managing the Future for a Greater Indonesia bersama praktisi BUMN PT Adhi Karya (Persero) Tbk.',
                'content' => '<p>Himpunan Mahasiswa Sipil Fakultas Teknik Universitas Siliwangi sukses menyelenggarakan Seminar Nasional SCIENCE 2026 di Auditorium Rektorat UNSIL dengan tema Managing the Future for a Greater Indonesia yang berfokus pada konstruksi jalan tol berkelanjutan.</p>',
                'published_at' => Carbon::parse('2026-10-20 08:30:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Himpunan Mahasiswa Sipil FT-Unsil Selenggarakan Babak Final National Bridge Design Competition SCIENCE 2026',
                'slug' => 'kompetisi-jembatan-nasional-science-2026',
                'category' => 'Prestasi',
                'thumbnail' => 'images/unsil-final-bridge-competition.jpeg',
                'excerpt' => 'Kompetisi rancang jembatan nasional di Aula Gedung Teknik Sipil UNSIL mempertemukan tim perancang jembatan terbaik dari berbagai perguruan tinggi Indonesia.',
                'content' => '<p>Babak Final National Bridge Design Competition dalam rangkaian SCIENCE 2026 digelar di Fakultas Teknik Universitas Siliwangi dan diikuti tim finalis terbaik dari perguruan tinggi se-Indonesia untuk menguji ketahanan serta efisiensi desain jembatan.</p>',
                'published_at' => Carbon::parse('2026-10-20 08:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Seminar Internasional "Bridging Futures: Indonesia - Taiwan Academic Collaboration" di FT UNSIL',
                'slug' => 'seminar-internasional-indonesia-taiwan-2026',
                'category' => 'Agenda',
                'thumbnail' => 'images/seminar-taiwan-cover.jpg',
                'excerpt' => 'Narasumber Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) memaparkan peluang beasiswa S2/S3 dan riset gempa bagi lulusan Teknik Sipil FT UNSIL.',
                'content' => '<p>Fakultas Teknik Universitas Siliwangi menyelenggarakan Seminar Internasional bertajuk Bridging Futures bersama Yanuar Haryanto, Ph.D. dari National Cheng Kung University (NCKU) Taiwan mengenai kolaborasi riset mitigasi gempa dan peluang studi lanjut S2/S3 di Taiwan.</p>',
                'published_at' => Carbon::parse('2026-10-12 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Dosen Teknik Sipil UNSIL Terpilih Ikuti Workshop Penulisan Artikel Jurnal Internasional Q1 (PASTI-Q1) 2026 di Bogor',
                'slug' => 'workshop-penulisan-artikel-jurnal-internasional-q1-pasti-2026',
                'category' => 'Berita',
                'thumbnail' => 'images/workshop-jurnal-q1/foto-2.jpg',
                'excerpt' => 'Delegasi dosen Teknik Sipil UNSIL mengikuti pendampingan intensif penulisan naskah ilmiah bereputasi global pada program PASTI-Q1 Kemendiktisaintek.',
                'content' => '<p>Dosen Program Studi Teknik Sipil UNSIL terpilih menjadi peserta program percepatan publikasi ilmiah PASTI-Q1 di Bogor untuk penguatan naskah jurnal internasional terindeks Scopus Q1.</p>',
                'published_at' => Carbon::parse('2026-10-02 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Kuliah Tamu Building Information Modelling (BIM) untuk Infrastruktur Modern',
                'slug' => 'kuliah-tamu-bim-infrastruktur-modern',
                'category' => 'Agenda',
                'thumbnail' => 'images/lab-civil.jpg',
                'excerpt' => 'Pakar praktisi BUMN Konstruksi memberikan wawasan penerapan digital twin, 3D modelling, dan kolaborasi BIM 5D di konstruksi modern.',
                'content' => '<p>Program Studi Teknik Sipil UNSIL menyelenggarakan kuliah tamu intensif mengenai implementasi Building Information Modelling (BIM) dalam perencanaan dan pengendalian proyek infrastruktur modern.</p>',
                'published_at' => Carbon::parse('2026-01-08 13:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Pelepasan Calon Wisudawan Sarjana Teknik Sipil FT Universitas Siliwangi',
                'slug' => 'pelepasan-calon-wisudawan-teknik-sipil',
                'category' => 'Berita',
                'thumbnail' => 'images/wisuda-unsil.jpg',
                'excerpt' => 'Pelepasan lulusan Sarjana Teknik (S.T.) yang siap berkontribusi pada pembangunan infrastruktur berkelanjutan, industri BUMN, konsultan, dan wirausaha keteknikan.',
                'content' => '<p>Program Studi S-1 Teknik Sipil FT UNSIL melepas calon wisudawan Sarjana Teknik (S.T.) sebagai bagian dari komitmen mencetak insinyur sipil yang profesional dan berwawasan kebangsaan.</p>',
                'published_at' => Carbon::parse('2025-10-24 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => '"Mahasiswa Ajaib" dari UNSIL: Fahmi Rahmat Amanulloh Tembus 3 Jurnal Scopus & 2 Nasional di Semester 7',
                'slug' => 'fahmi-rahmat-el-ghifari-teknik-sipil-scopus',
                'category' => 'Prestasi',
                'thumbnail' => 'images/unsil-fahmi-rahmat.jpeg',
                'excerpt' => 'Mahasiswa semester 7 Teknik Sipil UNSIL ini mencetak rekor publikasi ilmiah bereputasi, termasuk jurnal Scopus Q1 Natural Hazards Research.',
                'content' => '<p>Fahmi Rahmat Amanulloh, mahasiswa Teknik Sipil UNSIL semester 7, berhasil mempublikasikan 3 artikel pada jurnal internasional bereputasi Scopus dan 2 jurnal nasional SINTA bersama dosen pembimbing.</p>',
                'published_at' => Carbon::parse('2025-10-23 10:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Lulusan Teknik Sipil UNSIL Taklukkan Dua Jurnal Internasional Bereputasi Scopus: Muhammad Raka El Ghifari',
                'slug' => 'muhammad-raka-el-ghifari-lulusan-scopus-teknik-sipil-unsil',
                'category' => 'Prestasi',
                'thumbnail' => 'images/unsil-muhammad-raka.jpeg',
                'excerpt' => 'Muhammad Raka El Ghifari membuktikan kualitas riset mahasiswa Teknik Sipil UNSIL melalui dua publikasi Scopus dan satu artikel SINTA sebelum wisuda.',
                'content' => '<p>Muhammad Raka El Ghifari, lulusan S-1 Teknik Sipil Universitas Siliwangi, berhasil menerbitkan dua artikel riset di jurnal internasional terindeks Scopus dan satu artikel SINTA sebelum kelulusannya.</p>',
                'published_at' => Carbon::parse('2025-08-22 10:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Seminar Nasional Perdana HATHI: Pemanfaatan Teknologi Modern untuk Pengelolaan Sumber Daya Air Berkelanjutan',
                'slug' => 'seminar-nasional-hathi-sumber-daya-air-berkelanjutan-2024',
                'category' => 'Berita',
                'thumbnail' => 'images/unsil-seminar-hathi-air.jpg',
                'excerpt' => 'HATHI Cabang Banjar bersama Teknik Sipil UNSIL menyelenggarakan seminar nasional yang mempertemukan pakar, akademisi, dan pemangku kebijakan sumber daya air.',
                'content' => '<p>Himpunan Ahli Teknik Hidraulika Indonesia (HATHI) Cabang Banjar bersama Jurusan Teknik Sipil UNSIL menggelar Seminar Nasional Sumber Daya Air Berkelanjutan untuk membahas inovasi pengelolaan air di Priangan Timur.</p>',
                'published_at' => Carbon::parse('2024-06-03 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Pelantikan HATHI Cabang Banjar & FGD Penanganan Sedimentasi Segara Anakan bersama Teknik Sipil UNSIL',
                'slug' => 'hathi-fgd-sedimentasi-segara-anakan-teknik-sipil-unsil-2024',
                'category' => 'Berita',
                'thumbnail' => 'images/unsil-hathi-segara-anakan.png',
                'excerpt' => 'BBWS Citanduy berkolaborasi dengan Jurusan Teknik Sipil UNSIL dalam FGD bertema Sedimentasi Laguna Segara Anakan memperingati Hari Air Dunia ke-32.',
                'content' => '<p>Dalam rangkaian Hari Air Dunia ke-32, BBWS Citanduy dan Jurusan Teknik Sipil Universitas Siliwangi melaksanakan Forum Group Discussion (FGD) strategis mengenai penanganan sedimentasi DAS Citanduy dan Laguna Segara Anakan.</p>',
                'published_at' => Carbon::parse('2024-03-22 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Tim Tirta Adhipermana Teknik Sipil UNSIL Menyabet Juara 1 National Paper Competition 2023 di Aceh',
                'slug' => 'tim-tirta-adhipermana-juara-1-national-paper-competition-2023',
                'category' => 'Prestasi',
                'thumbnail' => 'images/unsil-tirta-adhipermana-npc.jpeg',
                'excerpt' => 'Menyisihkan 81 peserta dari seluruh Indonesia dalam AISCE 2023 dengan inovasi sumur artesis sebagai solusi krisis air bersih pasca-gempa bumi.',
                'content' => '<p>Tim Tirta Adhipermana Teknik Sipil Universitas Siliwangi berhasil meraih Juara 1 dalam ajang National Paper Competition AISCE 2023 di Aceh dengan mengangkat inovasi sumur artesis untuk ketahanan air bersih pascabencana.</p>',
                'published_at' => Carbon::parse('2023-11-09 10:00:00'),
                'is_published' => true,
            ],
        ];

        foreach ($articles as $data) {
            $source = public_path($data['thumbnail']);
            $relative = str_starts_with($data['thumbnail'], 'images/')
                ? substr($data['thumbnail'], strlen('images/'))
                : basename($data['thumbnail']);
            $target = 'articles/' . str_replace(['/', '\\'], '-', $relative);

            if (is_file($source)) {
                if (! Storage::disk('public')->exists($target)) {
                    Storage::disk('public')->put($target, file_get_contents($source));
                }

                $data['thumbnail'] = $target;
            }

            Article::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
