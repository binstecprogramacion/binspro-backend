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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string("nom_menu", 30)->nullable(false)->unique();
            $table->string("estado_menu", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["parent_id", true, "menus"]
            ],"Entidad encargada de guardar todos los menus y sub menus del dashboard de la plataforma");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
