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
        Schema::create('categoria_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string("nom_cat_mantenimiento", 35)->nullable(false)->unique();
            $table->string("estado_cat_mantenimiento", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [],"Entidad dónde se guardarán todas las categorias de mantenimiento existentes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_mantenimientos');
    }
};
