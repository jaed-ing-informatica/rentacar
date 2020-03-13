@extends('layouts.admin')
@section('content')
<div class="table-responsive">
    <div class="table table-bordered table-striped">
        <thead>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Región</label>
                            
                        </div>
                        <select class="custom-select btn-block" id="regiones"></select>
                    </div>
                </td>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Comunas</label>
                            
                        </div>
                        <select class="custom-select btn-block" id="comunas"></select>   
                    </div>
                </td>
        </tbody>
    </div>
</div>
@endsection



  <!--  <label for="" class="control-label">{{ 'Marca' }}</label>
                                                                <select  name="marca" id="marca" class="form-control btn btn-block btn-primary">
                                                               
                                                                    <option>------Seleccionar Marca------</option>
                                                                  
                                                                  @foreach($marcas as $marca)
                                                                    <option value="{{ $marca }}">{{ $marca }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="" class="control-label">{{ 'Marca' }}</label>
                                                                {!! Form::select('marcas', $marcas, null, ['id'=>'marcasselect', 'class'=>'btn btn-block btn-primary']) !!}
                                                             -->


                                                              <!--   <label for="Modelo" class="control-label">{{ 'Modelo' }}</label>
                                                                <select class="form-control btn btn-block btn-primary" id="modelo"  name="modelo" >
                                           
                                                                    <option>------Seleccionar Modelo------</option>
                                                                    <option value=""></option>
                                                                     
                                                                </select>
                                                                @if($errors->has('id_modelo'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('id_modelo')}}</strong>
                                                                </span>
                                                                @endif-->
                                                             </div>