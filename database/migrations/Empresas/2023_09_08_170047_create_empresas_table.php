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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string("ruc", 15)->nullable(false)->unique();
            $table->string("raz_social", 250)->nullable(false)->unique();
            $table->string("estado_empresa", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [],"Entidad creada para normalizar las propiedades de las tablas proveedores y cuentas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
