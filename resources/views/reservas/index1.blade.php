@extends('layouts.main')
@section('tabla')
    <a href="{{ route('reservas.create') }}" class="btn btn-danger mt-4 ml-3 mb-4">Agregar reserva</a>
    
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