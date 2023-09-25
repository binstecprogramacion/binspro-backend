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
        Schema::create('d_maintenances', function (Blueprint $table) {
            $table->id();
            $table->text("LineId")->nullable();
            $table->text("U_STR_PER")->nullable();
            $table->text("U_STR_MONT")->nullable();
            $table->text("U_STR_GRPA")->nullable();
            $table->text("Periodicidad")->nullable();
            $table->text("PRESUPUESTO")->nullable();
            $table->text("Especialidad")->nullable();

            Helpers::helper_migration($table, [
                ["maintenance_id", true, "maintenances"]
            ], "Entidad que almacena el detalle del mantenimiento");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_maintenances');
    }
};
