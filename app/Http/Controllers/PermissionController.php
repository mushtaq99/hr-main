<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    public function index()
    {

        return view('permissions.index', [
            'permissions' => Permission::paginate(10)
        ]);

    }

    public function create()
    {
        return view('permissions.createpermission');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5']
        ]);

        Permission::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name,),
        ]);
        return redirect()->route('permissions.index')->with('message', 'Data Save Sucessfully');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('permissions.index')->with('message','Permission updated !!!');
    }

    public function delete(Permission $permission)
    {
        return view('permissions.delete', ['permission' => $permission]);

    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with('message','Permission Deleted !!!');

    }

}
