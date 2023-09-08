<?php

namespace App\Console\Commands;

use App\Helpers\Helpers;
use Illuminate\Console\Command;

class CreateEntityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:cec {model} {folder} {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear el entorno completo para ejecutar la creación de un model, factories y migrations dentro de carpetas especifadas';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $model = $this->argument("model");

        $this->call("make:model", [
            "name" => ucfirst($model),
            "--api" => true,
            "--factory" => true
        ]);

        $migration = Helpers::helper_command_migration($this->argument("type"), $this->argument("folder"));

        $this->call("make:migration", [
            "name" => $migration["name"],
            "--path" => '/database/migrations/' . ucfirst($migration["folder"]),
        ]);

        $this->info("Creación exitosa!");

        return 0;
    }
}
