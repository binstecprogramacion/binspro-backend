<?php

namespace Database\Factories;

use App\Models\TipoUsuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoUsuarios>
 */
class TipoUsuariosFactory extends Factory
{
    protected $model = TipoUsuarios::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom_tipo_usuario" => $this->faker->word(),
        ];
    }
}
