<?php

namespace App\Filament\Resources\DefenseSchedules\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DefenseScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Data Mahasiswa & Judul Skripsi')
                ->description('Jadwal langsung tampil pada halaman Jadwal Sidang Skripsi.')
                ->schema([
                    Select::make('type')
                        ->label('Tahapan Sidang / Seminar')
                        ->options([
                            'Seminar Proposal' => 'Seminar Proposal',
                            'Seminar Hasil' => 'Seminar Hasil',
                            'Sidang Akhir Skripsi' => 'Sidang Akhir Skripsi',
                        ])
                        ->default('Seminar Proposal')
                        ->required(),
                    Select::make('status')
                        ->label('Status Pelaksanaan')
                        ->options([
                            'Terjadwal' => 'Terjadwal',
                            'Sedang Berlangsung' => 'Sedang Berlangsung',
                            'Selesai' => 'Selesai',
                            'Ditunda' => 'Ditunda',
                        ])
                        ->default('Terjadwal')
                        ->required(),
                    TextInput::make('student_name')
                        ->label('Nama Mahasiswa')
                        ->required(),
                    TextInput::make('student_id')
                        ->label('NIM Mahasiswa')
                        ->required(),
                    Textarea::make('title')
                        ->label('Judul Tugas Akhir / Skripsi')
                        ->required()
                        ->rows(2)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Pembimbing, Penguji & Jadwal')
                ->schema([
                    TextInput::make('supervisor_1')
                        ->label('Dosen Pembimbing 1')
                        ->required(),
                    TextInput::make('supervisor_2')
                        ->label('Dosen Pembimbing 2 (Opsional)'),
                    TextInput::make('examiner_1')
                        ->label('Dosen Penguji 1 (Opsional)'),
                    TextInput::make('examiner_2')
                        ->label('Dosen Penguji 2 (Opsional)'),
                    TextInput::make('room')
                        ->label('Ruangan / Lokasi / Link')
                        ->placeholder('Contoh: Ruang Sidang FT 2 / Lab Komputasi')
                        ->required(),
                    DateTimePicker::make('date_time')
                        ->label('Waktu & Tanggal Sidang')
                        ->required(),
                ])
                ->columns(2),
        ]);
    }
}
