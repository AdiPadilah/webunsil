<?php

namespace Tests\Feature;

use App\Filament\Resources\Articles\Pages\CreateArticle;
use App\Filament\Resources\Articles\Pages\ListArticles;
use App\Filament\Resources\Bukus\Pages\CreateBuku;
use App\Filament\Resources\Bukus\Pages\ListBukus;
use App\Filament\Resources\DefenseSchedules\Pages\CreateDefenseSchedule;
use App\Filament\Resources\DefenseSchedules\Pages\ListDefenseSchedules;
use App\Filament\Resources\Dosens\Pages\CreateDosen;
use App\Filament\Resources\Dosens\Pages\ListDosens;
use App\Filament\Resources\Penelitians\Pages\CreatePenelitian;
use App\Filament\Resources\Penelitians\Pages\EditPenelitian;
use App\Filament\Resources\Penelitians\Pages\ListPenelitians;
use App\Filament\Resources\Pengabdians\Pages\CreatePengabdian;
use App\Filament\Resources\Pengabdians\Pages\ListPengabdians;
use App\Filament\Resources\Prestasis\Pages\CreatePrestasi;
use App\Filament\Resources\Prestasis\Pages\ListPrestasis;
use App\Filament\Widgets\PanduanCepatWidget;
use App\Filament\Widgets\ProdiStatsWidget;
use App\Models\Buku;
use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Prestasi;
use App\Models\User;
use Database\Seeders\BukuSeeder;
use Database\Seeders\DosenSeeder;
use Database\Seeders\PenelitianSeeder;
use Database\Seeders\PengabdianSeeder;
use Database\Seeders\PrestasiSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
            PenelitianSeeder::class,
            PengabdianSeeder::class,
            BukuSeeder::class,
            PrestasiSeeder::class,
            DosenSeeder::class,
        ]);

        $this->assertSame(24, Penelitian::count());
        $this->assertSame(9, Pengabdian::count());
        $this->assertSame(16, Buku::count());
        $this->assertSame(6, Prestasi::count());
        $this->assertSame(24, Dosen::count());

        $this->get('/')
            ->assertOk()
            ->assertSee('Mengenal Program Studi')
            ->assertSee('Akses Cepat');

        $this->get('/penelitian')
            ->assertOk()
            ->assertSee('Natural Hazards Research')
            ->assertSee('Pemali River Basin');

        $this->get('/pengabdian')
            ->assertOk()
            ->assertSee('DHIGANA')
            ->assertSee('Optimizing Home Yards');

        $this->get('/buku')
            ->assertOk()
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

        $this->get('/')
            ->assertOk()
            ->assertSee('Mengenal Program Studi')
            ->assertSee('Akses Cepat');

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

        Livewire::test(ListArticles::class)->assertOk();
        Livewire::test(CreateArticle::class)->assertOk();
        Livewire::test(ListDefenseSchedules::class)->assertOk();
        Livewire::test(CreateDefenseSchedule::class)->assertOk();
        Livewire::test(ListPenelitians::class)->assertOk();
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
    }
}
