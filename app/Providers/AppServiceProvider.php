<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.app'], function ($view){
            $view->with('userData', [
                'authenticated' => auth()->check(),
                'user_id' => auth()->id(),
            ]);
        });
    }
}
