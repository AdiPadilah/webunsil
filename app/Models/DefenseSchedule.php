<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefenseSchedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return array<string, string>
     */
    public static function typeOptions(): array
    {
        return [
            'Seminar Proposal' => 'Seminar Proposal',
            'Seminar Hasil' => 'Seminar Hasil',
            'Sidang Akhir Skripsi' => 'Sidang Akhir Skripsi',
        ];
    }

    /**
     * @return array<string, string>
     */
    public static function statusOptions(): array
    {
        return [
            'Terjadwal' => 'Terjadwal',
            'Sedang Berlangsung' => 'Sedang Berlangsung',
            'Selesai' => 'Selesai',
            'Ditunda' => 'Ditunda',
        ];
    }

    /**
     * @return array<int, string>
     */
    public static function roomSuggestions(): array
    {
        return [
            'Ruang Sidang FT',
            'Ruang Rapat FT',
            'Auditorium FT',
            'Aula FT',
            'Zoom Meeting',
        ];
    }

    public function getStatusBadgeClassAttribute(): string
    {
        return match ($this->status) {
            'Terjadwal' => 'bg-emerald-50 text-emerald-700 border border-emerald-200',
            'Sedang Berlangsung' => 'bg-amber-50 text-amber-700 border border-amber-200',
            'Selesai' => 'bg-blue-50 text-blue-700 border border-blue-200',
            'Ditunda' => 'bg-rose-50 text-rose-700 border border-rose-200',
            default => 'bg-slate-100 text-slate-600',
        };
    }

    protected function casts(): array
    {
        return [
            'date_time' => 'datetime',
        ];
    }
}
