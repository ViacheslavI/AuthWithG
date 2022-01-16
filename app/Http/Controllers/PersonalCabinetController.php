<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class PersonalCabinetController extends Controller
{
    public function __invoke()
    {
        $data = User::all();
        return view('personal.cabinet',compact('data'));
    }
}
