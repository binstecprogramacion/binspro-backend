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
        Schema::create('d_menu_permiso_roles', function (Blueprint $table) {
            $table->id();

            Helpers::helper_migration($table, [
                ["menu_id", false, "menus"],
                ["rol_id", false, "roles"],
                ["permiso_id", false, "permisos"],
            ], "Entidad dónde se almacena ordenadamente como estarán distribuidos los permisos por rol y menu");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_menu_permiso_roles');
    }
};
