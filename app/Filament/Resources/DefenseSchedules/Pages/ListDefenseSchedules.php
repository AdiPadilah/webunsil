<?php

namespace App\Filament\Resources\DefenseSchedules\Pages;

use App\Filament\Resources\DefenseSchedules\DefenseScheduleResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListDefenseSchedules extends ListRecords
{
    protected static string $resource = DefenseScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('lihatKalender')
                ->label('Lihat Kalender di Web')
                ->url(route('jadwal-sidang-skripsi'), shouldOpenInNewTab: true)
                ->icon(Heroicon::OutlinedArrowTopRightOnSquare)
                ->color('gray'),
            CreateAction::make(),
        ];
    }
}
