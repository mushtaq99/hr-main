<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)
            ]
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)]);
        // the Auth class is used to login the user
        Auth::login($user);
        // the intended function is used when some url is protected then direct  to login page when login goback to that page
        return redirect()->intended('/dashboard');


    }
}
