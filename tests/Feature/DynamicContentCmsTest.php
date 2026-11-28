<?php

namespace Tests\Feature;

use App\Filament\Resources\Articles\ArticleResource;
use App\Filament\Resources\Articles\Pages\CreateArticle;
use App\Filament\Resources\Articles\Pages\EditArticle;
use App\Filament\Resources\Articles\Pages\ListArticles;
use App\Filament\Resources\Bukus\BukuResource;
use App\Filament\Resources\Bukus\Pages\CreateBuku;
use App\Filament\Resources\Bukus\Pages\EditBuku;
use App\Filament\Resources\Bukus\Pages\ListBukus;
use App\Filament\Resources\DefenseSchedules\DefenseScheduleResource;
use App\Filament\Resources\DefenseSchedules\Pages\CreateDefenseSchedule;
use App\Filament\Resources\DefenseSchedules\Pages\EditDefenseSchedule;
use App\Filament\Resources\DefenseSchedules\Pages\ListDefenseSchedules;
use App\Filament\Resources\Dosens\DosenResource;
use App\Filament\Resources\Dosens\Pages\CreateDosen;
use App\Filament\Resources\Dosens\Pages\EditDosen;
use App\Filament\Resources\Dosens\Pages\ListDosens;
use App\Filament\Resources\Dosens\Support\CvAutoFiller;
use App\Filament\Resources\Dosens\Support\PdfTextExtractor;
use App\Filament\Resources\Penelitians\Pages\CreatePenelitian;
use App\Filament\Resources\Penelitians\Pages\EditPenelitian;
use App\Filament\Resources\Penelitians\Pages\ListPenelitians;
use App\Filament\Resources\Penelitians\PenelitianResource;
use App\Filament\Resources\Pengabdians\Pages\CreatePengabdian;
use App\Filament\Resources\Pengabdians\Pages\EditPengabdian;
use App\Filament\Resources\Pengabdians\Pages\ListPengabdians;
use App\Filament\Resources\Pengabdians\PengabdianResource;
use App\Filament\Resources\Prestasis\Pages\CreatePrestasi;
use App\Filament\Resources\Prestasis\Pages\EditPrestasi;
use App\Filament\Resources\Prestasis\Pages\ListPrestasis;
use App\Filament\Resources\Prestasis\PrestasiResource;
use App\Filament\Resources\SiteSettings\Pages\CreateSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\EditSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\ListSiteSettings;
use App\Filament\Resources\SiteSettings\SiteSettingResource;
use App\Filament\Widgets\AnalitikKontenWidget;
use App\Filament\Widgets\PanduanCepatWidget;
use App\Filament\Widgets\ProdiStatsWidget;
use App\Models\Article;
use App\Models\Buku;
use App\Models\DefenseSchedule;
use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Prestasi;
use App\Models\SiteSetting;
use App\Models\User;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\BukuSeeder;
use Database\Seeders\DosenSeeder;
use Database\Seeders\PenelitianSeeder;
use Database\Seeders\PengabdianSeeder;
use Database\Seeders\PrestasiSeeder;
use Database\Seeders\SiteSettingSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class DynamicContentCmsTest extends TestCase
{
    use RefreshDatabase;

    public function test_seeders_populate_real_data_and_public_pages_render(): void
    {
        Storage::fake('public');

        $this->seed([
            SiteSettingSeeder::class,
            ArticleSeeder::class,
            PenelitianSeeder::class,
            PengabdianSeeder::class,
            BukuSeeder::class,
            PrestasiSeeder::class,
            DosenSeeder::class,
        ]);

        $this->assertSame(14, Article::count());
        $this->assertSame(1, SiteSetting::count());
        $this->assertSame(24, Penelitian::count());
        $this->assertSame(9, Pengabdian::count());
        $this->assertSame(26, Buku::count());
        $this->assertSame(6, Prestasi::count());
        $this->assertSame(24, Dosen::count());

        $this->get('/')
            ->assertOk()
            ->assertSee('Program Studi Teknik Sipil')
            ->assertSee('Workshop Penguatan Kurikulum')
            ->assertSee(route('kerja-praktik'), false)
            ->assertSee(route('ruang-komunal-mahasiswa'), false)
            ->assertSee('Ruang Komunal Mahasiswa')
            ->assertSeeInOrder([
                route('penelitian'),
                route('pengabdian'),
                route('kolaborasi'),
            ], false);

        $beritaPage1 = $this->get('/berita')->assertOk();
        $beritaPage1->assertDontSee('Berita Sebelumnya');
        $beritaPage1->assertSee('Workshop Penguatan Kurikulum Teknik Sipil Berbasis Outcome-Based Education (OBE)');
        $beritaPage1->assertDontSee('Tim Tirta Adhipermana Teknik Sipil UNSIL Menyabet Juara 1');
        $this->assertSame(8, substr_count($beritaPage1->getContent(), '<article class="bg-white rounded-xl'));

        $beritaPage2 = $this->get('/berita?page=2')->assertOk();
        $beritaPage2->assertSee('Tim Tirta Adhipermana Teknik Sipil UNSIL Menyabet Juara 1');
        $this->assertSame(6, substr_count($beritaPage2->getContent(), '<article class="bg-white rounded-xl'));
        $this->get('/publikasi')->assertOk();
        $this->get('/kerja-praktik')->assertOk()->assertSee('Kerja Praktik');
        $this->get('/alur-pengurusan-kerja-praktik')->assertOk();
        $this->get('/alur-pengurusan-skripsi')->assertOk()->assertSee('Alur Pengurusan Skripsi');
        $this->get('/fasilitas')
            ->assertOk()
            ->assertSee('images/kelas-1.jpg', false)
            ->assertSee('images/ruang-sidang-1.jpg', false)
            ->assertSee('images/ruang-komunal-1.jpg', false)
            ->assertSee('Ruang Komunal Mahasiswa');
        $this->get('/kelas')
            ->assertOk()
            ->assertSee('Galeri Ruang Kelas')
            ->assertSee('sm:col-span-2 sm:w-[calc(50%-0.75rem)] sm:mx-auto', false)
            ->assertSee('images/kelas-1.jpg', false)
            ->assertSee('images/kelas-2.jpg', false)
            ->assertSee('images/kelas-3.jpg', false);
        $this->get('/ruang-sidang')
            ->assertOk()
            ->assertSee('Galeri Ruang Sidang')
            ->assertSee('sm:col-span-2 sm:w-[calc(50%-0.75rem)] sm:mx-auto', false)
            ->assertDontSee('images/ruang-sidang-3.jpg', false)
            ->assertSeeInOrder([
                'images/ruang-sidang-1.jpg',
                'images/ruang-sidang-4.jpg',
                'images/ruang-sidang-2.jpg',
            ], false);
        $this->get('/ruang-konsentrasi-keahlian')
            ->assertOk()
            ->assertSee('Galeri Ruang KBK')
            ->assertSee('images/ruang-kbk-1.jpg', false)
            ->assertSee('images/ruang-kbk-2.jpg', false);
        $this->get('/ruang-komunal-mahasiswa')
            ->assertOk()
            ->assertSee('Galeri Ruang Komunal Mahasiswa')
            ->assertDontSee('images/ruang-komunal-3.jpg', false)
            ->assertSeeInOrder([
                'images/ruang-komunal-1.jpg',
                'images/ruang-komunal-2.jpg',
                'images/ruang-komunal-4.jpg',
                'images/ruang-komunal-5.jpg',
            ], false);
        $this->get('/seminar-proposal')->assertOk();
        $this->get('/seminar-hasil')->assertOk();
        $this->get('/sidang-akhir')->assertOk();

        $this->get('/penelitian')
            ->assertOk()
            ->assertSee('Natural Hazards Research')
            ->assertSee('Pemali River Basin')
            ->assertSee('grid-cols-1 gap-4', false)
            ->assertDontSee('md:grid-cols-2', false)
            ->assertSee('id="risetSearchInput"', false)
            ->assertDontSee('id="risetDosenFilter"', false)
            ->assertSee('id="risetPagination"', false)
            ->assertSee('const PER_PAGE = 5;', false)
            ->assertSee('SCOPUS (9)')
            ->assertSee('SINTA (13)')
            ->assertSee('Prosiding (2)');

        $this->get('/pengabdian')
            ->assertOk()
            ->assertSee('DHIGANA')
            ->assertSee('Optimizing Home Yards')
            ->assertSee('grid-cols-1 gap-4', false)
            ->assertDontSee('md:grid-cols-2', false)
            ->assertSee('id="abmasSearchInput"', false)
            ->assertSee('id="abmasPagination"', false)
            ->assertSee('Jurnal PkM (7)')
            ->assertSee('SINTA (2)');

        $this->get('/buku')
            ->assertOk()
            ->assertSee('Konstruksi Struktur Jembatan')
            ->assertSee('978-634-7526-24-3')
            ->assertSee('Manajemen Sungai dan Banjir')
            ->assertSee('978-623-8221-10-3');

        $this->get('/prestasi-mahasiswa')
            ->assertOk()
            ->assertSee('Tirta Adhipermana')
            ->assertSee('SCIENCE 2026');

        $this->get('/dosen')
            ->assertOk()
            ->assertSee('Andhy Romdani')
            ->assertSee('Rekayasa Sumber Daya Air (6)');

        $this->get('/dosen/andhy-romdani')
            ->assertOk()
            ->assertSee('Andhy Romdani, S.T., M.Eng., Ph.D.')
            ->assertSee('Manajemen Sungai dan Banjir')
            ->assertSee('6 Hero dan Ancaman Bom di Borobudur')
            ->assertSee('/storage/dosen/andhy-romdani.jpg', false);

        $this->get('/dosen/sri-wanto')
            ->assertOk()
            ->assertSee('Sri Wanto, S.T., M.T.')
            ->assertSee('Konstruksi Struktur Jembatan')
            ->assertSee('978-634-7526-24-3')
            ->assertSee('Research Roadmap')
            ->assertSee('Structural Retrofit')
            ->assertSee('Doctoral Dissertation')
            ->assertSee('Utilization of software and Artificial Intelligence for speed in analysis')
            ->assertSee('/storage/buku-covers/konstruksi-struktur-jembatan.jpg', false)
            ->assertSee('/storage/dosen/sri-wanto.jpg', false);

        $this->get('/dosen/kartika-seinari')
            ->assertOk()
            ->assertSee('Kartika Seinari Manggala, S.T., M.T.')
            ->assertSee('Institut Teknologi Bandung')
            ->assertSee('Konstruksi dan Pemeliharaan Jalan')
            ->assertSee('9786347905208')
            ->assertSee('/storage/dosen/kartika-seinari.jpg', false);

        $this->get('/dosen/shanti-astri-noviani')
            ->assertOk()
            ->assertSee('Shanti Astri Noviani, S.Pd., M.T.')
            ->assertSee('shantinoviani@unsil.ac.id')
            ->assertSee('Building Information Modeling (BIM)')
            ->assertSee('Transportasi Perkerasan Jalan')
            ->assertSee('Timbunan dan Konstruksi Penahan Tanah')
            ->assertSee('5D BIM Application Basic Level Cubicost TBQ')
            ->assertSee('/storage/dosen/shanti-astri-noviani.jpg', false)
            ->assertSeeInOrder([
                'Biografi &amp; Profil Akademik',
                'Pendidikan Formal',
                'Pelatihan &amp; Sertifikasi Perangkat Lunak',
                'Buku ajar dan referensi yang terhubung langsung',
                'Pengalaman Kerja',
                'Riwayat Pengajaran',
                'Pengabdian pada Masyarakat',
                'Daftar penelitian &amp; tersinkron dengan menu Penelitian Admin',
            ], false);

        $this->get('/dosen/muhamad-anugerah')
            ->assertOk()
            ->assertSee('Muhamad Anugerah Ramadhan, S.T., M.T.')
            ->assertSee('Konstruksi dan Pemeliharaan Jalan')
            ->assertSee('Universitas Islam Indonesia (UII)');

        $this->get('/dosen/ridha-al-mustafa')
            ->assertOk()
            ->assertSee('Ir. M. Ridha Al Mustafa, S.T., M.T.')
            ->assertSee('Institut Teknologi Sepuluh Nopember (ITS)')
            ->assertSee('MANAJEMEN KONSTRUKSI (GREEN KONSTRUKSI)');

        $this->get('/dosen/raden-roro-dita')
            ->assertOk()
            ->assertSee('Raden Roro Dita Arviananda, S.Pd., M.Eng.')
            ->assertSee('NUPTK: 4661773674230262')
            ->assertSee('arvianandadita@unsil.ac.id')
            ->assertSee('Kimia Lingkungan')
            ->assertSee('978-634-7526-21-2')
            ->assertSee('Gemini Certified Educator');
    }

    public function test_unpublished_records_stay_hidden_and_filament_pages_render(): void
    {
        $user = User::factory()->create();

        Penelitian::create([
            'judul' => 'Draft Penelitian Rahasia',
            'penulis' => 'Dosen Uji',
            'nama_jurnal' => 'Jurnal Uji',
            'index_type' => 'SINTA',
            'tahun' => 2026,
            'is_published' => false,
        ]);

        $active = Penelitian::create([
            'judul' => 'Penelitian Aktif Terbaru',
            'penulis' => 'Dosen Uji',
            'nama_jurnal' => 'Jurnal Uji',
            'index_type' => 'SCOPUS',
            'tahun' => 2026,
            'is_published' => true,
        ]);

        Article::create([
            'title' => 'Draft Berita Rahasia',
            'slug' => 'draft-berita-rahasia',
            'category' => 'Berita',
            'content' => '<p>Draft</p>',
            'published_at' => now(),
            'is_published' => false,
        ]);

        Article::create([
            'title' => 'Berita Aktif Terbaru',
            'slug' => 'berita-aktif-terbaru',
            'category' => 'Berita',
            'content' => '<p>Publik</p>',
            'published_at' => now(),
            'is_published' => true,
        ]);

        $this->get('/berita')
            ->assertOk()
            ->assertSee('Berita Aktif Terbaru')
            ->assertDontSee('Draft Berita Rahasia');

        $this->get('/berita/detail/draft-berita-rahasia')
            ->assertNotFound();

        $this->get('/berita/detail/berita-aktif-terbaru')
            ->assertOk()
            ->assertSee('Berita Aktif Terbaru');

        $this->get('/')
            ->assertOk()
            ->assertSee('Program Studi Teknik Sipil')
            ->assertSee('Sambutan Ketua Program Studi');

        $this->get('/penelitian')
            ->assertOk()
            ->assertSee('Penelitian Aktif Terbaru')
            ->assertDontSee('Draft Penelitian Rahasia');

        $this->assertTrue($user->canAccessPanel(filament()->getDefaultPanel()));

        $this->get('/admin/login')
            ->assertOk()
            ->assertSee('Admin Teknik Sipil');

        $this->actingAs($user);
        app()->setLocale('id');

        Livewire::test(PanduanCepatWidget::class)
            ->assertOk()
            ->assertSee('Pintasan & Panduan Singkat')
            ->assertSee('Tambah Jadwal Sidang')
            ->assertSee(route('filament.admin.resources.defense-schedules.create'), false);

        Livewire::test(ProdiStatsWidget::class)
            ->assertOk()
            ->assertSee('Penelitian Dosen')
            ->assertSee('Jadwal Sidang Skripsi')
            ->assertSee(route('filament.admin.resources.defense-schedules.index'), false);

        Livewire::test(AnalitikKontenWidget::class)
            ->assertOk()
            ->assertSee('Analitik Publikasi &amp; Tridharma', false);

        Livewire::test(CreateSiteSetting::class)
            ->assertOk()
            ->fillForm([
                'mahasiswa_aktif' => 750,
                'akreditasi_peringkat' => 'UNGGUL',
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(SiteSettingResource::getUrl('index'));

        $setting = SiteSetting::query()->latest('id')->firstOrFail();

        $this->get('/')
            ->assertOk()
            ->assertSee('UNGGUL')
            ->assertSee('data-target="750"', false);

        Livewire::test(ListSiteSettings::class)
            ->assertOk()
            ->assertCanSeeTableRecords([$setting])
            ->assertSee(['Ubah', 'Hapus']);

        Livewire::test(EditSiteSetting::class, ['record' => $setting->getKey()])
            ->assertOk()
            ->fillForm([
                'mahasiswa_aktif' => 825,
            ])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(SiteSettingResource::getUrl('index'))
            ->callAction('delete')
            ->assertRedirect(SiteSettingResource::getUrl('index'));

        $this->assertDatabaseMissing('site_settings', ['id' => $setting->getKey()]);

        Livewire::test(ListArticles::class)->assertOk();
        Livewire::test(CreateArticle::class)->assertOk();
        Livewire::test(ListDefenseSchedules::class)->assertOk();
        Livewire::test(CreateDefenseSchedule::class)->assertOk();
        Livewire::test(ListPenelitians::class)
            ->assertOk()
            ->assertCanSeeTableRecords([$active])
            ->assertSee(['Ubah', 'Hapus']);
        Livewire::test(CreatePenelitian::class)->assertOk();
        Livewire::test(EditPenelitian::class, ['record' => $active->getKey()])->assertOk();
        Livewire::test(ListPengabdians::class)->assertOk();
        Livewire::test(CreatePengabdian::class)->assertOk();
        Livewire::test(ListBukus::class)->assertOk();
        Livewire::test(CreateBuku::class)->assertOk();
        Livewire::test(ListPrestasis::class)->assertOk();
        Livewire::test(CreatePrestasi::class)->assertOk();
        Livewire::test(ListDosens::class)->assertOk();
        Livewire::test(CreateDosen::class)->assertOk();

        Storage::fake('public');

        $sriWanto = Dosen::create([
            'slug' => 'sri-wanto',
            'nama' => 'Sri Wanto, S.T., M.T.',
            'kbk' => 'struktur',
            'profile_route' => 'dosen.sri-wanto',
            'foto' => 'dosen/sri-wanto.jpg',
            'urutan' => 1,
            'is_published' => true,
        ]);

        Livewire::test(EditDosen::class, ['record' => $sriWanto->getKey()])
            ->assertOk()
            ->fillForm([
                'nama' => 'Dr. Sri Wanto, S.T., M.T.',
                'kbk' => 'geoteknik',
                'foto' => UploadedFile::fake()->createWithContent(
                    'sri-wanto-baru.jpg',
                    file_get_contents(public_path('images/dosen/sri-wanto.jpg'))
                ),
            ])
            ->call('save')
            ->assertHasNoFormErrors();

        $sriWanto->refresh();
        $this->assertNotSame('dosen/sri-wanto.jpg', $sriWanto->foto);

        $this->get('/dosen')
            ->assertOk()
            ->assertSee('Dr. Sri Wanto, S.T., M.T.')
            ->assertSee($sriWanto->foto_url, false);

        $this->get('/dosen/sri-wanto')
            ->assertOk()
            ->assertSee('Dr. Sri Wanto, S.T., M.T.')
            ->assertSee('Rekayasa Geoteknik')
            ->assertSee($sriWanto->foto_url, false);

        Buku::create([
            'judul' => 'Draft Buku Sri Wanto',
            'penulis' => 'Sri Wanto, S.T., M.T.',
            'penulis_route' => 'dosen.sri-wanto',
            'kategori' => 'non-fiksi',
            'is_published' => false,
        ]);

        Buku::create([
            'judul' => 'Buku Baru Sri Wanto',
            'penulis' => 'Sri Wanto, S.T., M.T.',
            'penulis_route' => 'dosen.sri-wanto',
            'kategori' => 'non-fiksi',
            'tahun' => 2026,
            'is_published' => true,
        ]);

        $this->get('/dosen/sri-wanto')
            ->assertOk()
            ->assertSee('Buku Baru Sri Wanto')
            ->assertDontSee('Draft Buku Sri Wanto');
    }

    public function test_all_admin_resources_support_full_crud_and_sync_public_pages(): void
    {
        Storage::fake('public');

        $user = User::factory()->create();
        $this->actingAs($user);
        app()->setLocale('id');

        // 1. Berita & Pengumuman (Articles) - Create, Create Another, Read, Update, Delete
        Livewire::test(CreateArticle::class)
            ->fillForm([
                'title' => 'Kuliah Umum Struktur Jembatan Baja',
                'slug' => 'kuliah-umum-struktur-jembatan-baja',
                'category' => 'Pengumuman',
                'excerpt' => 'Ringkasan kuliah umum struktur jembatan.',
                'content' => '<p>Konten lengkap kuliah umum struktur jembatan baja.</p>',
                'is_published' => true,
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(ArticleResource::getUrl('index'));

        Livewire::test(CreateArticle::class)
            ->fillForm([
                'title' => 'Kuliah Umum Fondasi Tiang Pancang',
                'slug' => 'kuliah-umum-fondasi-tiang-pancang',
                'category' => 'Berita',
                'excerpt' => 'Ringkasan kuliah umum fondasi.',
                'content' => '<p>Konten lengkap fondasi.</p>',
                'is_published' => true,
            ])
            ->call('create', true)
            ->assertHasNoFormErrors()
            ->assertNoRedirect();

        $articleAnother = Article::where('slug', 'kuliah-umum-fondasi-tiang-pancang')->firstOrFail();
        $articleAnother->delete();

        $article = Article::where('slug', 'kuliah-umum-struktur-jembatan-baja')->firstOrFail();

        $this->get('/berita')->assertOk()->assertSee('Kuliah Umum Struktur Jembatan Baja');
        $this->get('/berita/detail/'.$article->slug)->assertOk()->assertSee('Konten lengkap kuliah umum struktur jembatan baja.');

        Livewire::test(EditArticle::class, ['record' => $article->getKey()])
            ->fillForm(['title' => 'Kuliah Umum Struktur Jembatan Baja (Revisi)'])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(ArticleResource::getUrl('index'));

        $this->get('/berita')->assertOk()->assertSee('Kuliah Umum Struktur Jembatan Baja (Revisi)');

        Livewire::test(ListArticles::class)
            ->assertCanSeeTableRecords([$article])
            ->filterTable('category', 'Pengumuman')
            ->assertCanSeeTableRecords([$article])
            ->callTableAction('delete', $article);

        $this->assertDatabaseMissing('articles', ['id' => $article->getKey()]);

        // 2. Buku - Create, Read (catalog + profil dosen Andhy Romdani), Update, Delete
        Livewire::test(CreateBuku::class)
            ->fillForm([
                'judul' => 'Buku Dinamika Gelombang Uji',
                'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
                'penulis_route' => 'dosen.andhy-romdani',
                'kategori' => 'non-fiksi',
                'label' => 'Buku Referensi',
                'tahun' => 2026,
                'isbn' => '978-623-0000-11-1',
                'is_published' => true,
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(BukuResource::getUrl('index'));

        $buku = Buku::where('isbn', '978-623-0000-11-1')->firstOrFail();

        $this->get('/buku')->assertOk()->assertSee('Buku Dinamika Gelombang Uji');
        $this->get('/dosen/andhy-romdani')->assertOk()->assertSee('Buku Dinamika Gelombang Uji');

        Livewire::test(EditBuku::class, ['record' => $buku->getKey()])
            ->fillForm(['judul' => 'Buku Dinamika Gelombang Edisi 2'])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(BukuResource::getUrl('index'));

        $this->get('/dosen/andhy-romdani')->assertOk()->assertSee('Buku Dinamika Gelombang Edisi 2');

        Livewire::test(ListBukus::class)
            ->assertCanSeeTableRecords([$buku])
            ->callTableAction('delete', $buku);

        $this->assertDatabaseMissing('bukus', ['id' => $buku->getKey()]);

        // 3. Jadwal Sidang Skripsi (DefenseSchedules) - Create, Read, Update, Delete
        Livewire::test(CreateDefenseSchedule::class)
            ->fillForm([
                'type' => 'Sidang Akhir Skripsi',
                'status' => 'Terjadwal',
                'student_name' => 'Rafi Pratama',
                'student_id' => '217011001',
                'title' => 'Analisis Stabilitas Lereng Bendungan Leuwikeris',
                'supervisor_1' => 'Dr. Ir. Empung, S.T., M.T.',
                'supervisor_2' => 'Sri Wanto, S.T., M.T.',
                'examiner_1' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
                'examiner_2' => 'Ir. Asep Kurnia, M.T.',
                'room' => 'Ruang Sidang FT 1',
                'date_time' => '2026-12-01 09:00:00',
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(DefenseScheduleResource::getUrl('index'));

        $schedule = DefenseSchedule::where('student_id', '217011001')->firstOrFail();

        $this->get('/jadwal-sidang-skripsi')
            ->assertOk()
            ->assertSee('Rafi Pratama')
            ->assertSee('Pembimbing 1: Dr. Ir. Empung, S.T., M.T.')
            ->assertSee('Pembimbing 2: Sri Wanto, S.T., M.T.')
            ->assertSee('Penguji 1: Andhy Romdani, S.T., M.Eng., Ph.D.')
            ->assertSee('Penguji 2: Ir. Asep Kurnia, M.T.')
            ->assertSee('Semua (1)')
            ->assertSee('Sidang Akhir Skripsi (1)')
            ->assertSee('bg-emerald-50 text-emerald-700', false);
        $this->get('/sidang-akhir')
            ->assertOk()
            ->assertSee('Rafi Pratama')
            ->assertSee('Sri Wanto, S.T., M.T.')
            ->assertSee('Penguji 1: Andhy Romdani, S.T., M.Eng., Ph.D.')
            ->assertSee('Penguji 2: Ir. Asep Kurnia, M.T.');

        Livewire::test(EditDefenseSchedule::class, ['record' => $schedule->getKey()])
            ->fillForm(['room' => 'Ruang Seminar Kampus 2', 'status' => 'Selesai'])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(DefenseScheduleResource::getUrl('index'));

        $this->get('/jadwal-sidang-skripsi')
            ->assertOk()
            ->assertSee('Ruang Seminar Kampus 2')
            ->assertSee('Selesai')
            ->assertSee('bg-blue-50 text-blue-700', false);
        $this->get('/sidang-akhir')->assertOk()->assertSee('Ruang Seminar Kampus 2');

        Livewire::test(ListDefenseSchedules::class)
            ->assertOk()
            ->assertSee('Lihat Kalender di Web')
            ->assertCanSeeTableRecords([$schedule])
            ->filterTable('type', 'Sidang Akhir Skripsi')
            ->assertCanSeeTableRecords([$schedule])
            ->filterTable('status', 'Selesai')
            ->assertCanSeeTableRecords([$schedule])
            ->callTableAction('delete', $schedule);

        $this->assertDatabaseMissing('defense_schedules', ['id' => $schedule->getKey()]);

        // 4. Dosen & Pengajar - Create (termasuk urutan null & biodata CV lengkap), Read, Update, Delete
        Storage::fake('public');

        Livewire::test(CreateDosen::class)
            ->fillForm([
                'nama' => 'Ir. Budi Santoso, M.T.',
                'slug' => 'budi-santoso',
                'kbk' => 'transportasi',
                'badge_peran' => 'Lektor Kepala',
                'jabatan_akademik' => 'Kepala Laboratorium Transportasi',
                'nidn' => '0412088501',
                'email' => 'budisantoso@unsil.ac.id',
                'biografi' => "Paragraf pertama biografi Budi Santoso.\n\nParagraf kedua fokus penelitian jalan.",
                'fokus_keahlian' => ['Perkerasan Lentur', 'Transportasi Berkelanjutan'],
                'pendidikan' => [
                    ['jenjang' => 'Magister (S2)', 'periode' => '2014', 'institusi' => 'ITB Bandung', 'prodi' => 'Teknik Jalan Raya', 'predikat' => 'Cum Laude'],
                ],
                'pengalaman_kerja' => [
                    ['tag' => 'Konsultan', 'jabatan' => 'Highway Engineer', 'instansi' => 'PT. Bina Jalan Nusantara', 'periode' => '2016 – 2022', 'lokasi' => 'Bandung', 'deskripsi' => "Merancang geometrik jalan\nSupervisi pengerasan lentur"],
                ],
                'pelatihan' => [
                    ['nama' => 'Sertifikat Ahli Jalan Madya', 'penyelenggara' => 'LPJK', 'tahun' => '2024'],
                ],
                'bagian_tambahan' => [
                    [
                        'judul' => 'Hak Kekayaan Intelektual (HKI)',
                        'subjudul' => 'Paten & Hak Cipta',
                        'ikon' => 'certificate',
                        'items' => [
                            ['judul' => 'Modul Perkerasan Hijau Berkelanjutan', 'tahun' => '2025', 'subjudul' => 'EC0020259911', 'deskripsi' => 'Modul ajar berhak cipta Kemenkumham.'],
                        ],
                    ],
                ],
                'urutan_bagian' => [
                    ['key' => 'biografi', 'judul' => 'Tentang Budi Santoso', 'tampil' => true],
                    ['key' => 'pendidikan', 'judul' => 'Pendidikan & Prestasi', 'tampil' => true],
                    ['key' => 'tambahan', 'tampil' => true],
                    ['key' => 'pengalaman', 'judul' => 'Rekam Jejak Industri', 'tampil' => true],
                    ['key' => 'pelatihan', 'tampil' => false],
                ],
                'cv_file' => UploadedFile::fake()->create('cv-budi.pdf', 120, 'application/pdf'),
                'urutan' => null,
                'is_published' => true,
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(DosenResource::getUrl('index'));

        $dosen = Dosen::where('slug', 'budi-santoso')->firstOrFail();
        $this->assertSame(0, $dosen->urutan);

        $this->get('/dosen')
            ->assertOk()
            ->assertSee('Ir. Budi Santoso, M.T.')
            ->assertSee(route('dosen.show', 'budi-santoso'), false)
            ->assertSee('Lihat Biodata Lengkap');

        $this->get('/dosen/budi-santoso')
            ->assertOk()
            ->assertSee('Kepala Laboratorium Transportasi')
            ->assertSee('NIDN: 0412088501')
            ->assertSee('budisantoso@unsil.ac.id')
            ->assertSeeInOrder([
                'Tentang Budi Santoso',
                'ITB Bandung',
                'Cum Laude',
                'Hak Kekayaan Intelektual (HKI)',
                'Modul Perkerasan Hijau Berkelanjutan',
                'Rekam Jejak Industri',
                'PT. Bina Jalan Nusantara',
            ], false)
            ->assertDontSee('Sertifikat Ahli Jalan Madya');

        Livewire::test(EditDosen::class, ['record' => $dosen->getKey()])
            ->fillForm([
                'nama' => 'Dr. Ir. Budi Santoso, M.T.',
                'is_published' => false,
                'urutan' => '',
            ])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(DosenResource::getUrl('index'));

        $this->get('/dosen/budi-santoso')->assertNotFound();

        Livewire::test(EditDosen::class, ['record' => $dosen->getKey()])
            ->fillForm(['is_published' => true])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(DosenResource::getUrl('index'));

        $this->get('/dosen')->assertOk()->assertSee('Dr. Ir. Budi Santoso, M.T.');
        $this->get('/dosen/budi-santoso')->assertOk()->assertSee('Dr. Ir. Budi Santoso, M.T.');

        Livewire::test(ListDosens::class)
            ->assertCanSeeTableRecords([$dosen])
            ->callTableAction('delete', $dosen);

        $this->assertDatabaseMissing('dosens', ['id' => $dosen->getKey()]);

        // 5. Penelitian - Create, Read, Update, Delete
        Livewire::test(CreatePenelitian::class)
            ->fillForm([
                'judul' => 'Pemodelan Hidrolika Sungai Citanduy',
                'penulis' => 'Andhy Romdani, Sri Wanto',
                'nama_jurnal' => 'Akselerasi: Jurnal Ilmiah Teknik Sipil',
                'tahun' => 2026,
                'index_type' => 'SINTA',
                'index_detail' => 'SINTA 4',
                'is_published' => true,
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(PenelitianResource::getUrl('index'));

        $penelitian = Penelitian::where('judul', 'Pemodelan Hidrolika Sungai Citanduy')->firstOrFail();

        $this->get('/penelitian')->assertOk()->assertSee('Pemodelan Hidrolika Sungai Citanduy');

        Livewire::test(EditPenelitian::class, ['record' => $penelitian->getKey()])
            ->fillForm(['judul' => 'Pemodelan Hidrolika Sungai Citanduy Hilir'])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(PenelitianResource::getUrl('index'));

        $this->get('/penelitian')->assertOk()->assertSee('Pemodelan Hidrolika Sungai Citanduy Hilir');

        Livewire::test(ListPenelitians::class)
            ->assertCanSeeTableRecords([$penelitian])
            ->callTableAction('delete', $penelitian);

        $this->assertDatabaseMissing('penelitians', ['id' => $penelitian->getKey()]);

        // 6. Pengabdian Masyarakat - Create, Read, Filter PROCEEDING, Update, Delete
        Livewire::test(CreatePengabdian::class)
            ->fillForm([
                'judul' => 'Pelatihan Konstruksi Tahan Gempa Warga Tasikmalaya',
                'penulis' => 'Sri Wanto, dkk.',
                'nama_jurnal' => 'Prosiding Seminar Nasional Pengabdian',
                'tahun' => 2026,
                'index_type' => 'PROCEEDING',
                'index_detail' => 'Prosiding Nasional',
                'is_published' => true,
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(PengabdianResource::getUrl('index'));

        $pengabdian = Pengabdian::where('judul', 'Pelatihan Konstruksi Tahan Gempa Warga Tasikmalaya')->firstOrFail();

        $this->get('/pengabdian')->assertOk()->assertSee('Pelatihan Konstruksi Tahan Gempa Warga Tasikmalaya');

        Livewire::test(EditPengabdian::class, ['record' => $pengabdian->getKey()])
            ->fillForm(['judul' => 'Pelatihan Rumah Tahan Gempa Desa Mugarsari'])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(PengabdianResource::getUrl('index'));

        $this->get('/pengabdian')->assertOk()->assertSee('Pelatihan Rumah Tahan Gempa Desa Mugarsari');

        Livewire::test(ListPengabdians::class)
            ->assertCanSeeTableRecords([$pengabdian])
            ->filterTable('index_type', 'PROCEEDING')
            ->assertCanSeeTableRecords([$pengabdian])
            ->callTableAction('delete', $pengabdian);

        $this->assertDatabaseMissing('pengabdians', ['id' => $pengabdian->getKey()]);

        // 7. Prestasi Mahasiswa - Create, Read (termasuk mahasiswa & penyelenggara), Update, Delete
        Livewire::test(CreatePrestasi::class)
            ->fillForm([
                'judul' => 'Juara 1 Lomba Jembatan Baja Nasional',
                'mahasiswa' => 'Tim Galunggung Sipil',
                'kategori' => 'jembatan',
                'tingkat' => 'Juara 1 Nasional',
                'tahun' => 2026,
                'penyelenggara' => 'ITB Bandung',
                'deskripsi' => 'Merancang model jembatan baja ringan efisiensi tinggi.',
                'is_published' => true,
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(PrestasiResource::getUrl('index'));

        $prestasi = Prestasi::where('judul', 'Juara 1 Lomba Jembatan Baja Nasional')->firstOrFail();

        $this->get('/prestasi-mahasiswa')
            ->assertOk()
            ->assertSee('Juara 1 Lomba Jembatan Baja Nasional')
            ->assertSee('Tim Galunggung Sipil')
            ->assertSee('ITB Bandung');

        Livewire::test(EditPrestasi::class, ['record' => $prestasi->getKey()])
            ->fillForm(['penyelenggara' => 'ITS Surabaya'])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertRedirect(PrestasiResource::getUrl('index'));

        $this->get('/prestasi-mahasiswa')->assertOk()->assertSee('ITS Surabaya');

        Livewire::test(ListPrestasis::class)
            ->assertCanSeeTableRecords([$prestasi])
            ->callTableAction('delete', $prestasi);

        $this->assertDatabaseMissing('prestasis', ['id' => $prestasi->getKey()]);
    }

    public function test_cv_pdf_upload_auto_fills_dosen_form_and_supports_gemini(): void
    {
        Storage::fake('public');

        $admin = User::factory()->create();
        $this->actingAs($admin);

        $cvLines = [
            'Dr. Siti Aminah, S.T., M.Eng.',
            'Dosen Tetap Program Studi Teknik Sipil | Lektor',
            'Email: sitiaminah@unsil.ac.id | Telepon: 081234567890',
            'NIDN: 0415098802',
            'ORCID iD: 0009-0001-2345-6789 | SINTA ID: 6123456',
            'PROFIL AKADEMIK',
            'Siti Aminah menekuni bidang Rekayasa Sumber Daya Air, hidrolika sungai, dan pemodelan banjir.',
            'RIWAYAT PENDIDIKAN',
            'Magister (S2) Teknik Sipil - Universitas Gadjah Mada (2015 - 2017)',
            'Sarjana (S1) Teknik Sipil - Institut Teknologi Bandung (2010 - 2014)',
            'PENGALAMAN KERJA',
            'Dosen Program Studi Teknik Sipil - Universitas Siliwangi (2019 - Sekarang)',
            'PELATIHAN',
            'Pemodelan Banjir HEC-RAS 2D - HATHI (2024)',
            'PUBLIKASI ILMIAH',
            'Aminah, S. (2025). Pemodelan Debit Banjir DAS Citanduy Menggunakan HEC-HMS. Jurnal Teknik Hidraulik, 12(1). https://doi.org/10.1000/test.2025',
        ];

        $commands = "BT\n/F1 11 Tf\n50 760 Td\n14 TL\n";
        foreach ($cvLines as $idx => $line) {
            $escaped = str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], $line);
            $commands .= ($idx === 0 ? "({$escaped}) Tj\n" : "({$escaped}) '\n");
        }
        $commands .= 'ET';

        $compressed = gzcompress($commands);
        $pdf = "%PDF-1.4\n"
            ."1 0 obj << /Type /Catalog /Pages 2 0 R >> endobj\n"
            ."2 0 obj << /Type /Pages /Kids [3 0 R] /Count 1 >> endobj\n"
            ."3 0 obj << /Type /Page /Parent 2 0 R /Contents 4 0 R >> endobj\n"
            .'4 0 obj << /Length '.strlen($compressed)." /Filter /FlateDecode >>\nstream\n{$compressed}\nendstream\nendobj\n%%EOF";

        $uploadedPdf = UploadedFile::fake()->createWithContent('cv-siti-aminah.pdf', $pdf);

        $livewire = Livewire::test(CreateDosen::class)
            ->fillForm(['cv_file' => $uploadedPdf]);

        $formState = $livewire->get('data');
        $this->assertSame('Dr. Siti Aminah, S.T., M.Eng.', $formState['nama']);
        $this->assertSame('dr-siti-aminah-st-meng', $formState['slug']);
        $this->assertSame('sitiaminah@unsil.ac.id', $formState['email']);
        $this->assertSame('0415098802', $formState['nidn']);
        $this->assertSame('keairan', $formState['kbk']);
        $this->assertNotEmpty($formState['pendidikan']);
        $this->assertNotEmpty($formState['pengalaman_kerja']);
        $this->assertNotEmpty($formState['pelatihan']);
        $this->assertNotEmpty($formState['publikasi']);

        // Admin merevisi satu kolom lalu menyimpan.
        $livewire
            ->fillForm(['badge_peran' => 'Koordinator Riset Keairan'])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertRedirect(DosenResource::getUrl('index'));

        $dosen = Dosen::where('slug', 'dr-siti-aminah-st-meng')->firstOrFail();
        $this->assertSame('Koordinator Riset Keairan', $dosen->badge_peran);
        $this->assertNotNull($dosen->cv_file);

        $this->get('/dosen/dr-siti-aminah-st-meng')
            ->assertOk()
            ->assertSee('Dr. Siti Aminah, S.T., M.Eng.')
            ->assertSee('Koordinator Riset Keairan')
            ->assertSee('Universitas Gadjah Mada')
            ->assertSee('HEC-RAS 2D');

        // Verifikasi jalur Gemini API ketika GEMINI_API_KEY diatur.
        config(['services.gemini.key' => 'test-gemini-key']);
        Http::fake([
            'generativelanguage.googleapis.com/*' => Http::response([
                'status' => 'completed',
                'steps' => [[
                    'type' => 'model_output',
                    'content' => [[
                        'type' => 'text',
                        'text' => json_encode([
                            'nama' => 'Ir. Rahmat Hidayat, M.T.',
                            'kbk' => 'struktur',
                            'email' => 'rahmathidayat@unsil.ac.id',
                            'biografi' => 'Dosen bidang rekayasa struktur tahan gempa.',
                            'pendidikan' => [[
                                'jenjang' => 'Magister (S2)',
                                'periode' => '2018',
                                'institusi' => 'ITS Surabaya',
                                'prodi' => 'Teknik Sipil',
                                'predikat' => 'Cum Laude',
                            ]],
                        ]),
                    ]],
                ]],
            ], 200),
        ]);

        $tmpPdf = tempnam(sys_get_temp_dir(), 'gem_');
        file_put_contents($tmpPdf, $pdf);
        try {
            $geminiResult = app(CvAutoFiller::class)->extractFromPath($tmpPdf, 'application/pdf');
        } finally {
            @unlink($tmpPdf);
        }

        $this->assertSame('gemini', $geminiResult['source']);
        $this->assertSame('Ir. Rahmat Hidayat, M.T.', $geminiResult['fields']['nama']);
        $this->assertSame('struktur', $geminiResult['fields']['kbk']);

        // Verifikasi ekstraktor PDF menangani Type0 Identity-H literal CID dan digit '0' pada bfrange.
        $cmapStream = gzcompress("begincmap\n5 beginbfchar\n<0003> <0020>\n<0024> <0041>\n<0029> <0044>\n<001C> <0049>\nendbfchar\n1 beginbfrange\n<02A1> <02AA> <002E>\nendbfrange\nendcmap");
        $xobjStream = gzcompress("BT\n/F10 24 Tf\n1 0 0 -1 50 40 Tm\n(\x00$) Tj\n20 0 Td\n(\x00\\)) Tj\n20 0 Td\n(\x00\x1C) Tj\n(\x00\x03) Tj\n<02A502A302A402AA> Tj\nET");
        $pageStream = gzcompress("q 1 0 0 -1 0 842 cm\n/X1 Do\nQ");
        $cidPdf = "%PDF-1.4\n"
            ."1 0 obj << /Type /Catalog /Pages 2 0 R >> endobj\n"
            ."2 0 obj << /Type /Pages /Kids [3 0 R] /Count 1 >> endobj\n"
            ."3 0 obj << /Type /Page /Parent 2 0 R /Resources << /XObject << /X1 4 0 R >> >> /Contents 5 0 R >> endobj\n"
            .'4 0 obj << /Type /XObject /Subtype /Form /Resources << /Font << /F10 6 0 R >> >> /Length '.strlen($xobjStream)." /Filter /FlateDecode >>\nstream\n{$xobjStream}\nendstream\nendobj\n"
            .'5 0 obj << /Length '.strlen($pageStream)." /Filter /FlateDecode >>\nstream\n{$pageStream}\nendstream\nendobj\n"
            ."6 0 obj << /Type /Font /Subtype /Type0 /Encoding /Identity-H /ToUnicode 7 0 R >> endobj\n"
            .'7 0 obj << /Length '.strlen($cmapStream)." /Filter /FlateDecode >>\nstream\n{$cmapStream}\nendstream\nendobj\n%%EOF";

        $decodedCid = app(PdfTextExtractor::class)->extractFromBinary($cidPdf);
        $this->assertSame('ADI 2017', $decodedCid);
    }
}
