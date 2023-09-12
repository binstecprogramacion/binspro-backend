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
        Schema::create('categorias_archivos', function (Blueprint $table) {
            $table->id();
            $table->string("nom_categoria_archivo", 35)->nullable(false);

            Helpers::helper_migration($table, [], "Entidad dónde se almacentan las categorias de los archivos que se relacionan con las cuentas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_archivos');
    }
};
