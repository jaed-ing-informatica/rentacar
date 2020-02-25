
@extends('layouts')

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
<form action="{{ url('/kilometros') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

{{ csrf_field() }}

@include('kilometros.form', ['Modo'=>'Crear'])

</form>

@endsection

