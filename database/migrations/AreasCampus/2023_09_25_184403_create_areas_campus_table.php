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
        Schema::create('areas_campus', function (Blueprint $table) {
            $table->id();
            $table->string("name_areas", 45);
            $table->enum("type", ["Comunes", "Privadas"])->default("Comunes");

            Helpers::helper_migration($table, [
                ["flat_campus_id", true, "flat_campus"]
            ], "Entidad que almacena las areas de una sede");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas_campus');
    }
};
