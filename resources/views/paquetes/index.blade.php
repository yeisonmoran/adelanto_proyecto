@extends('layouts.main')
@section('content')
    <a href="{{ route('paquetes.create') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar paquete</a>
    <table class="table table-success table-striped">
        <thead class="table-head">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio total</th>
                <th>Fecha de salida</th>
                <th>Fecha de regreso</th>
                <th>Acciones</th>
            </tr> 
        </thead>
        
        <tbody>
            @foreach($paquetes as $prod)
                <tr>
                    <td class="v-align-middle">{{$prod->Nombre}}</td>
                    <td class="v-align-middle">{{$prod->Descripcion}}</td>
                    <td class="v-align-middle">{{$prod->Precio_total}}</td>
                    <td class="v-align-middle">{{$prod->Fecha_salida}}</td>
                    <td class="v-align-middle">{{$prod->Fecha_regreso}}</td>
                    <td class="v-align-middle">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('paquetes.show',$prod->id) }}" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('paquetes.edit',$prod->id) }}" class="btn btn-primary">Editar</a>
                            <a href=""data-bs-toggle="modal" data-bs-target="#modal-delete-{{$prod->id}}">
                                <button type="button" class="btn btn-danger">Eliminar</button> 
                            </a>
                        </form>
                    </td>
                </tr>
                @include('paquetes.form.modal')
            @endforeach
        </tbody>
    </table>
@endsection

@section('tabla')
    <a href="{{ route('reservas.create') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar reserva</a>
    
    <table class="table table-success table-striped">
        
        <tr>
            <th>fecha de reserva</th>
            <th>numero de personas</th>
            <th>estado</th>
            <th>acciones</th>
        </tr> 
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td class="v-align-middle">{{$reserva->fecha_reserva}}</td>
                    <td class="v-align-middle">{{$reserva->num_personas}}</td>
                    <td class="v-align-middle">{{$reserva->estado}}</td>
                    <td class="v-align-middle">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('reservas.show',$reserva->id) }}" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('reservas.edit',$reserva->id) }}" class="btn btn-primary">Editar</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$reserva->id}}">
                                <button type="button" class="btn btn-danger">Eliminar</button> 
                            </a>
                        </form>
                    </td>
                </tr>
                @include('reservas.form2.modal2')
            @endforeach
        </tbody>
    </table>
@endsection

@section('alrrays')
    <a href="{{ route('Vuelos.create') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar Aerolinia</a>
    <table class="table table-success table-striped">
        <thead class="table-head">
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha de salida</th>
                <th>Fecha de llegada</th>
                <th>Duracion</th>
                <th>Precio</th>
                <th>Asientos disponibles</th>
                <th>Acciones</th>
            </tr> 
        </thead>
        
        <tbody>
            @foreach($Vuelos as $item)
                <tr>
                    <td class="v-align-middle">{{$item->origen}}</td>
                    <td class="v-align-middle">{{$item->destino}}</td>
                    <td class="v-align-middle">{{$item->fecha_salida}}</td>
                    <td class="v-align-middle">{{$item->fecha_llegada}}</td>
                    <td class="v-align-middle">{{$item->duracion}}</td>
                    <td class="v-align-middle">{{$item->precio}}</td>
                    <td class="v-align-middle">{{$item->asientos_disponibles}}</td>
                    <td class="v-align-middle">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('Vuelos.show',$item->id) }}" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('Vuelos.edit',$item->id) }}" class="btn btn-primary">Editar</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$item->id}}">
                                <button type="button" class="btn btn-danger">Eliminar</button> 
                            </a>
                        </form>
                    </td>
                </tr>
                @include('Vuelos.form4.model4')
            @endforeach
        </tbody>
    </table>
@endsection


@section('local')
    <a href="{{ route('aerolineas.create') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar Aerolinea</a>
    <table class="table table-success table-striped">
        <thead class="table-head">
            <tr>
                <th>Nombre</th>
                <th>Pais</th>
                <th>Disponibilidad</th>
                <th>Ano de fundacion</th>
                <th>Acciones</th>
            </tr> 
        </thead>
        
        <tbody>
            @foreach($aerolineas as $item)
                <tr>
                    <td class="v-align-middle">{{$item->Nombre}}</td>
                    <td class="v-align-middle">{{$item->Pais}}</td>
                    <td class="v-align-middle">{{$item->Disponibilidad}}</td>
                    <td class="v-align-middle">{{$item->Anio_fundacion}}</td>
                    <td class="v-align-middle">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('aerolineas.show',$item->id) }}" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('aerolineas.edit',$item->id) }}" class="btn btn-primary">Editar</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$item->id}}">
                                <button type="button" class="btn btn-danger">Eliminar</button> 
                            </a>
                        </form>
                    </td>
                </tr>
                @include('aerolineas.form3.mod')
            @endforeach
        </tbody>
    </table>
@endsection






