
@extends('layouts.admin')

@section('content')

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

        @endforeach
        </ul>
</div>
@endif

@if(Session::has('Mensaje')){{
        Session::get('Mensaje')
}}
@endif
<form action="{{ url('/facturas') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">

{{ csrf_field() }}

@include('facturas.form', ['Modo'=>'Crear'])

</form>

@endsection

