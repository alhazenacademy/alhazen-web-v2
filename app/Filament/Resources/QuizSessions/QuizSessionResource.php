<?php

namespace App\Filament\Resources\QuizSessions;

use App\Filament\Resources\QuizSessions\Pages\EditQuizSession;
use App\Filament\Resources\QuizSessions\Pages\ListQuizSessions;
use App\Filament\Resources\QuizSessions\Pages\ViewQuizSession;
use App\Filament\Resources\QuizSessions\RelationManagers\AnswersRelationManager;
use App\Filament\Resources\QuizSessions\Schemas\QuizSessionForm;
use App\Filament\Resources\QuizSessions\Schemas\QuizSessionInfolist;
use App\Filament\Resources\QuizSessions\Tables\QuizSessionsTable;
use App\Models\QuizSession;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class QuizSessionResource extends Resource
{
    protected static ?string $model = QuizSession::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static string|UnitEnum|null $navigationGroup = 'Tools';

    protected static ?string $navigationLabel = 'Quiz';

    protected static ?string $modelLabel = 'Quiz';

    protected static ?string $pluralModelLabel = 'Quiz';

    public static function infolist(Schema $schema): Schema
    {
        return QuizSessionInfolist::configure($schema);
    }

    public static function form(Schema $schema): Schema
    {
        return QuizSessionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return QuizSessionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            AnswersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListQuizSessions::route('/'),
            'view' => ViewQuizSession::route('/{record}'),
            'edit' => EditQuizSession::route('/{record}/edit'),
        ];
    }
}
