<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function showAssignPermissionForm($roleId)
    {
        // Fetch the role
        $role = Role::findOrFail($roleId);

        // Fetch all permissions
        $permissions = Permission::all();

        return view('assign-permission', compact('roleId', 'permissions'));
    }
    public function assignPermission(Request $request, $roleId)
    {
        // Validate the request data
        $request->validate([
            'permission_id' => 'required|exists:permissions,id',
        ]);

        // Assign the permission to the role
        $role = Role::findOrFail($roleId);
        $role->permissions()->sync([$request->permission_id]);

        return redirect()->back()->with('success', 'Permission assigned successfully');
    }
    public function showRolePermissions($roleId)
    {
        // Fetch the role
        $role = Role::findOrFail($roleId);

        // Fetch the permissions assigned to the role
        $permissions = $role->permissions;

        return view('role-permissions', compact('role', 'permissions'));
    }
}
