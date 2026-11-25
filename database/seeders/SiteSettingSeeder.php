<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        if (SiteSetting::query()->exists()) {
            return;
        }

        $defaults = SiteSetting::defaults();
        $source = public_path('images/koordinator-prodi.jpg');
        $target = 'settings/koordinator-prodi.jpg';

        if (is_file($source)) {
            if (! Storage::disk('public')->exists($target)) {
                Storage::disk('public')->put($target, file_get_contents($source));
            }
            $defaults['kaprodi_foto'] = $target;
        }

        SiteSetting::create($defaults);
    }
}
