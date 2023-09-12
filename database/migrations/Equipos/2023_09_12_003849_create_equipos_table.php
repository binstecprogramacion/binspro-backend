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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string("cod_serie", 50)->nullable(false);
            $table->string("peso", 20)->nullable(false);
            $table->string("tipo", 15)->nullable(false);

            Helpers::helper_migration($table, [
                ["modelo_id", false, "modelos"]
            ], "Entidad que almacena los equipos de la empresa");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
