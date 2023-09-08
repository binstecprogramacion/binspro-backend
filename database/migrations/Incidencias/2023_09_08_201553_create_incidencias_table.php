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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 100)->nullable(false);
            $table->text("description");
            $table->string("tipo_incidencia")->nullable(true);
            $table->string("prioridad", 1)->nullable(false)->default("1");
            $table->string("estado_incidencia", 1)->nullable(false)->default("1");
            $table->string("ubicacion_incidencia", 150)->nullable(true);
            $table->string("img_ref", 100)->nullable(true);

            Helpers::helper_migration($table, [
                ["categoria_mantenimiento_id", true, "categoria_mantenimientos"],
                ["usuario_id", false, "usuarios"]
            ], "Entidad que almacen todas las incidencias que los usuarios puedan identificar.");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
