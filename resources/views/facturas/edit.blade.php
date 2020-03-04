<table class="table table-bordered table-hover" id="invoiceItem">	
<tr>
    <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
<th width="15%">Prod. No</th>
<th width="38%">Nombre Producto</th>
<th width="15%">Cantidad</th>
<th width="15%">Precio</th>								
<th width="15%">Total</th>
</tr>
<?php 
$count = 0;
foreach($invoiceItems as $invoiceItem){
    $count++;
?>								
<tr>
    <td><input class="itemRow" type="checkbox"></td>
    <td><input type="text" value="<?php echo $invoiceItem["item_code"]; ?>" name="productCode[]" id="productCode_<?php echo $count; ?>" class="form-control" autocomplete="off"></td>
    <td><input type="text" value="<?php echo $invoiceItem["item_name"]; ?>" name="productName[]" id="productName_<?php echo $count; ?>" class="form-control" autocomplete="off"></td>			
    <td><input type="number" value="<?php echo $invoiceItem["order_item_quantity"]; ?>" name="quantity[]" id="quantity_<?php echo $count; ?>" class="form-control quantity" autocomplete="off"></td>
    <td><input type="number" value="<?php echo $invoiceItem["order_item_price"]; ?>" name="price[]" id="price_<?php echo $count; ?>" class="form-control price" autocomplete="off"></td>
    <td><input type="number" value="<?php echo $invoiceItem["order_item_final_amount"]; ?>" name="total[]" id="total_<?php echo $count; ?>" class="form-control total" autocomplete="off"></td>
    <input type="hidden" value="<?php echo $invoiceItem['order_item_id']; ?>" class="form-control" name="itemId[]">
</tr>	
<?php } ?>		
</table>
<?php
include 'Invoice.php';
$invoice = new Invoice();
$invoice->updateInvoice($_POST);
?>