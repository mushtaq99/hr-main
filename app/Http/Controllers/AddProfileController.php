<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddProfileController extends Controller
{
    public function add(Request $request,User $user)
    {
        return view('add_profile');

    }
}
