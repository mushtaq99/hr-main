<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::get()
        ]);

    }
    public function create()
    {

        return view('register');

    }
}
