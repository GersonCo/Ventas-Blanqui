<?php
require_once("cn.php");
?>
<div class="container "><h3>Stock de Productos</h3>   
 <form method="POST">

    <div class="table-responsive">
        
   
<table class="table table-striped table-hover table-bordered width="600">               
 <tr class="table-active"> 
    <td></td> 
    <td>ID del Producto</td>
    <td>Nombre del Producto</td> 
    <td>Stock</td> 
     <td></td>  
 </tr>    
     
<?php     
$sql="select idproducto, nombre_producto, stock_minimo from producto"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<input type=checkbox name=eliminar[] value='$fila[idproducto]'>"; 
    echo "<td width='1%'>$fila[idproducto]"; 
    echo "<td width='1%'>$fila[nombre_producto]"; 
    echo "<td>$fila[stock_minimo]";  
    echo "<td width='5%'>";          
} 
?>           
 </table>     
 </div>
      
 </form> 
</div> 
<br><br> 

<div class="container "><h3>Productos es Stock Minímo</h3>   
 <form method="POST">

    <div class="table-responsive">
        
   
<table class="table table-striped table-hover table-bordered width="600">               
 <tr class="table-active"> 
    <td></td> 
    <td>ID del Producto</td>
    <td>Nombre del Producto</td>
    <td>Existencia del Producto</td>  
    <td>Stock Minímo del Producto</td> 
     <td></td>  
 </tr>    
     
<?php     
$sql="select idproducto, nombre_producto, existencia, stock_minimo from producto where existencia<=stock_minimo order by nombre_producto"; 

$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<input type=checkbox name=eliminar[] value='$fila[idproducto]'>"; 
    echo "<td width='1%'>$fila[idproducto]"; 
    echo "<td width='1%'>$fila[nombre_producto]";
    echo "<td>$fila[existencia]";   
    echo "<td>$fila[stock_minimo]";  
    echo "<td width='5%'>";         
} 
?>          
 </table>
 </div>    
 </form> 
</div> 
<br><br>    <br><br> 
