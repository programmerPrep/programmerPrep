@extends('layouts.master')
@section('content')



<div id="dashboardBODY">
	
	@include ('partials.navbar')
	
	<div class="CavortingTitle">Mentor Index</div>
	<div class="container">
		<div class="row">
				@foreach ($mentors as $mentor)
					<div class="five columns">
						<?php $interestsArray = explode(',' , $mentor->interests);?>
						<div class="note yellow">
						<a href="#" class="button button-primary floatLeft"><!-- <img class="addIcon" src="/icons/glyphicons/png/glyphicons-191-plus-sign.png" alt="Add Mentor!"> -->Test</a>
            				{{ HTML::image($mentor->img_url, $mentor->first_name, array('class' => 'statusPic')) }}
            				<div class="quote-container">
                				{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
                				<div class="author yunusStatus">
                    				{{ $mentor->first_name }} {{ $mentor->last_name }}
                				</div>
            				</div>
        				</div>
        			</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@stop
