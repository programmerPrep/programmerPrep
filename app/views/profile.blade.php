@extends('layouts.master')
@section('content')
@include ('partials.navbar')
<div id="dashboardBODY">
	<div class="CavortingTitle">{{ $user->first_name }}'s Profile</div>
		<div class="nameDate">{{ $user->first_name}} {{ $user->last_name }} <br> {{ $user->github_name }} <br> {{ $user->updated_at }}</div>

	<div class="container profileBody">

	<div class="note yellow profileNote">
						<div class="align-left">
							<a href="{{{action('UsersController@acceptRequest', $user->id)}}}">
								<img src="/icons/glyphicons/png/glyphicons-191-plus-sign.png">
							</a>
							<div id="pending">Mentor</div>
						</div>
	    				{{ HTML::image($user->img_url, $user->first_name, array('class' => 'statusPic profilePic')) }}
	  					<div class="quote-container">
	    					{{{ $user->interests }}}
	    					<div class="author yunusStatus">
	    						{{ $user->first_name }} {{ $user->last_name }}
								<a href="mailto:{{ $user->email }}?Subject='programmerPrep!'" target="_top"><img class="icon" src="/icons/mail.png"></a>
	    					</div>
	  					</div>
					</div>    	

	<a href="{{{ action("UsersController@edit", $user->id) }}}"> Edit Info</a>
</div>






@stop