<?php

namespace App\Models;

use App\Models\Concerns\ResolvesPublicImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use ResolvesPublicImage;

    protected $fillable = [
        'judul',
        'mahasiswa',
        'kategori',
        'label_meta',
        'tingkat',
        'tahun',
        'penyelenggara',
        'deskripsi',
        'foto',
        'link_url',
        'is_published',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'tahun' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function getFotoUrlAttribute(): ?string
    {
        return static::resolvePublicUrl($this->foto);
    }
}
