<?php
	session_start();
	if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once('conect.php');
		require_once('function.php');
		$nome = $_POST['nome'];
		$var = verificaPosto($pdo,$nome);

		echo json_encode($var);

	}else{
		session_destroy();
		die();
	}
	

?>