<?php 
	session_start();

	if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once("header.php");
		require_once("main.php");
		require_once("footer.php");
	} else {
		session_destroy();
		header("location:../../../index.php");
	}
	
	  
	
?>
	