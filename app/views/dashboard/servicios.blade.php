@extends('layouts.layout')
@section('title')
	<title>Accion Servicio | Extremo Cundinamarca</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Accion Servicio</legend>
			{{Form::open()}}
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::select('Servicios', $servicio, null,array(
					'placeholder'=>'Seleccione un servicio'
					))}}
					{{Form::text('precio', null, array(
					'placeholder' => 'Precio del Servicio',
					'required'=> 'true',
					'type' => 'number'
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