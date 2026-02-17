<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeModuleController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module-controller {module} {name}';

    /**
     * The console command description.
     *
     * @var string
     */
  protected $description = 'Crea un controlador dentro de un módulo';

  /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = ucfirst($this->argument('module'));
        $name = ucfirst($this->argument('name'));

        $path = app_path("Modules/{$module}/Controllers");
        $file = "{$path}/{$name}Controller.php";

        if (!is_dir($path)) {
            $this->error("El módulo {$module} no existe");
            return;
        }

        if (file_exists($file)) {
            $this->error("El controlador ya existe");
            return;
        }

        $stub = <<<PHP
        <?php

        namespace App\Modules\\{$module}\Controllers;

        use App\Http\Controllers\Controller;

        class {$name}Controller extends Controller
        {
            public function index()
            {
                //
            }
        }
        PHP;

        file_put_contents($file, $stub);

        $this->info("Controlador {$name}Controller creado correctamente en {$module}");
    }
}
