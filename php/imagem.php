<?php
session_start();
if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
	include_once('config.php');
	$nome_arquivo = $_FILES['foto']['name'];
	$tamanho_arquivo = $_FILES['foto']['size'];
	$tipo_arquivo = $_FILES['foto']['type'];
	$arquivo_temp = $_FILES['foto']['tmp_name'];
	$local_img =$caminho."/".$nome_arquivo;
	//$_SESSION['img']=$local_img;
	



	if($sobrescrever=="nao" && file_exists($caminho."/".$nome_arquivo)){
		die("Arquivo já existe");
	}
	if($limitar_tam == "sim" && ($tamanho_arquivo > $tamanho)){
		die("Arquivo deve ter no maximo".$tamanho."bits");
	}
	$ext = strrchr($nome_arquivo,".");

	// if (($limitar_ext == "sim") && !in_array($ext,$exten_arq)){
	// 	die("Extensão de arquivo inválida para upload");
	// }

	move_uploaded_file($_FILES['foto']['tmp_name'],$local_img);

	echo json_encode($local_img);

}else{
	session_destroy();
	die();

}

?>