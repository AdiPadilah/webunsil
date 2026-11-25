<?php

namespace App\Filament\Resources\Prestasis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PrestasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('judul')->label('Judul Prestasi / Kegiatan')->required()->columnSpanFull(),
            TextInput::make('mahasiswa')->label('Nama Mahasiswa / Tim')->columnSpanFull(),
            Select::make('kategori')
                ->label('Kategori Filter')
                ->options([
                    'lomba' => 'Kompetisi',
                    'publikasi' => 'Publikasi & Riset',
                    'jembatan' => 'Rancang Jembatan',
                ])
                ->default('lomba')
                ->required(),
            TextInput::make('label_meta')
                ->label('Label Atas Judul')
                ->placeholder('Contoh: Kompetisi Nasional • 26 Oktober 2023'),
            TextInput::make('tingkat')->label('Peringkat / Capaian')->placeholder('Contoh: Juara 1, Scopus Q1'),
            TextInput::make('tahun')->label('Tahun')->numeric()->default((int) date('Y')),
            TextInput::make('penyelenggara')->label('Penyelenggara / Lokasi'),
            TextInput::make('link_url')
                ->label('Tautan Berita Selengkapnya (Opsional)')
                ->placeholder('Contoh: /berita/tim-tirta-adhipermana-juara-1-national-paper-competition-2023 atau https://...'),
            Textarea::make('deskripsi')->label('Deskripsi Singkat')->rows(4)->columnSpanFull(),
            FileUpload::make('foto')->label('Foto Dokumentasi')->image()->disk('public')->directory('prestasi'),
            Toggle::make('is_published')->label('Tampilkan di Website?')->default(true)->columnSpanFull(),
        ]);
    }
}
