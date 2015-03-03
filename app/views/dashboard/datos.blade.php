@extends('layouts.layout')
@section('tittle')
	<title>Editar Perfil | Extremo Cundinamarca</title>
@stop
@section('content')
	<div class="row">
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Edita tu Informacion</legend>
			{{Form::open()}}
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::text('companyName',null,array(
					'placeholder'=>'Nombre Empresa'))}}
					{{Form::text('NIT', null, array(
					'placeholder'=>'NIT'))}}
					{{Form::email('email', null, array(
					'Placeholder'=>'Email'))}}
				</div>
			</div>
		</fieldset>
		<fieldset class="small-10 medium-8 small-centered columns top">
			<legend class="text-centered">Direccion</legend>
			<div class="row">
				<div class="large-11 columns large-centered">
					{{Form::text('Dirección', null, array(
					'placeholder'=>'Dirrección'))}}
					{{Form::select('city', $ciudad, null, array(
					'placeholder'=>'Seleccione una ciudad'))}}
				</div>
			</div>
			{{Form::close()}}
		</fieldset>
		<div class="small-10 medium-8 small-centered columns top">
			<div class="row">
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
	</div>
@stop