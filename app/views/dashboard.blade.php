
@extends('layouts.master')
@section('content')

<body id="dashboardBODY">
	    <div id="wrapper">
        	<div id="sidebar-wrapper">
            	<ul class="sidebar-nav Yunus">
                	<li class="marginAdjust">
                		<form class="navbar-form" role="search">
        					<div class="form-group">
          						<input type="text" class="form-control" id="forcedInputSize" placeholder="Search">
          					</div>
      					</form>
      				</li>
                	<li class=""><a href="#">Home</a></li>
                	<li><a href="https://calendar.google.com/calendar/">Calendar!</a></li>
                	<li><a href="https://hangouts.google.com/">Hangouts!</a></li>
                	<li><a href="#">My Profile!</a></li>
                	<li><a href="#">Mentors!</a></li>
                	<li><a href="#">Logout!</a></li>
                	<li><a href="#">About Us!</a></li>
            	</ul>
        	</div>
        </div>
</body>
@stop
