@extends('layouts.main')
  @section('content')

@if (count($errors)>0)

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
       <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>

@endif


    <form method="POST" action="{{ route('paquetes.store') }}" role="form"
     enctype="multipart/form-data" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('paquetes.form.prt')
    </form>
  @endsection


