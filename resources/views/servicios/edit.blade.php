@extends('layouts.main')
@section('content')
<form method="POST" action="{{ route('servicios.update',$servicios->id) }}"
 role="form" enctype="multipart/form-data">
 <input type="hidden" name="_method" value="PUT">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 @include('servicios.form.prt')
</form>
@endsection