<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        $dosens = [
            // Rekayasa Sumber Daya Air
            ['slug' => 'empung', 'nama' => 'Dr. Ir. Empung, S.T., M.T.', 'kbk' => 'keairan', 'profile_route' => null],
            ['slug' => 'andhy-romdani', 'nama' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'kbk' => 'keairan', 'profile_route' => 'dosen.andhy-romdani'],
            ['slug' => 'pengki-irawan', 'nama' => 'Ir. Pengki Irawan, S.TP., M.Si.', 'kbk' => 'keairan', 'profile_route' => null],
            ['slug' => 'novia-komala-sari', 'nama' => 'Novia Komala Sari, S.Pd., M.T.', 'kbk' => 'keairan', 'profile_route' => null],
            ['slug' => 'galih-rahmat-jatnika', 'nama' => 'Galih Rahmat Jatnika, S.T., M.T.', 'kbk' => 'keairan', 'profile_route' => null],
            ['slug' => 'raden-roro-dita', 'nama' => 'Raden Roro Dita Arviananda, S.Pd., M.Eng.', 'kbk' => 'keairan', 'profile_route' => null],

            // Rekayasa Transportasi dan Jalan Raya
            ['slug' => 'nina-herlina', 'nama' => 'Ir. Nina Herlina, Dra., M.T.', 'kbk' => 'transportasi', 'profile_route' => null],
            ['slug' => 'herianto', 'nama' => 'Herianto, S.T., M.T.', 'kbk' => 'transportasi', 'profile_route' => null],
            ['slug' => 'hendra', 'nama' => 'Ir. Hendra, S.T., M.Sc.', 'kbk' => 'transportasi', 'profile_route' => null],
            ['slug' => 'gary-raya-prima', 'nama' => 'Dr. Gary Raya Prima, S.Pd., M.T.', 'kbk' => 'transportasi', 'profile_route' => null],
            ['slug' => 'muhamad-anugerah', 'nama' => 'Muhamad Anugerah Ramadhan, S.T., M.T.', 'kbk' => 'transportasi', 'profile_route' => null],
            ['slug' => 'indrajathie-aziz', 'nama' => 'Indrajathie Aziz, S.T., M.T.', 'kbk' => 'transportasi', 'profile_route' => null],
            ['slug' => 'kartika-seinari', 'nama' => 'Kartika Seinari Manggala, S.T., M.T.', 'kbk' => 'transportasi', 'profile_route' => null],

            // Rekayasa Struktur dan Bahan
            ['slug' => 'yusep-ramdani', 'nama' => 'Dr. Ir. Yusep Ramdani, S.T., M.T.', 'kbk' => 'struktur', 'profile_route' => null],
            ['slug' => 'rosi-nursani', 'nama' => 'Rosi Nursani, S.T., M.T.', 'kbk' => 'struktur', 'profile_route' => null],
            ['slug' => 'syarif-al-huseiny', 'nama' => 'Mohammad Syarif Al-Huseiny, S.T., M.T.', 'kbk' => 'struktur', 'profile_route' => null],
            ['slug' => 'intan-nuriskha', 'nama' => 'Intan Nuriskha Rachma, S.T., M.T.', 'kbk' => 'struktur', 'profile_route' => null],
            ['slug' => 'sri-wanto', 'nama' => 'Sri Wanto, S.T., M.T.', 'kbk' => 'struktur', 'profile_route' => 'dosen.sri-wanto'],

            // Rekayasa Geoteknik
            ['slug' => 'iman-handiman', 'nama' => 'Dr. Ir. Iman Handiman, S.T., M.T.', 'kbk' => 'geoteknik', 'profile_route' => null],
            ['slug' => 'fitriana-sarifah', 'nama' => 'Ir. Fitriana Sarifah, S.T., M.T.', 'kbk' => 'geoteknik', 'profile_route' => null],
            ['slug' => 'zakwan-gusnadi', 'nama' => 'Zakwan Gusnadi, S.T., M.T.', 'kbk' => 'geoteknik', 'profile_route' => null],

            // Manajemen Rekayasa Konstruksi
            ['slug' => 'hidayanto', 'nama' => 'Hidayanto, S.T., M.T.', 'kbk' => 'manajemen', 'profile_route' => null],
            ['slug' => 'shanti-astri-noviani', 'nama' => 'Shanti Astri Noviani, S.Pd., M.T.', 'kbk' => 'manajemen', 'profile_route' => null],
            ['slug' => 'ridha-al-mustafa', 'nama' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.', 'kbk' => 'manajemen', 'profile_route' => null],
        ];

        foreach ($dosens as $index => $row) {
            $source = public_path('images/dosen/' . $row['slug'] . '.jpg');
            $target = 'dosen/' . $row['slug'] . '.jpg';

            if (is_file($source)) {
                if (! Storage::disk('public')->exists($target) || Storage::disk('public')->size($target) !== filesize($source)) {
                    Storage::disk('public')->put($target, file_get_contents($source));
                }

                $row['foto'] = $target;
            }

            Dosen::updateOrCreate(
                ['slug' => $row['slug']],
                array_merge($row, [
                    'urutan' => $index + 1,
                    'is_published' => true,
                ])
            );
        }
    }
}
