<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function toggleLocale()
    {
        // Toggle between 'en' and 'fa'
        $locale = (App::getLocale() == 'en') ? 'fa' : 'en';

        Session::put('applocale', $locale);

        return Redirect::back();
    }
}
