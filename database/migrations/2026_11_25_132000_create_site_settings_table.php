<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('mahasiswa_aktif')->default(567);
            $table->unsignedInteger('total_lulusan')->default(1186);
            $table->unsignedInteger('prestasi_mahasiswa')->default(80);
            $table->unsignedInteger('aktivitas_dosen')->default(264);
            $table->string('kaprodi_nama')->default('Andhy Romdani, S.T., M.Eng., Ph.D.');
            $table->string('kaprodi_jabatan')->default('Ketua Program Studi Teknik Sipil');
            $table->string('kaprodi_foto')->nullable();
            $table->string('kaprodi_kutipan')->nullable();
            $table->longText('kaprodi_sambutan')->nullable();
            $table->string('akreditasi_peringkat')->default('BAIK');
            $table->string('akreditasi_lembaga')->default('LAM Teknik (Keteknikan)');
            $table->string('akreditasi_sk')->default('0182/SK/LAM Teknik/AS/VIII/2023');
            $table->string('akreditasi_berlaku')->default('21 Agustus 2023 - 20 Agustus 2028');
            $table->string('kontak_email')->default('sipil@unsil.ac.id');
            $table->string('jam_layanan')->default('Senin s.d. Jumat, 07.30 - 16.00 WIB');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
