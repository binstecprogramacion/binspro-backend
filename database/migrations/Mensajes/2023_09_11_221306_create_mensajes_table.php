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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->text("mensaje")->nullable(false);
            $table->text("img")->nullable();

            Helpers::helper_migration($table, [
                ["tecnico_asignado_incidencia_id", true, "tecnico_asignado_incidencias"],
                ["usuario_controlador_incidencia_id", true, "usuario_controlador_incidencias"]
            ], "Entidad dónde se almacerán los chats que tengan los usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
