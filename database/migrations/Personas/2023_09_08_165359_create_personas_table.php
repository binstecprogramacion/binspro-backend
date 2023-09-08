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
            $table->string("nombres", 45)->nullable(false);
            $table->string("apellidos", 45)->nullable(false);
            $table->string("doc_identidad", 10)->nullable(false)->unique();
            $table->string("telefono", 20)->nullable(false)->unique();
            $table->string("direccion", 100);

            Helpers::helper_migration($table, [],"Entidad que registra a todas las personas dentro de la plataforma");
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
