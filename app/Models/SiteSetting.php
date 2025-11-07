<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteSetting extends Model
{
    use HasFactory;

    protected $table = 'site_settings';

    protected $fillable = [
        'key',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
    ];

    protected static function booted(): void
    {
        // Hapus icon yang tidak terpakai saat UPDATE
        static::updating(function (self $model) {
            $originalSettings = $model->getOriginal('settings') ?? [];
            $newSettings = $model->settings ?? [];

            $oldSocials = collect(Arr::get($originalSettings, 'socials', []));
            $newSocials = collect(Arr::get($newSettings, 'socials', []));

            $oldPaths = $oldSocials->pluck('icon_path')->filter()->values();
            $newPaths = $newSocials->pluck('icon_path')->filter()->values();

            // cari path yang dulu ada, sekarang sudah tidak ada
            $toDelete = $oldPaths->diff($newPaths);

            foreach ($toDelete as $path) {
                if (!$path) {
                    continue;
                }

                // jaga-jaga: hanya hapus file di dalam assets/
                if (!Str::startsWith($path, 'assets/')) {
                    continue;
                }

                Storage::disk('public_assets')->delete($path);
            }
        });

        // Opsional: kalau suatu saat SiteSetting bisa dihapus,
        // hapus semua icon yang dipakai record tersebut
        static::deleting(function (self $model) {
            $settings = $model->settings ?? [];
            $socials = collect(Arr::get($settings, 'socials', []));

            $paths = $socials->pluck('icon_path')->filter();

            foreach ($paths as $path) {
                if (!$path) {
                    continue;
                }

                if (!Str::startsWith($path, 'assets/')) {
                    continue;
                }

                Storage::disk('public_assets')->delete($path);
            }
        });
    }


    /**
     * Shortcut: ambil settings perusahaan (key: company_profile)
     */
    public static function company(): ?self
    {
        return static::where('key', 'company_profile')->first();
    }

    /**
     * Shortcut: ambil array murni-nya saja.
     */
    public static function companySettings(): array
    {
        return optional(static::company())->settings ?? [];
    }
}
