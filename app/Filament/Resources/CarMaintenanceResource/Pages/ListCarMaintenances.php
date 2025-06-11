<?php

namespace App\Filament\Resources\CarMaintenanceResource\Pages;

use App\Filament\Resources\CarMaintenanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarMaintenances extends ListRecords
{
    protected static string $resource = CarMaintenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
