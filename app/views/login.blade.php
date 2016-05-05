@extends('layouts.master')
@section('content')
<html id="landingHTML">
<body id="landingBody">
	<div class="container"> 
		<div class="whiteBox">			
			<div class="title"> programmerPrep </div>
			<p class="definition">Connecting aspiring Jr. Developers to Mentors in the industry</p>

			<!-- login -->

			<!--<form method="POST" id="signupForm">-->
			{{ Form::open(array('action' => 'UsersController@checkLogin', 'class' => 'form-signin')) }}

			<div class="loginField">
				<!--<input id="username" name="username" type="text" Placeholder="username"><br>-->

				{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'username', 'id'=>'username')) }}	
			
				<!--<input id="password" name="password" type="password" placeholder="password"></br>-->        
				{{ Form::password('password', array('placeholder' => 'password', 'class' => 'form-control', 'id'=> 'password')) }}

				<div class="registration">
					{{-- <input id="confirmPassword" name="confirmPassword" type="password" placeholder="confirmPassword"> --}}
					{{ Form::password('confirmPassword', array('placeholder' => ' confirm password', 'class' => 'form-control', 'id' => 'confirmPassword'))}}
				{{-- <input id="email" name="email" type="email" placeholder="emailAddress"> --}}
				{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email', 'id' => 'email')) }}
				{{ Form::text('github', null, array('class' => 'form-control', 'placeholder' => 'github username', 'id' => 'githubUsername')) }}
			</div>
			<div class="loginFormButtons">
				<button type="button" id="registerButton" class="loginFormButton">Register</button>
				{{-- <button type="submit" id="loginButton" class="loginFormButton">Login</button> --}}
				{{ Form::submit('Sign in', array('class' => 'btn-log')); }}
				<!-- stickyNote -->
				<a href={{{'aboutUs'}}}><img class="stickyNote" src="/img/stickyNote.png"> </a>
			</div>
			</div>
			</div>
			</div>
				<!--</form> -->    
				{{ Form::close() }}         
				<!-- you need to add the spine (absolute 0 0 )  -->
				<script>
					$("#registerButton").click(function() {
						$(".registration").slideToggle("invisible");
							// Toggle Register/Un-Register
							$(this).text(function(i,v) {
								return v === 'Un-Register' ? 'Register' : 'Un-Register'
							});
						});
				</script>
			</body>
	@stop


