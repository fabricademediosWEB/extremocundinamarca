@extends('layouts.layout')
@section('tittle')
	<title>Dashboard | Extremo Cundinamarca</title>
@stop
@section('content')
<!--seccion de los tabs-->
<div class="top row">
  <ul class="tabs small-12 medium-10 large-10 columns small-centered" data-tab>
      <li class="tab-title active"><a href="#deportes">Deportes</a></li>
      <li class="tab-title"><a href="#servicios">Servicios</a></li>
  </ul>
</div>
<!--Seccion para los contenidos-->
<div class="top row">
  <div class="small-12 medium-10 large-10 columns small-centered" style="height:60vh;overflow-y:scroll; border-style:solid; border-color:black;">
    <!--Contenido de los tabs-->
    <div class="tabs-content top">
      <!--Contenido de la tab de deportes-->
      <div class="content active" id="deportes">
        <!--Boton para crear un nuevo deporte-->
        <a href="{{url('NuevoDeporte')}}" class="button success tiny" style="font-size:14px;">Nuevo <span class="icon-plus" style="font-size:16px;"></span></a>
        <!--div para el contenido -->
        <div class="small-12 columns small-centered" style="border-style:solid;border-color:black;">
          <div class="row">
            <!--seccion del tipo de deporte-->
            <div class="small-12 medium-3 columns">
              <div class="row">
                {{Form::label('Deporte', 'Deporte:',array('class'=>'small-4 columns'))}}
                {{Form::label('nombreDeporte', 'Variable', array('class'=>'small-8 columns'))}}
              </div>
            </div>
            <!--seccion de los precios-->
            <div class="small-12 medium-8 columns">
              {{Form::label('habil', 'Precio Dia Habil:', array(
              'class' => 'small-8 columns'))}}
              {{Form::label('precioHabil', 'variable', array(
              'class'=>'small-4 columns'))}}
              {{Form::label('finSemana', 'Precio Dia Fin de Semana:', array(
              'class' => 'small-8 columns'))}}
              {{Form::label('precioFDS', 'Variable', array(
              'class'=>'small-4 columns'))}}
            </div>
            <!--seccion para editar y eliminar-->
            <div class="small-12 medium-1 columns">
              <div class="row">
                <!--seccion de editar datos-->
                <div class="small-6 medium-12 columns">
                  <span class="icon-edit"></span>  
                </div>
                <!--seccion de eliminar registro-->
                <div class="small-6 medium-12 columns">
                  <span class="icon-cancel"></span>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Contenido de la tab de servicios-->
      <div class="content" id="servicios">
        <!--Boton para crear nuevo servicio-->
        <a href="{{'NuevoServicio'}}" class="button success tiny" style="font-size:14px;">Nuevo <span class="icon-plus" style="font-size:16px;"></span></a>
        <!--div para el contenido-->
        <div class="small-12 columns small-centered" style="border-style:solid;border-color:black;">
          <div class="row">
            <!--seccion del tipo de servicio-->
            <div class="small-12 medium-3 columns">
              <div class="row">
                {{Form::label('service', 'Servicio:', array('class'=>'small-4 columns'))}}
                {{Form::label('nameService', 'Variable', array('class'=>'small-8 columns'))}}
              </div>
            </div>
            <!--Seccion valor del servicio-->
            <div class="small-12 medium-7 columns">
              <div class="row">
                {{Form::label('precio', 'Precio:', array('class'=>'small-4 columns'))}}
                {{Form::label('valor', 'Variable', array('class'=>'small-8 columns'))}}
              </div>
            </div>
            <!--Seccion para editar y eliminar-->
            <div class="small-12 medium-2 columns">
              <div class="row">
                <!--Seccion de editar registro-->
                <div class="small-6 columns"><span class="icon-edit"></span></div>                
                <!--Seccion de eliminar registro-->
                <div class="small-6 columns"><span class="icon-cancel"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>
@stop
@section('scriptFooter')
  {{HTML::script('js/foundation/foundation.tab.js')}}
  <script>
  $(document).foundation({
    tab: {
      callback : function (tab) {
        console.log(tab);
      }
    }
  });
</script>
@stop