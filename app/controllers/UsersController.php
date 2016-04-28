<?php

class UsersController extends \BaseController {

	public function __construct(){
		
		parent::__construct();

		$this->beforeFilter('auth',      array('except' => array('doLogin', 'showLogin', 'showlogout', 'create',     'store')));
	    $this->beforeFilter('admin',     array('except' => array('doLogin', 'showLogin', 'edit',       'showlogout', 'create', 'store', 'update')));
	    $this->beforeFilter('edit_user', array('except' => array('doLogin', 'showLogin', 'showlogout', 'create',     'store',  'update')));
	}

	public function showLogin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password), true)) {
			if (Auth::user()->confirmed == 0) 
			{
				Auth::logout();
				Session::Flash('errorMessage', 'You have to confirm your account by clicking on the confirmation code in your email.');
			} else {
			$user = Auth::user()->id;
			$user = User::find($user);
			$relationship = Relationship::where('user_id', '=', $user->id)->get();
			return View::action('HomeController@showStatusPage');
			}
		} else {
			Session::Flash('errorMessage', 'Login Failed!!!');
		}
		return Redirect::make('login');
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
		$user = User::find($id);

		if (Auth::check() && Auth::user()->id != $id){
			Session::flash('Not authenticated user so access is denied');
			return Redirect::action('HomeController@showLogin');
		}
		$relationship = Relationship::where('user_id', '=', $user->id)->get();

		if (!$user){
			Session::flash('The user does not exist');
			return View::make('login');
		}

		return View::make('dashboard')->with(array('user' => $user, 'relationship' => $relationship))
	}

	public function create(){
		$login_info = [
			['first_name',        'First Name'],
			['last_name',         'Last Name'],
			['password',          'Password'],
			['ver_password',      'Confirm Password'],
			['email',             'Email'],
			['username',          'Username']
			['confirmation_code', $confirmation_code]
		];
		return View::make('user.create',['login_info' => $login_info]);
		
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
