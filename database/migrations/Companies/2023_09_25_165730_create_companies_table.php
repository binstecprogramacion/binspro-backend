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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("ruc", 20)->unique();
            $table->string("raz_social", 200);
            $table->string("alias", 30)->nullable();

            Helpers::helper_migration($table, [], "Entidad encargada de almacenar los nombres de las empresas tanto clientes como proveedores");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
