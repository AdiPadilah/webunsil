<?php

namespace App\Filament\Resources\DefenseSchedules\Pages;

use App\Filament\Resources\DefenseSchedules\DefenseScheduleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDefenseSchedule extends EditRecord
{
    protected static string $resource = DefenseScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
