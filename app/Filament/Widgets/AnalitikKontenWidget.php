<?php

namespace App\Filament\Widgets;

use App\Models\Buku;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Prestasi;
use Filament\Widgets\ChartWidget;

class AnalitikKontenWidget extends ChartWidget
{
    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 1;

    protected ?string $heading = 'Analitik Publikasi & Tridharma';

    protected ?string $description = 'Pertumbuhan karya Penelitian, Pengabdian, Buku, dan Prestasi 5 tahun terakhir.';

    protected ?string $maxHeight = '280px';

    protected function getType(): string
    {
        return 'line';
    }

    /**
     * @return array<string, mixed>
     */
    protected function getData(): array
    {
        $years = range((int) now()->year - 4, (int) now()->year);

        $mapCounts = static function (string $modelClass) use ($years): array {
            $counts = $modelClass::query()
                ->where('is_published', true)
                ->whereIn('tahun', $years)
                ->selectRaw('tahun, count(*) as total')
                ->groupBy('tahun')
                ->pluck('total', 'tahun');

            return array_map(static fn (int $year): int => (int) ($counts[$year] ?? 0), $years);
        };

        return [
            'labels' => array_map('strval', $years),
            'datasets' => [
                [
                    'label' => 'Penelitian Dosen',
                    'data' => $mapCounts(Penelitian::class),
                    'borderColor' => '#0070BA',
                    'backgroundColor' => 'rgba(0, 112, 186, 0.14)',
                    'fill' => true,
                    'tension' => 0.4,
                    'borderWidth' => 2.5,
                    'pointRadius' => 4,
                    'pointHoverRadius' => 6,
                ],
                [
                    'label' => 'Pengabdian (PkM)',
                    'data' => $mapCounts(Pengabdian::class),
                    'borderColor' => '#10B981',
                    'backgroundColor' => 'rgba(16, 185, 129, 0.10)',
                    'fill' => true,
                    'tension' => 0.4,
                    'borderWidth' => 2.5,
                    'pointRadius' => 4,
                    'pointHoverRadius' => 6,
                ],
                [
                    'label' => 'Buku Karya Dosen',
                    'data' => $mapCounts(Buku::class),
                    'borderColor' => '#F59E0B',
                    'backgroundColor' => 'rgba(245, 158, 11, 0.08)',
                    'fill' => false,
                    'tension' => 0.4,
                    'borderWidth' => 2.5,
                    'pointRadius' => 4,
                    'pointHoverRadius' => 6,
                ],
                [
                    'label' => 'Prestasi Mahasiswa',
                    'data' => $mapCounts(Prestasi::class),
                    'borderColor' => '#6366F1',
                    'backgroundColor' => 'rgba(99, 102, 241, 0.08)',
                    'fill' => false,
                    'tension' => 0.4,
                    'borderWidth' => 2.5,
                    'pointRadius' => 4,
                    'pointHoverRadius' => 6,
                ],
            ],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getOptions(): array
    {
        return [
            'maintainAspectRatio' => false,
            'interaction' => [
                'mode' => 'index',
                'intersect' => false,
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'precision' => 0,
                    ],
                    'grid' => [
                        'color' => 'rgba(148, 163, 184, 0.16)',
                    ],
                ],
                'x' => [
                    'grid' => [
                        'display' => false,
                    ],
                ],
            ],
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                    'labels' => [
                        'usePointStyle' => true,
                        'boxWidth' => 9,
                        'padding' => 14,
                    ],
                ],
            ],
        ];
    }
}
