<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

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
        View::composer('home.header', function ($view) {

        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::id())->count();
        } else {
            $count = 0;
        }

        $view->with('count', $count);
    });

    }
}
