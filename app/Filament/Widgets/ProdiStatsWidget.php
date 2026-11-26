<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\SiteSettings\SiteSettingResource;
use App\Models\Article;
use App\Models\Buku;
use App\Models\DefenseSchedule;
use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Prestasi;
use App\Models\SiteSetting;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProdiStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    /**
     * @var int | array<string, ?int> | null
     */
    protected int | array | null $columns = ['default' => 1, 'sm' => 2, 'xl' => 4];

    protected ?string $heading = 'Ringkasan Konten Website';

    protected ?string $description = 'Klik kartu mana saja untuk langsung melihat, menambah, atau mengubah data.';

    /**
     * @return array<Stat>
     */
    protected function getStats(): array
    {
        return [
            Stat::make('Penelitian Dosen', Penelitian::published()->count())
                ->description('Artikel jurnal & prosiding aktif')
                ->descriptionIcon(Heroicon::OutlinedBeaker)
                ->color('info')
                ->url(route('filament.admin.resources.penelitians.index')),

            Stat::make('Pengabdian (PkM)', Pengabdian::published()->count())
                ->description('Kegiatan pemberdayaan aktif')
                ->descriptionIcon(Heroicon::OutlinedHandRaised)
                ->color('success')
                ->url(route('filament.admin.resources.pengabdians.index')),

            Stat::make('Buku Karya Dosen', Buku::published()->count())
                ->description('Buku ajar & referensi ber-ISBN')
                ->descriptionIcon(Heroicon::OutlinedBookOpen)
                ->color('warning')
                ->url(route('filament.admin.resources.bukus.index')),

            Stat::make('Prestasi Mahasiswa', Prestasi::published()->count())
                ->description('Kompetisi & publikasi terbit')
                ->descriptionIcon(Heroicon::OutlinedTrophy)
                ->color('success')
                ->url(route('filament.admin.resources.prestasis.index')),

            Stat::make('Dosen & Pengajar', Dosen::published()->count())
                ->description('Terdaftar di direktori dosen')
                ->descriptionIcon(Heroicon::OutlinedAcademicCap)
                ->color('info')
                ->url(route('filament.admin.resources.dosens.index')),

            Stat::make('Berita & Pengumuman', Article::where('is_published', true)->count())
                ->description('Artikel & pengumuman tayang')
                ->descriptionIcon(Heroicon::OutlinedNewspaper)
                ->color('primary')
                ->url(route('filament.admin.resources.articles.index')),

            Stat::make('Jadwal Sidang Skripsi', DefenseSchedule::count())
                ->description('Terjadwal: ' . DefenseSchedule::where('status', 'Terjadwal')->count() . ' • Sempro, Semhas & Akhir')
                ->descriptionIcon(Heroicon::OutlinedCalendarDays)
                ->color('warning')
                ->url(route('filament.admin.resources.defense-schedules.index')),

            Stat::make('Statistik & Info Prodi', SiteSetting::current()->akreditasi_peringkat)
                ->description('Populasi, lulusan & profil kaprodi')
                ->descriptionIcon(Heroicon::OutlinedAdjustmentsHorizontal)
                ->color('gray')
                ->url(SiteSettingResource::getUrl()),
        ];
    }
}
