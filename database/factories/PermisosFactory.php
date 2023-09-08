<?php

namespace Database\Factories;

use App\Models\Permisos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permisos>
 */
class PermisosFactory extends Factory
{
    protected $model = Permisos::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom_permiso" => $this->faker->word()
        ];
    }
}
