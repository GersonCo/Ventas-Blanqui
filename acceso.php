<?php 
session_start(); 
include 'credenciales.php';
if(isset($_REQUEST["login"])){  	
 	$usuario=SQLsegura($_REQUEST["user"]); 
 	$contra=SQLsegura($_REQUEST["pass"]); 
 	$conexion = new mysqli(SERVIDOR,USUARIO,CONTRA,BASEDATOS);  	
 	$sql="select nombre_tipo from tipo where idtipo=(select idtipo from empleado where nombre_usuario='$usuario' and clave='$contra')"; 
 	$resultado= $conexion->query($sql);   
	
 	$cuantos = mysqli_num_rows($resultado);  	
 	if($cuantos==0){ 
 	 	header("Location:usuario.php"); 
 	} 
 	$fila = $resultado->fetch_array(MYSQLI_NUM); 
 	$nivel=$fila["0"];  	
 	if($nivel=="Administrador"){ 
 	 	$_SESSION["usuario"]["nombre"]=$usuario; 
 	 	$_SESSION["usuario"]["nivel"]=$nivel;  	 	
 	 	header("Location:indexAdmin.php"); 
 	}elseif($nivel=="Empleado"){ 
 	 	$_SESSION["usuario2"]["nombre"]=$usuario;  	 	
 	 	$_SESSION["usuario2"]["nivel"]=$nivel; 
 	 	header("Location:indexEmple.php"); 
 	}else{ 
 	 	header("Location:usuario.php"); 
 	} 
} 
if(isset($_REQUEST["cerrar"])){  	
	session_destroy();  	
	header("Location:usuario.php"); 
} 
function SQLsegura($strVar){
      //proteger banned, final, i

      $banned = array("select", "drop","|","'", ";", "--", "insert","delete", "xp_");
   
      $vowels = $banned;
      $no = str_replace($vowels, "", $strVar);
      //Print $no;

      $final = str_replace( "'","",$no);
      //return $final;

      return $no;
 }//fin funcion

?> 
