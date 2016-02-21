<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	
	// Auto-login using demo account (For #Hackathon judges)
	Route::get('/demo', function() {
		Auth::loginUsingId(3); // Log in using demo account (id = 3)
		return redirect(url('/'));
	});
	
    // Event resource
	Route::resource('events', 'EventsController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    //Route::get('/home', 'HomeController@index');
    Route::get('/home', function() {
		//return redirect(route('events.index')); // TODO: Won't work. Why?
		return redirect(url('/events'));
	});
});
