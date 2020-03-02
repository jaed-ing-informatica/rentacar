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
    <a href="{{ url('kilometros/create') }}" class="btn btn-secondary">Agregar Kilometros</a>
    <br/>
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Entrada</th> 
                    <th>Salida</th> 
                    <th>Tipo - Marca - Modelo - Patente</th>
                    <th>Nombre Cliente</th>
                    <th>Nombre Conductor</th>
                    <th>Configuraciones</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($data as $datas)
                            <td>{{ $loop->iteration }}</td>
                            
                            <tr>    
                            
                            <td></td>
                            <td></td>
                            
                            <td></td>
                            <td>{{ $datas->TipoVehiculo  }}{{ $datas->Marca }} {{ $datas->Modelo }}  {{ $datas->Patente }}</td>
                            <td> {{ $datas->NombreCliente }} {{ $datas->ApellidoPaterno }} {{ $datas->ApellidoMaterno }}</td>
                            <td>{{ $datas->NombreConductor }}</td>
                            <td>
                                <a href="{{ url('/kilometros') }}" class="btn btn-success btn-block">Entrega</a>
                                <a href="{{ url('/kilometros') }}" class="btn btn-primary btn-block">Recepcion</a>
                            </td>
                        </tr>
                @endforeach                  
            </tbody>
        </table>


@endsection
