<?php

namespace App\Filament\Resources\Pengabdians\Tables;

use App\Models\Pengabdian;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PengabdianTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')
                    ->label('Cover')
                    ->disk('public')
                    ->getStateUsing(fn (Pengabdian $record): ?string => Pengabdian::resolveFilamentColumnState($record->cover))
                    ->square(),
                TextColumn::make('tahun')->label('Tahun')->sortable()->badge(),
                TextColumn::make('judul')->label('Judul')->searchable()->wrap()->weight('bold'),
                TextColumn::make('penulis')->label('Penulis')->searchable()->limit(45),
                TextColumn::make('nama_jurnal')->label('Jurnal')->limit(35),
                TextColumn::make('index_detail')->label('Indeksasi')->badge(),
                IconColumn::make('is_published')->label('Tayang')->boolean(),
            ])
            ->filters([
                SelectFilter::make('index_type')->label('Indeksasi')->options([
                    'PKM' => 'Jurnal PkM',
                    'SINTA' => 'SINTA',
                    'SCOPUS' => 'SCOPUS',
                    'PROCEEDING' => 'Prosiding',
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
