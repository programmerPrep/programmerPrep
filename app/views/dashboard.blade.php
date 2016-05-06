
@extends('layouts.master')
@section('content')

<div id="dashboardBODY">
	<div class="navbarStyle">
			<ul class="YunusNavbar navLinkAdjustment">
				<li><a href="#">Home</a></li>
				<li><a href="#">Calendar</a></li>
				<li><a href="#">Google+</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">Mentors</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Log Out</a></li>
			</ul>
		</div>
	<div class="CavortingTitle">programmerPrep</div>
				
	@foreach ($users as $user)
    	<div class="statusInfo">
    		{{ HTML::image('$users->img_url', '$users->first_name', array('class' => 'picture')) }}
    		<ul>
    			<li>{{ $user->first_name }}</li>
    			<li>{{ $user->last_name }}</li>
    			<li>{{ $user->interests }}</li>
    		</ul>
    	</div>
    	
	@endforeach
	

				
</div>
@stop
