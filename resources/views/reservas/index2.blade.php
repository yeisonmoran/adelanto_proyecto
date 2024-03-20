@extends('layouts.main')

@section('content')
    <a href="{{ route('reservas.create2') }}" class="btn btn-info mt-4 ml-3 mb-4">Agregar</a>
    
    <table class="table table-success table-striped">
        
        <tr>
            <th>id_usario</th>
            <th>id_paquete</th>
            <th>fecha de reserva</th>
            <th>numero de personas</th>
            <th>estado</th>
            <th>acciones</th>
        </tr> 
        
        
        <tbody>
            @foreach($reservas as $prod)
                <tr>
                    <td class="v-align-middle">{{$prod->usuario_id}}</td>
                    <td class="v-align-middle">{{$prod->paquete_id}}</td>
                    <td class="v-align-middle">{{$prod->fecha_reserva}}</td>
                    <td class="v-align-middle">{{$prod->num_personas}}</td>
                    <td class="v-align-middle">{{$prod->estado}}</td>
                    <td class="v-align-middle">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('reservas.show',$prod->id) }}" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('reservas.edit',$prod->id) }}" class="btn btn-primary">Editar</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$prod->id}}">
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