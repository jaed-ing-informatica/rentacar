


<div class="col-center">
    <div class="container-fluid text-left">
        <div class="row mx-auto p-3">
            <div class="col-md-6 col-md-offset-5">
                <div class="card">
                    <div class="card-title">
                        <div class="col-md-6 col-md-offset-5">
                            <h3>{{ $Modo=='Crear' ? 'Agregar Kilometros': 'Modificar Kilometros' }}</h3></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-12 col-md-offset-5">
                                    <div class="from-group">
                                            <label for="Patente" class="control-label {{ $errors->has('Patente')?'is-invalid':'' }}">{{ 'Patente' }}</label>
                                            <input type="text" class="form-control"  name="Patente" id="Patente" value="{{ isset($kilometro->Patente)?$kilometro->Patente:old('Patente') }}">
                                            {!! $errors->first('Patente','<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="from-group">
                                            <label for="Entrada" class="control-label {{ $errors->has('Entrada')?'is-invalid':'' }}">{{ 'Entrada' }}</label>
                                            <input type="text" class="form-control" name="Entrada" id="Entrada" value="{{ isset($kilometro->Entrada)?$kilometro->Entrada:old('Entrada') }}">
                                            {!! $errors->first('Entrada','<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="from-group">
                                            <label for="Salida" class="control-label {{ $errors->has('Salida')?'is-invalid':'' }}">{{ 'Salida' }}</label>
                                            <input type="text" class="form-control" name="Salida" id="Salida" value="{{ isset($kilometro->Salida)?$kilometro->Salida:old('Salida') }}">
                                            {!! $errors->first('Salida','<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                   
                                    <div class="col-md-6 col-center">
                                        <div class="from-group">
                                        <input type="submit" class="form-control btn btn-warning" value="{{ $Modo=='Crear' ? 'Agregar':'Modificar' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-center">
                                        <div class="from-group">
                                        <a class="btn btn-primary" href="{{ url('kilometros') }}">Regresar</a>
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
</div>