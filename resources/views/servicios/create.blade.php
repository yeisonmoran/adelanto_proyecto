@extends('layouts.main')
@section('content')
<form method="POST" action="{{ route('servicios.store') }}" role="form"
enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 @include('servicios.form.prt')

</form>
@endsection