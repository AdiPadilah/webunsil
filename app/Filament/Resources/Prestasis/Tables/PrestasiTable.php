<?php

namespace App\Filament\Resources\Prestasis\Tables;

use App\Models\Prestasi;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PrestasiTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->getStateUsing(fn (Prestasi $record): ?string => Prestasi::resolveFilamentColumnState($record->foto))
                    ->square(),
                TextColumn::make('tahun')->label('Tahun')->sortable()->badge(),
                TextColumn::make('judul')->label('Judul Prestasi')->searchable()->wrap()->weight('bold'),
                TextColumn::make('mahasiswa')->label('Mahasiswa/Tim')->searchable()->limit(40),
                TextColumn::make('tingkat')->label('Peringkat')->badge()->color('success'),
                TextColumn::make('kategori')->label('Kategori')->badge()->formatStateUsing(fn (string $state): string => match ($state) {
                    'lomba' => 'Kompetisi',
                    'publikasi' => 'Publikasi & Riset',
                    'jembatan' => 'Rancang Jembatan',
                    default => $state,
                }),
                IconColumn::make('is_published')->label('Tayang')->boolean(),
            ])
            ->filters([
                SelectFilter::make('kategori')->label('Kategori')->options([
                    'lomba' => 'Kompetisi',
                    'publikasi' => 'Publikasi & Riset',
                    'jembatan' => 'Rancang Jembatan',
                ]),
            ])
            ->defaultSort('tahun', 'desc')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
