@extends('layouts.layout')
@section('tittle')
	<title>Registro | Cundinamarca Extrema</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Registro Empresarial</legend>
			{{Form::open(array('url' => 'registrar'))}}
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::text('nameCompany', null, array(
						'placeholder' => 'Nombre Empresa',
						'required' => 'true'
					))}}
					{{Form::text('nit', null, array(
						'placeholder' => 'NIT',
						'type' => 'number',
						'required' => 'true',
						'maxlength' => '10'
					))}}					
					{{Form::email('email', null, array(
						'placeholder' => 'Email'
					))}}
					{{Form::password('password', array(
						'placeholder' => 'Clave'
					))}}
					{{Form::password('passwordConfirm', array(
						'placeholder' => 'Confirmar clave'
					))}}
					<ul class="button-group right">					
						<li>
							<a href="#" data-reveal-id="modal">
								{{Form::submit('Registrar', array(
									'class' => 'button'
								))}}
							</a>
						</li>
					</ul>
				</div>
			</div>
			{{Form::close()}}
		</fieldset>			
	</div>	
@stop
