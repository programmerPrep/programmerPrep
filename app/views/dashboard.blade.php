@extends('layouts.master')
@section('content')

<body id="dashboardBODY">

	<div class="container">

		<header class="CavortingTitle">programmerPrep</header>
		
		<div class="navbarStyle">
			<ul class="YunusNavbar">
				<li><a href="">Home</a></li>
				<li><a href="">Calendar</a></li>
				<li><a href="">Google+</a></li>
				<li><a href="">Profile</a></li>
				<li><a href="">Mentors</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Log Out</a></li>
			</ul>
		</div>	
		
		<footer class="footerStyle">

			{{ Form::open(array('action' => 'UsersController@index', 'method' => 'GET', 'class' => 'navbar-form')) }}
            		<div class="input-group">
            			{{ Form::text('keyword', NULL, array('placeholder' => 'Find a mentor...', 'class' => 'form-control navbar-search')) }}
            			<div class="input-group-btn glyphicon">
            				{{ Form::submit('', array('class' => 'fa fa-search')) }}
            			</div>
            		</div>
          				
      		{{ Form:: close() }}

		</div>
		</footer>
	

	</div>

</body>
@stop
