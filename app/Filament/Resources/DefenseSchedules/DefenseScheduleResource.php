<?php

namespace App\Filament\Resources\DefenseSchedules;

use App\Filament\Resources\DefenseSchedules\Pages\CreateDefenseSchedule;
use App\Filament\Resources\DefenseSchedules\Pages\EditDefenseSchedule;
use App\Filament\Resources\DefenseSchedules\Pages\ListDefenseSchedules;
use App\Filament\Resources\DefenseSchedules\Schemas\DefenseScheduleForm;
use App\Filament\Resources\DefenseSchedules\Tables\DefenseSchedulesTable;
use App\Models\DefenseSchedule;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DefenseScheduleResource extends Resource
{
    protected static ?string $model = DefenseSchedule::class;

    protected static ?string $navigationLabel = 'Jadwal Sidang & Seminar';

    protected static ?string $modelLabel = 'Jadwal Sidang';

    protected static ?string $pluralModelLabel = 'Jadwal Sidang & Seminar';

    protected static string | UnitEnum | null $navigationGroup = 'Layanan Akademik';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $recordTitleAttribute = 'student_name';

    public static function form(Schema $schema): Schema
    {
        return DefenseScheduleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DefenseSchedulesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDefenseSchedules::route('/'),
            'create' => CreateDefenseSchedule::route('/create'),
            'edit' => EditDefenseSchedule::route('/{record}/edit'),
        ];
    }
}
