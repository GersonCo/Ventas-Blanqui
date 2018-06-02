<?php 
@session_start();
if (isset($_POST['cerrar'])) {
	unset($_SESSION['admin']);
	echo "<script>
	location.href='index.php';</script>";
}
 ?>

<div class="container">
	<h1 class="about">Ubicación Del Local</h1>
 					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.48580206948!2d-89.68137206428419!3d13.991496291213808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62eb6b751465d3%3A0xa30e569bd4a26590!2sChalchuapa!5e0!3m2!1ses-419!2ssv!4v1526351679660" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<h1 class="about">Variedades Blanqui</h1>
		<h4>Variedades blanqui es una micro-empresa que se dedica
		a la venta y servicio de entrega de productos tales como:
		Electrodomesticos, plasticos y textiles entre otros.</h4>

		<h2 class="about">Misión</h2>
		<h4>Ofrecer un servicio innovador entregando la más completa variedad de muebles, electrodomésticos, productos textiles y de madera, con la mejor calidad y garantía, superando las expectativas de nuestros clientes.</h4>

		<h2 class="about">Visión</h2>
		<h4>Ser la empresa número uno en ventas de muebles y electrodomésticos de El Salvador, aumentando nuestra participación del mercado y mejorando nuestra propuesta de negocio.</h4>

		<h2 class="about">Valores</h2>
		<h4>Nuestros valores son el motor que impulsa nuestra empresa hacia la meta, permitiéndonos asumir con responsabilidad nuevos retos, ajustándonos a las normas y políticas que hacen la diferencia en el servicio que ofrecemos.</h4>

		<h2 class="about">Excelencia</h2>
		<h4>No nos basta con hacerlo bien, nuestro compromiso es ofrecer un servicio cada vez más innovador con el objetivo de superar las expectativas de nuestros clientes.</h4>

		<h2 class="about">Responsabilidad</h2>
		<h4>Estamos comprometidos a satisfacer las necesidades de nuestros clientes siendo para nosotros nuestra prioridad el cumplimiento.</h4>

		<h2 class="about">Calidad</h2>
		<h4>Entregamos confianza en cada una de nuestras ventas a través de la mejor calidad y experiencia de servicio.</h4>

		<br><br><br>

</div>