<?php

namespace App\Filament\Resources\QuizAnswers\Pages;

use App\Filament\Resources\QuizAnswers\QuizAnswerResource;
use Filament\Resources\Pages\ListRecords;

class ListQuizAnswers extends ListRecords
{
    protected static string $resource = QuizAnswerResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
