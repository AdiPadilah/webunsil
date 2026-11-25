<?php

namespace App\Filament\Resources\Dosens\Tables;

use App\Models\Dosen;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DosenTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->getStateUsing(fn (Dosen $record): ?string => Dosen::resolveFilamentColumnState($record->foto))
                    ->circular(),
                TextColumn::make('nama')->label('Nama & Gelar')->searchable()->weight('bold')->wrap(),
                TextColumn::make('kbk_label')->label('Bidang Keahlian')->badge(),
                TextColumn::make('urutan')->label('Urutan')->sortable(),
                IconColumn::make('is_published')->label('Tayang')->boolean(),
            ])
            ->filters([
                SelectFilter::make('kbk')->label('Filter KBK')->options(Dosen::kbkOptions()),
            ])
            ->defaultSort('urutan')
            ->recordActions([EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
