<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Activity;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->composeNav();
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
    
    /**
     * Compose the navigation bar.
     *
     * @return void
     */
    private function composeNav() {
        view()->composer('layouts.app', function($view) {
			$view->with('activities', Activity::orderBy('name', 'asc')->get());
		});
	}
}
