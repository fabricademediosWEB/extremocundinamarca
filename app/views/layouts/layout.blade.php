<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="content">
	@yield('tittle')
	{{HTML::style('css/normalize.css');}}
	{{HTML::style('css/foundation.min.css');}}
	{{HTML::style('css/style.css')}}
	@yield('style')
	{{HTML::script('js/vendor/modernizr.js');}}
	@yield('script')
</head>
<body>
	<header class="top-bar" data-topbar role="navigation">
		<div class="row">
			<!--<div class="small-2 medium-1 large-1 columns five-up">-->			
				<a href="" class="item">
					<img src="resources/img/logo/logo.jpeg" alt="" class="small-2 medium-1 large-1 columns">
				</a>				
			<!--</div>-->
			<div class="small-10 medium-11 large-11 columns">
				<nav>
					<section class="top-bar-section">
						<ul class="left">
							<li><a href="{{url('/')}}">Inicio</a></li>
							<li><a href="{{url('prueba')}}">Deportes Extremos</a></li>
							<li><a href="">Practica tu Deporte</a></li>
						</ul>
						<ul class="right">							
							<li><a href="{{url('registro')}}">Registrate</a></li>
							<li><a href="{{url('login')}}">Ingresa</a></li>
						</ul>
					</section>					
				</nav>
			</div>
		</div>
	</header>
	@yield('content')
	<div class="text-centerd" id="sticky_footer">
		<div class="row">
			<div class="small-12-columns">
				<a href="">
					<p class="text-center">Acerca de nosotros</p>
				</a>
			</div>
		</div>
	</div>
	{{HTML::script('js/vendor/jquery.js');}}
	{{HTML::script('js/foundation.min.js');}}
	{{HTML::script('js/foundation/foundation.js');}}
</body>
</html>