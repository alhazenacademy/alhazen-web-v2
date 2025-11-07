<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tutor extends Model
{
    use HasFactory;

    // Pastikan pakai tabel 'tutors'
    protected $table = 'tutors';

    // Kolom yang boleh diisi mass-assignment
    protected $fillable = [
        'name',
        'slug',
        'years',
        'skills',
        'photo',
        'bg_color',
        'gender',     // 'male' | 'female'
        'bio',
        'is_active',
        'sort_order',
    ];

    // Casting tipe data
    protected $casts = [
        'years' => 'integer',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];


    // Auto-set slug saat name diisi (jika slug masih kosong)
    protected static function booted(): void
    {
        static::saving(function (self $model) {
            if (empty($model->slug) && !empty($model->name)) {
                $model->slug = Str::slug($model->name);
            }
            // Normalisasi bg_color (#RRGGBB)
            if ($model->bg_color && !str_starts_with($model->bg_color, '#')) {
                $model->bg_color = '#' . ltrim($model->bg_color, '#');
            }
        });
    }


    // URL foto dengan fallback berdasar gender
    public function getPhotoUrlAttribute(): string
    {
        if (!empty($this->photo)) {
            // Jika sudah absolute URL, tetap; jika path storage, bisa pakai asset()
            return Str::startsWith($this->photo, ['http://', 'https://'])
                ? $this->photo
                : asset($this->photo);
        }

        $fallback = $this->gender === 'female'
            ? asset('assets/kids/index-tutor/female-pic.png')
            : asset('assets/kids/index-tutor/male-pic.png');

        return $fallback;
    }

    // Warna latar bg foto dengan default aman
    public function getBgColorSafeAttribute(): string
    {
        return $this->bg_color ?: '#FACC15';
    }

    // Skills sebagai array (opsional)
    public function getSkillsArrayAttribute(): array
    {
        if (is_array($this->skills))
            return $this->skills;
        return collect(preg_split('/\s*,\s*/', (string) $this->skills, -1, PREG_SPLIT_NO_EMPTY))
            ->values()->all();
    }


    public function scopeActive($q)
    {
        return $q->where('is_active', true);
    }

    public function scopeOrdered($q)
    {
        return $q->orderBy('sort_order')->orderBy('name');
    }
}
