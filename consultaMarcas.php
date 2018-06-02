<?php
require_once("cn.php");
?>
<div class="container"><h3>Consulta de Marcas</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">              
 <tr> 
    <td>&nbsp;</td> 
    <td>ID</td> 
    <td>Marca</td> 
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from marca"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<td width='1%'>$fila[idmarca]"; 
    echo "<td>$fila[nombre_marca]"; 
    echo "<td width='5%'>";        
} 
?>                          
 </table>     
 </form> 
</div>
</div> 