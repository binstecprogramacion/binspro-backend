<?php

namespace App\Console\Commands;

use App\Helpers\Helpers;
use Illuminate\Console\Command;

class CreateMigrationFolderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:mf {folder} {migration} {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando personalizado para crear migraciones dentro de una carpeta específica';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $migration = Helpers::helper_command_migration($this->argument("type"), $this->argument("folder"), $this->argument("migration"));

        $this->call("make:migration", [
            "name" => $migration["name"] ,
            "--path" => '/database/migrations/' . ucfirst($migration["folder"]),
        ]);

        $this->info("Migración creada exitosamente");

        return 0;
    }
}
