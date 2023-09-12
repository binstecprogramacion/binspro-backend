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
        Schema::create('pisos_sedes', function (Blueprint $table) {
            $table->id();
            $table->string("nom_piso_sede", 50)->nullable(false);
            $table->string("estado_piso_sede", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["sede_id", false, "sedes"]
            ], "Entidad que almacena la distribución de pisos de cada sede");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pisos_sedes');
    }
};
