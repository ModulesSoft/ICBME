<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ]);

        if ($validator->fails()) {
            Alert::error(trans('messages.subscribe.title'), trans('messages.subscription.fail'));
            return Redirect::back();
        }

        try {
            // Store the email and IP address in the Subscription model
            $subscription = new Subscription();
            $subscription->email = $request->email;
            $subscription->ip = $request->ip(); // Get the request IP address
            $subscription->save();
            Alert::success(trans('messages.subscribe.title'), trans('messages.subscription.success'));
        } catch (UniqueConstraintViolationException $e) {
            // Log the error or handle it as per your application's requirements
            Log::info('Subscription unique Email error');
            Alert::error(trans('messages.subscribe.title'), trans('messages.subscription.repetitive_fail'));
        }

        return  Redirect::back();
    }
}
