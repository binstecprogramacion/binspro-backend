<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menus';

    protected $fillable = [
        "name_menu",
        "parent_id",
    ];

    protected $hidden = [
        "user_created",
        "user_updated",
        "user_deleted",
    ];

    public function children()
    {
        return $this->hasMany(menus::class, 'parent_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'd_menu_permissions_roles', 'menu_id', 'rol_id')
            ->withPivot('permission_id')
            ->withTimestamps();
    }

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class, 'd_menu_permissions_roles', 'menu_id', 'permission_id')
            ->withPivot('rol_id')
            ->withTimestamps();
    }

}
