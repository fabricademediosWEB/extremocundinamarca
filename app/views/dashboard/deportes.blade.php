@extends('layouts.layout')
@section('tittle')
	<title>Accion Deporte | Extremo Cundinamarca</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Accion Deporte</legend>
			{{Form::open()}}
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::select('Deporte', $deporte, null, array(
					'placeholder'=>'Seleccione un deporte'))}}
					{{Form::text('diaHabli', null, array(
					'placeholder'=>'Precio en dia habil'))}}
					{{Form::text('diaFDS', null, array(
					'placeholder'=>'Precio fin de semana'))}}
					<ul class="button-group right">
						<li>
							<a href="#" class="button secondary">Cancelar</a>
						</li>						
						<li>
							{{Form::submit('Aceptar', array(
							'class'=>'button'))}}
						</li>
					</ul>
				</div>
			</div>
			{{Form::close()}}
		</fieldset>
	</div>
@stop