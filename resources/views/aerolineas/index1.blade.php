@extends('layouts.main')
@section('local')
    <a href="{{ route('aerolineas.create') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar Aerolinea</a>
    <table class="table table-success table-striped">
        <thead class="table-head">
            <tr>
                <th>Nombre</th>
                <th>Pais</th>
                <th>Disponibilidad</th>
                <th>Año de fundacion</th>
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


