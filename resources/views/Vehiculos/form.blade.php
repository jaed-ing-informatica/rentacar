


<div class="col-center">
    <div class="container-fluid text-left">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">
                        <div class="col-md-12">
                            <h3>{{ $Modo=='Crear' ? 'Agregar vehiculo': 'Modificar vehiculo' }}</h3></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="from-group">
                                                                <label for="Rut" class="control-label">{{ 'Rut Propietario' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('RutPropietario')?'is-invalid':'' }}" name="RutPropietario" id="RutPropietario" value="{{ isset($vehiculo->RutPropietario)?$vehiculo->RutPropietario:old('RutPropietario') }}">
                                                                {!! $errors->first('RutPropietario','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                                                <label for="NombrePropietario" class="control-label">{{ 'Nombre Propietario' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('NombrePropietario')?'is-invalid':'' }}" name="NombrePropietario" id="NombrePropietario" value="{{ isset($vehiculo->NombrePropietario)?$vehiculo->NombrePropietario:old('NombrePropietario') }}">
                                                                {!! $errors->first('NombrePropietario','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                                                <label for="DireccionPropietario" class="control-label">{{ 'Direccion Propietario' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('DireccionPropietario')?'is-invalid':'' }}" name="DireccionPropietario" id="DireccionPropietario" value="{{ isset($vehiculo->DireccionPropietario)?$vehiculo->DireccionPropietario:old('DireccionPropietario') }}">
                                                                {!! $errors->first('DireccionPropietario','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                        <div class="from-group">
                                            
                                                                <label for="Tipos" class="control-label">{{ 'Tipo Vehiculo' }}</label>
                                                                <!--<input type="text" class="form-control {{ $errors->has('TipoVehiculo')?'is-invalid':'' }}" name="TipoVehiculo" id="TipoVehiculo" value="{{ isset($vehiculo->TipoVehiculo)?$vehiculo->TipoVehiculo:old('TipoVehiculo') }}">
                                                                {!! $errors->first('TipoVehiculo','<div class="invalid-feedback">:message</div>') !!}-->



                                                                <select id="id_tipo" name="id_tipo" class="form-control">
                                                                    <option>------Seleccionar Tipo Vehículo------</option>
                                                                    @foreach($datostipos as $tipo)
                                                                        <option value="{{ $tipo['id_tipo'] }}">{{ $tipo['Tipo'] }}</option>
                                                                    @endforeach
                                                                </select>
                                        </div>




                                        <div class="from-group">
                                            
                                                                <label for="Descripcion" class="control-label">{{ 'Descripcion' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Descripcion')?'is-invalid':'' }}" name="Descripcion" id="Descripcion" value="{{ isset($vehiculo->Descripcion)?$vehiculo->Descripcion:old('Descripcion') }}">
                                                                {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                            
                                                                <label for="NumeroPuertas" class="control-label">{{ 'Numero Puertas' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('NumeroPuertas')?'is-invalid':'' }}" name="NumeroPuertas" id="NumeroPuertas" value="{{ isset($vehiculo->NumeroPuertas)?$vehiculo->NumeroPuertas:old('NumeroPuertas') }}">
                                                                {!! $errors->first('NumeroPuertas','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                            
                                                                <label for="NumeroAsientos" class="control-label">{{ 'Numero Asientos' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('NumeroAsientos')?'is-invalid':'' }}" name="NumeroAsientos" id="NumeroAsientos" value="{{ isset($vehiculo->NumeroAsientos)?$vehiculo->NumeroAsientos:old('NumeroAsientos') }}">
                                                                {!! $errors->first('NumeroAsientos','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                            
                                                                <label for="CapacidadMaleta" class="control-label">{{ 'Capacidad Maleta' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('CapacidadMaleta')?'is-invalid':'' }}" name="CapacidadMaleta" id="CapacidadMaleta" value="{{ isset($vehiculo->CapacidadMaleta)?$vehiculo->CapacidadMaleta:old('CapacidadMaleta') }}">
                                                                {!! $errors->first('CapacidadMaleta','<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="from-group">
                                                               <!-- <label for="Marca" class="control-label">{{ 'Marca' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Marca')?'is-invalid':'' }}" name="Marca" id="Marca" value="{{ isset($vehiculo->Marca)?$vehiculo->Marca:old('Marca') }}">
                                                                {!! $errors->first('Marca','<div class="invalid-feedback">:message</div>') !!}-->

                                                                <label for="Marca" class="control-label">{{ 'Marca' }}</label>
                                                                <select id="id_marca" name="id_marca" class="form-control">
                                                                    <option>------Seleccionar Marca------</option>
                                                                    @foreach($datosmarcas as $marca)
                                                                    <option value="{{ $marca['id_marca'] }}">{{ $marca['NombreMarca'] }}</option>
                                                                    @endforeach
                                                                </select>
                                        </div>

                                        <div class="from-group">
                                                               <!-- <label for="Marca" class="control-label">{{ 'Marca' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Marca')?'is-invalid':'' }}" name="Marca" id="Marca" value="{{ isset($vehiculo->Marca)?$vehiculo->Marca:old('Marca') }}">
                                                                {!! $errors->first('Marca','<div class="invalid-feedback">:message</div>') !!}-->

                                                                <label for="Modelo" class="control-label">{{ 'Modelo' }}</label>
                                                                <select id="id_modelo" name="id_modelo" class="form-control">
                                                                    <option>------Seleccionar Marca------</option>
                                                                    @foreach($datosmodelos as $modelo)
                                                                    <option value="{{ $marca['id_modelo'] }}">{{ $marca['NombreModelo'] }}</option>
                                                                    @endforeach
                                                                </select>
                                        </div>

                                        <div class="from-group">
                                                               <!-- <label for="Modelo" class="control-label">{{ 'Modelo' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Modelo')?'is-invalid':'' }}" name="Modelo" id="Modelo" value="{{ isset($vehiculo->Modelo)?$vehiculo->Modelo:old('Modelo') }}">
                                                                {!! $errors->first('Modelo','<div class="invalid-feedback">:message</div>') !!}-->
                                        </div>


                                        </div>
                                    <div class="col-md-6">
                                        <div class="from-group">
                                            
                                                                <label for="PrecioDiarioRenta" class="control-label">{{ 'Precio Diario Renta' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('PrecioDiarioRenta')?'is-invalid':'' }}" name="PrecioDiarioRenta" id="PrecioDiarioRenta" value="{{ isset($vehiculo->PrecioDiarioRenta)?$vehiculo->PrecioDiarioRenta:old('PrecioDiarioRenta') }}">
                                                                {!! $errors->first('PrecioDiarioRenta','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                            
                                                                <label for="PrecioMensualRenta" class="control-label">{{ 'Precio Mensual Renta' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('PrecioMensualRenta')?'is-invalid':'' }}" name="PrecioMensualRenta" id="PrecioMensualRenta" value="{{ isset($vehiculo->PrecioMensualRenta)?$vehiculo->PrecioMensualRenta:old('PrecioMensualRenta') }}">
                                                                {!! $errors->first('PrecioMensualRenta','<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="from-group">
                                            
                                            <label for="PrecioSemanalRenta" class="control-label">{{ 'Precio Semanal Renta' }}</label>
                                            <input type="text" class="form-control {{ $errors->has('PrecioSemanalRenta')?'is-invalid':'' }}" name="PrecioSemanalRenta" id="PrecioSemanalRenta" value="{{ isset($vehiculo->PrecioSemanalRenta)?$vehiculo->PrecioSemanalRenta:old('PrecioSemanalRenta') }}">
                                            {!! $errors->first('PrecioSemanalRenta','<div class="invalid-feedback">:message</div>') !!}
                    </div>

                    <div class="from-group">
                                            
                                            <label for="PrecioQuincenalRenta" class="control-label">{{ 'Precio Quincenal Renta' }}</label>
                                            <input type="text" class="form-control {{ $errors->has('PrecioQuincenalRenta')?'is-invalid':'' }}" name="PrecioQuincenalRenta" id="PrecioQuincenalRenta" value="{{ isset($vehiculo->PrecioQuincenalRenta)?$vehiculo->PrecioQuincenalRenta:old('PrecioQuincenalRenta') }}">
                                            {!! $errors->first('PrecioQuincenalRenta','<div class="invalid-feedback">:message</div>') !!}
                    </div>


                   


                                       
                                        <div class="from-group">
                                                                <label for="Patente" class="control-label">{{ 'Patente' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Patente')?'is-invalid':'' }}" name="Patente" id="Patente" value="{{ isset($vehiculo->Patente)?$vehiculo->Patente:old('Patente') }}">
                                                                {!! $errors->first('Patente','<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                   
                                            <div class="from-group">
                                                                <label for="Año" class="control-label">{{ 'Año' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Año')?'is-invalid':'' }}" name="Año" id="Año" value="{{ isset($vehiculo->Año)?$vehiculo->Año:old('Año') }}">
                                                                {!! $errors->first('Año','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="from-group">
                                                                <label for="Color" class="control-label">{{ 'Color' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Color')?'is-invalid':'' }}" name="Color" id="Color" value="{{ isset($vehiculo->Color)?$vehiculo->Color:old('Color') }}">
                                                                {!! $errors->first('Color','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="from-group">
                                                                <label for="NumeroChasis" class="control-label">{{ 'Numero Chasis' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('NumeroChasis')?'is-invalid':'' }}" name="NumeroChasis" id="NumeroChasis" value="{{ isset($vehiculo->NumeroChasis)?$vehiculo->NumeroChasis:old('NumeroChasis') }}">
                                                                {!! $errors->first('NumeroChasis','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="from-group">
                                                                <!--<label for="Combustible" class="control-label">{{ 'Combustible' }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('Combustible')?'is-invalid':'' }}" name="Combustible" id="Combustible" value="{{ isset($vehiculo->Combustible)?$vehiculo->Combustible:old('Combustible') }}">
                                                                {!! $errors->first('Combustible','<div class="invalid-feedback">:message</div>') !!}-->
                                                                <label for="Combustible" class="control-label">{{ 'Combustible' }}</label>
                                                                <select id="id_combustible" name="id_combustible" class="form-control">
                                                                    <option>------Seleccionar Combustible------</option>
                                                                    @foreach($datos1 as $combustible)
                                                                    <option value="{{ $combustible['id_combustible'] }}">{{ $combustible['NombreCombustible'] }}</option>
                                                                    @endforeach
                                                                </select>
                                            </div>

                                            <input id="Estado" name="Estado" type="hidden" value="Disponible">

                                            <div class="from-group">
                                                <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                @if(isset($vehiculo->Foto))
                                                <br>
                                                    <img id="vistaPrevia" class="img-thumbnail img-fluid" src="{{ asset('storage'. '/' . $vehiculo->Foto) }}" alt="" width="300">
                                                </br>
                                                @else
                                                <br>
                                                    <img id="vistaPrevia" class="img-thumbnail img-fluid" src="" alt="" width="300">
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