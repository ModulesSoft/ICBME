<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (
            isset(auth()->user()->language)
            && auth()->user()->language
            && array_key_exists(auth()->user()->language, Config::get('languages'))
        ) {
            if (session()->has('applocale')) {
                App::setLocale(session()->get('applocale'));
            } else {
                Session::put('applocale', auth()->user()->language);
            }
        }
        if (session()->has('applocale')) {
            App::setLocale(session()->get('applocale'));
        } else {
            // This is optional as Laravel will automatically set the fallback language if there is
            // none specified
            App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
