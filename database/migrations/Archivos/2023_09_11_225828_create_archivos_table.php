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
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->text("path")->nullable(false);

            Helpers::helper_migration($table, [
                ["cuenta_id", false, "cuentas"],
                ["categoria_archivo_id", false, "categorias_archivos"],
            ], "Entidad que registra las ubicaciones de los archivos que se suben con relación a las cuentas.");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos');
    }
};
