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

// Route::post('/checklogin', 'UsersController@checkLogin');

// Route::get('/login', 'UsersController@showLogin');

Route::post('/login', 'UsersController@checkLogin');

Route::get('/logout', 'UsersController@showLogout');

Route::get('/aboutUs', 'DashboardController@aboutUs');

Route::get('/users/mentorRequest/{mentorId}', 'UsersController@mentorRequest');

Route::get('/users/acceptRequest/{studentId}', 'UsersController@acceptRequest');

Route::get('/users/rejectRequest/{studentId}', 'UsersController@rejectRequest');


	// Test route
// Route::get('/testrelations/{id}', 'DashboardController@show');


	// Mentor index test route
// Route::get('/mentorIndexTest', 'DashboardController@mentorIndex');


Route::get('/statusPage/{id}', 'DashboardController@show');

Route::resource('/users','UsersController');

Route::post('users/{id}','UsersController@update');

// Route::get('/about', 'HomeController');

Route::get('/test', 'UsersController@get_repos');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UsersController@confirm'
]);
