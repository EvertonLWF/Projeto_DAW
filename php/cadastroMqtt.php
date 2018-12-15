<?php 
session_start();

if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
	
	require_once('conect.php');
	require_once('function.php');
	$id = $_POST['cliente_id'];
	$topic =$_POST['topic'];
	$server =$_POST['server'];
	$port = intval($_POST['port']);
	$posto =intval($_POST['posto']);
	$var = cadastroMqtt($pdo,$id,$topic,$server,$port,$posto);
	
	echo json_encode($id);

} else {
	session_destroy();
	header("location:../index.php");
}
?>