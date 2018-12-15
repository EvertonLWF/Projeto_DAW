<?php
	session_start();
	if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once('conect.php');
		require_once('function.php');
		$coren = intval($_POST['coren']);
		$cep = $_POST['cep'];
		$rua = $_POST['rua'];
		$num = intval($_POST['num']);
		$posto = intval($_POST['posto']);
		$id = intval($_SESSION['id_user']);
			
		$var = updateEnfermeiro($pdo,$coren,$cep,$rua,$num,$posto,$id);

		echo json_encode($var);

	}else{
		session_destroy();
		die();

	}
?>