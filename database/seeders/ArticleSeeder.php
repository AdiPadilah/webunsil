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
                'content' => '<p>Ketua Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL), <strong>Andhy Romdani, S.T., M.Eng., Ph.D.</strong>, mendapat kepercayaan untuk tampil sebagai <strong>Penguji Eksternal</strong> dalam kegiatan <em>Seminar Hasil Disertasi</em> yang diselenggarakan oleh <strong>Program Studi Pascasarjana Teknik Sipil, Fakultas Teknik, Universitas Sebelas Maret (UNS), Surakarta</strong>, pada Rabu (29/10/2026).</p><p>Seminar Hasil merupakan tahapan krusial dalam proses penyelesaian Program Doktor (S-3), di mana kandidat doktor mempresentasikan hasil penelitian disertasinya di hadapan dewan penguji. Pada kesempatan istimewa ini, disertasi tersebut dipresentasikan oleh <strong>Sri Wanto, S.T., M.T.</strong>, yang juga merupakan dosen di Program Studi Teknik Sipil FT UNSIL yang tengah menempuh studi doktoral di UNS.</p><p>Disertasi yang diseminarkan berjudul <em>"Optimasi Kekuatan Mekanik dan Peningkatan Ketahanan Paparan Cuaca Sambungan Ethylene Propylene Diene Monomer (EPDM) untuk Peningkatan Performa Sambungan Ekspansi Jembatan Kareta"</em>. Penelitian ini berfokus pada inovasi material rekayasa jembatan dan optimasi performa sambungan ekspansi yang sangat aplikatif untuk menunjang keandalan infrastruktur jembatan nasional.</p><p>Keterlibatan pimpinan prodi dan dosen UNSIL dalam sidang doktoral di UNS mencerminkan pengakuan atas kompetensi keilmuan, kepakaran rekayasa, dan rekam jejak riset sivitas akademika Program Studi Teknik Sipil FT UNSIL di tingkat nasional. Hal ini sekaligus mempererat jalinan kolaborasi riset dan akademik antara FT UNSIL dan FT UNS.</p><p>Kegiatan seminar berlangsung secara khidmat di ruang sidang Program Studi Pascasarjana Teknik Sipil FT UNS dan berjalan dengan sukses. Seluruh tim penguji memberikan masukan konstruktif guna penyempurnaan naskah disertasi sebelum melangkah ke tahapan ujian terbuka/promosi doktor.</p><div class="mt-10 pt-8 border-t border-slate-200"><div class="mb-5"><h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading flex items-center gap-2"><i class="fa-solid fa-images text-blue-600"></i> Dokumentasi Kegiatan</h3><p class="text-xs text-slate-500 mt-1">Rangkaian dokumentasi foto Seminar Hasil Disertasi di FT UNS, 29 Oktober 2026:</p></div><div class="grid grid-cols-1 sm:grid-cols-2 gap-4"><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-hasil-uns/foto-1.jpg" alt="Dosen UNSIL bersama kandidat doktor usai seminar hasil" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Dosen Teknik Sipil UNSIL selaku Penguji Eksternal bersama kandidat doktor usai sesi seminar hasil disertasi.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-hasil-uns/foto-2.jpg" alt="Foto bersama seluruh tim penguji dan kandidat doktor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Foto bersama seluruh tim penguji: promotor, ko-promotor, penguji internal, dan penguji eksternal dari UNSIL.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-hasil-uns/foto-3.jpg" alt="Penguji Eksternal UNSIL sedang meninjau naskah disertasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Penguji Eksternal dari UNSIL sedang menelaah naskah disertasi sebelum sesi pertanyaan dimulai.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-hasil-uns/foto-4.jpg" alt="Suasana presentasi seminar hasil disertasi di ruang sidang FT UNS" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Kandidat doktor memaparkan hasil disertasinya di hadapan tim penguji di ruang sidang Pascasarjana Teknik Sipil FT UNS.</div></div></div></div>',
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
                'content' => '<p>Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) menyelenggarakan seminar internasional bertajuk <strong>"Bridging Futures: Strengthening Indonesia-Taiwan Academic Collaboration"</strong> pada Senin (12/10/2026) di Auditorium Fakultas Teknik UNSIL.</p><p>Kegiatan akademik bertaraf internasional ini diikuti oleh ratusan mahasiswa dan dosen Teknik Sipil UNSIL. Seminar ini bertujuan memperluas wawasan akademik global, mengenalkan kultur penelitian mutakhir di bidang rekayasa infrastruktur, serta membuka jalur beasiswa studi lanjut jenjang Magister (S-2) dan Doktor (S-3) di perguruan tinggi terkemuka di Taiwan.</p><p>Pada seminar ini, hadir sebagai narasumber utama <strong>Yanuar Haryanto, Ph.D.</strong> (Associate Professor Teknik Sipil Universitas Jenderal Soedirman sekaligus <em>Research Affiliate</em> di National Cheng Kung University / NCKU Taiwan dan National Center for Research on Earthquake Engineering / NCREE Taiwan). Beliau membawakan materi bertajuk <em>"Discovering Taiwan: Opportunities, Challenges, and Lasting Memories"</em>.</p><p>Dalam pemaparannya, narasumber membagikan pengalaman nyata selama menjalani riset rekayasa kegempaan di Taiwan, memaparkan peluang beasiswa pemerintah maupun universitas di Taiwan, serta memberikan kiat praktis dalam mempersiapkan portofolio akademik bagi mahasiswa Teknik Sipil UNSIL yang berminat melanjutkan studi ke luar negeri.</p><p>Sesi dilanjutkan dengan diskusi interaktif dan tanya jawab yang disambut antusias oleh para mahasiswa, serta telekonferensi daring untuk memperluas jejaring komunikasi akademik antara sivitas akademika UNSIL dan mitra perguruan tinggi di Taiwan.</p><div class="mt-8 bg-gradient-to-br from-[#0B2A4A] to-[#1a4a7a] rounded-2xl p-6 text-white shadow-xl"><h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-4 flex items-center gap-2"><i class="fa-solid fa-chalkboard-user"></i> Profil Narasumber</h3><div class="flex items-start gap-4"><div class="w-14 h-14 rounded-full bg-amber-400/20 border-2 border-amber-400/40 flex items-center justify-center text-amber-400 text-2xl flex-shrink-0"><i class="fa-solid fa-user-tie"></i></div><div class="flex-1"><h4 class="text-lg font-black text-white">Yanuar Haryanto, Ph.D.</h4><p class="text-blue-200 text-xs mt-0.5">Associate Professor - Teknik Sipil, Universitas Jenderal Soedirman</p><div class="mt-3 space-y-1.5 text-xs text-slate-300"><p class="flex items-start gap-2"><i class="fa-solid fa-building-columns text-amber-400 mt-0.5 w-4 flex-shrink-0"></i><span>Research Affiliate &bull; <strong class="text-white">National Cheng Kung University (NCKU)</strong>, Taiwan</span></p><p class="flex items-start gap-2"><i class="fa-solid fa-flask text-amber-400 mt-0.5 w-4 flex-shrink-0"></i><span>Tainan Experimental Technology Division &bull; <strong class="text-white">National Center for Research on Earthquake Engineering (NCREE)</strong>, Taiwan</span></p><p class="flex items-start gap-2"><i class="fa-solid fa-book-open text-amber-400 mt-0.5 w-4 flex-shrink-0"></i><span>Lebih dari <strong class="text-white">30 publikasi ilmiah</strong> di jurnal internasional bereputasi</span></p></div></div></div></div><div class="mt-10 pt-8 border-t border-slate-200"><div class="mb-5"><h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading flex items-center gap-2"><i class="fa-solid fa-images text-blue-600"></i> Dokumentasi Kegiatan</h3><p class="text-xs text-slate-500 mt-1">Rangkaian dokumentasi foto pelaksanaan Seminar Internasional di Auditorium FT UNSIL:</p></div><div class="grid grid-cols-1 sm:grid-cols-2 gap-4"><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-taiwan/seminar-taiwan-auditorium.jpg" alt="Suasana Auditorium FT UNSIL Seminar Internasional" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Suasana auditorium dipadati mahasiswa Teknik Sipil UNSIL saat pembukaan seminar internasional.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-taiwan/seminar-taiwan-presentasi.jpg" alt="Pemaparan Materi Seminar Internasional oleh Narasumber" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Pemaparan materi <em>"Discovering Taiwan"</em> oleh Yanuar Haryanto, Ph.D. di panggung utama auditorium.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-taiwan/seminar-taiwan-tanya-jawab-1.jpg" alt="Sesi Tanya Jawab Mahasiswa Teknik Sipil UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Antusiasme mahasiswa Teknik Sipil UNSIL dalam sesi tanya jawab interaktif seputar peluang beasiswa.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/seminar-taiwan/seminar-taiwan-tanya-jawab-2.jpg" alt="Peserta Mahasiswa dalam Sesi Diskusi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Peserta seminar menyimak penjelasan mendalam mengenai tantangan riset dan kehidupan akademik di Taiwan.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition sm:col-span-2"><div class="aspect-[16/9] overflow-hidden bg-slate-100"><img src="/images/seminar-taiwan/seminar-taiwan-banner-layar.jpg" alt="Banner layar Seminar Internasional Bridging Futures UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Layar backdrop Seminar Internasional "Bridging Futures" di Auditorium Fakultas Teknik UNSIL, 12 Oktober 2026.</div></div></div></div>',
                'published_at' => Carbon::parse('2026-10-12 09:00:00'),
                'is_published' => true,
            ],
            [
                'title' => 'Dosen Teknik Sipil UNSIL Terpilih Ikuti Workshop Penulisan Artikel Jurnal Internasional Q1 (PASTI-Q1) 2026 di Bogor',
                'slug' => 'workshop-penulisan-artikel-jurnal-internasional-q1-pasti-2026',
                'category' => 'Berita',
                'thumbnail' => 'images/workshop-jurnal-q1/foto-2.jpg',
                'excerpt' => 'Delegasi dosen Teknik Sipil UNSIL mengikuti pendampingan intensif penulisan naskah ilmiah bereputasi global pada program PASTI-Q1 Kemendiktisaintek.',
                'content' => '<p>Dosen sekaligus Ketua Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL), <strong>Andhy Romdani, S.T., M.Eng., Ph.D.</strong>, berhasil lolos seleksi nasional dan terpilih sebagai peserta dalam kegiatan bergengsi <strong>Workshop Penulisan Artikel Submit to Journal International Q1 (PASTI-Q1) Tahun 2026</strong> yang diselenggarakan di Bogor pada 29 September hingga 2 Oktober 2026.</p><p>Kegiatan ini diinisiasi secara resmi oleh <strong>Direktorat Bina Talenta Penelitian dan Pengembangan, Direktorat Jenderal Riset dan Pengembangan, Kementerian Pendidikan Tinggi, Sains, dan Teknologi (Kemendiktisaintek)</strong> yang bekerja sama dengan <strong>Universitas Pakuan</strong> sebagai mitra pelaksana.</p><p>Program PASTI-Q1 merupakan program akselerasi nasional yang dirancang khusus untuk membina dan mendampingi para akademisi terpilih dari berbagai perguruan tinggi di Indonesia agar mampu menembus publikasi naskah ilmiah pada jurnal internasional bereputasi kuartil tertinggi (Scopus Q1).</p><p>Selama empat hari pelaksanaan intensif, para peserta mendapatkan pendampingan tatap muka (mentoring) langsung dari para editor jurnal internasional ternama dan pakar publikasi global. Materi yang diberikan mencakup teknik penyusunan manuskrip berstandar tinggi, penguatan state-of-the-art dan novelty riset, strategi visualisasi data keteknikan, hingga kiat merespons telaah reviewer (peer review response) secara tepat.</p><p>Keikutsertaan perwakilan dosen Program Studi Teknik Sipil UNSIL dalam forum ini diharapkan dapat memacu peningkatan iklim publikasi ilmiah internasional bereputasi tinggi di lingkungan Fakultas Teknik UNSIL, serta menjadi motivasi bagi dosen muda dan mahasiswa untuk terus berkontribusi dalam riset rekayasa sipil berdaya saing global.</p><div class="mt-10 pt-8 border-t border-slate-200"><div class="mb-5"><h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading flex items-center gap-2"><i class="fa-solid fa-images text-blue-600"></i> Dokumentasi Kegiatan</h3><p class="text-xs text-slate-500 mt-1">Dokumentasi kegiatan Workshop PASTI-Q1 Tahun 2026 di Bogor:</p></div><div class="grid grid-cols-1 sm:grid-cols-2 gap-4"><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/workshop-jurnal-q1/foto-1.jpg" alt="Andhy Romdani di depan banner Workshop PASTI-Q1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Andhy Romdani, S.T., M.Eng., Ph.D. (Dosen &amp; Ketua Prodi Teknik Sipil FT UNSIL) saat registrasi peserta Workshop PASTI-Q1 di Bogor.</div></div><div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition"><div class="aspect-[4/3] overflow-hidden bg-slate-100"><img src="/images/workshop-jurnal-q1/foto-2.jpg" alt="Foto bersama peserta Workshop PASTI-Q1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"></div><div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">Sesi foto bersama seluruh peneliti dan dosen peserta pendampingan artikel jurnal internasional kuartil Q1 di panggung ballroom acara.</div></div></div></div>',
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
                'content' => '<p class="text-base font-medium text-slate-900 leading-relaxed"><strong>Humas UNSIL</strong> &mdash; Di usia akademiknya yang masih muda, Fahmi Rahmat Amanulloh, mahasiswa semester 7 pada Program Studi Teknik Sipil Universitas Siliwangi, menorehkan sejarah luar biasa. Julukan <strong>"Mahasiswa Ajaib Unsil"</strong> kini melekat padanya setelah berhasil mempublikasikan lima karya ilmiah sekaligus sebelum lulus &mdash; tiga di jurnal internasional bereputasi Scopus dan dua di jurnal nasional. Prestasi ini menempatkannya sebagai salah satu mahasiswa paling produktif dalam bidang penelitian di tingkat universitas.</p><h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Daftar Publikasi Jurnal Internasional Scopus:</h3><ul class="list-disc pl-5 space-y-2 text-sm text-slate-700"><li><strong>Journal of Natural Hazards Research (Scopus Q1, Elsevier - 21 Oktober 2025):</strong><br><em>"Does ENSO-driven Climate Variability Increase Coastal Flooding? Insights from the Brebes Coastal Area, Indonesia"</em></li><li><strong>Journal of Water and Climate Change (Scopus Q2, IWA Publishing, United Kingdom - Juli 2024):</strong><br><em>"Morpho-hydrodynamic Processes Impacted by the 2022-extreme La Niña Event and High River Discharge Conditions in the Southern Coastal Area of West Java, Indonesia"</em></li><li><strong>Journal of the Civil Engineering Forum (Scopus Q4, Universitas Gadjah Mada - Mei 2025):</strong><br><em>"The Effectiveness of Groin Modifications to Reduce the Impacts of Indian Ocean Dipole (IOD)-induced Port Siltation in Adapting to Climate Change"</em></li></ul><h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Publikasi Nasional Terindeks SINTA:</h3><ul class="list-disc pl-5 space-y-2 text-sm text-slate-700"><li><strong>Journal of Medica Hospitalia (Sinta 3, Kemenkes RS. Kariadi Semarang - Juli 2025):</strong><br><em>"Spatial and Temporal Analysis of Gallbladder Stone Cases at dr. Soekardjo Hospital, West Java"</em></li><li><strong>Journal of Omni-Akuatika (Sinta 2, Universitas Jenderal Soedirman - November 2025):</strong><br><em>"Exploring Coastal Green Infrastructure (CGI) to Mitigate Climate Change-Related Disasters in West Java\'s Southern Coast, Indonesia"</em></li></ul><div class="p-5 bg-emerald-50 border-l-4 border-emerald-600 rounded-r-xl my-6"><p class="text-sm font-semibold text-emerald-950 italic">"Prestasi Fahmi adalah bukti nyata bahwa mahasiswa Universitas Siliwangi mampu bersaing di kancah global. Ia menjadi teladan bagi mahasiswa lain tentang bagaimana penelitian yang dilakukan dengan kesungguhan dapat menghasilkan karya ilmiah yang berdampak luas."</p><span class="text-xs text-emerald-800 font-bold block mt-2">&mdash; Andhy Romdani, S.T., M.Eng., Ph.D. (Dosen Pembimbing &amp; Ketua Prodi Teknik Sipil FT UNSIL)</span></div><p>Dalam wawancara singkatnya, Fahmi menyampaikan bahwa keberhasilannya tidak lepas dari bimbingan intensif dan suportif. <em>"Saya berusaha konsisten dan fokus. Semua ini tidak lepas dari bimbingan pak Andhy yang memberi ruang besar untuk ide-ide saya. Beliau dengan sabar membimbing saya dan membuka wawasan kepada saya jika riset itu menyenangkan,"</em> tuturnya dengan rendah hati.</p><p>Kini, nama Fahmi Rahmat Amanulloh menjadi bukti bahwa mahasiswa S-1 Teknik Sipil FT Universitas Siliwangi mampu mencetak bibit unggul kelas dunia yang diakui komunitas akademik internasional.</p>',
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
