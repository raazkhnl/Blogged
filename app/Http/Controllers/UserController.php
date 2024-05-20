<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Role,
    Permission,
    RolePermission
};

class UserController extends Controller
{
    public function profile($userId, Request $request)
    {
        $user=User::find($userId);
        return view('profile', compact('user'));
    }


    //User Roles and Permissions

    public function showAssignRoleForm($userId)
    {
        // Fetch the user
        $user = User::findOrFail($userId);

        // Fetch all roles
        $roles = Role::all();

        return view('assign-role', compact('userId', 'roles'));
    }

    public function assignRole(Request $request, $userId)
    {
        // Validate the request data
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        // Assign the role to the user
        $user = User::findOrFail($userId);
        $user->roles()->sync([$request->role_id]);

        return redirect()->back()->with('success', 'Role assigned successfully');
    }

    public function showUserRoles($userId)
    {
        // Fetch the user
        $user = User::findOrFail($userId);

        // Fetch the roles assigned to the user
        $roles = $user->roles;

        return view('user-roles', compact('user', 'roles'));
    }
}

// public function comment($id)
// {
//     $blog = Blog::find($id);

//     return view('blog.comment', compact('blog'));
// }