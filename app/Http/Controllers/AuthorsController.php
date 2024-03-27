<?php

namespace App\Http\Controllers;

use App\Author;
use App\Setting;
use Illuminate\Contracts\View\View;

class AuthorsController extends Controller
{
    function index(): View
    {
        $authors = Author::all();
        $settings = Setting::pluck('value', 'key');
        return view('sections.authors', ['authors' => $authors, 'settings' => $settings]);
    }
    public function show(Author $author): View
    {
        $author = Author::find($author->id);
        $settings = Setting::pluck('value', 'key');
        return view('pages.author', compact('settings', 'author'));
    }
}
