<?php
	session_start();
	if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once('conect.php');
		require_once('function.php');
		$topico = $_POST['drop'];
			
		$var = dropD($pdo,$topico);

		echo json_encode($var);

	}else{
		session_destroy();
		die();
	}
?>