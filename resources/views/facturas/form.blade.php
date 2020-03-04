@extends('layouts.admin')
@section('content')

	
<div class="container" style="min-height:500px;">
	
    <div class="container content-invoice">

        <div class="load-animate animated fadeInUp">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h2 class="title">Sistema de Facturación</h2>
                </div>		    		
            </div>
            <input id="currency" type="hidden" value="$">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h3>De:</h3>
                </div>      		
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
                    <h3>Para:</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" name="EmpresaNombre" id="EmpresaNombre" placeholder="Nombre de Empresa" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="EmpresaDireccion" id="EmpresaDireccion" placeholder="Su dirección"></textarea>
                    </div>
    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-bordered table-hover" id="invoiceItem">	
                        <tr>
                            <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
                            <th width="15%">Prod. No</th>
                            <th width="38%">Nombre Producto</th>
                            <th width="15%">Cantidad</th>
                            <th width="15%">Precio</th>								
                            <th width="15%">Total</th>
                        </tr>							
                        <tr>
                            <td><input class="itemRow" type="checkbox"></td>
                            <td><input type="text" name="ProductoNumero[]" id="ProductoNumero" class="form-control" autocomplete="off"></td>
                            <td><input type="text" name="ProductoNombre[]" id="ProductoNombre" class="form-control" autocomplete="off"></td>			
                            <td><input type="number" name="ProductoCantidad[]" id="ProductoCantidad" class="form-control quantity" autocomplete="off"></td>
                            <td><input type="number" name="ProductoPrecio[]" id="ProductoPrecio" class="form-control price" autocomplete="off"></td>
                            <td><input type="number" name="ProductoTotal[]" id="ProductoTotal" class="form-control total" autocomplete="off"></td>
                        </tr>						
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <button class="btn btn-danger delete" id="removeRows" type="button">- Borrar</button>
                    <button class="btn btn-success" id="addRows" type="button">+ Agregar Más</button>
                </div>
            </div>
            <div class="row">	
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>Notas: </h3>
                    <div class="form-group">
                        <textarea class="form-control txt" rows="5" name="Notas" id="Notas" placeholder="Notas"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <!--<input type="hidden" value="<?php // echo $_SESSION['userid']; ?>" class="form-control" name="userId">-->
                        <input data-loading-text="Guardando factura..." type="submit" name="invoice_btn" value="Guardar Factura" class="btn btn-success submit_btn invoice-save-btm">						
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <span class="form-inline">
                        <div class="form-group">
                            <label>Subtotal: &nbsp;</label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="" type="number" class="form-control" name="FacturaSubTotal" id="FacturaSubTotal" placeholder="Subtotal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tasa Impuesto: &nbsp;</label>
                            <div class="input-group">
                                <input value="" type="number" class="form-control" name="FacturaTasaimpuesto" id="FacturaTasaimpuesto" placeholder="Tasa de Impuestos">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Monto Inpuesto: &nbsp;</label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="" type="number" class="form-control" name="FacturaMontoImpuesto" id="FacturaMontoImpuesto" placeholder="Monto de Impuesto">
                            </div>
                        </div>							
                        <div class="form-group">
                            <label>Total: &nbsp;</label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="" type="number" class="form-control" name="FacturaTotal" id="FacturaTotal" placeholder="Total">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cantidad pagada: &nbsp;</label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="" type="number" class="form-control" name="FacturaCantidadPagada" id="FacturaCantidadPagada" placeholder="Cantidad pagada">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cantidad debida: &nbsp;</label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="" type="number" class="form-control" name="FacturaCantidadDebida" id="FacturaCantidadDebida" placeholder="Cantidad debida">
                            </div>
                        </div>
                    </span>
                    <button class="btn btn-success" type="submit">+ Agregar Más</button>
                </div>
            </div>
            <div class="clearfix"></div>		      	
        </div>		
    </div>
</div>	



@endsection