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

<!--
<div class="card bg-dark text-white">
<img src="/img/fondeks/fondeke12.png" class="card-img" alt="">
    <div class="card-img-overlay">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text">Last updated 3 mins ago</p>
    </div>
  </div>

<div class="container">
    <h2>Apach - Tool for Hadoop</h2>
    <div class="card img-fluid" style="width:500px">
      <img class="card-img-top" src="/img/fondeks/fondeke12.png" alt="Card image" style="width:100%">
      <div class="card-img-overlay">
        <h4 class="card-title">Avro</h4>
        <p class="card-text">Tutorial for Apache Avro</p> 
        <a href="#" class="btn btn-info">Learn</a>
      </div>
    </div>
  </div>
  

<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="video/big_buck_bunny.webm" type="video/webm">
        <source src="img/fondeks/fondance.mp4" type="video/mp4">
        <source src="video/big_buck_bunny.ogv" type="video/ogg">
    </video>
</div>-->

  
  





<div class="container">
   
  
        


    
          <!--<h1 class="display-3">Video Header</h1>
          <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>-->

           
    <div class="card col-md-8 start-align" style="opacity: 0.85;">
          <div class="card-header bg-success">
            <h3>Datos del Arriendo</h3>
        </div>
          
                <div class="card-body">
    

                    <table class="table table-hover" style="opacity: 0.9;">
                        <thead class="bg-success">
                            <th class="col-md-2">
                                Tipo Cliente
                            </th>
                            <th class="col-md-8">
                                Rut Cliente / Nombre / Apellido Paterno / Materno
                            </th>
                        </thead>
                        <tbody class="bg-info">
                            @foreach($tipoclientes as $tipocliente)
                            <tr>
                                <td class="col-md-2" >
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-md" style="opacity: 0.9;">
                                            <b>
                                                {{ $tipocliente->NombreTipoCliente }}
                                            </b>
                                        </h4>
                                </td>
                                @endforeach
                                @foreach($datosclientes as $clientever)
                                <td class="col-md-8">
                                    <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-md" style="opacity: 1;">
                                        <b>
                                            {{ $clientever->RutCliente }} / {{ $clientever->NombreCliente }} /  {{ $clientever->ApellidoPaterno }} / {{ $clientever->ApellidoMaterno }}
                                        </b>
                                    </h4>
                                </td>
                            </tr>
                            @endforeach
                            <br>
                        </tbody>
                    </table>
                        <table class="table table-hover" style="opacity: 0.79;">
                            <thead class="bg-success">
                            </thead>
                            <tbody class="bg-info">
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-hover" style="opacity: 0.79;">
                            <thead class="bg-success">
                                <th class="col-md-6">
                                    Rut Conductor:
                                </th>
                                <th class="col-md-6">
                                    Nombre Conductor:
                                </th>
                            </thead>
                            <tbody class="bg-info">
                                @foreach($tipoconductor as $conductor)
                                <tr>
                                    <td class="col-md-6" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $conductor->RutConductor }}
                                                </b>
                                        </h4>
                                    </td>
                                    <td class="col-md-6" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $conductor->NombreConductor }}
                                                </b>
                                        </h4>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table table-hover" style="opacity: 0.79;">
                            <thead class="bg-success">
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
                            </thead>6
                            <tbody class="bg-info">
                                @foreach($datosvehiculos as $vehiculo)
                                <tr>
                                    <td class="col-md-2" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $vehiculo->Patente }}
                                                </b>
                                            </h4>
                                    </td>
                                    <td class="col-md-2" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $vehiculo->Marca }}
                                                </b>
                                            </h4>
                                    </td>
                                    <td class="col-md-2" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $vehiculo->Modelo }}
                                                </b>
                                            </h4>
                                    </td>
                                    <td class="col-md-2" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $vehiculo->Año }}
                                                </b>
                                            </h4>
                                    </td>
                                    <td class="col-md-2" >
                                        <h4 class="text-black"><button disabled class="btn btn-muted btn-light btn-lg" style="opacity: 1;">
                                                <b>
                                                    {{ $vehiculo->Color }}
                                                </b>
                                            </h4>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="col-md-6">
                                        <a class="btn btn-primary" href="{{ url('/conductores/create') }}"> Crear Conductor</a> 
                                    </td>
                                    <td class="col-md-6">
                                        <a href="{{ url('/kilometros/create/' . $vehiculo->Patente .'/'. $clientever->RutCliente.'/'. $tipocliente->NombreTipoCliente.'/'. $conductor->RutConductor) }}" class="btn btn-warning btn-block">Continuar el Arriendo</a>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
