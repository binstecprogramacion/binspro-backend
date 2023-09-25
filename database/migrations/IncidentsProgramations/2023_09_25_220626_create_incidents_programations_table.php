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
        Schema::create('incidents_programations', function (Blueprint $table) {
            $table->id();
            $table->date("start");
            $table->date("end")->nullable();

            Helpers::helper_migration($table, [
                ["supplier_id", true, "suppliers"],
                ["user_id", true, "users"],
            ], "Entidad dónde se está asignado al proveedor o técnico que solucionará la incidencia");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents_programations');
    }
};
