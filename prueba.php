<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variedades Blanqui</title>
	<!-- favicon -->
	<link rel="icon" type="image/png" href="image/shop.png">
	<!-- favicon -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body background="image/img24.jpg">


<br><br><br><br><br><br><br><br><br>
<div class="container">

<fieldset class="fieldset">
<legend>Ingresar Al Sistema</legend>
	<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <form action="acceso.php" method="POST">
                Usuario
                <input type="text" class="form-control" name="user" placeholder="Usuario">
                Contraseña
                <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                <br>
                <input type="hidden" name="login" value="login">
                <input type="submit" class="btn btn-primary" name="login" value="Ingresar">
            </form>

        </div>
    </div>
</div><br><br><br><br><br><br><br><br>
<a class="btn btn-warning btn-lg hidden-xs hidden-sm" href="usuario.php" role="button">Regresar Al Menu</a>
</fieldset>
</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>




</body>
</html>