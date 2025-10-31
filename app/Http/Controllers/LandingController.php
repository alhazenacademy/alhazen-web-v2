<?php

namespace App\Http\Controllers;

use App\Models\SalesNumber;

class LandingController extends Controller
{
    public function index()
    {
      $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
      return view('pages.index', compact('salesPhone'));
    }

    public function program()
    {
      $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
      return view('pages.program', compact('salesPhone'));
    }
}
