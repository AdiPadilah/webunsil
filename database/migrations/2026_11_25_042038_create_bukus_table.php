<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 500);
            $table->string('penulis');
            $table->string('penulis_route')->nullable();
            $table->string('kategori')->default('non-fiksi');
            $table->string('label')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('isbn')->nullable();
            $table->string('cover')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
