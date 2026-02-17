<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea un módulo completo';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = ucfirst($this->argument('name'));
        $basePath = app_path("Modules/$name");

        $folders = [
            'Controllers',
            'Models',
            'Requests',
            'Routes',
            'Services',
        ];

        foreach ($folders as $folder) {
            if (!is_dir("$basePath/$folder")) {
                mkdir("$basePath/$folder", 0755, true);
            }
        }

        file_put_contents(
            "$basePath/Routes/web.php",
            "<?php\n\nuse Illuminate\Support\Facades\Route;\n"
        );

        $this->info("Módulo $name creado correctamente");
    }
}
