<?php

namespace App\Filament\Resources\LeadNumbers\Pages;

use App\Filament\Resources\LeadNumbers\LeadNumberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLeadNumbers extends ListRecords
{
    protected static string $resource = LeadNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
