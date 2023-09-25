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
        Schema::create('type_bills', function (Blueprint $table) {
            $table->id();
            $table->string("name_bill", 45);

            Helpers::helper_migration($table, [], "Entidad que almacenará el tipo de factura");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_bills');
    }
};
