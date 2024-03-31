<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if appyear is not set, set it to the conference last year
        if (Session::get('appyear') === null) {
            Session::put('appyear', Config::get('services.conference.last_year'));
        }
        // get current db name
        $dBConnection = Config::get('database.default');
        $dBNameWithoutYear = Config::get("database.connections.$dBConnection.database");
        // create new db name based on the session data
        $dBName = $dBNameWithoutYear . Session::get('appyear');
        // reconfig the DB if the requested DB (year) is not the default DB (year)
        Config::set("database.connections.$dBConnection.database", $dBName);

        return $next($request);
    }
}
