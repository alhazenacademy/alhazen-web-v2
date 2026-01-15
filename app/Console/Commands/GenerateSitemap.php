<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Article;
use App\Models\Category;
use App\Models\Program;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Auto generate sitemap from routes & database';

    public function handle()
    {
        $sitemap = Sitemap::create();

        /**
         * 1️⃣ STATIC ROUTES (tanpa parameter & non-internal)
         */
        collect(Route::getRoutes())
            ->filter(function ($route) {

                $uri  = $route->uri();
                $name = $route->getName();

                // ❌ EXCLUDE INTERNAL / ADMIN / AUTH PAGES
                $excludedPrefixes = [
                    'login',
                    'logout',
                    'register',
                    'password',
                    'admin',
                    'dashboard',
                    'filament',
                    'nova',
                    'telescope',
                    'horizon',
                    'api',
                ];

                foreach ($excludedPrefixes as $prefix) {
                    if (str_starts_with($uri, $prefix)) {
                        return false;
                    }
                }

                return in_array('GET', $route->methods())
                    && $name
                    && !str_contains($uri, '{')
                    && !str_starts_with($uri, '_')
                    && !str_contains($uri, 'trial');
            })
            ->each(function ($route) use ($sitemap) {

                $priority = match ($route->getName()) {
                    'home' => 1.0,
                    'program', 'holiday.program' => 0.9,
                    default => 0.7,
                };

                $sitemap->add(
                    Url::create(route($route->getName()))
                        ->setPriority($priority)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                );
            });

        /**
         * 2️⃣ PROGRAM / KURSUS (dynamic slug)
         */
        Program::where('is_active', true)->each(function ($program) use ($sitemap) {

            $url = match (strtolower($program->name)) {
                'coding' => url('/kursus-coding-anak'),
                'roblox' => url('/kursus-roblox'),
                default => url('/program/' . $program->slug),
            };

            $sitemap->add(
                Url::create($url)
                    ->setLastModificationDate($program->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.9)
            );
        });

        /**
         * 3️⃣ ARTIKEL
         */
        Article::where('status', 'published')->each(function ($article) use ($sitemap) {
            $sitemap->add(
                Url::create(route('artikel.show', $article->slug))
                    ->setLastModificationDate($article->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        });

        /**
         * 4️⃣ KATEGORI ARTIKEL
         */
        Category::each(function ($category) use ($sitemap) {
            $sitemap->add(
                Url::create(route('category.show', $category->slug))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.6)
            );
        });

        /**
         * 5️⃣ WRITE SITEMAP FILE
         */
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap berhasil dibuat & diperbarui!');
    }
}
