<?php

namespace App\Filament\Resources\SalesNumbers;

use App\Filament\Resources\SalesNumbers\Pages\CreateSalesNumber;
use App\Filament\Resources\SalesNumbers\Pages\EditSalesNumber;
use App\Filament\Resources\SalesNumbers\Pages\ListSalesNumbers;
use App\Filament\Resources\SalesNumbers\Schemas\SalesNumberForm;
use App\Filament\Resources\SalesNumbers\Tables\SalesNumbersTable;
use App\Models\SalesNumber;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SalesNumberResource extends Resource
{
    protected static ?string $model = SalesNumber::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SalesNumber';

    public static function form(Schema $schema): Schema
    {
        return SalesNumberForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SalesNumbersTable::configure($table);
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
            'index' => ListSalesNumbers::route('/'),
            'create' => CreateSalesNumber::route('/create'),
            'edit' => EditSalesNumber::route('/{record}/edit'),
        ];
    }
}
