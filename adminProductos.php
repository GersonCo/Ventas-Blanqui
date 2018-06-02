<?php 
require_once("cn.php");

if(isset($_POST["agregar"])){ 
  $name="";
//Deschongue del fichero
//inicio proceso de subir fotografia
if (isset($_FILES["fichero"])){
  if (is_uploaded_file ($_FILES['fichero']['tmp_name'])){ 
    //nombre temporal del fichero
    $tmp_name = $_FILES["fichero"]["tmp_name"];
    //nombre completo del archivo
    //crear una carpeta con el nombre imagenes en la misma carpeta
    //donde se encuentra el archivo subir.php
    $name = "imagenes/".$_FILES["fichero"]["name"];
    //nombre del archivo
    $nombrearchivoSinExtension=substr($name,0,strpos($name, '.'));
    //extencion del archivo
    $extensionArchivo=substr(strrchr($name, '.'), 1);
    //pregunto si existe el ficheo
    if (is_file($name)) {
      $idUnico=time();//si existe le coloco un nombre unico
      $name = "imagenes/".$idUnico."-".$_FILES["fichero"]["name"];        
    }
    //funcion para mover el fichero a la ruta que especifiquemos
    move_uploaded_file($tmp_name,$name);
      //print("Fichero subido con exito <br>");
  }else{
      echo "No se ha podido subir el fichero\n";
  }
}
//Aqui termina lo del fichero

    $nombre_producto=$_POST["nombre_producto"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $stock_minimo=$_POST["stock_minimo"];
    $idcategoria=$_POST["idcategoria"];
    $idmarca=$_POST["idmarca"];
    $idempleado=$_POST["idempleado"];
    $existencia=$_POST["existencia"];


   $sql="insert into producto(nombre_producto,precio,descripcion,stock_minimo,idcategoria,idmarca,idempleado,foto,existencia) values('$nombre_producto','$precio','$descripcion','$stock_minimo','$idcategoria','$idmarca','$idempleado','$name','$existencia')"; 

    $conn->query($sql);     
}
elseif(isset($_POST["del"])){ 
    if(isset($_POST["del"])){ 
        $nombre_producto=$_POST["eliminar"]; 
        foreach($nombre_producto as $idproducto){ 
            $sql="delete from producto where idproducto='$idproducto'"; 
            $conn->query($sql);     
        } 
    }else{ 
        echo "Seleccione un producto para eliminar"; 
    } 
     
} 


?> 

<div class="container">
  <h1>Agregar Nuevo Producto Para Administrar</h1>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <form method="post" enctype="multipart/form-data">
      Producto:
      <input type="text" class="form-control" name="nombre_producto" placeholder="Ingrese el nombre del producto">
      Precio:
      <input type="number" class="form-control" name="precio" placeholder="Ingrese el precio del producto" min="1">
      
      Descripción:
      <textarea class="form-control" name="descripcion" placeholder="Ingrese una descripción del producto"></textarea>

      Existencias:
      <input type="number" class="form-control" name="existencia" placeholder="Ingrese la existencia de este producto" min="1">
    
      Stock Minímo:
      <input type="number" class="form-control" name="stock_minimo" placeholder="Ingrese el stock minimo de este producto" min="1">

      Categoría:
      <?php
      $sql='select nombre_categoria,idcategoria from categoria';

      $conn->query($sql);
      $rs=$conn->query($sql);

      echo "<select class='form-control' name='idcategoria'>";

      while($fila=$rs->fetch_assoc()){ 

        echo "<option value=$fila[idcategoria]>$fila[nombre_categoria]</option>";
}
      echo "</select>";
      ?>

      Marca:
      <?php
      $sql='select nombre_marca,idmarca from marca';

      $conn->query($sql);
      $rs=$conn->query($sql);

      echo "<select class='form-control' name='idmarca'>";

      while($fila=$rs->fetch_assoc()){ 

        echo "<option value=$fila[idmarca]>$fila[nombre_marca]</option>";
}
      echo "</select>";
      ?>

      Empleado:
      <?php
      $sql='select nombre_empleado,idempleado,apellido_empleado,cargo from empleado';

      $conn->query($sql);
      $rs=$conn->query($sql);

      echo "<select class='form-control' name='idempleado'>";

      while($fila=$rs->fetch_assoc()){ 

        echo "<option value=$fila[idempleado]>$fila[nombre_empleado],$fila[apellido_empleado]-($fila[cargo])</option>";
}
      echo "</select>";
      ?>

      Seleccione Imagen del Producto:
      <input type="file" class="form-control" name="fichero">
      <br>
      <input type="submit" class="btn btn-primary" name="agregar" value="Agregar Producto">
      </form>   
      <br><br>  
    </div>
  </div>
</div>  



<div class="container"><h3>Consulta de Productos</h3>  
<form method="post"> 

    <div class="table-responsive">   
<table  class="table table-striped table-hover table-bordered width='600' ">               
 <tr> 
    <td>&nbsp;</td> 
    <td>ID</td> 
    <td>Producto</td>
    <td>Precio</td> 
    <td>Descripción</td>
    <td>Existencia</td>    
    <td>Stock Minímo</td> 
    <td>Categoría</td> 
    <td>Marca</td> 
    <td>Empleado</td>  
    <td>Imagen</td>  
    <td>&nbsp;</td> 
 </tr>    
     
<?php     
$sql="select * from producto"; 
$rs=$conn->query($sql); 
while($fila=$rs->fetch_assoc()){ 
    echo "<tr>"; 
    echo "<td width='1%'>"; 
    echo "<input type=checkbox name=eliminar[] value='$fila[idproducto]'>"; 
    echo "<td width='1%'>$fila[idproducto]"; 
    echo "<td>$fila[nombre_producto]";
    echo "<td>$fila[precio]"; 
    echo "<td>$fila[descripcion]";
    echo "<td>$fila[existencia]"; 
    echo "<td>$fila[stock_minimo]"; 
    echo "<td>$fila[idcategoria]"; 
    echo "<td>$fila[idmarca]"; 
    echo "<td>$fila[idempleado]";
    echo "<td><img src='$fila[foto]' width='40px' heigth='40px'>"; 
    echo "<td width='5%'>"; 
    echo "<a href='?pag=updateProductos.php&idpro=$fila[idproducto]'>"; 
    echo "<img src='image/actualizar2.ico' width=30 heigth=30></a>";   
} 
?>                      
  <tr> 
    <td colspan="10" align='center'> 
      <input type="submit" name="del" value='Eliminar Productos' class="btn btn-warning">                               
    </td>                 
  </tr>    
 </table>     
 </form> 
</div>
</div>
<br><br><br>