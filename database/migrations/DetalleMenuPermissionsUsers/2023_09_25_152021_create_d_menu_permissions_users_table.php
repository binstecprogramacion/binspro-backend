<?php

use App\Helpers\Helpers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_menu_permissions_users', function (Blueprint $table) {
            $table->id();

            Helpers::helper_migration($table, [
                ["menu_id", true, "menus"],
                ["permission", true, "permissions"],
                ["user_id", true, "users"],
            ], "Entidad many to many de menu, permiso y usuario");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_menu_permissions_users');
    }
};
