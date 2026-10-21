<?php

namespace App\Filament\Resources\QuizSessions\Pages;

use App\Filament\Resources\QuizSessions\QuizSessionResource;
use App\Models\SiteSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListQuizSessions extends ListRecords
{
    protected static string $resource = QuizSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('quizSettings')
                ->label('Pengaturan')
                ->icon('heroicon-o-cog-6-tooth')
                ->color('gray')
                ->modalHeading('Pengaturan Quiz')
                ->modalWidth('sm')
                ->form([
                    TextInput::make('quiz_pin')
                        ->label('PIN Tutor')
                        ->password()
                        ->revealable()
                        ->required()
                        ->minLength(4)
                        ->maxLength(100)
                        ->default(fn () => SiteSetting::where('key', 'quiz_tools')->first()?->settings['quiz_pin'] ?? ''),
                ])
                ->action(function (array $data) {
                    $record = SiteSetting::where('key', 'quiz_tools')->first();
                    $settings = $record?->settings ?? [];
                    $settings['quiz_pin'] = trim($data['quiz_pin']);

                    if ($record) {
                        $record->update(['settings' => $settings]);
                    } else {
                        SiteSetting::create(['key' => 'quiz_tools', 'settings' => $settings]);
                    }

                    Notification::make()
                        ->title('PIN tutor disimpan.')
                        ->success()
                        ->send();
                }),
        ];
    }
}
