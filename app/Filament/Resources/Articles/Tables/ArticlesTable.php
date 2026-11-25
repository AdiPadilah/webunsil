<?php

namespace App\Filament\Resources\Articles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Foto')
                    ->disk('public')
                    ->getStateUsing(function ($record): ?string {
                        if (blank($record->thumbnail)) {
                            return null;
                        }

                        return str_starts_with($record->thumbnail, 'images/')
                            ? asset($record->thumbnail)
                            : $record->thumbnail;
                    })
                    ->square(),

                TextColumn::make('title')
                    ->label('Judul Berita')
                    ->weight('bold')
                    ->searchable()
                    ->wrap(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->colors([
                        'primary' => 'Berita',
                        'success' => 'Prestasi',
                        'warning' => 'Agenda',
                        'info' => 'Pengumuman',
                    ]),

                TextColumn::make('published_at')
                    ->label('Tanggal Rilis')
                    ->date('d M Y')
                    ->sortable(),

                IconColumn::make('is_published')
                    ->label('Tayang')
                    ->boolean(),
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
