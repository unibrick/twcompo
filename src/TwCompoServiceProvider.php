<?php

namespace Unibrick\TwCompo;

use Illuminate\Support\ServiceProvider;

class TwCompoServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'unibrick');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'twcompo');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/twcompo.php', 'unibrick.twcompo');

        // Register the service the package provides.
        $this->app->singleton('twcompo', function ($app) {
            return new TwCompo;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['twcompo'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/twcompo.php' => config_path('unibrick/twcompo.php'),
        ], 'twcompo.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/unibrick'),
        ], 'twcompo.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/unibrick'),
        ], 'twcompo.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/unibrick'),
        ], 'twcompo.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
