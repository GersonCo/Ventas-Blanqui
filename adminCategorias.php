

<?php 
require_once("cn.php");

if(isset($_POST["agregar"])){ 
    $nombre_categoria=$_POST["nombre_categoria"]; 
    $sql="insert into categoria(nombre_categoria) values('$nombre_categoria')"; 
    $conn->query($sql);     
}
elseif(isset($_POST["del"])){ 
    if(isset($_POST["del"])){ 
        $nombre_categoria=$_POST["eliminar"]; 
        foreach($nombre_categoria as $idcategoria){ 
            $sql="delete from categoria where idcategoria='$idcategoria'"; 
            $conn->query($sql);     
        } 
    }else{ 
        echo "Seleccione una categoria para eliminar"; 
    } 
     
} 


?> 
<div class="container">
  <h1>Agregar Nueva Categoría Para Administrar</h1>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <form method="post">

      Categoría:
      <input type="text" class="form-control" name="nombre_categoria" placeholder="Ingrese el nombre de la categoria para agregar">

      <br>
      <input type="submit" class="btn btn-primary" name="agregar" value="Agregar Categoría">
      </form>   
      <br><br>  
    </div>
  </div>
</div>

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
    echo "<input type=checkbox name=eliminar[] value='$fila[idcategoria]'>"; 
    echo "<td width='1%'>$fila[idcategoria]"; 
    echo "<td>$fila[nombre_categoria]"; 
    echo "<td width='5%'>"; 
    echo "<a href='?pag=updatecategorias.php&idcat=$fila[nombre_categoria]'>"; 
    echo "<img src=''image/actualizar2.ico' width=30 heigth=30></a>";         
} 
?>                      
  <tr> 
    <td colspan="4" align='center'> 
      <input type="submit" name="del" value='Eliminar Categoría' class="btn btn-warning">                               
    </td>                 
  </tr>    
 </table>     
 </form>
 </div> 
</div> 
<br><br><br>