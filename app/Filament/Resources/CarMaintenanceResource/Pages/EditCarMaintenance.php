<?php

namespace App\Filament\Resources\CarMaintenanceResource\Pages;

use App\Filament\Resources\CarMaintenanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarMaintenance extends EditRecord
{
    protected static string $resource = CarMaintenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
