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
            $table->id();
            $table->string("email", 120)->nullable(false)->unique();
            $table->string("password", 15)->nullable(false);

            Helpers::helper_migration($table, [
                ["tipo_usuario_id", true, "tipos_usuarios"],
                ["rol_id", false, "roles"],
                ["area_id", false, "areas"],
                ["persona_id", true, "personas"],
                ["proveedor_id", true, "proveedores"],
            ], "Entidad que almacena todos los usuarios que se autenticarán en la plataforma");
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
