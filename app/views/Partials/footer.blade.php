<nav class="nav navbar-nav navbar-fixed-bottom">
	<footer class="navbar-footer footer navbar-inverse">
    	<div class="container-fluid row center-block">

          {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET', 'class' => 'navbar-form')) }}
            <div class='form-group'>{{ Form::text('keyword', NULL, array('placeholder' => 'Search...', 'class' => 'form-control')) }}</div>
          {{ Form::submit('Submit!', array('class' => 'btn btn-default')) }}
          {{ Form:: close() }}

      	</div>
	</footer>
</nav>






        