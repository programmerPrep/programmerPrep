@extends('layouts.master')
@section('content')


<div id="dashboardBODY">
	@include ('partials.navbar')
	<div class="CavortingTitle">Status Page</div>
	<div class="container">
		<div class="row">
			<div class="six columns">
				@foreach ($pending as $user)
					<?php $interestsArray = explode(',', $user->interests); ?>
					<div class="note yellow">

						<a href="#" target="_top"><img class="addIcon" src="/icons/add1.svg" alt="Add Mentor!"></a>
	    					{{ HTML::image($user->img_url, $user->first_name, array('class' => 'statusPic')) }}

						<div id="pending">Pending</div>
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

		    		<a href="#" target="_top"><img class="subIcon" src="/icons/remove2.png" alt="Add Mentor!"></a>

		    			<div id="active">Active</div>

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
