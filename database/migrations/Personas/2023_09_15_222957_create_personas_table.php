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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("doc_identidad", 15)->nullable(false);
            $table->string("nom_persona", 100)->nullable(false);
            $table->string("telefono", 15)->nullable(false);
            $table->string("direccion", 150)->nullable(false);

            /**Falta agregar la llave foránea para direcciones */

            Helpers::helper_migration($table, [], "Entidad dónde se almacena los datos personales de los usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
