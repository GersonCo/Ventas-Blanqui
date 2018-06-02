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
									<img src='image/Productos/Cocina/bateria.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Bateria 
										</h5>
										<p class='card-text'>
											Set de ollas para diferentes necesidades
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Cocina/caserola.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Caserolas
										</h5>
										<p class='card-text'>
											Set de cacerolas de la mejor calidad
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Cocina/cocinaMesa.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Cocina de Mesa
										</h5>
										<p class='card-text'>
											Cocina de bonito estilo y grandes capacidades
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Cocina/comal.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Comal
										</h5>
										<p class='card-text'>
											Para facilitar su trabajo de pupusera
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								
					</div>
		
				</div>
				<br><br><br>
				
			</div>
			
