<?php

namespace App\Models;

use App\Models\Concerns\ResolvesPublicImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class SiteSetting extends Model
{
    use ResolvesPublicImage;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'mahasiswa_aktif' => 'integer',
            'total_lulusan' => 'integer',
            'prestasi_mahasiswa' => 'integer',
            'aktivitas_dosen' => 'integer',
        ];
    }

    /**
     * Default real UNSIL program study profile values.
     *
     * @return array<string, mixed>
     */
    public static function defaults(): array
    {
        return [
            'mahasiswa_aktif' => 567,
            'total_lulusan' => 1186,
            'prestasi_mahasiswa' => 80,
            'aktivitas_dosen' => 264,
            'kaprodi_nama' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
            'kaprodi_jabatan' => 'Ketua Program Studi Teknik Sipil',
            'kaprodi_foto' => 'images/koordinator-prodi.jpg',
            'kaprodi_kutipan' => null,
            'kaprodi_sambutan' => "Perkembangan teknologi, transformasi digital, dan tantangan lingkungan terus mengubah wajah dunia teknik sipil. Kondisi ini membuka peluang baru bagi pengembangan ilmu pengetahuan, inovasi rekayasa, dan solusi infrastruktur yang lebih cerdas, tangguh, serta berkelanjutan. Teknik Sipil Universitas Siliwangi hadir sebagai ruang akademik untuk mengeksplorasi potensi tersebut melalui pendidikan, penelitian, dan pengembangan teknologi.\n\nKe depan, pengembangan program studi diarahkan pada penguatan kualitas pendidikan, riset inovatif, pemanfaatan teknologi, serta kolaborasi dengan berbagai mitra di tingkat nasional dan internasional. Lingkungan akademik yang terbuka dan kolaboratif menjadi fondasi untuk mendorong lahirnya gagasan, karya, dan kontribusi yang relevan dengan perkembangan dunia rekayasa. Peningkatan mutu dan daya saing akademik menjadi bagian penting dalam perjalanan menuju program studi yang semakin progresif dan berwawasan global.\n\nMasa depan Teknik Sipil Universitas Siliwangi dibangun melalui semangat untuk terus belajar, berinovasi, berkolaborasi, dan memberikan dampak nyata. Setiap gagasan, penelitian, prestasi, dan kontribusi sivitas akademika merupakan bagian dari perjalanan tersebut. Mari menjadi bagian dari perjalanan Teknik Sipil UNSIL dalam membangun pengetahuan, menciptakan inovasi, dan menghadirkan masa depan infrastruktur yang lebih baik.",
            'akreditasi_peringkat' => 'BAIK',
            'akreditasi_lembaga' => 'LAM Teknik (Keteknikan)',
            'akreditasi_sk' => '0182/SK/LAM Teknik/AS/VIII/2023',
            'akreditasi_berlaku' => '21 Agustus 2023 - 20 Agustus 2028',
            'kontak_email' => 'sipil@unsil.ac.id',
            'jam_layanan' => 'Senin s.d. Jumat, 07.30 - 16.00 WIB',
        ];
    }

    public static function current(): self
    {
        try {
            if (Schema::hasTable('site_settings')) {
                $existing = static::query()->latest('id')->first();
                if ($existing) {
                    return $existing;
                }
            }
        } catch (\Throwable) {
            // Fallback gracefully before migrations run.
        }

        return new self(static::defaults());
    }

    public function getKaprodiFotoUrlAttribute(): string
    {
        return static::resolvePublicUrl($this->kaprodi_foto) ?? asset('images/koordinator-prodi.jpg');
    }
}
