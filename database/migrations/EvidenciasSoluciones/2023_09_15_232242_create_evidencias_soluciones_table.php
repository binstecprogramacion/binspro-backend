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
        Schema::create('evidencias_soluciones', function (Blueprint $table) {
            $table->id();
            $table->text("comentario")->nullable();
            $table->text("img_ref")->nullable();

            Helpers::helper_migration($table, [
                ["usuario_id", false, "usuarios"]
            ], "Entidad dónde se almacenarán las evidencias de las incidencias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencias_soluciones');
    }
};
