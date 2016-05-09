@extends('layouts.master')
@section('content')


<div id="dashboardBODY">
	@include ('partials.navbar')
	<div class="CavortingTitle">programmerPrep</div>
	 <div id="helloUsername">
		Hello, <?php echo Auth::user()->username; ?> !
	</div>

	<div class="container">
		<div class="row">
			<div class="four columns">
				@foreach ($pending as $user)
					<?php $interestsArray = explode(',', $user->interests); ?>
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
					<?php $interestsArray = explode(',', $user->interests); ?>
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
