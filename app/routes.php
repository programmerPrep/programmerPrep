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

Route::get('/', 'HomeController@showLoginPage');

Route::get('/dashboard', 'HomeController@showStatus');

Route::get('/login', 'UserController@showLogin');

Route::get('/logout', 'UserController@showlogout');

Route::resource('/users','UsersController');

Route::get('/{username}/edit','UsersController@edit');

Route::get('/about', 'HomeController');
