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
        Schema::create('categorias_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 50);

            Helpers::helper_migration($table, [], "Entidad encargada de almacenar las categorias de mantenimientos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_mantenimientos');
    }
};
