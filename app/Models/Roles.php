<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        "name_rol"
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at",
        "user_created",
        "user_updated",
        "user_deleted",
    ];


    public function menus()
    {
        return $this->belongsToMany(menus::class, 'd_menu_permissions_roles', 'rol_id', 'menu_id')
                    // ->using(MenuPermissionRol::class)
                    // ->withTimestamps()
                    ->distinct();
    }

    public function withPermissions()
    {
        return $this->with(['menus' => function ($query) {
            $query->with('permissions');
        }]);
    }


    // public function permissions()
    // {
    //     return $this->belongsToMany(Permissions::class, 'd_menu_permissions_roles', 'rol_id', 'permission_id')
    //         ->withPivot('menu_id')
    //         ->withTimestamps()
    //         ->as("permissions_menus")
    //         ->distinct();
    // }

}
