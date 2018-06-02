
    </div><div class="container">
	<h1>Administración De Tipos De Empleados</h1>
	<div class="container">
		<div class="col-xs-12 col-md-8">
			<form method="post">
			
			Tipo De Empleado Para Agregar:
			<input type="text" class="form-control" name="nombre">
			
			<br><br>
			<input type="submit" class="btn btn-primary" name="agregar" value="Agregar">
			</form>		
			<br>
		</div>

	</div>
</div>	


<?php 
require_once('cn.php');
if(isset($_POST["agregar"])){ 
    $nombre=$_POST["nombre"]; 

    $sql="insert into tipo(idtipo,nombre_tipo) values('','$nombre')"; 

    $conn->query($sql);     
}elseif(isset($_POST["del"])){ 
    if(isset($_POST["del"])){ 
        $tipo=$_POST["eliminar"]; 
        foreach($tipo as $idtipo){ 
            $sql="delete from tipo where idtipo='$idtipo'"; 
            $conn->query($sql);     
        } 
    }else{ 
        echo "Seleccione un tipo de empleado a eliminar"; 
    } 
     
} 
 ?>

     

 <div class="container "><h3>Consulta De Tipos De Empleado</h3>    
<form method="POST">

    <div class="table-responsive">
        
   
<table class="table table-striped table-hover table-bordered width="600">               
 <tr class="table-active"> 
    <td></td> 
    <td>IdTipo</td> 
    <td>Nombre</td> 
     <td></td>  
 </tr>    
     
<?php     
$sql="select * from tipo"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<input type=checkbox name=eliminar[] value='$fila[idtipo]'>"; 
    echo "<td width='1%'>$fila[idtipo]"; 
    echo "<td>$fila[nombre_tipo]"; 
    echo "<td width='5%'>"; 
   echo "<a href='?pag=updateEmpleado.php&idpro=$fila[idtipo]'>"; 
    echo "<img src='image/actualizar2.ico' width=30 heigth=30></a>";         
} 
?>       
<tr> 
    <td colspan="10" align='center'> 
      <input type="submit" name="del" value='Eliminar Tipo De Empleado' class="btn btn-info">                               
    </td>                 
  </tr>    
 </table>     
 </div>
     
</form>
</div>  
<br><br>   