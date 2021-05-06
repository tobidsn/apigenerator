<?php

namespace Tobidsn\ApiGenerator;

use Illuminate\Support\ServiceProvider;

class ApiGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/apigenerator.php' => config_path('apigenerator.php'),
        ]);

        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/stubs/'),
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Tobidsn\ApiGenerator\Commands\ApiGenerator'
        );
    }
}
