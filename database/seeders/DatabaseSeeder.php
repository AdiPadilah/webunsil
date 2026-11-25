<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'adminUnsil@ac.id'],
            [
                'name' => 'Admin UNSIL',
                'password' => bcrypt('password123'),
            ]
        );

        $this->call([
            ArticleSeeder::class,
            DefenseScheduleSeeder::class,
            PenelitianSeeder::class,
            PengabdianSeeder::class,
            BukuSeeder::class,
            PrestasiSeeder::class,
            DosenSeeder::class,
        ]);
    }
}
