@extends('layouts.main')
@section('local')
   <div class="panel-body">
     <div class="clearfix">
 
       <p class="h6">Nombre de la Aerolinea:</p>
       <p class="h4 mb-3">{{ $aerolineas->Nombre }}</p>
       <p class="h6">Pais:</p>
       <p class="h4 mb-3">{{ $aerolineas->Pais }}</p>
       <p class="h6">Disponibilidad:</p>
       <p class="h4 mb-3">{{ $aerolineas->Disponibilidad}}</p>
       <p class="h6">Año de fundacion:</p>
       <p class="h4 mb-3">{{ $aerolineas->Anio_fundacion}}</p>
     </div>
   </div>
@endsection