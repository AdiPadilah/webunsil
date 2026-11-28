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
     * Build a 5-year sparkline series from records with an integer year column.
     *
     * @return array<int>
     */
    private function yearlySeries(string $modelClass): array
    {
        $years = range((int) now()->year - 4, (int) now()->year);
        $counts = $modelClass::query()
            ->where('is_published', true)
            ->whereIn('tahun', $years)
            ->selectRaw('tahun, count(*) as total')
            ->groupBy('tahun')
            ->pluck('total', 'tahun');

        return array_map(static fn (int $year): int => (int) ($counts[$year] ?? 0), $years);
    }

    /**
     * @return array<Stat>
     */
    protected function getStats(): array
    {
        $researchTrend = $this->yearlySeries(Penelitian::class);
        $serviceTrend = $this->yearlySeries(Pengabdian::class);
        $bookTrend = $this->yearlySeries(Buku::class);
        $achievementTrend = $this->yearlySeries(Prestasi::class);

        $penelitianCount = Penelitian::published()->count();
        $pengabdianCount = Pengabdian::published()->count();
        $bukuCount = Buku::published()->count();
        $prestasiCount = Prestasi::published()->count();
        $dosenCount = Dosen::published()->count();
        $articleCount = Article::where('is_published', true)->count();
        $sidangCount = DefenseSchedule::count();

        return [
            Stat::make('Penelitian Dosen', $penelitianCount)
                ->icon(Heroicon::OutlinedBeaker)
                ->description('Artikel jurnal & prosiding aktif')
                ->descriptionIcon(Heroicon::OutlinedBeaker)
                ->chart($researchTrend)
                ->chartColor('info')
                ->color('info')
                ->url(route('filament.admin.resources.penelitians.index')),

            Stat::make('Pengabdian (PkM)', $pengabdianCount)
                ->icon(Heroicon::OutlinedHandRaised)
                ->description('Kegiatan pemberdayaan aktif')
                ->descriptionIcon(Heroicon::OutlinedHandRaised)
                ->chart($serviceTrend)
                ->chartColor('success')
                ->color('success')
                ->url(route('filament.admin.resources.pengabdians.index')),

            Stat::make('Buku Karya Dosen', $bukuCount)
                ->icon(Heroicon::OutlinedBookOpen)
                ->description('Buku ajar & referensi ber-ISBN')
                ->descriptionIcon(Heroicon::OutlinedBookOpen)
                ->chart($bookTrend)
                ->chartColor('warning')
                ->color('warning')
                ->url(route('filament.admin.resources.bukus.index')),

            Stat::make('Prestasi Mahasiswa', $prestasiCount)
                ->icon(Heroicon::OutlinedTrophy)
                ->description('Kompetisi & publikasi terbit')
                ->descriptionIcon(Heroicon::OutlinedTrophy)
                ->chart($achievementTrend)
                ->chartColor('success')
                ->color('success')
                ->url(route('filament.admin.resources.prestasis.index')),

            Stat::make('Dosen & Pengajar', $dosenCount)
                ->icon(Heroicon::OutlinedAcademicCap)
                ->description('Terdaftar di direktori dosen')
                ->descriptionIcon(Heroicon::OutlinedAcademicCap)
                ->color('info')
                ->url(route('filament.admin.resources.dosens.index')),

            Stat::make('Berita & Pengumuman', $articleCount)
                ->icon(Heroicon::OutlinedNewspaper)
                ->description('Artikel & pengumuman tayang')
                ->descriptionIcon(Heroicon::OutlinedNewspaper)
                ->color('primary')
                ->url(route('filament.admin.resources.articles.index')),

            Stat::make('Jadwal Sidang Skripsi', $sidangCount)
                ->icon(Heroicon::OutlinedCalendarDays)
                ->description('Terjadwal: ' . DefenseSchedule::where('status', 'Terjadwal')->count() . ' • Sempro, Semhas & Akhir')
                ->descriptionIcon(Heroicon::OutlinedCalendarDays)
                ->color('warning')
                ->url(route('filament.admin.resources.defense-schedules.index')),

            Stat::make('Statistik & Info Prodi', SiteSetting::current()->akreditasi_peringkat)
                ->icon(Heroicon::OutlinedAdjustmentsHorizontal)
                ->description('Populasi, lulusan & profil kaprodi')
                ->descriptionIcon(Heroicon::OutlinedAdjustmentsHorizontal)
                ->color('gray')
                ->url(SiteSettingResource::getUrl()),
        ];
    }
}
