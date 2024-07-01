<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\Menu;

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
        View::composer('layout.partial.sidebar', function ($view) {
            $menuItems = Menu::all();
            $view->with('menuItems', $menuItems);
        });
    }
}
