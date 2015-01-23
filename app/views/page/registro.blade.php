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
					{{Form::select('cities', DB::table('ciudades')->orderBy('descripcion')->lists('descripcion','id'), null, array(
						'placeholder' => 'Seleccione el municipio'
					))}}
					{{Form::text('direction', null, array(
						'placeholder' => 'Dirección',
						'required' => 'true',
						'maxlength' => 200
					))}}
					<div class="row">
						<div class="large-6 columns">
							{{Form::text('telephone', null, array(
							'placeholder' => 'Telefono',
							'required' => 'true'
							))}}
						</div>
						<div class="large-6 columns">
							{{Form::text('telephoneMobile', null, array(
								'placeholder' => 'Celular'
							))}}
						</div>
					</div>
					
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