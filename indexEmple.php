

<?php 
@session_start();
if (isset($_POST['cerrar'])) {
	unset($_SESSION['admin']);
	echo "<script>
	location.href='index.php';</script>";
}
 ?>

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
<body>
<!-- icono y nombre de la tienda -->
<header>
	<section class="jumbotron">
		<div class="container">
			<h1>Bienvenido A Variedades Blanqui</h1>
			<p>Lo mejor para tus compras&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning btn-lg hidden-xs hidden-sm" href="?pg=about.php" role="button">Acerca De Nosotros</a></p>

		</div>
	</section>
		<nav class="navbar navbar-expand-md navbar-light sticky-top navbar-static-top" style="background-color: black;/*  #E74C3C;*/" >
			<div class="navbar-brand" style="background-color: black; color:white; size: 20px;"><span><img src="image/shop.ico" width="50" height="50"></span>&nbsp;&nbsp;&nbsp;Variedades Blanqui&nbsp;&nbsp;&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu" style="background-color:white;"><span class="navbar-toggler-icon"></span>
			</button>
			<!-- icono y nombre de la tienda -->

			<!-- elementos del menu -->
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav">
					<li class="nav-item" class="active">
						<a href="indexAdmin.php" class="nav-link" style="color:white;">Inicio</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="dropdown" style="padding-top: 10px;" >
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" style="text-decoration: none;">Productos <span class="caret"></span></a>
						<ul class="dropdown-menu" style="background-color: black; color: white;">
							<li><a href="?pg=productos.php" style="text-decoration: none;">&nbsp;&nbsp;Plasticos&nbsp;&nbsp;</a></li>
								<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=textiles.php" style=" text-decoration: none;">&nbsp;&nbsp;Textiles&nbsp;&nbsp;</a></li>
									<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=electrodomesticos.php" style=" text-decoration: none;">&nbsp;&nbsp;Electrodomesticos&nbsp;&nbsp;</a></li>
									<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=metalicos.php" style=" text-decoration: none;">&nbsp;Metalicos&nbsp;&nbsp;</a></li>
									<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=madera.php" style=" text-decoration: none;">&nbsp;&nbsp;De Madera&nbsp;&nbsp;</a></li>
									<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=cocina.php" style=" text-decoration: none;">&nbsp;&nbsp;De Cocina&nbsp;&nbsp;</a></li>
						</ul>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					

					<li class="dropdown" style="padding-top: 10px;" >
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" style="text-decoration: none;">Mantenimiento <span class="caret"></span></a>
						<ul class="dropdown-menu" style="background-color: black; color: white;">
							<li><a href="?pg=adminMarcas.php" style="text-decoration: none;">&nbsp;&nbsp;Marcas&nbsp;&nbsp;</a></li>
							<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=adminCategorias.php" style=" text-decoration: none;">&nbsp;&nbsp;Categorias&nbsp;&nbsp;</a></li>
							<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=adminProductos.php" style="text-decoration: none;">&nbsp;&nbsp;Productos&nbsp;&nbsp;</a></li>
								<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=adminClientes.php" style=" text-decoration: none;">&nbsp;&nbsp;Clientes&nbsp;&nbsp;</a></li>
						</ul>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<li class="dropdown" style="padding-top: 10px;" >
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" style="text-decoration: none;">Consultas<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background-color: black; color: white;">
							<li><a href="?pg=consultaEmpleados.php" style="text-decoration: none;">&nbsp;&nbsp;Empleados&nbsp;&nbsp;</a></li>
							<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=consultaMarcas.php" style="text-decoration: none;">&nbsp;&nbsp;Marcas&nbsp;&nbsp;</a></li>
							<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=consultaCategorias.php" style=" text-decoration: none;">&nbsp;&nbsp;Categorias&nbsp;&nbsp;</a></li>
							<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=consultaProductos.php" style="text-decoration: none;">&nbsp;&nbsp;Productos&nbsp;&nbsp;</a></li>
								<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=consultaClientes.php" style=" text-decoration: none;">&nbsp;&nbsp;Clientes&nbsp;&nbsp;</a></li>
							<li class="divider"><hr style="background-color: white; height: 2px;"></li>
							<li><a href="?pg=consultaStock.php" style=" text-decoration: none;">&nbsp;&nbsp;Stock&nbsp;&nbsp;</a></li>
						</ul>
					</li>
					<li class="nav-item" class="active">
						<a href="?pg=cardex.php" class="nav-link" style="color:white;">Cardex</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item">
						<form method="post">
							<input type="submit" class="btn btn-warning" name="cerrar" value="Cerrar sesión">
						</form>
						
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</ul>
			</div>
			<!-- elementos del menu -->
		</nav>
		</header>
		<br>
		<div class="container" >
<section >
<div class="container">
<section class="main container">
	<div class="row">
		<section class="posts col-md-9" >
			<div class="miga-de-pan">
				<ol class="breadcrumb">
					<li><a href="#"><h5>Los Mejores Productos Al Mejor Precio</h5></a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="?pg=about.php"><h5>Más Acerca de Nosotros</h5></a></li>
				</ol>
			</div>
		</section>
	</div>
	</div>
</section>
</div>
			<!-- pagina inicio y variable php -->
			<?php 
			
			if (isset($_GET['pg'])) {
				include_once($_GET['pg']);
			}else{
				echo "<div class='color'>
				<div class=container>
					<div class='row'>
						<div class='card col-md-4'>
									<img src='image/electrodomesticos.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Electrodomesticos
										</h5>
										<p class='card-text'>
											Lo mejor para el hogar en electrodomesticos de la mejor calidad 
										</p>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/gabe8.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Productos Plasticos
										</h5>
										<p class='card-text'>
											Productos Plasticos de novedosos diseños y material de la mejor calidad
										</p>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/textiles.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Productos Textiles
										</h5>
										<p class='card-text'>
											Productos textiles fabricados con el mejor material para su comodidad
										</p>
									</div>
								</div>
					</div>
		
				</div>
				<br><br><br>
			</div>";
				
			}



			 ?>
			

	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Variedades Blanqui, todo lo relacionado con electrodómesticos, productos textiles, productos de madera y mucho más.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline text-rignt">
						<li><a href="#"><img src="image/face.png" height="40" width="40"></a></li>
						<li><a href="#"><img src="image/wats2.png" height="40" width="40"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.3.1.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>




</body>
</html>


