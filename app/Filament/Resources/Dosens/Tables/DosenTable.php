<?php

namespace App\Filament\Resources\Dosens\Tables;

use App\Models\Dosen;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
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
                TextColumn::make('nama')
                    ->label('Nama & Gelar')
                    ->description(fn (Dosen $record): string => (string) ($record->jabatan_akademik ?: $record->kbk_label))
                    ->searchable()
                    ->weight('bold')
                    ->wrap(),
                TextColumn::make('kbk_label')
                    ->label('Bidang Keahlian')
                    ->badge(),
                TextColumn::make('biodata_status')
                    ->label('Biodata CV')
                    ->state(fn (Dosen $record): string => $record->hasBiodata() ? 'Lengkap' : 'Dasar')
                    ->badge()
                    ->color(fn (string $state): string => $state === 'Lengkap' ? 'success' : 'gray'),
                TextColumn::make('urutan')->label('Urutan')->sortable(),
                IconColumn::make('is_published')->label('Tayang')->boolean(),
            ])
            ->filters([
                SelectFilter::make('kbk')->label('Filter KBK')->options(Dosen::kbkOptions()),
            ])
            ->defaultSort('urutan')
            ->recordActions([
                Action::make('lihatProfil')
                    ->label('Profil Web')
                    ->icon(Heroicon::OutlinedArrowTopRightOnSquare)
                    ->color('gray')
                    ->url(fn (Dosen $record): ?string => $record->is_published
                        ? ($record->profile_url ?: route('dosen.show', $record->slug))
                        : null, shouldOpenInNewTab: true)
                    ->visible(fn (Dosen $record): bool => (bool) $record->is_published),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
