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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->text("DocEntry")->nullable();
            $table->text("U_STR_CC2")->nullable();
            $table->text("U_STR_CTA")->nullable();
            $table->text("U_STR_NOM")->nullable();
            $table->text("PAM")->nullable();

            Helpers::helper_migration($table, [
                ["entity_id", true, "entities"]
            ], "Entidad que almcena el HT (hoja de trabajo) de las cuentas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
