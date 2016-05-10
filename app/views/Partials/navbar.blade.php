<div class="navbarStyle">
	<ul class="YunusNavbar navLinkAdjustment">
			<li><a href="{{{ action('DashboardController@show', Auth::id()) }}}">Home</a></li>
			<li><a href="https://calendar.google.com/calendar/render#main_7">Calendar</a></li>
			<li><a href="https://hangouts.google.com/">Video Chat</a></li>
			<li><a href="{{{ action('UsersController@show', Auth::id()) }}}">Profile</a></li>
			<li><a href="{{{ action('UsersController@index') }}}">Mentors</a></li>
			<li><a href="{{{ action('DashboardController@aboutUs') }}}">About Us</a></li>
			<li><a href="{{{ action('UsersController@showLogout') }}}">Log Out</a></li>
	</ul>
</div>