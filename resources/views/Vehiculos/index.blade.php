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

    
    
    
        
    
    
    <br/>
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Propietario - Rut</th>
                    <th>Tipo - Marca - Modelo - Patente</th>
                    <th>Año - Color - Num_chasis</th>    
                    <th>Combustible - Disponibilidad</th>
                    <th>Estado</th>
                    <th>Configuraciones</th>
                </tr>
            </thead>
            <tbody>
        
                @foreach($vehiculos as $vehiculo)
                <tr>
                
                    <td>{{ $loop->iteration }}</td>
                    <td>
                
                        <img src="{{ asset('storage'. '/' . $vehiculo->Foto) }}" alt="" class="img-thumbnail img-fluid" width="100">
                
                    </td>
                    <td>{{ $vehiculo->Propietario }} | {{ $vehiculo->Rut }}</td>
                    <td>{{ $vehiculo->Tipo }} | {{ $vehiculo->Marca }} | {{ $vehiculo->Modelo }} | {{ $vehiculo->Patente }}</td>
                    <td>{{ $vehiculo->Año }} | {{ $vehiculo->Color }} | {{ $vehiculo->NumeroChasis }}</td>
                    <td>{{ $vehiculo->Combustible }}</td>
                    <td><button class="btn btn-success">{{ $vehiculo->Estado }}</input></td>
                    <td>
                        
                     <!--<form action="{{ url('/vehiculos/'.$vehiculo->id) }}" method="post" style="display: inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                           <button type="submit" onclick="return confirm('¿Desea Borrar?')" class="btn btn-danger">Borrar</button>
                    </form>-->
                        <!--<a href="{{ url('/vehiculos/'.$vehiculo->id.'/edit') }}" class="btn btn-warning">Editar</a>-->
                        
                        
                        <a href="{{ url('/clientes/create/' . $vehiculo->id) }}" class="btn btn-warning btn-block">Seleccionar</a>
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Seleccionar</button>
                        
                        
                        
                        <!--<a href="{{ url('/clientes/create') }}" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Entrega</a>-->
                        <a href="{{ url('/recepcionVehiculo') }}" class="btn btn-info btn-block">Recepción</a>
                    </td>

                </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Seleccione tipo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <select class="custom-select">
                                            <option selected>Tipo de empresa</option>
                                            <option id="empresa" name="empresa" value="1">Empresa</option>
                                            <option id="empresaReemplazo" name="empresaReemplazo" value="2">Empresa Reemplazo</option>
                                            <option id="persona" name="persona" value="3">Persona Natural</option>
                                        </select>                                                                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <a href="{{ url('/clientes/create/' . $vehiculo->id) }}" class="btn btn-warning btn-block">Continuar</a>
                                        </div>
                                    </div>
                        </div>
                    </div>

                    <!-- Modal 
                    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="example2ModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="example2ModalLongTitle">Seleccione tipo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <select class="custom-select">
                                   
                                    </select>                                                                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">Continuar</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
            @endforeach

            </tbody>

        </table>

{{ $vehiculos->links() }}


<!-- Modal -->
            <!--                
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                                <div class="modal-dialog" role="document" >
                                        
                                    <div class="modal-content">
    
                                        <div class="modal-header">
                                            <form action="{{ url('/clientes') }}" class="form-horizontal" method="index" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="col-sm-12">
                                                <div class="row">

                                                    <div class="col-sm-12">
                                                            <h5 class="modal-title left-panel" id="exampleModalLabel">Registro Clientes</h5>
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
                                                   <button type="button" href="{{ url('clientes') }}" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                   <button type="button" href="{{ url('clientes') }}" class="btn btn-primary">Siguiente</button>
                                                    <div class="col-md-6 col-center">
                                                            <div class="from-group">
                                                                <input type="submit" class="form-control btn btn-warning" value="Agregar">
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6 col-center">
                                                            <div class="from-group">
                                                                <a class="btn btn-primary" href="{{ url('vehiculos') }}">Regresar</a>
                                                            </div>
                                                    </div>
                                            </div>Fin modal-footer
                                            </form>-->
                            </div><!--fin modal content--> 
                        </div> <!--Fin modal dialog-->
                    </div><!--Fin modal fade-->
</div>

@endsection
