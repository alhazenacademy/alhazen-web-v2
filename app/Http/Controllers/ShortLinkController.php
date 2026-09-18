<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    public function redirect($slug)
    {
        $link = ShortLink::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return redirect()->away($link->destination_url);
    }
}
