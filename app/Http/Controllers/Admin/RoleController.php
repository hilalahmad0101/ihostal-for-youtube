<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->get();
        return view('admin.roles.list', compact('roles'));
    }
    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:roles,name'
        ]);
        Role::create($validate);
        return to_route('admin.role.list')->with('success', 'Role create successfully');
    }
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.roles.update', compact('role'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);
        Role::findOrFail($id)->update($validate);
        return to_route('admin.role.list')->with('success', 'Role updates successfully');
    }

    public function delete($id)
    { 
        Role::findOrFail($id)->delete();
        return to_route('admin.role.list')->with('success', 'Role Delete successfully');
    }
}
