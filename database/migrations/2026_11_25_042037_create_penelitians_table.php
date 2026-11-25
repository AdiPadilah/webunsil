<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 500);
            $table->text('penulis');
            $table->string('nama_jurnal');
            $table->string('volume')->nullable();
            $table->string('terbitan')->nullable();
            $table->string('index_type')->default('SINTA');
            $table->string('index_detail')->nullable();
            $table->string('eyebrow')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('doi_label')->nullable();
            $table->string('doi_url', 500)->nullable();
            $table->string('cover')->nullable();
            $table->string('cover_alt')->nullable();
            $table->string('article_id')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penelitians');
    }
};
