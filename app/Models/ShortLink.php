<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ShortLink extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'destination_url',
        'is_active',
        'qr_code',
    ];

    public function generateQr(): void
    {
        $directory = storage_path('app/public/qrcodes');

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filename = "{$this->slug}.svg";

        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new SvgImageBackEnd()
        );

        $writer = new Writer($renderer);

        $writer->writeFile(
            url("/go/{$this->slug}"),
            "{$directory}/{$filename}"
        );

        $this->update([
            'qr_code' => "qrcodes/{$filename}",
        ]);
    }

    protected static function booted(): void
    {
        // Saat slug / URL berubah
        static::updating(function (ShortLink $shortLink) {

            if ($shortLink->isDirty(['slug', 'destination_url'])) {

                if ($shortLink->qr_code) {
                    Storage::disk('public')->delete($shortLink->qr_code);
                }

                $shortLink->qr_code = null;
            }
        });

        // Saat data dihapus
        static::deleting(function (ShortLink $shortLink) {

            if ($shortLink->qr_code) {
                Storage::disk('public')->delete($shortLink->qr_code);
            }
        });
    }
}
