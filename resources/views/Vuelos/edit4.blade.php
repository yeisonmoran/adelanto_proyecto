@extends('layouts.main')
@section('alrrays')

@if (count($errors)>0)

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
       <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>

@endif

   <form method="POST" action="{{ route('Vuelos.update',$Vuelos->id) }}"
      role="form" enctype="multipart/form-data" novalidate>
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('Vuelos.form4.prt4')
    </form>
@endsection
