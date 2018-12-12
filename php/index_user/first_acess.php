<?php 
	session_start();
	
	if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once("../cadastros/header_cadastro.php");
		require_once("../cadastros/main_cadastro.php");
		require_once("../cadastros/footer.php");
	}else{
		session_destroy();
		header("location:../../index.php");
	}
	

?>