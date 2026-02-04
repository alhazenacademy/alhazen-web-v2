<?php

namespace App\Filament\Resources\LeadNumbers\Tables;

use Carbon\Carbon;
use Filament\Tables\Table;
use Filament\Actions\BulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Filters\Filter;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
use App\Exports\LeadNumbersManualExport;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Exports\LeadNumberExporter;

class LeadNumbersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')

            ->columns([
                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('created_at_time')
                    ->label('Jam')
                    ->getStateUsing(fn($record) => $record->created_at?->format('H:i'))
                    ->sortable(
                        query: fn($query, $direction) =>
                        $query->orderBy('created_at', $direction)
                    ),

                TextColumn::make('phone_number')
                    ->label('Nomor Telepon')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('source')
                    ->label('Source')
                    ->badge()
                    ->color('primary')
                    ->sortable(),
            ])

            ->filters([
                Filter::make('periode')
                    ->form([
                        Select::make('type')
                            ->label('Periode')
                            ->options([
                                'daily' => 'Harian',
                                'weekly' => 'Mingguan',
                                'monthly' => 'Bulanan',
                            ])
                            ->required()
                            ->reactive(),

                        // HARIAN
                        DatePicker::make('date')
                            ->label('Tanggal')
                            ->visible(fn($get) => $get('type') === 'daily')
                            ->required(fn($get) => $get('type') === 'daily'),

                        // MINGGUAN (RANGE)
                        DatePicker::make('start_date')
                            ->label('Tanggal Mulai')
                            ->visible(fn($get) => $get('type') === 'weekly')
                            ->required(fn($get) => $get('type') === 'weekly'),

                        DatePicker::make('end_date')
                            ->label('Tanggal Selesai')
                            ->visible(fn($get) => $get('type') === 'weekly')
                            ->required(fn($get) => $get('type') === 'weekly'),

                        // BULANAN
                        DatePicker::make('month')
                            ->label('Bulan')
                            ->displayFormat('F Y')
                            ->visible(fn($get) => $get('type') === 'monthly')
                            ->required(fn($get) => $get('type') === 'monthly'),
                    ])

                    ->query(function (Builder $query, array $data) {

                        if ($data['type'] === 'daily' && !empty($data['date'])) {
                            $query->whereDate('created_at', $data['date']);
                        }

                        if (
                            $data['type'] === 'weekly'
                            && !empty($data['start_date'])
                            && !empty($data['end_date'])
                        ) {
                            $query->whereBetween('created_at', [
                                Carbon::parse($data['start_date'])->startOfDay(),
                                Carbon::parse($data['end_date'])->endOfDay(),
                            ]);
                        }

                        if ($data['type'] === 'monthly' && !empty($data['month'])) {
                            $date = Carbon::parse($data['month']);

                            $query->whereMonth('created_at', $date->month)->whereYear('created_at', $date->year);
                        }
                    }),
            ])

            ->actions([])

            ->bulkActions([
                BulkAction::make('download')
                    ->label('Download Excel')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->action(
                        fn($records) =>
                        Excel::download(
                            new LeadNumbersManualExport($records),
                            'lead-numbers-' . now()->format('d-m-Y') . '.xlsx'
                        )
                    ),
            ]);
    }
}
