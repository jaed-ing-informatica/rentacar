@extends('layouts.admin')
@section('content')
<div class="container">
    @if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
    {{
            Session::get('Mensaje')
    }}
    </div>
    @endif
    


    <h2><div class="alert alert-success" role="alert">Vehículo : </h2>
    <a href="{{ url('clientes/create') }}" class="btn btn-primary btn-block">Crear Nuevo Cliente</a>
    <br/>
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre Completo - Rut</th>
                    <th> DireccionCliente - Ciudad - F. Nac. - Correo </th> 
                    <th>Teléfono</th>
                    
                    <th>Configuraciones</th>
                </tr>
            </thead>
            <tbody>
        
                @foreach($clientes as $cliente)
                <tr>
                
                    <td>{{ $loop->iteration }}</td>
                    <td>
                
                        <img src="{{ asset('storage'. '/' . $cliente->Foto) }}" alt="" class="img-thumbnail img-fluid" width="100">
                
                    </td>
                    <td>{{ $cliente->NombreCliente }}{{$cliente->ApellidoPaterno}}{{$cliente->ApellidoMaterno}} | {{ $cliente->RutCliente }}</td>
                    <td>{{ $cliente->DireccionCliente }} | {{ $cliente->CiudadCliente }} | {{ $cliente->FechaNacimientoCliente }} | {{ $cliente->CorreoCliente }}</td>
                    
                    <td>{{ $cliente->TelefonoCliente }}</td>

                    <td>
                        <!--<form action="{{ url('/clientes/'.$cliente->id) }}" method="post" style="display: inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('¿Desea Borrar?')" class="btn btn-danger">Borrar</button>
                        </form>-->
                        <!--<a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning">Editar</a>-->
                        <!--<a href="{{ url('/conductores') }}" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Entrega</a>-->
                        <a href="{{ url('/conductores') }}" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Seleccionar</a>
                        <!--<a href="{{ url('/recepcion') }}" class="btn btn-primary btn-block">Recepcion</a>-->
                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

{{ $clientes->links() }}


