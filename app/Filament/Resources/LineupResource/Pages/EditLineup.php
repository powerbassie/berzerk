<?php

namespace App\Filament\Resources\LineupResource\Pages;

use App\Filament\Resources\LineupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLineup extends EditRecord
{
    protected static string $resource = LineupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
