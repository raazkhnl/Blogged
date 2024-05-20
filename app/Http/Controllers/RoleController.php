<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\{
    User,
    Role,
    Permission,
    RolePermission
};
use DB;

class RoleController extends Controller
{

    public function assignRole(Request $request, $userId)
    {
        // Validate the request data
        $request->validate([
            'id' => 'required|exists:roles,id',
        ]);

        // Assign the role to the user
        $response = Http::post('/users/'.$userId.'/assign-role', [
            'id' => $request->id,
        ]);

        return redirect('/users/'.$userId.'/roles')->with('success', 'Role assigned successfully');
    }

    public function showUserRoles($userId)
    {
        // Fetch the user
        $user = User::findOrFail($userId);

        // Fetch the roles assigned to the user
        $response = Http::get('/users/'.$userId.'/roles');
        $roles = $response->json()['roles'];

        return view('user-roles', compact('user', 'roles'));
    }

    







    // public function AllPermission(){
    //     $permissions = Permission::all();
    //     return view('permission.all_permission', compact('permissions'));
    // }

    public function AllPermission(Request $request)
    {
        $user_id = $request->user_id; 
        // Get the user's role ID
        $user = User::find($user_id);
        $role_id = $user->role_id;

        // Get the permissions for the user's role
        $permissions = DB::table('permissions')
            ->join('role_permissions', 'permissions.id', '=', 'role_permissions.id')
            ->where('role_permissions.role_id', '=', $role_id)
            ->get();

        // Return the permissions
        return view('permission.all_permission', compact('permissions'));
    }

    public function AddPermission(Request $request)
    {
        $role_id = $request->role_id; 
        $permission_id = $request->permission_id; 

        $role = Role::where('id', $role_id)->first();
        $permission = Permission::where('id', $permission_id)->first();
        $role_permission = new RolePermission();
        $role_permission->id = $permission->id;
        $role_permission->role_id = $role->id;
        $role_permission->save();
        // Return the permissions
        return view('role.added');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $roles = Role::with('user')->get();
        return view('role.index');
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


