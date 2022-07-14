<?php

namespace Milly\Laragram;

use Illuminate\Support\ServiceProvider;
use Milly\Laragram\app\Console\Commands\longpolling;

class LaragramServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot (): void
    {
        //$this->loadRoutesFrom(__DIR__.'/test/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');

        //$this->publishes([
        //    __DIR__.'/config.php' => config_path('laragram.php'),
        //]);

        if ($this->app->runningInConsole()){
            $this->commands([longpolling::class, \Milly\Laragram\app\Console\Commands\laragram::class]);
        }


    }

    public function register()
    {

    }

}
