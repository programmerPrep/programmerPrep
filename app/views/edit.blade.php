@extends('layouts.master')
@section('content')
<main>
<body id="dashboardBODY">
	@include ('partials.navbar')
		<div class="CavortingEdit"> Edit Your Profile </div>
		
		<div class="container"> 			
			
				{{ Form::open(array('action' => 'UsersController@update', 'class' => 'form-signin', 'files' => true)) }}
					<div class="loginField loginStyle">
						{{ Form::text('username', $user->username, array('class' => 'form-control formMarginAdjust adjustFormMarginTop', 'placeholder' => 'username', 'id'=>'username')) }}
						{{ $errors->first('username', '<span class="help-block">:message</span>') }}
						{{ Form::text('email', $user->email, array('class' => 'form-control formMarginAdjust', 'placeholder' => 'email', 'id'=>'email')) }}
						{{ $errors->first('email', '<span class="help-block">:message</span>') }}
						{{ Form::text('first_name', $user->first_name, array('class' => 'form-control formMarginAdjust', 'placeholder' => 'first_name', 'id'=>'first_name')) }}
						{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
						{{ Form::text('last_name', $user->last_name, array('class' => 'form-control formMarginAdjust', 'placeholder' => 'last_name', 'id'=>'last_name')) }}
						{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
						{{ Form::text('bio', $user->bio, array('class' => 'form-control formMarginAdjust', 'placeholder' => 'bio', 'id'=>'bio')) }}	
						{{ $errors->first('bio', '<span class="help-block">:message</span>') }}
						{{ Form::text('interests', $user->interests, array('class' => 'form-control formMarginAdjust', 'placeholder' => 'interests', 'id'=>'interests')) }}	
						{{ $errors->first('interests', '<span class="help-block">:message</span>') }}
						{{ Form::text('github_name', $user->github_name, array('class' => 'form-control formMarginAdjust', 'placeholder' => 'github_name', 'id'=>'github_name')) }}	
						{{ $errors->first('github_name', '<span class="help-block">:message</span>') }}	
						{{ Form::password('password', array('placeholder' => 'password', 'class' => 'form-control formMarginAdjust', 'id'=> 'password')) }}
						{{ $errors->first('password', '<span class="help-block">:message</span>') }}
						{{ Form::password('confirm_password', array('placeholder' => 'confirm_password', 'class' => 'form-control formMarginAdjust', 'id'=> 'confirm_password')) }}
						{{ $errors->first('confirm_password', '<span class="help-block">:message</span>') }}
						
							<div class="registration">
								</br>
							</div>
						{{ Form::file('img_url', array('class' => 'form-control formMarginAdjust', 'id'=>'img_url')) }}	
						{{ $errors->first('img_url', '<span class="help-block">:message</span>') }}
						{{ Form::submit('Sign in', array('class' => 'button')); }}
					</div>

				</div>
			</div>				
		{{ Form::close() }}
</body>
</main>

@stop