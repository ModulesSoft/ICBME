<?php

namespace App\Http\Controllers;

use App\Committee;
use App\Setting;
use Illuminate\Contracts\View\View;

class CommitteesController extends Controller
{
    public function index(): View
    {
        $committees = Committee::all();
        $settings = Setting::pluck('value', 'key');
        return view('sections.committees', ['committees' => $committees, 'settings' => $settings]);
    }
}
