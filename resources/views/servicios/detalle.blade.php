@extends('layouts.main')
@section('content')
<div class="panel-body">
<div class="clearfix">
 
 <p class="h6">Destino:</p>
 <p class="h4 mb-3">{{ $servicios->destino }}</p>
 <p class="h6">Precio:</p>
 <p class="h4 mb-3">$ COP {{ $servicios->precio }}</p>
 <p class="h6">Cupos:</p>
 <p class="h4 mb-3">{{ $servicios->cupos }}</p>
 <p class="h6">Duración:</p>
 <p class="h4 mb-3">{{ $servicios->duracion }}</p>
 <p class="h6">Descripcion:</p>
 <p class="h4 mb-3">{{ $servicios->descripcion }}</p>

</div>
</div>
@endsection