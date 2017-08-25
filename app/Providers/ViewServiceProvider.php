<?php

namespace App\Providers;

use App\Http\ViewComposers\ControlMenu;
use App\Http\ViewComposers\SectionsData;
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
        view()->composer(
            ['layouts.admin'],
            SectionsData::class
            );
        view()->composer(
            ['menu.sider'],
            ControlMenu::class
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
