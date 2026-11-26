<?php

namespace App\Models;

use App\Models\Concerns\ResolvesPublicImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use ResolvesPublicImage;

    protected $fillable = [
        'slug',
        'nama',
        'kbk',
        'profile_route',
        'foto',
        'urutan',
        'is_published',
    ];

    /**
     * @return array<string, array{label: string, badge: string}>
     */
    public static function kbkMeta(): array
    {
        return [
            'struktur' => [
                'label' => 'Rekayasa Struktur dan Bahan',
                'badge' => 'text-blue-800 bg-blue-50',
            ],
            'keairan' => [
                'label' => 'Rekayasa Sumber Daya Air',
                'badge' => 'text-cyan-800 bg-cyan-50',
            ],
            'geoteknik' => [
                'label' => 'Rekayasa Geoteknik',
                'badge' => 'text-amber-800 bg-amber-50',
            ],
            'transportasi' => [
                'label' => 'Rekayasa Transportasi dan Jalan Raya',
                'badge' => 'text-emerald-800 bg-emerald-50',
            ],
            'manajemen' => [
                'label' => 'Manajemen Rekayasa Konstruksi',
                'badge' => 'text-blue-800 bg-blue-50',
            ],
        ];
    }

    /**
     * @return array<string, string>
     */
    public static function kbkOptions(): array
    {
        return array_map(
            fn (array $meta): string => $meta['label'],
            static::kbkMeta()
        );
    }

    /**
     * @return array<string, string>
     */
    public static function profileRouteOptions(): array
    {
        return [
            'dosen.andhy-romdani' => 'Andhy Romdani',
            'dosen.sri-wanto' => 'Sri Wanto',
            'dosen.kartika-seinari' => 'Kartika Seinari Manggala',
            'dosen.shanti-astri-noviani' => 'Shanti Astri Noviani',
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'urutan' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function getKbkLabelAttribute(): string
    {
        return static::kbkMeta()[$this->kbk]['label'] ?? $this->kbk;
    }

    public function getBadgeClassAttribute(): string
    {
        return static::kbkMeta()[$this->kbk]['badge'] ?? 'text-slate-700 bg-slate-100';
    }

    public function getFotoUrlAttribute(): ?string
    {
        return static::resolvePublicUrl($this->foto);
    }
}
