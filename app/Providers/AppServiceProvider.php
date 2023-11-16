<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Repositories\QuartosRepositoryInterface', 'App\Repositories\QuartosRepositoryEloquent');
        $this->app->bind('App\Repositories\ReservasRepositoryInterface', 'App\Repositories\ReservasRepositoryEloquent');
        $this->app->bind('App\Repositories\ClientesRepositoryInterface', 'App\Repositories\ClientesRepositoryEloquent');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
