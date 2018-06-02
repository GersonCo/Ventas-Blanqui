<?php 
require_once("cn.php");

if(isset($_POST["agregar"])){ 
    $nombre_marca=$_POST["nombre_marca"]; 
    $sql="insert into marca(nombre_marca) values('$nombre_marca')"; 
    $conn->query($sql);     
}
elseif(isset($_POST["del"])){ 
    if(isset($_POST["del"])){ 
        $nombre_marca=$_POST["eliminar"]; 
        foreach($nombre_marca as $idmarca){ 
            $sql="delete from marca where idmarca='$idmarca'"; 
            $conn->query($sql);     
        } 
    }else{ 
        echo "Seleccione una marca para eliminar"; 
    } 
     
} 


?> 
<div class="container">
  <h1>Agregar Nueva Marca Para Administrar</h1>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <form method="post">
      
      Marca:
      <input type="text" class="form-control" name="nombre_marca" placeholder="Ingrese el nombre de la marca para agregar">

      <br>
      <input type="submit" class="btn btn-primary" name="agregar" value="Agregar Marca">
      </form>   
      <br><br>  
    </div>
  </div>
</div>

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
    echo "<input type=checkbox name=eliminar[] value='$fila[idmarca]'>"; 
    echo "<td width='1%'>$fila[idmarca]"; 
    echo "<td>$fila[nombre_marca]"; 
    echo "<td width='5%'>"; 
    echo "<a href='?pag=updatemarcas.php&idmarca=$fila[nombre_marca]'>"; 
    echo "<img src=''image/actualizar2.ico' width=30 heigth=30></a>";         
} 
?>                      
  <tr> 
    <td colspan="4" align='center'> 
      <input type="submit" name="del" value='Eliminar Marca' class="btn btn-warning">                               
    </td>                 
  </tr>    
 </table>     
 </form> 
</div>
</div> 