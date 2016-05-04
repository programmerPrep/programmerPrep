@extends('layouts.master')
@section('content')
<main>
			{{ Form::open(array('action' => 'UsersController@update', 'class' => 'form-signin')) }}


			<div class="loginField">
				<!--<input id="username" name="username" type="text" Placeholder="username"><br>-->

				{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'username', 'id'=>'username')) }}
				{{ $errors->first('username', '<span class="help-block">:message</span>') }}


				{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email', 'id'=>'email')) }}
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}


				{{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'first_name', 'id'=>'first_name')) }}
				{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}


				{{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'last_name', 'id'=>'last_name')) }}
				{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}


				{{ Form::text('bio', null, array('class' => 'form-control', 'placeholder' => 'bio', 'id'=>'bio')) }}	
				{{ $errors->first('bio', '<span class="help-block">:message</span>') }}


				{{ Form::text('interests', null, array('class' => 'form-control', 'placeholder' => 'interests', 'id'=>'interests')) }}	
				{{ $errors->first('interests', '<span class="help-block">:message</span>') }}


				{{ Form::text('github_name', null, array('class' => 'form-control', 'placeholder' => 'github_name', 'id'=>'github_name')) }}	
				{{ $errors->first('github_name', '<span class="help-block">:message</span>') }}	
			
				<!--<input id="password" name="password" type="password" placeholder="password"></br>-->        
				{{ Form::password('password', array('placeholder' => 'password', 'class' => 'form-control', 'id'=> 'password')) }}
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}


				{{ Form::password('confirm_password', array('placeholder' => 'confirm_password', 'class' => 'form-control', 'id'=> 'confirm_password')) }}
				{{ $errors->first('confirm_password', '<span class="help-block">:message</span>') }}

				{{ Form::file('img_url', null, array('class' => 'form-control', 'placeholder' => 'img_url', 'id'=>'img_url')) }}	
				{{ $errors->first('img_url', '<span class="help-block">:message</span>') }}

				<div class="registration">
					{{-- <input id="confirmPassword" name="confirmPassword" type="password" placeholder="confirmPassword"> --}}
				
				</br>
				{{-- <input id="email" name="email" type="email" placeholder="emailAddress"> --}}
				
			</div>
				{{-- <button type="submit" id="loginButton" class="loginFormButton">Login</button> --}}
				{{ Form::submit('Sign in', array('class' => 'btn-log')); }}
				<!-- stickyNote -->
				
			</div>
			</div>
			</div>
			</div>
				<!--</form> -->    
				{{ Form::close() }}
</main>

@stop