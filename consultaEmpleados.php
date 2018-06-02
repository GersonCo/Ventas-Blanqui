<?php
require_once("cn.php");
?>
<div class="container "><h3>Consulta De Empleados</h3>   
 <form method="POST">

    <div class="table-responsive">
        
   
<table class="table table-striped table-hover table-bordered width="600">               
 <tr class="table-active"> 
    <td></td> 
    <td>IdEmpleado</td>
    <td>IdTipo</td> 
    <td>Nombres</td> 
    <td>Apellidos</td> 
    <td>Cargo Del Empleado</td>
     <td></td>  
 </tr>    
     
<?php     
$sql="select * from empleado"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<td width='1%'>$fila[idempleado]"; 
    echo "<td width='1%'>$fila[idtipo]"; 
    echo "<td>$fila[nombre_empleado]"; 
    echo "<td>$fila[apellido_empleado]";
    echo "<td>$fila[cargo]"; 
    echo "<td width='5%'>";         
} 
?>          
 </table>     
 </div>
      
 </form> 
</div> 
<br><br>    <br><br>  