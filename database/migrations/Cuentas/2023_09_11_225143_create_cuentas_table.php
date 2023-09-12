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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->string("tipo_cuenta", 1)->nullable(false);
            $table->string("tipo_factura", 1)->nullable(false);
            $table->string("estado_cuenta", 1)->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["empresa_id", false, "empresas"]
            ], "Entidad encargada de almacenar las cuentas (clientes) de la empresa");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
