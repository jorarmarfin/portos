<?php

namespace App\Providers;

use App\Http\ViewComposers\ControlMenu;
use App\Http\ViewComposers\SectionsData;
use App\Http\ViewComposers\UserData;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.admin',UserData::class);
        view()->composer('layouts.admin',SectionsData::class);
        view()->composer('layouts.admin',ControlMenu::class);
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
