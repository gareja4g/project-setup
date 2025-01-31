<?php

namespace Project\Setup\Providers;

use Illuminate\Support\ServiceProvider;

class SetupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Publish Routes
        $this->publishes([
            __DIR__ . '/../routes/web.php' => base_path('routes/project-setup.php'),
        ], 'routes');

        // Publish Resources (Views)
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/project-setup'),
        ], 'views');

        // Publish Models
        $this->publishes([
            __DIR__ . '/../src/Models' => app_path('Models/Project/Setup'),
        ], 'models');

        // Publish Migrations
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'migrations');

        // Publish Controllers
        $this->publishes([
            __DIR__ . '/../src/Controllers' => app_path('Http/Controllers/Project/Setup'),
        ], 'controllers');

        // Publish JS and CSS files
        $this->publishes([
            __DIR__ . '/../public/js' => public_path('vendor/project-setup/js'),
            __DIR__ . '/../public/css' => public_path('vendor/project-setup/css'),
        ], 'assets');

        // Load Routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'project-setup');

        // Load Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
