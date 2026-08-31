<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Tutor;
use App\Models\Article;
use App\Models\Program;
use App\Models\SalesNumber;
use App\Models\SiteSetting;
use App\Models\Category;
use App\Models\Banner;
use App\Models\LinkPage;
use App\Models\StudentWork;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    // ─── Shared Helpers ────────────────────────────────────────────

    private function getSalesPhone(): ?string
    {
        return optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
    }

    private function getFooterData(): array
    {
        $settings = SiteSetting::companySettings();

        return [
            'whatsapp' => $settings['whatsapp'] ?? null,
            'email'    => $settings['email'] ?? null,
            'website'  => $settings['website'] ?? null,
            'address'  => $settings['address'] ?? null,
            'socials'  => collect($settings['socials'] ?? [])
                ->where('is_active', true)
                ->sortBy('sort_order'),
        ];
    }

    private function getFaqs(): \Illuminate\Support\Collection
    {
        return Faq::active()->ordered()->get();
    }

    private function getProgramLinks(): array
    {
        return Program::active()
            ->ordered()
            ->get()
            ->map(fn (Program $program) => [
                'label' => $program->name,
                'url'   => match (strtolower($program->name)) {
                    'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                    'roblox', 'roblox studio' => 'kursus-roblox',
                    default => 'program',
                },
                'key' => $program->key,
            ])
            ->all();
    }

    private function getTutorCards(): array
    {
        return Tutor::active()
            ->ordered()
            ->get()
            ->map(fn (Tutor $t) => [
                'name'     => $t->name,
                'years'    => $t->years,
                'skills'   => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo'    => $t->photo_url,
                'bg-photo' => $t->bg_color_safe,
                'gender'   => $t->gender,
                'bio'      => $t->bio,
            ])
            ->all();
    }

    // ─── Public Methods ────────────────────────────────────────────

    public function index()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        // Section Articles
        $featured = Article::featureArticle()->first();
        $latestArticle = Article::published()
            ->when($featured, fn ($q) => $q->where('id', '!=', $featured->id))
            ->latest('published_at')
            ->take(4)
            ->get();

        // Section Program Cards
        $programCards = Program::query()
            ->with([
                'info' => fn ($q) => $q->where('context', 'kids_landing'),
            ])
            ->active()
            ->home()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                $info = $program->info;

                return [
                    'bg'         => $info->bg_class ?? 'bg-[#E5E7EB]',
                    'text-color' => $info->text_color_class ?? 'text-[#0F172A]',
                    'child'      => $info
                        ? $info->child_image_url
                        : asset('assets/kids/program-detail/anak.webp'),
                    'icon'  => $info && $info->icon_path ? asset($info->icon_path) : null,
                    'title' => $info->title ?? $program->name,
                    'sub'   => $info->short_tagline ?? $info->subtitle ?? '',
                    'url'   => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },
                ];
            })
            ->values()
            ->toArray();

        $programCards[] = [
            'bg'         => 'bg-[#E5E7EB]',
            'text-color' => 'text-[#0F172A]',
            'child'      => asset('assets/kids/program-detail/anak.webp'),
            'icon'       => asset('assets/kids/program-detail/icon-program6.png'),
            'title'      => 'View All',
            'sub'        => 'Explore all our courses',
            'url'        => 'program',
        ];

        $banners = Banner::where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->map(fn ($banner) => asset('storage/' . $banner->image))
            ->toArray();

        $studentWorks = StudentWork::latest()
            ->get()
            ->map(fn ($work) => [
                'image'       => $work->image_url,
                'hover_image' => $work->hover_image_url,
                'alt'         => $work->alt,
                'title'       => $work->title,
                'description' => $work->description,
                'demo_link'   => $work->demo_link,
                'category'    => $work->category,
                'bg-text'     => $work->bg_text,
            ]);

        return view('pages.index', compact(
            'salesPhone', 'cards', 'featured', 'latestArticle',
            'faqs', 'programCards', 'programLinks', 'banners', 'studentWorks'
        ) + $footerData);
    }

    public function program()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        // Section Program Tabs & Content
        $programs = Program::query()
            ->with([
                'info' => fn ($q) => $q->where('context', 'kids_landing'),
            ])
            ->active()
            ->lainnya()
            ->ordered()
            ->get();

        $tabs = $programs->map(function (Program $program) {
            $info = $program->info;

            return [
                'key'       => $program->key,
                'label'     => $info->title ?? $program->name,
                'icon'      => $info && $info->icon_path ? asset($info->icon_path) : null,
                'bg'        => $info->bg_class ?? 'bg-[#E5E7EB]',
                'textColor' => $info->text_color_class ?? 'text-[#0F172A]',
                'child'     => $info
                    ? $info->child_image_url
                    : asset('assets/kids/program-detail/anak.webp'),
                'sub'       => $info->short_tagline ?? $info->subtitle ?? '',
            ];
        })->values()->toArray();

        $content = $programs->mapWithKeys(function (Program $program) {
            $info = $program->info;

            return [
                $program->key => [
                    'title'    => $info->title ?? $program->name,
                    'subtitle' => $info->subtitle ?? '',
                    'modules'  => $info->modules_label ?? '',
                    'students' => $info->students_label ?? '',
                    'desc'     => $info->description ?? '',
                    'tools'    => $info->tools ?? [],
                    'price'    => $info->price_label ?? '',
                    'ctaText'  => $info->cta_text ?? '',
                    'ctaHref'  => $info->cta_href,
                ],
            ];
        })->toArray();

        return view('pages.program', compact(
            'salesPhone', 'cards', 'faqs', 'tabs', 'content', 'programLinks'
        ) + $footerData);
    }

    public function event()
    {
        $salesPhone = $this->getSalesPhone();

        return view('pages.event', compact('salesPhone'));
    }

    public function about()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $mapembed     = SiteSetting::companySettings()['map_embed'] ?? null;

        return view('pages.about', compact(
            'mapembed', 'faqs', 'programLinks', 'salesPhone'
        ) + $footerData);
    }

    public function article()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();

        $categories = Category::select('name', 'slug')
            ->orderBy('name')
            ->get()
            ->map(fn ($c) => [
                'label'  => $c->name,
                'href'   => route('category.show', $c->slug),
                'active' => false,
            ])
            ->values()
            ->toArray();

        array_unshift($categories, [
            'label'  => 'All',
            'href'   => route('artikel'),
            'active' => true,
        ]);

        $posts = Article::published()
            ->latest('published_at')
            ->get()
            ->map(fn (Article $a) => [
                'title'   => $a->title,
                'slug'    => $a->slug,
                'date'    => optional($a->published_at)->translatedFormat('F d, Y'),
                'image'   => $a->cover_image_url,
                'alt'     => $a->cover_image_alt,
                'url'     => route('artikel.show', $a->slug),
                'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, ' [...]'),
            ])
            ->toArray();

        return view('pages.artikel', compact(
            'salesPhone', 'categories', 'posts', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function articleShow(Request $request, string $slug)
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $programLinks = $this->getProgramLinks();

        $article = Article::query()
            ->with([
                'author:id,name,profile_photo_path',
                'category:id,name,slug',
            ])
            ->where('slug', $slug)
            ->where(function ($q) {
                /** @var \App\Models\User|null $user */
                $user = Auth::user();

                if ($user?->hasAnyRole(['super_admin', 'admin', 'author'])) {
                    return;
                }

                $q->where('status', 'published')
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
            })
            ->firstOrFail();

        $related = Article::query()
            ->published()
            ->where('category_id', $article->category_id)
            ->whereKeyNot($article->getKey())
            ->latest('published_at')
            ->take(6)
            ->get(['title', 'slug', 'cover_image', 'cover_image_alt', 'published_at', 'content'])
            ->map(function (Article $a) {
                return [
                    'title'   => $a->title,
                    'slug'    => $a->slug,
                    'date'    => $a->published_at_formatted,
                    'image'   => $a->cover_image_url,
                    'alt'     => $a->cover_image_alt,
                    'url'     => route('artikel.show', $a->slug),
                    'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, ' [...]'),
                ];
            })
            ->toArray();

        $coverPath = $article->cover_image_url;
        if ($coverPath) {
            $ogImage = Str::startsWith($coverPath, ['http://', 'https://'])
                ? $coverPath
                : url($coverPath);
        } else {
            $ogImage = asset('assets/nav-logo.webp');
        }

        return view('pages.artikel.show', compact(
            'salesPhone', 'article', 'related', 'programLinks', 'ogImage'
        ) + $footerData);
    }

    public function katalog()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();

        return view('pages.katalog', compact(
            'faqs', 'programLinks', 'salesPhone'
        ) + $footerData);
    }

    public function kursus_coding_anak()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.program.kursus_coding_anak', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function kursus_roblox()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.program.kursus_roblox', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function category(string $slug)
    {
        $category     = Category::where('slug', $slug)->firstOrFail();
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();

        $categories = Category::select('name', 'slug')
            ->orderBy('name')
            ->get()
            ->map(fn ($c) => [
                'label'  => $c->name,
                'href'   => route('category.show', $c->slug),
                'active' => $c->slug === $slug,
            ])
            ->values()
            ->toArray();

        array_unshift($categories, [
            'label'  => 'All',
            'href'   => route('artikel'),
            'active' => false,
        ]);

        $posts = Article::published()
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->get()
            ->map(fn ($a) => [
                'title'   => $a->title,
                'slug'    => $a->slug,
                'date'    => optional($a->published_at)->translatedFormat('F d, Y'),
                'image'   => $a->cover_image_url,
                'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, '...'),
            ])
            ->toArray();

        return view('pages.artikel', [
            'posts'        => $posts,
            'categories'   => $categories,
            'catTitle'     => 'Kategori',
            'title'        => $category->name,
            'description'  => $category->description,
            'salesPhone'   => $salesPhone,
            'faqs'         => $faqs,
            'programLinks' => $programLinks,
        ] + $footerData);
    }

    public function holiday_program()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.event.holiday_program', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function kursus_blender()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.program.kursus_blender', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function kursus_python()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.program.kursus_python', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function kursus_php()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.program.kursus_php', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function lokasi()
    {
        $salesPhone = $this->getSalesPhone();

        return view('pages.lokasi', compact('salesPhone'));
    }

    public function alhazen_hackathon()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.event.alhazen_hackathon', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function goes_to_school()
    {
        $salesPhone = $this->getSalesPhone();

        return view('pages.goes_to_school', compact('salesPhone'));
    }

    public function ramadhan_technoclass()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.event.ramadhan_technoclass', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function kursus_front_end()
    {
        $salesPhone   = $this->getSalesPhone();
        $footerData   = $this->getFooterData();
        $faqs         = $this->getFaqs();
        $programLinks = $this->getProgramLinks();
        $cards        = $this->getTutorCards();

        return view('pages.program.kursus_front_end', compact(
            'salesPhone', 'cards', 'faqs', 'programLinks'
        ) + $footerData);
    }

    public function event_starter_project()
    {
        return view('pages.event.starter_project');
    }

    public function event_master_gpt()
    {
        return redirect('https://ai.alhazen.academy/master-gpt');
    }

    public function event_master_gemini()
    {
        return redirect('https://ai.alhazen.academy/master-gemini');
    }

    public function links()
    {
        $highlights = LinkPage::query()
            ->where('type', 'highlight')
            ->where('active', true)
            ->orderBy('sort_order')
            ->get();

        $events = LinkPage::where('type', 'event')
            ->where('active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.links', compact('highlights', 'events'));
    }

    public function coding_experience()
    {
        $salesPhone = $this->getSalesPhone();
        $launchAt   = '2026-09-15T00:00:00';

        return view('pages.event.coding_experience_class_coming_soon', compact('salesPhone', 'launchAt'));

        // Class Active
        // return view('pages.event.coding_experience_class');
    }

    public function form_review_kelas()
    {
        return view('pages.random.form_review_kelas');
    }
}
