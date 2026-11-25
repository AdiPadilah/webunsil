<?php

namespace App\Filament\Resources\Pengabdians\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PengabdianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Kegiatan Pengabdian (PkM)')
                ->description('Isi judul kegiatan dan tim pengabdian sesuai artikel atau laporan yang terbit.')
                ->schema([
                    TextInput::make('judul')
                        ->label('Judul Artikel / Kegiatan PkM')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('penulis')
                        ->label('Tim Penulis / Pelaksana')
                        ->placeholder('Contoh: Andhy Romdani, Empung, dkk.')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('nama_jurnal')
                        ->label('Nama Jurnal / Media Publikasi')
                        ->required(),
                    TextInput::make('tahun')
                        ->label('Tahun Terbit')
                        ->numeric()
                        ->default((int) date('Y'))
                        ->helperText('Kegiatan diurutkan otomatis dari tahun terbaru.'),
                ])
                ->columns(2),

            Section::make('Detail Terbitan, Indeksasi & Tautan')
                ->schema([
                    Select::make('index_type')
                        ->label('Jenis Publikasi')
                        ->options([
                            'PKM' => 'Jurnal PkM',
                            'SINTA' => 'SINTA',
                            'SCOPUS' => 'SCOPUS',
                            'PROCEEDING' => 'Prosiding',
                        ])
                        ->default('PKM')
                        ->required(),
                    TextInput::make('index_detail')
                        ->label('Detail Indeksasi')
                        ->placeholder('Contoh: Jurnal PkM UNSIL / SINTA · Diamond OA'),
                    TextInput::make('eyebrow')
                        ->label('Kategori Tampilan')
                        ->default('Publikasi Pengabdian Masyarakat'),
                    TextInput::make('volume')
                        ->label('Volume')
                        ->placeholder('Contoh: Volume 4'),
                    TextInput::make('terbitan')
                        ->label('Terbitan / Halaman')
                        ->placeholder('Contoh: Issue 1 (Hlm. 156–174), Mei 2026'),
                    TextInput::make('article_id')
                        ->label('Nomor Halaman / ID Artikel (Opsional)'),
                    TextInput::make('doi_label')
                        ->label('Label DOI / Tautan'),
                    TextInput::make('doi_url')
                        ->label('Link Artikel Lengkap')
                        ->url()
                        ->placeholder('https://jurnal.unsil.ac.id/... atau https://doi.org/...'),
                ])
                ->columns(2),

            Section::make('Cover & Status Tayang')
                ->schema([
                    FileUpload::make('cover')
                        ->label('Gambar Cover (Opsional)')
                        ->image()
                        ->disk('public')
                        ->directory('jurnal-covers'),
                    TextInput::make('cover_alt')
                        ->label('Keterangan Gambar (Opsional)'),
                    Toggle::make('is_published')
                        ->label('Tampilkan di Halaman Pengabdian?')
                        ->default(true)
                        ->columnSpanFull(),
                ])
                ->columns(2),
        ]);
    }
}
