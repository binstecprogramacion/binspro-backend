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
        Schema::create('campus', function (Blueprint $table) {
            $table->id();
            $table->string("name", 75);
            $table->string("address", 150);
            $table->string("footage", 75);

            Helpers::helper_migration($table, [
                ["entity_id", true, "entities"]
            ], "Entidad que almacena las sedes de una cuenta");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campus');
    }
};
