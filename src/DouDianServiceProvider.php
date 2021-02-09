<?php

namespace Abbotton\DouDian;

use Illuminate\Support\ServiceProvider;

class DouDianServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('doudian.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'doudian');

        // Register the main class to use with the facade
        $this->app->singleton('doudian', function () {
            $config = config('doudian');
            return new DouDian($config);
        });
    }
}
