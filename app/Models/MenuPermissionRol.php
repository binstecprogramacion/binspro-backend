<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\DB;

class MenuPermissionRol extends Pivot
{
    protected $table = "d_menu_permissions_roles";

    public function permissions()
    {
        return DB::table("d_menu_permissions_roles")
                ->join("permissions", "permissions.id", "=", "permission_id", "inner")
                ->where("rol_id", "=", $this->rol_id)
                ->where("menu_id", "=", $this->menu_id)
                ->select(["permissions.id", "permissions.name_permission"])
                ->get();
    }
}
