@extends('layouts.master')
@section('content')
@include ('partials.navbar')


<div id="dashboardBODY">
	
	@include ('partials.navbar')
	
	<div class="CavortingTitle">Mentor Index</div>
	<div class="container">
		<div class="row">
				@foreach ($mentors as $mentor)
					<div class="five columns">
						<?php $interestsArray = explode(',' , $mentor->interests);?>
						{{-- our note --}}
						<div class="note yellow">
							{{-- add icon --}}
							{{-- <a href="#" class=""> <img class="addIcon" src="/icons/glyphicons/png/glyphicons-191-plus-sign.png" alt="Add Mentor!"> </a> --}}

							{{-- status pic --}}
            				<a href="https://www.google.com" class=""> {{ HTML::image($mentor->img_url, $mentor->first_name, array('class' => 'statusPic')) }} </a>

            				<div class="quote-container">
                				{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
                				<div class="author yunusStatus">
                    				{{ $mentor->first_name }} {{ $mentor->last_name }}
                				</div>
                				@if (Auth::user()->is_mentor == 0)
                				 <a href="{{{ action('UsersController@mentorRequest', $mentor->id) }}}"> REQUEST </a>
                				@endif
            				</div>
        				</div>
        			</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@stop
