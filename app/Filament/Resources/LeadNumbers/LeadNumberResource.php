<?php

namespace App\Filament\Resources\LeadNumbers;

use App\Filament\Resources\LeadNumbers\Pages\CreateLeadNumber;
use App\Filament\Resources\LeadNumbers\Pages\EditLeadNumber;
use App\Filament\Resources\LeadNumbers\Pages\ListLeadNumbers;
use App\Filament\Resources\LeadNumbers\Schemas\LeadNumberForm;
use App\Filament\Resources\LeadNumbers\Tables\LeadNumbersTable;
use App\Models\LeadNumber;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LeadNumberResource extends Resource
{
    protected static ?string $model = LeadNumber::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::NumberedList;

    public static function form(Schema $schema): Schema
    {
        return LeadNumberForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LeadNumbersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLeadNumbers::route('/'),
            // 'create' => CreateLeadNumber::route('/create'),
            // 'edit' => EditLeadNumber::route('/{record}/edit'),
        ];
    }
}
