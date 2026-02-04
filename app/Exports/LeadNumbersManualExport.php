<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LeadNumbersManualExport implements
    FromCollection,
    WithHeadings,
    WithMapping,
    ShouldAutoSize
{
    protected Collection $records;
    protected int $no = 1;

    public function __construct(Collection $records)
    {
        $this->records = $records;
    }

    public function collection(): Collection
    {
        return $this->records;
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal',
            'Jam',
            'Nomor Telepon',
            'Source',
        ];
    }

    public function map($record): array
    {
        return [
            $this->no++,
            $record->created_at?->format('d M Y'),
            $record->created_at?->format('H:i'),
            $record->phone_number,
            $record->source,
        ];
    }
}
