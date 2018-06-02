<?php
require_once("cn.php");
?>
<div class="container"><h3>Consulta de Productos</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">               
 <tr> 
    <td>&nbsp;</td> 
    <td>ID</td> 
    <td>Producto</td>
    <td>Precio</td> 
    <td>Descripción</td> 
    <td>Stock Minímo</td> 
    <td>Categoría</td> 
    <td>Marca</td> 
    <td>Empleado</td>  
    <td>Imagen</td>  
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from producto"; 
$rs=$conn->query($sql); 

while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<td width='1%'>$fila[idproducto]"; 
    echo "<td>$fila[nombre_producto]";
    echo "<td>$fila[precio]"; 
    echo "<td>$fila[descripcion]"; 
    echo "<td>$fila[stock_minimo]"; 
    echo "<td>$fila[idcategoria]"; 
    echo "<td>$fila[idmarca]"; 
    echo "<td>$fila[idempleado]";
    echo "<td><img src='$fila[foto]' width='40px' heigth='40px'>"; 
    echo "<td width='5%'>";   
} 
?>                         
 </table>     
 </form> 
</div>
</div>
<br><br><br>