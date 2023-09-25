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
        Schema::create('user_type', function (Blueprint $table) {
            $table->id();
            $table->string("name_type", 45)->nullable(false);

            Helpers::helper_migration($table, [], "Entidad que almacena los tipos de usuario");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_type');
    }
};
