<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function Subscriber(Request $request){

        $subscriber = new Subscriber();

         $subscriber->email = $request->email;
         $subscriber->save();

         return redirect()->back()->with('success', 'Subcriber Request Send Successfully We Will Contact your Soon By Mail');
    }
}