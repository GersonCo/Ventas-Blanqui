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
									<img src='image/Productos/Plasticos/gabe8.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Gabetero
										</h5>
										<p class='card-text'>
											Gabetero de ocho puertas fabricado de plastico
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Plasticos/gabetero.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Gabetero
										</h5>
										<p class='card-text'>
											Cuenta con cinco gabetas disponible en diferentes colores
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Plasticos/ropero.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Ropero
										</h5>
										<p class='card-text'>
											Ropero de plastico de buena calidad
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Plasticos/silla.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Silla
										</h5>
										<p class='card-text'>
											Un buen articulo para descansar placenteramente
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Plasticos/sillaA.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Silla
										</h5>
										<p class='card-text'>
											Silla playera, pra disfrutar de sus buenas vacaciones
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Plasticos/trasteroPla.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Trastero
										</h5>
										<p class='card-text'>
											Trastero fabricado con plastico

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
					</div>
		
				</div>
				<br><br><br>
				
			</div>
			

