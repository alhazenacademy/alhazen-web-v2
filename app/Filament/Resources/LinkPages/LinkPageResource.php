<?php

namespace App\Filament\Resources\LinkPages;

use App\Filament\Resources\LinkPages\Pages\CreateLinkPage;
use App\Filament\Resources\LinkPages\Pages\EditLinkPage;
use App\Filament\Resources\LinkPages\Pages\ListLinkPages;
use App\Filament\Resources\LinkPages\Schemas\LinkPageForm;
use App\Filament\Resources\LinkPages\Tables\LinkPagesTable;
use App\Models\LinkPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class LinkPageResource extends Resource
{
    protected static ?string $model = LinkPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    public static function form(Schema $schema): Schema
    {
        return LinkPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LinkPagesTable::configure($table);
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
            'index' => ListLinkPages::route('/'),
            'create' => CreateLinkPage::route('/create'),
            'edit' => EditLinkPage::route('/{record}/edit'),
        ];
    }
}
