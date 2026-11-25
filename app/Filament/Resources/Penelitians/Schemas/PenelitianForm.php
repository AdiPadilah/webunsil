<?php

namespace App\Filament\Resources\Penelitians\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PenelitianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('judul')->label('Judul Artikel')->required()->columnSpanFull(),
            TextInput::make('penulis')->label('Penulis')->required()->columnSpanFull(),
            TextInput::make('nama_jurnal')->label('Nama Jurnal / Prosiding')->required()->columnSpanFull(),
            Select::make('index_type')
                ->label('Jenis Indeksasi')
                ->options([
                    'SCOPUS' => 'SCOPUS',
                    'SINTA' => 'SINTA',
                    'PROCEEDING' => 'Prosiding',
                ])
                ->default('SINTA')
                ->required(),
            TextInput::make('index_detail')->label('Detail Indeksasi')->placeholder('Contoh: SCOPUS Q2, SINTA 3'),
            TextInput::make('eyebrow')
                ->label('Kategori Tampilan')
                ->default('Publikasi Jurnal Nasional')
                ->placeholder('Publikasi Jurnal Internasional / Nasional'),
            TextInput::make('volume')->label('Volume')->placeholder('Contoh: Volume 14'),
            TextInput::make('terbitan')->label('Terbitan / Issue')->placeholder('Contoh: Issue 1 (Hlm. 29–40), Juni 2026'),
            TextInput::make('tahun')->label('Tahun Terbit')->numeric()->default((int) date('Y')),
            TextInput::make('article_id')->label('Halaman / ID Artikel')->placeholder('Contoh: Hlm. 1–11'),
            TextInput::make('doi_label')->label('DOI / Tautan Label')->placeholder('Contoh: 10.xxxx/xxxxx'),
            TextInput::make('doi_url')->label('URL DOI Lengkap')->url()->placeholder('https://doi.org/10.xxxx/xxxxx'),
            FileUpload::make('cover')->label('Cover Jurnal (opsional)')->image()->disk('public')->directory('jurnal-covers'),
            TextInput::make('cover_alt')->label('Alt Text Cover'),
            Toggle::make('is_published')->label('Tampilkan di Website?')->default(true)->columnSpanFull(),
        ]);
    }
}
