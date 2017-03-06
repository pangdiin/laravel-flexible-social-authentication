<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialLoginController extends Controller
{
    public function redirect($service, Request $request)
    {
    	return Socialite::driver($service)->redirect();
    }

    public function callback($service, Request $request)
    {
    	$serviceUser = Socialite::driver($service)->user();

    	dd($serviceUser);
    }
}
