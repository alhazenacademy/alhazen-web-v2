<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;


class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->default(fn() => auth()->id())
                    ->required(),
                DateTimePicker::make('published_at'),
                FileUpload::make('cover_image')
                    ->disk('public')
                    ->image(),
                Toggle::make('is_featured')
                    ->label('Article Featured')
                    ->default(false),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'scheduled' => 'Scheduled',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),
                RichEditor::make('excerpt')
                    ->label('Summary')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                    ])
                    ->extraInputAttributes(['style' => 'min-height: 80px;']),
                RichEditor::make('content')
                    ->label('Content')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'h1',
                        'h2',
                        'h3',
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'blockquote',
                        'codeBlock',
                        'orderedList',
                        'bulletList',
                        'link',
                        'horizontalRule',
                        'table',
                        'undo',
                        'redo',
                        'textColor',
                        'attachFiles',
                    ])
                    ->extraInputAttributes(['style' => 'min-height: 200px;']),
                Textarea::make('meta_title'),
                Textarea::make('meta_description'),
            ]);
    }
}
