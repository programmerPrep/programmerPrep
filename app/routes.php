<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* 
    a whole bunch of routes that point to different views or login/logout users
    i don't exactly see the need for anymore but if we want to add more features, we can add more routes. 
*/

Route::get('/', 'UsersController@showLogin');

Route::post('/checklogin', 'UsersController@checkLogin');

Route::get('/login', 'UsersController@showLogin');

Route::post('/login', 'UsersController@doLogin');

Route::get('/logout', 'UsersController@showlogout');

Route::get('/aboutUs', 'DashboardController@aboutUs');


	// Test route
Route::get('/testrelations/{id}', 'DashboardController@show');


	// Mentor index test route
Route::get('/mentorIndexTest', 'DashboardController@mentorIndex');


Route::get('/dashboard', 'HomeController@showStatusPage');

Route::resource('/users','UsersController');

Route::get('/{username}/edit','UsersController@edit');

Route::get('/about', 'HomeController');

Route::get('/test', 'HomeController@showWelcome');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UsersController@confirm'
]);
