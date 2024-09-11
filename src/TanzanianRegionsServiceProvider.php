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
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../src/Database/Migrations');

        // Load the configuration file
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
        // You can publish the config file if needed
        $this->publishes([
            __DIR__ . '/../src/config/tanzania.php' => config_path('tanzania.php'),
        ]);
    }
}
