<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id','title','slug','excerpt','content','cover_image',
        'status','published_at','reading_time','views','meta_title',
        'meta_description','is_featured',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured'  => 'boolean',
    ];

    // Relasi penulis
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Scope: hanya artikel publish
    public function scopePublished(Builder $q): Builder
    {
        return $q->where('status', 'published')
                 ->whereNotNull('published_at')
                 ->where('published_at', '<=', now());
    }
}
