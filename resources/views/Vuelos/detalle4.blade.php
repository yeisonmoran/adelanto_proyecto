@extends('layouts.main')
@section('alrrays')
   <div class="panel-body">
     <div class="clearfix">
 
       <p class="h6">lugar de origen:</p>
       <p class="h4 mb-3">{{ $Vuelos->origen }}</p>
       <p class="h6">destino:</p>
       <p class="h4 mb-3">{{ $Vuelos->destino }}</p>
       <p class="h6">fecha de salida:</p>
       <p class="h4 mb-3">{{ $Vuelos->fecha_salida}}</p>
       <p class="h6">fecha de llegada:</p>
       <p class="h4 mb-3">{{ $Vuelos->fecha_llegada}}</p>
       <p class="h6">duracion:</p>
       <p class="h4 mb-3">{{ $Vuelos->duracion}}</p>
       <p class="h6">precio:</p>
       <p class="h4 mb-3">$ COP {{ $Vuelos->precio}}</p>
       <p class="h6">asientos disponibles:</p>
       <p class="h4 mb-3">{{ $Vuelos->asientos_disponibles}}</p>
     </div>
   </div>
@endsection