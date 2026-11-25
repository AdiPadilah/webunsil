<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        $files = [
            ['title' => 'Buku Pedoman Penyusunan Skripsi & Tugas Akhir FT UNSIL', 'category' => 'Tugas Akhir / Skripsi', 'file_size' => '2.4 MB', 'file_path' => 'documents/pedoman-skripsi.pdf'],
            ['title' => 'Format & Template Penulisan Skripsi Mahasiswa Teknik Sipil', 'category' => 'Tugas Akhir / Skripsi', 'file_size' => '1.1 MB', 'file_path' => 'documents/template-skripsi.docx'],
            ['title' => 'Buku Panduan Pelaksanaan & Penulisan Laporan Kerja Praktik (KP)', 'category' => 'Kerja Praktik (KP)', 'file_size' => '1.8 MB', 'file_path' => 'documents/panduan-kp.pdf'],
            ['title' => 'Formulir Permohonan Izin Kerja Praktik ke Instansi / BUMN', 'category' => 'Formulir & Template', 'file_size' => '420 KB', 'file_path' => 'documents/form-izin-kp.docx'],
            ['title' => 'Modul Praktikum Teknologi Bahan Konstruksi (TBK)', 'category' => 'Laboratorium', 'file_size' => '3.5 MB', 'file_path' => 'documents/modul-tbk.pdf'],
            ['title' => 'Modul Praktikum Mekanika Tanah & Rekayasa Geoteknik', 'category' => 'Laboratorium', 'file_size' => '4.2 MB', 'file_path' => 'documents/modul-mektan.pdf'],
            ['title' => 'Modul Praktikum Perpetaan & Pengukuran Tanah (Ukur Tanah)', 'category' => 'Laboratorium', 'file_size' => '3.1 MB', 'file_path' => 'documents/modul-ukur-tanah.pdf'],
            ['title' => 'Standar Keselamatan dan Kesehatan Kerja (K3) Laboratorium Sipil', 'category' => 'Laboratorium', 'file_size' => '950 KB', 'file_path' => 'documents/sop-k3-lab.pdf'],
            ['title' => 'Formulir Bebas Laboratorium untuk Syarat Yudisium', 'category' => 'Formulir & Template', 'file_size' => '380 KB', 'file_path' => 'documents/form-bebas-lab.pdf'],
        ];

        foreach ($files as $f) {
            Document::updateOrCreate(
                ['title' => $f['title']],
                [
                    'category' => $f['category'],
                    'file_size' => $f['file_size'],
                    'file_path' => $f['file_path'],
                    'description' => 'Dokumen resmi Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.',
                    'download_count' => rand(15, 120),
                    'is_active' => true,
                ]
            );
        }
    }
}
