<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	// public function showLoginPage()
	// {
	// 	return View::make('login');
	// }
	public function showStatusPage()
	{
		$users = User::all();
		return View::make('dashboard')->with(['users'=>$users]);
	}
	public function showAboutPage()
	{
		return View::make('about');
	}
}
