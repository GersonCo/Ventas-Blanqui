<?php
require_once("cn.php");
?>
<div class="container"><h3>Consulta de Categorías</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">             
 <tr> 
    <td>&nbsp;</td> 
    <td>ID</td> 
    <td>Categoria</td> 
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from categoria"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<td width='1%'>$fila[idcategoria]"; 
    echo "<td>$fila[nombre_categoria]"; 
    echo "<td width='5%'>";          
} 
?>                      

 </table>     
 </form>
 </div> 
</div>