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
    $articles = \App\Models\Article::where('is_published', true)
        ->orderBy('published_at', 'desc')
        ->take(3)
        ->get();
    return view('pages.home', compact('articles'));
})->name('home');

// 2. Tentang Kami (Hub Page sesuai layout ITS)
Route::get('/tentang-kami', function () {
    $articles = \App\Models\Article::where('is_published', true)
        ->orderBy('published_at', 'desc')
        ->take(3)
        ->get();
    return view('pages.tentang-kami', compact('articles'));
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

// Profil Dosen Spesifik: Andhy Romdani
Route::get('/dosen/andhy-romdani', function () {
    return view('pages.dosen.andhy-romdani');
})->name('dosen.andhy-romdani');

// 5. Akademik (Hub Page sesuai layout ITS)
Route::get('/akademik', function () {
    return view('pages.akademik');
})->name('akademik');

// 6. Kurikulum & Pembelajaran
Route::get('/kurikulum', function () {
    return view('pages.kurikulum');
})->name('kurikulum');

// Prestasi Mahasiswa
Route::get('/prestasi-mahasiswa', function () {
    return view('pages.prestasi-mahasiswa');
})->name('prestasi-mahasiswa');

// 6. Layanan Terpadu
Route::get('/layanan', function () {
    return redirect()->away('https://s.id/Tugas-akhir-TSipil');
})->name('layanan');

// 7. Redirect Download ke Layanan Terpadu
Route::redirect('/download', '/layanan');

// 8. Fasilitas (Hub Page)
Route::get('/fasilitas', function () {
    return view('pages.fasilitas');
})->name('fasilitas');

// 8a. Turunan Fasilitas: Laboratorium
Route::get('/laboratorium', function () {
    return view('pages.laboratorium');
})->name('laboratorium');

// 8b. Turunan Fasilitas: Kelas
Route::get('/kelas', function () {
    return view('pages.kelas');
})->name('kelas');

// 8c. Turunan Fasilitas: Aula
Route::get('/aula', function () {
    return view('pages.aula');
})->name('aula');

// 8d. Turunan Fasilitas: Kantin
Route::get('/kantin', function () {
    return view('pages.kantin');
})->name('kantin');

// 8e. Turunan Fasilitas: Auditorium
Route::get('/auditorium', function () {
    return view('pages.auditorium');
})->name('auditorium');

// 8f. Turunan Fasilitas: Ruang Rapat
Route::get('/ruang-rapat', function () {
    return view('pages.ruang-rapat');
})->name('ruang-rapat');

// 9. Riset dan Kolaborasi (Hub Page)
Route::get('/riset', function () {
    return view('pages.riset');
})->name('riset');

// 9a. Turunan Riset & Kolaborasi: Penelitian
Route::get('/penelitian', function () {
    return view('pages.penelitian');
})->name('penelitian');

// 9b. Turunan Riset & Kolaborasi: Kolaborasi
Route::get('/kolaborasi', function () {
    return view('pages.kolaborasi');
})->name('kolaborasi');

// 9c. Turunan Riset & Kolaborasi: Pengabdian (PkM)
Route::get('/pengabdian', function () {
    return view('pages.pengabdian');
})->name('pengabdian');

// 9d. Turunan Penelitian / Riset: Buku
Route::get('/buku', function () {
    return view('pages.buku');
})->name('buku');

// 9e. Turunan Penelitian / Riset: Publikasi
Route::get('/publikasi', function () {
    return view('pages.publikasi');
})->name('publikasi');

// 10. Karya Dosen
Route::get('/karya-dosen', function () {
    return view('pages.karya-dosen');
})->name('karya-dosen');

// 11. Mahasiswa dan Alumni
Route::get('/mahasiswa-alumni', function () {
    return view('pages.mahasiswa-alumni');
})->name('mahasiswa-alumni');

// 11a. Alur Pengurusan Kerja Praktik & Skripsi
Route::get('/alur-pengurusan-kerja-praktik', function () {
    return view('pages.alur-pengurusan-kerja-praktik');
})->name('alur-pengurusan-kerja-praktik');

Route::get('/alur-pengurusan-kp-skripsi', function () {
    return view('pages.alur-pengurusan-kp-skripsi');
})->name('alur-pengurusan-kp-skripsi');

// 11b. Jadwal Sidang Skripsi
Route::get('/jadwal-sidang-skripsi', function () {
    $schedules = \App\Models\DefenseSchedule::orderBy('date_time', 'asc')->get();
    return view('pages.jadwal-sidang-skripsi', compact('schedules'));
})->name('jadwal-sidang-skripsi');

// 11c. Seminar Proposal
Route::get('/seminar-proposal', function () {
    return view('pages.seminar-proposal');
})->name('seminar-proposal');

// 11d. Seminar Hasil
Route::get('/seminar-hasil', function () {
    return view('pages.seminar-hasil');
})->name('seminar-hasil');

// 11e. Sidang Akhir
Route::get('/sidang-akhir', function () {
    return view('pages.sidang-akhir');
})->name('sidang-akhir');

// 12. Portal Berita & Informasi
Route::get('/berita', function () {
    $articles = \App\Models\Article::where('is_published', true)
        ->orderBy('published_at', 'desc')
        ->paginate(9);
    return view('pages.berita', compact('articles'));
})->name('berita.index');

Route::get('/berita/detail/{slug}', function ($slug) {
    $article = \App\Models\Article::where('slug', $slug)->firstOrFail();
    $article->increment('views');
    return view('pages.berita-detail', compact('article'));
})->name('berita.show');

// Berita & Informasi Spesifik
Route::get('/berita/seminar-internasional-indonesia-taiwan-2026', function () {
    return view('berita.seminar-taiwan');
})->name('berita.seminar-taiwan');

Route::get('/berita/kompetisi-jembatan-nasional-science-2026', function () {
    return view('berita.kompetisi-jembatan');
})->name('berita.kompetisi-jembatan');

Route::get('/berita/seminar-nasional-science-2026-jalan-tol-berkelanjutan', function () {
    return view('berita.seminar-jalan-tol');
})->name('berita.seminar-jalan-tol');

Route::get('/berita/kunjungan-ilmiah-bendungan-leuwikeris', function () {
    return view('berita.kunjungan-leuwikeris');
})->name('berita.kunjungan-leuwikeris');

Route::get('/berita/pelepasan-calon-wisudawan-teknik-sipil', function () {
    return view('berita.wisuda-sarjana');
})->name('berita.wisuda-sarjana');

Route::get('/berita/kuliah-tamu-bim-infrastruktur-modern', function () {
    return view('berita.kuliah-tamu-bim');
})->name('berita.kuliah-tamu-bim');

Route::get('/berita/workshop-penguatan-kurikulum-obe-2026', function () {
    return view('berita.workshop-obe');
})->name('berita.workshop-obe');

// Berita dari unsil.ac.id — Teknik Sipil
Route::get('/berita/fahmi-rahmat-el-ghifari-teknik-sipil-scopus', function () {
    return view('berita.fahmi-rahmat');
})->name('berita.fahmi-rahmat');

Route::get('/berita/muhammad-raka-el-ghifari-lulusan-scopus-teknik-sipil-unsil', function () {
    return view('berita.muhammad-raka');
})->name('berita.muhammad-raka');

Route::get('/berita/tim-tirta-adhipermana-juara-1-national-paper-competition-2023', function () {
    return view('berita.tirta-adhipermana');
})->name('berita.tirta-adhipermana');

Route::get('/berita/hathi-fgd-sedimentasi-segara-anakan-teknik-sipil-unsil-2024', function () {
    return view('berita.hathi-segara-anakan');
})->name('berita.hathi-segara-anakan');

Route::get('/berita/seminar-nasional-hathi-sumber-daya-air-berkelanjutan-2024', function () {
    return view('berita.seminar-hathi-air');
})->name('berita.seminar-hathi-air');

Route::get('/berita/dosen-penguji-eksternal-seminar-hasil-disertasi-uns-2026', function () {
    return view('berita.seminar-hasil-uns');
})->name('berita.seminar-hasil-uns');

Route::get('/berita/workshop-penulisan-artikel-jurnal-internasional-q1-pasti-2026', function () {
    return view('berita.workshop-pasti-q1');
})->name('berita.workshop-pasti-q1');
