<?php

namespace Milly\Laragram;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaragramServiceProvider extends ServiceProvider
{
    protected \Closure $laragramRoutes;

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot (): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');

        $this->publishes([
            __DIR__ . '/config/laragram.php' => config_path('laragram.php'),
        ], 'laragram-config');

        $this->publishes([
            __DIR__ . '/routes/laragram.php' => base_path('laragram.php')
        ], 'laragram-routes');

        $this->loadRoutes();

        if ($this->app->runningInConsole()){
            $this->commands([
                \Milly\Laragram\app\Console\Commands\longpolling::class,
                \Milly\Laragram\app\Console\Commands\laragram::class
            ]);
        }
    }

    public function register()
    {
        //
    }

    /**
     * Register laragram routes.
     *
     * @return void
     */
    public function loadRoutes()
    {
        $this->routes(function () {
            Route::any('_laragram', function () {
                require base_path('routes/laragram.php');
            })->middleware('api')->name('_laragram');
        });

        if ($this->app->routesAreCached()) {
            $this->app->booted(function () {
                require $this->app->getCachedRoutesPath();
            });
        } else {
            $this->app->call($this->laragramRoutes);

            $this->app->booted(function () {
                $this->app['router']->getRoutes()->refreshNameLookups();
                $this->app['router']->getRoutes()->refreshActionLookups();
            });
        }
    }

    /**
     * Register laragram routes.
     *
     * @param \Closure $callback
     * @return $this
     */
    public function routes(\Closure $callback)
    {
        $this->laragramRoutes = $callback;

        return $this;
    }
}
