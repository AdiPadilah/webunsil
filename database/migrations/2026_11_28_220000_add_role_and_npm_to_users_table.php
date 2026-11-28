<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('mahasiswa')->after('email');
            $table->string('npm')->nullable()->unique()->after('role');
            $table->boolean('is_active')->default(true)->after('npm');
        });

        // Set existing users to super_admin
        User::query()->update(['role' => 'super_admin', 'is_active' => true]);

        // Create sample demo student if not exists
        if (! User::where('email', 'mahasiswa@unsil.ac.id')->exists()) {
            User::create([
                'name' => 'Mahasiswa Teknik Sipil',
                'email' => 'mahasiswa@unsil.ac.id',
                'npm' => '217002001',
                'password' => bcrypt('mahasiswa123'),
                'role' => 'mahasiswa',
                'is_active' => true,
            ]);
        }
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'npm', 'is_active']);
        });
    }
};
