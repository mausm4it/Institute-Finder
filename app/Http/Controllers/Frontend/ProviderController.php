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
        $SocialUser = Socialite::driver($client)->user();
        $user = User::updateOrCreate([
            'client_id' => $SocialUser->id,
            'client' => $client,
        ], [
            'name' => $SocialUser->name,
            'username' => $SocialUser->nickname,
            'email' => $SocialUser->email,
            'client_token' => $SocialUser->token,
        ]);
     
        Auth::login($user);
     
        return redirect()->route('dashboard');
    }
}