<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Archive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the current date and time
        $currentDateTime = Carbon::now();

        // Modify the day and month values
        $currentDateTime->day(Config::get('services.archive.day'));
        $currentDateTime->month(Config::get('services.archive.month'));
        $currentDateTime->startOfDay();
        $currentDateTime->addYear();

        // Format the date as a string
        $formattedDateTime = $currentDateTime->toDateTimeString();

        Session::put('archiveDatetime', $formattedDateTime);

        return $next($request);
    }
}
