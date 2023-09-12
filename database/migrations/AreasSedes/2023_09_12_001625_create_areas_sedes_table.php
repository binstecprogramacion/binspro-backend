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
        Schema::create('areas_sedes', function (Blueprint $table) {
            $table->id();
            $table->string("nom_area_sede", 50)->nullable(false);
            $table->enum("tipo", ["público", "privado"])->nullable(false)->default("público");
            $table->string("estado_area_sede", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["piso_sede_id", false, "pisos_sedes"]
            ], "Entidad que almacena la distribución de las areas en cada piso de una sede");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas_sedes');
    }
};
