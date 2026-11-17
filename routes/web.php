<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita/seminar-internasional-indonesia-taiwan-2026', function () {
    return view('berita.seminar-taiwan');
})->name('berita.seminar-taiwan');
