<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
   public function redirect ($client) {
        return Socialite::driver($client)->redirect();
    }

    public function callback ($client) {
        $user = Socialite::driver($client)->user();
     
        dd($user);
    }
}