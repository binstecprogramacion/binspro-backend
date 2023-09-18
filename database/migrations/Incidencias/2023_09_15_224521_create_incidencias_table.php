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
            $table->text("descripcion")->nullable();
            $table->enum("tipo_ticket", ["Fijo", "Variable", "Simple"])->nullable(false)->default("Simple");
            $table->enum("prioridad", ["Urgente", "Importante", "Moderado", "Derivados"])->nullable(false)->default("Moderado");
            $table->enum("estado", ["Programado", "En curso", "Terminada", "Cancelada", "Reprogramada"])->nullable(false)->default("Programado");
            $table->text("img_ref")->nullable(true);

            Helpers::helper_migration($table, [
                ["categoria_id", false, "categorias_mantenimientos"],
                ["usuario_id", false, "usuarios"],
            ], "Entidad que almacena todas las incidencias, tanto correctivas como preventivas");
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
