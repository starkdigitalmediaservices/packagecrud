<?php

namespace Laravelcrud\Crudfolder;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Laravelcrud\Crudfolder\CrudController');
        $this->loadViewsFrom(__DIR__.'/views', 'crudfolder');
    }
}
