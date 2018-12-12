<?php 
session_start();

if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
	
	require_once('conect.php');
	require_once('function.php');
	$id = $_POST['id_user'];
	$senha = md5($_POST['senha']);
	$_SESSION['senha']=$senha;
	$res = keygen($id,$senha,$pdo);

	echo json_encode($res);
	
} else {
	session_destroy();
	header("location:../../../index.php");
}
?>