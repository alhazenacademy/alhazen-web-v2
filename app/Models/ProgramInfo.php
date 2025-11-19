<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'context',

        'title',
        'subtitle',
        'short_tagline',

        'modules_label',
        'students_label',
        'description',

        'tools',

        'price_label',
        'cta_text',
        'cta_href',

        'icon_path',
        'child_image_path',
        'bg_class',
        'text_color_class',
    ];

    protected $casts = [
        'tools' => 'array',
    ];

    /** Relasi balik ke Program
     */
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    protected static function booted(): void
    {
        // Copy icon ke folder program-detail setiap kali disimpan
        static::saved(function (self $info) {
            if (! $info->icon_path) {
                return;
            }

            $disk = Storage::disk('public_assets');

            $sourcePath = $info->icon_path; // contoh: assets/kids/index-program/icon-program1.png

            if (! $disk->exists($sourcePath)) {
                return;
            }

            $fileName   = basename($sourcePath);                  // icon-program1.png
            $targetDir  = 'assets/kids/program-detail';
            $targetPath = $targetDir . '/' . $fileName;

            // copy (overwrite kalau sudah ada)
            $disk->put($targetPath, $disk->get($sourcePath));
        });

        // Hapus icon di kedua folder ketika ProgramInfo dihapus
        static::deleting(function (self $info) {
            $disk = Storage::disk('public_assets');

            // Hapus icon utama (sekarang hanya ada di program-detail)
            if ($info->icon_path && $disk->exists($info->icon_path)) {
                $disk->delete($info->icon_path);
            }

            // (Opsional) hapus juga gambar anak/hero jika disimpan di disk yang sama
            if ($info->child_image_path && $disk->exists($info->child_image_path)) {
                $disk->delete($info->child_image_path);
            }
        });
    }
}
