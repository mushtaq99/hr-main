<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
        return view('users.create', [
            'roles' => Role::get()]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // $role->permissions()->attach($request->permissions);


        $user->roles()->attach($request->roles);
        return redirect()->route('users.index')->with('message', 'User Created Successfully');


    }

    public function edit(User $user)
    {

        $role = Role::get();
        return view('users.edit', ['user' => $user, 'roles' => $role]);
    }

    public function update(Request $request, User $user)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id . ',id',
        ]);

        if ($request->password != null) {
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            $validated['password'] = bcrypt($request->password);
        }

        $user->update($validated);
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->with('message', 'User Updated Successfully');


    }

    public function delete(User $user)
    {
        $role = Role::get();
        return view('users.delete', ['user' => $user, 'roles' => $role]);
    }

    public function destroy(User $user, Request $request)
    {
        $user->delete();
        return redirect()->route('users.index')->with('message', 'User Deleted Successfully');

    }
}
