<?php

namespace App\Filament\Resources\Penelitians\Tables;

use App\Models\Penelitian;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PenelitianTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')
                    ->label('Cover')
                    ->disk('public')
                    ->getStateUsing(fn (Penelitian $record): ?string => Penelitian::resolveFilamentColumnState($record->cover))
                    ->square(),
                TextColumn::make('tahun')->label('Tahun')->sortable()->badge(),
                TextColumn::make('judul')->label('Judul')->searchable()->wrap()->weight('bold'),
                TextColumn::make('penulis')->label('Penulis')->searchable()->limit(45),
                TextColumn::make('nama_jurnal')->label('Jurnal')->limit(35)->wrap(),
                TextColumn::make('index_detail')->label('Indeksasi')->badge()->colors([
                    'info' => fn (?string $state): bool => str_contains((string) $state, 'SCOPUS'),
                    'success' => fn (?string $state): bool => str_contains((string) $state, 'SINTA'),
                    'warning' => fn (?string $state): bool => str_contains((string) $state, 'Prosiding'),
                ]),
                IconColumn::make('is_published')->label('Tayang')->boolean(),
            ])
            ->filters([
                SelectFilter::make('index_type')->label('Indeksasi')->options([
                    'SCOPUS' => 'SCOPUS',
                    'SINTA' => 'SINTA',
                    'PROCEEDING' => 'Prosiding',
                ]),
            ])
            ->defaultSort('tahun', 'desc')
            ->recordActions([EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
