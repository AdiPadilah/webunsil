<?php

namespace App\Filament\Resources\DefenseSchedules\Schemas;

use App\Models\DefenseSchedule;
use App\Models\Dosen;
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
        $lecturerSuggestions = fn (): array => Dosen::published()
            ->orderBy('nama')
            ->pluck('nama')
            ->all();

        return $schema->components([
            Section::make('Data Mahasiswa & Judul Skripsi')
                ->description('Jadwal langsung tersinkron ke halaman Kalender Jadwal Sidang Skripsi, Seminar Proposal, Seminar Hasil, dan Sidang Akhir.')
                ->schema([
                    Select::make('type')
                        ->label('Tahapan Sidang / Seminar')
                        ->options(DefenseSchedule::typeOptions())
                        ->default('Seminar Proposal')
                        ->required(),
                    Select::make('status')
                        ->label('Status Pelaksanaan')
                        ->options(DefenseSchedule::statusOptions())
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
                        ->datalist($lecturerSuggestions)
                        ->required(),
                    TextInput::make('supervisor_2')
                        ->label('Dosen Pembimbing 2 (Opsional)')
                        ->datalist($lecturerSuggestions),
                    TextInput::make('examiner_1')
                        ->label('Dosen Penguji 1')
                        ->datalist($lecturerSuggestions)
                        ->required(),
                    TextInput::make('examiner_2')
                        ->label('Dosen Penguji 2 (Opsional)')
                        ->datalist($lecturerSuggestions),
                    TextInput::make('room')
                        ->label('Ruangan / Lokasi / Link')
                        ->placeholder('Contoh: Ruang Sidang FT / Ruang Rapat FT')
                        ->datalist(DefenseSchedule::roomSuggestions())
                        ->required(),
                    DateTimePicker::make('date_time')
                        ->label('Waktu & Tanggal Sidang')
                        ->seconds(false)
                        ->required(),
                ])
                ->columns(2),
        ]);
    }
}
