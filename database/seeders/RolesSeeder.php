<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("truncate table roles;");

        $data_roles = [
            "Gerente General",
            "Interlocutor",
            "Administrador",
            "Jefe de Operaciones",
            "Jefe Comercial",
            "Costos y presupuestos",
            "Logística",
            "SSOMA",
            "Jefe Administrativo",
            "Service Desk",
            "Supervisor",
            "Técnico",
            "Proveedor"
        ];

        foreach ($data_roles as $key => $rol) {
            Roles::create([
                "name_rol" => $rol
            ]);
        }
    }
}
