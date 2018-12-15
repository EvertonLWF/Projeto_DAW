<?php
	session_start();
	if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once('conect.php');
		require_once('function.php');
		$cliente = $_POST['drop'];
				
		$var = dropD($pdo,$cliente);

		echo json_encode($var);

	}else{
		session_destroy();
		die();
	}
?>