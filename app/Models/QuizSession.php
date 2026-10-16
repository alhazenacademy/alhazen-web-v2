<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class QuizSession extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'sheets_webhook_url',
        'questions',
        'total_soal',
        'shuffle_questions',
        'shuffle_options',
        'expires_at',
    ];

    protected $casts = [
        'questions' => 'array',
        'shuffle_questions' => 'boolean',
        'shuffle_options' => 'boolean',
        'expires_at' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('expires_at', '>', now());
    }

    protected static function booted(): void
    {
        static::deleting(function (QuizSession $session) {
            Storage::disk('public')->delete('qrcodes/quiz-'.$session->slug.'.svg');
        });
    }

    public function answers(): HasMany
    {
        return $this->hasMany(QuizAnswer::class, 'session_id');
    }
}
