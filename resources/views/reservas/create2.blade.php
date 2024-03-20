@extends('layouts.main')
@section('content')
<form method="POST" action="{{ route('reservas.store') }}" role="form"
enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 @include('reservas.form2.prt2')

</form>
@endsection