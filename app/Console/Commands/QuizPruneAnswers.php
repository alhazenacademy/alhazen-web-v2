<?php

namespace App\Console\Commands;

use App\Exports\QuizAnswersExport;
use App\Models\QuizAnswer;
use App\Models\QuizSession;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class QuizPruneAnswers extends Command
{
    protected $signature = 'quiz:prune-answers
        {--days=90 : Hapus jawaban yang dikumpulkan lebih lama dari N hari}
        {--force : Jalankan penghapusan (tanpa flag ini hanya dry-run)}';

    protected $description = 'Arsipkan jawaban quiz lawas ke Excel lalu hapus dari DB';

    public function handle(): int
    {
        $days = max(1, (int) $this->option('days'));
        $cutoff = now()->subDays($days);

        $total = QuizAnswer::where('submitted_at', '<', $cutoff)->count();

        if ($total === 0) {
            $this->info('Tidak ada jawaban lebih lama dari '.$days.' hari.');

            return 0;
        }

        if (! $this->option('force')) {
            $this->warn($total.' jawaban lebih lama dari '.$days.' hari akan diarsip + dihapus.');
            $this->line('Jalankan ulang dengan --force untuk eksekusi.');

            return 0;
        }

        $archived = 0;
        QuizSession::whereHas('answers', function ($query) use ($cutoff) {
            $query->where('submitted_at', '<', $cutoff);
        })->each(function (QuizSession $session) use ($cutoff, &$archived) {
            $records = $session->answers()
                ->where('submitted_at', '<', $cutoff)
                ->orderBy('submitted_at')
                ->get();

            if ($records->isEmpty()) {
                return;
            }

            Excel::store(
                new QuizAnswersExport($records, $session->questions),
                'quiz-archives/quiz-'.$session->slug.'-'.now()->format('Ymd').'.xlsx',
                'local'
            );

            $archived += $records->count();
            QuizAnswer::whereIn('id', $records->pluck('id'))->delete();
        });

        $this->info('Selesai: '.$archived.' jawaban diarsip ke storage/app/quiz-archives lalu dihapus.');

        return 0;
    }
}
