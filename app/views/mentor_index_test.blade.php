<html>
<head>
    <title>mentor_index_test</title>
</head>
<body>
    @foreach ($users as $user)
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
    
    
</body>
</html>

