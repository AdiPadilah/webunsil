<?php

namespace App\Filament\Resources\Bukus;

use App\Filament\Resources\Bukus\Pages\CreateBuku;
use App\Filament\Resources\Bukus\Pages\EditBuku;
use App\Filament\Resources\Bukus\Pages\ListBukus;
use App\Filament\Resources\Bukus\Schemas\BukuForm;
use App\Filament\Resources\Bukus\Tables\BukuTable;
use App\Models\Buku;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationLabel = 'Buku';

    protected static ?string $modelLabel = 'Buku';

    protected static ?string $pluralModelLabel = 'Daftar Buku';

    protected static string | UnitEnum | null $navigationGroup = 'Riset & Karya Dosen';

    protected static ?int $navigationSort = 3;

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedBookOpen;

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return BukuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BukuTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBukus::route('/'),
            'create' => CreateBuku::route('/create'),
            'edit' => EditBuku::route('/{record}/edit'),
        ];
    }
}
