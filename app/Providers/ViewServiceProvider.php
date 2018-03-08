<?php

namespace App\Providers;

use App\Http\ViewComposers\ControlMenu;
use App\Http\ViewComposers\UserData;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.admin'],ControlMenu::class);
        view()->composer(['layouts.admin'],UserData::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
