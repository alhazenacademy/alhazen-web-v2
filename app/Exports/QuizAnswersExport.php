<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class QuizAnswersExport implements FromCollection, ShouldAutoSize, WithHeadings, WithMapping
{
    protected Collection $records;

    protected array $questions;

    protected int $no = 1;

    public function __construct(Collection $records, array $questions)
    {
        $this->records = $records;
        $this->questions = $questions;
    }

    public function collection(): Collection
    {
        return $this->records;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Waktu',
            'Nama',
            'Kelas',
            'Instansi',
            'Total Soal',
        ];

        foreach ($this->questions as $index => $question) {
            $headings[] = 'Q'.($index + 1);
        }

        $headings[] = 'Status Kirim';

        return $headings;
    }

    public function map($record): array
    {
        $row = [
            $this->no++,
            $record->submitted_at?->format('d M Y H:i'),
            $record->nama,
            $record->kelas,
            $record->instansi,
            $record->total_soal,
        ];

        $answers = $record->jawaban ?? [];
        foreach ($this->questions as $question) {
            $row[] = $this->displayAnswer($question, $answers[$question['id']] ?? null);
        }

        $row[] = $record->sheets_status;

        return $row;
    }

    private function displayAnswer(array $question, mixed $value): string
    {
        if ($value === null || $value === '') {
            return '-';
        }

        if (($question['type'] ?? '') === 'pg' && is_numeric($value)) {
            $option = $question['options'][(int) $value] ?? null;
            if ($option === null) {
                return '-';
            }
            $text = trim((string) ($option['text'] ?? ''));
            if ($text !== '') {
                return mb_substr($text, 0, 100);
            }

            return $option['image'] ? '[gambar]' : '-';
        }

        return mb_substr(trim((string) $value), 0, 500);
    }
}
