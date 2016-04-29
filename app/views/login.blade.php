@extends('layouts.master')
	@section('content')


    

	<body id="landingBody">
	<div class="container"> 
		<div class="whiteBox">			

			<legend> img_AU </legend>
			
			<div class="title"> programmerPrep </div>
			<p class="definition"> 
				Connecting aspiring Jr. Developers to Mentors in the industry
			</p>

			<!-- login -->
<!-- 			<form method="POST" id="signupForm">
 -->			{{ Form::open(array('action' => 'UsersController@doLogin', 'class' => 'form-signin')) }}

 				<div class="loginField">
<!-- 				<input id="username" name="username" type="text" Placeholder="username"><br>
 -->                {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}
<!--         		<input id="password" name="password" type="password" placeholder="password"></br>
 -->                {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
        		<div class="registration ">
		    		{{-- <input id="confirmPassword" name="confirmPassword" type="password" placeholder="confirmPassword"> --}}
		    		{{ Form::password('confirmPassword', array('placeholder' => 'Confirm password', 'class' => 'form-control')) }}
		    		</br>
          			{{-- <input id="email" name="email" type="email" placeholder="emailAddress"> --}}
          			{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
          		</div>
          		<div class="loginFormButtons">
        			<button type="button" id="registerButton" class="loginFormButton">Register</button>
        			{{-- <button type="submit" id="loginButton" class="loginFormButton">Login</button> --}}
                    {{ Form::submit('Sign in', array('class' => 'btn-log')); }}
      			</div>
<!--           	</form>
 -->            {{ Form::close() }}         
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



@stop





