

<div class="container">

                <div class="card">
                    <div class="card-title">
                        <div class="col-md-12 col-md-offset-5">
                            <h3>{{ $Modo=='Crear' ? 'Agregar Cliente': 'Modificar cliente' }}</h3></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                <form action="{{ url('clientes') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }} 
                                        
                                                    <div class="row">   

                                                        <div class="from-group col-md-6">
        
                                                                <label for="RutCliente" class="control-label">{{ 'Rut Cliente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('RutCliente')?'is-invalid':'' }}" name="RutCliente" id="RutCliente" value="{{ isset($cliente->RutCliente)?$cliente->RutCliente:old('RutCliente') }}">
                                                                {!! $errors->first('RutCliente','<div class="invalid-feedback">:message</div>') !!}
        
                                                                <label for="NombreCliente" class="control-label">{{ 'Nombre Cliente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('NombreCliente')?'is-invalid':'' }}" name="NombreCliente" id="NombreCliente" value="{{ isset($cliente->NombreCliente)?$cliente->NombreCliente:old('NombreCliente') }}">
                                                                {!! $errors->first('NombreCliente','<div class="invalid-feedback">:message</div>') !!}
        
                                                        </div>
        
                                                        <div class="from-group col-md-6">
                                                            
                                                                <label for="ApellidoPaterno" class="control-label">{{ 'Apellido Paterno' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('ApellidoPaterno')?'is-invalid':'' }}" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($cliente->ApellidoPaterno)?$cliente->ApellidoPaterno:old('ApellidoPaterno') }}">
                                                                {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
                                                                
                                                                <label for="ApellidoMaterno" class="control-label">{{ 'Apellido Materno' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('ApellidoMaterno')?'is-invalid':'' }}" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($cliente->ApellidoMaterno)?$cliente->ApellidoMaterno:old('ApellidoMaterno') }}">
                                                                {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                        </div>
        
                                                        <div class="from-group col-md-6">
        
                                                                <label for="DireccionCliente" class="control-label">{{ 'Direccion Cliente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('DireccionCliente')?'is-invalid':'' }}" name="DireccionCliente" id="DireccionCliente" value="{{ isset($cliente->DireccionCliente)?$cliente->DireccionCliente:old('DireccionCliente') }}">
                                                                {!! $errors->first('DireccionCliente','<div class="invalid-feedback">:message</div>') !!}
        
                                                                <label for="DireccionComercial" class="control-label">{{ 'Direccion Comercial' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('DireccionComercial')?'is-invalid':'' }}" name="DireccionComercial" id="DireccionComercial" value="{{ isset($cliente->DireccionComercial)?$cliente->DireccionComercial:old('DireccionComercial') }}">
                                                                {!! $errors->first('DireccionComercial','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                        </div>
        
                                                        <div class="from-group col-md-6">
        
                                                                <label for="CiudadCliente" class="control-label">{{ 'Ciudad Cliente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('CiudadCliente')?'is-invalid':'' }}" name="CiudadCliente" id="CiudadCliente" value="{{ isset($cliente->CiudadCliente)?$cliente->CiudadCliente:old('CiudadCliente') }}">
                                                                {!! $errors->first('CiudadCliente','<div class="invalid-feedback">:message</div>') !!}
                                                                
                                                                <label for="CiudadComercial" class="control-label {{ $errors->has('CiudadComercial')?'is-invalid':'' }}">{{ 'Ciudad Comercial' }}</label>
                                                                <input type="text" class="form-control" name="CiudadComercial" id="CiudadComercial" value="{{ isset($cliente->CiudadComercial)?$cliente->CiudadComercial:old('CiudadComercial') }}">
                                                                {!! $errors->first('CiudadComercial','<div class="invalid-feedback">:message</div>') !!}
        
                                                        </div>
        
                                                        <div class="from-group col-md-6">
                                                            
                                                                <label for="FechaNacimientoCliente" class="control-label">{{ 'Fecha Nacimiento' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('FechaNacimientoCliente')?'is-invalid':'' }}" name="FechaNacimientoCliente" id="FechaNacimientoCliente" value="{{ isset($cliente->FechaNacimientoCliente)?$cliente->FechaNacimientoCliente:old('FechaNacimientoCliente') }}">
                                                                {!! $errors->first('FechaNacimientoCliente','<div class="invalid-feedback">:message</div>') !!}
        
                                                                <label for="TelefonoCliente" class="control-label">{{ 'Telefono Cliente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('TelefonoCliente')?'is-invalid':'' }}" name="TelefonoCliente" id="TelefonoCliente" value="{{ isset($cliente->TelefonoCliente)?$cliente->TelefonoCliente:old('TelefonoCliente') }}">
                                                                {!! $errors->first('TelefonoCliente','<div class="invalid-feedback">:message</div>') !!}
        
                                                        </div>
                                                        
                                                        <div class="from-group col-md-6">
                                                                <label for="CorreoCliente" class="control-label">{{ 'Correo' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('CorreoCliente')?'is-invalid':'' }}" name="CorreoCliente" id="CorreoCliente" value="{{ isset($cliente->CorreoCliente)?$cliente->CorreoCliente:old('CorreoCliente') }}">
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
                                                        
                                                        <div class="col-md-12 col-center"><br>
                                                            <div class="row">
                                                                <div class="col-md-6 col-center">
                                                                        <div class="from-group">
                                                                            <input type="submit" class="form-control btn btn-warning" value="{{ $Modo=='Crear' ? 'Agregar':'Modificar' }}">
                                                                        </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6 col-center">
                                                                        <div class="from-group">
                                                                            <a class="btn btn-primary btn-block" href="{{ url('clientes') }}">Regresar a Clientes</a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                
                                                
                                                        <!--<button type="button" href="{{ url('clientes') }}" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
                                                        <!--<button type="button" href="{{ url('clientes') }}" class="btn btn-primary">Siguiente</button>-->
                                                        
                                                <!--Fin modal-footer-->
                                                </form>

</div>
</div>
</div>
</div>
</div>
</div>
