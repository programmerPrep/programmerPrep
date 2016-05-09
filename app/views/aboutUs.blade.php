@extends('layouts.master')
@section('content')
<main>
	<!-- <div class="container"> -->
		<div class="row us">
			<!-- 4 pictures of us -->
			<div class="burney">
			    <div class="three columns">
					<img class="picture" src="/img/burney.jpg">
					<br>Michael Burney<br>
					<a href="https://github.com/burneyburney"><img class="icon" src="/icons/git.png"></a>
					<a href="https://www.linkedin.com/in/michael-burney-1a4bbb104"><img class="icon" src="/icons/link.png"></a>
					<a href="mailto:Burney318@gmail.com?Subject='programmerPrep!'" target="_top"><img class="icon" src="/icons/mail.png"></a>
				</div>
			</div>
			<div class="greg">
				<div class="three columns">
					<img class="picture"src="/img/greg.jpg">
					<br>Gregory Bickham<br>
					<a href="https://github.com/Gregory-Bickham"><img class="icon" src="/icons/git.png"></a>
					<img class="icon" src="/icons/link.png">
					<a href="mailto:Gregory.Bickham@gmail.com?Subject='I%20found%20your%20website!'" target="_top"><img class="icon" src="/icons/mail.png"></a>				
				</div>
			</div>
			<div class="logan">
				<div class="three columns">
					<img class="picture" id="logan" src="/img/logan.jpg">
					<br>Logan Farmer<br>
					<a href="https://github.com/yungshark"><img class="icon" src="/icons/git.png"></a>
					<a href="https://www.linkedin.com/in/logan-farmer-032a7b11b"><img class="icon" src="/icons/link.png"></a>
					<a href="mailto:thevisagiftcard@gmail.com?Subject='I%20found%20your%20website!'" target="_top"><img class="icon" src="/icons/mail.png"></a>				
				</div>
			</div>
			<div class="nick">
				<div class="three columns">
					<img class="picture" src="/img/nick.jpg">
					<br>Nick Vrzalik<br>
					<a href="https://github.com/platonicpoobear"><img class="icon" src="/icons/git.png"></a>
					<img class="icon" src="/icons/link.png">
					<a href="mailto:nicholas.vrzalik@hotmail.com?Subject='I%20found%20your%20website!'" target="_top"><img class="icon" src="/icons/mail.png"></a>				
				</div>
			</div>
		</div>
	</div>
</main>
<body class="JAH" id="aboutUsBody">
	<div class="row">
		<div id="aboutUsParagraph">
			We are a team of web developers, with a desire for knowledge who wanted to give back to the community that spawned us. Programmer Prep was created with one main goal in mind and that was to create a web-application that connects developer to developers. We used a combination of languages and frameworks to dial in our desired results: Skeleton for mobile responsiveness and normalize to ensure that all browsers render the website consistenty. PHP, Laravel and MySQL were used on the backend. JavaScript and jQuery were used for simple logic for the front end. But even with this slew of technologies this could not have been done if it wern't for the mantra "Eat, Sleep, Code, Repeat"	
		</div>
	</div>
</body>
@stop



