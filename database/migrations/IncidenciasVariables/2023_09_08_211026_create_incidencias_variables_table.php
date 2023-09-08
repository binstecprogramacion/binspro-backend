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
        Schema::create('incidencias_variables', function (Blueprint $table) {
            $table->id();
            $table->text("descripcion")->nullable(true);
            $table->enum("estado", ["En proceso", "Revisado", "Aceptado"])->nullable(false)->default("En proceso");

            Helpers::helper_migration($table, [
                ["incidencia_id", false, "incidencias"]
            ], "Entidad encargada de notificar a los administradores de que se requiere su aprobación para continuar con el proceso de solución de incidencias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias_variables');
    }
};
