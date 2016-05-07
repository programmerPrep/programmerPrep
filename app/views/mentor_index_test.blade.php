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
	<div class="CavortingTitle">Mentor Index</div>

	<div class="container">
		<div class="row">
			<div class="ten columns">
				@foreach ($mentors as $mentor)
					<?php $interestsArray = explode(',' , $mentor->interests);?>
					<div class="note yellow">
            			{{ HTML::image($mentor->img_url, $mentor->first_name, array('class' => 'statusPic')) }}
            			<div class="quote-container">
                			{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
                			<div class="author yunusStatus">
                    			{{ $mentor->first_name }} {{ $mentor->last_name }}
                    			<a href="mailto:{{ $mentor->email }}?Subject='programmerPrep!'" target="_top"><img class="icon" src="/icons/mail.png"></a>
                			</div>
            			</div>
        			</div>      	
				@endforeach
			</div>
		</div>
	</div>
</div>

@stop
