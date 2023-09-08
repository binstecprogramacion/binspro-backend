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
        Schema::create('usuarios', function (Blueprint $table) {
            $fks = [
                ["tipo_usuario_id", false, "tipo_usuarios"],
                ["rol_id", false, "roles"],
                ["persona_id", false, "personas"],
                ["empresa_id", true, "empresas"],
            ];

            $table->id();
            $table->string("email", 100)->nullable(false)->unique();
            $table->string("password", 100)->nullable(false);

            Helpers::helper_migration($table, $fks, "Entidad dónde se registrarán los usuarios para acceder a la plataforma");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
