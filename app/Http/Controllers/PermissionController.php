<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    public function create()
    {
        return view('permissions.permissions', ['data' => Permission::all()]);
    }

    public function edit($id): View|\Illuminate\Foundation\Application|Factory|Application
    {

        return view('permissions.permission-edit', ['data' => Permission::find($id)]);
    }

    public function delete($id): View|\Illuminate\Foundation\Application|Factory|Application
    {

        return view('permissions.permission-delete', ['data' => Permission::find($id)]);

    }

    public function destroy($id)
    {

        $permission = Permission::find($id);
        $permission->delete();
        return redirect('/permissions');

    }

    public function update($id, Request $request)
    {

        $permission = Permission::find($id);

        $permission->update([
            'name' => $request->permission,
            'slug' => Str::slug($request->permission)
        ]);

        return redirect('/permissions');


    }

    public function add_permissions()
    {

        return view('permissions.permission_add');
    }

    public function store(Request $request)
    {


        $request->validate([
            'permissions.*' => ['required', 'min:2'],
        ]);

        $permissions = $request->permissions;


        // Using create method to insert records
        foreach ($permissions as $p) {
            Permission::create([
                'name' => $p,
                'slug' => Str::slug($p),
            ]);
        }
        return redirect('/permissions');

    }
}
