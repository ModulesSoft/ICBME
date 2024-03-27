<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Speaker;
use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    public function show(Speaker $speaker)
    {
        $speaker = Speaker::find($speaker->id);
        $settings = Setting::pluck('value', 'key');
        return view('pages.speaker', compact('settings', 'speaker'));
    }
}
