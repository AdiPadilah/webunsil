<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('defense_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_id');
            $table->string('type'); // Seminar Proposal, Seminar Hasil, Sidang Akhir
            $table->text('title');
            $table->string('supervisor_1');
            $table->string('supervisor_2')->nullable();
            $table->string('examiner_1')->nullable();
            $table->string('examiner_2')->nullable();
            $table->string('room');
            $table->dateTime('date_time');
            $table->string('status')->default('Terjadwal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defense_schedules');
    }
};
