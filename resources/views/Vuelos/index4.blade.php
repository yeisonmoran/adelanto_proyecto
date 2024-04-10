@extends('layouts.main')
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

