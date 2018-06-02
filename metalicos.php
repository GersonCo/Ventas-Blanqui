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
									<img src='image/Productos/Metalicos/chineroMetalico.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Chinero
										</h5>
										<p class='card-text'>
											Chinero fabricado de metal
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/comedor4.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Comedor 4
										</h5>
										<p class='card-text'>
											Comedor para cuatro personas
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
									<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/comodero6.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Comedor 6
										</h5>
										<p class='card-text'>
											Comedor para 6 personas
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/jugueteraHierro.png' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Juguetera
										</h5>
										<p class='card-text'>
											Fabricada de metl y con un estilo innovador
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/mesedero.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Mesedero
										</h5>
										<p class='card-text'>
											Mesedero de metal enjuncado con plastico
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/percheroGabeta.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Perchero
										</h5>
										<p class='card-text'>
											Perchero adornado con gabetas para un estilo mas llamativo

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/percheroHierro.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Perchero de Metal
										</h5>
										<p class='card-text'>
											Fabricado de metal con un estilo llamativo
										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/planchadorMetal.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Planchador
										</h5>
										<p class='card-text'>
											Hecho de metal y facil de manejar

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
								<div class='card col-md-4'>
									<img src='image/Productos/Metalicos/trastero.jpg' width='400' height='250' class='img-responsive card-img-top img-thumbnail'>
									<div class='card-body'>
										<h5 class='card-title'>
											Trastero
										</h5>
										<p class='card-text'>
											Trastero de metal para colocar ordenadamente sus vajillas

										</p>
										<button class='btn btn-danger' name='cerrar' value=''>Agregar Al Carrito</button>
									</div>
								</div>
					</div>
		
				</div>
				<br><br><br>
				
			</div>
			
