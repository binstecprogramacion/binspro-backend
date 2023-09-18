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
        Schema::create('controladores_incidencias', function (Blueprint $table) {
            $table->id();

            Helpers::helper_migration($table, [
                ["incidencia_id", false, "incidencias"],
                ["usuario_id", false, "usuarios"],
            ], "Entidad dónde se almacenan los usuarios Service Desk o Administrador asignados a las incidencias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controladores_incidencias');
    }
};
