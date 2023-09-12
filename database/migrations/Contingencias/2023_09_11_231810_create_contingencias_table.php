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
        Schema::create('contingencias', function (Blueprint $table) {
            $table->id();
            $table->text("DocEntry");
            $table->text("LineId");
            $table->text("U_STR_CC2");
            $table->text("U_STR_CTA");
            $table->text("U_STR_PER");
            $table->text("U_STR_MONT");
            $table->text("U_STR_GRPA");
            $table->text("U_STR_NOMC");
            $table->text("Periodicidad");
            $table->text("PAM");
            $table->text("Presupuesto");
            $table->text("Especialidad");

            Helpers::helper_migration($table, [
                ["cuenta_cont_id", false, "cuentas"]
            ], "Entidad que almacena los presupuestos asignado para las contingencias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contingencias');
    }
};
