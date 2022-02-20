<?php

namespace Milly\Laragram;

use Illuminate\Support\ServiceProvider;

class LaragramServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot ()
    {
        $this->loadRoutesFrom(__DIR__.'/test/web.php');
        $this->loadMigrationsFrom(__DIR__. '/FSM/Migrations/');

        $this->publishes([
            __DIR__.'/config.php' => config_path('laragram.php'),
        ]);
    }

    public function register()
    {

    }
}
