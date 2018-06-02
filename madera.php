<?php 
@session_start();
if (isset($_POST['cerrar'])) {
	unset($_SESSION['admin']);
	echo "<script>
	location.href='index.php';</script>";
}
 ?>
<div class='color'>
				<div class=container>
					<div class='row'>
						<div class='card col-md-4'>
									<img src='image/Productos/Madera/chinero.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Chinero
										</h5>
										<p class='card-text'>
											Chinero fabricado con madera de la mejor calidad
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Madera/gabeteroCasita.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Gabetero
										</h5>
										<p class='card-text'>
											Fabricado con madera y con una estructura de gabetas
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Madera/gabeteroMadera.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Gabetero de Madera
										</h5>
										<p class='card-text'>
											Su material principal es madera de cedro
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Madera/jugueteraMedia.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Juguetera
										</h5>
										<p class='card-text'>
											Estructura de una forma mediana para espacios no muy amplios
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Madera/modulo.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Modulo
										</h5>
										<p class='card-text'>
											Fabricado con madera y de de buena calidad
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Madera/roperoMade.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Ropero
										</h5>
										<p class='card-text'>
											Ropero hecho con madera de pino y con un estilo lujoso

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
					</div>
		
				</div>
				<br><br><br>
				
			</div>
			

