<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeModule extends Command
{
    protected $signature = 'make:module {name}';
    protected $description = 'Create Model, Controller, Migration, and Views';

    public function handle()
    {
        $name = ucfirst($this->argument('name'));
        $namePlural = strtolower($name) . 's';

        // 1. Create model + controller + migration
        $this->call('make:model', [
            'name' => $name,
            '--migration' => true,
            '--controller' => true,
            '--resource' => true,
        ]);

        // 2. Create views folder
        $viewPath = resource_path("views/{$namePlural}");

        if (!File::exists($viewPath)) {
            File::makeDirectory($viewPath, 0755, true);
        }

        // 3. Create blade files
        $views = ['index', 'create', 'edit', 'show'];

        foreach ($views as $view) {
            $file = "{$viewPath}/{$view}.blade.php";

            if (!File::exists($file)) {
                File::put($file, "<h1>{$name} {$view} page</h1>");
            }
        }
        $route = "\nRoute::resource('{$namePlural}', {$name}Controller::class);";
        File::append(base_path('routes/web.php'), $route);

        // 4. Output success
        $this->info("Module {$name} created successfully!");
    }
}
