
<div class="container">
<section class="main container">
    <div class="row">
        <section class="posts col-md-9" >
            <div class="miga-de-pan">
                <ol class="breadcrumb">
                    <li><a href="?pg=adminTipos.php"><h5>Agregar Tipos De Empleado</h5></a></li>
                </ol>
            </div>
        </section>
    </div>
    </div><div class="container">
	<h1>Administración De Empleados</h1>
	<div class="container">
		<div class="col-xs-12 col-md-8">
			<form method="post">
			   <td ><?php     
        require_once('cn.php');
        echo "Cargo:";
          $sql="select nombre_tipo,idtipo from tipo"; 
          $conn->query($sql);
         
          $rs=$conn->query($sql); 

          echo "<select name='idtipo' class='form-control'> ";      
          while($fila=$rs->fetch_assoc()){ 

          echo " <option value=$fila[idtipo]>$fila[nombre_tipo]</option>";           
} 

           echo "</select>"; 
           ?> 
         </td> 
			Nombres del empleado:
			<input type="text" class="form-control" name="nombre" placeholder="Nombres Del Empleado" required>
			
			Apellidos del empleado:
			<input type="text" class="form-control" name="apellido" placeholder="Apellidos Del Empleado" required>
		
			Cargo:
			<input type="text" class="form-control" name="cargo" placeholder="Cargo Del Empleado" required>

      Usuario:
      <input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre de Usuario" required>

      Contraseña:
      <input type="password" class="form-control" name="clave" placeholder="Ingrese una Contraseña" required>

      Confirmación de Contraseña:
      <input type="password" class="form-control" name="clave2" placeholder="Ingrese de nuevo su Contraseña" required><br>
			<input type="submit" class="btn btn-primary" name="agregar" value="Agregar">
			</form>		
			<br><br>	
		</div>

	</div>
</div>	


<?php 
require_once('cn.php');
if(isset($_POST["agregar"])){ 
    $idtipo=$_POST["idtipo"]; 
    $nombre=$_POST["nombre"]; 
    $apellido=$_POST["apellido"]; 
    $cargo=$_POST["cargo"];
    $nombre_usuario=$_POST["nombre_usuario"];
    $clave=$_POST["clave"];
    $clave2=$_POST["clave2"];

    $contrae=md5($clave);
    $contraEn=md5($clave2);
    if ($contrae==$contraEn) {
        $sql="insert into empleado(idempleado,idtipo,nombre_empleado,apellido_empleado,cargo,nombre_usuario,clave) values('','$idtipo','$nombre','$apellido','$cargo','$nombre_usuario','$contrae')";
    }else{
      echo "La contraseña que usted ingreso no coincide vuleva a introducirla!!!";

    }


    $conn->query($sql);     
}elseif(isset($_POST["del"])){ 
    if(isset($_POST["del"])){ 
        $empleado=$_POST["eliminar"]; 
        foreach($empleado as $idemple){ 
            $sql="delete from empleado where idempleado='$idemple'"; 
            $conn->query($sql);     
        } 
    }else{ 
        echo "Seleccione un empleado a eliminar"; 
    } 
     
} 
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
    echo "<input type=checkbox name=eliminar[] value='$fila[idempleado]'>"; 
    echo "<td width='1%'>$fila[idempleado]"; 
    echo "<td width='1%'>$fila[idtipo]"; 
    echo "<td>$fila[nombre_empleado]"; 
    echo "<td>$fila[apellido_empleado]";
    echo "<td>$fila[cargo]"; 
    echo "<td width='5%'>"; 
   echo "<a href='?pag=updateEmpleado.php&idpro=$fila[idempleado]'>"; 
    echo "<img src='image/actualizar2.ico' width=30 heigth=30></a>";         
} 
?>       
<tr> 
    <td colspan="10" align='center'> 
      <input type="submit" name="del" value='Eliminar Empleado' class="btn btn-warning">                               
    </td>                 
  </tr>    
 </table>     
 </div>
      
 </form> 
</div> 
<br><br>    <br><br>    