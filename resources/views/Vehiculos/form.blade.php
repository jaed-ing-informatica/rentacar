

 
<div class="col-center col-md-12 col-xs-8 col-sm-6">
    <div class="container-fluid">
        <div class="row">


                <div class="col-md-3 col-xs-3 col-sm-3">
                    <div class="card text-white bg-primary mb-3" >
                        <div class="container-fluid text-left">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $Modo=='Crear' ? 'Agregar datos del propietario': 'Modificar datos del propietario' }}</h5>
                                
                                            <div class="input-group btn btn-block">
                                                                    <label for="Rut" class="control-label">{{ 'Rut Propietario' }}</label>
                                                                    <input type="text" class="form-control btn-info{{ $errors->has('RutPropietario')?'is-invalid':'' }}" name="RutPropietario" id="RutPropietario" value="{{ isset($vehiculo->RutPropietario)?$vehiculo->RutPropietario:old('RutPropietario') }}">
                                                                    {!! $errors->first('RutPropietario','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="input-group btn btn-block">
                                                                    <label for="NombrePropietario" class="control-label">{{ 'Nombre Propietario' }}</label>
                                                                    <input type="text" class="form-control btn-info{{ $errors->has('NombrePropietario')?'is-invalid':'' }}" name="NombrePropietario" id="NombrePropietario" value="{{ isset($vehiculo->NombrePropietario)?$vehiculo->NombrePropietario:old('NombrePropietario') }}">
                                                                    {!! $errors->first('NombrePropietario','<div class="invalid-feedback">:message</div>') !!}
                                            </div>

                                            <div class="input-group btn btn-block">
                                                                    <label for="DireccionPropietario" class="control-label">{{ 'Direccion Propietario' }}</label>
                                                                    <input type="text" class="form-control btn-info{{ $errors->has('DireccionPropietario')?'is-invalid':'' }}" name="DireccionPropietario" id="DireccionPropietario" value="{{ isset($vehiculo->DireccionPropietario)?$vehiculo->DireccionPropietario:old('DireccionPropietario') }}">
                                                                    {!! $errors->first('DireccionPropietario','<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
<!-- _________________________________fin datos propietarios_______________________________-->

                <div class="col-md-3 col-xs-3 col-sm-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="container-fluid text-left">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $Modo=='Crear' ? 'Agregar datos de los Valores': 'Modificar datos de los valores' }}</h5>
                                                        
                                                        <div class="input-group btn btn-block">
                                            
                                                                                <label for="PrecioDiarioRenta" class="control-label">{{ 'Precio Diario Renta' }}</label>
                                                                                <input type="text" class="form-control btn-info{{ $errors->has('PrecioDiarioRenta')?'is-invalid':'' }}" name="PrecioDiarioRenta" id="PrecioDiarioRenta" value="{{ isset($vehiculo->PrecioDiarioRenta)?$vehiculo->PrecioDiarioRenta:old('PrecioDiarioRenta') }}">
                                                                                {!! $errors->first('PrecioDiarioRenta','<div class="invalid-feedback">:message</div>') !!}
                                                        </div>

                                                        <div class="input-group btn btn-block">
                                                            
                                                                                <label for="PrecioMensualRenta" class="control-label">{{ 'Precio Mensual Renta' }}</label>
                                                                                <input type="text" class="form-control btn-info{{ $errors->has('PrecioMensualRenta')?'is-invalid':'' }}" name="PrecioMensualRenta" id="PrecioMensualRenta" value="{{ isset($vehiculo->PrecioMensualRenta)?$vehiculo->PrecioMensualRenta:old('PrecioMensualRenta') }}">
                                                                                {!! $errors->first('PrecioMensualRenta','<div class="invalid-feedback">:message</div>') !!}
                                                        </div>

                                                        <div class="input-group btn btn-block">
                                                            
                                                            <label for="PrecioSemanalRenta" class="control-label">{{ 'Precio Semanal Renta' }}</label>
                                                            <input type="text" class="form-control btn-info{{ $errors->has('PrecioSemanalRenta')?'is-invalid':'' }}" name="PrecioSemanalRenta" id="PrecioSemanalRenta" value="{{ isset($vehiculo->PrecioSemanalRenta)?$vehiculo->PrecioSemanalRenta:old('PrecioSemanalRenta') }}">
                                                            {!! $errors->first('PrecioSemanalRenta','<div class="invalid-feedback">:message</div>') !!}
                                                        </div>

                                                        <div class="input-group btn btn-block">
                                                                                
                                                                                <label for="PrecioQuincenalRenta" class="control-label">{{ 'Precio Quincenal Renta' }}</label>
                                                                                <input type="text" class="form-control btn-info{{ $errors->has('PrecioQuincenalRenta')?'is-invalid':'' }}" name="PrecioQuincenalRenta" id="PrecioQuincenalRenta" value="{{ isset($vehiculo->PrecioQuincenalRenta)?$vehiculo->PrecioQuincenalRenta:old('PrecioQuincenalRenta') }}">
                                                                                {!! $errors->first('PrecioQuincenalRenta','<div class="invalid-feedback">:message</div>') !!}
                                                        </div>
                                </div>
                                <br>
                        </div>
                    </div>
                </div>

<!-- ______________________________________fin datos precios_______________________________________-->


                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3" >
                        <div class="container-fluid text-left">
                            <div class="card-header">

                            </div>
                            <div class="card-body">

                                    <h5 class="card-title">{{ $Modo=='Crear' ? 'Agregar datos del Vehículo': 'Modificar datos del vehículo' }}</h5>
                                                        
                                    <div class="col-md-6">
                                                                <div class="input-group btn-block">
                                                                    
                                                                    <label for="Tipos" class="control-label">{{ 'Tipo Vehiculo' }}</label>
                                                                    <select id="id_tipo" name="Tipo" class="form-control btn btn-block btn-info" required>
                                                                        <option>------Seleccionar Tipo Vehículo------</option>
                                                                        @foreach($tipos as $tipo)
                                                                            <option value="{{ $tipo['Tipo'] }}">{{ $tipo['Tipo'] }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="input-group btn-block">
                                                                    
                                                                                        <label for="NumeroPuertas" class="control-label">{{ 'Numero Puertas' }}</label>
                                                                                        <input type="text" class="form-control btn-info{{ $errors->has('NumeroPuertas')?'is-invalid':'' }}" name="NumeroPuertas" id="NumeroPuertas" value="{{ isset($vehiculo->NumeroPuertas)?$vehiculo->NumeroPuertas:old('NumeroPuertas') }}">
                                                                                        {!! $errors->first('NumeroPuertas','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>

                                                                <div class="input-group btn-block">
                                                                    
                                                                                        <label for="NumeroAsientos" class="control-label">{{ 'Numero Asientos' }}</label>
                                                                                        <input type="text" class="form-control btn-info{{ $errors->has('NumeroAsientos')?'is-invalid':'' }}" name="NumeroAsientos" id="NumeroAsientos" value="{{ isset($vehiculo->NumeroAsientos)?$vehiculo->NumeroAsientos:old('NumeroAsientos') }}">
                                                                                        {!! $errors->first('NumeroAsientos','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>

                                                                <div class="input-group btn-block">
                                                                    
                                                                                        <label for="CapacidadMaleta" class="control-label">{{ 'Capacidad Maleta' }}</label>
                                                                                        <input type="text" class="form-control btn-info{{ $errors->has('CapacidadMaleta')?'is-invalid':'' }}" name="CapacidadMaleta" id="CapacidadMaleta" value="{{ isset($vehiculo->CapacidadMaleta)?$vehiculo->CapacidadMaleta:old('CapacidadMaleta') }}">
                                                                                        {!! $errors->first('CapacidadMaleta','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>
                                                                <div class="input-group btn-block">
                                                                                    
                                                                        <div class="input-group col-md-12">
                                                                            <div class="input-group-prepend">
                                                                                <label class="input-group-text" for="inputGroupSelect01">{{'Marca'}}</label>
                                                                            </div>
                                                                            <select name="marca" class="custom-select btn btn-block btn-info" id="marcas" required></select>
                                                                        </div>
                                        
                                                                </div>            

                                                                <div class="input-group btn-block">
                                                                        <div class="input-group col-md-12">
                                                                            <div class="input-group-prepend">
                                                                                <label class="input-group-text" for="inputGroupSelect01">{{'Modelo'}}</label>
                                                                            
                                                                            </div>
                                                                            <select name="modelo" class="custom-select btn btn-block btn-info" id="modelos" required></select>   
                                                                        </div>
                                                                                    
                                                                </div>
                                                                <br>

                                    </div>
                                    <div class="col-md-6">

                                                                <div class="input-group btn-block">
                                                                            
                                                                                                <label for="Descripcion" class="control-label">{{ 'Descripcion' }}</label>
                                                                                                <input type="text" class="form-control btn-info{{ $errors->has('Descripcion')?'is-invalid':'' }}" name="Descripcion" id="Descripcion" value="{{ isset($vehiculo->Descripcion)?$vehiculo->Descripcion:old('Descripcion') }}">
                                                                                                {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>
                                                                <div class="input-group btn-block">
                                                                                                <label for="Patente" class="control-label">{{ 'Patente' }}</label>
                                                                                                <input type="text" class="form-control btn-info{{ $errors->has('Patente')?'is-invalid':'' }}" name="Patente" id="Patente" value="{{ isset($vehiculo->Patente)?$vehiculo->Patente:old('Patente') }}">
                                                                                                {!! $errors->first('Patente','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>
                                                                
                                                                <div class="input-group btn-block">
                                                                                                <label for="Año" class="control-label">{{ 'Año' }}</label>
                                                                                                <input type="text" class="form-control btn-info{{ $errors->has('Año')?'is-invalid':'' }}" name="Año" id="Año" value="{{ isset($vehiculo->Año)?$vehiculo->Año:old('Año') }}">
                                                                                                {!! $errors->first('Año','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>

                                                                <div class="input-group btn-block">
                                                                                                <label for="Color" class="control-label">{{ 'Color' }}</label>
                                                                                                <input type="text" class="form-control btn-info{{ $errors->has('Color')?'is-invalid':'' }}" name="Color" id="Color" value="{{ isset($vehiculo->Color)?$vehiculo->Color:old('Color') }}">
                                                                                                {!! $errors->first('Color','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>

                                                                <div class="input-group btn-block">
                                                                                                <label for="NumeroChasis" class="control-label">{{ 'Numero Chasis' }}</label>
                                                                                                <input type="text" class="form-control btn-info{{ $errors->has('NumeroChasis')?'is-invalid':'' }}" name="NumeroChasis" id="NumeroChasis" value="{{ isset($vehiculo->NumeroChasis)?$vehiculo->NumeroChasis:old('NumeroChasis') }}">
                                                                                                {!! $errors->first('NumeroChasis','<div class="invalid-feedback">:message</div>') !!}
                                                                </div>

                                                                <div class="input-group btn-block">
                                                                                                <!--<label for="Combustible" class="control-label">{{ 'Combustible' }}</label>
                                                                                                <input type="text" class="form-control {{ $errors->has('Combustible')?'is-invalid':'' }}" name="Combustible" id="Combustible" value="{{ isset($vehiculo->Combustible)?$vehiculo->Combustible:old('Combustible') }}">
                                                                                                {!! $errors->first('Combustible','<div class="invalid-feedback">:message</div>') !!}-->
                                                                                                <label for="Combustible" class="control-label">{{ 'Combustible' }}</label>
                                                                                                <select id="id_combustible" name="id_combustible" class="form-control btn btn-block btn-info" required>
                                                                                                    <option>------Seleccionar Combustible------</option>
                                                                                                    @foreach($combustibles as $combustible)
                                                                                                    <option value="{{ $combustible['id_combustible'] }}">{{ $combustible['NombreCombustible'] }}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                </div>
                                                                <br>

                                    </div>
                            </div>
                            <br>
                            
                        </div>
                    </div>
                </div>

<!--fin datos vehiculos-->

                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="container-fluid text-left">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $Modo=='Crear' ? 'Agregar datos del la oficina': 'Modificar datos del propietario' }}</h5>
                                        <div class="input-group btn btn-block">
                                                                <label for="Oficina" class="control-label">{{ 'Oficina' }}</label>
                                                                <select id="id_oficina" name="id_oficina" class="form-control btn btn-block btn-info" required>
                                                                    <option>------Seleccionar Oficina------</option>
                                                                    @foreach($oficinas as $oficina)
                                                                    <option value="{{ $oficina['id_oficina'] }}">{{ $oficina['descripcion'] }}</option>
                                                                    @endforeach
                                                                </select>
                                        </div>
                                            
                                        
                                            <input id="Estado" name="Estado" type="hidden" value="Disponible">
                                        
                                        <div class="input-group btn btn-block">
                                                <label class="control-label {{ $errors->has('Foto')?'is-invalid':'' }}" for="Foto">{{ 'Foto' }}</label>
                                                @if(isset($vehiculo->Foto))
                                                <br>
                                                    <img id="vistaPrevia" class="img-thumbnail img-fluid btn-block" src="{{ asset('storage'. '/' . $vehiculo->Foto) }}" alt="">
                                                </br>
                                                @else
                                                <br>
                                                    <img id="vistaPrevia" class="img-thumbnail img-fluid btn-block btn-info" src="" alt="">
                                                </br>
                                                
                                                @endif
                                                <input type="file" class="form-control btn btn-info{{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" >
                                                {!! $errors->first('Foto','</div class="invalid-feedback">:message</div>') !!}
                                        </div>



                                            <!--botonnesss agregar y regresar-->

                                            <div class="col-center">
                                                <div class="input-group btn btn-block">
                                                    <input type="submit" class="form-control btn btn-warning" value="{{ $Modo=='Crear' ? 'Agregar':'Modificar' }}">
                                                </div>
                                            </div>
                                            <div class="col-center">
                                                <div class="input-group btn btn-block">
                                                    <a class="btn btn-primary btn-block" href="{{ url('vehiculos') }}">Regresar a Vehiculos</a>
                                                </div>
                                            </div>
                                            <!--fin de botones agregar y regresar-->
                                    </div>
                                <br>
                            </div>
                        </div>
                </div>
        
        </div>
    </div>
</div>




<!--<script>

    $('#marca').on('change',function(e){
        console.log(e);
        var id_marca = e.target.value;
//dd(id_marca);
        $('#modelo').empty();

        $.get('/ajax-modelo?id_marca=' + id_marca, function(data){

            $.each(data, function(form, modeloObj){

                $('#modelo').append('<option class="btn btn-block btn-primary" value="'+modeloObj.id_marca+'"> '+modeloObj.NombreModelo+'</option>');

            });
        });
    });
</script>-->