<?php

namespace App\Filament\Resources\Prestasis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PrestasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Prestasi Mahasiswa')
                ->description('Isi capaian kompetisi, publikasi ilmiah mahasiswa, atau kegiatan lomba rekayasa.')
                ->schema([
                    TextInput::make('judul')
                        ->label('Judul Prestasi / Kompetisi')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('mahasiswa')
                        ->label('Nama Mahasiswa / Tim')
                        ->placeholder('Contoh: Fahmi Rahmat Amanulloh / Tim Tirta Adhipermana')
                        ->columnSpanFull(),
                    Select::make('kategori')
                        ->label('Kategori Filter Website')
                        ->options([
                            'lomba' => 'Kompetisi',
                            'publikasi' => 'Publikasi & Riset',
                            'jembatan' => 'Rancang Jembatan',
                        ])
                        ->default('lomba')
                        ->required(),
                    TextInput::make('tingkat')
                        ->label('Peringkat / Capaian')
                        ->placeholder('Contoh: Juara 1 Nasional / Scopus Q1'),
                    TextInput::make('label_meta')
                        ->label('Teks Keterangan Atas Judul')
                        ->placeholder('Contoh: Kompetisi Nasional • 26 Oktober 2023'),
                    TextInput::make('tahun')
                        ->label('Tahun')
                        ->numeric()
                        ->default((int) date('Y')),
                    TextInput::make('penyelenggara')
                        ->label('Penyelenggara / Lokasi'),
                    TextInput::make('link_url')
                        ->label('Tautan Berita Selengkapnya (Opsional)')
                        ->placeholder('Kosongkan jika tidak ada link berita detail')
                        ->helperText('Boleh link penuh (https://...) atau path internal (/berita/...).'),
                    Textarea::make('deskripsi')
                        ->label('Cerita / Deskripsi Singkat Prestasi')
                        ->rows(4)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Foto Dokumentasi & Status Tayang')
                ->schema([
                    FileUpload::make('foto')
                        ->label('Upload Foto Dokumentasi (Opsional)')
                        ->image()
                        ->disk('public')
                        ->directory('prestasi'),
                    Toggle::make('is_published')
                        ->label('Tampilkan di Halaman Prestasi?')
                        ->default(true),
                ]),
        ]);
    }
}
