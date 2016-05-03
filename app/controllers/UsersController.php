<?php

class UsersController extends \BaseController {

	public function __construct(){
		
		parent::__construct();

		$this->beforeFilter('auth',      array('except' => array('checkLogin', 'doLogin', 'showLogin', 'showlogout', 'create',     'store')));
	    $this->beforeFilter('admin',     array('except' => array('checkLogin', 'doLogin', 'showLogin', 'edit',       'showlogout', 'create', 'store', 'update')));
	    $this->beforeFilter('edit_user', array('except' => array('checkLogin', 'doLogin', 'showLogin', 'showlogout', 'create',     'store',  'update')));
	}

	public function showLogin()
    {
		return View::make('login');
	}

	public function checkLogin(){
        
		if (Input::has('username') && Input::has('password') && Input::has('email')){
			return $this->create();
		} else {
			return $this->doLogin();
		}
	}

	public function doLogin(){
		$validator = Validator::make(Input::all(), User::$loginRules);

		if ($validator->fails()){
            Session::flash('errorMessage', 'Username or password is missing');
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
			return Redirect::action('HomeController@showStatusPage');
		} else {
			return Redirect::back()->withInput();
		}
	}

	public function show($id)
	{
		$user = User::find($id);

		if (!Auth::check()){
			Session::flash('Not authenticated user so access is denied');
			return Redirect::action('HomeController@showLogin');
		}

		
		return $user;

		// $relationship = Relationship::where('user_id', '=', $user->id)->get();

		// if (!$user){
		// 	Session::flash('The user does not exist');
		// 	return View::make('login');
		// }

		// return View::make('dashboard')->with(array('user' => $user, 'relationship' => $relationship));
	}

	public function create(){
		$validator = Validator::make(Input::all(), User::$loginRegistrationRules);
		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$user = new User();
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->email    = Input::get('email');
		$user->save();


		// Why not Auth::attempt with the created user and send them to their newly created dashboard?
		
        return Redirect::back();
	}
	public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Session::flash('You have successfully verified your account.');

        return Redirect::route('HomeController@showLogin');
    }


    	// Need to modify edit controller. It should return the edit view, which should submit it's form
    	// to the update function. Update function will change the database, then redirect to the profile page
    	// for the user.
	public function edit($username)
	{
		if (Auth::user()->username != $username) {
	
			return Redirect::back();
		
		} elseif (Auth::user()->username == $username) {
			
			$user = User::find(Auth::id());

			return View::make('testedit')->with('user', $user);
		}

		
	}

	public function showlogout(){
		Auth::logout();
		return Redirect::action('HomeController@login');
	}

	public function store() {

		$user = new User();

		$confirmation_code = str_random(30);

		return $this->validation($user);
		 $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'confirmed' => 1
        ];
        $rules = [
            'username' => 'required|exists:users',
            'password' => 'required'
        ];
        if ( ! Auth::attempt($credentials))
        {
            return Redirect::back()
                ->withInput()
                ->withErrors([
                    'credentials' => 'We were unable to sign you in.'
                ]);
        }

        return Redirect::action('HomeController@dashboard');	
	}

	public function validation($user)
	{
		$validator = Validator::make(Input::all(), User::$rules);
		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Unable to create user.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$user->first_name = Input::get('first_name');
			$user->last_name  = Input::get('last_name');
			$user->username   = Input::get('username');
			$user->password   = Input::get('password');
			$user->email      = Input::get('email');
			$user->confirmation_code = $confirmationCode;
			
			$emailInDatabase = User::where('email', '=', $email);

			if ($emailInDatabase){
				$result = $user->save();
				if ($result) {
					Mail::send('emails.resend', array('confirmationCode' => $confirmationCode, 'email' => $email, 'firstName' => $firstName), function($message) {
			            $message->to(Input::get('email'), Input::get('first_name'))->subject('Verify your email address');
			        });	       
		        	Session::flash('successMessage', 'Thanks for signing up! Please check your email to verify your account.');
					return Redirect::action('HomeController@showLogin');						
				}
			}
		}
	}
}
