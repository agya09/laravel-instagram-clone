<?php

namespace App\Http\Controllers;

use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        // dd($user);
        $user = User::find($user);
        return view('home', [
            'user' => $user,
        ]);
    }
}
