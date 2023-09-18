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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->text("mensaje")->nullable();
            $table->text("img_ref")->nullable();

            Helpers::helper_migration($table, [
                ["incidencia_id", false, "incidencias"],
                ["usuario_id", false, "usuarios"],
            ], "Entidad dónde se almacenarán los chats de los involucrados en una incidencia");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
