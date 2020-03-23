
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
                            @foreach($datosclientes as $clientever)
                            <tr>
                                    <td class="col-md-4" >
                                        Cliente
                                           <h4 class="text-black"><button disabled class="btn btn-muted btn-light"><b>{{ $clientever->NombreCliente }}</b></button></h4>
                                    </td>
                                    <td class="col-md-4" >
                                        Tipo de Cliente
                                           <h4 class="text-black"><button disabled class="btn btn-muted btn-light"><b>{{ $clientever->RutCliente }}</b></button></h4>
                                    </td>
                            </tr>
                            @endforeach
                            @foreach($tipoclientes as $tipocliente)
                            <tr>
                                    <td class="col-md-4" >
                                        Tipo Cliente
                                           <h4 class="text-black"><button disabled class="btn btn-muted btn-light"><b>{{ $tipocliente->NombreTipoCliente }}</b></button></h4>
                                    </td>
                                   
                            </tr>
                            @endforeach
                            
                            <tr>
                                    <td class="col-md-3">
                                            <label for="Clientes" class="control-label" >{{ 'Nombre Conductor' }}</label>
                                            <select id="id_cliente" name="RutCliente" onchange="enviar_valores(this.value);" class="form-control btn btn-block btn-info" required>
                                                <option>------Seleccionar Conductor------</option>
                                                @foreach($datosconductores as $conductor)
                                                    <option value="{{ $conductor->RutConductor }}">{{ $conductor->NombreConductor }}</option>
                                                @endforeach
                                            </select>
                                    </td>
                                    <td class="col-md-3">
                                        <a href="{{ url('clientes/create') }}" class="btn btn-block btn-primary">
                                                        Crear Nuevo Cliente
                                        </a>
                                    </td>
                                   <!-- <td class="col-md-3">
                                        <label for="Clientes" class="control-label" >{{ 'Tipo Cliente' }}</label>
                                        <select id="id_cliente" name="RutCliente" onchange="enviar_valores(this.value);" class="form-control btn btn-block btn-info" required>
                                            <option>------Seleccionar Tipo Cliente------</option>
                                            @foreach($tipoclientes as $clientetipo)
                                                <option value="{{ $clientetipo->NombreTipoCliente }}">{{ $clientetipo->NombreTipoCliente }}</option>
                                            @endforeach
                                        </select>
                                </td>-->
                                    <td class="col-md-3">
                                        Continuar el Arriendo
                                        <a href="{{ url('/precios/create/' . $vehiculo->Patente .'/'. $clientever->RutCliente.'/'. $clientetipo->NombreTipoCliente.'/'. $conductor->RutConductor) }}" class="btn btn-warning btn-block">Seleccionar</a>
                                    </td>
                            </tr>
                    </table>
            </div>
    </div>
</div>
@endsection