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
        Schema::create('revisiones_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->text("observacion")->nullable();
            $table->enum("estado", ["En proceso", "Aceptado", "Rechazado"])->nullable(false)->default("En proceso");

            Helpers::helper_migration($table, [
                ["servicio_variable_id", false, "incidencias_variables"]
            ], "Entidad que confirma el uso de presupuestos fuera del establecido en la PE para la solución de incidencias.");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisiones_solicitudes');
    }
};
