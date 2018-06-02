<?php 
@session_start();
if (isset($_SESSION['admin'])) {
	echo "<script>location.href='indexAdmin.php';</script>";
}else{
	echo "<script>location.href='usuario.php';</script>";
}

 ?>