<?php

namespace App\Filament\Resources\StudentWorks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StudentWorksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail'),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Game & Animation' => 'danger',
                        'Application' => 'warning',
                        'Robotics' => 'primary',
                        'IoT & Robotics' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(60)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('demo_link')
                    ->label('Demo')
                    ->url(fn ($record) => $record->demo_link)
                    ->openUrlInNewTab()
                    ->placeholder('❌'),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'Game & Animation' => 'Game & Animation',
                        'Application' => 'Application',
                        'Robotics' => 'Robotics',
                        'IoT & Robotics' => 'IoT & Robotics',
                        'Other' => 'Other',
                    ])
                    ->label('Kategori'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
