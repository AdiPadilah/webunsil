<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use App\Models\SiteSetting;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('kaprodi_foto')
                    ->label('Foto')
                    ->disk('public')
                    ->getStateUsing(fn (SiteSetting $record): ?string => SiteSetting::resolveFilamentColumnState($record->kaprodi_foto))
                    ->circular(),

                TextColumn::make('kaprodi_nama')
                    ->label('Ketua Program Studi')
                    ->weight('bold')
                    ->searchable()
                    ->description(fn (SiteSetting $record): string => (string) $record->kaprodi_jabatan)
                    ->wrap(),

                TextColumn::make('akreditasi_peringkat')
                    ->label('Akreditasi')
                    ->badge()
                    ->color('success')
                    ->searchable()
                    ->description(fn (SiteSetting $record): string => (string) $record->akreditasi_lembaga),

                TextColumn::make('mahasiswa_aktif')
                    ->label('Mhs Aktif')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('total_lulusan')
                    ->label('Total Lulusan')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('prestasi_mahasiswa')
                    ->label('Aktivitas Mhs')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('aktivitas_dosen')
                    ->label('Aktivitas Dosen')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('kontak_email')
                    ->label('Email Prodi')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('id', 'desc')
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
