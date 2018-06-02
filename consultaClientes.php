<?php
require_once("cn.php");
?>
<div class="container"><h3>Consulta de Clientes</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">               
 <tr> 
    <td>&nbsp;</td> 
    <td>ID Cliente</td> 
    <td>Nombre</td>
    <td>Apellido</td> 
    <td>Usuario</td> 
    <td>Correo</td> 
    <td>Clave</td>   
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from cliente"; 
$rs=$conn->query($sql); 

while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<td width='1%'>$fila[idcliente]"; 
    echo "<td>$fila[nombre_cliente]";
    echo "<td>$fila[apellido_cliente]"; 
    echo "<td>$fila[nombre_usuario]"; 
    echo "<td>$fila[correo]"; 
    echo "<td>$fila[clave]"; 
    echo "<td width='5%'>";   
} 
?>                         
 </table>     
 </form> 
</div>
</div>
<br><br><br>