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
        Schema::create('tipos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nom_tipo", 50)->nullable(false)->unique();

            Helpers::helper_migration($table, [], "Entidad que ingresará todos los diferentes tipos de usuarios dentro de la plataforma");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_usuarios');
    }
};
