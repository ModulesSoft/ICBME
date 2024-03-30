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
        // get current db name
        $dbconnection = Config::get('database.default');
        $DBName = Config::get("database.connections.$dbconnection.database");
        // create new db name based on the session data
        $DBNameWithoutYear = substr($DBName, 0, -4);
        $newDBName = $DBNameWithoutYear . Session::get('appyear');
        // reconfig the DB if the requested DB (year) is not the default DB (year)
        if (Session::get('appyear') !== null && $DBName !== $newDBName) {
            Config::set("database.connections.$dbconnection.database", $newDBName);
            DB::purge('mysql');
        }

        return $next($request);
    }
}
