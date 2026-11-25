<?php

namespace App\Filament\Resources\DefenseSchedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DefenseSchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student_name')
                    ->label('Mahasiswa')
                    ->description(fn ($record) => 'NIM: ' . $record->student_id)
                    ->weight('bold')
                    ->searchable(),

                TextColumn::make('type')
                    ->label('Tahapan Sidang')
                    ->badge(),

                TextColumn::make('title')
                    ->label('Judul Skripsi')
                    ->limit(60)
                    ->wrap(),

                TextColumn::make('date_time')
                    ->label('Jadwal & Ruang')
                    ->dateTime('d M Y, H:i')
                    ->description(fn ($record) => $record->room)
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
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
