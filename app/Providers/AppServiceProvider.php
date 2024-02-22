<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
=======
        //
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5
    }
}
