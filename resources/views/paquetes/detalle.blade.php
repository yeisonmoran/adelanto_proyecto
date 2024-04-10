@extends('layouts.main')
@section('content')
   <div class="panel-body">
     <div class="clearfix">
 
       <p class="h6">Nombre:</p>
       <p class="h4 mb-3">{{ $paquetes->Nombre }}</p>
       <p class="h6">Descripcion:</p>
       <p class="h4 mb-3">{{ $paquetes->Descripcion }}</p>
       <p class="h6">Precio total:</p>
       <p class="h4 mb-3">$ COP {{ $paquetes->Precio_total }}</p>
       <p class="h6">Fecha de salida:</p>
       <p class="h4 mb-3">{{ $paquetes->Fecha_salida }}</p>
       <p class="h6">Fecha de regreso:</p>
       <p class="h4 mb-3">{{ $paquetes->Fecha_regreso }}</p>

     </div>
   </div>
@endsection







