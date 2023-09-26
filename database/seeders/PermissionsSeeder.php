<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("truncate table permissions;");

        $data_permission = [
            "Create",
            "Read",
            "Update",
            "Delete"
        ];

        foreach ($data_permission as $key => $permission) {
            Permissions::create([
                "name_permission" => $permission
            ]);
        }
    }
}
