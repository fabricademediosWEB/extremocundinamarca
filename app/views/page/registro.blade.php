@extends('layouts.layout')
@section('tittle')
	<title>Registro | Cundinamarca Extrema</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Registro Empresarial</legend>
			{{Form::open()}}
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::text('nameCompany', null, array(
						'placeholder' => 'Nombre Empresa'
					))}}
					{{Form::text('nit', null, array(
						'placeholder' => 'NIT',
						'type' => 'number',
						'maxlength' => '10'
					))}}
					{{Form::select('city')}}
					{{Form::text('direction', null, array(
						'placeholder' => 'Dirección',
						'required' => 'true',
						'maxlength' => 200
					))}}
					{{Form::text('telephone', null, array(
						'placeholder' => 'Telefono',
						'required' => 'true'
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
						<li><a href="{{url('/')}}" class="button secondary">Cancelar</a></li>
						<li>
							{{Form::submit('Aceptar', array(
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