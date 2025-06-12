<?php

namespace App\Filament\Resources\UnexpectedCostResource\Pages;

use App\Filament\Resources\UnexpectedCostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnexpectedCost extends EditRecord
{
    protected static string $resource = UnexpectedCostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
