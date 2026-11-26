<?php

namespace App\Filament\Resources\DefenseSchedules\Tables;

use App\Models\DefenseSchedule;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DefenseSchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student_name')
                    ->label('Mahasiswa')
                    ->description(fn (DefenseSchedule $record): string => 'NIM: ' . $record->student_id)
                    ->weight('bold')
                    ->searchable(['student_name', 'student_id']),

                TextColumn::make('type')
                    ->label('Tahapan Sidang')
                    ->badge()
                    ->colors([
                        'primary' => 'Seminar Proposal',
                        'warning' => 'Seminar Hasil',
                        'info' => 'Sidang Akhir Skripsi',
                    ]),

                TextColumn::make('title')
                    ->label('Judul Skripsi')
                    ->limit(60)
                    ->wrap()
                    ->searchable(),

                TextColumn::make('supervisor_1')
                    ->label('Pembimbing')
                    ->formatStateUsing(fn (?string $state): string => $state ? '1. ' . $state : '-')
                    ->description(fn (DefenseSchedule $record): string => $record->supervisor_2 ? '2. ' . $record->supervisor_2 : '')
                    ->searchable(['supervisor_1', 'supervisor_2'])
                    ->toggleable(),

                TextColumn::make('examiner_1')
                    ->label('Penguji')
                    ->formatStateUsing(fn (?string $state): string => $state ? '1. ' . $state : '-')
                    ->description(fn (DefenseSchedule $record): string => $record->examiner_2 ? '2. ' . $record->examiner_2 : '')
                    ->searchable(['examiner_1', 'examiner_2'])
                    ->toggleable(),

                TextColumn::make('date_time')
                    ->label('Jadwal & Ruang')
                    ->dateTime('d M Y, H:i')
                    ->description(fn (DefenseSchedule $record): string => (string) $record->room)
                    ->searchable(['room'])
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'success' => 'Terjadwal',
                        'warning' => 'Sedang Berlangsung',
                        'info' => 'Selesai',
                        'danger' => 'Ditunda',
                    ]),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Tahapan Sidang')
                    ->options(DefenseSchedule::typeOptions()),
                SelectFilter::make('status')
                    ->label('Status Pelaksanaan')
                    ->options(DefenseSchedule::statusOptions()),
            ])
            ->defaultSort('date_time', 'desc')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
