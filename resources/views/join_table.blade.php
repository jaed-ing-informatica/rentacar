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
                            <label class="input-group-text" for="inputGroupSelect01">Comuna</label>
                            
                        </div>
                        <select class="custom-select btn-block" id="comunas"></select>   
                    </div>
                </td>
        </tbody>
    </div>
</div>
@endsection