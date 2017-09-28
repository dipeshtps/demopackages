<?php

namespace Dipesh\Crud;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadRoutesFrom(__DIR__.'/routes.php');
         $this->loadMigrationsFrom(__DIR__.'/migrations');
         $this->loadViewsFrom(__DIR__.'/views', 'crud');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Dipesh\Crud\TimezonesController');
    }
}
