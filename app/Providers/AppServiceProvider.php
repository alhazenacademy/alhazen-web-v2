<?php

namespace App\Providers;

use App\Models\Article;
use App\Observers\ArticleObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View preview "Lari ke Sekolah" adalah ekspor TurboWarp Packager ~8 MB
        // yang dibungkus @verbatim. Kompilasi Blade-nya melebihi batas default
        // PCRE (1.000.000 backtrack) sehingga view:cache/render menghasilkan
        // halaman kosong tanpa error. Naikkan limit agar kompilasi berhasil.
        ini_set('pcre.backtrack_limit', '50000000');

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Register the Article observer
        Article::observe(ArticleObserver::class);
    }
}
