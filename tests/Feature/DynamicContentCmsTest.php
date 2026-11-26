<?php

namespace Tests\Feature;

use App\Filament\Resources\Articles\Pages\CreateArticle;
use App\Filament\Resources\Articles\Pages\ListArticles;
use App\Filament\Resources\Bukus\Pages\CreateBuku;
use App\Filament\Resources\Bukus\Pages\ListBukus;
use App\Filament\Resources\DefenseSchedules\Pages\CreateDefenseSchedule;
use App\Filament\Resources\DefenseSchedules\Pages\ListDefenseSchedules;
use App\Filament\Resources\Dosens\Pages\CreateDosen;
use App\Filament\Resources\Dosens\Pages\EditDosen;
use App\Filament\Resources\Dosens\Pages\ListDosens;
use App\Filament\Resources\Penelitians\Pages\CreatePenelitian;
use App\Filament\Resources\Penelitians\Pages\EditPenelitian;
use App\Filament\Resources\Penelitians\Pages\ListPenelitians;
use App\Filament\Resources\Pengabdians\Pages\CreatePengabdian;
use App\Filament\Resources\Pengabdians\Pages\ListPengabdians;
use App\Filament\Resources\Prestasis\Pages\CreatePrestasi;
use App\Filament\Resources\Prestasis\Pages\ListPrestasis;
use App\Filament\Resources\SiteSettings\Pages\CreateSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\EditSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\ListSiteSettings;
use App\Filament\Widgets\PanduanCepatWidget;
use App\Filament\Widgets\ProdiStatsWidget;
use App\Models\Article;
use App\Models\Buku;
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
        $this->assertSame(17, Buku::count());
        $this->assertSame(6, Prestasi::count());
        $this->assertSame(24, Dosen::count());

        $this->get('/')
            ->assertOk()
            ->assertSee('Program Studi Teknik Sipil')
            ->assertSee('Workshop Penguatan Kurikulum')
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
        $this->get('/alur-pengurusan-kerja-praktik')->assertOk();
        $this->get('/alur-pengurusan-skripsi')->assertOk()->assertSee('Alur Pengurusan Skripsi');
        $this->get('/fasilitas')
            ->assertOk()
            ->assertSee('images/kelas-1.jpg', false)
            ->assertSee('images/ruang-sidang-1.jpg', false);
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
            ->assertSee('images/ruang-sidang-1.jpg', false)
            ->assertSee('images/ruang-sidang-2.jpg', false)
            ->assertSee('images/ruang-sidang-3.jpg', false);
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
            ->assertSee('Optimizing Home Yards');

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
            ->assertSee('/storage/dosen/andhy-romdani.jpg', false);

        $this->get('/dosen/sri-wanto')
            ->assertOk()
            ->assertSee('Sri Wanto, S.T., M.T.')
            ->assertSee('Konstruksi Struktur Jembatan')
            ->assertSee('978-634-7526-24-3')
            ->assertSee('/storage/buku-covers/konstruksi-struktur-jembatan.jpg', false)
            ->assertSee('/storage/dosen/sri-wanto.jpg', false);
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
            ->assertSee('Pintasan & Panduan Singkat');

        Livewire::test(ProdiStatsWidget::class)
            ->assertOk()
            ->assertSee('Penelitian Dosen');

        Livewire::test(CreateSiteSetting::class)
            ->assertOk()
            ->fillForm([
                'mahasiswa_aktif' => 750,
                'akreditasi_peringkat' => 'UNGGUL',
            ])
            ->call('create')
            ->assertHasNoFormErrors();

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
            ->callAction('delete');

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
}
