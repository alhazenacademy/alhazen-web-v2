<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Tutor;
use App\Models\Article;
use App\Models\SalesNumber;
use App\Models\SiteSetting;

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

    // Article
    $featured = Article::featureArticle()->first();
    $latestArticle = Article::published()
      ->when($featured, fn($q) => $q->where('id', '!=', $featured->id))
      ->latest('published_at')
      ->take(4)
      ->get();

    $faqs = Faq::active()->ordered()->get();

    return view('pages.index', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'featured', 'latestArticle', 'faqs'));
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

    $faqs = Faq::active()->ordered()->get();

    return view('pages.program', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs'));
  }

  public function event()
  {
    return view('pages.event');
  }

  public function about()
  {
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

    $faqs = Faq::active()->ordered()->get();

    return view('pages.about', compact('mapembed', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs'));
  }
}
