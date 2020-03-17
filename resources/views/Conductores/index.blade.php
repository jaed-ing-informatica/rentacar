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
    <a href="{{ url('conductores/create') }}" class="btn btn-secondary">Agregar Conductor</a>
    <br/>
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre - Licencia - Número - Vcto. - Munic.</th>
                    <th> Direccion - Teléfono - Rut </th> 
                    <th>Configuraciones</th>
                </tr>
            </thead>
            <tbody>
        
                @foreach($datosconductor as $conductor)
                <tr>
                
                    <td>{{ $loop->iteration }}</td>
                    <td>
                
                        <img src="{{ asset('storage'. '/' . $conductor->Foto) }}" alt="" class="img-thumbnail img-fluid" width="100">
                
                    </td>
                    <td>{{ $conductor->NombreConductor }} | {{ $conductor->LicenciaClase }} | {{ $conductor->LicenciaNumero }} | {{ $conductor->LicenciaVencimiento }} | {{ $conductor->LicenciaMunicipalidad }}</td>
                    <td>{{ $conductor->DireccionConductor }} | {{ $conductor->TelefonoConductor }} | {{ $conductor->RutConductor }}</td>
                    <td>
                        <!--<form action="{{ url('/conductores/'.$conductor->id) }}" method="post" style="display: inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('¿Desea Borrar?')" class="btn btn-danger">Borrar</button>
                        </form>-->
                        <!--<a href="{{ url('/conductores/'.$conductor->id.'/edit') }}" class="btn btn-warning">Editar</a>-->
                        <!--<a href="{{ url('/conductores') }}" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Entrega</a>-->
                        <a href="{{ url('/kilometros') }}" class="btn btn-success btn-block">Entrega</a>
                        <a href="{{ url('/recepcion') }}" class="btn btn-primary btn-block">Recepcion</a>
                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

{{ $datosconductor->links() }}


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
                                                                                <button id="my-dropdown" class="btn btn-primary dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">conductores Antiguo</button>
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
                                        <form action="{{ url('conductores') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }} 
                                        <div class="modal-body">                                  
                                                <div class="row">   

                                                    <div class="from-group col-md-6">
    
                                                        <label for="Rutconductor" class="control-label {{ $errors->has('Rutconductor')?'is-invalid':'' }}">{{ 'Rut conductor' }}</label>
                                                        <input type="text" class="form-control" name="Rutconductor" id="Rutconductor" value="{{ isset($conductor->Rutconductor)?$conductor->Rutconductor:old('Rutconductor') }}">
                                                        {!! $errors->first('Rutconductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                        <label for="Nombreconductor" class="control-label {{ $errors->has('Nombreconductor')?'is-invalid':'' }}">{{ 'Nombre conductor' }}</label>
                                                        <input type="text" class="form-control" name="Nombreconductor" id="Nombreconductor" value="{{ isset($conductor->Nombreconductor)?$conductor->Nombreconductor:old('Nombreconductor') }}">
                                                        {!! $errors->first('Nombreconductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
    
                                                    <div class="from-group col-md-6">
                                                        
                                                            <label for="ApellidoPaterno" class="control-label">{{ 'Apellido Paterno' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('ApellidoPaterno')?'is-invalid':'' }}" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($conductor->ApellidoPaterno)?$conductor->ApellidoPaterno:old('ApellidoPaterno') }}">
                                                            {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                            <label for="ApellidoMaterno" class="control-label {{ $errors->has('ApellidoMaterno')?'is-invalid':'' }}">{{ 'Apellido Materno' }}</label>
                                                            <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($conductor->ApellidoMaterno)?$conductor->ApellidoMaterno:old('ApellidoMaterno') }}">
                                                            {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                            <label for="Direccionconductor" class="control-label {{ $errors->has('Direccionconductor')?'is-invalid':'' }}">{{ 'Direccion conductor' }}</label>
                                                            <input type="text" class="form-control" name="Direccionconductor" id="Direccionconductor" value="{{ isset($conductor->Direccionconductor)?$conductor->Direccionconductor:old('Direccionconductor') }}">
                                                            {!! $errors->first('Direccionconductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="DireccionComercial" class="control-label {{ $errors->has('DireccionComercial')?'is-invalid':'' }}">{{ 'Direccion Comercial' }}</label>
                                                            <input type="text" class="form-control" name="DireccionComercial" id="DireccionComercial" value="{{ isset($conductor->DireccionComercial)?$conductor->DireccionComercial:old('DireccionComercial') }}">
                                                            {!! $errors->first('DireccionComercial','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                        <label for="Ciudadconductor" class="control-label {{ $errors->has('Ciudadconductor')?'is-invalid':'' }}">{{ 'Ciudad conductor' }}</label>
                                                            
                                                            <input type="text" class="form-control" name="Ciudadconductor" id="Ciudadconductor" value="{{ isset($conductor->Ciudadconductor)?$conductor->Ciudadconductor:old('Ciudadconductor') }}">
                                                            {!! $errors->first('Ciudadconductor','<div class="invalid-feedback">:message</div>') !!}
                                                            <label for="CiudadComercial" class="control-label {{ $errors->has('CiudadComercial')?'is-invalid':'' }}">{{ 'Ciudad Comercial' }}</label>
                                                            <input type="text" class="form-control" name="CiudadComercial" id="CiudadComercial" value="{{ isset($conductor->CiudadComercial)?$conductor->CiudadComercial:old('CiudadComercial') }}">
                                                            {!! $errors->first('CiudadComercial','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
    
                                                    <div class="from-group col-md-6">
                                                        
                                                            <label for="FechaNacimientoconductor" class="control-label {{ $errors->has('FechaNacimientoconductor')?'is-invalid':'' }}">{{ 'Fecha Nacimiento conductor' }}</label>
                                                            <input type="text" class="form-control" name="FechaNacimientoconductor" id="FechaNacimientoconductor" value="{{ isset($conductor->FechaNacimientoconductor)?$conductor->FechaNacimientoconductor:old('FechaNacimientoconductor') }}">
                                                            {!! $errors->first('FechaNacimientoconductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="Telefonoconductor" class="control-label {{ $errors->has('Telefonoconductor')?'is-invalid':'' }}">{{ 'Telefono conductor' }}</label>
                                                            <input type="text" class="form-control" name="Telefonoconductor" id="Telefonoconductor" value="{{ isset($conductor->Telefonoconductor)?$conductor->Telefonoconductor:old('Telefonoconductor') }}">
                                                            {!! $errors->first('Telefonoconductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
                                                    
                                                    <div class="from-group col-md-6">
                                                            <label for="Correoconductor" class="control-label {{ $errors->has('Correoconductor')?'is-invalid':'' }}">{{ 'Correo conductor' }}</label>
                                                            <input type="text" class="form-control" name="Correoconductor" id="Correoconductor" value="{{ isset($conductor->Correoconductor)?$conductor->Correoconductor:old('Correoconductor') }}">
                                                            {!! $errors->first('Correoconductor','<div class="invalid-feedback">:message</div>') !!}
                                                            <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                                @if(isset($conductor->Foto))
                                                                    <br>
                                                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage'. '/' . $conductor->Foto) }}" alt="" width="300">
                                                                    
                                                                @endif
                                                            <input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" >
                                                            {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                    <!--<button type="button" href="{{ url('conductores') }}" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
                                                    <!--<button type="button" href="{{ url('conductores') }}" class="btn btn-primary">Siguiente</button>-->
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
