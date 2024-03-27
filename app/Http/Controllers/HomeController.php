<?php

namespace App\Http\Controllers;

use App\News;
use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Venue;
use App\Hotel;
use App\Faq;
use App\Price;
use App\Amenity;
use App\Statistics;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        $hit = new Statistics;
        $hit->page = 'home';
        $hit->ip = $this->getIp();
        $hit->save();

        $totalHits = $hit::all()->count();
        $todayHits = Statistics::where('date', '>', Carbon::parse('-24 hours'))->count();
        $settings = Setting::pluck('value', 'key');
        $speakers = Speaker::all();
        $schedules = Schedule::with('speaker')
            ->orderBy('start_time', 'asc')
            ->get()
            ->groupBy('day_number');
        $venues = Venue::all();
        $hotels = Hotel::all();
        //        $authors = Author::all();
        //        $galleries = Gallery::all();
        //        $sponsors = Sponsor::all();
        $news = News::orderBy('created_at', 'desc')->get();
        $faqs = Faq::all();
        $prices = Price::with('amenities')->get();
        $amenities = Amenity::with('prices')->get();

        return view('home', compact('settings', 'speakers', 'schedules', 'venues', 'hotels', 'faqs', 'prices', 'amenities', 'totalHits', 'todayHits', 'news'));
    }

    private function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to double check
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
}
