@extends('layouts.layout')
@section('content')
@if($empresas)
<span>
	<h2>listado</h2>
</span>
<ul>
	@foreach($empresas as $empresa)
	<li>{{$empresa->id}}-{{$empresa->descripcion}} - {{$empresa->nit}} - {{HTML::link('eliminar/'.$empresa->id, 'borrar')}}</li> 
	@endforeach
@else
<h5>No existen usuarios</h5>
@endif
</ul>
@stop