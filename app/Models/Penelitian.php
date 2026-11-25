<?php

namespace App\Models;

use App\Models\Concerns\ResolvesPublicImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use ResolvesPublicImage;

    protected $fillable = [
        'judul',
        'penulis',
        'nama_jurnal',
        'volume',
        'terbitan',
        'index_type',
        'index_detail',
        'eyebrow',
        'tahun',
        'doi_label',
        'doi_url',
        'cover',
        'cover_alt',
        'article_id',
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
