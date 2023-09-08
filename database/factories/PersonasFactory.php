<?php

namespace Database\Factories;

use App\Models\Personas;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personas>
 */
class PersonasFactory extends Factory
{
    protected $model = Personas::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create("es_PE");
        return [
            "nombres" => $this->faker->name(),
            "apellidos" => $this->faker->lastName(),
            "doc_identidad" => $faker->dni(),
            "telefono" => $this->faker->phoneNumber(),
            "direccion" => $this->faker->address(),
        ];
    }
}
