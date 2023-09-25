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
        Schema::create('sector_areas', function (Blueprint $table) {
            $table->id();
            $table->string("name_sector_area", 45);

            Helpers::helper_migration($table, [
                ["areas_campus_id", true, "areas_campus"]
            ], "Entidad que almacena los sectores de las áreas en las sedes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sector_areas');
    }
};
