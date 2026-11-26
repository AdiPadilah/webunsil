<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->string('badge_peran')->nullable()->after('kbk');
            $table->string('jabatan_akademik')->nullable()->after('badge_peran');
            $table->string('jabatan_fungsional')->nullable()->after('jabatan_akademik');
            $table->string('nidn')->nullable()->after('jabatan_fungsional');
            $table->string('homebase')->nullable()->after('nidn');
            $table->string('email')->nullable()->after('homebase');
            $table->string('telepon')->nullable()->after('email');
            $table->string('cv_file')->nullable()->after('foto');
            $table->text('meta_description')->nullable()->after('cv_file');
            $table->longText('biografi')->nullable()->after('meta_description');
            $table->string('fokus_label_style')->nullable()->after('biografi');
            $table->json('tautan_riset')->nullable()->after('fokus_label_style');
            $table->json('ringkasan_statistik')->nullable()->after('tautan_riset');
            $table->json('fokus_keahlian')->nullable()->after('ringkasan_statistik');
            $table->json('pendidikan')->nullable()->after('fokus_keahlian');
            $table->json('keahlian_grup')->nullable()->after('pendidikan');
            $table->json('pengalaman_kerja')->nullable()->after('keahlian_grup');
            $table->json('penghargaan')->nullable()->after('pengalaman_kerja');
            $table->json('pelatihan')->nullable()->after('penghargaan');
            $table->json('pengajaran')->nullable()->after('pelatihan');
            $table->json('publikasi')->nullable()->after('pengajaran');
            $table->json('konferensi')->nullable()->after('publikasi');
            $table->json('pengabdian_list')->nullable()->after('konferensi');
            $table->json('roadmap')->nullable()->after('pengabdian_list');
            $table->json('bagian_tambahan')->nullable()->after('roadmap');
            $table->json('urutan_bagian')->nullable()->after('bagian_tambahan');
            $table->json('kata_kunci_riset')->nullable()->after('urutan_bagian');
            $table->boolean('sinkron_penelitian')->default(true)->after('kata_kunci_riset');
            $table->boolean('sinkron_pengabdian')->default(true)->after('sinkron_penelitian');
        });
    }

    public function down(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->dropColumn([
                'badge_peran',
                'jabatan_akademik',
                'jabatan_fungsional',
                'nidn',
                'homebase',
                'email',
                'telepon',
                'cv_file',
                'meta_description',
                'biografi',
                'fokus_label_style',
                'tautan_riset',
                'ringkasan_statistik',
                'fokus_keahlian',
                'pendidikan',
                'keahlian_grup',
                'pengalaman_kerja',
                'penghargaan',
                'pelatihan',
                'pengajaran',
                'publikasi',
                'konferensi',
                'pengabdian_list',
                'roadmap',
                'bagian_tambahan',
                'urutan_bagian',
                'kata_kunci_riset',
                'sinkron_penelitian',
                'sinkron_pengabdian',
            ]);
        });
    }
};
