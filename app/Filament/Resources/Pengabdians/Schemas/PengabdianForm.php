<?php

namespace App\Filament\Resources\Pengabdians\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PengabdianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('judul')->label('Judul Artikel PkM')->required()->columnSpanFull(),
            TextInput::make('penulis')->label('Penulis / Tim')->required()->columnSpanFull(),
            TextInput::make('nama_jurnal')->label('Nama Jurnal / Prosiding')->required()->columnSpanFull(),
            Select::make('index_type')
                ->label('Jenis Indeksasi')
                ->options([
                    'PKM' => 'Jurnal PkM',
                    'SINTA' => 'SINTA',
                    'SCOPUS' => 'SCOPUS',
                    'PROCEEDING' => 'Prosiding',
                ])
                ->default('PKM')
                ->required(),
            TextInput::make('index_detail')->label('Detail Indeksasi')->placeholder('Contoh: Jurnal PkM UNSIL / SINTA · Diamond OA'),
            TextInput::make('eyebrow')
                ->label('Kategori Tampilan')
                ->default('Publikasi Pengabdian Masyarakat')
                ->placeholder('Publikasi Pengabdian Masyarakat'),
            TextInput::make('volume')->label('Volume')->placeholder('Contoh: Volume 4'),
            TextInput::make('terbitan')->label('Terbitan / Issue')->placeholder('Contoh: Issue 1 (Hlm. 156–174), Mei 2026'),
            TextInput::make('tahun')->label('Tahun Terbit')->numeric()->default((int) date('Y')),
            TextInput::make('article_id')->label('Halaman / ID Artikel')->placeholder('Contoh: Hlm. 156–174'),
            TextInput::make('doi_label')->label('DOI / Tautan Label'),
            TextInput::make('doi_url')->label('URL DOI / Jurnal Lengkap')->url(),
            FileUpload::make('cover')->label('Cover Jurnal (opsional)')->image()->disk('public')->directory('jurnal-covers'),
            TextInput::make('cover_alt')->label('Alt Text Cover'),
            Toggle::make('is_published')->label('Tampilkan di Website?')->default(true)->columnSpanFull(),
        ]);
    }
}
