<?php

namespace Hamzasehouli\MyLaravelPackage;

use Illuminate\Support\ServiceProvider;

class MyLaravelPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load middleware, routes, views, publishing config and migrations, assets, etc., as long as all service providers that might be used are registered.
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/my-laravel-package.php' => config_path('my-laravel-package.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(MyLaravelPackage::class, function () {
            return new MyLaravelPackage();
        });
    }
}