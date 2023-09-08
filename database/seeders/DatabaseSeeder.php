<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Empresas;
use App\Models\Menu;
use App\Models\Permisos;
use App\Models\Personas;
use App\Models\Proveedores;
use App\Models\Role;
use App\Models\TipoUsuarios;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Personas::factory(10)->create();
        Empresas::factory(10)->create();
        Role::factory(5)->create();
        TipoUsuarios::factory(10)->create();

        Proveedores::factory(4)->create();
        Permisos::factory(5)->create();
        Menu::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
