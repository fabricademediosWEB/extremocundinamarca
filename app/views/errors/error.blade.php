@section('content')	
	<div id="modal" class="reveal-modal tiny" data-reveal>
	  <h1>{{ $encabezado }}</h1>
	  @foreach ($cuerpo as $mensaje)
	  <p>{{$mensaje}}</p>
	  @endforeach
	  <p></p>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
@stop
@section('scriptFooter')
	<script src="js/foundation/foundation.reveal.js"></script>
@stop