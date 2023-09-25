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
        Schema::create('flat_campus', function (Blueprint $table) {
            $table->id();
            $table->string("name_flat_campus", 45);

            Helpers::helper_migration($table, [
                ["campus_id", true, "campus"]
            ], "Entidad que almacena cuántos pisos hay en una sede");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_campus');
    }
};
