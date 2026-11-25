<?php

namespace App\Filament\Resources\DefenseSchedules\Pages;

use App\Filament\Resources\DefenseSchedules\DefenseScheduleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDefenseSchedules extends ListRecords
{
    protected static string $resource = DefenseScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
