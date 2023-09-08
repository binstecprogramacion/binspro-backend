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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->string("nom_permiso", 30)->nullable(false)->unique();
            $table->string("estado_permiso", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [],"Entidad encargada de almacenar los nombres de los permisos que se usarán dentro de la plataforma");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
