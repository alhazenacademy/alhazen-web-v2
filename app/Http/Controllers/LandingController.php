<?php

namespace App\Http\Controllers;

use App\Models\SalesNumber;
use App\Models\Tutor;

class LandingController extends Controller
{
    public function index()
    {
      $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
      
      $tutors = Tutor::active()->ordered()->get();
      $cards = $tutors->map(function (Tutor $t) {
            return [
                'name'     => $t->name,
                'years'    => $t->years,
                'skills'   => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo'    => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
                'gender'   => $t->gender,        // 'male' | 'female'
                'bio'      => $t->bio,
            ];
        })->all();

      return view('pages.index', compact('salesPhone', 'cards'));
    }

    public function program()
    {
      $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

      $tutors = Tutor::active()->ordered()->get();
      $cards = $tutors->map(function (Tutor $t) {
            return [
                'name'     => $t->name,
                'years'    => $t->years,
                'skills'   => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo'    => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
                'gender'   => $t->gender,        // 'male' | 'female'
                'bio'      => $t->bio,
            ];
        })->all();

      return view('pages.program', compact('salesPhone', 'cards'));
    }
}
