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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string("nom_table", 100)->nullable(false);
            $table->string("direccion", 150)->nullable(false);
            $table->string("tipo", 1)->nullable(false);
            $table->string("metraje", 15)->nullable(false);



            Helpers::helper_migration($table, [
                ["cuenta_id", false, "cuentas"],
                ["distrito_id", false, "ubdistrito"],
            ], "Entidad dónde se almacen todas las sedes de las cuentas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
