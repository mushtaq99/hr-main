<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create()
    {
        return view('users.user', ['data' => User::all()]);
    }

    public function add_user()
    {
        return view('users.user_add', ['data' => Role::all()]);
    }


    public function store(Request $request)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $user->roles()->attach($request->roles);

        return redirect('/users');
    }

    public function edit($id)
    {

        $data = User::with('roles')->find($id);
        $roles_data = Role::all();

        return view('users.user-edit', ['data' => $data, 'roles_data' => $roles_data]);
    }

    public function update(Request $request, $id)
    {

        if ($request->password != null) {

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => ['required', 'confirmed', Password::defaults()],
                'roles.*' => ['required', 'integer', 'exists:roles,id']
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
        } else {

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => 'required|email|unique:users,email,' . $id,
                'roles.*' => ['required', 'integer', 'exists:roles,id']
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        }


        $user = User::find($id);

        $user->update($data);
        $user->roles()->sync($request->roles);

        return redirect('/users');

    }

    public function delete(User $user)
    {


        $roles = $user->roles()->get();

        return view('users.user-delete', ['data' => $user, 'roles' => $roles]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users');
    }
}
