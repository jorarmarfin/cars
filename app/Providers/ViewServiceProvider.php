<?php

namespace Cars\Providers;

use Illuminate\Support\ServiceProvider;
use Cars\Http\ViewComposers\UbigeoModelForm;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $prueba = 'prueba';
        $this->app->make('view')->composer(
            ['components/dropdowns'],
            UbigeoModelForm::class
            );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
