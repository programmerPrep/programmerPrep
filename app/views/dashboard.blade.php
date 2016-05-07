@extends('layouts.master')
@section('content')



<div id="dashboardBODY">
	<div class="navbarStyle">
			<ul class="YunusNavbar navLinkAdjustment">
				<li><a href="{{{ action('DashboardController@show', Auth::id()) }}}">Home</a></li>
				<li><a href="#">Calendar</a></li>
				<li><a href="#">Google+</a></li>
				<li><a href="{{{ action('UsersController@show', Auth::id()) }}}">Profile</a></li>
				<li><a href="{{{ action('UsersController@index') }}}">Mentors</a></li>
				<li><a href="{{{ action('DashboardController@aboutUs') }}}">About Us</a></li>
				<li><a href="{{{ action('UsersController@showLogout') }}}">Log Out</a></li>
			</ul>
		</div>
	<div class="CavortingTitle">programmerPrep</div>

	<div class="container">
		<div class="row">
			<div class="four columns">
				@foreach ($pending as $user)
					<!-- <?php $interestsArray = explode(',', $user->interests); ?> -->
					<div class="note yellow">
	    				{{ HTML::image($user->img_url, $user->first_name, array('class' => 'statusPic')) }}
	  					<div class="quote-container">
	    					{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
	    					<div class="author yunusStatus">
	    						{{ $user->first_name }} {{ $user->last_name }}
								<a href="mailto:{{ $user->email }}?Subject='programmerPrep!'" target="_top"><img class="icon" src="/icons/mail.png"></a>
	    					</div>
	  					</div>
					</div>    	
				@endforeach
			</div>
			<div class="four columns">
				@foreach ($active as $user)
					<!-- <?php $interestsArray = explode(',', $user->interests); ?> -->
		    		<div class="note yellow">
		    			{{ HTML::image($user->img_url, $user->first_name, array('class' => 'statusPic')) }}
		  				<div class="quote-container">
		    				{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
		    				<div class="author yunusStatus">
		    					{{ $user->first_name }} {{ $user->last_name }}
								<a href="mailto:{{ $user->email }}?Subject='programmerPrep!'" target="_top"><img class="icon" src="/icons/mail.png"></a>
		    				</div>
		  				</div>
					</div>    	
				@endforeach
			</div>
		</div>
	</div>
</div>

@stop
