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
									<img src='image/Productos/Textiles/colchaHilo.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Colcha de Hilo
										</h5>
										<p class='card-text'>
											Fabricada con hilos de la mejor calidad
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Textiles/colchaFra.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Colcha de Franela
										</h5>
										<p class='card-text'>
											Fabricada con franela y disribuida por los mejores fabricantes
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Textiles/mantel4.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Mantel 4
										</h5>
										<p class='card-text'>
											Especialmente para mesas de cuatro personas
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Textiles/mantel6.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Mantel 6
										</h5>
										<p class='card-text'>
											Especialmente para mesas de seis personas
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Textiles/mosqui140.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Mosquitero 1.40
										</h5>
										<p class='card-text'>
											Con una longitud de 1.40 metros
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Textiles/mosqui2.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Mosquitero 2.0
										</h5>
										<p class='card-text'>
											Con una longitud de 2.0 metros
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Textiles/mosquitero.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Mosquitero Circular
										</h5>
										<p class='card-text'>
										    Cuenta con un estilo circular e innovador
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Textiles/set.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Set
										</h5>
										<p class='card-text'>
											Set para camas de menor dimensiones

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Textiles/set140.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Set 1.40
										</h5>
										<p class='card-text'>
											Set para camas de 1.40 metros

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
					</div>
		
				</div>
				<br><br><br>
				
			</div>
			

