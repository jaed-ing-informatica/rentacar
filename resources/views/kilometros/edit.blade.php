@extends('layouts')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
        Session::get('Mensaje')
}}
@endif

<form action="{{ url('/kilometros/' . $kilometro->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('kilometros.form', ['Modo'=>'editar'])


</form>
</div>
@endsection
