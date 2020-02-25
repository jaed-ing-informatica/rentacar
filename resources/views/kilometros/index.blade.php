@extends('layouts')
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
        
                @foreach($datos as $dato)
                  
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $dato->entrada }} </td>
                            <td> {{ $dato->salida }}</td>
                            <td> {{ $dato->TipoVehiculo }} | {{ $dato->Marca }} | {{ $dato->Modelo }} | {{ $dato->Patente }}</td>
                            <td> {{ $dato->NombreCliente }}  {{ $dato->ApellidoPaterno }}  {{ $dato->ApellidoMaterno }}</td>
                            <td> {{ $dato->NombreConductor }}</td>
                            <td>
                                <a href="{{ url('/kilometros') }}" class="btn btn-success btn-block">Entrega</a>
                                <a href="{{ url('/kilometros') }}" class="btn btn-primary btn-block">Recepcion</a>
                            </td>
                        </tr>
          
                

            @endforeach

            </tbody>

        </table>

{{ $kilometros->links() }}




@endsection
