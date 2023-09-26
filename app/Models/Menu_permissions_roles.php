<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

// use Illuminate\Database\Eloquent\Model;

class Menu_permissions_roles extends Pivot
{
    // use HasFactory;

    protected $table = "d_menu_permissions_roles";

    // protected $fillable = [
    //     "rol_id",
    //     "menu_id",
    //     "permission_id",
    // ];

    // protected $hidden = [
    //     "user_created",
    //     "user_updated",
    //     "user_deleted",
    // ];

    public function menus()
    {
        return $this->belongsTo(menus::class, "menu_id", "id");
    }

    public function roles()
    {
        return $this->belongsTo(Roles::class, "rol_id", "id");
    }

    public function permissions()
    {
        return $this->belongsTo(Permissions::class, "permission_id", "id");
    }
}
