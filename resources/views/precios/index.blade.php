@extends('layouts.admin')
@section('content')

<div class="">
    @if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
    {{
            Session::get('Mensaje')
    }}
    </div>
    @endif

<div class="col-md-12">
    <div class="card-panel">
        <div class="card-header">
            <a href="/precios/create" class="btn btn-md btn-success">Agregar Precios</a>
            <a href="/vehiculos/create" class="btn btn-md btn-success">Agregar Vehiculos</a>
            <a href="/clientes/create" class="btn btn-md btn-success">Agregar Clientes</a>

        </div>
        <div class="card-body">
            <h4>Lista de Precios</h4>
        <table class="table table-hover">
           <tr>
               <th>ID</th>
               <th>Patente</th>
              
            <th>Precio Diario</th>
            <th>Precio Semanal</th>
            <th>Precio Quincenal</th>
            <th>Precio Mensual</th>

            <th>Valor Neto</th>   
            <th>Valor IVA</th>
            <th>Valor Total</th>
          
            <th>Opciones</th>
        </tr> 
        <!--foreach-->
        <!-- tipo mantenimiento PREVENTIVO, CORRECTIVO, KILOMETRAJE-->
       
        <tr>
            @foreach($valores as $valor)
            <td>{{ $loop->iteration }}</td>
                <td>{{$valor->Patente}}</td>
                
                <td>{{$valor->PrecioDiario}}</td>
                <td>{{$valor->PrecioSemanal}}</td>
                <td>{{$valor->ValorQuincenal}}</td>
                <td>{{$valor->ValorMensual}}</td>

                <td>{{$valor->ValorNeto}}</td>
                <td>{{$valor->ValorIVA}}</td>
                <td>{{$valor->ValorTotal}}</td>
            
            <td><button class="btn btn-lg"><b>Seleccionar</button></td>
                @endforeach
        </tr>
        
        <!--endforeach-->

        </table>
        {{ $valores->links() }}
    </div>
</div>


</div>



</div>

@endsection()