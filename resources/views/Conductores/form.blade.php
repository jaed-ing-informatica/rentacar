


<div class="col-center">
    <div class="container-fluid text-left">
        <div class="row mx-auto p-3">
            <div class="col-md-12 col-md-offset-5">
                <div class="card">
                    <div class="card-title">
                        <div class="col-md-6 col-md-offset-5">
                            <h3>{{ $Modo=='Crear' ? 'Agregar Conductor': 'Modificar Conductor' }}</h3></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6 col-md-offset-5">

                            <form action="{{ url('conductores') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }} 
                                       
                                                <div class="row">   

                                                    <div class="from-group col-md-6">
    
                                                        <label for="RutConductor" class="control-label {{ $errors->has('RutConductor')?'is-invalid':'' }}">{{ 'Rut Conductor' }}</label>
                                                        <input type="text" class="form-control" name="RutConductor" id="RutConductor" value="{{ isset($cliente->RutConductor)?$cliente->RutConductor:old('RutConductor') }}">
                                                        {!! $errors->first('RutConductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                        <label for="NombreConductor" class="control-label {{ $errors->has('NombreConductor')?'is-invalid':'' }}">{{ 'Nombre Conductor' }}</label>
                                                        <input type="text" class="form-control" name="NombreConductor" id="NombreConductor" value="{{ isset($cliente->NombreConductor)?$cliente->NombreConductor:old('NombreConductor') }}">
                                                        {!! $errors->first('NombreConductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>

                                                    <div class="from-group col-md-6">
                                                        
                                                            <label for="LicenciaClase" class="control-label">{{ 'Licencia Clase' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('LicenciaClase')?'is-invalid':'' }}" name="LicenciaClase" id="LicenciaClase" value="{{ isset($conductor->LicenciaClase)?$conductor->LicenciaClase:old('LicenciaClase') }}">
                                                            {!! $errors->first('LicenciaClase','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                            <label for="LicenciaNumero" class="control-label {{ $errors->has('LicenciaNumero')?'is-invalid':'' }}">{{ 'Licencia Numero' }}</label>
                                                            <input type="text" class="form-control" name="LicenciaNumero" id="LicenciaNumero" value="{{ isset($conductor->LicenciaNumero)?$conductor->LicenciaNumero:old('LicenciaNumero') }}">
                                                            {!! $errors->first('LicenciaNumero','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                            <label for="LicenciaVencimiento" class="control-label {{ $errors->has('LicenciaVencimiento')?'is-invalid':'' }}">{{ 'Licencia Vencimiento' }}</label>
                                                            <input type="text" class="form-control" name="LicenciaVencimiento" id="LicenciaVencimiento" value="{{ isset($conductor->LicenciaVencimiento)?$conductor->LicenciaVencimiento:old('LicenciaVencimiento') }}">
                                                            {!! $errors->first('LicenciaVencimiento','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="LicenciaMunicipalidad" class="control-label {{ $errors->has('LicenciaMunicipalidad')?'is-invalid':'' }}">{{ 'Licencia Municipalidad' }}</label>
                                                            <input type="text" class="form-control" name="LicenciaMunicipalidad" id="LicenciaMunicipalidad" value="{{ isset($conductor->LicenciaMunicipalidad)?$conductor->LicenciaMunicipalidad:old('LicenciaMunicipalidad') }}">
                                                            {!! $errors->first('LicenciaMunicipalidad','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                        <label for="TelefonoConductor" class="control-label {{ $errors->has('TelefonoConductor')?'is-invalid':'' }}">{{ 'Telefono Conductor' }}</label>
                                                            
                                                            <input type="text" class="form-control" name="TelefonoConductor" id="TelefonoConductor" value="{{ isset($conductor->TelefonoConductor)?$condcutor->TelefonoConductor:old('TelefonoConductor') }}">
                                                            {!! $errors->first('TelefonoConductor','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                            <label for="DireccionConductor" class="control-label {{ $errors->has('DireccionConductor')?'is-invalid':'' }}">{{ 'Direccion Conductor' }}</label>
                                                            <input type="text" class="form-control" name="DireccionConductor" id="DireccionConductor" value="{{ isset($condcutor->DireccionConductor)?$conductor->DireccionConductor:old('DireccionConductor') }}">
                                                            {!! $errors->first('DireccionConductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
    
                                                
                                                    
                                                    <div class="from-group col-md-6">
                                                            
                                                            <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                                @if(isset($cliente->Foto))
                                                                    <br>
                                                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage'. '/' . $cliente->Foto) }}" alt="" width="300">
                                                                    </br>
                                                                @endif
                                                            <input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" >
                                                            {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="col-md-6 col-center">
                                    <div class="from-group">
                                    <input type="submit" class="form-control btn btn-warning" value="{{ $Modo=='Crear' ? 'Agregar':'Modificar' }}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-center">
                                    <div class="from-group">
                                    <a class="btn btn-primary" href="{{ url('conductores') }}">Regresar</a>
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
</div>