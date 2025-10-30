<?php

namespace App\Filament\Resources\SalesNumbers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SalesNumberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sales_name')
                    ->label('Nama Sales')
                    ->required(),
                TextInput::make('phone_number')
                    ->label('Nomor Telepon')
                    ->tel()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(20)
                    ->rule('regex:/^628[0-9]{7,15}$/')
                    ->validationMessages([
                        'regex' => 'Nomor telepon harus diawali dengan 628 dan hanya mengandung angka.',
                    ])
                    ->placeholder('Contoh: 6281234567890'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
