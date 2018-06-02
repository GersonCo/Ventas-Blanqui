<?php 
@session_start();
if (isset($_POST['cerrar'])) {
	unset($_SESSION['admin']);
	echo "<script>
	location.href='index.php';</script>";
}
 ?>

<?php 
@session_start();
if (isset($_POST['login'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	if ($user=='admin' && $pass=='admin') {
		$_SESSION['admin']=$user;
		echo "<script>location.href='indexAdmin.php';</script>";
	}
}

 ?>


<div class="container">
	<h1>Agregar Nuevo Usuario Para Administrar</h1>
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<form method="post">
			Ingrese Su Nombre
			<input type="text" class="form-control" name="nombre" placeholder="Nombres">
			Ingrese sus apellidos
			<input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
			
			Ingrese su correo electrónico:
			<input type="text" class="form-control" name="correo" placeholder="Correo electrónico">
		
			Ingrese su nombre de usuario:
			<input type="text" class="form-control" name="usu" placeholder="Nombre de usuario">
		
			Contraseña:
			<input type="text" class="form-control" name="clave" placeholder="Contraseña">
			<br>
			<input type="submit" class="btn btn-primary" name="login" value="Ingresar">
			</form>		
			<br><br>	
		</div>

	</div>
</div>	