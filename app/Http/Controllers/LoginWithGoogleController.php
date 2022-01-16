<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginWithGoogleController extends Controller
{
    public function __invoke()
    {
        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();
            if ($isUser) {
                Auth::login($isUser);
                $data = '1111';
                return redirect()->route('personal.cabinet');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('user'),
                ]);
                Auth::login($createUser);
                return redirect();
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
