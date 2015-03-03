@extends('layouts.layout')
@section('title')
	<title>Accion Servicio | Extremo Cundinamarca</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Cambio de Clave</legend>
			{{Form::open()}}
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::password('actual', array(
					'placeholder' => 'Contraseña Actual'
					))}}
					{{Form::password('nueva', array(
					'placeholder'=>'Contraseña Nueva'
					))}}
					{{Form::password('confirmar', array(
					'placeholder'=>'Confirmar Nueva Clave'
					))}}
					<ul class="button-group right">
						<li>
							<a href="#" class="button secondary">Cancelar
							
							</a>
						</li>
						<li>
							{{Form::submit('Aceptar', array(
							'class' => 'button'))}}						
						</li>
					</ul>
				</div>
			</div>
			{{Form::close()}}
		</fieldset>
	</div>
@stop