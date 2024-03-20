@extends('layouts.main')
@section('content')
<div class="panel-body">
<div class="clearfix">
 
 <p class="h6">usuario id:</p>
 <p class="h4 mb-3">{{ $reservas->usuario_id }}</p>
 <p class="h6">Paquete:</p>
 <p class="h4 mb-3">{{ $reservas->Paquete }}</p>
 <p class="h6">fecha de reserva:</p>
 <p class="h4 mb-3">{{ $reservas->fecha_reserva}}</p>
 <p class="h6">numero de personas:</p>
 <p class="h4 mb-3">{{ $reservas->num_personas }}</p>
 <p class="h6">estado:</p>
 <p class="h4 mb-3">{{ $reservas->estado }}</p>

</div>
</div>
@endsection