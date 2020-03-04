
@extends('layouts.admin')
@section('content')



<div class="card">
<title>Rentacar : Sistema facturación</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">

<div class="container">		
<h2 class="title">Sistema de facturación</h2>
	  
<table id="data-table" class="table table-condensed table-striped">
<thead>
  <tr>
    <th width="7%">Fac. No.</th>
    <th width="15%">Fecha Creación</th>
    <th width="35%">Cliente</th>
    <th width="15%">Factura Total</th>
    <th width="3%"></th>
    <th width="3%"></th>
    <th width="3%"></th>
  </tr>
</thead>
	

@foreach($datosFactura as $invoiceDetails)

 
  <tr>
     <td>{{ $loop->iteration }}</td>
      
    <td> {{ $invoiceDetails->order_receiver_name }}</td>
    <td>{{ $invoiceDetails->order_total_after_tax }}</td>
    <td><a href="{{ url('print_invoice/' .$invoiceDetails->order_id) }}" title="Imprimir Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-print"></span></div></a></td>
    <td><a href="{{ url('edit_invoice/' .$invoiceDetails->order_id) }}"  title="Editar Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></div></a></td>
    <td><a href="#" id= "{{ $invoiceDetails->order_id }}" class="deleteInvoice"  title="Borrar Factura"><div class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></div></a></td>
 </tr>
@endforeach()
</table>	
</div>	

</div>
@endsection