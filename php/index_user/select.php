<?php 
	session_start();
	require_once('../conect.php');
	require_once('../function.php');

	if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user']) && isset($_SESSION['senha']) && !empty($_SESSION['senha']) && isset($_SESSION['email']) && !empty($_SESSION['email'])){
		$id_user = $_SESSION['id_user'];
		$tipo = selectTipo($id_user,$pdo);
		$etapa = $tipo['hash'];
		switch ($tipo['tipo']) {
					case 1:
						if ($etapa == md5("Active")) {
							header("location: medic/index.php");
						}else{
							header("location: first_acess.php");
						}
						break;
					case 2:
						if ($etapa == md5('Active')) {
							header("location: user/index.php");
						}else{
							header("location: first_acess.php");
						}
						break;
					case 3:
						if ($etapa == md5('Active')) {
							header("location: admin/index.php");
						}else{
							header("location: first_acess.php");
						}
						break;
				}
	} else {
		session_destroy();
		header("location:../../index.php");
	}

?>