<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Akun & Akses')
                ->description('Tentukan nama pengguna, identitas, role hak akses, dan password akun.')
                ->schema([
                    TextInput::make('name')
                        ->label('Nama Lengkap')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('email')
                        ->label('Username / Email')
                        ->email()
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255)
                        ->helperText('Digunakan sebagai username login ke admin panel maupun layanan terpadu.'),

                    TextInput::make('npm')
                        ->label('NPM (Nomor Pokok Mahasiswa)')
                        ->placeholder('Contoh: 217002001 (khusus role mahasiswa)')
                        ->unique(ignoreRecord: true)
                        ->maxLength(30)
                        ->nullable()
                        ->helperText('NPM dapat digunakan mahasiswa untuk login ke layanan terpadu.'),

                    Select::make('role')
                        ->label('Role / Hak Akses')
                        ->options([
                            User::ROLE_SUPER_ADMIN => 'Super Admin (Akses Penuh Seluruh Sistem)',
                            User::ROLE_ADMIN => 'Admin Prodi (Kelola Berita, Dosen, Riset, Sidang)',
                            User::ROLE_MAHASISWA => 'Mahasiswa (Akses Layanan Terpadu & Privat)',
                        ])
                        ->default(User::ROLE_MAHASISWA)
                        ->required(),

                    TextInput::make('password')
                        ->label('Password')
                        ->password()
                        ->revealable()
                        ->dehydrateStateUsing(fn (?string $state): ?string => filled($state) ? Hash::make($state) : null)
                        ->dehydrated(fn (?string $state): bool => filled($state))
                        ->required(fn (string $operation): bool => $operation === 'create')
                        ->helperText(fn (string $operation): ?string => $operation === 'edit' ? 'Kosongkan jika tidak ingin mengubah password akun.' : null),

                    Toggle::make('is_active')
                        ->label('Status Akun Aktif')
                        ->default(true)
                        ->helperText('Jika dinonaktifkan, akun ini tidak dapat login ke website maupun admin panel.'),
                ])
                ->columns(2),
        ]);
    }
}
