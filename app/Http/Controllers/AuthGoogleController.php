<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthGoogleController extends Controller
{
    public function __invoke()
    {
        return Socialite::driver('google')->redirect();
    }
}
