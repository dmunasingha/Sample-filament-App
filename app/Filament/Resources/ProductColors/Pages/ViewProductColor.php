<?php

namespace App\Filament\Resources\ProductColors\Pages;

use App\Filament\Resources\ProductColors\ProductColorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProductColor extends ViewRecord
{
    protected static string $resource = ProductColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
