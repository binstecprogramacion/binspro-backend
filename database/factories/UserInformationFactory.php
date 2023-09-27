<?php

namespace Database\Factories;

use App\Models\UserInformation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInformation>
 */
class UserInformationFactory extends Factory
{
    protected $model = UserInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create("es_PE");
        $fakerPhone = Faker::create("pt_BR");
        return [
            "doc_ide" => $faker->dni(),
            "name" => $this->faker->name(),
            "lastname" => $this->faker->lastName(),
            "celphone" => $fakerPhone->cellPhone(),
            "address" => $this->faker->address(),
        ];
    }
}
