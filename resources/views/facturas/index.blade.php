
@extends('layouts.admin')
@section('content')



<div class="card">
<title>Rentacar : Sistema facturación</title>


<div class="container">		
<h2 class="title">Sistema de facturación</h2>
	  
<table id="data-table" class="table table-condensed table-striped">
<thead>
  <tr>
    <th width="7%">Fac. No.</th>
    
    <th width="35%">Cliente</th>
    <th width="15%">Factura Total</th>
    <th width="3%"></th>
    <th width="3%"></th>
    <th width="3%"></th>
    <th width="3%">Opciones</th>
  </tr>
</thead>
	

@foreach($facturas as $invoiceDetails)

 
  <tr>
     <td>{{ $loop->iteration }}</td>
      
    <td>{{ $invoiceDetails->FacturaNumero }}</td>
    <td>{{ $invoiceDetails->EmpresaNombre }}</td>
    <td>{{ $invoiceDetails->FacturaTotal }}</td>
    <td><a href="{{ url('print_invoice/' .$invoiceDetails->order_id) }}" title="Imprimir Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-print"></span></div></a></td>
    <td><a href="{{ url('edit_invoice/' .$invoiceDetails->order_id) }}"  title="Editar Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></div></a></td>
    <td><a href="#" id= "{{ $invoiceDetails->order_id }}" class="deleteInvoice"  title="Borrar Factura"><div class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></div></a></td>
 </tr>
@endforeach()
</table>	
</div>	

</div>
@endsection