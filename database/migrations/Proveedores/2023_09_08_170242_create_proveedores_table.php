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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string("estado_proveedor", "1")->nullable(false)->default("1");

            Helpers::helper_migration($table, [
                ["empresa_id", false, "empresas"]
            ],"Entidad en la que se almacenarán las empresas que solo son proveeedores");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
