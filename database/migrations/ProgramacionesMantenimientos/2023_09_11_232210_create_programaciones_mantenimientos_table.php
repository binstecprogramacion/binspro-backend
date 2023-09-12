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
        Schema::create('programaciones_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_inicio")->nullable();
            $table->date("fecha_fin")->nullable();
            $table->string("estado_pm", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["incidencia_id", false, "incidencias"],
                ["mantenimiento_id", false, "ht_mantenimientos"],
            ], "Entidad que almacena las fechas programadas para los mantenimientos preventivos (tickets fijos)");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programaciones_mantenimientos');
    }
};
