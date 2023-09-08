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
        Schema::create('tecnico_asignado_incidencias', function (Blueprint $table) {
            $table->id();
            $table->string("estado_tai", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["tecnico_id", false, "usuarios"],
                ["incidencia_id", false, "incidencias"],
            ], "Entidad dónde se relacionarán las incidencias con los técnicos que son asignados a solucionarlas.");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnico_asignado_incidencias');
    }
};
