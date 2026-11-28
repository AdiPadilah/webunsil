<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Buku;
use App\Models\DefenseSchedule;
use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Prestasi;
use Filament\Widgets\ChartWidget;

class KomposisiKontenWidget extends ChartWidget
{
    protected static ?int $sort = 4;

    protected int | string | array $columnSpan = 1;

    protected ?string $heading = 'Komposisi Repositori & Sidang';

    protected ?string $description = 'Proporsi aktif karya dosen, mahasiswa, berita, dan jadwal sidang.';

    protected ?string $maxHeight = '280px';

    protected function getType(): string
    {
        return 'doughnut';
    }

    /**
     * @return array<string, mixed>
     */
    protected function getData(): array
    {
        return [
            'labels' => [
                'Penelitian',
                'Buku Karya',
                'Berita',
                'Dosen',
                'Pengabdian',
                'Prestasi',
                'Sidang',
            ],
            'datasets' => [
                [
                    'data' => [
                        Penelitian::published()->count(),
                        Buku::published()->count(),
                        Article::where('is_published', true)->count(),
                        Dosen::published()->count(),
                        Pengabdian::published()->count(),
                        Prestasi::published()->count(),
                        DefenseSchedule::count(),
                    ],
                    'backgroundColor' => [
                        '#0070BA',
                        '#F59E0B',
                        '#0EA5E9',
                        '#3B82F6',
                        '#10B981',
                        '#6366F1',
                        '#8B5CF6',
                    ],
                    'borderColor' => '#FFFFFF',
                    'borderWidth' => 3,
                    'hoverOffset' => 8,
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
            'cutout' => '64%',
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
