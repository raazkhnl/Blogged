<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];

    // A role has many users.
    public function users()
    {
        return $this->hasMany(User::class);    
    }

    // A role can have multiple permissions. A role belongs to many permissions
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions', 'role_id', 'permission_id');    
    }

    public function hasPermission($permission){
        return $this->permissions->contains('name', $permission);
    }
}
