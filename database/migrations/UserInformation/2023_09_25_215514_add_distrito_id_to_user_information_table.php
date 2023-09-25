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
        Schema::table('user_information', function (Blueprint $table) {
            $table->string("distrito_id", 6)->nullable();
            $table->foreign("distrito_id")->references("ubigeo1")->on("ubigeo");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_information', function (Blueprint $table) {
            $table->dropForeign(["distrito_id"]);
        });
    }
};
