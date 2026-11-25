<?php

namespace App\Models;

use App\Models\Concerns\ResolvesPublicImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use ResolvesPublicImage;

    protected $fillable = [
        'judul',
        'penulis',
        'penulis_route',
        'kategori',
        'label',
        'tahun',
        'isbn',
        'cover',
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

    public function getCoverUrlAttribute(): ?string
    {
        return static::resolvePublicUrl($this->cover);
    }
}
