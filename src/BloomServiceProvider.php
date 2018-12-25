<?php

namespace huenisys\Bloom;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class BloomServiceProvider extends ServiceProvider {

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishers();
        $this->registerResources();
        $this->registerRoutes();
        $this->loadMigrationsFrom(__DIR__.'/../stubs/database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../stubs/config/bloom.php', 'bloom'
        );

        $this->app->singleton(Bloom::class, function () {
            return new Bloom();
        });

        $this->app->alias(Bloom::class, 'bloom');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishers()
    {
        $this->publishes([
          __DIR__.'/../stubs/' => base_path(),
        ], 'bloom-stubs');

        $this->publishes([
          __DIR__.'/../resources/views/' => resource_path('views/vendor/bloom'),
        ], 'bloom-views');

        $this->publishes([
          __DIR__.'/../dist/' => public_path(),
        ], 'bloom-dist');

        // puts dist files from package to projects
        $this->publishes([
          __DIR__.'/../frontend' => base_path('frontend'),
        ], 'bloom-frontend');
    }

    /**
     * Register the package views, etc.
     *
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bloom');
    }


    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        Route::group($this->webRouteConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../resources/routes/web.php');
        });

        Route::group($this->apiRouteConfiguration(), function () {
          $this->loadRoutesFrom(__DIR__.'/../resources/routes/api.php');
      });
    }

    /**
     * Get the web route group configuration array.
     *
     * @return array
     */
    protected function webRouteConfiguration()
    {
        return [
            'namespace' => 'huenisys\Bloom\Http\Controllers',
            'middleware' => 'web',
        ];
    }

    /**
     * Get the api route group configuration array.
     *
     * @return array
     */
    protected function apiRouteConfiguration()
    {
        return [
            'namespace' => 'huenisys\Bloom\Http\Controllers',
            'middleware' => 'api',
        ];
    }
}
