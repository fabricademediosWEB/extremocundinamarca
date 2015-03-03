@extends('layouts.layout')
@section('tittle')
<title>Login | Cundinamarca Extrema</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend>Ingresa a tu cuenta</legend>
			{{Form::open(array('url'=>'login'))}}
				<div class="row">
					<div class="large-11 large-centered columns">
						{{Form::text('emailLogin', null, array(
							'placeholder' => 'Email',
							'required' => 'true'
						))}}
						{{Form::password('passwordLogin', array(
							'placeholder' => 'Ingrese la Clave',
							'required' => 'true'
						))}}
						<ul class="button-group right">
							<li><a href="{{url('/')}}" class="button secondary">Cancelar</a></li>
							<li>
								{{Form::submit('Acceder', array(
									'class' => 'button'
								))}}
							</li>
						</ul>
					</div>
				</div>
			{{Form::close()}}
		</fieldset>
	</div>
@stop