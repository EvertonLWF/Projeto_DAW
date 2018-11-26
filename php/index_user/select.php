<?php 
	session_start();
	require_once('../conect.php');
	require_once('../function.php');

	if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
		$id_user = $_SESSION['id_user'];
		$tipo = selectTipo($id_user,$pdo);
		$etapa = $_SESSION['etapa'];
		var_dump($tipo);
		switch ($tipo['tipo']) {
					case 1:
						if ($etapa == null) {
							header("location: medic/index.php?etapa=0");
						}else{
							header("location: medic/index.php?etapa=1");
						}
						break;
					case 2:
						header("location: user/index.php");
						break;
					case 3:
						header("location: admin/index.php");
						break;
				}
	} else {
		session_destroy();
		header("location:../../index.php");
	}

?>