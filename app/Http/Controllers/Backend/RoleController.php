<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('backend.role_list', compact('roles'));
    }
    public function create()
    {
        $role = app(Role::class);
        return view('backend.role_create', compact('role'));
    }

    public function store(Request $request)
    {
        Role::create([
            'Role_name' => $request->Role_name,
        ]);
        return redirect()->route('role_list')->with('success', 'Role created successfully');
    }

    public function delete($id)
    {
        $role = Role::where('id', $id)->first();

        if($role)
        {
            $role->delete();
            session()->flash('success', 'Role deleted successfully');
            return redirect()->route('role_list');
        }
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('backend.role_edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->Role_name = $request->Role_name;
        $role->save();

        session()->flash('success', 'Role updated successfully');
        return redirect()->route('role_list');
    }
}
