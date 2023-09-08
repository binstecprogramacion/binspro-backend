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
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nom_tipo_usuario", 25)->nullable(false);
            $table->string("estado_tipo_usuario", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [],"Entidad encargada de almacenar los tipos de usuario para identificar si el usuario registrado es de la propia organización, un cliente o un proveedor (tercero)");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_usuarios');
    }
};
