<?php

class UsersController extends \BaseController {

	public function __construct(){
		
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('doLogin', 'showLogin', 'showlogout', 'create', 'store')));
	    $this->beforeFilter('admin', array('except' => array('doLogin', 'showLogin', 'edit', 'showlogout', 'create', 'store', 'update')));
	    $this->beforeFilter('edit_user', array('except' => array('doLogin', 'showLogin', 'showlogout', 'create', 'store', 'update')));
	}

	public function showLogin(){
		return View::make('login');
	}

	public function doLogin(){
		$validator = Validator::make(Input::all(), User::$loginRules);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
			Session::flash('successMessage' , 'Logged in!');
			return Redirect::action('HomeController@dashboard');
		} else {
			Session::flash('errorMessage', 'Your email or password was not correct');
			return Redirect::back()->withInput();
		}
	}

	public function show($id)
	{
		return View::make('users.show', [
        // send data into the view
        // show a single page
        'user' => User::find($username),
        ]);
	}

	public function create(){
		$login_info = [
			['first_name', 'First Name'],
			['last_name', 'Last Name'],
			['password', 'Password'],
			['ver_password', 'Confirm Password'],
			['email', 'Email'],
			['username', 'Username']
		];
		return View::make('user.create',['login_info' => $login_info]);
	}

	public function edit($id)
	{
		// goes to edit file
        $username = post::find($username);
        return View::make('user.edit')->make();
	}

	public function showlogout(){
		Auth::logout();
		return Redirect::action('HomeController@login');
	}

	public function store() {
		$user = new User();
		return $this->validation($user);
	}

	public function validation($user)
	{
		$validator = Validator::make(Input::all(), User::$rules);
		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Unable to create user.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if (Input::get('password') === Input::get('ver_password')) {
				$user->password = Input::get('password');
			} else {
				Session::flash('errorMessage', 'Your passwords did not match');
				return Redirect::back()->withInput();
			}
			Session::flash('successMessage', 'The post was successfully update.');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->role = 'user';
			$user->save();
			//Log::info(['title'=>$user->title, 'body'=>$user->body, 'user_id'=>$user->user_id]);
			return Redirect::action('UsersController@index',$user->username);
		}
	}

}
