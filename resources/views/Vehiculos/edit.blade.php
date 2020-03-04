@extends('layouts.admin')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
        Session::get('Mensaje')
}}
@endif

<form action="{{ url('/vehiculos/' . $vehiculo->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('vehiculos.form', ['Modo'=>'editar'])


</form>
</div>
@endsection
