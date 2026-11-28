<?php

namespace App\Filament\Resources\Penelitians\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PenelitianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Artikel & Penulis')
                ->description('Isi data utama penelitian sesuai artikel yang terbit.')
                ->schema([
                    TextInput::make('judul')
                        ->label('Judul Artikel')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('penulis')
                        ->label('Daftar Penulis')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('nama_jurnal')
                        ->label('Nama Jurnal / Prosiding')
                        ->required(),
                    TextInput::make('tahun')
                        ->label('Tahun Terbit')
                        ->numeric()
                        ->default((int) date('Y')),
                ])
                ->columns(2),

            Section::make('Detail Terbitan, Indeksasi & Tautan')
                ->description('Lengkapi peringkat indeksasi (SCOPUS/SINTA) dan tautan DOI bila tersedia.')
                ->schema([
                    Select::make('index_type')
                        ->label('Jenis Indeksasi')
                        ->options([
                            'SCOPUS' => 'SCOPUS',
                            'SINTA' => 'SINTA',
                            'PROCEEDING' => 'Prosiding',
                        ])
                        ->default('SINTA')
                        ->required(),
                    TextInput::make('index_detail')
                        ->label('Detail Peringkat')
                        ->placeholder('Contoh: SCOPUS Q1, SINTA 4 · UNSIL'),
                    TextInput::make('eyebrow')
                        ->label('Kategori Tampilan')
                        ->default('Publikasi Jurnal Nasional')
                        ->placeholder('Publikasi Jurnal Internasional / Nasional'),
                    TextInput::make('volume')
                        ->label('Volume')
                        ->placeholder('Contoh: Volume 14 / Ahead-of-Print'),
                    TextInput::make('terbitan')
                        ->label('Terbitan / Halaman')
                        ->placeholder('Contoh: Issue 1 (Hlm. 29–40), Juni 2026'),
                    TextInput::make('article_id')
                        ->label('Nomor Halaman / ID Artikel (Opsional)')
                        ->placeholder('Contoh: Hlm. 1–11'),
                    TextInput::make('doi_label')
                        ->label('Nomor DOI')
                        ->placeholder('Contoh: 10.1080/15715124.2025.2551574'),
                    TextInput::make('doi_url')
                        ->label('Link Artikel / DOI')
                        ->url()
                        ->placeholder('https://doi.org/10.xxxx/xxxxx')
                        ->helperText('Awali dengan https:// agar bisa langsung diklik pembaca.'),
                ])
                ->columns(2),

            Section::make('Cover Jurnal & Status Tayang')
                ->schema([
                    FileUpload::make('cover')
                        ->label('Gambar Cover Jurnal (Opsional)')
                        ->image()
                        ->disk('public')
                        ->directory('jurnal-covers')
                        ->helperText('Rasio vertikal (3:4) paling rapi. Kosongkan jika belum ada.'),
                    TextInput::make('cover_alt')
                        ->label('Keterangan Gambar (Opsional)')
                        ->placeholder('Contoh: Cover Jurnal Natural Hazards Research'),
                    Toggle::make('is_published')
                        ->label('Tampilkan di Halaman Penelitian?')
                        ->helperText('Matikan sementara jika masih draft dan belum ingin tampil di website.')
                        ->default(true)
                        ->columnSpanFull(),
                ])
                ->columns(2),
        ]);
    }
}
