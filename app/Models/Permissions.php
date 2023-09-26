<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = [
        "name_permission"
    ];

    protected $hidden = [
        "user_created",
        "user_updated",
        "user_deleted"
    ];


    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'd_menu_permissions_roles', 'permission_id', 'rol_id')
            ->withPivot('menu_id')
            ->withTimestamps();
    }

    public function menus()
    {
        return $this->belongsToMany(menus::class, 'd_menu_permissions_roles', 'permission_id', 'menu_id')
            ->withPivot('rol_id')
            ->withTimestamps();
    }

}
