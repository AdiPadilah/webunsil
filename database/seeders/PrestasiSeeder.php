<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'judul' => 'Babak Final National Bridge Design Competition di SCIENCE 2026',
                'mahasiswa' => 'Himpunan Mahasiswa Sipil (HMS) FT UNSIL',
                'kategori' => 'jembatan',
                'label_meta' => 'Kompetisi Jembatan • 20 Oktober 2026',
                'tingkat' => 'Nasional',
                'tahun' => 2026,
                'penyelenggara' => 'Kampus Mugarsari, Universitas Siliwangi',
                'deskripsi' => 'Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi menyelenggarakan babak final kompetisi perancangan jembatan berskala nasional di Kampus Mugarsari. Delegasi finalis dari berbagai perguruan tinggi nasional bersaing menguji ketahanan beban, efisiensi bahan, serta inovasi desain rancang bangun jembatan masa depan.',
                'foto' => 'images/unsil-final-bridge-competition.jpeg',
                'link_url' => '/berita/kompetisi-jembatan-nasional-science-2026',
            ],
            [
                'judul' => 'Seminar Pembangunan Jalan Tol Berkelanjutan dalam Rangkaian SCIENCE 2026',
                'mahasiswa' => 'Himpunan Mahasiswa Sipil (HMS) FT UNSIL',
                'kategori' => 'lomba',
                'label_meta' => 'Seminar Nasional • 22 Oktober 2026',
                'tingkat' => 'Nasional',
                'tahun' => 2026,
                'penyelenggara' => 'Fakultas Teknik Universitas Siliwangi',
                'deskripsi' => 'Menghadirkan praktisi Kementerian PUPR dan pakar transportasi nasional di Fakultas Teknik UNSIL, seminar ini membekali mahasiswa dengan keilmuan mutakhir seputar perkerasan jalan, stabilitas geoteknik tanah lunak, dan keselamatan konstruksi jalan tol berstandar ramah lingkungan.',
                'foto' => 'images/unsil-seminar-jalan-tol.jpeg',
                'link_url' => '/berita/seminar-nasional-science-2026-jalan-tol-berkelanjutan',
            ],
            [
                'judul' => 'Fahmi Rahmat Amanulloh Publikasikan 5 Karya Ilmiah Scopus & Sinta Sebelum Lulus',
                'mahasiswa' => 'Fahmi Rahmat Amanulloh (Pembimbing: Andhy Romdani, Ph.D.)',
                'kategori' => 'publikasi',
                'label_meta' => 'Publikasi Scopus • Agustus 2025',
                'tingkat' => 'Scopus Q1 & Q2 + Sinta',
                'tahun' => 2025,
                'penyelenggara' => 'Program Studi S-1 Teknik Sipil UNSIL',
                'deskripsi' => 'Fahmi Rahmat Amanulloh, mahasiswa semester 7 Teknik Sipil UNSIL bersama dosen pembimbing Andhy Romdani, Ph.D. menorehkan capaian riset internasional membanggakan dengan mempublikasikan lima karya ilmiah sekaligus sebelum menyelesaikan studi sarjana. Publikasinya menembus jurnal internasional bereputasi terindeks Scopus Q1 (Journal of Natural Hazards Research) dan Scopus Q2 (Water and Climate Change), serta dua jurnal nasional terakreditasi Sinta.',
                'foto' => 'images/unsil-fahmi-rahmat.jpeg',
                'link_url' => '/berita/fahmi-rahmat-el-ghifari-teknik-sipil-scopus',
            ],
            [
                'judul' => 'Muhammad Raka El Ghifari Tembus Dua Jurnal Scopus Q2 Sebelum Wisuda',
                'mahasiswa' => 'Muhammad Raka El Ghifari (Angkatan 2021)',
                'kategori' => 'publikasi',
                'label_meta' => 'Publikasi Scopus • 21 Agustus 2025',
                'tingkat' => '2 Artikel Scopus Q2 + Sinta',
                'tahun' => 2025,
                'penyelenggara' => 'Program Studi S-1 Teknik Sipil UNSIL',
                'deskripsi' => 'Muhammad Raka El Ghifari, lulusan sarjana Teknik Sipil Universitas Siliwangi angkatan 2021, membuktikan keunggulan riset mahasiswa dengan mempublikasikan dua artikel ilmiah di jurnal internasional bereputasi global terindeks Scopus Q2 pada bidang pengelolaan sumber daya air terapan serta satu artikel Sinta menjelang hari wisudanya.',
                'foto' => 'images/unsil-muhammad-raka.jpeg',
                'link_url' => '/berita/muhammad-raka-el-ghifari-lulusan-scopus-teknik-sipil-unsil',
            ],
            [
                'judul' => 'Kolaborasi Riset Teknik Sipil UNSIL dalam Penanganan Sedimentasi Segara Anakan',
                'mahasiswa' => 'Dosen & Mahasiswa Keairan Teknik Sipil FT UNSIL',
                'kategori' => 'publikasi',
                'label_meta' => 'Riset Kolaboratif • September 2024',
                'tingkat' => 'Kolaborasi Nasional',
                'tahun' => 2024,
                'penyelenggara' => 'BBWS Citanduy & HATHI',
                'deskripsi' => 'Sivitas akademika dosen dan mahasiswa bidang keairan Teknik Sipil FT UNSIL bersama BBWS Citanduy dan HATHI terlibat langsung dalam perumusan solusi teknis sedimentasi laguna Segara Anakan melalui pemodelan hidraulik dan penanganan erosi hulu daerah aliran sungai secara berkelanjutan.',
                'foto' => 'images/unsil-hathi-segara-anakan.png',
                'link_url' => '/berita/hathi-fgd-sedimentasi-segara-anakan-teknik-sipil-unsil-2024',
            ],
            [
                'judul' => 'Tim “Tirta Adhipermana” Juara 1 National Paper Competition 2023',
                'mahasiswa' => 'Ria (Ketua), Farhan, Alfarozi (Pembimbing: Andhy Romdani, Ph.D.)',
                'kategori' => 'lomba',
                'label_meta' => 'Kompetisi Nasional • 26 Oktober 2023',
                'tingkat' => 'Juara 1 Nasional',
                'tahun' => 2023,
                'penyelenggara' => 'The 4th AISCE - Universitas Syiah Kuala Banda Aceh',
                'deskripsi' => 'Tim delegasi mahasiswa Jurusan Teknik Sipil Universitas Siliwangi yang beranggotakan Ria (Ketua), Farhan, dan Alfarozi di bawah bimbingan Andhy Romdani, Ph.D. sukses meraih Juara 1 pada ajang The 4th Aceh International Symposium on Civil Engineering (AISCE 2023) di Universitas Syiah Kuala Banda Aceh. Karya inovatif aplikasi sumur artesis untuk penanganan krisis air pasca-bencana gempa berhasil menyisihkan 81 tim dari berbagai perguruan tinggi terkemuka se-Indonesia.',
                'foto' => 'images/unsil-tirta-adhipermana-npc.jpeg',
                'link_url' => '/berita/tim-tirta-adhipermana-juara-1-national-paper-competition-2023',
            ],
        ];

        foreach (array_reverse($items) as $row) {
            if (! empty($row['foto'])) {
                $source = public_path($row['foto']);
                $target = 'prestasi/' . basename($row['foto']);

                if (is_file($source)) {
                    if (! Storage::disk('public')->exists($target)) {
                        Storage::disk('public')->put($target, file_get_contents($source));
                    }

                    $row['foto'] = $target;
                }
            }

            Prestasi::updateOrCreate(
                ['judul' => $row['judul']],
                array_merge($row, ['is_published' => true])
            );
        }
    }
}
