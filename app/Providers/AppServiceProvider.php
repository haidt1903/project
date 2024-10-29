<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
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
        Paginator::useBootstrapFive();
<<<<<<< HEAD

=======
>>>>>>> 33716e1939581e732d994a52dc6a31761d0d0440
        view()->composer('*',function ($view) {
            $categories =DB::table('categories')->get(); 
            $view->with(compact('categories'));
         });
    }
}
