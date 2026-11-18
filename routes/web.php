<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Program Studi S-1 Teknik Sipil FT Universitas Siliwangi
|--------------------------------------------------------------------------
| Setiap menu di navbar kini memiliki rute dan halaman tersendiri yang
| terpisah secara mandiri.
*/

// 1. Beranda
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 2. Tentang Kami (Hub Page sesuai layout ITS)
Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

// 3. Visi & Misi
Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');

// 3. Sejarah Program Studi
Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');

// 4. Dosen & Tenaga Pengajar
Route::get('/dosen', function () {
    return view('pages.dosen');
})->name('dosen');

// 5. Akademik (Hub Page sesuai layout ITS)
Route::get('/akademik', function () {
    return view('pages.akademik');
})->name('akademik');

// 6. Kurikulum & Pembelajaran
Route::get('/kurikulum', function () {
    return view('pages.kurikulum');
})->name('kurikulum');

// 6. Layanan Terpadu
Route::get('/layanan', function () {
    return view('pages.layanan');
})->name('layanan');

// 7. Pusat Unduhan (Download)
Route::get('/download', function () {
    return view('pages.download');
})->name('download');

// 8. Fasilitas Laboratorium
Route::get('/fasilitas', function () {
    return view('pages.fasilitas');
})->name('fasilitas');

// 9. Riset dan Kolaborasi
Route::get('/riset', function () {
    return view('pages.riset');
})->name('riset');

// 10. Karya Dosen
Route::get('/karya-dosen', function () {
    return view('pages.karya-dosen');
})->name('karya-dosen');

// 11. Mahasiswa dan Alumni
Route::get('/mahasiswa-alumni', function () {
    return view('pages.mahasiswa-alumni');
})->name('mahasiswa-alumni');

// Berita & Informasi Spesifik
Route::get('/berita/seminar-internasional-indonesia-taiwan-2026', function () {
    return view('berita.seminar-taiwan');
})->name('berita.seminar-taiwan');
