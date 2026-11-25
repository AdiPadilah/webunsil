<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 500);
            $table->string('mahasiswa', 500)->nullable();
            $table->string('kategori')->default('lomba');
            $table->string('label_meta')->nullable();
            $table->string('tingkat')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('link_url', 500)->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
