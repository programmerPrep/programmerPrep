@extends('layouts.master')
	@section('content')
		<body id="landingBody">
			<div class="container"> 

				<div class="whiteBox">			
					<legend> img_AU </legend>
					<div class="title"> programmerPrep</div>
					<p class="definition"> Connecting aspiring Jr. Developers to Mentors in the industry</p>
					<!-- login -->
					<form method="POST" id="signupForm">
						<input id="username" name="username" type="text" Placeholder="username"><br>
		        		<input id="password" name="password" type="password" placeholder="password"></br>
		        		<div class="registration">
				    		<input id="confirmPassword" name="confirmPassword" type="password" placeholder="confirmPassword"></br>
		          			<input id="email" name="email" type="email" placeholder="emailAddress">
		          		</div>
		          		<div class="loginFormButtons">
		        			<button type="button" id="registerButton" class="loginFormButton">Register</button>
		        			<button type="submit" id="loginButton" class="loginFormButton">Login</button>
		      			</div>
		          	</form>         
		        </div>
			</div>
		</body>
		          	 <!-- you need to add the spine (absolute 0 0 )  -->

		<script>
		// Toggle Register/Un-Register
		$("#registerButton").click(function() {
			$(".registration").slideToggle("invisible");
				$(this).text(function(i,v) {
		    		return v === '  Back  ' ? 'Register' : '  Back  '
				});
		});
		</script>
@stop





