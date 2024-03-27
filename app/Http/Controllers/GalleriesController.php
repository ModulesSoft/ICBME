<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Setting;
use Illuminate\Contracts\View\View;

class GalleriesController extends Controller
{
    function index(): View
    {
        $galleries = Gallery::all();
        $settings = Setting::pluck('value', 'key');
        return view('pages.gallery', ['galleries' => $galleries, 'settings' => $settings]);
    }
}