<!-- Modal -->
                            
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                                <div class="modal-dialog" role="document" >
                                        
                                    <div class="modal-content">
    
                                        <div class="modal-header">
                                            <form action="{{ url('/arriendos') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="col-sm-12">
                                                <div class="row">

                                                    <div class="col-sm-12">
                                                            <h5 class="modal-title left-panel" id="exampleModalLabel">Proceso de Arriendo</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
    
                                                    <div class="row col-sm-6">
                                                                    <div class="form-group col-sm-12">
                                                                        <div class="dropdown">
                                                                                <button id="my-dropdown" class="btn btn-primary dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes Antiguo</button>
                                                                                <div class="dropdown-menu" aria-labelledby="my-dropdown">
                                                                                    <a class="dropdown-item active" id="1" name="1" href="#">Javier</a>
                                                                                    <a class="dropdown-item active" id="2" name="2" href="#">Miguel</a>
                                                                                    <a class="dropdown-item active" id="3" name ="3" href="#">Diego</a>
                                                                                    <a class="dropdown-item active" id="4" name="4" href="#">Pablo</a>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                    
                                                    <div class="form-group col-sm-6">
                                                        <div class="form-group">    
                                                            <button type="submit" id="my-dropdown" class="btn btn-warning btn-block"  aria-haspopup="true" aria-expanded="false">Siguiente</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <form action="{{ url('clientes') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }} 
                                        <div class="modal-body">                                  
                                                <div class="row">   

                                                    <div class="from-group col-md-6">
    
                                                        <label for="RutCliente" class="control-label {{ $errors->has('RutCliente')?'is-invalid':'' }}">{{ 'Rut Cliente' }}</label>
                                                        <input type="text" class="form-control" name="RutCliente" id="RutCliente" value="{{ isset($cliente->RutCliente)?$cliente->RutCliente:old('RutCliente') }}">
                                                        {!! $errors->first('RutCliente','<div class="invalid-feedback">:message</div>') !!}
    
                                                        <label for="NombreCliente" class="control-label {{ $errors->has('NombreCliente')?'is-invalid':'' }}">{{ 'Nombre Cliente' }}</label>
                                                        <input type="text" class="form-control" name="NombreCliente" id="NombreCliente" value="{{ isset($cliente->NombreCliente)?$cliente->NombreCliente:old('NombreCliente') }}">
                                                        {!! $errors->first('NombreCliente','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
    
                                                    <div class="from-group col-md-6">
                                                        
                                                            <label for="ApellidoPaterno" class="control-label">{{ 'Apellido Paterno' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('ApellidoPaterno')?'is-invalid':'' }}" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($cliente->ApellidoPaterno)?$cliente->ApellidoPaterno:old('ApellidoPaterno') }}">
                                                            {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                            <label for="ApellidoMaterno" class="control-label {{ $errors->has('ApellidoMaterno')?'is-invalid':'' }}">{{ 'Apellido Materno' }}</label>
                                                            <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($cliente->ApellidoMaterno)?$cliente->ApellidoMaterno:old('ApellidoMaterno') }}">
                                                            {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                            <label for="DireccionCliente" class="control-label {{ $errors->has('DireccionCliente')?'is-invalid':'' }}">{{ 'Direccion Cliente' }}</label>
                                                            <input type="text" class="form-control" name="DireccionCliente" id="DireccionCliente" value="{{ isset($cliente->DireccionCliente)?$cliente->DireccionCliente:old('DireccionCliente') }}">
                                                            {!! $errors->first('DireccionCliente','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="DireccionComercial" class="control-label {{ $errors->has('DireccionComercial')?'is-invalid':'' }}">{{ 'Direccion Comercial' }}</label>
                                                            <input type="text" class="form-control" name="DireccionComercial" id="DireccionComercial" value="{{ isset($cliente->DireccionComercial)?$cliente->DireccionComercial:old('DireccionComercial') }}">
                                                            {!! $errors->first('DireccionComercial','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                        <label for="CiudadCliente" class="control-label {{ $errors->has('CiudadCliente')?'is-invalid':'' }}">{{ 'Ciudad Cliente' }}</label>
                                                            
                                                            <input type="text" class="form-control" name="CiudadCliente" id="CiudadCliente" value="{{ isset($cliente->CiudadCliente)?$cliente->CiudadCliente:old('CiudadCliente') }}">
                                                            {!! $errors->first('CiudadCliente','<div class="invalid-feedback">:message</div>') !!}
                                                            <label for="CiudadComercial" class="control-label {{ $errors->has('CiudadComercial')?'is-invalid':'' }}">{{ 'Ciudad Comercial' }}</label>
                                                            <input type="text" class="form-control" name="CiudadComercial" id="CiudadComercial" value="{{ isset($cliente->CiudadComercial)?$cliente->CiudadComercial:old('CiudadComercial') }}">
                                                            {!! $errors->first('CiudadComercial','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
    
                                                    <div class="from-group col-md-6">
                                                        
                                                            <label for="FechaNacimientoCliente" class="control-label {{ $errors->has('FechaNacimientoCliente')?'is-invalid':'' }}">{{ 'Fecha Nacimiento Cliente' }}</label>
                                                            <input type="text" class="form-control" name="FechaNacimientoCliente" id="FechaNacimientoCliente" value="{{ isset($cliente->FechaNacimientoCliente)?$cliente->FechaNacimientoCliente:old('FechaNacimientoCliente') }}">
                                                            {!! $errors->first('FechaNacimientoCliente','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="TelefonoCliente" class="control-label {{ $errors->has('TelefonoCliente')?'is-invalid':'' }}">{{ 'Telefono Cliente' }}</label>
                                                            <input type="text" class="form-control" name="TelefonoCliente" id="TelefonoCliente" value="{{ isset($cliente->TelefonoCliente)?$cliente->TelefonoCliente:old('TelefonoCliente') }}">
                                                            {!! $errors->first('TelefonoCliente','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
                                                    
                                                    <div class="from-group col-md-6">
                                                            <label for="CorreoCliente" class="control-label {{ $errors->has('CorreoCliente')?'is-invalid':'' }}">{{ 'Correo Cliente' }}</label>
                                                            <input type="text" class="form-control" name="CorreoCliente" id="CorreoCliente" value="{{ isset($cliente->CorreoCliente)?$cliente->CorreoCliente:old('CorreoCliente') }}">
                                                            {!! $errors->first('CorreoCliente','<div class="invalid-feedback">:message</div>') !!}
                                                            <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                                @if(isset($cliente->Foto))
                                                                    <br>
                                                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage'. '/' . $cliente->Foto) }}" alt="" width="300">
                                                                    </br>
                                                                @endif
                                                            <input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" >
                                                            {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                    <!--<button type="button" href="{{ url('clientes') }}" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
                                                    <!--<button type="button" href="{{ url('clientes') }}" class="btn btn-primary">Siguiente</button>-->
                                                    <div class="from-group">
                                                        <button type="submit" class="btn btn-warning" value="{{ 'Siguiente' }}" data-toggle="modal" data-target="#exampleModal">
                                                    </div>
                                            </div><!--Fin modal-footer-->
                                            </form>
                            </div><!--fin moral content--> 
                        </div> <!--Fin moral dialog-->
                    </div><!--Fin moral fade-->
</div>

@endsection
