<?php

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
        Schema::create('ubigeo', function (Blueprint $table) {
            $table->char("ubigeo1", 6)->primary();
            $table->string("dpto", 32);
            $table->string("prov", 32);
            $table->string("distrito", 32);
            $table->char("ubigeo2", 6);
            $table->string("orden", 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubigeo');
    }
};
