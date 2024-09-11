<?php

namespace TanzanianRegions;

use Illuminate\Support\ServiceProvider;

class TanzanianRegionsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Load migrations from your package
        $this->loadMigrationsFrom(__DIR__ . '/../src/Database/Migrations');

        // Merge package configuration file
        $this->mergeConfigFrom(
            __DIR__ . '/../src/config/tanzania.php', 'tanzania'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish the migration and model files
        $this->publishes([
            // Publish migration files
            __DIR__ . '/../src/Database/Migrations/' => database_path('migrations'),

            // Publish model files
            __DIR__ . '/../src/Models/' => app_path('Models'),

            // Publish seeder files
            __DIR__ . '/../src/Database/Seeders/' => database_path('seeders'),
            
            // Publish the config file
            __DIR__ . '/../src/config/tanzania.php' => config_path('tanzania.php'),
        ], 'tanzanian-regions');
    }
}
