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
					<div class="five columns">
						<?php $interestsArray = explode(',' , $mentor->interests);?>
						{{-- our note --}}
						<div class="note yellow">
							{{-- add icon --}}
							{{-- <a href="#" class=""> <img class="addIcon" src="/icons/glyphicons/png/glyphicons-191-plus-sign.png" alt="Add Mentor!"> </a> --}}

							{{-- status pic --}}
							<div class="profileButton">
            					<a href="{{{ action('UsersController@show', $mentor->id) }}}" class=""> Profile               				
            				</div>

							{{ HTML::image($mentor->img_url, $mentor->first_name, array('class' => 'statusPic')) }}</a>

            				<div class="quote-container">
                				{{{ $interestsArray[0] }}}, {{{ $interestsArray[1] }}}, {{{ $interestsArray[2] }}}...
                				<div class="author yunusStatus">
                    				{{ $mentor->first_name }} {{ $mentor->last_name }}
                				</div>
                				@if (Auth::user()->is_mentor == 0)
                				<div class="requestButton">
                				 <a href="{{{ action('UsersController@mentorRequest', $mentor->id) }}}"> REQUEST </a>
                				</div>
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
