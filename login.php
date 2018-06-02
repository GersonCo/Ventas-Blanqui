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
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<form action="acceso.php" method="POST">
				Usuario
			<input type="text" class="form-control" name="user" placeholder="Usuario">
			Contraseña
			<input type="password" class="form-control" name="pass" placeholder="Contraseña">
			<br>
			<input type="submit" class="btn btn-primary" name="login" value="Ingresar">
			</form>
			
		</div>
	</div>
</div>