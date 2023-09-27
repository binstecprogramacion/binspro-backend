<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = "user_information";

    protected $fillable = [
        "doc_ide",
        "name",
        "lastname",
        "celphone",
        "address",
        "distrito_id"
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at",
        "user_created",
        "user_updated",
        "user_deleted",
    ];
}
