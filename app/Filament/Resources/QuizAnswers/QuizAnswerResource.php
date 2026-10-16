<?php

namespace App\Filament\Resources\QuizAnswers;

use App\Filament\Resources\QuizAnswers\Pages\ListQuizAnswers;
use App\Filament\Resources\QuizAnswers\Tables\QuizAnswersTable;
use App\Models\QuizAnswer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class QuizAnswerResource extends Resource
{
    protected static ?string $model = QuizAnswer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentCheck;

    protected static ?string $navigationLabel = 'Jawaban Quiz';

    protected static ?string $modelLabel = 'Jawaban Quiz';

    protected static ?string $pluralModelLabel = 'Jawaban Quiz';

    protected static bool $shouldRegisterNavigation = false;

    public static function table(Table $table): Table
    {
        return QuizAnswersTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListQuizAnswers::route('/'),
        ];
    }
}
