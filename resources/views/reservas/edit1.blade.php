@extends('layouts.main')
@section('tabla')

@if (count($errors)>0)

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
       <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>

@endif

   <form method="POST" action="{{ route('reservas.update',$reservas->id) }}"
      role="form" enctype="multipart/form-data" novalidate>
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('reservas.form2.prt2')
    </form>
@endsection