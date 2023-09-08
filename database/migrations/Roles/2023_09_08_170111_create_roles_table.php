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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("nom_rol", 25)->nullable(false)->unique();
            $table->string("estado_rol", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [],"Entidad encargada de ingresar los nombres de los roles (cargos) que se utilizan en la organización");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
