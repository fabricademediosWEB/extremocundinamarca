<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="content">
	<title>Cundinamarca Extrema</title>
	{{HTML::style('css/normalize.css');}}
	{{HTML::style('css/foundation.min.css');}}
	{{HTML::script('js/vendor/modernizr.js');}}
</head>
<body>
	<header class="fixed">
		<nav class="top-bar" data-topbar role="navigation">
		  <ul class="title-area">
		    <li class="name row">
		      <img src="Resource/img/logo/logo.jpeg" class="small">
		    </li>
		  </ul>
		</nav>
	</header>
	@yield('content')

	{{HTML::script('js/vendor/jquery.js');}}
	{{HTML::script('js/foundation.min.js');}}
</body>
</html>