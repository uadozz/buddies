<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Activity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Navigation Composer
        view()->composer('layouts.app', function($view) {
			$view->with('activities', Activity::orderBy('name', 'asc')->get());
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
