<?php

namespace Database\Seeders;

use App\Models\menus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $data_menu = [
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
        ],
        [
            "name_menu" => "Gestión Operativo",
            "parent_id" => 0,
            "children" => [
                [
                    "name_menu" => "Cuentas"
                ],
                [
                    "name_menu" => "HT"
                ],
                [
                    "name_menu" => "PAM"
                ],
                [
                    "name_menu" => "Usuarios"
                ],
                [
                    "name_menu" => "Locales"
                ],
                [
                    "name_menu" => "Artículos"
                ],
                [
                    "name_menu" => "Proveedores"
                ],
                [
                    "name_menu" => "Maquinarias"
                ],
            ]
        ]
    ];

    private function buildMenu($menuItems, $parentId = null) {
        $order_item = 0;

        foreach ($menuItems as $menuItem) {
            $lastId = 0;
            if(isset($menuItem['parent_id'])) {
                if ($menuItem['parent_id'] == 0) {
                    $lastId = menus::create([
                        "name_menu" => $menuItem["name_menu"],
                        "order" => $order_item
                    ])->id;

                    if(isset($menuItem["children"]))
                        self::buildMenu($menuItem["children"], $lastId);
                }
            } else {
                menus::create([
                    "name_menu" => $menuItem["name_menu"],
                    "parent_id" => $parentId,
                    "order" => $order_item
                ]);
            }

            $order_item++;
        }
    }

    public function run(): void
    {
        DB::statement("truncate table menus;");
        self::buildMenu($this->data_menu);
    }
}
