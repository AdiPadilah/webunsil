<?php

namespace App\Filament\Resources\Penelitians;

use App\Filament\Resources\Penelitians\Pages\CreatePenelitian;
use App\Filament\Resources\Penelitians\Pages\EditPenelitian;
use App\Filament\Resources\Penelitians\Pages\ListPenelitians;
use App\Filament\Resources\Penelitians\Schemas\PenelitianForm;
use App\Filament\Resources\Penelitians\Tables\PenelitianTable;
use App\Models\Penelitian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PenelitianResource extends Resource
{
    protected static ?string $model = Penelitian::class;

    protected static ?string $navigationLabel = 'Penelitian';

    protected static ?string $modelLabel = 'Penelitian';

    protected static ?string $pluralModelLabel = 'Daftar Penelitian';

    protected static string | UnitEnum | null $navigationGroup = 'Riset & Karya Dosen';

    protected static ?int $navigationSort = 1;

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedBeaker;

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return PenelitianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenelitianTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPenelitians::route('/'),
            'create' => CreatePenelitian::route('/create'),
            'edit' => EditPenelitian::route('/{record}/edit'),
        ];
    }
}
