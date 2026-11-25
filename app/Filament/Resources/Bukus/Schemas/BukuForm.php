<?php

namespace App\Filament\Resources\Bukus\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BukuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('judul')->label('Judul Buku')->required()->columnSpanFull(),
            TextInput::make('penulis')->label('Nama Penulis (dengan gelar)')->required(),
            Select::make('penulis_route')
                ->label('Tautan Profil Dosen (Opsional)')
                ->options([
                    'dosen.andhy-romdani' => 'Profil Andhy Romdani',
                    'dosen.sri-wanto' => 'Profil Sri Wanto',
                ])
                ->placeholder('Tidak ada tautan profil')
                ->nullable(),
            Select::make('kategori')
                ->label('Kategori')
                ->options([
                    'non-fiksi' => 'Buku Ajar / Non-Fiksi',
                    'fiksi' => 'Fiksi / Novel',
                ])
                ->default('non-fiksi')
                ->required(),
            TextInput::make('label')->label('Label Badge')->default('Non-Fiksi')->placeholder('Non-Fiksi / Novel Fiksi'),
            TextInput::make('tahun')->label('Tahun Terbit')->numeric(),
            TextInput::make('isbn')->label('ISBN')->placeholder('Contoh: 978-623-xxxx-xx-x'),
            FileUpload::make('cover')->label('Cover Buku')->image()->disk('public')->directory('buku-covers'),
            Toggle::make('is_published')->label('Tampilkan di Website?')->default(true)->columnSpanFull(),
        ]);
    }
}
