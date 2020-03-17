


<div class="col-center">
    <div class="container-fluid text-left">
        <div class="row mx-auto p-3">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-title">
                        <div class="col-md-12">
                            <h3>{{ $Modo=='Crear' ? 'Agregar Conductor': 'Modificar Conductor' }}</h3></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-12 ">

                            <form action="{{ url('conductores') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }} 
                                       
                                                <div class="row">   

                                                    <div class="from-group col-md-6">
    
                                                    <label for="RutConductor" class="control-label">{{ 'Rut Conductor' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('RutConductor')?'is-invalid':'' }}" name="RutConductor" id="RutConductor" value="{{ isset($conductor->RutConductor)?$conductor->RutConductor:old('RutConductor') }}">
                                                            {!! $errors->first('RutConductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="NombreConductor" class="control-label">{{ 'Nombre Conductor' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('NombreConductor')?'is-invalid':'' }}" name="NombreConductor" id="NombreConductor" value="{{ isset($conductor->NombreConductor)?$conductor->NombreConductor:old('NombreConductor') }}">
                                                            {!! $errors->first('NombreConductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>

                                                    <div class="from-group col-md-6">
                                                        
                                                            <label for="LicenciaClase" class="control-label">{{ 'Licencia Clase' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('LicenciaClase')?'is-invalid':'' }}" name="LicenciaClase" id="LicenciaClase" value="{{ isset($conductor->LicenciaClase)?$conductor->LicenciaClase:old('LicenciaClase') }}">
                                                            {!! $errors->first('LicenciaClase','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                            <label for="LicenciaNumero" class="control-label">{{ 'Licencia Numero' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('LicenciaNumero')?'is-invalid':'' }}" name="LicenciaNumero" id="LicenciaNumero" value="{{ isset($conductor->LicenciaNumero)?$conductor->LicenciaNumero:old('LicenciaNumero') }}">
                                                            {!! $errors->first('LicenciaNumero','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                            <label for="LicenciaVencimiento" class="control-label">{{ 'Licencia Vencimiento' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('LicenciaVencimiento')?'is-invalid':'' }}" name="LicenciaVencimiento" id="LicenciaVencimiento" value="{{ isset($conductor->LicenciaVencimiento)?$conductor->LicenciaVencimiento:old('LicenciaVencimiento') }}">
                                                            {!! $errors->first('LicenciaVencimiento','<div class="invalid-feedback">:message</div>') !!}
    
                                                            <label for="LicenciaMunicipalidad" class="control-label">{{ 'Licencia Municipalidad' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('LicenciaMunicipalidad')?'is-invalid':'' }}" name="LicenciaMunicipalidad" id="LicenciaMunicipalidad" value="{{ isset($conductor->LicenciaMunicipalidad)?$conductor->LicenciaMunicipalidad:old('LicenciaMunicipalidad') }}">
                                                            {!! $errors->first('LicenciaMunicipalidad','<div class="invalid-feedback">:message</div>') !!}
                                                        
                                                    </div>
    
                                                    <div class="from-group col-md-6">
    
                                                            <label for="TelefonoConductor" class="control-label">{{ 'Telefono Conductor' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('TelefonoConductor')?'is-invalid':'' }}" name="TelefonoConductor" id="TelefonoConductor" value="{{ isset($conductor->TelefonoConductor)?$conductor->TelefonoConductor:old('TelefonoConductor') }}">
                                                            {!! $errors->first('TelefonoConductor','<div class="invalid-feedback">:message</div>') !!}
                                                            
                                                            <label for="DireccionConductor" class="control-label">{{ 'Direccion Conductor' }}</label>
                                                            <input type="text" class="form-control {{ $errors->has('DireccionConductor')?'is-invalid':'' }}" name="DireccionConductor" id="DireccionConductor" value="{{ isset($conductor->DireccionConductor)?$conductor->DireccionConductor:old('DireccionConductor') }}">
                                                            {!! $errors->first('DireccionConductor','<div class="invalid-feedback">:message</div>') !!}
    
                                                    </div>
    
                                                
                                                    
                                                    <div class="from-group col-md-12">
                                                            
                                                            <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                                @if(isset($cliente->Foto))
                                                                    <br>
                                                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage'. '/' . $cliente->Foto) }}" alt="" width="300">
                                                                    
                                                                @endif
                                                            <input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" >
                                                            {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div><br>
                                                <div class="col-md-12 col-center">
                                                    <div class="row">

                                                    <div class="col-md-6 col-center">
                                                        <div class="from-group">
                                                        <input type="submit" class="form-control btn btn-warning btn-block" value="{{ $Modo=='Crear' ? 'Agregar':'Modificar' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-center">
                                                        <div class="from-group">
                                                        <a class="btn btn-primary btn-block" href="{{ url('conductores') }}">Regresar a Conductores</a>
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
</div>