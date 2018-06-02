<?php 
require_once("cn.php");

if(isset($_POST["del"])){ 
    if(isset($_POST["del"])){ 
        $nombre_cliente=$_POST["eliminar"]; 
        foreach($nombre_cliente as $idcliente){ 
            $sql="delete from cliente where idcliente='$idcliente'"; 
            $conn->query($sql);     
        } 
    }else{ 
        echo "Seleccione una marca para eliminar"; 
    } 
     
} 
?> 

<div class="container"><h3>Consulta de Clientes</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">              
 <tr> 
    <td>&nbsp;</td> 
    <td>ID Cliente</td> 
    <td>nombre_cliente</td>
    <td>apellido_cliente</td> 
    <td>nombre_usuario</td> 
    <td>correo</td> 
    <td>clave</td> 
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from cliente"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<input type=checkbox name=eliminar[] value='$fila[idcliente]'>"; 
    echo "<td width='1%'>$fila[idcliente]"; 
    echo "<td>$fila[nombre_cliente]";
    echo "<td>$fila[apellido_cliente]"; 
    echo "<td>$fila[nombre_usuario]"; 
    echo "<td>$fila[correo]"; 
    echo "<td>$fila[clave]"; 
    echo "<td width='5%'>"; 
    echo "<a href='?pag=updateClientes.php&idmarca=$fila[nombre_cliente]'>"; 
    echo "<img src=''image/actualizar2.ico' width=30 heigth=30></a>";         
} 
?>                      
  <tr> 
    <td colspan="8" align='center'> 
      <input type="submit" name="del" value='Eliminar Cliente' class="btn btn-warning">                               
    </td>                 
  </tr>    
 </table>     
 </form> 
</div>
</div> 