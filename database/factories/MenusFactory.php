<?php

namespace Database\Factories;

use App\Models\menus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\menus>
 */
class MenusFactory extends Factory
{

    protected $model = menus::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data_menu = [
            [
                "name_menu" => "Inicio",
                "parent_id" => 0,
            ],
            [
                "name_menu" => "Dashboard",
                "parent_id" => 0,
            ],
            [
                "name_menu" => "Service Desk",
                "parent_id" => 0,
                "children" => [
                    [
                        "name_menu" => "Registrar Ticket",
                    ],
                    [
                        "name_menu" => "Checklist",
                    ],
                ],
            ]
        ];
        return [
            //
        ];
    }

    private function iterateMenuArray(array $array, $parentId = 0): array
    {
        $result = [];

        foreach ($array as $item) {
            if ($item['parent_id'] === $parentId) {
                $result[] = [
                    'name' => $item['name_menu'],
                    'children' => self::iterateMenuArray($array, $item['id']),
                ];
            }
        }

        return $result;
    }
}
