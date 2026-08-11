<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentWork extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'hover_image',
        'category',
        'demo_link',
    ];

    protected $appends = [
        'alt',
        'bg_text',
    ];

    public function getAltAttribute(): string
    {
        return 'Hasil karya siswa ' . $this->title;
    }

    public function getBgTextAttribute(): string
    {
        return match ($this->category) {
            'Game & Animation' => 'bg-[#EB5353]',
            'Application' => 'bg-[#FAA52D]',
            'Robotics' => 'bg-[#4F46E5]',
            'IoT & Robotics' => 'bg-[#10B981]',
            'Other' => 'bg-gray-500',
            default => 'bg-gray-500',
        };
    }

    public function getImageUrlAttribute(): string
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : asset('assets/kids/student-work/student_work_dummy.png');
    }

    public function getHoverImageUrlAttribute(): string
    {
        return $this->hover_image
            ? asset('storage/' . $this->hover_image)
            : asset('assets/kids/student-work/student_work_hover_dummy.png');
    }
}
