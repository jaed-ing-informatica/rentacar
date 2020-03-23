
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
<div class="container">
    <div class="card col-md-12">
            <div class="card-body">
                
                    <table class="table table-light">
                            <thead>
                                <tr>
                                        <td class="col-md-4">
                                                <h3>Vehiculo seleccionado</h3>
                                        </td>
                                        <td class="col-md-4 text-center align-bottom">
                                                <a href="{{ url('clientes/create') }}" class="btn btn-md btn-primary">
                                                Crear Nuevo Cliente
                                                </a>
                                        </td>
                                        
                                </tr>

                            </thead>

                            
                                @foreach($datosvehiculos as $vehiculo)
                                <tr>                                
                                    <td class="col-md-4">
                                            Marca<h4 class="text-black"><button disabled class="btn btn-muted btn-light"><b>{{ $vehiculo->Marca }}</b></button></h4>
                                    </td>
                                    <td class="col-md-4">
                                           
                                            Modelo<h4 class="text-black"><button disabled class="btn btn-muted btn-light"><b>{{ $vehiculo->Modelo }}</b></button></h4>
                                    </td>
                                    <td class="col-md-4" >
                                        Patente
                                           <h4 class="text-black"><button disabled class="btn btn-muted btn-light"><b>{{ $vehiculo->Patente }}</b></button></h4>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                        <td class="col-md-3">
                                                <label for="Clientes" class="control-label" >{{ 'Nombre Cliente' }}</label>
                                                <select id="id_cliente" name="RutCliente" onchange="enviar_valores(this.value);" class="form-control btn btn-block btn-info" required>
                                                        <option>------Seleccionar Cliente------</option>
                                                        @foreach($datosclientes as $cliente)
                                                        <option value="{{ $cliente->RutCliente }}">{{ $cliente->NombreCliente }}</option>
                                                        @endforeach
                                                </select>
                                        </td>

                                    
                                        <td class="col-md-3">
                                                <label for="Clientes" class="control-label" >{{ 'Tipo Cliente' }}</label>
                                                <select id="id_cliente" name="NombreTipoCliente" onchange="enviar_valores(this.value);" class="form-control btn btn-block btn-info" required>
                                                <option>------Seleccionar Tipo Cliente------</option>
                                                @foreach($datosTiposClientes as $clientetipo)
                                                        <option value="{{ $clientetipo->NombreTipoCliente }}">{{ $clientetipo->NombreTipoCliente }}</option>
                                                @endforeach
                                                </select>
                                        </td>
                                        <td class="col-md-3">
                                                Continuar el Arriendo
                                                <a href="{{ url('/conductores/create/' . $vehiculo->Patente .'/'. $cliente->RutCliente.'/'.$clientetipo->NombreTipoCliente) }}" class="btn btn-warning btn-block">Seleccionar</a>
                                        </td>
                                </tr>
                    </table>
            </div>
    </div>
</div>
@endsection