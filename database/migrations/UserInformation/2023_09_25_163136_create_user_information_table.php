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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string("doc_ide", 10)->unique();
            $table->string("name", 50);
            $table->string("lastname", 50);
            $table->string("celphone", 15);
            $table->string("address", 150);

            Helpers::helper_migration($table, [], "Entidad dónde se almacena los datos personales de los usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
