<?php

namespace Database\Factories;

use App\Models\Empresas;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresas>
 */
class EmpresasFactory extends Factory
{
    protected $model = Empresas::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create("es_PE");
        return [
            "ruc" => $faker->ruc(),
            "raz_social" => $this->faker->words(5, true)
        ];
    }
}
