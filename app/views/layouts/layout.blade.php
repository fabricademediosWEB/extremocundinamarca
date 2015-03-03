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
	<header>
		<div class="contain-to-grid sticky">
			<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<a href="{{url('/')}}"><h1 class="flaticon-padding logo"> Extremo Cundinamarca</h1></a>
				</li>
				 <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  			</ul>
  			<section class="top-bar-section">
   			<!-- left Nav Section -->
   			@if(Auth::check())
   				<ul class="right">
   					<li class="has-dropdown"><a href="#"></a>
   						<ul class="dropdown">
   							<li><a href="">Editar Perfil</a></li>
   							<li><a href="">Dashboard</a></li>
   							<li><a href="">Cambiar Clave</a></li>
   							<li><a href="{{url('logout')}}">Cerrar Sesion</a></li>
   						</ul>
   					</li>
   				</ul>
   			@else
   				<ul class="left">
					<li><a href="">Deportes Extremos</a></li>
					<li><a href="">Practica tu Deporte</a></li>
				</ul>
    			<ul class="right">							
					<li><a href="{{url('registro')}}">Registrate</a></li>
					<li><a href="{{url('login')}}">Ingresa</a></li>
				</ul>
			@endif
 			 </section>
			</nav>			
		</div>
	</header>
	@yield('content')
	<div class="text-centerd">
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
	{{HTML::script('js/foundation/foundation.topbar.js')}}
	@yield('scriptFooter')
</body>
</html>