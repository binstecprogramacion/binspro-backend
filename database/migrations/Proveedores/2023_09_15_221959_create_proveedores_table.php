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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();

            Helpers::helper_migration($table, [
                ["categoria_id", true, "categorias_mantenimientos"],
                ["empresa_id", false, "empresas"],
            ], "Entidad que almacena el nombre de todas las empresas que brindan el servicio de terceros o son clientes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
