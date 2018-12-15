<?php
	session_start();
	if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once('conect.php');
		require_once('function.php');
		$crm = intval($_POST['crm']);
		$esp = $_POST['esp'];
		$cep = $_POST['cep'];
		$rua = $_POST['rua'];
		$num = intval($_POST['num']);
		$posto = intval($_POST['posto']);
		$id = intval($_SESSION['id_user']);
		$img = $_POST['url'];		
		$var = updateMedico($pdo,$crm,$esp,$cep,$rua,$num,$posto,$id,$img);

		echo json_encode($var);

	}else{
		session_destroy();
		die();
	}
?>