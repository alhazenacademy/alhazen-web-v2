<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkPage extends Model
{
    protected $fillable = [
        'type',
        'title',
        'description',
        'url',
        'icon',
        'icon_background',
        'sort_order',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }
}
