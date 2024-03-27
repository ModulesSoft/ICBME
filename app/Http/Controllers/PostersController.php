<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Contracts\View\View;

class PostersController extends Controller
{
    function show(): View
    {
        $settings = Setting::pluck('value', 'key');
        $image = $settings['poster'];
        return view('pages.poster', ['image' => $image, 'settings' => $settings]);
    }
}
