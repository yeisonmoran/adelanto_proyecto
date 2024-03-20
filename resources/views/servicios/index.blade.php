@extends('layouts.main')

@section('content')
    <a href="{{ route('servicios.create') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar</a>
    <table class="table table-dark table-sm">
        <thead class="table-head">
            <tr>
                <th>destino</th>
                <th>precio</th>
                <th>cupos</th>
                <th>duracion</th>
                <th>descripcion</th>
                <th>acciones</th>
            </tr> 
        </thead>
        
        <tbody>
            @foreach($servicios as $prod)
                <tr>
                    <td class="v-align-middle">{{$prod->destino}}</td>
                    <td class="v-align-middle">{{$prod->precio}}</td>
                    <td class="v-align-middle">{{$prod->cupos}}</td>
                    <td class="v-align-middle">{{$prod->duracion}}</td>
                    <td class="v-align-middle">{{$prod->descripcion}}</td>
                    <td class="v-align-middle">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('servicios.show',$prod->id) }}" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('servicios.edit',$prod->id) }}" class="btn btn-primary">Editar</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$prod->id}}">
                                <button type="button" class="btn btn-danger">Eliminar</button> 
                            </a>
                        </form>
                    </td>
                </tr>
                @include('servicios.form.modal')
            @endforeach
        </tbody>
    </table>
@endsection

