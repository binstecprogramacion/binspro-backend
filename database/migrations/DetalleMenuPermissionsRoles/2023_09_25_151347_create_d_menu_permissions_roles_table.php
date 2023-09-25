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
        Schema::create('d_menu_permissions_roles', function (Blueprint $table) {
            $table->id();

            Helpers::helper_migration($table, [
                ["menu_id", true, "menus"],
                ["rol_id", true, "roles"],
                ["permission_id", true, "permissions"],
            ], "Entidad many to many de menu, permiso y rol");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_menu_permissions_roles');
    }
};
