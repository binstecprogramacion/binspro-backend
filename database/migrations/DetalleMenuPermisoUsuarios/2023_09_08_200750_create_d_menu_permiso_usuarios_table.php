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
        Schema::create('d_menu_permiso_usuarios', function (Blueprint $table) {
            $fks = [
                ["menu_id", false, "menus"],
                ["usuario_id", false, "usuarios"],
                ["permiso_id", false, "permisos"],
            ];

            $table->id();
            $table->string("estado_dmpu", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, $fks, "Entidad que permite la relación de N:M de menu, permisos y usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_menu_permiso_usuarios');
    }
};
