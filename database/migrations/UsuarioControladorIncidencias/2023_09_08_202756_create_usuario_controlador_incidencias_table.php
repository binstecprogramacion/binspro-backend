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
        Schema::create('usuario_controlador_incidencias', function (Blueprint $table) {
            $table->id();
            $table->string("estado_uci")->nullable(false)->default(1);

            Helpers::helper_migration($table, [
                ["incidencias_id", false, "incidencias"],
                ["usuarios_id", false, "usuarios"],
            ], "Entidad que almacena los usuarios que recepción, validan y derivan las incidencias.");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_controlador_incidencias');
    }
};
