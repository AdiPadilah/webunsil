<?php

namespace App\Filament\Resources\Dosens\Pages;

use App\Filament\Resources\Dosens\DosenResource;
use App\Models\Dosen;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Icons\Heroicon;

class EditDosen extends EditRecord
{
    protected static string $resource = DosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('lihatProfil')
                ->label('Lihat Profil di Web')
                ->icon(Heroicon::OutlinedArrowTopRightOnSquare)
                ->color('gray')
                ->url(function (): ?string {
                    /** @var Dosen $record */
                    $record = $this->getRecord();

                    return $record->profile_url ?: route('dosen.show', $record->slug);
                }, shouldOpenInNewTab: true)
                ->visible(fn (): bool => (bool) $this->getRecord()->is_published),
            DeleteAction::make(),
        ];
    }
}
