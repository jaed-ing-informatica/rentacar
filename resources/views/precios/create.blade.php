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
    <div class="card">
        <div class="card-header">
            <h3>Datos del Arriendo</h3>
        </div>
            <div class="card-body">

                <table class="table table-hover">
                    <thead>
                        <th class="col-md-12">
                            Tipo Cliente
                        </th>
                       
                    </thead>
                    
                    <tbody>
                        @foreach($tipoclientes as $tipocliente)
                        <tr>
                            <td class="col-md-12" >
                                
                                <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                        <b>
                                            {{ $tipocliente->NombreTipoCliente }}
                                        </b>
                                    </h4>
                            </td>
                        </tr>
                        @endforeach
                        <br>
                    </tbody>
                </table>

                    <table class="table table-hover">
                        <thead>
                            <th class="col-md-3">
                                Rut Cliente
                            </th>
                            <th class="col-md-3">
                                Nombre Cliente
                            </th>
                            <th class="col-md-3">
                                Apellido Paterno
                            </th>
                            <th class="col-md-3">
                               Apellido Materno
                            </th>
                        </thead>
                        
                        <tbody>
                            @foreach($datosclientes as $clientever)
                            <tr>
                                <td class="col-md-3" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                        <b>
                                            {{ $clientever->RutCliente }}
                                        </b>
                                    </h4>
                                </td>
                                <td class="col-md-3" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                        <b>
                                            {{ $clientever->NombreCliente }}
                                        </b>
                                    </h4>
                                </td>
                                <td class="col-md-3" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                        <b>
                                            {{ $clientever->ApellidoPaterno }}
                                        </b>
                                    </h4>
                                </td>
                                <td class="col-md-3" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                        <b>
                                            {{ $clientever->ApellidoMaterno }}
                                        </b>
                                    </h4>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>


                   



                    <table class="table table-hover">
                        <thead>
                            <th class="col-md-12">
                                Rut Conductor:
                            </th>
                            <th class="col-md-12">
                                Nombre Conductor:
                            </th>
                        </thead>
                        
                        <tbody>
                            @foreach($tipoconductor as $conductor)
                            <tr>
                                <td class="col-md-6" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $conductor->RutConductor }}
                                            </b>
                                        </h4>
                                </td>
                                <td class="col-md-6" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $conductor->NombreConductor }}
                                            </b>
                                        </h4>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <table class="table table-hover">
                        <thead>
                            <th class="col-md-2">
                                Patente Vehiculo
                            </th>
                            <th class="col-md-2">
                                Marca
                            </th>
                            <th class="col-md-2">
                                Modelo
                            </th>
                            <th class="col-md-2">
                                Año
                            </th>
                            <th class="col-md-2">
                                Color
                            </th>
                        </thead>
                        
                        <tbody>
                            @foreach($datosvehiculos as $vehiculo)
                            <tr>
                                <td class="col-md-2" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $vehiculo->Patente }}
                                            </b>
                                        </h4>
                                </td>
                                <td class="col-md-2" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $vehiculo->Marca }}
                                            </b>
                                        </h4>
                                </td>
                                <td class="col-md-2" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $vehiculo->Modelo }}
                                            </b>
                                        </h4>
                                </td>
                                <td class="col-md-2" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $vehiculo->Año }}
                                            </b>
                                        </h4>
                                </td>
                                <td class="col-md-2" >
                                    
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light">
                                            <b>
                                                {{ $vehiculo->Color }}
                                            </b>
                                        </h4>
                                </td>
                                <td class="col-md-2" >
                                   
                                </td>
                            </tr>

                            @endforeach
                           
                        </tbody>
                        
                    </table>
                    <table>
                        
                        <tbody>
                        <tr>
                            <td class="col-md-6">
                                <a class="btn" href=""> Continuar el Arriendo</a>
                                
                            </td>
                            <td class="col-md-6">
                                <a class="btn" href=""> Continuar el Arriendo</a>
                                
                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
    </div>
</div>
@endsection
