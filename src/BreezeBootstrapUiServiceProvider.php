<?php

namespace Aldhix\BreezeBootstrapUi;

use Illuminate\Support\ServiceProvider;

class BreezeBootstrapUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views'),
            ], 'views');
        }
    }

    public function register()
    {
        //Command
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Aldhix\BreezeBootstrapUi\Console\Commands\InstallCommand::class,
            ]);
        }
    }
}
