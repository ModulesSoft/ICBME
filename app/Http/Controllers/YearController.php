<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class YearController extends Controller
{
    public function changeYear(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'year' => ['required', 'integer', 'between:2000,3000'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $year = $request->year;

        Session::put('appyear', $year);

        Alert::success('Year',  Session::get('appyear'));

        return Redirect::back();
    }
}
