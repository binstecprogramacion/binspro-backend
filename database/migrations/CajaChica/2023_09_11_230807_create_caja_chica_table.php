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
        Schema::create('caja_chica', function (Blueprint $table) {
            $table->id();
            $table->decimal("monto", 6, 2);

            Helpers::helper_migration($table, [
                ["cuenta_id", false, "cuentas"]
            ], "Entidad dónde se almacena el presupuesto para caja chica (gastos administrativos)");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caja_chica');
    }
};
