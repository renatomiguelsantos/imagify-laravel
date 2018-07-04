<?php

namespace Imagify\Laravel;

use Imagify\Optimizer;
use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->app->singleton('imagify', function ($app) {
            $apiKey = $app['config']->get('imagify.api_key');

            return new Optimizer($apiKey);
        });

        $this->app->alias('imagify', 'Imagify\Optimizer');
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [
            'imagify',
        ];
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '../config/imagify.php' => config_path('imagify.php'),
        ]);
    }
}
