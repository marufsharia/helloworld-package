<?php

namespace Marufsharia\Helloworld;

use Illuminate\Support\ServiceProvider;

class HelloworldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register helloworld controller
        $this->app->make('Marufsharia\Helloworld\Controllers\HelloworldController');
        
        //register view
        $this->loadViewsFrom(__DIR__.'/views/','helloview');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
