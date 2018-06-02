<?php 
@session_start();
if (!(isset($_SESSION["usuario"]["nombre"]))) {
	header("Location:login.php")
 ?>