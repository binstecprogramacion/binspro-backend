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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->text("DocEntry")->nullable(false);
            $table->text("U_STR_CC2")->nullable(false);
            $table->text("U_STR_CTA")->nullable(false);
            $table->text("U_STR_NOMC")->nullable(false);
            $table->text("PAM")->nullable(false);

            Helpers::helper_migration($table, [], "Entidad que almacena los mantenimientos extraídos del HT");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
