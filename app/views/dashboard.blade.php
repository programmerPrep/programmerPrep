@extends('layouts.master')
@section('content')

<?php $updatedArray = explode(' ' , $user->updated_at);?>

<div id="dashboardBODY">
	@include ('partials.navbar')
	<div class="CavortingTitle">Status Page</div>
	<div class="nameDate">{{ $user->first_name}} {{ $user->last_name }} <br> {{ $user->github_name }} <br> {{ $updatedArray[0] }}</div>
	<div class="container">
		<div class="row">
			<div class="six columns">
				@foreach ($pending as $user)
					<?php $interestsArray = explode(',', $user->interests); ?>
					<div class="note yellow">
						<div class="align-left">
							@if (Auth::user()->is_mentor == 1)
								<a href="{{{action('UsersController@acceptRequest', $user->id)}}}">
									<img class="plusIcon" src="/icons/glyphicons/png/glyphicons-191-plus-sign.png">
								</a>
							@endif
							<div id="pending">Pending</div>
						</div>
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
			<div class="six columns">
				@foreach ($active as $user)
					<?php $interestsArray = explode(',', $user->interests); ?>
					<div class="note yellow">
						<div class="align-left">
							@if (Auth::user()->is_mentor == 1)
                				<a href="{{{action('UsersController@deleteRelationship', $user->id)}}}">
									<img src="/icons/glyphicons/png/glyphicons-193-remove-sign.png">
								</a>
                			@endif

							<div id="active">Active</div>
						</div>
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
