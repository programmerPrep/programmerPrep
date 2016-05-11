@extends('layouts.master')
@section('content')

<?php $updatedArray = explode(' ' , $user->updated_at);?>

<div id="dashboardBODY">
	
	@include ('partials.navbar')
	
	<div class="CavortingTitle">Mentor Index</div>
	<div class="nameDate">{{ $user->first_name}} {{ $user->last_name }} <br> {{ $user->github_name }} <br> {{ $updatedArray[0] }}</div>
	
	<div class="container">
		<div class="row">
			@foreach ($mentors as $mentor)
				<div class="six columns">
					<?php $interestsArray = explode(',', $mentor->interests); ?>
					<div class="note yellow">
						<div class="align-left">
							<a href="{{{action('UsersController@acceptRequest', $mentor->id)}}}">
								<img src="/icons/glyphicons/png/glyphicons-191-plus-sign.png">
							</a>
						</div>
	    				{{ HTML::image($mentor->img_url, $mentor->first_name, array('class' => 'statusPic')) }}
	  					<div class="quote-container">
	    					{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
	    					<div class="author yunusStatus">
	    						{{ $user->first_name }} {{ $user->last_name }}
								<a href="mailto:{{ $user->email }}?Subject='programmerPrep!'" target="_top"><img class="icon" src="/icons/mail.png"></a>
	    					</div>
	  					</div>
					</div>    	
				</div>
			@endforeach
		</div>
	</div>
</div>

@stop
