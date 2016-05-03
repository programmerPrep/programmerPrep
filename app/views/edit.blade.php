@extends('layouts.master')
@section('content')
<main>
			{{ Form::open(array('action' => 'UsersController@update', 'class' => 'form-signin')) }}


			<div class="loginField">
				<!--<input id="username" name="username" type="text" Placeholder="username"><br>-->

				{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'username', 'id'=>'username')) }}


				{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email', 'id'=>'email')) }}


				{{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'first_name', 'id'=>'first_name')) }}


				{{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'last_name', 'id'=>'last_name')) }}


				{{ Form::text('bio', null, array('class' => 'form-control', 'placeholder' => 'bio', 'id'=>'bio')) }}	


				{{ Form::text('interests', null, array('class' => 'form-control', 'placeholder' => 'interests', 'id'=>'interests')) }}	


				{{ Form::text('github_name', null, array('class' => 'form-control', 'placeholder' => 'github_name', 'id'=>'github_name')) }}		
			
				<!--<input id="password" name="password" type="password" placeholder="password"></br>-->        
				{{ Form::password('password', array('placeholder' => 'password', 'class' => 'form-control', 'id'=> 'password')) }}


				{{ Form::password('confirm_password', array('placeholder' => 'confirm_password', 'class' => 'form-control', 'id'=> 'confirm_password')) }}

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