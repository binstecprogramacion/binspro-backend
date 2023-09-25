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
        Schema::create('incident_controller_users', function (Blueprint $table) {
            $table->id();
            $table->enum("state", ["1", "0"])->default("1");

            Helpers::helper_migration($table, [
                ["incident_id", true, "incidents"],
                ["user_id", true, "users"],
            ], "Entidad en la que se encuentran relacionados los sdk/administradores con las incidencias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_controller_users');
    }
};
