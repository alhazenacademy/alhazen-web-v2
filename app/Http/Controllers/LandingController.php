<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Tutor;
use App\Models\Article;
use App\Models\Program;
use App\Models\SalesNumber;
use App\Models\SiteSetting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LandingController extends Controller
{
  public function index()
  {
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

    $tutors = Tutor::active()->ordered()->get();
    $cards = $tutors->map(function (Tutor $t) {
      return [
        'name' => $t->name,
        'years' => $t->years,
        'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
        'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
        'bg-photo' => $t->bg_color_safe, // accessor di model (default aman k$s['img']alau null)
        'gender' => $t->gender,        // 'male' | 'female'
        'bio' => $t->bio,
      ];
    })->all();

    // Footer settings
    $settings = SiteSetting::companySettings();
    $whatsapp = $settings['whatsapp'] ?? null;
    $email = $settings['email'] ?? null;
    $website = $settings['website'] ?? null;
    $address = $settings['address'] ?? null;
    $socials = collect($settings['socials'] ?? [])
      ->where('is_active', true)
      ->sortBy('sort_order');
    $programLinks = Program::active()
        ->ordered()
        ->get()
        ->map(function (Program $program) {
            return [
                'label' => $program->name,
                'url'   => 'program',      // nama route: route('program', ['tab' => key])
                'key'   => $program->key,  // dipakai sebagai tab
            ];
        })
        ->all();

    // Article
    $featured = Article::featureArticle()->first();
    $latestArticle = Article::published()
      ->when($featured, fn($q) => $q->where('id', '!=', $featured->id))
      ->latest('published_at')
      ->take(4)
      ->get();

    $faqs = Faq::active()->ordered()->get();

    $programCards = Program::query()
        ->with(['info' => function ($q) {
            $q->where('context', 'kids_landing');
        }])
        ->active()   // scopeActive()
        ->home()     // scopeHome()
        ->ordered()  // scopeOrdered()
        ->get()
        ->map(function (Program $program) {
            $info = $program->info;

            return [
                'bg'         => $info->bg_class ?? 'bg-[#E5E7EB]',
                'text-color' => $info->text_color_class ?? 'text-[#0F172A]',
                'child'     => $info
                        ? $info->child_image_url   // <-- ini pakai accessor
                        : asset('assets/kids/program-detail/anak.png'),
                'icon'       => $info && $info->icon_path
                    ? asset($info->icon_path)
                    : null,
                'title'      => $info->title ?? $program->name,
                'sub'        => $info->short_tagline
                    ?? $info->subtitle
                    ?? '',
                // sesuaikan route detail programmu
                'url'        => 'program',
            ];
        })
        ->values()
        ->toArray();

    // Tambah 1 kartu "View All" manual (seperti di hardcoded-mu)
    $programCards[] = [
        'bg'         => 'bg-[#E5E7EB]',
        'text-color' => 'text-[#0F172A]',
        'child'      => asset('assets/kids/program-detail/anak.png'),
        'icon'       => asset('assets/kids/program-detail/icon-program6.png'),
        'title'      => 'View All',
        'sub'        => 'Explore all our courses',
        'url'        => 'program', // ganti sesuai route index
    ];

    return view('pages.index', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'featured', 'latestArticle', 'faqs', 'programCards', 'programLinks'));
  }

  public function program()
  {
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

    $tutors = Tutor::active()->ordered()->get();
    $cards = $tutors->map(function (Tutor $t) {
      return [
        'name' => $t->name,
        'years' => $t->years,
        'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
        'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
        'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
        'gender' => $t->gender,        // 'male' | 'female'
        'bio' => $t->bio,
      ];
    })->all();

    // Footer settings
    $settings = SiteSetting::companySettings();
    $whatsapp = $settings['whatsapp'] ?? null;
    $email = $settings['email'] ?? null;
    $website = $settings['website'] ?? null;
    $address = $settings['address'] ?? null;
    $socials = collect($settings['socials'] ?? [])
      ->where('is_active', true)
      ->sortBy('sort_order');
    $programLinks = Program::active()
        ->ordered()
        ->get()
        ->map(function (Program $program) {
            return [
                'label' => $program->name,
                'url'   => 'program',      // nama route: route('program', ['tab' => key])
                'key'   => $program->key,  // dipakai sebagai tab
            ];
        })
        ->all();

    $faqs = Faq::active()->ordered()->get();

    $programs = Program::query()
        ->with(['info' => function ($q) {
            $q->where('context', 'kids_landing');
        }])
        ->active()   // scopeActive()
        ->ordered()  // scopeOrdered()
        ->get();

    // === Gantikan $tabs ===
    $tabs = $programs->map(function (Program $program) {
        $info = $program->info;

        return [
            'key'       => $program->key,
            'label'     => $info->title ?? $program->name,
            'icon'      => $info && $info->icon_path
                            ? asset($info->icon_path)
                            : null,
            'bg'        => $info->bg_class ?? 'bg-[#E5E7EB]',
            'textColor' => $info->text_color_class ?? 'text-[#0F172A]',
            'child'     => $info
                        ? $info->child_image_url   // <-- ini pakai accessor
                        : asset('assets/kids/program-detail/anak.png'),
            'sub'       => $info->short_tagline
                            ?? $info->subtitle
                            ?? '',
        ];
    })->values()->toArray();

    // === Gantikan $content ===
    $content = $programs->mapWithKeys(function (Program $program) {
        $info = $program->info;

        return [
            $program->key => [
                'title'    => $info->title ?? $program->name,
                'subtitle' => $info->subtitle ?? '',
                'modules'  => $info->modules_label ?? '',
                'students' => $info->students_label ?? '',
                'desc'     => $info->description ?? '',
                'tools'    => $info->tools ?? [],         // dicast array di model
                'price'    => $info->price_label ?? '',
                'ctaText'  => $info->cta_text ?? '',
                'ctaHref'  => $info->cta_href,            // boleh null
            ],
        ];
    })->toArray();

    return view('pages.program', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'tabs', 'content', 'programLinks'));
  }

  public function event()
  {
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

    return view('pages.event', compact('salesPhone'));
  }

  public function about()
  {
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

    $settings = SiteSetting::companySettings();

    $mapembed = $settings['map_embed'] ?? null;

    // Footer settings
    $whatsapp = $settings['whatsapp'] ?? null;
    $email = $settings['email'] ?? null;
    $website = $settings['website'] ?? null;
    $address = $settings['address'] ?? null;
    $socials = collect($settings['socials'] ?? [])
      ->where('is_active', true)
      ->sortBy('sort_order');
    $programLinks = Program::active()
        ->ordered()
        ->get()
        ->map(function (Program $program) {
            return [
                'label' => $program->name,
                'url'   => 'program',      // nama route: route('program', ['tab' => key])
                'key'   => $program->key,  // dipakai sebagai tab
            ];
        })
        ->all();

    $faqs = Faq::active()->ordered()->get();

    return view('pages.about', compact('mapembed', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks', 'salesPhone'));
  }
  
  public function article(Request $request)
  {
    $cat = $request->query('cat');
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
    $categories = Category::select('name','slug')
        ->orderBy('name')
        ->get()
        ->map(fn ($c) => [
            'label'  => $c->name,
            'href'   => route('artikel', ['cat' => $c->slug]),
            'active' => $cat === $c->slug,
        ])
        ->values()
        ->toArray();

    array_unshift($categories, [
        'label'  => 'All',
        'href'   => route('artikel'),
        'active' => $cat === null,
    ]);

    $query = Article::query()
        ->published()
        ->when($cat, fn($q) => $q->whereRelation('category', 'slug', $cat))
        ->latest('published_at')
        ->select(['id','title','slug','cover_image','published_at','content']);

    $posts = $query->get()->map(function (Article $a) {
        return [
            'title' => $a->title,
            'slug'  => $a->slug,
            'date'  => optional($a->published_at)->translatedFormat('F d, Y'),
            'image' => $a->cover_image_url,
            'url'   => route('artikel.show', $a->slug),
            'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, ' [...]'),

        ];
    })->toArray();

    $settings = SiteSetting::companySettings();
    $whatsapp = $settings['whatsapp'] ?? null;
    $email = $settings['email'] ?? null;
    $website = $settings['website'] ?? null;
    $address = $settings['address'] ?? null;
    $socials = collect($settings['socials'] ?? [])
      ->where('is_active', true)
      ->sortBy('sort_order');
    $programLinks = Program::active()
        ->ordered()
        ->get()
        ->map(function (Program $program) {
            return [
                'label' => $program->name,
                'url'   => 'program',
                'key'   => $program->key,
            ];
        })
        ->all();

    $faqs = Faq::active()->ordered()->get();

    return view('pages.artikel', compact('salesPhone', 'categories', 'posts', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks'));
  }

  public function articleShow(Request $request, string $slug)
  {
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
    $article = Article::query()
            ->with([
                'author:id,name,profile_photo_path',
                'category:id,name,slug',
            ])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->firstOrFail();
    
    $related = Article::query()
            ->published()
            ->where('category_id', $article->category_id)
            ->whereKeyNot($article->getKey())
            ->latest('published_at')
            ->take(6)
            ->get(['title','slug','cover_image','published_at', 'content'])
            ->map(function (Article $a) {
                $image = $a->cover_image_url;

                return [
                    'title' => $a->title,
                    'slug'  => $a->slug,
                    'date'  => $a->published_at_formatted,
                    'image' => $image,
                    'url'   => route('artikel.show', $a->slug),
                    'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, ' [...]'),
                ];
            })
            ->toArray();

    $coverPath = $article->cover_image_url;

    if ($coverPath) {
        if (Str::startsWith($coverPath, ['http://', 'https://'])) {
            $ogImage = $coverPath;
        } else {
            $ogImage = url($coverPath);
        }
    } else {
        $ogImage = asset('assets/nav-logo.png');
    }
    
    $settings = SiteSetting::companySettings();
    
    $whatsapp = $settings['whatsapp'] ?? null;
    $email = $settings['email'] ?? null;
    $website = $settings['website'] ?? null;
    $address = $settings['address'] ?? null;
    $socials = collect($settings['socials'] ?? [])
      ->where('is_active', true)
      ->sortBy('sort_order');
    $programLinks = Program::active()
        ->ordered()
        ->get()
        ->map(function (Program $program) {
            return [
                'label' => $program->name,
                'url'   => 'program',
                'key'   => $program->key,
            ];
        })
        ->all();
    
    return view('pages.artikel.show', compact('salesPhone', 'article', 'related', 'whatsapp', 'email', 'address', 'website', 'socials', 'programLinks', 'ogImage'));
      
  }

  public function katalog()
  {
    $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

    $settings = SiteSetting::companySettings();

    // Footer settings
    $whatsapp = $settings['whatsapp'] ?? null;
    $email = $settings['email'] ?? null;
    $website = $settings['website'] ?? null;
    $address = $settings['address'] ?? null;
    $socials = collect($settings['socials'] ?? [])
      ->where('is_active', true)
      ->sortBy('sort_order');
    $programLinks = Program::active()
        ->ordered()
        ->get()
        ->map(function (Program $program) {
            return [
                'label' => $program->name,
                'url'   => 'program',      // nama route: route('program', ['tab' => key])
                'key'   => $program->key,  // dipakai sebagai tab
            ];
        })
        ->all();

    $faqs = Faq::active()->ordered()->get();

    return view('pages.katalog', compact('whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks', 'salesPhone'));
  }
}
