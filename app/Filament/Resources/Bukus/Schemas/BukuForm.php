<?php

namespace App\Filament\Resources\Bukus\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BukuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Identitas Buku & Penulis')
                ->description('Data buku akan tampil pada katalog Buku Ajar & Referensi Dosen dan bisa dicari langsung.')
                ->schema([
                    TextInput::make('judul')
                        ->label('Judul Buku')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('penulis')
                        ->label('Nama Penulis (dengan gelar)')
                        ->placeholder('Contoh: Andhy Romdani, S.T., M.Eng., Ph.D.')
                        ->required(),
                    Select::make('penulis_route')
                        ->label('Tautkan ke Halaman Biodata Dosen (Opsional)')
                        ->options([
                            'dosen.andhy-romdani' => 'Profil Andhy Romdani',
                            'dosen.sri-wanto' => 'Profil Sri Wanto',
                        ])
                        ->placeholder('Tidak perlu ditautkan')
                        ->nullable(),
                    Select::make('kategori')
                        ->label('Kategori Buku')
                        ->options([
                            'non-fiksi' => 'Buku Ajar / Non-Fiksi',
                            'fiksi' => 'Fiksi / Novel',
                        ])
                        ->default('non-fiksi')
                        ->required(),
                    TextInput::make('label')
                        ->label('Label Badge')
                        ->default('Non-Fiksi')
                        ->placeholder('Non-Fiksi / Novel Fiksi'),
                    TextInput::make('tahun')
                        ->label('Tahun Terbit (Opsional)')
                        ->numeric(),
                    TextInput::make('isbn')
                        ->label('Nomor ISBN')
                        ->placeholder('Contoh: 978-623-xxxx-xx-x'),
                ])
                ->columns(2),

            Section::make('Cover Buku & Status Tayang')
                ->schema([
                    FileUpload::make('cover')
                        ->label('Upload Gambar Cover Buku (Opsional)')
                        ->image()
                        ->disk('public')
                        ->directory('buku-covers')
                        ->helperText('Jika tidak diunggah, website menampilkan sampul bawaan biru Teknik Sipil.'),
                    Toggle::make('is_published')
                        ->label('Tampilkan di Halaman Buku?')
                        ->default(true),
                ]),
        ]);
    }
}
