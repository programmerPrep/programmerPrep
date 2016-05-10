@extends('layouts.master')
@section('content')
@include ('partials.navbar')
<div id="dashboardBODY">
	<div class="CavortingTitle">Profile Page</div>
		<div id="helloFirstName">
			Hello, {{$user->first_name}}
		</div>

	<div class="container profileBody">

	<!-- first name -->
	{{ $user->first_name }} {{ $user->last_name }}
	<br>
	{{ $user->bio}}
	<br>
	{{ $user->interests}}
	<br>
	<img src="{{{ $user->img_url}}}">
	<br>
	{{ $user->github_name}}
	<br>

	<a href="{{{ action("UsersController@edit", $user->id) }}}"> Edit Info</a>
</div>






@stop