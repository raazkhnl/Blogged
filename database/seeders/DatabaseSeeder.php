<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Roles
        \App\Models\Role::create([
            'name' => 'admin',
            'desc' => 'admin role',
        ]);
        \App\Models\Role::create([
            'name' => 'agent',
            'desc' => 'agent role',
        ]);
        \App\Models\Role::create([
            'name' => 'user',
            'desc' => 'user role',
        ]);

    //Users
    \App\Models\User::factory()->create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password'=> Hash::make('admin123'),
        'role_id'=> 1,

    ]);
    \App\Models\User::factory()->create([
        'name' => 'Agent',
        'email' => 'agent@agent.com',
        'password'=> Hash::make('agent123'),
        'role_id'=> 2,

    ]);
    \App\Models\User::factory()->create([
        'name' => 'User',
        'email' => 'user@user.com',
        'password'=> Hash::make('user123'),
        'role_id'=> 3,

    ]);


        //Permissions
    \App\Models\Permission::create([
        'name' => 'add_user',
        'desc' => 'can add new user',
    ]);
    \App\Models\Permission::create([
        'name' => 'view_user',
        'desc' => 'can view user infos.',
    ]);
    \App\Models\Permission::create([
        'name' => 'edit_user',
        'desc' => 'can edit user infos.',
    ]);
    \App\Models\Permission::create([
        'name' => 'delete_user',
        'desc' => 'can delete user',
    ]);
    }
}
