<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Sponsor;
use Illuminate\Contracts\View\View;

class SponsorsController extends Controller
{
    function index(): View
    {
        $sponsors = Sponsor::all();
        $settings = Setting::pluck('value', 'key');
        return view('sections.sponsors', ['sponsors' => $sponsors, 'settings' => $settings]);
    }
}
