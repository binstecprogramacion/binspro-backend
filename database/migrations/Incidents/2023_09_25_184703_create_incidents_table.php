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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string("title", 75);
            $table->text("description")->nullable();
            $table->enum("priority", ["Urgente", "Importante", "Moderado"])->default("Moderado");
            $table->enum("state", ["Pendiente", "Programado", "En curso", "Terminada", "Cancelada", "Reprogramada"])->default("Pendiente");
            $table->text("ubicacion_incidencia")->nullable(); /** { "area_sede_id": <id>, "sector_area_id": <id> } */
            $table->text("img_ref")->nullable();
            $table->text("actors")->nullable();

            Helpers::helper_migration($table, [
                ["user_id", true, "users"],
                ["maintenance_id", true, "maintenances"],
                ["type_ticket_id", true, "type_tickets"],
                ["campus_id", true, "campus"],
            ], "Entidad que almacena los incidentes que ocurren en la empresa");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
