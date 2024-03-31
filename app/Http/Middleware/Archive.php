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
        $currentDateTime = Carbon::now();

        // Create the archive date
        $archiveDateTime = $currentDateTime->copy();
        $archiveDateTime->day(Config::get('services.archive.day'));
        $archiveDateTime->month(Config::get('services.archive.month'));
        $archiveDateTime->startOfDay();
        // Check if the the archive date is past
        if ($currentDateTime > $archiveDateTime) {
            $nextArchiveDateTime = $archiveDateTime->copy();
            $nextArchiveDateTime->addYear();
            // Set a session for archive date (is used in front-end)
            Session::put('archiveDatetime', $nextArchiveDateTime->toDateTimeString());
        } else {
            $lastArchiveDateTime = $archiveDateTime->copy();
            $lastArchiveDateTime->subYear();
            // Set a session for archive date (is used in front-end)
            Session::put('archiveDatetime', $archiveDateTime->toDateTimeString());
        }

        return $next($request);
    }
}
