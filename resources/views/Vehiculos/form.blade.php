


<div class="col-center">
    <div class="container-fluid text-left">
        <div class="row mx-auto p-3">
            <div class="col-md-12 col-md-offset-5">
                <div class="card">
                    <div class="card-title">
                        <div class="col-md-6 col-md-offset-5">
                            <h3>{{ $Modo=='Crear' ? 'Agregar vehiculo': 'Modificar vehiculo' }}</h3></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-6 col-md-offset-5">


                                        <div class="from-group">
                                                                <label for="Rut" class="control-label">{{ 'Rut Propietario' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Rut')?'is-invalid':'' }}" name="Rut" id="Rut" value="{{ isset($cliente->Rut)?$cliente->Rut:old('Rut') }}">
                                                                {!! $errors->first('Rut','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                                                <label for="Propietario" class="control-label">{{ 'Nombre Propietario' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Propietario')?'is-invalid':'' }}" name="Propietario" id="Propietario" value="{{ isset($cliente->Propietario)?$cliente->Propietario:old('Propietario') }}">
                                                                {!! $errors->first('Propietario','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                            
                                                                <label for="TipoVehiculo" class="control-label">{{ 'Tipo Vehiculo' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('TipoVehiculo')?'is-invalid':'' }}" name="TipoVehiculo" id="TipoVehiculo" value="{{ isset($cliente->TipoVehiculo)?$cliente->TipoVehiculo:old('TipoVehiculo') }}">
                                                                {!! $errors->first('TipoVehiculo','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                                                <label for="Marca" class="control-label">{{ 'Marca' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Marca')?'is-invalid':'' }}" name="Marca" id="Marca" value="{{ isset($cliente->Marca)?$cliente->Marca:old('Marca') }}">
                                                                {!! $errors->first('Marca','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                                                <label for="Modelo" class="control-label">{{ 'Modelo' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Modelo')?'is-invalid':'' }}" name="Modelo" id="Modelo" value="{{ isset($cliente->Modelo)?$cliente->Modelo:old('Modelo') }}">
                                                                {!! $errors->first('Modelo','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                                                <label for="Patente" class="control-label">{{ 'Patente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Patente')?'is-invalid':'' }}" name="Patente" id="Patente" value="{{ isset($cliente->Patente)?$cliente->Patente:old('Patente') }}">
                                                                {!! $errors->first('Patente','<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-5">
                                            <div class="from-group">
                                                                <label for="Año" class="control-label">{{ 'Año' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Año')?'is-invalid':'' }}" name="Año" id="Año" value="{{ isset($cliente->Año)?$cliente->Año:old('Año') }}">
                                                                {!! $errors->first('Año','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="from-group">
                                                                <label for="Color" class="control-label">{{ 'Color' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Color')?'is-invalid':'' }}" name="Color" id="Color" value="{{ isset($cliente->Color)?$cliente->Color:old('Color') }}">
                                                                {!! $errors->first('Color','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="from-group">
                                                                <label for="NumeroChasis" class="control-label">{{ 'Numero Chasis' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('NumeroChasis')?'is-invalid':'' }}" name="NumeroChasis" id="NumeroChasis" value="{{ isset($cliente->NumeroChasis)?$cliente->NumeroChasis:old('NumeroChasis') }}">
                                                                {!! $errors->first('NumeroChasis','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="from-group">
                                                                <label for="Combustible" class="control-label">{{ 'Combustible' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Combustible')?'is-invalid':'' }}" name="Combustible" id="Combustible" value="{{ isset($cliente->Combustible)?$cliente->Combustible:old('Combustible') }}">
                                                                {!! $errors->first('Combustible','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <input id="Estado" name="Estado" type="hidden" value="Disponible">

                                            <div class="from-group">
                                                <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                @if(isset($vehiculo->Foto))
                                                <br>
                                                <img class="img-thumbnail img-fluid" src="{{ asset('storage'. '/' . $vehiculo->Foto) }}" alt="" width="300">
                                                </br>
                                                @endif
                                                <input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" >
                                                {!! $errors->first('Foto','</div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="col-md-6 col-center">
                                                <div class="from-group">
                                                    <input type="submit" class="form-control btn btn-warning" value="{{ $Modo=='Crear' ? 'Agregar':'Modificar' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-center">
                                                <div class="from-group">
                                                    <a class="btn btn-primary btn-block" href="{{ url('vehiculos') }}">Regresar a Vehiculos</a>
                                                </div>
                                            </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>