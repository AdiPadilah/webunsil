<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use App\Models\SiteSetting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        $defaults = SiteSetting::defaults();

        return $schema->components([
            Section::make('Angka Statistik Beranda')
                ->description('Angka ini tampil di pita statistik halaman Beranda dan dapat diperbarui setiap semester/tahun.')
                ->schema([
                    TextInput::make('mahasiswa_aktif')
                        ->label('Mahasiswa Aktif')
                        ->numeric()
                        ->minValue(0)
                        ->default($defaults['mahasiswa_aktif'])
                        ->required(),
                    TextInput::make('total_lulusan')
                        ->label('Total Kelulusan')
                        ->numeric()
                        ->minValue(0)
                        ->default($defaults['total_lulusan'])
                        ->required(),
                    TextInput::make('prestasi_mahasiswa')
                        ->label('Prestasi & Aktivitas Mahasiswa')
                        ->numeric()
                        ->minValue(0)
                        ->default($defaults['prestasi_mahasiswa'])
                        ->required(),
                    TextInput::make('aktivitas_dosen')
                        ->label('Aktivitas Riset & PkM Dosen')
                        ->numeric()
                        ->minValue(0)
                        ->default($defaults['aktivitas_dosen'])
                        ->required(),
                ])
                ->columns(2),

            Section::make('Ketua Program Studi & Sambutan')
                ->description('Identitas pimpinan, foto, dan teks sambutan di Beranda serta halaman Tentang Kami.')
                ->schema([
                    FileUpload::make('kaprodi_foto')
                        ->label('Foto Ketua Program Studi')
                        ->image()
                        ->disk('public')
                        ->directory('settings')
                        ->imageEditor()
                        ->columnSpanFull(),
                    TextInput::make('kaprodi_nama')
                        ->label('Nama Lengkap & Gelar')
                        ->default($defaults['kaprodi_nama'])
                        ->required(),
                    TextInput::make('kaprodi_jabatan')
                        ->label('Jabatan')
                        ->default($defaults['kaprodi_jabatan'])
                        ->required(),
                    Textarea::make('kaprodi_sambutan')
                        ->label('Isi Teks Sambutan')
                        ->rows(7)
                        ->default($defaults['kaprodi_sambutan'])
                        ->helperText('Pisahkan antar-paragraf dengan satu baris kosong.')
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Status Akreditasi & Kontak Resmi')
                ->description('Data akreditasi pada lencana Hero, pop-up Akreditasi, dan informasi kontak di Beranda.')
                ->schema([
                    TextInput::make('akreditasi_peringkat')
                        ->label('Peringkat Akreditasi')
                        ->default($defaults['akreditasi_peringkat'])
                        ->required(),
                    TextInput::make('akreditasi_lembaga')
                        ->label('Lembaga Akreditasi')
                        ->default($defaults['akreditasi_lembaga'])
                        ->required(),
                    TextInput::make('akreditasi_sk')
                        ->label('Nomor Keputusan SK')
                        ->default($defaults['akreditasi_sk'])
                        ->required(),
                    TextInput::make('akreditasi_berlaku')
                        ->label('Masa Berlaku Akreditasi')
                        ->default($defaults['akreditasi_berlaku'])
                        ->required(),
                    TextInput::make('kontak_email')
                        ->label('Email Resmi Prodi')
                        ->email()
                        ->default($defaults['kontak_email'])
                        ->required(),
                    TextInput::make('jam_layanan')
                        ->label('Jam Layanan Akademik')
                        ->default($defaults['jam_layanan'])
                        ->required(),
                ])
                ->columns(2),
        ]);
    }
}
