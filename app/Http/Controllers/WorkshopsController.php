<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Workshop;
use Illuminate\Contracts\View\View;

class WorkshopsController extends Controller
{
    function index(): View
    {
        $workshops = Workshop::all();
        $settings = Setting::pluck('value', 'key');
        return view('pages.workshops', ['workshops' => $workshops, 'settings' => $settings]);
    }
}
