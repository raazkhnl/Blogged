<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // protected $table = 'tbl_permissions';
    // protected $primaryKey = 'permission_id';

    protected $guarded=[];

    // A permission belongs to many roles.
    public function roles(){
        return $this->belongsToMany(Role::class, 'role_permissions', 'permission_id', 'role_id');
    }
}
