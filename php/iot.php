<?php
	session_start();
	if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		require_once('conect.php');
		require_once('function.php');
		$id = $_POST['cliente_id'];
		$var = verificaDevice($id,$pdo);

		echo json_encode($var);

	}else{
		session_destroy();
		die();
	}
	

?>