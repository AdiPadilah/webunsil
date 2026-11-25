<?php

namespace Database\Seeders;

use App\Models\DefenseSchedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DefenseScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $schedules = [
            [
                'student_name' => 'Fahmi Rahmat El Ghifari',
                'student_id' => '217011045',
                'type' => 'Sidang Akhir Skripsi',
                'title' => 'Analisis Stabilitas Lereng Menggunakan Geosintetik pada Ruas Jalan Tasikmalaya - Ciamis',
                'supervisor_1' => 'Dr. Ir. Empung, S.T., M.T.',
                'supervisor_2' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
                'examiner_1' => 'Ir. Nina Herlina, M.T.',
                'examiner_2' => 'Penguji Ahli Struktur, S.T., M.T.',
                'room' => 'Ruang Sidang Utama FT 2',
                'date_time' => Carbon::now()->addDays(2)->setTime(9, 0),
                'status' => 'Terjadwal',
            ],
            [
                'student_name' => 'Muhammad Raka El Ghifari',
                'student_id' => '217011012',
                'type' => 'Seminar Hasil',
                'title' => 'Evaluasi Kinerja Campuran Aspal Porus dengan Penambahan Limbah Plastik PET Terhadap Durabilitas Jalan',
                'supervisor_1' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
                'supervisor_2' => 'Dosen Pembimbing Kedua, S.T., M.T.',
                'examiner_1' => 'Dr. Ir. Empung, S.T., M.T.',
                'examiner_2' => 'Dosen Penguji Transportasi, M.T.',
                'room' => 'Lab Komputasi & Rekayasa Sipil',
                'date_time' => Carbon::now()->addDays(3)->setTime(13, 30),
                'status' => 'Terjadwal',
            ],
            [
                'student_name' => 'Siti Nurhaliza',
                'student_id' => '227011088',
                'type' => 'Seminar Proposal',
                'title' => 'Perencanaan Sistem Drainase Berkelanjutan (SUDS) Menggunakan Sumur Resapan di Kawasan Kampus Mugarsari',
                'supervisor_1' => 'Dosen Hidro Pembimbing, S.T., M.T.',
                'supervisor_2' => 'Pembimbing Pendamping, S.T., M.Eng.',
                'examiner_1' => 'Dr. Ir. Empung, S.T., M.T.',
                'examiner_2' => 'Andhy Romdani, S.T., M.Eng., Ph.D.',
                'room' => 'Ruang Rapat Departemen Sipil',
                'date_time' => Carbon::now()->addDays(5)->setTime(10, 0),
                'status' => 'Terjadwal',
            ],
        ];

        foreach ($schedules as $s) {
            DefenseSchedule::updateOrCreate(['student_id' => $s['student_id'], 'type' => $s['type']], $s);
        }
    }
}
