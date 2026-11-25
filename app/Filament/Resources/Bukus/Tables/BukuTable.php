<?php

namespace App\Filament\Resources\Bukus\Tables;

use App\Models\Buku;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BukuTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')
                    ->label('Cover')
                    ->disk('public')
                    ->getStateUsing(fn (Buku $record): ?string => Buku::resolveFilamentColumnState($record->cover))
                    ->square(),
                TextColumn::make('judul')->label('Judul')->searchable()->wrap()->weight('bold'),
                TextColumn::make('penulis')->label('Penulis')->searchable(),
                TextColumn::make('kategori')->label('Kategori')->badge()->colors([
                    'info' => 'non-fiksi',
                    'warning' => 'fiksi',
                ]),
                TextColumn::make('isbn')->label('ISBN')->copyable(),
                IconColumn::make('is_published')->label('Tayang')->boolean(),
            ])
            ->filters([
                SelectFilter::make('kategori')->label('Kategori')->options([
                    'non-fiksi' => 'Buku Ajar / Non-Fiksi',
                    'fiksi' => 'Fiksi / Novel',
                ]),
            ])
            ->recordActions([EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
