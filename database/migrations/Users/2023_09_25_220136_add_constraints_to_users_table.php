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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger("user_type_id")->nullable();
            $table->foreign("user_type_id")->references("id")->on("user_type");

            $table->unsignedBigInteger("specialty_id")->nullable();
            $table->foreign("specialty_id")->references("id")->on("specialties");

            $table->unsignedBigInteger("rol_id")->nullable();
            $table->foreign("rol_id")->references("id")->on("roles");

            $table->unsignedBigInteger("area_id")->nullable();
            $table->foreign("area_id")->references("id")->on("areas");

            $table->unsignedBigInteger("user_information_id")->nullable();
            $table->foreign("user_information_id")->references("id")->on("user_information");

            $table->unsignedBigInteger("supplier_id")->nullable();
            $table->foreign("supplier_id")->references("id")->on("suppliers");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(["user_type_id"]);
            $table->dropForeign(["specialty_id"]);
            $table->dropForeign(["rol_id"]);
            $table->dropForeign(["area_id"]);
            $table->dropForeign(["user_information_id"]);
            $table->dropForeign(["supplier_id"]);
        });
    }
};
