<?php

namespace App\Filament\Resources\Dosens\Schemas;

use App\Models\Dosen;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class DosenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                ->label('Nama Lengkap & Gelar')
                ->placeholder('Contoh: Dr. Ir. Empung, S.T., M.T.')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(function (?string $state, callable $set, ?string $operation): void {
                    if ($operation === 'create' && filled($state)) {
                        $set('slug', Str::slug($state));
                    }
                })
                ->columnSpanFull(),

            TextInput::make('slug')
                ->label('Slug URL')
                ->required()
                ->unique(ignoreRecord: true),

            Select::make('kbk')
                ->label('Kelompok Bidang Keahlian (KBK)')
                ->options(Dosen::kbkOptions())
                ->required(),

            Select::make('profile_route')
                ->label('Halaman Biodata Khusus (Opsional)')
                ->options([
                    'dosen.andhy-romdani' => 'Biodata Andhy Romdani',
                    'dosen.sri-wanto' => 'Biodata Sri Wanto',
                ])
                ->placeholder('Tidak ada halaman khusus')
                ->nullable(),

            TextInput::make('urutan')
                ->label('Urutan Tampil')
                ->numeric()
                ->default(0),

            FileUpload::make('foto')
                ->label('Foto Profil (Persegi 1:1)')
                ->image()
                ->disk('public')
                ->directory('dosen'),

            Toggle::make('is_published')
                ->label('Tampilkan di Website?')
                ->default(true)
                ->columnSpanFull(),
        ]);
    }
}
