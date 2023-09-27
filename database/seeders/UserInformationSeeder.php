<?php

namespace Database\Seeders;

use App\Models\UserInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("truncate table user_information;");
        UserInformation::factory()->count(5)->create();
    }
}
