<?php
require_once("cn.php");
?>
<div class="container"><h3>CARDEX</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">               
 <tr> 
    <td>&nbsp;</td> 
    <td>ID</td> 
    <td>Producto</td>
    <td>Recibo</td> 
    <td>Precio</td> 
    <td>Transacción</td> 
    <td>Fecha</td> 
    <td>Cantidad</td>  
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from cardex"; 
$rs=$conn->query($sql); 

while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<input type=checkbox name=eliminar[] value='$fila[idcardex]'>"; 
    echo "<td width='1%'>$fila[idcardex]"; 
    echo "<td>$fila[idproducto]";
    echo "<td>$fila[idrecibo]"; 
    echo "<td>$fila[precio]"; 
    echo "<td>$fila[tipo_transaccion]"; 
    echo "<td>$fila[fecha]"; 
    echo "<td>$fila[cantidad]"; 
    echo "<td width='5%'>";    
} 
?>                          
 </table>     
 </form> 
</div>
</div>
<br><br><br>