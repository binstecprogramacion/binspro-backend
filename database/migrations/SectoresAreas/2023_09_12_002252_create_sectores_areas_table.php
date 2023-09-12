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
        Schema::create('sectores_areas', function (Blueprint $table) {
            $table->id();
            $table->string("nom_sector_area", 50)->nullable(false);
            $table->string("estado_sector_area", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["area_sede_id", false, "areas_sedes"]
            ], "Entidad que almacena la distribución de los sectores dentro de las áreas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectores_areas');
    }
};
