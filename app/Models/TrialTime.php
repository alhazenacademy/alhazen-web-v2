<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TrialTime extends Model
{
    protected $fillable = ['time', 'is_active', 'sort_order', 'day_of_week'];

    protected $casts = [
        'time' => 'datetime:H:i',
        'is_active' => 'boolean',
    ];

    public function scopeActive(Builder $q): Builder
    {
        return $q->where('is_active', true);
    }
}
