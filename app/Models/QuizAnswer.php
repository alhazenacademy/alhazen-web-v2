<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Http;

class QuizAnswer extends Model
{
    protected $fillable = [
        'session_id',
        'nama',
        'kelas',
        'instansi',
        'nama_norm',
        'kelas_norm',
        'instansi_norm',
        'jawaban',
        'total_soal',
        'idempotency_key',
        'sheets_status',
        'sheets_error',
        'retry_count',
        'sheets_synced_at',
        'submitted_ip',
        'submitted_at',
    ];

    protected $casts = [
        'jawaban' => 'array',
        'sheets_synced_at' => 'datetime',
        'submitted_at' => 'datetime',
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(QuizSession::class, 'session_id');
    }

    /**
     * Kirim jawaban ke Google Sheets secara sinkron (tanpa worker).
     * True bila Sheets menerima (status synced), false bila gagal (status failed).
     */
    public function sendToSheets(): bool
    {
        $this->update([
            'sheets_status' => 'pending',
            'sheets_error' => null,
            'retry_count' => 0,
        ]);

        $webhook = trim((string) ($this->session->sheets_webhook_url ?? ''));

        if ($webhook === '') {
            $this->update([
                'sheets_status' => 'failed',
                'sheets_error' => 'Sesi ini belum punya URL Google Sheets.',
            ]);

            return false;
        }

        try {
            $response = Http::timeout(25)->asJson()->post($webhook, [
                'slug' => $this->session->slug,
                'judul' => $this->session->title,
                'waktu' => $this->submitted_at->format('Y-m-d H:i:s'),
                'nama' => $this->nama,
                'kelas' => $this->kelas,
                'instansi' => $this->instansi,
                'total_soal' => $this->total_soal,
                'pertanyaan_ids' => collect($this->session->questions)->pluck('id')->all(),
                'jawaban' => $this->jawaban,
                'idempotency_key' => $this->idempotency_key,
            ]);

            if (! $response->successful()) {
                throw new \RuntimeException('Sheets webhook HTTP '.$response->status());
            }

            // Apps Script SELALU membalas HTTP 200 (ContentService tidak bisa
            // mengatur status), jadi sukses-tidaknya dibaca dari body JSON:
            // {ok:true,...} saat tersimpan, {ok:false,error:...} saat ditolak.
            $body = $response->json();

            if (! is_array($body)) {
                throw new \RuntimeException('Balasan Sheets bukan JSON: '.mb_substr($response->body(), 0, 200));
            }

            if (($body['ok'] ?? null) !== true) {
                throw new \RuntimeException((string) ($body['error'] ?? 'Sheets menolak data tanpa keterangan.'));
            }
        } catch (\Throwable $e) {
            $this->update([
                'sheets_status' => 'failed',
                'sheets_error' => mb_substr($e->getMessage(), 0, 500),
            ]);

            return false;
        }

        $this->update([
            'sheets_status' => 'synced',
            'sheets_synced_at' => now(),
            'sheets_error' => null,
        ]);

        return true;
    }
}
