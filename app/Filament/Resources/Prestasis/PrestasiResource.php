<?php

namespace App\Filament\Resources\Prestasis;

use App\Filament\Resources\Prestasis\Pages\CreatePrestasi;
use App\Filament\Resources\Prestasis\Pages\EditPrestasi;
use App\Filament\Resources\Prestasis\Pages\ListPrestasis;
use App\Filament\Resources\Prestasis\Schemas\PrestasiForm;
use App\Filament\Resources\Prestasis\Tables\PrestasiTable;
use App\Models\Prestasi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationLabel = 'Prestasi Mahasiswa';

    protected static ?string $modelLabel = 'Prestasi';

    protected static ?string $pluralModelLabel = 'Daftar Prestasi';

    protected static string | UnitEnum | null $navigationGroup = 'Publikasi & Informasi';

    protected static ?int $navigationSort = 2;

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedTrophy;

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return PrestasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrestasiTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPrestasis::route('/'),
            'create' => CreatePrestasi::route('/create'),
            'edit' => EditPrestasi::route('/{record}/edit'),
        ];
    }
}
