<?php

namespace App\Http\Controllers;

use App\News;
use App\Setting;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = News::orderBy('created_at', 'desc')->get();
        $settings = Setting::pluck('value', 'key');
        return view('pages.news', ['news' => $news, 'settings' => $settings]);
    }

    public function show(News $news): View
    {
        $new  = News::find($news->id);
        $settings = Setting::pluck('value', 'key');
        return view('pages.new', compact('settings', 'new'));
    }
}
