<?php

namespace App\Filament\Resources\LeadNumbers\Pages;

use App\Filament\Resources\LeadNumbers\LeadNumberResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLeadNumber extends EditRecord
{
    protected static string $resource = LeadNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
