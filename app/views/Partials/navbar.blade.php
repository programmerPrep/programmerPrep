<div class="navbarStyle">
	<ul class="YunusNavbar navLinkAdjustment">
			<li><a href="{{{ action('DashboardController@show', Auth::id()) }}}" target="_blank">Home</a></li>
			<li><a href="https://calendar.google.com/calendar/render#main_7" target="_blank">Calendar</a></li>
			<li><a href="https://hangouts.google.com/">Video Chat</a></li>
			<li><a href="{{{ action('UsersController@update', Auth::id()) }}}" target="_blank">Profile</a></li>
			<li><a href="{{{ action('UsersController@index') }}}" target="_blank">Mentors</a></li>
			<li><a href="{{{ action('DashboardController@aboutUs') }}}" target="_blank">About Us</a></li>
			<li><a href="{{{ action('UsersController@showLogout') }}}">Log Out</a></li>
	</ul>
</div>