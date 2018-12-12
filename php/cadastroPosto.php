<?php 
session_start();

if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
	
	require_once('conect.php');
	require_once('function.php');
	
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];//ok
	$NumeroRua = intval($_POST['NumeroRua']);//ok
	$nome = $_POST['nome'];//ok
	$cep = $_POST['cep'];//ok
	
	$var = cadastroPosto($pdo,$cidade,$endereco,$NumeroRua,$nome,$cep);
	
	echo json_encode($var);

} else {
	session_destroy();
	header("location:../index.php");
}
?>